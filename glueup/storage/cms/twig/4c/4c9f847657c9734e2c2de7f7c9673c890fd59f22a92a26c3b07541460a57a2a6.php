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

/* /var/www/html/glueup/plugins/hariadi/share/components/share/default.htm */
class __TwigTemplate_32e2c552c2f4f077e4ebe4a2f0c82df0d7d174b1c2435da0f518581c8de46b9c extends \Twig\Template
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
        echo "<div class=\"oc-share\">
    <div class=\"btn-group\">
      <button class=\"btn btn-default btn-xs disabled\">Share:</button>

      \t";
        // line 5
        if (($context["facebook"] ?? null)) {
            // line 6
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Facebook\" href=\"https://www.facebook.com/sharer.php?u=";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
            <i class=\"icon-facebook\"></i>
        </a>
        ";
        }
        // line 10
        echo "
        ";
        // line 11
        if (($context["twitter"] ?? null)) {
            // line 12
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Twitter\" href=\"https://twitter.com/share?url=";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "&text=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
            <i class=\"icon-twitter\"></i>
        </a>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if (($context["googleplus"] ?? null)) {
            // line 18
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Google Plus\" href=\"https://plus.google.com/share?url=";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
            <i class=\"icon-google-plus\"></i>
        </a>
        ";
        }
        // line 22
        echo "
        ";
        // line 23
        if (($context["tumblr"] ?? null)) {
            // line 24
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Tumblr\" href=\"https://www.tumblr.com/share/link?url=";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
            <i class=\"icon-tumblr\"></i>
        </a>
        ";
        }
        // line 28
        echo "
        ";
        // line 29
        if (($context["linkedin"] ?? null)) {
            // line 30
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On LinkedIn\" href=\"https://www.linkedin.com/shareArticle?url=";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
            <i class=\"icon-linkedin\"></i>
        </a>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if (($context["reddit"] ?? null)) {
            // line 36
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Reddit\" href=\"https://reddit.com/submit?url=";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
            <i class=\"icon-reddit\"></i>
        </a>
        ";
        }
        // line 40
        echo "
        ";
        // line 41
        if (($context["digg"] ?? null)) {
            // line 42
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Digg\" href=\"http://digg.com/submit?url=";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "&title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
            <i class=\"icon-digg\"></i>
        </a>
        ";
        }
        // line 46
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/plugins/hariadi/share/components/share/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  131 => 42,  129 => 41,  126 => 40,  116 => 36,  114 => 35,  111 => 34,  101 => 30,  99 => 29,  96 => 28,  86 => 24,  84 => 23,  81 => 22,  73 => 18,  71 => 17,  68 => 16,  58 => 12,  56 => 11,  53 => 10,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/plugins/hariadi/share/components/share/default.htm", "");
    }
}
