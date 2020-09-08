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

/* /var/www/html/glueup/plugins/rainlab/translate/components/localepicker/default.htm */
class __TwigTemplate_a9f5bd84858ee2fe4d7a814b5c471044e37bf1aaa9e7dd4e07d610b19576b272 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open"]);
        echo "
    <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 4
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\" ";
            echo ((($context["code"] == ($context["activeLocale"] ?? null))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </select>
";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/plugins/rainlab/translate/components/localepicker/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  59 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/plugins/rainlab/translate/components/localepicker/default.htm", "");
    }
}
