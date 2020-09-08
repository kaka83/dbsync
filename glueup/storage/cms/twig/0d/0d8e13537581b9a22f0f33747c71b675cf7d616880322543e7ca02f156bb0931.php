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

/* /var/www/html/glueup/themes/glueup/partials/whitepaperform/default.htm */
class __TwigTemplate_445f9e72ae30f1457116d540c6bc8e2aa8f423d7b87f435070a19bcc5cc230fa extends \Twig\Template
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
        echo "<!-- // form -->

                                     ";
        // line 5
        echo "                        <form data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\" id=\"modal__submit\">
                        
                            ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                        
                            <div id=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
                            \t";
        // line 10
        if ((((isset($context["whitepapercover"]) || array_key_exists("whitepapercover", $context))) ? (_twig_default_filter(($context["whitepapercover"] ?? null), false)) : (false))) {
            echo " 
                        <img src=\"";
            // line 11
            echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["whitepapercover"] ?? null));
            echo "\" title=\"\" alt=\"";
            echo twig_escape_filter($this->env, ($context["whitepapertitle"] ?? null), "html", null, true);
            echo "\" class=\"img-fluid\" />
              ";
        }
        // line 13
        echo "                            <div class=\"form-group\">
                                <label for=\"full_name\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Full Name"]);
        echo "</label>
                                <input type=\"text\" id=\"full_name\" name=\"full_name\" class=\"form-control\">
                            </div>
                            ";
        // line 21
        echo "                            <div class=\"form-group\">
                                <label for=\"email\">";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Address"]);
        echo "</label>
                                <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"company\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Company Name"]);
        echo "</label>
                                <input type=\"text\" id=\"company\" name=\"company\" class=\"form-control\" value=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"website\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Website URL"]);
        echo "</label>
                                <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"\">
                            </div>
                            ";
        // line 37
        echo "                           
                             
                             ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/hidden-fields-form.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "                          \t      \t<div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
                          \t <label for=\"wp-title\" style=\"visibility:hidden;\"> </label>
                        \t <input type=\"text\" id=\"wp-title\" name=\"wptitle\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["whitepapertitle"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["whitepapertitle"] ?? null), "html", null, true);
        echo "\" aria-label=\"wp-title\" class=\"form-control has_background\" style=\"visibility:hidden;\">
                          \t</div>
                          \t<div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
                          \t <label for=\"wp-link\" style=\"visibility:hidden;\"> </label>
                        \t <input type=\"text\" id=\"wp-link\" name=\"wplink\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["whitepaperurl"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["whitepaperurl"] ?? null), "html", null, true);
        echo "\" aria-label=\"wp-link\" class=\"form-control has_background\" style=\"visibility:hidden;\">
                          \t</div>
                          \t<div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
                          \t <label for=\"wp-image\" style=\"visibility:hidden;\"> </label>
                        \t <input type=\"text\" id=\"wp-image\" name=\"wpimage\" placeholder=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["whitepapercover"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["whitepapercover"] ?? null), "html", null, true);
        echo "\" aria-label=\"wp-image\" class=\"form-control has_background\" style=\"visibility:hidden;\">
                          \t</div>
                          
                        
                            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get your copy"]);
        echo "</button>
                        
                        </form>
            <!-- // Modal -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/whitepaperform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  129 => 50,  120 => 46,  111 => 42,  107 => 40,  103 => 39,  99 => 37,  93 => 30,  86 => 26,  79 => 22,  76 => 21,  70 => 14,  67 => 13,  60 => 11,  56 => 10,  52 => 9,  47 => 7,  41 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/whitepaperform/default.htm", "");
    }
}
