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

/* /var/www/html/glueup/themes/glueup/pages/blog/post.htm */
class __TwigTemplate_070f3a735dc438aa4478e69dc6fce5cba1c0704bf4751fe5d194ef1fc45a7ada extends \Twig\Template
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
            <div class=\"row\">
            \t<div class=\"col-md-8 pt-3 mx-auto text-left\">
            \t\t<div class=\"row\">\t
            \t\t    <div class=\"col-md-12 pt-3 mx-auto text-left\">
            \t\t\t\t<h1 class=\"pt-2 text-left\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
            \t\t\t\t<p class=\"tagline ml-0\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "description", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
            \t\t\t</div>
            \t    </div>
                 \t<div class=\"row\">
            \t\t    <div class=\"col-md-8 pt-1 text-left\">
                \t\t\t<div class=\"d-flex\">
                    \t\t\t\t    <img class=\"author-avatar mr-2\" data-src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 14), "avatar", [], "any", false, false, false, 14), "file_name", [], "any", false, false, false, 14), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 14), "avatar", [], "any", false, false, false, 14), "getThumb", [0 => 120, 1 => "auto"], "method", false, false, false, 14), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 14), "first_name", [], "any", false, false, false, 14), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 14), "last_name", [], "any", false, false, false, 14), "html", null, true);
        echo "\"/>
                        \t\t\t\t<div class=\"d-flex align-items-middle pt-2 flex-row\"> 
                        \t\t\t\t<p class=\"font-weight-bold small pr-2\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 16), "first_name", [], "any", false, false, false, 16), "html", null, true);
        echo ", </p>
                        \t\t\t\t<p class=\"sm-grey-text small pr-2\"> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 17), "last_name", [], "any", false, false, false, 17), "html", null, true);
        echo " </p>
                        \t\t\t\t<p class=\"px-1 sm-grey-text small\">•</p>
                        \t\t\t\t<p class=\"text-black text-capitalize small pl-1 sm-grey-text\">";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 19), "M d, Y"), "html", null, true);
        echo "</p>
                    \t\t\t\t</div>
                    \t    </div>
                    \t</div>
                    \t<div class=\"col-md-3 ml-auto text-right\">
                    \t    <div class=\"d-flex pt-1\">
                    \t    ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("shares"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "                    \t    </div>
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
            echo "                                    <div class=\"featured-images text-center pt-2\">
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
            echo "                                    <div class=\"featured-images text-center pt-2\">
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
\t\t    </div>
        </div>
    </div>
        \t\t<div class=\"container\" id=\"blog\">
            <div class=\"row\">
               <div class=\"col-md-8 align-self-center mx-auto\"><!-- 
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 59
            echo "                <span class=\"text-muted text-capitalize mr-3\">
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 60), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</a>
                </span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "-->
                
            ";
        // line 64
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 64);
        echo "
                </div>    
                
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 align-self-center mx-auto text-center py-5\">
            <p class=\"tagline\">";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Like the article? Share it with your friends!"]);
        echo " </p>
                ";
        // line 71
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("shares"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 72
        echo "            </div>
        </div>
    </div>
";
        // line 75
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['background'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/footer-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "<section class=\"section \">   
    ";
        // line 77
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 78
        echo "</section>
  ";
        // line 84
        echo "
";
        // line 85
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 85,  212 => 84,  209 => 78,  205 => 77,  202 => 76,  197 => 75,  192 => 72,  188 => 71,  184 => 70,  175 => 64,  171 => 62,  160 => 60,  157 => 59,  153 => 58,  141 => 48,  134 => 45,  130 => 44,  126 => 43,  122 => 41,  115 => 37,  111 => 36,  107 => 35,  103 => 33,  101 => 32,  97 => 31,  90 => 26,  86 => 25,  77 => 19,  72 => 17,  68 => 16,  58 => 14,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/blog/post.htm", "");
    }
}
