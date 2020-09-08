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

/* /var/www/html/glueup/themes/glueup/partials/landing/whitepaper-scaffold.htm */
class __TwigTemplate_8ebc484db6c4ce77dcbb6d3750fbaddf74fd92e34e37f8374cae78c526e61889 extends \Twig\Template
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
        echo "<header id=\"hero\" style=\"min-height:100vh; height:100%;\">
\t<div class=\"container pt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 hero align-self-top text-md-left text-center\">
\t\t\t\t<p class=\"tagline pb-3 primary\">Whitepaper</p>
\t\t\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, ($context["whitepapertitle"] ?? null), "html", null, true);
        echo "</h1>

\t\t\t\t";
        // line 8
        echo ($context["whitepaperdes"] ?? null);
        echo "
\t\t\t\t
\t\t\t\t</div>
\t\t\t<div class=\"col-md-6 hero align-self-top text-md-left text-center\">
\t\t\t\t<div class=\"glue-up-form shadow-sm px-5 py-5\" style=\"background:#fff;\">
\t\t\t\t\t";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("whitepaperform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "\t\t\t\t</div></div></div></div>
</header>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/landing/whitepaper-scaffold.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 13,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/landing/whitepaper-scaffold.htm", "");
    }
}
