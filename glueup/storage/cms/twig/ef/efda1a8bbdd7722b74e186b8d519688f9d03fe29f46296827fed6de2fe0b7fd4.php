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

/* /var/www/html/glueup/themes/glueup/pages/culture.htm */
class __TwigTemplate_58af4f516d0e380714b1a471614601dc979d4ba86095234f22f69a596b85e610 extends \Twig\Template
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
        echo "<div class=\"generic \" id=\"generic\">  
        <div class=\"container\">
            <div class=\"row pt-5\">
                
                <div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
                      <h1>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Much more than <span class=\"line\"><ins>Software</ins></span>"]);
        echo "</h1>
                       ";
        // line 8
        echo "

                </div>
               <img class=\"col-md-offset-12 img-fluid hero-home\" style=\"\" src=\"";
        // line 11
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-hero1.svg");
        echo "\" alt=\"Glue Up helps you with events, memberships, CRM, email campaigns, finance and marketing tools.\">
            </div>
            <div class=\"row mx-auto\">
             <div class=\"col-md-7 hero align-self-center text-center mx-auto\">
                 
                </div>
            </div>
        </div> 
</div>

<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                        \t<span class=\"h6 text-color text-center mx-auto \">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our Mission"]);
        echo "</span>
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["To <span class=\"line\"><ins> transform </ins></span> the way professional communities enable and enrich relationships."]);
        echo "</h2>
                        </div>
                    </div>
            </div>
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto\">
                        <div class=\"block text-center\">
                        \t<span class=\"h6 text-color text-center mx-auto \">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our Vision"]);
        echo "</span>
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["To create a world where every person and organization uses our technology to <span class=\"line\"><ins> create opportunities </ins></span> for success."]);
        echo "</h2>
                        </div>
                    </div>
            </div>
            <div class=\"row\">

            <div class=\"section-title text-center mx-auto pt-5\">
                <span class=\"h6 text-color text-center mx-auto \">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our Values"]);
        echo "</span>
            </div>

            <div class=\"row text-center\">
                <div class=\"col-md-4 mx-auto pt-3\">
    \t\t\t   <i class=\"bullet-icon icon-engagement px-0\" ></i>            
                   <h4 class=\"mb-3 hideme\">";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Innovative"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We're always developing new ideas and effective tools to strengthen relationships for all people in all communities."]);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mx-auto pt-3\">
\t\t\t\t   <i class=\"bullet-icon icon-heart px-0\" ></i>            
                   <h4 class=\"mb-3 hideme\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Passionate"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The love for what we do flows through our veins. We celebrate our achievements often to strengthen our personal and professional relationships."]);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mx-auto pt-3\">
\t\t\t\t\t<i class=\"bullet-icon icon-onsite-tools px-0\" ></i>            
                   <h4 class=\"mb-3 hideme\">";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Solution Driven"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We keep moving to get things done; we work efficiently, methodically, and do not let obstacles get in our way."]);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mx-auto pt-3\">
\t\t\t\t\t<i class=\"bullet-icon icon-speaker px-0\" ></i>            
                   <h4 class=\"mb-3 hideme\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Professional"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We have high ethical standards, are accountable for our work, and ensure our communities' successes are at the center of what we do."]);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mx-auto pt-3\">
\t\t\t\t\t<i class=\"bullet-icon icon-social-share px-0\" ></i>            
                   <h4 class=\"mb-3 hideme\">";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collaborative"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We believe in the power of people working together, and that begins with us as we build on opportunities and share our successes."]);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mx-auto pt-3\">
\t\t\t\t\t<i class=\"bullet-icon icon-chat px-0\" ></i>            
                   <h4 class=\"mb-3 hideme\">";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Respectful"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We listen with care, act with kindness, and express ourselves openly with integrity."]);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mx-auto pt-3\">
\t\t\t\t\t<i class=\"bullet-icon icon-translation-switch px-0\" ></i>            
                   <h4 class=\"mb-3 hideme\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Diverse"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 79
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We bring people together, embracing all backgrounds and perspectives, to enrich every aspect of our organization and the communities we work with."]);
        echo "</p>
                </div>
                
            </div>
        </div>

    </div>
</section>
";
        // line 87
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['background'] = "bg-grey"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/offices"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 88
        echo "

";
        // line 90
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 91
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/culture.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 91,  198 => 90,  194 => 88,  189 => 87,  178 => 79,  174 => 78,  167 => 74,  163 => 73,  156 => 69,  152 => 68,  145 => 64,  141 => 63,  134 => 59,  130 => 58,  123 => 54,  119 => 53,  112 => 49,  108 => 48,  99 => 42,  89 => 35,  85 => 34,  75 => 27,  71 => 26,  53 => 11,  48 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/culture.htm", "");
    }
}
