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

/* /var/www/html/glueup/themes/glueup/pages/about.htm */
class __TwigTemplate_63a85d84bbd3752b68b31afe4f6e6eef60a862b1ce497159e526ba269a63bc2a extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We are <span class=\"line\"><ins>Glue Up, </ins></span><br> your engagement management platform"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["See how are we transforming professional communities through digital solutions focusing on automation and engagement."]);
        echo " </p>


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
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["To <span class=\"line\"><ins> transform </ins></span> the way professional communities enable and enrich relationships."]);
        echo "</h2>
                                ";
        // line 27
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("aboutus.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 28
        echo "                        </div>
                    </div>
            </div>
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How Glue Up can help"]);
        echo "</h2>
                                ";
        // line 35
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("aboutus2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 36
        echo "                        </div>
                    </div>
            </div>
            </div>
        </div>
</section>

<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How we got here"]);
        echo "</h2>
                        </div>
                    </div>
            </div>
            <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        ";
        // line 55
        echo "                        <div id=\"timeline\" class=\"flex-parent\">
                        \t<div  class=\"input-flex-container\">
                        \t\t<input type=\"radio\" name=\"timeline-dot\" data-description=\"2013\" checked>
                        \t\t<div class=\"dot-info\" data-description=\"2013\">
                        \t\t\t<span class=\"year\">";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["2013"]);
        echo "</span>
                        \t\t\t<span class=\"label\">";
        // line 60
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["EventBank"]);
        echo "</span>
                        \t\t</div>
                        \t\t<input type=\"radio\" name=\"timeline-dot\" data-description=\"2015\">
                        \t\t<div class=\"dot-info\" data-description=\"2015\">
                        \t\t\t<span class=\"year\">";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["2015"]);
        echo "</span>
                        \t\t\t<span class=\"label\">";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Research"]);
        echo "</span>
                        \t\t</div>
                        \t\t<input type=\"radio\" name=\"timeline-dot\" data-description=\"2017\">
                        \t\t<div class=\"dot-info\" data-description=\"2017\">
                        \t\t\t<span class=\"year\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["2017"]);
        echo "</span>
                        \t\t\t<span class=\"label\">";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Development"]);
        echo "</span>
                        \t\t</div>
                        \t\t<input type=\"radio\" name=\"timeline-dot\" data-description=\"2018\">
                        \t\t<div class=\"dot-info\" data-description=\"2018\">
                        \t\t\t<span class=\"year\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["2018"]);
        echo "</span>
                        \t\t\t<span class=\"label\">";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Expansion"]);
        echo "</span>
                        \t\t</div>
                        \t\t<input type=\"radio\" name=\"timeline-dot\" data-description=\"2019\">
                        \t\t<div class=\"dot-info\" data-description=\"2019\">
                        \t\t\t<span class=\"year\">";
        // line 79
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["2019"]);
        echo "</span>
                        \t\t\t<span class=\"label\">";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Recognition"]);
        echo "</span>
                        \t\t</div>
                        \t\t<input type=\"radio\" name=\"timeline-dot\" data-description=\"2020\">
                        \t\t<div class=\"dot-info\" data-description=\"2020\">
                        \t\t\t<span class=\"year\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["2020"]);
        echo "</span>
                        \t\t\t<span class=\"label\">";
        // line 85
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Innovation"]);
        echo "</span>
                        \t\t</div>
                        \t\t<input type=\"radio\" name=\"timeline-dot\" data-description=\"20201\">
                        \t\t<div class=\"dot-info\" data-description=\"20201\">
                        \t\t\t<span class=\"year\">";
        // line 89
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["August"]);
        echo "</span>
                        \t\t\t<span class=\"label\" style=\"color:#0d62fe;\">";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up"]);
        echo "</span>
                        \t\t</div>
                        \t\t
                        \t\t<div id=\"timeline-descriptions-wrapper\" class=\"text-center\">
                        \t\t\t<div class=\"timeline-block\" data-description=\"2013\"><span><img src=\"";
        // line 94
        echo $this->extensions['System\Twig\Extension']->mediaFilter("eventbank-logo.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid py-3 mx-auto paygage-visual lazy \"></span><p>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Olivia and Eric launched EventBank to create an event management software that could help automating and leveraging the data from their events."]);
        echo "</p></div>
                        \t\t\t<div class=\"timeline-block\" data-description=\"2015\"><p>";
        // line 95
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Through partnership with the different Associations and Chambers of Commerce, EventBank develops its award winning Membership Management module."]);
        echo "</p></div>
                        \t\t\t<div class=\"timeline-block\" data-description=\"2017\"><p>";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps bring EventBank all-in-one functionalities to mobile devices."]);
        echo "</p></div>
                        \t\t\t<div class=\"timeline-block\" data-description=\"2018\"><p>";
        // line 97
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["EventBank expands its presence through APAC by opening offices in Singapore and Hong Kong and Russia via joint-venture."]);
        echo "</p></div>
                        \t\t\t<div class=\"timeline-block\" data-description=\"2019\"><p>";
        // line 98
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["EventBank is recognized as leading tech company in Washington DC area"]);
        echo "</p></div>
                        \t\t\t<div class=\"timeline-block\" data-description=\"2020\"><p>";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Launched new “Community Engagement” modules"]);
        echo "</p></div>
                        \t\t\t<div class=\"timeline-block\" data-description=\"20201\"><p>";
        // line 100
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Because paper currency is for noobs."]);
        echo "</p></div>
                        \t\t</div>
                        \t</div>
                        </div>
                 </div>
            </div>
        </div>
</section>
";
        // line 108
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/offices.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 109
        echo "
";
        // line 110
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 111
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 111,  247 => 110,  244 => 109,  240 => 108,  229 => 100,  225 => 99,  221 => 98,  217 => 97,  213 => 96,  209 => 95,  203 => 94,  196 => 90,  192 => 89,  185 => 85,  181 => 84,  174 => 80,  170 => 79,  163 => 75,  159 => 74,  152 => 70,  148 => 69,  141 => 65,  137 => 64,  130 => 60,  126 => 59,  120 => 55,  111 => 48,  97 => 36,  93 => 35,  89 => 34,  81 => 28,  77 => 27,  73 => 26,  55 => 11,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/about.htm", "");
    }
}
