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

/* /var/www/html/glueup/themes/glueup/partials/site/hidden-fields-form.htm */
class __TwigTemplate_3851cc7a63571980f14cedcfcc4e8dcd34350bdf754becbe0dd13a310fc7e0fe extends \Twig\Template
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
        echo "<div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
                                <label for=\"country\" style=\"visibility:hidden;\"> </label>
                        \t <input type=\"text\" id=\"country\" name=\"country\" placeholder=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo "\" aria-label=\"country\" class=\"form-control has_background\" style=\"visibility:hidden;\">
                          \t</div>
                            \t<div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
                                <label for=\"office\" style=\"visibility:hidden;\"> </label>
                        \t <input type=\"hidden\" id=\"office\" name=\"office\" placeholder=\"\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["office"] ?? null), "html", null, true);
        echo "\" aria-label=\"office\" class=\"form-control has_background\" style=\"visibility:hidden;\">
                          \t</div>
\t\t\t\t\t\t\t    
                          \t<div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
                                <label for=\"url_from\" style=\"visibility:hidden;\"> </label>
                        \t <input type=\"text\" id=\"websitesource\" name=\"url_from\" placeholder=\"websitesource\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "baseFileName", [], "any", false, false, false, 12), "html", null, true);
        echo "\" aria-label=\"url_from\" class=\"form-control has_background\" style=\"visibility:hidden;\">
                          \t</div>


    <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label foip_user\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"ip_user\" namip_user\" placeholder=\"ip_user\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["ip_Address"] ?? null), "html", null, true);
        echo "\" aria-label=\"language\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>

  <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"utm_source\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"utm_source\" name=\"utm_source\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["utmSource"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["utmSource"] ?? null), "html", null, true);
        echo "\" aria-label=\"utm_source\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>


  <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"utm_medium\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"utm_medium\" name=\"utm_medium\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["utmMedium"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["utmMedium"] ?? null), "html", null, true);
        echo "\" aria-label=\"utm_medium\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>

  <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"utm_campaign\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"utm_campaign\" name=\"utm_campaign\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["utmCampaign"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["utmCampaign"] ?? null), "html", null, true);
        echo "\" aria-label=\"utm_campaign\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>

    <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"utm_term\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"utm_term\" name=\"utm_term\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["utmTerm"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["utmTerm"] ?? null), "html", null, true);
        echo "\" aria-label=\"utm_term\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>

    <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"utm_content\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"utm_content\" name=\"utm_content\" placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["utmContent"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["utmContent"] ?? null), "html", null, true);
        echo "\" aria-label=\"utm_content\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>

    <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"language\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"hs_language\" name=\"language\" placeholder=\"hs_language\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["activeLocale"] ?? null), "html", null, true);
        echo "\" aria-label=\"language\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/hidden-fields-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 49,  116 => 44,  106 => 39,  96 => 34,  86 => 29,  75 => 23,  67 => 18,  58 => 12,  50 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/hidden-fields-form.htm", "");
    }
}
