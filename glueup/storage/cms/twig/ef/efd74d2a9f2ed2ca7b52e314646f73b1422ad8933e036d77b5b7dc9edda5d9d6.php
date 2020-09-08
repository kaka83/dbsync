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

/* /var/www/html/glueup/themes/glueup/partials/elements/hero-email-cta.htm */
class __TwigTemplate_963e871f3047d225d5e4b9cafbaa41cbf8d9ff824016f755656fea9344b3fceb extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-10 input-group mt-3\">
        <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Email"]);
        echo "\" aria-label=\"email\" class=\"form-control has_background\">
        <div class=\"input-group-append\">
            <button class=\"btn btn-primary btn-round-full pointer\" value=\"Submit\" id=\"emailtomodal\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#contact-paygage\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Book a Demo"]);
        echo "</button>
                               ";
        // line 7
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/elements/hero-email-cta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/elements/hero-email-cta.htm", "");
    }
}
