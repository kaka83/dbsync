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

/* /var/www/html/glueup/themes/glueup/partials/elements/logobar.htm */
class __TwigTemplate_9da2d1b87f74d79fd361ab98793fcea63a5854d0a8e515d906ac2663962b4801 extends \Twig\Template
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
        echo "<section class=\"\">
        <div class=\"container text-center\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto py-3\">
                        <div class=\"block text-center\">
                          
                             <p class=\"tagline\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Forward-looking teams choose Glue Up "]);
        echo " </p>
                        </div>
                    </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/inland-empire-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/virginia-tech-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/tempe-chamber-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                     <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/ite-met-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/queens-chamber-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/greenwich-village-chamber-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
            </div>
            <!--<img src=\"images/client-logos.png\" alt=\"client logos\" class=\"img-fluid\">-->
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/elements/logobar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  78 => 25,  72 => 22,  66 => 19,  60 => 16,  54 => 13,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/elements/logobar.htm", "");
    }
}
