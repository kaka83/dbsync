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

/* /var/www/html/glueup/themes/glueup/pages/industries/chamber-management-software.htm */
class __TwigTemplate_dc9947b1e335ab5f2c577ac256c9ce5805c07ca228f4ef2dc6fdb24a31c3262d extends \Twig\Template
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
        echo "<header id=\"hero\" class=\"\" style=\"padding-bottom:-60px;\">
";
        // line 3
        echo "        <div class=\"container paygage-hero-container\">
            <div class=\"row\">
                
                <div class=\"col-md-6 hero align-self-center text-md-left text-center\">
                    <p class=\"tagline mb-4\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Chamber of Commerce Management Software"]);
        echo " </p>
                      <h1>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build a strong<br> <span class=\"line\"><ins>business</ins></span> community"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline processes and manage your membership journey with an all-in-one engagement software built for Chambers of Commerce."]);
        echo " </p><br>
                       ";
        // line 11
        echo "                       ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/hero-email-cta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "
                </div>
                <div class=\"col-md-6 hero align-self-center text-md-left text-center\">
                    <img src=\"";
        // line 15
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership.svg");
        echo "\" class=\"paygage-visual\" alt=\"Glue Up helps you manage your memberships more efficiently\">
                </div>
            </div>
        </div> 
</header>
<div class=\"container\">
            ";
        // line 22
        echo "            <div class=\"row\">
            ";
        // line 23
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['category'] = "chambers"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-case-study.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "                   
            </div>
        </div>
        
        
";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/logobar.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "
<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-7 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Why Chambers of Commerce stick with Glue Up "]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one software that brings your business communities and member engagement to the center of attention."]);
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
        // line 46
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community-feature.svg");
        echo "\" alt=\"Glue Up helps you bring your community together\">
                \t\t\t\t         
                \t\t\t\t    </div>
                \t\t\t\t    <div id=\"tab2-bullet-img\">
                \t\t\t\t        <img class=\"feature-window deskto paygage-visual\" src=\"";
        // line 50
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm-feature.svg");
        echo "\" alt=\"Glue Up helps you stay in the know about your members\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t       <img class=\"feature-window deskto\" src=\"";
        // line 53
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-revenue.svg");
        echo "\" alt=\"Glue Up helps you drive revenue through sponsorships and memberships\">
                    \t\t\t    </div>
                    \t\t\t    <div id=\"tab4-bullet-img\">
                    \t\t\t         <img class=\"feature-window deskto\" src=\"";
        // line 56
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-anywhere.svg");
        echo "\" alt=\"Glue Up Helps you manage operations from anywhere with its Manager App\">
                    \t\t\t    </div>
                    \t\t\t    
                \t\t\t     </div>
                \t\t\t</div>
                \t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"services__accordion\">
                \t\t\t\t    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                                        <i class=\"icon-overview\"></i>
                                        <span>";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build an engaged community"]);
        echo "</span>
                                        <div class=\"accordion__body firstshow \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build and maintain an online business directory that gives access to exclusive resources."]);
        echo "
                \t\t\t\t\t\t\t ";
        // line 68
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                        <i class=\"icon-analytics\"></i>
                                        <span>";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement data and analytics"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["View immediate engagement scores that measure overall engagement of your members."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 76
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                        <i class=\"icon-payments\"></i>
                                        <span>";
        // line 81
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Drive revenue from sponsorship"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 83
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Procure robust channels to drive revenue for sponsors to reach and engage with your members"]);
        echo "
                \t\t\t\t\t\t\t";
        // line 84
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab4-bullet\">
                                        <i class=\"icon-mobile-check\"></i>
                                        <span>";
        // line 89
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage operations from anywhere"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A powerful all-in-one manager app that allows you to impact your members from anywhere."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 92
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    
                \t\t\t\t</div>
                \t\t\t</div>
                \t\t\t
                \t\t</div>
                </div>
            </div>
        </div>

</section>
<section class=\"section bg-grey\">
        <div class=\"container\">
            <div class=\"services__accordion row flex-row-reverse\">
                <div class=\"col-md-6 align-self-center right h-100\">
    \t\t\t\t<div class=\"accordion__img desktop\">
    \t\t\t\t    <div id=\"tab0-sellpoint-img\" class=\"firstshow\">
    \t\t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 111
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership-management.svg");
        echo "\" alt=\"Best-in-class event management with Glue Up\">
    \t\t\t\t    </div>
    \t\t\t\t     <div id=\"tab1-sellpoint-img\">
    \t\t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 114
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event-management.svg");
        echo "\" alt=\"Best-in-class event management with Glue Up\">
    \t\t\t\t    </div>
    \t\t\t        <div id=\"tab2-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 117
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab3-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 120
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-emails.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab4-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 123
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-finance.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab5-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 126
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab6-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 129
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-surveys.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab7-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 132
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-mobile.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
    \t\t\t     </div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-5 mr-auto float-left align-self-center\">
    \t\t\t    <div class=\"pt-1 pb-3 pt-md-5 pb-md-5 ml-xs-0 my-3\">
                                     <small>";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What's included?"]);
        echo "</small>
                                     <h2 class=\"mt-3 mb-2 position-relative content-title\">";
        // line 139
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership <br> Management Suite"]);
        echo " </h2>
                                     <p class=\"tagline pt-2 \">";
        // line 140
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With Glue Up, we automate the busywork so you can focus on growing your Chamber of Commerce."]);
        echo " </p>
                    </div>
    \t\t\t\t<div class=\"services__accordion row bullets hideme ml-xs-0 pb-5 mb-5 h-100\" style=\"padding-left:-16px;\">
                        <div class=\"accordion sellpoint active small col text-center pointer px-0 pl-1\" tab-name=\"tab0-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-memberships\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 145
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab1-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-events\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 149
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab2-sellpoint\">
                             <i class=\"sellpoint-item align-middle icon-crm\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 153
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab3-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-email-campaigns\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 157
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab4-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-payments\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 161
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab5-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-social-share\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 165
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab7-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-mobile-check\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 169
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
        // line 181
        echo "

