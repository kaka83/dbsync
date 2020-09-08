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

/* /var/www/html/glueup/themes/glueup/pages/industries/conference-management-software.htm */
class __TwigTemplate_4341a92c34cf5523f5f55b1f435405c04dc5a2509962ef544a4da51fbe4321a5 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Conference Management Software"]);
        echo " </p>
                      <h1>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create a unique event experience <span class=\"line\"><ins>every time</ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline processes and manage your events with an all-in-one engagement software built for professional conference organizers."]);
        echo " </p>
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-events-feature.svg");
        echo "\" class=\"paygage-visual\" alt=\"Glue Up helps you manage your memberships more efficiently\">

                </div>
            </div>
        </div> 
</header>
<div class=\"container\">
            ";
        // line 23
        echo "            <div class=\"row\">
            ";
        // line 24
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['category'] = "event-management"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-case-study.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "                   
            </div>
        </div>
        
        
";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/logobar.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Why Event Professionals<br> stick with Glue Up "]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one event management software built for online and offline events of any type or size."]);
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
        // line 47
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t         
                \t\t\t\t    </div>
                \t\t\t\t    <div id=\"tab2-bullet-img\">
                \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 51
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 54
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-survey-analytics.svg");
        echo "\" alt=\"chat\">
                    \t\t\t    </div>
                    \t\t\t    <div id=\"tab4-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 57
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community-feature.svg");
        echo "\" alt=\"chat\">
                    \t\t\t    </div>
                    \t\t\t    <div id=\"tab5-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 60
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-anywhere.svg");
        echo "\" alt=\"chat\">
                    \t\t\t    </div>
                \t\t\t     </div>
                \t\t\t</div>
                \t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"services__accordion\">
                \t\t\t\t    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                                        <i class=\"icon-overview\"></i>
                                        <span>";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run events from one place"]);
        echo "</span>
                                        <div class=\"accordion__body firstshow \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage your entire event marketing and gather actionable insight with an all-in-one software."]);
        echo "
                \t\t\t\t\t\t\t ";
        // line 71
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                        <i class=\"icon-social-share\"></i>
                                        <span>";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create engaging events that connect people"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Design engaging online and offline events that enriches relationships within your communities."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 79
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                        <i class=\"icon-analytics\"></i>
                                        <span>";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Measure event performance and ROI"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 86
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Replace the guessing game with real ways to demonstrate the success of your event."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 87
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab4-bullet\">
                                        <i class=\"icon-mobile-check\"></i>
                                        <span>";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your community to thrive"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Give your event community a digital place where they can share their ideas, discuss various topic and stay social even when meeting in person is not an option."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 95
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
    \t\t\t\t     <div id=\"tab1-sellpoint-img\" class=\"firstshow\">
    \t\t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 113
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event-management.svg");
        echo "\" alt=\"Best-in-class event management with Glue Up\">
    \t\t\t\t    </div>
    \t\t\t        <div id=\"tab2-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 116
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm.svg");
        echo "\" alt=\"Glue Up includes CRM\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab3-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 119
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-emails.svg");
        echo "\" alt=\"Glue Up includes email marketing\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab4-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 122
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-finance.svg");
        echo "\" alt=\"Glue Up includes finance and invoices\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab5-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 125
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community.svg");
        echo "\" alt=\"Glue Up includes community management\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab6-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 128
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-surveys.svg");
        echo "\" alt=\"Glue Up includes surveys and polls\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab7-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 131
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-mobile.svg");
        echo "\" alt=\"Glue Up includes mobile apps for you and your attendees\">
        \t\t\t    </div>
    \t\t\t     </div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-5 mr-auto float-left align-self-center\">
    \t\t\t    <div class=\"pt-1 pb-3 pt-md-5 pb-md-5 ml-xs-0 my-3\">
                                     <small>";
        // line 137
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What's included?"]);
        echo "</small>
                                     <h2 class=\"mt-3 mb-2 position-relative content-title\">";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event <br> Management Suite"]);
        echo " </h2>
                                     <p class=\"tagline pt-2 \">";
        // line 139
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With Glue Up, you can plan, promote, execute and evaluate all kinds of events in just minutes."]);
        echo " </p>
                    </div>
    \t\t\t\t<div class=\"services__accordion row bullets hideme ml-xs-0 pb-5 mb-5 h-100\" style=\"padding-left:-16px;\">
                        <div class=\"accordion sellpoint active small col text-center pointer px-0 pl-1\" tab-name=\"tab1-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-events\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 144
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab2-sellpoint\">
                             <i class=\"sellpoint-item align-middle icon-crm\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 148
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab3-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-email-campaigns\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 152
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab4-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-payments\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 156
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab5-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-social-share\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 160
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab7-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-mobile-check\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 164
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
        // line 176
        echo "

