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

/* /var/www/html/glueup/themes/glueup/partials/logos/logobar-community.htm */
class __TwigTemplate_bde9d0bd0ad406a9c46ac6c1b139eeba61266317e782ebee30800942005d59fe extends \Twig\Template
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
        // line 14
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-15.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 17
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-13.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 20
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-11.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 23
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-18.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 26
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-2.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                     <img src=\"";
        // line 29
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-8.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
            </div>
            <!--<img src=\"images/client-logos.png\" alt=\"client logos\" class=\"img-fluid\">-->
        </div>
    </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/logos/logobar-community.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  79 => 26,  73 => 23,  67 => 20,  61 => 17,  55 => 14,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/logos/logobar-community.htm", "");
    }
}
