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

/* /var/www/html/glueup/themes/glueup/pages/legal/terms-and-conditions-organizations.htm */
class __TwigTemplate_fdb9ebc01eafa6be945c8a81cdd03624f77ce0a3cec826cb651bf867f012b0cd extends \Twig\Template
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
        echo "<section class=\" legal\" id=\"terms_org\">
<div class=\"pt-0\">
        <div class=\"container\">
        <div class=\"row pt-4\">
        <div class=\"col-md-8 align-self-center mx-auto pb-5\">
          ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("terms-org"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "           </div>
           </div>
        </div>
        </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/legal/terms-and-conditions-organizations.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/legal/terms-and-conditions-organizations.htm", "");
    }
}
