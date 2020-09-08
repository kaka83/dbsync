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

/* /var/www/html/glueup/themes/glueup/pages/platform/integrations.htm */
class __TwigTemplate_8d7b2e23bc89cc0ed7b1f09bebc11c1182dfad9e141ceb66990a0af19b348983 extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" class=\"paygage-visual\" alt=\"glue up hero section\">
                </div>
                <div class=\"col-md-6 hero align-self-center text-md-left text-center\">
                    <p class=\"tagline mb-4\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Integrations"]);
        echo "</p>
                      <h1>";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make Great Even <span class=\"line\"><ins> Better </ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Connect the tools you love and use every day with Glue Up platform or built your own connections with our API to maximize your workflows. "]);
        echo " </p>
                       ";
        // line 13
        echo "                       ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/hero-email-cta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Become Even More Efficient"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Powerful APIs, widgets and integrations to acquire, engage and retain more customers as well as to manage your data without complexities."]);
        echo " </p>
                        </div>
                    </div>
            </div>
            ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/integrations-bullets.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "            </div>
        </div>

</section>

";
        // line 37
        echo "<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-md-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                            <span class=\"h6 text-color text-center mx-auto hideme\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Advanced Integrations"]);
        echo "</span>
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Step Up Your Automation"]);
        echo "</h2>
                             <p class=\"tagline\"> ";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Save time and eliminate manual tasks by connecting Glue Up to your favorite software with easy plug & play integrations."]);
        echo " </p>
                        </div>
                    </div>
            </div>
            ";
        // line 49
        echo "                <div class=\"row mx-auto\">
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                <img src=\"";
        // line 53
        echo $this->extensions['System\Twig\Extension']->mediaFilter("integrations/quickbooks-logo.svg");
        echo "\" alt=\"Integrate Glue Up with Quickbooks\" class=\"pt-2 img-fluid mx-auto lazy fadeIn integrations-logo\">
                                <h5 class=\"card-title mt-3\">";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["QuickBooks"]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get a full accounting experience by combining the best of Glue Up’s all-in-one engagement management software with easy plug&play QuickBooks integration that can be set up in a few clicks."]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 mr-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4\">
                                 <img src=\"";
        // line 62
        echo $this->extensions['System\Twig\Extension']->mediaFilter("integrations/xero-logo.svg");
        echo "\" alt=\"Integrate Glue Up with Xero\" class=\"img-fluid mx-auto lazy fadeIn integrations-logo\">
                                <h5 class=\"card-title mt-3\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Xero "]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Synchronize and update your invoices from both apps, collect tickets and memberships as line-items and manage both finance systems effortlessly. "]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                 </div>
                 <div class=\"row mx-auto\">
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                <img src=\"";
        // line 73
        echo $this->extensions['System\Twig\Extension']->mediaFilter("integrations/zoom-logo.svg");
        echo "\" alt=\"Integrate Glue Up with Zoom\" class=\"img-fluid mx-auto lazy fadeIn integrations-logo\">
                                <h5 class=\"card-title mt-3\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Zoom"]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run all your online and offline events with ease by integrating Zoom with Glue Up for the best attendee experience possible. "]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 mr-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4\">
                                 <img src=\"";
        // line 82
        echo $this->extensions['System\Twig\Extension']->mediaFilter("integrations/salesforce-logo.svg");
        echo "\" alt=\"Integrate Glue Up with Salesforce\" class=\"img-fluid mx-auto lazy fadeIn integrations-logo\">
                                <h5 class=\"card-title mt-3 mb-0\">";
        // line 83
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Salesforce "]);
        echo "</h5>
                                <span class=\"badge badge-soon mb-2\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Coming Soon"]);
        echo "</span>
                                <p class=\"card-text mb-5\">";
        // line 85
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sync contact and deals data from all activities you run on Glue Up and streamline workflows for sales, marketing and support. "]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        
                ";
        // line 91
        echo "            </div>
            ";
        // line 97
        echo "        </div>

</section>
";
        // line 101
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 105
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-api.svg");
        echo "\" alt=\"Glue Up API helps you build powerful integrations just the way your business requires\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Powerful API"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 110
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build Something on Your Own "]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Integrate Glue Up features into your own application or website in a fast, easy, and secure way using our powerful APIs. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-menu-section-lemontea\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 119
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Detailed API Documentation"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 123
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Subdomain Access"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-navigation\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 127
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tech support"]);
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
        // line 140
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 144
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-widgets-2.svg");
        echo "\" alt=\"Glue Up helps you increase your outreach and personalize your communications with widgets for membership events and subscriptions\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 148
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Widgets"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 149
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Showcase Glue Up Data Automatically"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 151
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Feature the important data such as events, membership directory, applications and other things you create with Glue Up platform to your website visitors in real-time with easy-to-use widgets."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invisible\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 158
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Widgets"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-heart\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 162
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Widgets"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-atsymbol\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 166
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Subscription Widgets"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 170
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Login Widgets"]);
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
        // line 183
        echo "
";
        // line 184
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 185
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/integrations.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 185,  346 => 184,  343 => 183,  328 => 170,  321 => 166,  314 => 162,  307 => 158,  297 => 151,  292 => 149,  288 => 148,  281 => 144,  275 => 140,  261 => 127,  254 => 123,  247 => 119,  237 => 112,  232 => 110,  228 => 109,  221 => 105,  215 => 101,  210 => 97,  207 => 91,  199 => 85,  195 => 84,  191 => 83,  187 => 82,  177 => 75,  173 => 74,  169 => 73,  157 => 64,  153 => 63,  149 => 62,  139 => 55,  135 => 54,  131 => 53,  125 => 49,  118 => 44,  114 => 43,  110 => 42,  103 => 37,  96 => 31,  92 => 30,  85 => 26,  81 => 25,  68 => 14,  63 => 13,  59 => 11,  55 => 10,  51 => 9,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/integrations.htm", "");
    }
}
