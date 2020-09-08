<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/glueup/themes/glueup/pages/solutions/event-management-suite.htm */
class __TwigTemplate_3a47065f2c9eca7e632e1cf7c268eb51d0ca52a325c3e5a02ce1aec785d8f768 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header id=\"hero\" class=\"\">
";
        // line 3
        echo "        <div class=\"container paygage-hero-container\">
            <div class=\"row flex-row-reverse\">
                 <div class=\"col-md-6 hero align-self-center text-left\">
                    <img src=\"";
        // line 6
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\"> ";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run <span class=\"line\"><ins>Successful</ins></span> Online & Offline Events"]);
        echo "</h1>
                       <h2 class=\"tagline\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, promote, and execute one or hundreds of online/offline events of any size, efficiently from start to finish with award-winning solution."]);
        echo " </h2><br>
                       ";
        // line 14
        echo "                        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/hero-email-cta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
                </div>
               
            </div>
        </div> 
</header>
";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("logos/logobar-events.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "
<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Save Time, Increase Engagement"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Increase productivity and simplify whole event operations from the very first idea to follow up with your attendees after the event – all while learning deep insights on every attendee."]);
        echo " </p>
                        </div>
                    </div>
            </div>
                <div class=\"col-lg-10 align-self-center mx-auto\">
                    <div class=\"services__accordion row flex-row-reverse\">
                            <div class=\"col-md-7 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"accordion__img desktop\">
                \t\t\t\t    <div id=\"tab1-bullet-img\" class=\"firstshow\">
                \t\t\t\t        <img class=\"feature-window desktop\" src=\"";
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t         
                \t\t\t\t    </div>
                \t\t\t\t    <div id=\"tab2-bullet-img\">
                \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 43
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-anywhere.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t      <img class=\"feature-window deskto\" src=\"";
        // line 46
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members-1.svg");
        echo "\" alt=\"chat\">
                    \t\t\t    </div>
                    \t\t\t    ";
        // line 51
        echo "                \t\t\t     </div>
                \t\t\t</div>
                \t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"services__accordion\">
                \t\t\t\t    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                                        <i class=\"icon-overview\"></i>
                                        <span>";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it all from one place"]);
        echo "</span>
                                        <div class=\"accordion__body firstshow \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ultimate event management toolkit that has everything you need to run successful events."]);
        echo "
                \t\t\t\t\t\t\t ";
        // line 60
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                        <i class=\"icon-mobile-check\"></i>
                                        <span>";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reach people where they are"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["One app for you to manage events from anywhere, and one app for your event community to stay connected."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 68
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                        <i class=\"icon-button\"></i>
                                        <span>";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it simple for everyone"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and all your audiences’s absolute comfort."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 76
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    
                                    </div>
                \t\t\t\t</div>
                \t\t\t</div>
                \t\t\t
                \t\t</div>
                </div>
            </div>
        </div>

</section>

";
        // line 92
        echo "

";
        // line 95
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 99
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-event-templates.svg");
        echo "\" alt=\"Glue Up helps you create events in a few clicks\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Setup"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 104
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ready, Set, Go.<br> That Easy"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 106
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easily create branded event pages optimized for maximum conversion, set up VIP and other tickets, offer Coupons or Special Pricing.  "]);
        echo "<br>
    \t\t\t\t\t\t     ";
        // line 107
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Choose payment options, and customize registration forms to collect the information you need automatically."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-publishing\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 114
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Website Builder & Blueprints"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-optimize\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 118
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium Branding Options"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-text-field\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 122
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Registration Forms"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-ticket\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 126
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Ticketing & Payments"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-translation-switch\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 130
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Multi-language Support"]);
        echo "</p>
                                    </div>
                                </div>
                                
                            </div>
                  </div>
                </div>
                
            </div>

        </div>
</section>
";
        // line 143
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 147
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-promote.svg");
        echo "\" alt=\"Glue Up helps you promote your events with custom invitations and email campaigns\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 151
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Marketing"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 152
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Promote Events in A Few Clicks"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 154
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline your email marketing and send newsletters, branded event invitations and other emails in few clicks or create your own campaigns using easy drag&drop or HTML editor."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-campaigns\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 161
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Branded Event Invitations"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 165
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automated Notifications"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-thumb-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 169
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Surveys"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 173
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Social Media Integrations"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-edit-update\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 177
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Drag & Drop Editor and Custom HTML"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            
                  </div>
                </div>
                
            </div>

        </div>

</section>
";
        // line 191
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Clients save up to <span class=\"line\"><ins>80%</ins></span> time on creating and promoting events with <span style=\"color:#0d62fe;\">Glue Up</span>."]);
        echo "</p>
                </div>
            </div>
        </div>
