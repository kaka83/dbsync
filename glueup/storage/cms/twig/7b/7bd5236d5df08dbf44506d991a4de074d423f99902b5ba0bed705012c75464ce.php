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

/* /var/www/html/glueup/themes/glueup/pages/resources/partners.htm */
class __TwigTemplate_34cfd71710631724d1733bc2dce1bf7a338936b6f5956425190fcb55946d647e extends \Twig\Template
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
        echo "<div class=\"generic \" id=\"generic\">  
        <div class=\"container\">
            <div class=\"row pt-5\">
                
                <div class=\"col-md-8 hero align-self-center text-center mx-auto pt-5\">
                        <p class=\"tagline mb-4\"> ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo " </p>
                      <h1>";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Let’s Do Business <span class=\"line\"><ins> Together </ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Become referral or reseller partner and start earning great commissions for helping us spread Glue Up throughout the world. "]);
        echo " </p>
                </div>
               
            </div>
            <div class=\"row mx-auto\">
             <div class=\"col-md-7 hero align-self-center text-center mx-auto\">
                 <img src=\"";
        // line 14
        echo $this->extensions['System\Twig\Extension']->mediaFilter("all-in-one.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
            </div>
        </div> 
</div>

<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Become Part of Global Success"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Drive additional revenue from existing customers while attracting new business with your expanded service offering."]);
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
        // line 35
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t         
                \t\t\t\t    </div>
                \t\t\t\t    <div id=\"tab2-bullet-img\">
                \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-anywhere.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-simple-for-everybody.svg");
        echo "\" alt=\"chat\">
                    \t\t\t    </div>
                    \t\t\t    ";
        // line 47
        echo "                \t\t\t     </div>
                \t\t\t</div>
                \t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"services__accordion\">
                \t\t\t\t    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                                        <i class=\"icon-overview\"></i>
                                        <span>";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All-in-one solutions"]);
        echo "</span>
                                        <div class=\"accordion__body firstshow \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ultimate toolkit that has everything clients need to run successful events, manage their memberships and more."]);
        echo "
                \t\t\t\t\t\t\t ";
        // line 56
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                        <i class=\"icon-mobile-check\"></i>
                                        <span>";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Two free mobile apps"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["One app for clients to manage their operations from anywhere, and one app for their community to stay connected."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 64
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                        <i class=\"icon-button\"></i>
                                        <span>";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Super simple for everyone"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and all your attendees’ absolute comfort."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 72
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

<section class=\"section \">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Who is the right partner?"]);
        echo "</h2>
                            <div class=\"about-content  hideme pb-5\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our partners come from diverse backgrounds."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" They range from individual consultants, to event and marketing agencies, to chambers of commerce, association management companies, or other software companies."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                              <h2 class=\"mt-5 mb-4 position-relative content-title  hideme\">";
        // line 97
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What makes our product special?"]);
        echo "</h2>
                            <div class=\"about-content  hideme pb-5\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A successful partnership starts with a product that works for both you and your clients."]);
        echo "<br>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Not only do our award-winning solutions amplify engagement, they streamline operations for organizations of all sizes."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                  </div>
                </div>
                
            </div>
             <div class=\"row mx-auto text-center\">
                     <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                          <h2 class=\"mt-5 mb-4 position-relative content-title text-center  hideme\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What types of partnership do you offer?"]);
        echo "</h2>
                        </div>
            </div>
            <div class=\"row mx-auto text-center\">
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                <img src=\"";
        // line 116
        echo $this->extensions['System\Twig\Extension']->mediaFilter("integrations/quickbooks-logo.svg");
        echo "\" alt=\"Integrate Glue Up with Quickbooks\" class=\"pt-2 img-fluid mx-auto lazy fadeIn integrations-logo\">
                                <h5 class=\"card-title mt-3\">";
        // line 117
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reseller Program"]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 118
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Reseller Program is for organizations who can handle the complete sales life-cycle and want to sell our solutions."]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 mr-auto\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4\">
                                 <img src=\"";
        // line 125
        echo $this->extensions['System\Twig\Extension']->mediaFilter("integrations/xero-logo.svg");
        echo "\" alt=\"Integrate Glue Up with Xero\" class=\"img-fluid mx-auto lazy fadeIn integrations-logo\">
                                <h5 class=\"card-title mt-3\">";
        // line 126
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Referral Program"]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 127
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Referral Program is for organizations who can recommend prospective clients but would want Glue Up Teeam to handle the sales cycle. "]);
        echo "</p>
                              </div>
                            </div>
                        </div>
            </div>

        </div>
