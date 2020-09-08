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

/* /var/www/html/glueup/themes/glueup/partials/blog/hero-blog.htm */
class __TwigTemplate_d14594e239bbdba7e292f4bdf031fc8bee0d06fee23ae3a2faa9300b5e57b6a8 extends \Twig\Template
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
        ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 2)) {
            // line 3
            echo "        
        <div class=\"container\">
            <div class=\"row\">
            \t<div class=\"col-md-8 pt-3 mx-auto text-left\">
            \t\t<div class=\"row\">\t
            \t\t    <div class=\"col-md-12 pt-3 mx-auto text-left\">
            \t\t\t\t<h1 class=\"pt-2 text-left\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</h1>
            \t\t\t\t<p class=\"tagline ml-0\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "description", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
            \t\t\t</div>
            \t    </div>
                 \t<div class=\"row\">
            \t\t    <div class=\"col-md-8 pt-1 text-left\">
                \t\t\t<div class=\"d-flex\">
                    \t\t\t\t    <img class=\"author-avatar mr-2\" data-src=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 16), "avatar", [], "any", false, false, false, 16), "file_name", [], "any", false, false, false, 16), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 16), "avatar", [], "any", false, false, false, 16), "getThumb", [0 => 120, 1 => "auto"], "method", false, false, false, 16), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 16), "first_name", [], "any", false, false, false, 16), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 16), "last_name", [], "any", false, false, false, 16), "html", null, true);
            echo "\"/>
                        \t\t\t\t<div class=\"d-flex py-3 align-items-middle\"> 
                        \t\t\t\t<p class=\"font-weight-bold px-2\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 18), "first_name", [], "any", false, false, false, 18), "html", null, true);
            echo ", </p>
                        \t\t\t\t<p class=\"sm-grey-text\"> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 19), "last_name", [], "any", false, false, false, 19), "html", null, true);
            echo " </p>
                        \t\t\t\t<p class=\"px-3 sm-grey-text\">•</p>
                        \t\t\t\t<p class=\"text-black text-capitalize sm-grey-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 21), "M d, Y"), "html", null, true);
            echo "</p>
                    \t\t\t\t</div>
                    \t    </div>
                    \t</div>
                    \t<div class=\"col-md-3 pt-1 ml-auto text-left\">
                    \t    
                    \t</div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12 mb-5 mx-auto text-left\">
                                <!--<p>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "timeToRead", [], "any", false, false, false, 31), "html", null, true);
            echo " Min</p>-->
                                ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 32), "count", [], "any", false, false, false, 32) > 0)) {
                // line 33
                echo "                                    <div class=\"featured-images text-center pt-4\">
                                        <img class=\"img-fluid rounded\"
                                                    data-src=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 35), "first", [], "any", false, false, false, 35), "filename", [], "any", false, false, false, 35), "html", null, true);
                echo "\"
                                                    src=\"";
                // line 36
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, false, 36), "first", [], "any", false, true, false, 36), "getThumb", [0 => 1920, 1 => "auto"], "method", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, false, 36), "first", [], "any", false, true, false, 36), "getThumb", [0 => 1920, 1 => "auto"], "method", false, false, false, 36), $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg"))) : ($this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg"))), "html", null, true);
                echo "\"
                                                    alt=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 37), "first", [], "any", false, false, false, 37), "description", [], "any", false, false, false, 37), "html", null, true);
                echo "\"
                                                    style=\"max-width: 100%; width:100%;\" />
                                    </div>
                                ";
            } else {
                // line 41
                echo "                                    <div class=\"featured-images text-center pt-4\">
                                                <img class=\"img-fluid rounded\"
                                                    data-src=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 43), "first", [], "any", false, false, false, 43), "filename", [], "any", false, false, false, 43), "html", null, true);
                echo "\"
                                                    src=\"";
                // line 44
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\"
                                                    alt=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 45), "first", [], "any", false, false, false, 45), "description", [], "any", false, false, false, 45), "html", null, true);
                echo "\"
                                                    style=\"max-width: 100%; width:100%;\" />
                                    </div>
                                ";
            }
            // line 48
            echo "  
                            </div>
            \t\t\t</div>
            \t\t</div>
        \t\t
        \t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["this"] ?? null), "page", [], "any", false, false, false, 53), "url", [], "any", false, false, false, 53) == "/blog/")) {
            // line 54
            echo "    \t\t\t<div class=\"container\">
         \t    <div class=\"row\">
        \t\t\t<div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
        \t\t    \t<h1>";
            // line 57
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up <span class=\"line\"><ins>Insights </ins></span>"]);
            echo "</h1>
        \t\t\t\t<p class=\"tagline ml-0\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 58), "description", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
        \t\t\t\t
    \t\t\t";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 60
($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 60)) {
            // line 61
            echo "    \t\t\t<div class=\"container\">
         \t    <div class=\"row\">
        \t\t\t<div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
        \t\t\t\t<h1>";
            // line 64
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 64), "title", [], "any", false, false, false, 64))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 64), "title", [], "any", false, false, false, 64))), "html", null, true);
            echo "</h1>
        \t\t\t";
            // line 66
            echo "        \t\t\t</div>\t
    \t\t\t";
        } else {
            // line 68
            echo "    \t\t\t<div class=\"container\">
         \t    <div class=\"row\">
        \t\t\t<div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
        \t\t    \t<h1 class=\"title pt-5\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 71), "title", [], "any", false, false, false, 71), "html", null, true);
            echo "</h1>
        \t\t\t\t<p class=\"tagline ml-0\">";
            // line 72
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Blog about Glue Up and online communities"]);
            echo "</p>
        \t\t\t</div>\t
    \t\t\t";
        }
        // line 75
        echo "\t\t    </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/blog/hero-blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  186 => 72,  182 => 71,  177 => 68,  173 => 66,  169 => 64,  164 => 61,  162 => 60,  157 => 58,  153 => 57,  148 => 54,  146 => 53,  139 => 48,  132 => 45,  128 => 44,  124 => 43,  120 => 41,  113 => 37,  109 => 36,  105 => 35,  101 => 33,  99 => 32,  95 => 31,  82 => 21,  77 => 19,  73 => 18,  63 => 16,  54 => 10,  50 => 9,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/blog/hero-blog.htm", "");
    }
}
