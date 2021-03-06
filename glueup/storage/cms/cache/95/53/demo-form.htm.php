<?php 
class Cms5f56f4161cf5a267409954_abe34ce05eac38eb2faac51691036e2dClass extends Cms\Classes\PartialCode
{
public function submitHubSpot( $contact, $message, $type, $extraDatas = '' )
    {
        //Process a new form submission in HubSpot in order to create a new Contact.
        $hubspotutk = isset( $_COOKIE['hubspotutk'] ) ? $_COOKIE['hubspotutk'] : ''; //grab the cookie from the visitors browser.

        $hs_context = array(
            'hutk'      => $hubspotutk,
            'ipAddress' => $_SERVER['REMOTE_ADDR'],
            'pageUrl'   => $_SERVER['HTTP_REFERER'],
            'pageName'  => $type
        );
        $hs_context_json = json_encode($hs_context);

        //Need to populate these variable with values from the form.
        $str_post = 'message=' . urlencode( $message ) . '&hs_context=' . urlencode( $hs_context_json ); //Leave this one be

        foreach ( $contact as $key => $value ) {
            $key = $key == 'fullName' ? 'full_name'   : $key;
            $key = $key == 'phone'    ? 'mobilephone' : $key;
            $str_post .= '&' . $key . '=' . urlencode( $value );
        }

        if ( !empty( $extraDatas ) ) {
            foreach ( $extraDatas as $key => $value ) {
                $str_post .= '&' . $key . '=' . urlencode( $value );
            }
        }

        //replace the values in this URL with your portal ID and your form GUID
        $portalId = '4653500';
        $formGuid = 'ffddd43c-56e1-4781-ac08-d5232ebac8b3';
        $endpoint = 'https://forms.hubspot.com/uploads/form/v2/' . $portalId . '/' . $formGuid;
        $headers  = array( 'Content-Type' => 'application/x-www-form-urlencoded' );

        $messageFactory = MessageFactoryDiscovery::find();
        $request        = $messageFactory->createRequest( 'POST', $endpoint, $headers, $str_post );
        $response       = HttpClientDiscovery::find()->sendRequest( $request );
        return $response->getBody();
    }

