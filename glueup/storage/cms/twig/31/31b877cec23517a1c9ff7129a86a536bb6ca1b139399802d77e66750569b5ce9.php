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

/* /var/www/html/glueup/themes/glueup/partials/site/cookiealert.htm */
class __TwigTemplate_3fbc9c8d5af05aa48f8a49dc7b2b64f439d3af77410fbfc920260532b090dfac extends \Twig\Template
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
        echo "<!-- START Bootstrap-Cookie-Alert -->
    
<div class=\"alert text-center cookiealert\" role=\"alert\">
\t<div class=\"container text-left\" style=\"display: flex; flex-wrap: wrap; -webkit-box-pack: center; -webkit-justify-content: center; -ms-flex-pack: center; justify-content: center;\">
\t\t<div class=\"row mx-auto align-items-center align-self-center\">
\t\t\t<div class=\"col-md-10\">
\t\t\t<span class=\" text-white font-weight-light\" style=\"padding-top:10px; display:block; padding: 0 0 0 4px; font-size:12px; \">\t";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We use cookies to make Glue Up’s website better. Cookies help to provide a more personalized and relevant experience for you, and web analytics for us."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" To learn more, and to see a full list of cookies we use, check out our"]);
        echo " <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/cookie-policy");
        echo "\" rel=\"noreferrer\" target=\"_blank\" class=\"text-white\" style=\"color:white!important;\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cookie Policy"]);
        echo ".</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-2\">
            <button type=\"button\" class=\"py-2 btn btn-labeled btn-light acceptcookies\"><span class=\"btn-label\"><i class=\"\">&#x1F36A; </i></span>";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" I Agree"]);
        echo "</button>
            </div>
        </div>
\t</div>
</div>
<!-- END Bootstrap-Cookie-Alert -->
<script src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/cookiealert.js");
        echo "\" async></script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/cookiealert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  57 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/cookiealert.htm", "");
    }
}
