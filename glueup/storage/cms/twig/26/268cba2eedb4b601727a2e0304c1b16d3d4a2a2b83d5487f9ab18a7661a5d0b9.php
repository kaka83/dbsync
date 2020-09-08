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

/* /var/www/html/glueup/themes/glueup/pages/blog.htm */
class __TwigTemplate_91fd2a75446d7420ff463ef0b4e7ecfd3a0b65704b9557e2bf7c26d2535154a4 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/hero-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<div class=\"container py-5 blog\">
            <div class=\"row\">
                  <div class=\"col-md-7 hero blog align-self-center mr-auto pb-2\">
                  ";
        // line 5
        $context["featured"] = twig_get_attribute($this->env, $this->source, ($context["featured"] ?? null), "posts", [], "any", false, false, false, 5);
        // line 6
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
                                        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"\">
                                                ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 8), "count", [], "any", false, false, false, 8) > 0)) {
                // line 9
                echo "                                                <img class=\"rounded highlight-img\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 9), "last", [], "any", false, false, false, 9), "getThumb", [0 => ($context["auto"] ?? null), 1 => 540], "method", false, false, false, 9), "html", null, true);
                echo "\" />
                                                ";
            } else {
                // line 11
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                                                ";
            }
            // line 13
            echo "                                            </a>
                                        <h1 class=\"pt-3 blog\">
                                            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 15), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</a>
                                        </h1>
                        
                                        ";
            // line 23
            echo "                                         <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"read-more d-flex\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Turn the page"]);
            echo " <i class=\"read-more-icon icon-arrow\"></i></a>
                                    
                                    
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                  </div>
                  <div class=\"col-md-4 hero ml-auto pb-2\">
                  <div class=\"row pb-4 mx-auto\">
                      ";
        // line 30
        $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventPosts"] ?? null), "posts", [], "any", false, false, false, 30), "slice", [0 => 0, 1 => 1], "method", false, false, false, 30);
        // line 31
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 32
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 32), "slice", [0 => 0, 1 => 1], "method", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 34), "html", null, true);
                echo "\"  class=\"read-more d-flex\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dump"] ?? null), "category", [], "method", false, false, false, 34), "html", null, true);
                echo "</a>
                                                        </span>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                                                <h4 class=\"\">
                                                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 38), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</a>
                                                </h4>
                                    
                                                ";
            // line 46
            echo "                                                
                                                 
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                  </div>
                   <div class=\"row pb-4 mx-auto\">
                      ";
        // line 51
        $context["memberships"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["membershipPosts"] ?? null), "posts", [], "any", false, false, false, 51), "slice", [0 => 0, 1 => 1], "method", false, false, false, 51);
        // line 52
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["memberships"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 53
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 53), "slice", [0 => 0, 1 => 1], "method", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 54
                echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 55), "html", null, true);
                echo "\"  class=\"read-more d-flex\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 55), "html", null, true);
                echo "</a>
                                                        </span>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                                <h4 class=\"\">
                                                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 59), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 59), "html", null, true);
            echo "</a>
                                                </h4>
                                
                                                ";
            // line 67
            echo "                                                
                                                
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                  </div>
                  <div class=\"row pb-4 mx-auto\">
                      ";
        // line 72
        $context["press"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pressPosts"] ?? null), "posts", [], "any", false, false, false, 72), "slice", [0 => 0, 1 => 1], "method", false, false, false, 72);
        // line 73
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["press"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 74
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 74), "slice", [0 => 0, 1 => 1], "method", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 75
                echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 76), "html", null, true);
                echo "\"  class=\"read-more d-flex\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 76), "html", null, true);
                echo "</a>
                                                        </span>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                                                <h4 class=\"\">
                                                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 80), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 80), "html", null, true);
            echo "</a>
                                                </h4>
                                
                                                ";
            // line 88
            echo "                                                
                                                
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                  </div>
                  
                  </div>
        </div>
    </div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12 hero ml-auto pb-2\">
                  <div class=\"row pt-5 pb-2\">
                      <div class=\"col-md-12\">
                      <span class=\"text-muted text-capitalize mr-3 pb-3\">
                          <a href=\"";
        // line 102
        echo url("/blog/");
        echo "/category/event-management\"  class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</a>
                      </span>
                      </div>
                  </div>
                  <div class=\"row pt-2 pb-5\">
                      
                      ";
        // line 108
        $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventPosts"] ?? null), "posts", [], "any", false, false, false, 108), "slice", [0 => 1, 1 => ($context["All"] ?? null)], "method", false, false, false, 108);
        // line 109
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "post", [], "any", false, false, false, 109), "slice", [0 => 0, 1 => 1], "method", false, false, false, 109), "categories", [], "any", false, false, false, 109), "slice", [0 => 0, 1 => 1], "method", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 110
            echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 111), "html", null, true);
            echo "\"  class=\"read-more d-flex\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 111), "html", null, true);
            echo "</a>
                                                        </span>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 115
            echo "                                                
                                                <div class=\"col-md-3 hero pb-2\">
                                              <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 117), "html", null, true);
            echo "\" class=\"\">
                        ";
            // line 118
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 118), "count", [], "any", false, false, false, 118) > 0)) {
                // line 119
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 119), "last", [], "any", false, false, false, 119), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 119), "html", null, true);
                echo "\" />
                        ";
            } else {
                // line 121
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                        ";
            }
            // line 123
            echo "                         </a>
                                                <h5 class=\"pt-2\">
                                                    <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 125), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 125), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 127
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 127)), 150]);
            echo "</p>
                                                ";
            // line 133
            echo "                                                </div>
                                                
                                                 
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                  </div>
                  <div class=\"row pt-5 pb-2\">
                      <div class=\"col-md-12\">
                      <span class=\"text-muted text-capitalize mr-3 pb-3\">
                          <a href=\"";
        // line 141
        echo url("/blog/");
        echo "/category/associations-amp-chambers\"  class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management"]);
        echo "</a>
                      </span>
                      </div>
                  </div>
                  <div class=\"row pt-2 pb-5\">
                      ";
        // line 146
        $context["memberships"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["membershipPosts"] ?? null), "posts", [], "any", false, false, false, 146), "slice", [0 => 1, 1 => ($context["All"] ?? null)], "method", false, false, false, 146);
        // line 147
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 147), "slice", [0 => 0, 1 => 1], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 148
            echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 149), "html", null, true);
            echo "\"  class=\"read-more d-flex\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 149), "html", null, true);
            echo "</a>
                                                        </span>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["memberships"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 153
            echo "                                                <div class=\"col-md-3 hero pb-2\">
                                            <a href=\"";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 154), "html", null, true);
            echo "\" class=\"\">
                        ";
            // line 155
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 155), "count", [], "any", false, false, false, 155) > 0)) {
                // line 156
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 156), "last", [], "any", false, false, false, 156), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 156), "html", null, true);
                echo "\" />
                        ";
            } else {
                // line 158
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                        ";
            }
            // line 160
            echo "                         </a>
                                                <h5 class=\"pt-2\">
                                                    <a href=\"";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 162), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 162), "html", null, true);
            echo "</a>
                                                </h5>
                                               <p class=\"excerpt\">";
            // line 164
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 164)), 150]);
            echo "</p>
                                                ";
            // line 170
            echo "                                                </div>
                                                
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                  </div>
                  <div class=\"row pt-5 pb-2\">
                      <div class=\"col-md-12\">
                      <span class=\"text-muted text-capitalize mr-3 pb-3\">
                          <a href=\"";
        // line 177
        echo url("/blog/");
        echo "/category/donations-fundraising-ngos\"  class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations, Fundraising, & NGOs"]);
        echo "</a>
                      </span>
                      </div>
                  </div>
                  <div class=\"row pt-2 pb-5\">
                      ";
        // line 182
        $context["ngo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ngoPosts"] ?? null), "posts", [], "any", false, false, false, 182), "slice", [0 => 1, 1 => ($context["All"] ?? null)], "method", false, false, false, 182);
        // line 183
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 183), "slice", [0 => 0, 1 => 1], "method", false, false, false, 183));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 184
            echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 185), "html", null, true);
            echo "\"  class=\"read-more d-flex\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 185), "html", null, true);
            echo "</a>
                                                        </span>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ngo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 189
            echo "                              
                                                <div class=\"col-md-3 hero pb-2\">
                                                <a href=\"";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 191), "html", null, true);
            echo "\" class=\"\">
                        ";
            // line 192
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 192), "count", [], "any", false, false, false, 192) > 0)) {
                // line 193
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 193), "last", [], "any", false, false, false, 193), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 193), "html", null, true);
                echo "\" />
                        ";
            } else {
                // line 195
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                        ";
            }
            // line 197
            echo "                         </a>
                                                <h5 class=\"pt-2\">
                                                    <a href=\"";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 199), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 199), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 201
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 201)), 150]);
            echo "</p>
                                                ";
            // line 207
            echo "                                                </div>
                                                
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                  </div>
                   <div class=\"row pt-5 pb-2\">
                      <div class=\"col-md-12\">
                      <span class=\"text-muted text-capitalize mr-3 pb-3\">
                          <a href=\"";
        // line 214
        echo url("/blog/");
        echo "/category/virtual-events-webinars\"  class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events & Webinars"]);
        echo "</a>
                      </span>
                      </div>
                  </div>
                  <div class=\"row pt-2 pb-5\">
                      ";
        // line 219
        $context["training"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["trainingPosts"] ?? null), "posts", [], "any", false, false, false, 219), "slice", [0 => 1, 1 => ($context["All"] ?? null)], "method", false, false, false, 219);
        // line 220
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 220), "slice", [0 => 0, 1 => 1], "method", false, false, false, 220));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 221
            echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 222), "html", null, true);
            echo "\"  class=\"read-more d-flex\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 222), "html", null, true);
            echo "</a>
                                                        </span>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["training"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 226
            echo "                              
                                                <div class=\"col-md-3 hero pb-2\">
                                                <a href=\"";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 228), "html", null, true);
            echo "\" class=\"\">
                        ";
            // line 229
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 229), "count", [], "any", false, false, false, 229) > 0)) {
                // line 230
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 230), "last", [], "any", false, false, false, 230), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 230), "html", null, true);
                echo "\" />
                        ";
            } else {
                // line 232
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                        ";
            }
            // line 234
            echo "                         </a>
                                                <h5 class=\"pt-2\">
                                                    <a href=\"";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 236), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 236), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 238
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 238)), 150]);
            echo "</p>
                                                ";
            // line 244
            echo "                                                </div>
                                                
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "                  </div>
                  
            </div>        
 </div>
            </div>
            ";
        // line 252
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/footer-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 252,  603 => 247,  595 => 244,  591 => 238,  584 => 236,  580 => 234,  574 => 232,  568 => 230,  566 => 229,  562 => 228,  558 => 226,  553 => 225,  542 => 222,  539 => 221,  534 => 220,  532 => 219,  522 => 214,  516 => 210,  508 => 207,  504 => 201,  497 => 199,  493 => 197,  487 => 195,  481 => 193,  479 => 192,  475 => 191,  471 => 189,  466 => 188,  455 => 185,  452 => 184,  447 => 183,  445 => 182,  435 => 177,  429 => 173,  421 => 170,  417 => 164,  410 => 162,  406 => 160,  400 => 158,  394 => 156,  392 => 155,  388 => 154,  385 => 153,  380 => 152,  369 => 149,  366 => 148,  361 => 147,  359 => 146,  349 => 141,  343 => 137,  334 => 133,  330 => 127,  323 => 125,  319 => 123,  313 => 121,  307 => 119,  305 => 118,  301 => 117,  297 => 115,  292 => 114,  281 => 111,  278 => 110,  273 => 109,  271 => 108,  260 => 102,  247 => 91,  239 => 88,  231 => 80,  228 => 79,  217 => 76,  214 => 75,  209 => 74,  204 => 73,  202 => 72,  198 => 70,  190 => 67,  182 => 59,  179 => 58,  168 => 55,  165 => 54,  160 => 53,  155 => 52,  153 => 51,  149 => 49,  141 => 46,  133 => 38,  130 => 37,  118 => 34,  115 => 33,  110 => 32,  105 => 31,  103 => 30,  98 => 27,  85 => 23,  77 => 15,  73 => 13,  67 => 11,  61 => 9,  59 => 8,  55 => 7,  48 => 6,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/blog.htm", "");
    }
}
