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

/* /var/www/html/glueup/themes/glueup/partials/industry/industry-blog.htm */
class __TwigTemplate_feae97ebf748282c67324c1870901837e3fa3d12bf9bb2effe7aaf5dc54a5f7d extends \Twig\Template
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
        // line 2
        echo "    <section class=\"section py-0\">
                <div class=\"container\">
                <div class=\"row\">
         ";
        // line 6
        echo "       ";
        // line 7
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["filteredPosts"] ?? null), 0, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "                              
                                                <div class=\"col-md-4 hero ml-auto pb-2\">
                                                <a href=\"";
            // line 10
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"\">
                                                ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 11), "count", [], "any", false, false, false, 11) > 0)) {
                // line 12
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 12), "last", [], "any", false, false, false, 12), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 12), "html", null, true);
                echo "\" />
                                                ";
            } else {
                // line 14
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                                                ";
            }
            // line 16
            echo "                                                 </a>
                                                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 17));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "                                                        <span class=\"sm-grey-text text-capitalize mt-1 d-flex category-badge\">    
                                                            ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 19), "index", [], "any", false, false, false, 19) == twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 19))) {
                    // line 20
                    echo "                                                            <a href=\"";
                    echo url("/blog/category/");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 20), "html", null, true);
                    echo "\"><i class=\" icon-content\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20), "html", null, true);
                    echo "</a>
                                            \t\t\t    ";
                    // line 22
                    echo "                                            \t\t\t    ";
                } else {
                    // line 23
                    echo "                                            \t\t\t    ";
                }
                // line 24
                echo "                                            \t\t\t</span>
                                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                                                <h5 class=\"my-2\">
                                                    <a href=\"";
            // line 27
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
                                                </h5>
                                                
                                                <p class=\"excerpt\">";
            // line 30
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 30)), 150]);
            echo "</p>
                                                ";
            // line 36
            echo "                                                
                                                <a href=\"";
            // line 37
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"read-more d-flex\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Read More"]);
            echo " <i class=\"read-more-icon icon-arrow\"></i></a>
                                                </div>
                                                
                      
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["filteredPosts2"] ?? null), 0, 1));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 44
            echo "                              
                                                <div class=\"col-md-4 hero ml-auto pb-2\">
                                                <a href=\"";
            // line 46
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 46), "html", null, true);
            echo "\" class=\"\">
                                                ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 47), "count", [], "any", false, false, false, 47) > 0)) {
                // line 48
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 48), "last", [], "any", false, false, false, 48), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 48), "html", null, true);
                echo "\" />
                                                ";
            } else {
                // line 50
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                                                ";
            }
            // line 52
            echo "                                                 </a>
                                                 ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 53));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 54
                echo "                                                        <span class=\"sm-grey-text text-capitalize mt-1 d-flex category-badge\">    
                                                            ";
                // line 55
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 55), "index", [], "any", false, false, false, 55) == twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 55))) {
                    // line 56
                    echo "                                                            <a href=\"";
                    echo url("/blog/category/");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 56), "html", null, true);
                    echo "\"><i class=\"icon-content\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 56), "html", null, true);
                    echo "</a>
                                            \t\t\t    ";
                    // line 58
                    echo "                                            \t\t\t    ";
                } else {
                    // line 59
                    echo "                                            \t\t\t    ";
                }
                // line 60
                echo "                                            \t\t\t</span>
                                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                                <h5 class=\"my-2\">
                                                    <a href=\"";
            // line 63
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 63), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 65
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 65)), 150]);
            echo "</p>
                                                ";
            // line 71
            echo "                                                
                                                <a href=\"";
            // line 72
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 72), "html", null, true);
            echo "\" class=\"read-more d-flex\">Download <i class=\"read-more-icon icon-arrow\"></i></a>
                                                </div>
                                                
                      
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredPosts3"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 79
            echo "                              
                                                <div class=\"col-md-4 hero ml-auto pb-2\">
                                                <a href=\"";
            // line 81
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 81), "html", null, true);
            echo "\" class=\"\">
                                                ";
            // line 82
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 82), "count", [], "any", false, false, false, 82) > 0)) {
                // line 83
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 83), "last", [], "any", false, false, false, 83), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 83), "html", null, true);
                echo "\" />
                                                ";
            } else {
                // line 85
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                                                ";
            }
            // line 87
            echo "                                                 </a>
                                                 ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 88));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 89
                echo "                                                        <span class=\"sm-grey-text text-capitalize mt-1 d-flex category-badge\">    
                                                            ";
                // line 90
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 90), "index", [], "any", false, false, false, 90) == twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 90))) {
                    // line 91
                    echo "                                                            <a href=\"";
                    echo url("/blog/category/");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 91), "html", null, true);
                    echo "\"><i class=\"icon-content\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 91), "html", null, true);
                    echo "</a>
                                            \t\t\t    ";
                    // line 93
                    echo "                                            \t\t\t    ";
                } else {
                    // line 94
                    echo "                                            \t\t\t    ";
                }
                // line 95
                echo "                                            \t\t\t</span>
                                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                                <h5 class=\"my-2\">
                                                    <a href=\"";
            // line 98
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 98), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 98), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 100
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 100)), 150]);
            echo "</p>
                                                ";
            // line 106
            echo "                                                <a href=\"";
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 106), "html", null, true);
            echo "\" class=\"read-more d-flex\">Download <i class=\"read-more-icon icon-arrow\"></i></a>
                                                </div>
                                                
                      
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 111
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/industry/industry-blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 112,  405 => 111,  392 => 106,  388 => 100,  379 => 98,  376 => 97,  361 => 95,  358 => 94,  355 => 93,  346 => 91,  344 => 90,  341 => 89,  324 => 88,  321 => 87,  315 => 85,  309 => 83,  307 => 82,  301 => 81,  297 => 79,  291 => 78,  285 => 77,  273 => 72,  270 => 71,  266 => 65,  257 => 63,  254 => 62,  239 => 60,  236 => 59,  233 => 58,  224 => 56,  222 => 55,  219 => 54,  202 => 53,  199 => 52,  193 => 50,  187 => 48,  185 => 47,  179 => 46,  175 => 44,  169 => 43,  163 => 42,  149 => 37,  146 => 36,  142 => 30,  132 => 27,  129 => 26,  114 => 24,  111 => 23,  108 => 22,  99 => 20,  97 => 19,  94 => 18,  77 => 17,  74 => 16,  68 => 14,  62 => 12,  60 => 11,  54 => 10,  50 => 8,  44 => 7,  42 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/industry/industry-blog.htm", "");
    }
}
