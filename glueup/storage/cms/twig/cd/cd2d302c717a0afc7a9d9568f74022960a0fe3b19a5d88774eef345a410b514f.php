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

/* /var/www/html/glueup/themes/glueup/pages/resources/case-studies.htm */
class __TwigTemplate_e0e6fda6349a1d4032bd333b510fb6e375a459a944e0705e8e4867fa01e363c2 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Case <span class=\"line\"><ins> Studies </ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Find out why customers stick with Glue Up. "]);
        echo " </p>


                </div>
               
            </div>
        </div> 
</div>

<section class=\"section pt-0\">
        <div class=\"container\">
             <div class=\"row\">
            \t ";
        // line 22
        echo "                <div class=\"col-md-9 align-self-center mx-auto\">
                ";
        // line 24
        echo "                \t<div class=\"row\">
                ";
        // line 25
        $context["featured"] = twig_get_attribute($this->env, $this->source, ($context["featured"] ?? null), "posts", [], "any", false, false, false, 25);
        // line 26
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
\t           
\t                                                
\t                    <div class=\"col-md-4 hero pb-2\">
\t                     <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 30), "html", null, true);
            echo "\" class=\"\" style=\"\">
\t                        ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 31), "count", [], "any", false, false, false, 31) > 0)) {
                // line 32
                echo "\t                        <img class=\"media-object img-fluid rounded\" style=\"padding:4rem;  mix-blend-mode: multiply;\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 32), "last", [], "any", false, false, false, 32), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 32), "html", null, true);
                echo "\" />
\t                        ";
            } else {
                // line 34
                echo "\t                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
\t                        ";
            }
            // line 36
            echo "\t                         </a>
\t                     <h5 class=\"pt-2\">
\t                         <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 38), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</a>
\t                     </h5>
\t                     <p class=\"excerpt\">";
            // line 40
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 40)), 150]);
            echo "</p>
\t                     ";
            // line 46
            echo "\t                     </div>
\t             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t             </div>
\t             
";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 50) > 1)) {
            // line 51
            echo "<div class=\"row justify-content-center mt-5\">
    <div class=\"col-lg-6 text-center\">
        <nav class=\"navigation pagination d-inline-block\">
            <div class=\"nav-links\">
                ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 55) > 1)) {
                // line 56
                echo "                <a class=\"prev page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 56), "baseFileName", [], "any", false, false, false, 56), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 56) - 1)]);
                echo "\">Prev</a>
                ";
            }
            // line 58
            echo "
                ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 59)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 60
                echo "                <a class=\"page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 60), "baseFileName", [], "any", false, false, false, 60), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
                ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 63) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 63))) {
                // line 64
                echo "                <a class=\"next page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 64), "baseFileName", [], "any", false, false, false, 64), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 64) + 1)]);
                echo "\">Next</a>
                ";
            }
            // line 66
            echo "            </div>
        </nav>
    </div>
</div>
";
        }
        // line 71
        echo "            </div>
            
        </div>
    </div>
</section>
";
        // line 76
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 77
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/resources/case-studies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 77,  184 => 76,  177 => 71,  170 => 66,  164 => 64,  162 => 63,  159 => 62,  148 => 60,  144 => 59,  141 => 58,  135 => 56,  133 => 55,  127 => 51,  125 => 50,  121 => 48,  114 => 46,  110 => 40,  103 => 38,  99 => 36,  93 => 34,  87 => 32,  85 => 31,  81 => 30,  71 => 26,  69 => 25,  66 => 24,  63 => 22,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/resources/case-studies.htm", "");
    }
}
