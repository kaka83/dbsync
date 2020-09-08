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

/* /var/www/html/glueup/themes/glueup/partials/site/success-modal.htm */
class __TwigTemplate_631f85e48e1b3c12cbd79336765261e1668e2b1c062eaa3726759e8ebea820ee extends \Twig\Template
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
        echo "<div id=\"success\" class=\"modal fade centered-modal\" role=\"dialog\">
                <div class=\"modal-dialog\">
                
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    
                                  
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                </div>
                                <div class=\"modal-body text-center\">
                                          <!--  <div class=\"container paygage-hero-container\">
                                
                                   
                                    <div class=\"col-md-6 align-items-center align-self-center\">-->
                                          <img src=\"";
        // line 16
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership.svg");
        echo "\" class=\"paygage-visual\" style=\"max-width:400px; height:20vh;\" alt=\"paygage logo\">
                                          </br>
                                     <h3 class=\"t-5 modal-title\">";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Thank you!"]);
        echo "</h3>
                                     <p>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A Glue Up expert will be in touch with you shortly. If you need to contact us immediately, please reach out via live chat in the right corner of the screen."]);
        echo "</p>
                        
                                </div>
                    </div> 
     
                </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/success-modal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  59 => 18,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/success-modal.htm", "");
    }
}