";
        // line 184
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 188
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-renewals.svg");
        echo "\" alt=\"Glue Up helps you manage your membership applications and automate renewals\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 192
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Workflows"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 193
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Simplify application and renewal processes"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Improve and simplify your membership management workflows and maximize retention with automated renewal notices and membership application processes."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 202
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatic Reminders"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invoice\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 206
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Auto-generated Invoices"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-hierarchy\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 210
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Unlimited Membership Types"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-button\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 214
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Dashboard"]);
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
        // line 227
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 231
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-scaleup.svg");
        echo "\" alt=\"Glue Up helps you manage your entire event lifecycle with event blueprints and templates so you can automate further your success\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 235
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 236
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Host engaging online and offline events"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 238
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage hundreds of events large and small efficiently from the initial idea to the follow up after the event, and deliver premium event experience to your members and attendees."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-publishing\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 245
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Professional Event Templates"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-subscription\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 249
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Invitations "]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-campaigns\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 253
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Targeted Campaigns"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-thumb-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 257
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Post-event Survey"]);
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
        // line 270
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 274
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-engage.svg");
        echo "\" alt=\"Glue Up helps you engage with your members with a digital member hub\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 278
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Engagement Hub"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 279
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Improve member retention"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 281
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Connect with your members on a personal level by giving them the power to engaged with your business community."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-applications-reg\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 288
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Directory"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 292
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-badge-active\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 296
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Benefits"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-check\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 300
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Information"]);
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
        // line 312
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 317
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about Chambers of Commerce and Glue Up"]);
        echo "</h2>
                             ";
        // line 319
        echo "                        </div>
                    </div>
            </div>
            ";
        // line 322
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['event'] = "chambers"        ;
        $context['__cms_partial_params']['wp1'] = "chambers"        ;
        $context['__cms_partial_params']['wp2'] = "event"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 323
        echo "            </div>
        </div>

</section>
";
        // line 327
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/industries/chamber-management-software.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 327,  581 => 323,  574 => 322,  569 => 319,  565 => 317,  558 => 312,  544 => 300,  537 => 296,  530 => 292,  523 => 288,  513 => 281,  508 => 279,  504 => 278,  497 => 274,  491 => 270,  476 => 257,  469 => 253,  462 => 249,  455 => 245,  445 => 238,  440 => 236,  436 => 235,  429 => 231,  423 => 227,  409 => 214,  402 => 210,  395 => 206,  388 => 202,  378 => 195,  373 => 193,  369 => 192,  362 => 188,  356 => 184,  352 => 181,  338 => 169,  331 => 165,  324 => 161,  317 => 157,  310 => 153,  303 => 149,  296 => 145,  288 => 140,  284 => 139,  280 => 138,  271 => 132,  265 => 129,  259 => 126,  253 => 123,  247 => 120,  241 => 117,  235 => 114,  229 => 111,  208 => 92,  204 => 91,  199 => 89,  192 => 84,  188 => 83,  183 => 81,  176 => 76,  172 => 75,  167 => 73,  160 => 68,  156 => 67,  151 => 65,  139 => 56,  133 => 53,  127 => 50,  120 => 46,  108 => 37,  104 => 36,  96 => 30,  92 => 29,  85 => 24,  80 => 23,  77 => 22,  68 => 15,  63 => 12,  58 => 11,  54 => 9,  50 => 8,  46 => 7,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/industries/chamber-management-software.htm", "");
    }
}
