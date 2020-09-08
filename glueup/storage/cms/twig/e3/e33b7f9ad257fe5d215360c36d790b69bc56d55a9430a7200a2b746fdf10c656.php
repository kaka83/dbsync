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

/* /var/www/html/glueup/plugins/rainlab/blog/components/categories/default.htm */
class __TwigTemplate_229404801d18ae58131efb8b641344c50eafafea5a60c796c1891637c9d3c29b extends \Twig\Template
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", [], "any", false, false, false, 1)) > 0)) {
            // line 2
            echo "    <ul class=\"category-list\">
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->source,             // line 4
($context["__SELF__"] ?? null), "categories", [], "any", false, false, false, 4)            ;
            $context['__cms_partial_params']['currentCategorySlug'] = twig_get_attribute($this->env, $this->source,             // line 5
($context["__SELF__"] ?? null), "currentCategorySlug", [], "any", false, false, false, 5)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 3
($context["__SELF__"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "    </ul>
";
        } else {
            // line 9
            echo "    <p>No categories were found.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/plugins/rainlab/blog/components/categories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 7,  48 => 3,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/plugins/rainlab/blog/components/categories/default.htm", "");
    }
}