    public function actionAjax()
    {
        if ( Router::isAjax() && isset( $_POST['action'] ) ) {
            $result = new EBrestResult();
            $data   = json_decode( $_POST['data'], true );

            switch ( $_POST['action'] ) {

                case 'hide-server-notice':
                    Session::set( 'hide-server-notice', true, 'safe' );
                    $result->addPartial( 'notice-bar', '<div/>' );
                    break;

                case 'requestLiveWallForm':
                case 'contact-usSubmit':
                    // Prepare Contact
                    $contact = array(
                        'fullName' => $data['full-name'],
                        'email'    => $data['email'],
                        'phone'    => isset( $data['phone'] ) ? $data['phone'] : '',
                    );

                    // Prepare Message
                    $message  =  $data['full-name'];
                    $message .= ' has a message!';
                    $message .= '<br/><br/>' . $data['message'];

                    // Prepare Subject
                    $isRequestCommunity = $_POST['action'] == 'requestLiveWallForm';
                    $subject            = $isRequestCommunity ? 'Request EventBank Community' : 'EventBank Client Inquiry';

                    // Send copy to HubSpot
                    $this->submitHubSpot( $contact, $message, $subject );

                    // Send Email
                    $recipients = $this->getRecipients( $isRequestCommunity );
                    $params     = array(
                        'languageCode' => Language::get(),
                        'subject'      => $subject,
                        'recipients'   => $recipients,
                        'contact'      => $contact,
                        'message'      => $message,
                    );

                    $result = InternalEmail::send( $params );
                    if ( $result->isSuccessful ) {
                        $result->value    = 'reset';
                        $result->redirect = $isRequestCommunity ? 'Modal::community-request-success' : 'Modal::contact-us-success';
                    }

                    Logger::error( array(
                        'server'      => '.' . Router::getTopLevelDomain(),
                        'contactInfo' => $contact,
                        'message'     => $message,
                        'recipients'  => $recipients,
                        'result'      => $result->result,
                    ), 'midend.contact-us' );
                    break;

                case 'schedule-emailSubmit':
                    $result->addPartial( 'Modal', View::renderPartial( '/solutions/_partials/schedule-email', array( 'filledValues' => $data ), true ) );
                    break;

                case ( preg_match( '/get-quote-*/', $_POST['action'] ) ? true: false ):
                case 'schedule-demo':
                    // Prepare Contact
                    $contact = array(
                        'fullName' => $data['full-name'],
                        'email'    => $data['work-email'],
                        'phone'    => $data['phone'],
                        'company'  => $data['organization'],
                    );

                    // Prepare Message
                    $message  = $data['full-name'];
                    $message .= ' from ' . $data['organization'];
                    $message .= $_POST['action'] == 'schedule-demo' ? ' would like a demo!' : ' requested a quotation for ';

                    $extraDatas = array();
                    if ( $_POST['action'] != 'schedule-demo' ) {
                        $message .= $data['solution-type'];
                        $message .= ' for ' . $data['package-type'] . ' package.';
                        $message .= '<br /><br />' . $data['full-name'] . ' also left a message with additional information:';
                        $message .= '<br /><br />' . $data['more-information'];

                        $extraDatas = array(
                            'solution_type' => $data['solution-type'],
                            'package_type'  => $data['package-type'],
                        );
                    }

                    if ( isset( $_POST[ 'currentPath' ] ) ) {
                         $message .= '<br/></br>' . $data['full-name'] . '\'s last viewed page was ' . Router::getAbsoluteUrl( $_POST[ 'currentPath' ] );
                    }

                    // Prepare Subject
                    $subject = $_POST['action'] == 'schedule-demo' ? 'Demo Requested' : 'Quote Requested';

                    // Send copy to HubSpot
                    $this->submitHubSpot( $contact, $message, $subject, $extraDatas );

                    // Send Email
                    $recipients = $this->getRecipients( true );
                    $params     = array(
                        'languageCode' => Language::get(),
                        'subject'      => $subject,
                        'recipients'   => $recipients,
                        'contact'      => $contact,
                        'message'      => $message,
                    );

                    $result = InternalEmail::send( $params );
                    if ( $result->isSuccessful ) {
                        $result->redirect = $_POST['action'] == 'schedule-demo' ? 'Modal::schedule-demo-success' : 'Modal::get-quote-success';
                    }

                    Logger::error( array(
                        'server'      => '.' . Router::getTopLevelDomain(),
                        'contactInfo' => array(
                            'language' => Language::get(),
                            'country'  => User::getCountryByIP(),
                            'fullName' => $data['full-name'],
                            'email'    => $data['work-email'],
                            'phone'    => $data['phone'],
                            'company'  => $data['organization'],
                        ),
                        'recipients' => $recipients,
                        'result'     => $result->result,
                    ), 'midend.demo-request' );
                    break;

                case 'StartSignupSubmit':
                    $result->code     = 200;
                    $result->redirect = ( isset( $data['type']['code'] ) && $data['type']['code'] == 'attendee' )
                        ? '/register/account/' : '/register/organization/';
                    break;

                case 'subscription':
                    $subscriptionListIds = array();
                    foreach ( $data as $key => $value ) {
                        if ( strpos( $key, 'subscription_' ) !== false && $value ) {
                            $subscriptionListIds[] = str_replace( 'subscription_', '', $key );
                        }
                    }
                    $actor = array(
                        'email'         => $data['work-email'],
                        'firstName'     => $data['firstname'],
                        'lastName'      => $data['lastname'],
                    );

                    $result = EmailSubscription::subscribeEmail( $subscriptionListIds, $actor, '', false, Server::getEventBankOrgId() );

                    if ( $result->code == 200 ) {
                        $result->redirect = 'Modal::subscription-success';
                    }
                    break;

            }

            echo json_encode( $result->result );
        }
    }
}
