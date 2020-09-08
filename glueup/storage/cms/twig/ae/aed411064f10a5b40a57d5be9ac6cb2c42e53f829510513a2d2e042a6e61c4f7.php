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

/* /var/www/html/glueup/themes/glueup/partials/solutions/footer-cta-mem.htm */
class __TwigTemplate_a8fdbadd1afd21d9ec9e64c6844a27cb021006d4ccd13cc2f371ad2dbd4cb3f0 extends \Twig\Template
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
        // line 2
        echo "<section class=\"mt-70 \" id=\"pricing\">

\t<div class=\"container bg-grey rounded position-relative\"  style=\"overflow:hidden;\">
\t<img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Glueup-symbol.svg");
        echo "\" class=\"bg-logo\" alt=\"logo\">
        <div class=\"cta-block-2 p-xs-2 p-md-5 rounded\">
            <div class=\"row justify-content-center text-center align-items-center\">
                <div class=\"col-lg-10 mx-auto\">
                    <h2 class=\"p-4 mb-lg-0 text-center display-4 font-weight-bold\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Great engagement starts <span class=\"line\"><ins>here</ins></span>"]);
        echo "</h2>
                </div>
            </div>
            <div class=\"row justify-content-center text-center align-items-center\">
                <div class=\"col-lg-5 mx-auto pt-3\">
                    <div class=\"input-group mb-3\">
                        <input type=\"text\" id=\"email-bottom\" name=\"email\" placeholder=\"";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Email"]);
        echo "\" aria-label=\"email\" class=\"form-control has_background\">
                      <div class=\"input-group-append\">
                        <button class=\"btn btn-primary btn-round-full pointer\" value=\"Submit\" id=\"emailtomodal\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#contact-paygage\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Started"]);
        echo "</button>
                      </div>
                    </div>
                    ";
        // line 21
        echo "                </div>
            </div>
             <div class=\"row justify-content-center text-center align-items-center pb-5 pt-0\">
                <div class=\"col-lg-8 mx-auto\">
                   <span class=\"text-center small px-2\"><i class=\"align-middle icon-check\"></i> ";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All-in-One "]);
        echo "</span>
                    <span class=\"text-center small px-2\"><i class=\"align-middle icon-check\"></i> ";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cloud based"]);
        echo "</span>
                     <span class=\"text-center small px-2\"><i class=\"align-middle icon-check\"></i> ";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["User-centric"]);
        echo "</span>
                </div>
                
            </div>
                                
                     
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/solutions/footer-cta-mem.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  79 => 26,  75 => 25,  69 => 21,  63 => 17,  58 => 15,  49 => 9,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/solutions/footer-cta-mem.htm", "");
    }
}
