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

/* /var/www/html/glueup/themes/glueup/pages/industries/financial-services-management-software.htm */
class __TwigTemplate_97af24763cf5d8e9722e95dc30b8ce6fa96d7c30a2e2dc06830ec9c92a63809d extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Financial Services Event Management Software"]);
        echo " </p>
                      <h1>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Grow and <span class=\"line\"><ins>engage</ins></span><br> your client base"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build connections with clients at all stages and gain investors’ trust with Glue Up’s all-in-one engagement software."]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-value-members.svg");
        echo "\" class=\"paygage-visual\" alt=\"Financial Services Engagement Platform\">

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
        $context['__cms_partial_params']['category'] = "conferences"        ;
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Why Financial Services<br> stick with Glue Up"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one software to help you build strong relationship with your clients."]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t         
                \t\t\t\t    </div>
                \t\t\t\t    <div id=\"tab2-bullet-img\">
                \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 51
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-ask-faster.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 54
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-events-feature.svg");
        echo "\" alt=\"chat\">
                    \t\t\t    </div>
                    \t\t\t    <div id=\"tab4-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 57
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm-feature.svg");
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
                                        <i class=\"icon-sponsor\"></i>
                                        <span>";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Brand building and business development"]);
        echo "</span>
                                        <div class=\"accordion__body firstshow \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Scale connections with clients at all stages of investment and gain investor trust by offering valuable firm expertise and thought leadership."]);
        echo "
                \t\t\t\t\t\t\t ";
        // line 71
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                        <i class=\"icon-speaker\"></i>
                                        <span>";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Demonstrate thought leadership"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Be the preferred source of key market information and influence decision making by creating various engaging programs."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 79
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                        <i class=\"icon-engagement\"></i>
                                        <span>";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Provide the best attendee experience possible"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 86
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Design engaging online and offline events that enriches relationships within your clients."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 87
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab4-bullet\">
                                        <i class=\"icon-view\"></i>
                                        <span>";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Understand engagement and optimize your strategy"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["View immediate engagement scores that measure overall engagement of your clients."]);
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
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab3-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 119
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-emails.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab4-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 122
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-finance.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab5-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 125
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab6-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 128
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-surveys.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab7-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 131
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-mobile.svg");
        echo "\" alt=\"chat\">
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With Glue Up, we manage the busywork so you can focus on growing and engaging with your client base."]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-promote.svg");
        echo "\" alt=\"Glue Up helps you grow your business and increase engagement\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 187
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Campaigns"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 188
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Grow your business and amplify engagement"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 190
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create meaningful relationships by providing high-touch experiences that drive business growth."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-publishing\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 197
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Templates"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-campaigns\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 201
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Marketing"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 205
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Campaign Performance & Analytics"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-memberships\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member-only Subscriptions"]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-allinone-platform.svg");
        echo "\" alt=\"Glue Up helps ypi transform online and offline events\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 230
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Transform online <br>and offline event experience"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 233
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage hundreds of events large and small efficiently from the initial idea to the follow up after the event, and deliver premium event experience to your members and attendees."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-blueprint\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Professional Event Templates"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-mobile-check\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 244
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Community"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 248
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Targeted Campaigns"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-thumb-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 252
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
        // line 265
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 269
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-crm-timeline.svg");
        echo "\" alt=\"Glue Up helps you understand client behavior\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 273
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Data Analytics"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 274
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make your data really work for you"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 276
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Understand client behavior and overall engagement at an individual or account level."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-tags\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 283
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement History"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-buildings\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 287
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Industry Segmentation"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-view\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 291
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sales Forecast"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-opportunity\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 295
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Opportunity Stages"]);
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
        $context['__cms_partial_params']['event'] = "finance"        ;
        $context['__cms_partial_params']['wp1'] = "finance"        ;
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
        return "/var/www/html/glueup/themes/glueup/pages/industries/financial-services-management-software.htm";
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
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/industries/financial-services-management-software.htm", "");
    }
}
