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

/* /var/www/html/glueup/themes/glueup/pages/resources/whitepapers.htm */
class __TwigTemplate_b9991b9ce4c008d4f170c38875d7e1fa202249db83c3c4547c1c2faa4b298a50 extends \Twig\Template
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
        echo "<div class=\"generic\" id=\"generic\">  
        <div class=\"container\">
            <div class=\"row pt-5\">
                
                <div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
                      <h1>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Whitepapers"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Broaden your knowledge with industry whitepapers."]);
        echo " </p>


                </div>
               
            </div>
        </div> 
</div>

<section class=\"section pt-0\">
 \t<div class=\"container paygage-hero-container\">
            <div class=\"row flex-row\">
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <a href=\"";
        // line 20
        echo $this->extensions['System\Twig\Extension']->appFilter("/whitepapers/How-Digital-Transformation-Enables-Professional-Communities-to-Thrive");
        echo "\"><img src=\"";
        echo $this->extensions['System\Twig\Extension']->mediaFilter("Whitepaper1@2x.png");
        echo "\" class=\"paygage-visual rounded\" alt=\"logo\"></a>

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                \t<h2 class=\"pt-3\"> ";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How Digital Transformation Enables Professional Communities to Thrive"]);
        echo "</h2>
                    <p class=\"tagline pb-3\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Professional communities globally are feeling the impact of the COVID-19 pandemic."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Staying connected as well as keeping members informed are increasingly challenging as communities are not able to meet in person."]);
        echo "
                   </p><br>
                   <a href=\"";
        // line 27
        echo $this->extensions['System\Twig\Extension']->appFilter("/whitepapers/How-Digital-Transformation-Enables-Professional-Communities-to-Thrive");
        echo "\" class=\"read-more d-flex\"> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get your copy"]);
        echo "<i class=\"read-more-icon icon-arrow\"></i></a>

                </div>
                
            </div>
        </div> 
</section>
    
";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/resources/whitepapers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  97 => 35,  84 => 27,  77 => 25,  73 => 24,  64 => 20,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/resources/whitepapers.htm", "");
    }
}