</section>
<section class=\"section \">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                            <span class=\"h6 text-color hideme\">";
        // line 140
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Application"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1, 2, 3. <br>Signing Up is That Easy"]);
        echo "</h2>
                         
                  </div>
                </div>
                
            </div>
             <div class=\"row mx-auto\">
                     <div class=\"col-lg-6 text-left pb-4 mx-auto\">
                        <div class=\"block text-left\">
                          <h2 class=\"mt-5 mb-4 position-relative content-title  hideme\">";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Apply"]);
        echo "</h2>
                          <p class=\"card-text mb-5\">";
        // line 151
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Complete one of the applications for the appropriate partnership program listed above, and we’ll schedule a call with you within a week to discuss next steps."]);
        echo "</p>
                        </div>
                    </div>
            </div>
             <div class=\"row mx-auto\">
                     <div class=\"col-lg-6 text-left pb-4 mx-auto\">
                        <div class=\"block text-left\">
                          <h2 class=\"mt-5 mb-4 position-relative content-title  hideme\">";
        // line 158
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sign an agreement"]);
        echo "</h2>
                          <p class=\"card-text mb-5\">";
        // line 159
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Once the appropriate contract is signed, we’ll begin the onboarding process as soon as possible."]);
        echo "</p>
                        </div>
                    </div>
            </div>
            <div class=\"row mx-auto\">
                     <div class=\"col-lg-6 text-left pb-4 mx-auto\">
                        <div class=\"block text-left\">
                          <h2 class=\"mt-5 mb-4 position-relative content-title  hideme\">";
        // line 166
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Start collecting commissions"]);
        echo "</h2>
                          <p class=\"card-text mb-5\">";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With the help of your dedicated Partner Manager, we’ll get you onboarded and trained quickly."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" You can begin closing deals, enabling customers, and collecting commissions in no time."]);
        echo "</p>
                        </div>
                    </div>
            </div>
</section>
";
        // line 173
        echo "<section class=\"section bg-grey\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/preview.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 181
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Application"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 182
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1, 2, 3. Signing Up is That Easy"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 184
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Integrate Glue Up features into your own application or website in a fast, easy, and secure way using our powerful APIs. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle\">1</i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 191
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Detailed API Documentation"]);
        echo "</p>
                                    </div> 
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle\">1</i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Detailed API Documentation"]);
        echo "</p>
                                    </div> 
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle\">1</i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 199
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Detailed API Documentation"]);
        echo "</p>
                                    </div> 
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 203
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Subdomain Access"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-navigation\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 207
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
        // line 219
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 220
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/resources/partners.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 220,  396 => 219,  381 => 207,  374 => 203,  367 => 199,  360 => 195,  353 => 191,  343 => 184,  338 => 182,  334 => 181,  327 => 177,  321 => 173,  312 => 167,  308 => 166,  298 => 159,  294 => 158,  284 => 151,  280 => 150,  268 => 141,  264 => 140,  248 => 127,  244 => 126,  240 => 125,  230 => 118,  226 => 117,  222 => 116,  212 => 109,  197 => 99,  192 => 97,  185 => 94,  180 => 92,  158 => 72,  154 => 71,  149 => 69,  142 => 64,  138 => 63,  133 => 61,  126 => 56,  122 => 55,  117 => 53,  109 => 47,  104 => 42,  98 => 39,  91 => 35,  79 => 26,  75 => 25,  61 => 14,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/resources/partners.htm", "");
    }
}
