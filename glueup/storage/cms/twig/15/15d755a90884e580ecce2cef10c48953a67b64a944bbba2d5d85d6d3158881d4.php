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

/* /var/www/html/glueup/themes/glueup/layouts/glueup-home.htm */
class __TwigTemplate_d1741b440298c152b06ec5e323f14f8a61547fff12ee3f523d0ea442d044f854 extends \Twig\Template
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
        // line 2
        echo "<!doctype html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["activeLocale"] ?? null), "html", null, true);
        echo "\">
";
        // line 4
        $context["CurrentLanguage"] = ($context["SelectedLanguage"] ?? null);
        // line 5
        echo "<head>
";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/googletag.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/linkedintag.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/language-exclusions.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "</head>
<meta name=\"google-site-verification\" content=\"2puqJcoyHkE5gfGvkajKb_uB5DsGB8Cnu7iL_6KYI70\" />
<body data-spy=\"scroll\" data-target=\"#navbar\" data-offset=\"80\" data-gr-c-s-loaded=\"true\">
";
        // line 14
        echo "<div style=\"background: background: #0d62fe; position:absolute; height:20vh; width:100%; top:-20vh;\">
</div>
";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "
<!--<div class=\"main-wrapper\">";
        // line 18
        echo "-->
";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 20
        echo "<!-- glue up is best -->
";
        // line 21
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 24
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 25
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/cookiealert.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 27
        echo "</div>";
        // line 28
        echo "
<div class=\"modal-wrapper\">
";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/success-modal.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/general-modal.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/support-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/signup-modal.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "
";
        // line 36
        echo "</div>
";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("hubspotTrackingCode"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 40
        echo "</body>
<!-- HIC SUNT LEONES -->
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/layouts/glueup-home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  137 => 39,  133 => 38,  130 => 36,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 28,  105 => 27,  100 => 25,  96 => 24,  91 => 22,  89 => 21,  86 => 20,  84 => 19,  81 => 18,  78 => 17,  74 => 16,  70 => 14,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  46 => 5,  44 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/layouts/glueup-home.htm", "");
    }
}
