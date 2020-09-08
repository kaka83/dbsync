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

/* /var/www/html/glueup/themes/glueup/pages/industries/corporations-management-software.htm */
class __TwigTemplate_aeddf118a60b16462245465d2acc7e30f05880220f737a144863961ba0655e67 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Corporation Marketing Automation Software"]);
        echo " </p>
                      <h1>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Grow your business<br> and <span class=\"line\"><ins>engage</ins></span> at an<br> all-new level"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline processes and transform client engagement strategies with an all-in-one software built for corporations."]);
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
        $context['__cms_partial_params']['category'] = "corporates"        ;
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
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Why Corporations <br>stick with Glue Up"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one software built to help you manage your operations and make smarter business decisions."]);
        echo " </p>
                        </div>
                    </div>
            </div>
                <div class=\"col-lg-10 align-self-center mx-auto\">
                    <div class=\"services__accordion row flex-row-reverse\">
                            <div class=\"col-md-7 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"accordion__img desktop\">
                \t\t\t\t    <div id=\"tab1-bullet-img\" class=\"firstshow\">
                \t\t\t\t        <img class=\"feature-window desktop paygage-visual\" src=\"";
        // line 47
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm-feature.svg");
        echo "\" alt=\"Glue Up Helps you close deals\">
                \t\t\t\t         
                \t\t\t\t    </div>
                \t\t\t\t    <div id=\"tab2-bullet-img\">
                \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 51
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm-1.svg");
        echo "\" alt=\"Glue Up Helps you grow your business\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 54
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-value-members.svg");
        echo "\" alt=\"Glue Up Helps you create opportunities\">
                    \t\t\t    </div>
                    \t\t\t    <div id=\"tab4-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 57
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" alt=\"Glue Up Helps you influence decision making\">
                    \t\t\t    </div>
                    \t\t\t    <div id=\"tab5-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 60
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-anywhere.svg");
        echo "\" alt=\"Glue Up helps you provide best in class event experiences\">
                    \t\t\t    </div>
                \t\t\t     </div>
                \t\t\t</div>
                \t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"services__accordion\">
                \t\t\t\t    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                                        <i class=\"icon-overview\"></i>
                                        <span>";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nurture leads and accelerate sales pipeline"]);
        echo "</span>
                                        <div class=\"accordion__body firstshow \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get immediate insights on your contacts and convert them into high-value leads."]);
        echo "
                \t\t\t\t\t\t\t ";
        // line 71
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                        <i class=\"icon-analytics\"></i>
                                        <span>";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stay lean and grow your business"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Identify your revenue targets, create new opportunities, and accelerates the sales cycles."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 79
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                        <i class=\"icon-menu-section-lemontea\"></i>
                                        <span>";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Demonstrate thought leadership"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 86
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Influence decision making by creating various engagement programs and events."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 87
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab4-bullet\">
                                        <i class=\"icon-engagement\"></i>
                                        <span>";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run efficient and impactful events of any size"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Provide a seamless event experience to your members and attendees."]);
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Marketing Automation Software"]);
        echo " </h2>
                                     <p class=\"tagline pt-2 \">";
        // line 139
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With Glue Up, we automate the busywork so you can focus on growing your business."]);
        echo " </p>
                    </div>
    \t\t\t\t<div class=\"services__accordion row bullets hideme ml-xs-0 pb-5 mb-5 h-100\" style=\"padding-left:-16px;\">
                        
                        <div class=\"accordion sellpoint active small col text-center pointer px-0 pl-1\" tab-name=\"tab1-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-events\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 145
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab2-sellpoint\">
                             <i class=\"sellpoint-item align-middle icon-crm\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 149
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab3-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-email-campaigns\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 153
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab4-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-payments\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 157
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab5-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-social-share\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 161
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab7-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-mobile-check\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 165
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
        // line 177
        echo "

";
        // line 180
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 184
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-allinone-platform.svg");
        echo "\" alt=\"Glue Up can help you centralize all your marketing operations in one place\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 188
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All-in-One"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 189
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it all from one place"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 191
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ultimate marketing toolkit connected with other powerful features."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-crm\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 198
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-campaigns\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 202
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Campaigns"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-mobile-check\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 206
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-events\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 210
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
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
        // line 223
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 227
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-value-members.svg");
        echo "\" alt=\"Glue Up helps you create meaningful connections with your professional community\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Campaigns"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 232
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Expand your business"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 234
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create meaningful connections by curating engaging programs that drives business growth."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 241
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Campaign Performance & Analytics"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-plus-sign\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 245
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Healthy Sender Score"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-shield\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 249
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cybersecurity Law Compliance"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-memberships\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 253
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member-only Subscription"]);
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
        // line 266
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 270
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-crm-timeline.svg");
        echo "\" alt=\"Glue Up helps you understand your customers journey from contact to closed deal\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 274
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 275
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Understand customer behavior"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 277
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make your data really work for you."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-tags\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 284
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement History"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-buildings\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 288
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Industry Segmentation"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-view\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 292
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sales Forecast"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-opportunity\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 296
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
        // line 308
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 313
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about Event Management and Glue Up"]);
        echo "</h2>
                             ";
        // line 315
        echo "                        </div>
                    </div>
            </div>
            ";
        // line 318
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['event'] = "event-management"        ;
        $context['__cms_partial_params']['wp1'] = "corporations"        ;
        $context['__cms_partial_params']['wp2'] = "event"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 319
        echo "            </div>
        </div>

</section>
";
        // line 323
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/industries/corporations-management-software.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 323,  574 => 319,  567 => 318,  562 => 315,  558 => 313,  551 => 308,  537 => 296,  530 => 292,  523 => 288,  516 => 284,  506 => 277,  501 => 275,  497 => 274,  490 => 270,  484 => 266,  469 => 253,  462 => 249,  455 => 245,  448 => 241,  438 => 234,  433 => 232,  429 => 231,  422 => 227,  416 => 223,  402 => 210,  395 => 206,  388 => 202,  381 => 198,  371 => 191,  366 => 189,  362 => 188,  355 => 184,  349 => 180,  345 => 177,  331 => 165,  324 => 161,  317 => 157,  310 => 153,  303 => 149,  296 => 145,  287 => 139,  283 => 138,  279 => 137,  270 => 131,  264 => 128,  258 => 125,  252 => 122,  246 => 119,  240 => 116,  234 => 113,  214 => 95,  210 => 94,  205 => 92,  198 => 87,  194 => 86,  189 => 84,  182 => 79,  178 => 78,  173 => 76,  166 => 71,  162 => 70,  157 => 68,  146 => 60,  140 => 57,  134 => 54,  128 => 51,  121 => 47,  109 => 38,  105 => 37,  97 => 31,  93 => 30,  86 => 25,  81 => 24,  78 => 23,  68 => 15,  63 => 12,  58 => 11,  54 => 9,  50 => 8,  46 => 7,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/industries/corporations-management-software.htm", "");
    }
}