</section>
";
        // line 201
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 205
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-checkin.svg");
        echo "\" alt=\"Glue Up helps you manage your events\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 210
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage Your Events From Anywhere"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 212
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collect registrations, accept payments, facilitate smooth check-ins, and print badges onsite directly from your phone."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With the Manager App or from the platform, you can do so even at multiple events happening simultaneously."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-prev\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 219
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Available on all devices"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-filter\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 223
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom privacy settings"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-qr-code\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 227
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Built-in Ticket Scanner"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Live Engagement Analytics"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                  </div>
                </div>
                
            </div>

        </div>
</section>
";
        // line 243
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 247
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-engage.svg");
        echo "\" alt=\"Glue Up helps you and your audience to engage\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 251
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Engagement"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 252
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Help Business Happen at Your Events"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 254
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your attendees to create and share their own digital business cards, manage connections they make at events and effectively network with everyone no matter where they are."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invisible\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 261
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Private & Public Groups"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 265
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Media sharing"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 269
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1-on-1 Direct Chat"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 273
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Business Cards Exchange"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-crm\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 277
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stored in Individual CRM"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            
                  </div>
                </div>
                
            </div>

        </div>

</section>
<section class=\"section pb-0\">
        <div class=\"container\">
            ";
        // line 293
        echo "            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 296
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customers <span class=\"line\"><ins>stick</ins></span> with Glue Up"]);
        echo "</h2>
                             ";
        // line 298
        echo "                        </div>
                    </div>
            </div>
            <div class=\"row\">
            ";
        // line 302
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['category'] = "event-management"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-case-study.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 303
        echo "                   
            </div>
        </div>
</section>

";
        // line 309
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 313
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-3some.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 317
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Attendee App"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 318
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Impress Attendees With A Free Event App"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 320
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make your events unforgettable and enable attendees to check-in using built-in event app"]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Give them access to all event information including agendas, speaker bios, event presentations, real-time updates, and ability to network before, during, and after the event."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 327
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1-on-1 Chats"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-presentation\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 331
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Agenda, Maps, Bios"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-documents\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 335
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Documents"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 339
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Business Card"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 343
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Room"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                  </div>
                </div>
                
            </div>

        </div>
</section>

";
        // line 356
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 360
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-webinars.svg");
        echo "\" alt=\"Glue Up Helps you monetize your webinars\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 364
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Events"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 365
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize & Enhance Your Webinars"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 367
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run webinars and other online events from an all-in-one platform."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" and provide your attendees with premium and seamless experience that gives them access to presentations, agenda, as well as ability to connect and chat with other attendees."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 374
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium Branding Options"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-sponsor\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 378
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sponsor Promotion"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 382
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Attendeee Chat"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-documents\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 386
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Webinar Documents"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 390
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Business Cards"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            
                  </div>
                </div>
                
            </div>

        </div>

</section>

