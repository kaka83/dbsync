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

/* /var/www/html/glueup/themes/glueup/partials/general/default.htm */
class __TwigTemplate_3120947d2cb43e2121b5d7e1a337f11223b6d6f9e0ece6e6b50e15819256193c extends \Twig\Template
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
        echo "<!-- // Modal -->
    <div id=\"general\" class=\"modal fade centered-modal\" role=\"dialog\" >
                <div class=\"modal-dialog\">
                
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            
                          
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                                          <!--  <div class=\"container paygage-hero-container\">
                                
                                   
                                    <div class=\"col-md-6 align-items-center align-self-center\">-->
                                          <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Glueup-symbol.svg");
        echo "\" class=\"paygage-visual\" style=\"max-width:40px; height:auto;\" alt=\"paygage logo\">
                                          </br>
                                     <h4 id=\"general-modal-title\" class=\"t-5 modal-title general-inquiries\">";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["General Inquiries"]);
        echo " </h4>
                                     <h4 id=\"general-modal-title\" class=\"t-5 modal-title offices\" style=\"display:none;\">";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact our office in"]);
        echo " </h4>
                                     <p>";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We're here to help. Please fill out this quick form and we'll get back to you shortly."]);
        echo "</p>
                        <form data-request=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\" id=\"modal__submit\">
                        
                            ";
        // line 24
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                        
                            <div id=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
                        
                            <div class=\"form-group\">
                                <label for=\"full_name\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Full Name"]);
        echo "</label>
                                <input type=\"text\" id=\"full_name\" name=\"full_name\" class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone Number"]);
        echo "</label>
                                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Address"]);
        echo "</label>
                                <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"support-message\">";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Message"]);
        echo "</label>
                                <textarea id=\"support-message\" name=\"support-message\" class=\"form-control\" value=\"\" rows=\"4\"></textarea>
                            </div>
                            ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/hidden-fields-form.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "                           ";
        // line 56
        echo "                        
                          
                        
                            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</button>
                        
                        </form>
                                </div>
                            </div> 
     
                        </div>
                    </div>
                </div>
           
            </div>
            
            <!-- // Modal -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/general/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 59,  121 => 56,  119 => 45,  115 => 44,  109 => 41,  102 => 37,  95 => 33,  88 => 29,  82 => 26,  77 => 24,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/general/default.htm", "");
    }
}
