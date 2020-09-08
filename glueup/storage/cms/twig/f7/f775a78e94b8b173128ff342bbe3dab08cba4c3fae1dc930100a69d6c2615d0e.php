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

/* /var/www/html/glueup/themes/glueup/pages/blog/category.htm */
class __TwigTemplate_ecf8b1af2153f74e9eca67aed92a793138d38509efe5365be7655d9389cb2d59 extends \Twig\Template
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
        echo "<section class=\"section\">
<div class=\"container\">
            <div class=\"row\">
            \t<div class=\"col-md-3\">
               \t\t";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "            \t</div>
                <div class=\"col-md-9 align-self-center\">
                ";
        // line 9
        echo "                \t<div class=\"row\">
                ";
        // line 10
        $context["featured"] = twig_get_attribute($this->env, $this->source, ($context["featured"] ?? null), "posts", [], "any", false, false, false, 10);
        // line 11
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
\t           
\t                                                
\t                    <div class=\"col-md-4 hero pb-2\">
\t                     <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"\">
\t                        ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 16), "count", [], "any", false, false, false, 16) > 0)) {
                // line 17
                echo "\t                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 17), "last", [], "any", false, false, false, 17), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 17), "html", null, true);
                echo "\" />
\t                        ";
            } else {
                // line 19
                echo "\t                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
\t                        ";
            }
            // line 21
            echo "\t                         </a>
\t                     <h5 class=\"pt-2\">
\t                         <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
\t                     </h5>
\t                     <p class=\"excerpt\">";
            // line 25
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 25)), 150]);
            echo "</p>
\t                     ";
            // line 31
            echo "\t                     </div>
\t             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t             </div>
\t             
";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 35) > 1)) {
            // line 36
            echo "<div class=\"row justify-content-center mt-5\">
    <div class=\"col-lg-6 text-center\">
        <nav class=\"navigation pagination d-inline-block\">
            <div class=\"nav-links\">
                ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 40) > 1)) {
                // line 41
                echo "                <a class=\"prev page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 41), "baseFileName", [], "any", false, false, false, 41), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 41) - 1)]);
                echo "\">Prev</a>
                ";
            }
            // line 43
            echo "
                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 44)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                echo "                <a class=\"page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 45), "baseFileName", [], "any", false, false, false, 45), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
                ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 48) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 48))) {
                // line 49
                echo "                <a class=\"next page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "baseFileName", [], "any", false, false, false, 49), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 49) + 1)]);
                echo "\">Next</a>
                ";
            }
            // line 51
            echo "            </div>
        </nav>
    </div>
</div>
";
        }
        // line 56
        echo "            </div>
            
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 56,  155 => 51,  149 => 49,  147 => 48,  144 => 47,  133 => 45,  129 => 44,  126 => 43,  120 => 41,  118 => 40,  112 => 36,  110 => 35,  106 => 33,  99 => 31,  95 => 25,  88 => 23,  84 => 21,  78 => 19,  72 => 17,  70 => 16,  66 => 15,  56 => 11,  54 => 10,  51 => 9,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/blog/category.htm", "");
    }
}
