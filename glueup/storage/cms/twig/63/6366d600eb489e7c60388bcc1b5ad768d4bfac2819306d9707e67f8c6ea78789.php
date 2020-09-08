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

/* /var/www/html/glueup/themes/glueup/partials/support/default.htm */
class __TwigTemplate_d3a647b0725bfdeb0ae24160310347ec6832b8d772ee4bc77a8681b04db2d6da extends \Twig\Template
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
    <div id=\"support\" class=\"modal fade centered-modal\" role=\"dialog\" >
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
                                     <h4 class=\"t-5 modal-title\">";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Support"]);
        echo " </h4>
                                     <p>";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We're here to help. Please fill out this quick form and we'll get back to you shortly."]);
        echo "</p>
                        <form data-request=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\" id=\"modal__submit\">
                        
                            ";
        // line 23
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                        
                            <div id=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
                        
                            <div class=\"form-group\">
                                <label for=\"full_name\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Full Name"]);
        echo "</label>
                                <input type=\"text\" id=\"full_name\" name=\"full_name\" class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone Number"]);
        echo "</label>
                                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Address"]);
        echo "</label>
                                <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"support-message\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Message"]);
        echo "</label>
                                <textarea id=\"support-message\" name=\"support-message\" class=\"form-control\" value=\"\" rows=\"4\"></textarea>
                            </div>
                           ";
        // line 54
        echo "                        
                          
                        
                            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</button>
                        
                        </form>
                                </div>
                            </div> 
     
                        </div>
                    </div>
                </div>
           
            
            
            <!-- // Modal -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/support/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 57,  111 => 54,  105 => 40,  98 => 36,  91 => 32,  84 => 28,  78 => 25,  73 => 23,  68 => 21,  64 => 20,  60 => 19,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/support/default.htm", "");
    }
}
