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

/* /var/www/html/glueup/themes/glueup/pages/platform/security.htm */
class __TwigTemplate_7973226b9a045f929ff1aabe6f5aa1d0f16533b14931fc1bd955794aea0200a7 extends \Twig\Template
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
        \t<div class=\"row flex-row-reverse\">
                <div class=\"col-md-6 hero align-self-center text-left\">
                     <img src=\"";
        // line 6
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-security-feature.svg");
        echo "\" class=\"Glue Up is secure for you and your users\" alt=\"glue up hero section\">
                </div>
                <div class=\"col-md-6 hero align-self-center text-md-left text-center\">
                    <p class=\"tagline mb-4\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Security"]);
        echo " </p>
                      <h1>";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stay Protected<br> at <span class=\"line\"><ins> All Times </ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your and your communities’ security is our top priority."]);
        echo " </p><br>
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
            <div class=\"row flex-row\">
                <div class=\"col-lg-8 d-flex align-items-center text-center align-self-center mx-auto pb-3 pb-md-0\">
                    <div>
                            <span class=\"h6 text-color text-center mx-auto \">";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Development Philosphy"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title \">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customer satisfaction is our highest priority and we are working tirelessly to not only meet, but <span class=\"line\"><ins> exceed </ins></span> our clients’ expectations. "]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" These are our guiding principles on our mission to transform our clients’ communities around the world and ultimately provide solutions that are flexible, scalable, and efficient."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact\"></i>
                                        <p class=\" text-center pt-4\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Users First"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-settings\"></i>
                                        <p class=\" text-center pt-4\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Operations before features"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-anchor\"></i>
                                        <p class=\" text-center pt-4\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Be bold, code safe"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\" text-center pt-4\">";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Open feedback"]);
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
            <div class=\"row\">
                    <div class=\"col-lg-7 mx-auto pb-4\">
                        <div class=\"block text-center\">
                            <small>";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up"]);
        echo "</small>
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["You Can Count on Us"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Focus on growing and engaging your community while we take care of the security."]);
        echo " </p>
                        </div>
                    </div>
            </div>
             <div class=\"row mx-auto\">
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme\">
                              <div class=\"card-body pt-4 \">
                                <img src=\"";
        // line 73
        echo $this->extensions['System\Twig\Extension']->mediaFilter("capterra-top-20-img.png");
        echo "\" alt=\"Glue Up Top 20 Rated in Capterra\" class=\"pt-2 img-fluid mx-auto lazy fadeIn\" style=\"max-height: 150px;\">
                                <h5 class=\"card-title mt-3\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Capterra Top 20"]);
        echo "</h5>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 mr-auto\">
                            <div class=\"card text-center h-100 hideme\">
                              <div class=\"card-body pt-4\">
                                 <img src=\"";
        // line 81
        echo $this->extensions['System\Twig\Extension']->mediaFilter("gdpr-ready-glueup.png");
        echo "\" alt=\"Glue Up is fully GDPR Compliant\" class=\"img-fluid mx-auto lazy fadeIn\" style=\"max-height: 70px; margin-top: 39px; margin-bottom: 38px;\">
                                <h5 class=\"card-title mt-3\">";
        // line 82
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["GDPR Compliance"]);
        echo "</h5>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme\">
                              <div class=\"card-body pt-4 \">
                                <div style=\"margin-top: 30px; margin-bottom: 61px;\"><i class=\"bullet-icon shadow-sm align-middle icon-clock-outlined\" style=\"font-size: 72px;\"></i></div>
                                <h5 class=\"card-title mt-3\">";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Daily Backups"]);
        echo "</h5>
                              </div>
                            </div>
                        </div>
            </div>
        </div>
</section>
";
        // line 98
        echo "<section class=\"section bg-grey\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-md-7 mx-auto text-center pb-4\">
                        <span class=\"h6 text-color hideme text-center mx-auto pt-5\">";
        // line 102
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Product Updates"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["It Gets Better Every Week"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up solutions are constantly evolving and improving. We release new features, updates and bug fixes every week so you can have better experience with our software everytime you log in.  "]);
        echo "
    \t\t\t\t\t\t     </p>
                        </div>
                    </div>
            </div>
            ";
        // line 111
        echo "                <div class=\"row mx-auto\">
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                 <i class=\"bullet-icon align-middle icon-buildings\"></i>
                                <h5 class=\"card-title mt-3\">";
        // line 116
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Servers "]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 117
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All servers that run Glue Up software in production are recent, continuously patched Linux systems following the latest industry standards."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Depending on domain your account is on, your data is stored following specific regulations in a given country (i.e. GDPR or China Cybersecurity Law). "]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                 <i class=\"bullet-icon align-middle icon-lock\"></i>
                                <h5 class=\"card-title mt-3\">";
        // line 125
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Storage & Encryption  "]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 126
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up stores document data such as metadata, activity, original files, and customer’s data in different locations while also compiling and generating documents when requested. "]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All data in each location is encrypted at rest with AES-256 and sophisticated encryption keys management. "]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                 <i class=\"bullet-icon align-middle icon-cheque\"></i>
                                <h5 class=\"card-title mt-3\">";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customer payment information"]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up integrates with many payment gateways, all of which are compliant with PCI DSS and does not process, store, or transmit any payment card data. "]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                 <i class=\"bullet-icon align-middle icon-view\"></i>
                                <h5 class=\"card-title mt-3\">";
        // line 143
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["System monitoring and alerting"]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 144
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The production application and underlying infrastructure components are monitored 24/7/365 days a year, by dedicated monitoring systems."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Critical alerts generated by these systems are sent to 24/7/365 on-call DevOps team members and escalated appropriately to operations management. "]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                 <i class=\"bullet-icon align-middle icon-download\"></i>
                                <h5 class=\"card-title mt-3\">";
        // line 152
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service levels and backups"]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 153
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up infrastructure utilizes many layered techniques for increasingly reliable uptime (<99.9%)."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Including the use of auto-scaling, load balancing, task queues, and rolling deployments. We do full daily automated backups of our databases. All backups are encrypted. "]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                 <i class=\"bullet-icon align-middle icon-code\"></i>
                                <h5 class=\"card-title mt-3\">";
        // line 161
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vulnerability testing"]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 162
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Web application security is evaluated by the development team in sync with the application release cycle."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" This vulnerability testing includes the use of commonly known web application security toolkits and scanners to identify application vulnerabilities before they are released into production."]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                       
                        
                ";
        // line 169
        echo "            </div>
            ";
        // line 175
        echo "        </div>

</section>
";
        // line 179
        echo "
";
        // line 180
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 181
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/security.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 181,  332 => 180,  329 => 179,  324 => 175,  321 => 169,  311 => 162,  307 => 161,  295 => 153,  291 => 152,  279 => 144,  275 => 143,  264 => 135,  260 => 134,  248 => 126,  244 => 125,  232 => 117,  228 => 116,  221 => 111,  213 => 105,  208 => 103,  204 => 102,  198 => 98,  188 => 90,  177 => 82,  173 => 81,  163 => 74,  159 => 73,  148 => 65,  144 => 64,  140 => 63,  120 => 46,  113 => 42,  106 => 38,  99 => 34,  89 => 27,  84 => 25,  80 => 24,  68 => 14,  63 => 13,  59 => 11,  55 => 10,  51 => 9,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/security.htm", "");
    }
}
