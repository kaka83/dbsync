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

/* /var/www/html/glueup/themes/glueup/pages/404-file-not-found.htm */
class __TwigTemplate_34c5503449e0cfe6f91381f79a7826264f0b09aaad79430394418a6a419af49b extends \Twig\Template
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
        echo "<header class=\"hero\" id=\"hero\">
        <div class=\"container paygage-hero-container\">
         \t<div class=\"row justify-content-center mx-auto\">
    \t\t\t<div class=\"col-md-7 align-self-center align-items-center text-center mx-auto align-self-center\">
    \t\t\t    <h1 class=\"content-title display-4\" style=\"font-weight:800;\">404</h1>
    \t\t\t\t<h2 class=\"content-title \">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["File Not Found"]);
        echo "</h2>
    \t\t\t\t<img src=\"";
        // line 7
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-404.svg");
        echo "\" class=\"paygage-visual pt-3\" alt=\"glue up hero section\">\t
    \t\t\t\t<p class=\"tagline\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["<span style=\"text-decoration: line-through;\">For</span>, oh, Four. <br>We are very sorry. Lets try to find something for you"]);
        echo "</p>
                    \t
    \t\t\t</div>
\t\t    </div>
                
                
                   
        </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/404-file-not-found.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/404-file-not-found.htm", "");
    }
}
