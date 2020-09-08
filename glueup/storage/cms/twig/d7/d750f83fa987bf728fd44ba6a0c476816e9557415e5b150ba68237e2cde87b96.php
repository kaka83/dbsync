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

/* /var/www/html/glueup/themes/glueup/layouts/glueup-demo.htm */
class __TwigTemplate_37537413ecd1a85ad65a1d325b19b6cc616a063c8e0d86aab06aa1eb2bf890c4 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("landing/meta-landing.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</head>

<body data-spy=\"scroll\" data-target=\"#navbar\" data-offset=\"80\" data-gr-c-s-loaded=\"true\">
";
        // line 11
        echo "<div style=\"background: background: #0d62fe; position:absolute; height:20vh; width:100%; top:-20vh;\">
</div>
";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("landing/header-demo.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
<!--<div class=\"main-wrapper\">";
        // line 15
        echo "-->
";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 17
        echo "
";
        // line 18
        if ((($context["activeLocale"] ?? null) === "cn")) {
            // line 19
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer-cn.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 21
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/cookiealert.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 24
        echo "</div>";
        // line 25
        echo "
<div class=\"modal-wrapper\">
";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/success-modal.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/general-modal.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/support-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/signup-modal.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
";
        // line 33
        echo "</div>
";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("hubspotTrackingCode"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 37
        echo "</body>
<!-- HIC SUNT LEONES -->
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/layouts/glueup-demo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 37,  125 => 36,  121 => 35,  118 => 33,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  95 => 25,  93 => 24,  88 => 22,  84 => 21,  79 => 19,  77 => 18,  74 => 17,  72 => 16,  69 => 15,  66 => 14,  62 => 13,  58 => 11,  53 => 7,  49 => 6,  46 => 5,  44 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/layouts/glueup-demo.htm", "");
    }
}
