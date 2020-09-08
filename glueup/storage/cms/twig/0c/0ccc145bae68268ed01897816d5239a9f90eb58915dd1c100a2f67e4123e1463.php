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

/* /var/www/html/glueup/themes/glueup/partials/platform/integrations-bullets.htm */
class __TwigTemplate_58f6778111b32ea32589eb9aac38d8fa55c0f251fddc130df2db17cb7a8a8de0 extends \Twig\Template
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
        echo "<div class=\"col-lg-10 align-self-center mx-auto\">
    <div class=\"services__accordion row flex-row-reverse\">
            <div class=\"col-md-7 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t<div class=\"accordion__img desktop\">
\t\t\t\t    <div id=\"tab1-bullet-img\" class=\"firstshow\">
\t\t\t\t        <img class=\"feature-window desktop\" src=\"";
        // line 6
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" alt=\"chat\">
\t\t\t\t         
\t\t\t\t    </div>
\t\t\t\t    <div id=\"tab2-bullet-img\">
\t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/preview.svg");
        echo "\" alt=\"chat\">
\t\t\t\t    </div>
\t\t\t        <div id=\"tab3-bullet-img\">
    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/preview.svg");
        echo "\" alt=\"chat\">
    \t\t\t    </div>
\t\t\t     </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t<div class=\"services__accordion\">
\t\t\t\t  
                    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                        <i class=\"icon-engagement\"></i>
                        <span>";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it all from one place"]);
        echo "</span>
                        <div class=\"accordion__body firstshow\" style=\"display:none;\">
\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ultimate toolkit that has everything you and your community needs for maximum engagement."]);
        echo "
\t\t\t\t\t\t\t";
        // line 25
        echo "</p>
\t\t\t\t\t\t</div>
                    </div>
                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                        <i class=\"icon-overview\"></i>
                        <span>";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Start building with APIs"]);
        echo "</span>
                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build exactly what you need with flexible APIs and webhooks."]);
        echo "
\t\t\t\t\t\t\t";
        // line 33
        echo "</p>
\t\t\t\t\t\t</div>
                    </div>
                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                        <i class=\"icon-button\"></i>
                        <span>";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it simple for everyone"]);
        echo "</span>
                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and all your audiences’s absolute comfort."]);
        echo "
\t\t\t\t\t\t\t";
        // line 41
        echo "</p>
\t\t\t\t\t\t</div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/platform/integrations-bullets.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  106 => 40,  101 => 38,  94 => 33,  90 => 32,  85 => 30,  78 => 25,  74 => 24,  69 => 22,  57 => 13,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/platform/integrations-bullets.htm", "");
    }
}
