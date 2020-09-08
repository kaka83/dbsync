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

/* /var/www/html/glueup/themes/glueup/partials/generic/hero-generic.htm */
class __TwigTemplate_eb9e87db2779fded35b619824b747db4c53bde1329b27a82706139daee8bf789 extends \Twig\Template
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
        echo "<div class=\"generic bg-1\" id=\"generic\">
        <div class=\"container\">
         \t<div class=\"row\">
    \t\t\t<div class=\"col-md-8 align-self-center align-items-center mx-auto align-self-center\">
    \t\t\t\t<h1 class=\"title pt-5\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>
    \t\t\t\t<p class=\"tagline\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "description", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
    \t\t\t</div>
\t\t    </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/generic/hero-generic.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/generic/hero-generic.htm", "");
    }
}
