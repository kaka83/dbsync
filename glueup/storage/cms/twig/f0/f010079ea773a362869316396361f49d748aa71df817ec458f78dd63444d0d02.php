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

/* /var/www/html/glueup/themes/glueup/partials/demoform/default.htm */
class __TwigTemplate_393453fb465228aac99aa34b83a9eab60a5ff4dd906816e222d86a06b38f348c extends \Twig\Template
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
                        
                            <div class=\"form-group\">
                                <label for=\"full_name\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Full Name"]);
        echo "</label>
                                <input type=\"text\" id=\"full_name\" name=\"full_name\" class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone Number"]);
        echo "</label>
                                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Address"]);
        echo "</label>
                                <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Company Name"]);
        echo "</label>
                                <input type=\"text\" id=\"company\" name=\"company\" class=\"form-control\" value=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Website URL"]);
        echo "</label>
                                <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"numemployees\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How many employees do you have?"]);
        echo "</label>
                                <input type=\"text\" id=\"numemployees\" name=\"numemployees\" class=\"form-control\" value=\"\">
                            </div>
                           ";
        // line 39
        echo "                           <div class=\"form-group\">
                                <label for=\"solution_buying\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Solution"]);
        echo "</label>
                                <select name=\"solution_buying\" id=\"solution_buying\">
                                    <option value=\"sol-1\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "</option>
                                    <option value=\"sol-2\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management Suite"]);
        echo "</option>
                                    <option value=\"sol-3\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Management Suite"]);
        echo "</option>
                                    <option value=\"sol-4\">";
        // line 45
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events Management Suite"]);
        echo "</option>
                                    <option value=\"sol-5\">";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training Management Suite"]);
        echo "</option>
                                    <option value=\"sol-6\">";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations Management Suite"]);
        echo "</option>
                                </select>
                             </div>
                             ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/hidden-fields-form.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "                          \t \t
                        
                            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get a Demo"]);
        echo "</button>
                        
                        </form>
            <!-- // Modal -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/demoform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 53,  137 => 51,  133 => 50,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  111 => 43,  107 => 42,  102 => 40,  99 => 39,  93 => 32,  86 => 28,  79 => 24,  72 => 20,  65 => 16,  58 => 12,  52 => 9,  47 => 7,  41 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/demoform/default.htm", "");
    }
}
