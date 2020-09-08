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

/* /var/www/html/glueup/themes/glueup/partials/landing/meta-landing.htm */
class __TwigTemplate_f08ab8e93c8336c5245477b73c8c33187e48cb77984202aeb79d0e9d1be8a3fc extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no\">
<link rel=\"preconnect\" href=\"https://vsa98.tawk.to\" />
<link rel=\"preconnect\" href=\"https://hscollectedforms.net\" />
<link rel=\"preconnect\" href=\"https://forms.hubspot.com\" />
<link rel=\"preconnect\" href=\"https://track.hubspot.com\" />
<link rel=\"preconnect\" href=\"https://embed.tawk.to\" />
<link rel=\"preconnect\" href=\"https://tawk.to\" />
<link rel=\"preconnect\" href=\"https://www.googletagmanager.com\" />
<link rel=\"preconnect\" href=\"https://js.hs-analytics.net\" />
<link rel=\"preconnect\" href=\"https://js.hscollectedforms.net\" />
<link rel=\"preconnect\" href=\"https://js.hs-banner.com\" />
<link rel=\"preconnect\" href=\"https://www.google-analytics.com\" />
<link rel=\"preconnect\" href=\"https://static-v.tawk.to\" />
<link rel=\"preconnect\" href=\"https://js.hs-scripts.com\" />
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
<link rel=\"preconnect\" href=\"https://vsa98.tawk.to\" />
";
        // line 20
        echo "
<meta http-equiv=\"X-UA-Compatible\">
<meta name=\"description\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 22), "meta_description", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 22), "meta_description", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 22), "config", [], "any", false, false, false, 22), "description", [], "any", false, false, false, 22))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 22), "config", [], "any", false, false, false, 22), "description", [], "any", false, false, false, 22))), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 23), "meta_title", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 23), "meta_title", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 23), "title", [], "any", false, false, false, 23))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 23), "title", [], "any", false, false, false, 23))), "html", null, true);
        echo " - Glue Up\">
<meta name=\"author\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 24), "theme_site_author", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 26), "theme_site_name", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
";
        // line 27
        if (($context["fbImage"] ?? null)) {
            // line 28
            echo "        <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, ($context["fbImage"] ?? null), "html", null, true);
            echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["fbImage"] ?? null), "html", null, true);
            echo "\">
        <meta property=\"twitter:image\" content=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["fbImage"] ?? null), "html", null, true);
            echo "\" />
";
        } else {
            // line 32
            echo "        <meta property=\"og:image\" content=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
            echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
            // line 33
            echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
            echo "\">
        <meta property=\"twitter:image\" content=\"";
            // line 34
            echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
            echo "\" />
";
        }
        // line 38
        echo "<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:title\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 39), "meta_title", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 39), "meta_title", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39))), "html", null, true);
        echo "\">
<meta property=\"og:description\" content=\"";
        // line 40
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 40), "meta_description", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 40), "meta_description", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 40), "config", [], "any", false, false, false, 40), "description", [], "any", false, false, false, 40))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 40), "config", [], "any", false, false, false, 40), "description", [], "any", false, false, false, 40))), "html", null, true);
        echo "\">
<meta property=\"og:url\" content=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
<title>";
        // line 42
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 42), "meta_title", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 42), "meta_title", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42))), "html", null, true);
        echo " - Glue Up</title>
 <meta property=\"twitter:card\" content=\"summary_large_image\" />
   <!-- <meta property=\"twitter:site\" content=\"@intercom\" />-->
    <meta property=\"twitter:title\" content=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 45), "theme_site_name", [], "any", false, false, false, 45), "html", null, true);
        echo "\" />
    ";
        // line 47
        echo "    <meta property=\"twitter:description\" content=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 47), "meta_description", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 47), "meta_description", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 47), "description", [], "any", false, false, false, 47))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 47), "description", [], "any", false, false, false, 47))), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"https://www.glueup.com\" />
   
";
        // line 51
        echo "<link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Glueup-symbol.svg");
        echo "\">
";
        // line 53
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/glueup.css", 2 => "assets/css/style.css", 3 => "assets/css/cookiealert.css"]);
        // line 58
        echo "\" rel=\"stylesheet\">

";
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/googletag.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/landing/meta-landing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 61,  147 => 58,  144 => 53,  139 => 51,  132 => 47,  128 => 45,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  107 => 38,  102 => 34,  98 => 33,  93 => 32,  88 => 30,  84 => 29,  79 => 28,  77 => 27,  73 => 26,  68 => 24,  64 => 23,  60 => 22,  56 => 20,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/landing/meta-landing.htm", "");
    }
}