";
        // line 179
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 183
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-event-templates.svg");
        echo "\" alt=\"Glue Up helps you deliver premium experiences for your attendees\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 187
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Engagement"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 188
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Transform online and offline event experience"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 190
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easily scale up your reach and transform events to premium event experience you event community will love."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 197
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Private & Public Groups"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 201
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Media sharing"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 205
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1-on-1 Direct Chat"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Business Cards Exchange"]);
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
        // line 222
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 226
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-analyze.svg");
        echo "\" alt=\"Glue Up helps you analyze event attendance and performance\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 230
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Dashboard"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Evaluate events on a micro level"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 233
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Track attendance, sponsorship sales, event ROI and monitor performance of your events in real time."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Performance Metrics"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-reset-time\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 244
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Activity Timeline"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-task-icon\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 248
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-payments\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 252
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["P&L Tracking"]);
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
        // line 265
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 269
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-scaleup.svg");
        echo "\" alt=\"Glue Up helps you scale up your events and conferences\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 273
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 274
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Set up your event for success"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 276
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customize your event to include exactly what your event needs, from conception, through signup to survey."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-publishing\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 283
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Professional Event Templates"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 287
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Community"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-subscription\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 291
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Targeted Campaigns"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-thumb-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 295
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
        // line 307
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 312
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about Conference Management and Glue Up"]);
        echo "</h2>
                             ";
        // line 314
        echo "                        </div>
                    </div>
            </div>
            ";
        // line 317
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['event'] = "event-management"        ;
        $context['__cms_partial_params']['wp1'] = "conference"        ;
        $context['__cms_partial_params']['wp2'] = "event"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 318
        echo "            </div>
        </div>

</section>
";
        // line 322
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/industries/conference-management-software.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 322,  573 => 318,  566 => 317,  561 => 314,  557 => 312,  550 => 307,  536 => 295,  529 => 291,  522 => 287,  515 => 283,  505 => 276,  500 => 274,  496 => 273,  489 => 269,  483 => 265,  468 => 252,  461 => 248,  454 => 244,  447 => 240,  437 => 233,  432 => 231,  428 => 230,  421 => 226,  415 => 222,  401 => 209,  394 => 205,  387 => 201,  380 => 197,  370 => 190,  365 => 188,  361 => 187,  354 => 183,  348 => 179,  344 => 176,  330 => 164,  323 => 160,  316 => 156,  309 => 152,  302 => 148,  295 => 144,  287 => 139,  283 => 138,  279 => 137,  270 => 131,  264 => 128,  258 => 125,  252 => 122,  246 => 119,  240 => 116,  234 => 113,  214 => 95,  210 => 94,  205 => 92,  198 => 87,  194 => 86,  189 => 84,  182 => 79,  178 => 78,  173 => 76,  166 => 71,  162 => 70,  157 => 68,  146 => 60,  140 => 57,  134 => 54,  128 => 51,  121 => 47,  109 => 38,  105 => 37,  97 => 31,  93 => 30,  86 => 25,  81 => 24,  78 => 23,  68 => 15,  63 => 12,  58 => 11,  54 => 9,  50 => 8,  46 => 7,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/industries/conference-management-software.htm", "");
    }
}
