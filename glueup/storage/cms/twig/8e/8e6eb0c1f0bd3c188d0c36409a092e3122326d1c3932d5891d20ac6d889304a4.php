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

/* /var/www/html/glueup/themes/glueup/pages/industries/non-profit-management-software.htm */
class __TwigTemplate_2932aff6d1ed9f5ea0d97b67760f12ce3142ea58aa3c959cab3687ed64d1e714 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Non-Profit Community Management Software"]);
        echo "</p>
                      <h1>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Focus on your organization’s greater <span class=\"line\"><ins>mission</ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline your processes, amplify engagement and collect donations with an all-in-one engagement software built for non-profit organizations."]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-non-profit.svg");
        echo "\" class=\"paygage-visual\" alt=\"glue up hero section\">

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
        $context['__cms_partial_params']['category'] = "associations"        ;
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Why Non-Profits <br>stick with Glue Up "]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one non-profit engagement software that brings your projects and advocacies to the center of attention."]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community-feature.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t         
                \t\t\t\t    </div>
                \t\t\t\t    <div id=\"tab2-bullet-img\">
                \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 51
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 54
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-revenue.svg");
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
                                        <i class=\"icon-overview\"></i>
                                        <span>";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Drive community engagement"]);
        echo "</span>
                                        <div class=\"accordion__body firstshow \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Increase your organizations value with meaningful engagement that reinforces reputation and thought leadership."]);
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build strong relationships and maximize retention"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create meaningful relationship with supporters that nurture long-term relationships and sustained support."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 79
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                        <i class=\"icon-payments\"></i>
                                        <span>";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collect donations effortlessly"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 86
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Save even more time by automating tasks that are crucial to keep your members happy and collect money easily."]);
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Find your best advocates"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Know which supporters are most engaged and create opportunities for success."]);
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
    \t\t\t\t    <div id=\"tab0-sellpoint-img\" class=\"firstshow\">
    \t\t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 113
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership-management.svg");
        echo "\" alt=\"Best-in-class event management with Glue Up\">
    \t\t\t\t    </div>
    \t\t\t\t     <div id=\"tab1-sellpoint-img\">
    \t\t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 116
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event-management.svg");
        echo "\" alt=\"Best-in-class event management with Glue Up\">
    \t\t\t\t    </div>
    \t\t\t        <div id=\"tab2-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 119
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab3-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 122
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-emails.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab4-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 125
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-finance.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab5-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 128
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab6-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 131
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-surveys.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab7-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 134
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-mobile.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
    \t\t\t     </div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-5 mr-auto float-left align-self-center\">
    \t\t\t    <div class=\"pt-1 pb-3 pt-md-5 pb-md-5 ml-xs-0 my-3\">
                                     <small>";
        // line 140
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What's included?"]);
        echo "</small>
                                     <h2 class=\"mt-3 mb-2 position-relative content-title\">";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community <br> Management Suite"]);
        echo " </h2>
                                     <p class=\"tagline pt-2 \">";
        // line 142
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With Glue Up, we automate the busywork so you can focus on your greater mission and create more opportunities for your communities."]);
        echo " </p>
                    </div>
    \t\t\t\t<div class=\"services__accordion row bullets hideme ml-xs-0 pb-5 mb-5 h-100\" style=\"padding-left:-16px;\">
                        <div class=\"accordion sellpoint active small col text-center pointer px-0 pl-1\" tab-name=\"tab0-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-memberships\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 147
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab1-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-events\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 151
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab2-sellpoint\">
                             <i class=\"sellpoint-item align-middle icon-crm\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 155
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab3-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-email-campaigns\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 159
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab4-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-payments\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 163
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab5-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-social-share\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab7-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-mobile-check\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 171
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
        // line 183
        echo "

";
        // line 186
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 190
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-allinone-platform.svg");
        echo "\" alt=\"Glue Up helps you engage your community\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 194
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Project Management"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline your processes and engagement"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 197
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Organize, analyze, and strategically implement programs with your supporters to maintain and grow those relationships. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 204
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-campaigns\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 208
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Campaigns"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-events\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 212
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Managament"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 216
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Engagement"]);
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
        // line 229
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 233
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-performance.svg");
        echo "\" alt=\"Glue Up helps you increase performance across different activities\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 237
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Marketing"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 238
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Help build and strengthen your community"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create meaningful programs and connections by curating engaging programs that drive support. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-campaigns\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 247
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-button\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 251
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Content Editor"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 255
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Brand Consistency"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-memberships\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 259
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
        // line 272
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 276
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-engage.svg");
        echo "\" alt=\"Glue Up helps you drive engagement\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 280
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Building"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 281
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Amplify member engagement"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 283
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it your business to enable your community to build lasting relationships and thrive. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 290
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1-on-1 Direct Chat"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-lock\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 294
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Private and Public Groups"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 298
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Business Card Exchange"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 302
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Social Sharing"]);
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
        // line 314
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 319
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about non-profit communities and Glue Up"]);
        echo "</h2>
                             ";
        // line 321
        echo "                        </div>
                    </div>
            </div>
            ";
        // line 324
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['event'] = "communities"        ;
        $context['__cms_partial_params']['wp1'] = "non-profit"        ;
        $context['__cms_partial_params']['wp2'] = "event"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 325
        echo "            </div>
        </div>

</section>
";
        // line 329
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/industries/non-profit-management-software.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 329,  586 => 325,  579 => 324,  574 => 321,  570 => 319,  563 => 314,  549 => 302,  542 => 298,  535 => 294,  528 => 290,  518 => 283,  513 => 281,  509 => 280,  502 => 276,  496 => 272,  481 => 259,  474 => 255,  467 => 251,  460 => 247,  450 => 240,  445 => 238,  441 => 237,  434 => 233,  428 => 229,  414 => 216,  407 => 212,  400 => 208,  393 => 204,  383 => 197,  378 => 195,  374 => 194,  367 => 190,  361 => 186,  357 => 183,  343 => 171,  336 => 167,  329 => 163,  322 => 159,  315 => 155,  308 => 151,  301 => 147,  293 => 142,  289 => 141,  285 => 140,  276 => 134,  270 => 131,  264 => 128,  258 => 125,  252 => 122,  246 => 119,  240 => 116,  234 => 113,  214 => 95,  210 => 94,  205 => 92,  198 => 87,  194 => 86,  189 => 84,  182 => 79,  178 => 78,  173 => 76,  166 => 71,  162 => 70,  157 => 68,  146 => 60,  140 => 57,  134 => 54,  128 => 51,  121 => 47,  109 => 38,  105 => 37,  97 => 31,  93 => 30,  86 => 25,  81 => 24,  78 => 23,  68 => 15,  63 => 12,  58 => 11,  54 => 9,  50 => 8,  46 => 7,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/industries/non-profit-management-software.htm", "");
    }
}
