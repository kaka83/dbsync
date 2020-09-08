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

/* /var/www/html/glueup/themes/glueup/partials/blog/blog-footer-cta.htm */
class __TwigTemplate_1b3177954d95f37f8338e8268338d28361d71feb4c9dcdcecd09aaf849a3f54e extends \Twig\Template
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

\t<div class=\"container ";
        // line 4
        echo twig_escape_filter($this->env, ($context["background"] ?? null), "html", null, true);
        echo " bg-grey rounded position-relative\"  style=\"overflow:hidden;\">
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
                        <input type=\"text\" id=\"email-bottom\" name=\"email\" placeholder=\"Your Email\" aria-label=\"email\" class=\"form-control has_background\">
                      <div class=\"input-group-append\">
                        <button class=\"btn btn-primary-reverse btn-round-full pointer\" value=\"Submit\" id=\"emailtomodal\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#contact-paygage\">Book a Demo</button>
                      </div>
                    </div>
                    ";
        // line 21
        echo "                </div>
            </div>
             <div class=\"row justify-content-center text-center align-items-center pb-5 pt-0\">
                <div class=\"col-lg-8 mx-auto\">
                   <span class=\"text-center small px-2\"><i class=\"align-middle icon-check\"></i> All-in-One </span>
                    <span class=\"text-center small px-2\"><i class=\"align-middle icon-check\"></i> Cloud based</span>
                     <span class=\"text-center small px-2\"><i class=\"align-middle icon-check\"></i> User-centric</span>
                </div>
                
            </div>
                                
                     
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/blog/blog-footer-cta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  52 => 9,  45 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/blog/blog-footer-cta.htm", "");
    }
}
