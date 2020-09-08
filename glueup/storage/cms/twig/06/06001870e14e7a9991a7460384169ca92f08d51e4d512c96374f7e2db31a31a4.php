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

/* /var/www/html/glueup/themes/glueup/pages/platform/surveys.htm */
class __TwigTemplate_94a1fb2f6a30ba324e8fbff142e480fd0f0c39b257303a058f8fd9fb00d5dfe1 extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-surveys-feature.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Measure and <br><span class=\"line\"><ins>Understand </ins></span> Feedback "]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easily create surveys, quizzes, and polls for different audiences to gather and analyze their opinions and preferences."]);
        echo " </p><br>
                       ";
        // line 14
        echo "                       ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/hero-email-cta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
                </div>
            </div>
        </div> 
</header>
<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-7 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about your communities"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Listen to your customers and get their opinions on any topic. "]);
        echo " </p>
                        </div>
                    </div>
            </div>
            \t<div class=\"col-lg-10 align-self-center mx-auto\">
\t\t\t\t\t    <div class=\"services__accordion row flex-row-reverse\">
\t\t\t\t\t            <div class=\"col-md-7 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion__img desktop\">
\t\t\t\t\t\t\t\t\t    <div id=\"tab1-bullet-img\" class=\"firstshow\">
\t\t\t\t\t\t\t\t\t        <img class=\"feature-window desktop\" src=\"";
        // line 35
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members-1.svg");
        echo "\" alt=\"Glue Up is easy to use\">
\t\t\t\t\t\t\t\t\t         
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t    <div id=\"tab2-bullet-img\">
\t\t\t\t\t\t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-survey-analytics.svg");
        echo "\" alt=\"Glue Up helps you with customizable analytic dashboards\">
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t        <div id=\"tab3-bullet-img\">
\t\t\t\t\t    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-ask-faster.svg");
        echo "\" alt=\"Glue Up helps you with survey templates\">
\t\t\t\t\t    \t\t\t    </div>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t\t\t<div class=\"services__accordion\">
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t                    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
\t\t\t\t\t                        <i class=\"icon-button\"></i>
\t\t\t\t\t                        <span>";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy-to-use"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body firstshow\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create surveys of any kind in a few simple clicks. "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
\t\t\t\t\t                        <i class=\"icon-analytics\"></i>
\t\t\t\t\t                        <span>";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Dashboard & Insights"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Gain instant visibility into surveys results with interactive dashboards and profiles."]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 62
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
\t\t\t\t\t                        <i class=\"icon-email-campaigns\"></i>
\t\t\t\t\t                        <span>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ask even faster"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Use available templates prepared by professionals to save even more time. "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
            </div>
        </div>

</section>
";
        // line 83
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 87
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-feedback.svg");
        echo "\" alt=\"Glue Up helps you take surveys among the members of your community\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ask your community anything"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["From event feedback through industry studies to food preferences, you can ask your audiences anything you want. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-thumb-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Unlimited Question Types"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-check\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Feedback"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NPS"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-heart\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Satisfaction Surveys"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-check\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 117
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Brand Awareness Research"]);
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
        // line 130
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 134
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-collect.svg");
        echo "\" alt=\"Glue Up helps you collect feedback\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 139
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collect All Data Automatically"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All survey replies are stored together with other information from the respondents and automatically synchronized so you can see the big picture."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 148
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatic sync"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-switch\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 152
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Flexible"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 156
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customised branding"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 160
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Real-time reports"]);
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
        // line 173
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 177
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-survey-templates.svg");
        echo "\" alt=\"Glue Up helps you take surveys with professional survey templates\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 181
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Templates"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 182
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create Different Types of Surveys"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 184
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Save time by choosing any of our survey templates prepared by certified professionals, add your own questions and create different surveys to get the answers you need to make better decisions."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-surveystars\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 191
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Opinion Polls"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-hierarchy\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Survey logic"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-object-forward\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 199
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Expert template design"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-translation-switch\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 203
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
        // line 215
        echo "
";
        // line 217
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 221
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-survey-dashboards.svg");
        echo "\" alt=\"Glue Up helps you consolidate and understand your feedback\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 225
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Insights"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 226
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Consolidate and Understand Feedback"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 228
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Analyze information you collect faster with easy-to-use dashboards or export it so you can take further action."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Control how collected data is shared and ensure that data is both accessible and secure."]);
        echo "<br>
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-download\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 235
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy Export"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 239
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Dashboards"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-checked-in\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 243
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["GDPR Compliant"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-hierarchy\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 247
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Roles & Permissions"]);
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
        // line 259
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 260
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/surveys.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 260,  459 => 259,  444 => 247,  437 => 243,  430 => 239,  423 => 235,  411 => 228,  406 => 226,  402 => 225,  395 => 221,  389 => 217,  386 => 215,  372 => 203,  365 => 199,  358 => 195,  351 => 191,  341 => 184,  336 => 182,  332 => 181,  325 => 177,  319 => 173,  304 => 160,  297 => 156,  290 => 152,  283 => 148,  273 => 141,  268 => 139,  264 => 138,  257 => 134,  251 => 130,  237 => 117,  230 => 113,  223 => 109,  216 => 105,  209 => 101,  199 => 94,  194 => 92,  190 => 91,  183 => 87,  177 => 83,  163 => 70,  159 => 69,  154 => 67,  147 => 62,  143 => 61,  138 => 59,  131 => 54,  127 => 53,  122 => 51,  110 => 42,  104 => 39,  97 => 35,  85 => 26,  81 => 25,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/surveys.htm", "");
    }
}
