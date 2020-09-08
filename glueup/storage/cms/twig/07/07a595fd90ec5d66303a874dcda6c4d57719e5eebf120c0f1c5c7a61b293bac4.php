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

/* /var/www/html/glueup/themes/glueup/layouts/whitepaper-layout.htm */
class __TwigTemplate_0ad3e4e284c288b88327996747895f63ad4e7aecf2b3eb3877d88b2b745f87f0 extends \Twig\Template
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
        echo "


 
</head>

<body data-spy=\"scroll\" data-target=\"#navbar\" data-offset=\"80\" data-gr-c-s-loaded=\"true\">
";
        // line 17
        echo "<div style=\"background: background: #0d62fe; position:absolute; height:20vh; width:100%; top:-20vh;\">
</div>
";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "
<!--<div class=\"main-wrapper\">";
        // line 21
        echo "-->
";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("landing/whitepaper-scaffold.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "
";
        // line 24
        if ((($context["activeLocale"] ?? null) === "cn")) {
            // line 25
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer-cn.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 27
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/cookiealert.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 30
        echo "</div>";
        // line 31
        echo "
<div class=\"modal-wrapper\">
";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/success-modal.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/general-modal.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/support-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/signup-modal.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "
";
        // line 39
        echo "</div>
";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("hubspotTrackingCode"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 43
        echo "</body>
<!-- HIC SUNT LEONES -->
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/layouts/whitepaper-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 43,  139 => 42,  135 => 41,  132 => 39,  129 => 37,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  109 => 31,  107 => 30,  102 => 28,  98 => 27,  93 => 25,  91 => 24,  88 => 23,  84 => 22,  81 => 21,  78 => 20,  74 => 19,  70 => 17,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  46 => 5,  44 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/layouts/whitepaper-layout.htm", "");
    }
}
