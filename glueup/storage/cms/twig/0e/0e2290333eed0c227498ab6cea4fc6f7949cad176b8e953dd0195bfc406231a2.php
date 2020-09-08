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

/* /var/www/html/glueup/themes/glueup/pages/contact.htm */
class __TwigTemplate_e09f2a62c57ecca5e5f403e708bfff009842bea68eb00a694dd4acff1edbce88 extends \Twig\Template
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
                
                <div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
                      <h1>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Let’s <span class=\"line\"><ins>Talk</ins></span>"]);
        echo "</h1>
                       ";
        // line 8
        echo "

                </div>
               
            </div>
            ";
        // line 18
        echo "        </div> 
</div>

<section class=\"section\">
        <div class=\"container\">
           
            ";
        // line 25
        echo "            <div class=\"row justify-content-center\">
            \t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title link-title py-2\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Support"]);
        echo "</h4>
\t\t\t\t\t\t\t\t   \t<p class=\"card-text pb-2 mb-5\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Have questions, suggestions or feature requests? Let us know what we can do to improve your Glue Up experience. "]);
        echo "</p>
\t\t\t\t\t\t\t\t    <input type=\"hidden\" id=\"solution1\" name=\"solution\" placeholder=\"Your solution\" value=\"";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "\" aria-label=\"solution\" class=\"form-control has_background\">
                                    <button class=\"btn mt-auto btn-outline-light pointer d-block mt-4\" value=\"Submit\" id=\"pricing-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#support\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Support"]);
        echo "</button>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title py-2\">";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sales"]);
        echo "</h4>
\t\t\t\t\t\t\t\t   \t<p class=\"card-text pb-2 mb-5\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ask our sales team about pricing or our solutions and we can show you our platform in a customized demo right away. "]);
        echo "</p>
\t\t\t\t\t\t\t\t    <input type=\"hidden\" id=\"solution1\" name=\"solution\" placeholder=\"Your solution\" value=\"";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "\" aria-label=\"solution\" class=\"form-control has_background\">
                                    <button class=\"btn mt-auto btn-outline-light pointer btn-block mt-4\" value=\"Submit\" id=\"pricing-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#contact-paygage\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Sales"]);
        echo "</button>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title py-2\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["General inquiries"]);
        echo "</h4>
\t\t\t\t\t\t\t\t   \t<p class=\"card-text pb-2 mb-5\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["For general questions, potential partnerships or media inquiries, please fill in the below form."]);
        echo "</p>
                                    <button class=\"btn mt-auto btn-outline-light pointer btn-block mt-4\" value=\"Submit\" id=\"pricing-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get in touch"]);
        echo "</button>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
            </div>
        </div>

</section>
";
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/offices"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        echo "\t\t\t
\t\t\t  






";
        // line 219
        echo "
";
        // line 220
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/pricing-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 221
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 222
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 222,  153 => 221,  149 => 220,  146 => 219,  136 => 60,  132 => 59,  121 => 51,  117 => 50,  113 => 49,  103 => 42,  99 => 41,  95 => 40,  91 => 39,  81 => 32,  77 => 31,  73 => 30,  69 => 29,  63 => 25,  55 => 18,  48 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/contact.htm", "");
    }
}