<section class=\"section bg-grey\">
        <div class=\"container\">
            <div class=\"services__accordion row flex-row-reverse\">
                <div class=\"col-md-6 align-self-center right h-100\">
    \t\t\t\t<div class=\"accordion__img desktop\">
    \t\t\t\t    <div id=\"tab1-sellpoint-img\" class=\"firstshow\">
    \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 410
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event-management.svg");
        echo "\" alt=\"Best-in-class event management with Glue Up\">
    \t\t\t\t    </div>
    \t\t\t        <div id=\"tab2-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 413
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab3-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 416
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-emails.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab4-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 419
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-finance.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab5-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 422
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab6-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 425
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-surveys.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab7-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 428
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-mobile.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
    \t\t\t     </div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-5 mr-auto float-left align-self-center\">
    \t\t\t    <div class=\"pt-1 pb-3 pt-md-5 pb-md-5 ml-xs-0 my-3\">
                                     <small>";
        // line 434
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What's included?"]);
        echo "</small>
                                     <h2 class=\"mt-3 mb-2 position-relative content-title\">";
        // line 435
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event <br> Management Suite"]);
        echo " </h2>
                                     <p class=\"tagline pt-2 \">";
        // line 436
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one solution that helps you save time and focus on your mission while keeping everybody on the same page."]);
        echo " </p>
                    </div>
    \t\t\t\t<div class=\"services__accordion row bullets hideme ml-xs-0 pb-5 mb-5 h-100\" style=\"padding-left:-16px;\">
                        <div class=\"accordion sellpoint active small col text-center pointer px-0 pl-1\" tab-name=\"tab1-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-events\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 441
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab2-sellpoint\">
                             <i class=\"sellpoint-item align-middle icon-crm\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 445
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab3-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-email-campaigns\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 449
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab4-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-payments\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 453
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab5-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-social-share\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 457
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab6-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-thumb-full\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 461
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab7-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-mobile-check\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 465
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</p>
                        </div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t
    \t\t</div>
            </div>
        </div>

</section>
";
        // line 476
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 481
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about Event Management and Glue Up"]);
        echo "</h2>
                             ";
        // line 483
        echo "                        </div>
                    </div>
            </div>
            ";
        // line 486
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['event'] = "event-management"        ;
        $context['__cms_partial_params']['wp1'] = "event-management"        ;
        $context['__cms_partial_params']['wp2'] = "event-management"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 487
        echo "            </div>
        </div>

</section>
";
        // line 491
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/solutions/event-management-suite.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  841 => 491,  835 => 487,  828 => 486,  823 => 483,  819 => 481,  812 => 476,  799 => 465,  792 => 461,  785 => 457,  778 => 453,  771 => 449,  764 => 445,  757 => 441,  749 => 436,  745 => 435,  741 => 434,  732 => 428,  726 => 425,  720 => 422,  714 => 419,  708 => 416,  702 => 413,  696 => 410,  673 => 390,  666 => 386,  659 => 382,  652 => 378,  645 => 374,  634 => 367,  629 => 365,  625 => 364,  618 => 360,  612 => 356,  597 => 343,  590 => 339,  583 => 335,  576 => 331,  569 => 327,  558 => 320,  553 => 318,  549 => 317,  542 => 313,  536 => 309,  529 => 303,  524 => 302,  518 => 298,  514 => 296,  509 => 293,  491 => 277,  484 => 273,  477 => 269,  470 => 265,  463 => 261,  453 => 254,  448 => 252,  444 => 251,  437 => 247,  431 => 243,  417 => 231,  410 => 227,  403 => 223,  396 => 219,  384 => 212,  379 => 210,  375 => 209,  368 => 205,  362 => 201,  354 => 195,  348 => 191,  332 => 177,  325 => 173,  318 => 169,  311 => 165,  304 => 161,  294 => 154,  289 => 152,  285 => 151,  278 => 147,  272 => 143,  257 => 130,  250 => 126,  243 => 122,  236 => 118,  229 => 114,  219 => 107,  215 => 106,  210 => 104,  206 => 103,  199 => 99,  193 => 95,  189 => 92,  172 => 76,  168 => 75,  163 => 73,  156 => 68,  152 => 67,  147 => 65,  140 => 60,  136 => 59,  131 => 57,  123 => 51,  118 => 46,  112 => 43,  105 => 39,  93 => 30,  89 => 29,  81 => 23,  77 => 21,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/solutions/event-management-suite.htm", "");
    }
}
