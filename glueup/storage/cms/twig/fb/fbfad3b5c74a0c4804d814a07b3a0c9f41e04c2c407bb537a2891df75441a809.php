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

/* /var/www/html/glueup/themes/glueup/partials/landing/header-demo.htm */
class __TwigTemplate_44c8a726258b536864a6bf6e4dc9d6b147c5e6d97eddcaf6194f0ec0a811407b extends \Twig\Template
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
        echo "<div class=\"nav-menu fixed-top position-fixed hello\" style=\"position:fixed;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <nav class=\"navbar navbar-expand-lg\">
                    ";
        // line 6
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 7
            echo "                    <span class=\"navbar-brand\" style=\"padding: 1rem 0px;\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glueup-logo-zh.svg");
            echo "\" class=\"logo img-fluid lazyload\" alt=\"logo\" /></span>
                    ";
        } else {
            // line 9
            echo "                     <span class=\"navbar-brand\" style=\"padding: 1rem 0px;\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glueup-logo-en.svg");
            echo "\" class=\"logo img-fluid lazyload\" alt=\"logo\" /></span>
                     ";
        }
        // line 11
        echo "                    
                    ";
        // line 13
        echo "                   
                </nav>
            </div>
        </div>
    </div>
     ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 18)) {
            // line 19
            echo "     <div class=\"progress-container\">
                            <div class=\"progress-bar\" id=\"myBar\" value=\"0\" max=\"100\"></div>
                      </div>
    ";
        }
        // line 23
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/landing/header-demo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  74 => 19,  72 => 18,  65 => 13,  62 => 11,  54 => 9,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/landing/header-demo.htm", "");
    }
}
