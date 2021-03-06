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

/* /var/www/html/glueup/themes/glueup/partials/site/alert.htm */
class __TwigTemplate_05cca31f4a11f243321bda3cf0cc9f29bf076c4b4232610b61034e39a8dc4197 extends \Twig\Template
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
        echo "<div class=\"alert-top d-none d-sm-block\" style=\"padding:.5rem 0; background:#0D62FE; border-radius:0;\">
\t<div class=\"container-fluid  text-center\" style=\"display: flex; flex-wrap: wrap;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;\">
    <div><span class=\" text-white font-weight-light\" style=\"padding-top:10px; display:block; padding: 0 0 0 4px;  \">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["EventBank is now <span class=\"font-weight-bold\">Glue Up</span>. Learn why we have changed our identity and what it means to you and your community."]);
        echo " </span></div>
    <div>
    ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == "rebranding")) {
            // line 10
            echo "\t";
        } else {
            echo "<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("rebranding");
            echo "\" id=\"rebrand-button\" class=\"read-more d-inline-flex text-white\" style=\" padding-left:10px; \">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn More"]);
            echo " <i class=\"read-more-icon icon-arrow\" style=\"text-white\"></i></a>";
        }
        echo "</div>
    </div>
</div><!-- /alert top message  -->
<div class=\"alert-top d-block d-sm-none\" style=\"padding:.5rem 0; background:#0D62FE; border-radius:0;\">
\t<div class=\"container-fluid  text-center\" style=\"display: flex; flex-wrap: wrap;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;\">
    <div><span class=\" text-white font-weight-light\" style=\"padding-top:10px; display:block; padding: 0 0 0 4px; font-size:4vw; \">";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["EventBank is now <span class=\"font-weight-bold\">Glue Up</span>."]);
        echo " </span></div>
    <div>
    ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21) == "rebranding")) {
            // line 22
            echo "\t";
        } else {
            echo "<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("rebranding");
            echo "\" id=\"rebrand-button\" class=\"read-more d-inline-flex text-white\" style=\"padding-left:10px; font-size:4vw;\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn More"]);
            echo " <i class=\"read-more-icon icon-arrow\" style=\"text-white\"></i></a>";
        }
        echo "</div>
    </div>
</div><!-- /alert top message  -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/alert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  76 => 21,  71 => 19,  52 => 10,  50 => 9,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/alert.htm", "");
    }
}
