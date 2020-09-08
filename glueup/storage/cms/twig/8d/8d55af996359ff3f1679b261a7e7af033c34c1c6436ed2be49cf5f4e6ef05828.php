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

/* /var/www/html/glueup/themes/glueup/partials/site/meta.htm */
class __TwigTemplate_a2b805dd8789056bad765f02829b0ec30e536c7c64568d22050e0d675c4bec0f extends \Twig\Template
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
";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 21)) {
            // line 22
            echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 24
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 24)), 166]);
            echo "\">
<meta name=\"title\" content=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
            echo " • Glue Up\">
<meta name=\"author\" content=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 26), "first_name", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
<meta name=\"robots\" content==\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 28), "theme_site_name", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
";
            // line 30
            echo "
<meta property=\"og:image\" content=\"";
            // line 31
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, false, 31), "first", [], "any", false, true, false, 31), "getThumb", [0 => 768, 1 => "auto"], "method", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, false, 31), "first", [], "any", false, true, false, 31), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 31), $this->extensions['System\Twig\Extension']->mediaFilter("meta/glueup-event.png"))) : ($this->extensions['System\Twig\Extension']->mediaFilter("meta/glueup-event.png"))), "html", null, true);
            echo "\">
<meta property=\"og:image:secure_url\" content=\"";
            // line 32
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, false, 32), "first", [], "any", false, true, false, 32), "getThumb", [0 => 768, 1 => "auto"], "method", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, false, 32), "first", [], "any", false, true, false, 32), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 32), $this->extensions['System\Twig\Extension']->mediaFilter("meta/glueup-event.png"))) : ($this->extensions['System\Twig\Extension']->mediaFilter("meta/glueup-event.png"))), "html", null, true);
            echo "\">

<title>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 34), "html", null, true);
            echo " • Glue Up</title>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["this"] ?? null), "page", [], "any", false, false, false, 35), "url", [], "any", false, false, false, 35) == "/blog/")) {
            // line 36
            echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 37
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 37), "meta_description", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 37), "meta_description", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 37), "site_description", [], "any", false, false, false, 37))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 37), "site_description", [], "any", false, false, false, 37))), "html", null, true);
            echo "\">
<meta name=\"title\" content=\"";
            // line 38
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 38), "meta_title", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 38), "meta_title", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38))), "html", null, true);
            echo " • Glue Up\">
<meta name=\"author\" content=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 39), "theme_site_author", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 41), "theme_site_name", [], "any", false, false, false, 41), "html", null, true);
            echo "\">

<title>";
            // line 43
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 43), "title", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 43), "title", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43))), "html", null, true);
            echo " • Glue Up</title>
";
            // line 44
            if (($context["fbImage"] ?? null)) {
                // line 45
                echo "        <meta property=\"og:image\" content=\"";
                echo twig_escape_filter($this->env, ($context["fbImage"] ?? null), "html", null, true);
                echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
                // line 46
                echo twig_escape_filter($this->env, ($context["fbImage"] ?? null), "html", null, true);
                echo "\">
        <meta property=\"twitter:image\" content=\"";
                // line 47
                echo twig_escape_filter($this->env, ($context["fbImage"] ?? null), "html", null, true);
                echo "\" />
";
            } else {
                // line 49
                echo "        <meta property=\"og:image\" content=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
                // line 50
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\">
        <meta property=\"twitter:image\" content=\"";
                // line 51
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\" />
";
            }
        } elseif (twig_get_attribute($this->env, $this->source,         // line 53
($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 53)) {
            // line 54
            echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 55
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 55), 140]);
            echo "\">
<meta name=\"title\" content=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 56), "html", null, true);
            echo " • Glue Up\">
<meta name=\"author\" content=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 57), "theme_site_author", [], "any", false, false, false, 57), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 59), "theme_site_name", [], "any", false, false, false, 59), "html", null, true);
            echo "\">

<title>";
            // line 61
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61))), "html", null, true);
            echo " • Glue Up</title>
 <meta property=\"twitter:card\" content=\"summary_large_image\" />
   <!-- <meta property=\"twitter:site\" content=\"@intercom\" />-->
    <meta property=\"twitter:title\" content=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 64), "theme_site_name", [], "any", false, false, false, 64), "html", null, true);
            echo " • Glue Up\" />
    <meta property=\"twitter:image\" content=\"";
            // line 65
            echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
            echo "\" />
    <meta property=\"twitter:description\" content=\"";
            // line 66
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 66), "meta_description", [], "any", true, true, false, 66)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 66), "meta_description", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 66), "description", [], "any", false, false, false, 66))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 66), "description", [], "any", false, false, false, 66))), "html", null, true);
            echo "\" />
    <link rel=\"canonical\" href=\"https://www.glueup.com\" />
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["this"] ?? null), "page", [], "any", false, false, false, 68), "url", [], "any", false, false, false, 68) == "/testing/?")) {
            echo "    
<meta name=\"robots\" content=\"noindex, nofollow\">   
";
        } else {
            // line 71
            echo "
<meta http-equiv=\"X-UA-Compatible\">
<meta name=\"description\" content=\"";
            // line 73
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 73), "meta_description", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 73), "meta_description", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 73), "config", [], "any", false, false, false, 73), "description", [], "any", false, false, false, 73))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 73), "config", [], "any", false, false, false, 73), "description", [], "any", false, false, false, 73))), "html", null, true);
            echo "\">
<meta name=\"title\" content=\"";
            // line 74
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 74), "meta_title", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 74), "meta_title", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 74), "title", [], "any", false, false, false, 74))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 74), "title", [], "any", false, false, false, 74))), "html", null, true);
            echo " • Glue Up\">
<meta name=\"author\" content=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 75), "theme_site_author", [], "any", false, false, false, 75), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 77), "theme_site_name", [], "any", false, false, false, 77), "html", null, true);
            echo "\">
";
            // line 78
            if (($context["fbImage"] ?? null)) {
                // line 79
                echo "        <meta property=\"og:image\" content=\"";
                echo twig_escape_filter($this->env, ($context["fbImage"] ?? null), "html", null, true);
                echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
                // line 80
                echo twig_escape_filter($this->env, ($context["fbImage"] ?? null), "html", null, true);
                echo "\">
        <meta property=\"twitter:image\" content=\"";
                // line 81
                echo twig_escape_filter($this->env, ($context["fbImage"] ?? null), "html", null, true);
                echo "\" />
";
            } else {
                // line 83
                echo "        <meta property=\"og:image\" content=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
                // line 84
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\">
        <meta property=\"twitter:image\" content=\"";
                // line 85
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\" />
";
            }
            // line 89
            echo "<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:title\" content=\"";
            // line 90
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 90), "meta_title", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 90), "meta_title", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 90), "title", [], "any", false, false, false, 90))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 90), "title", [], "any", false, false, false, 90))), "html", null, true);
            echo " • Glue Up\">
<meta property=\"og:description\" content=\"";
            // line 91
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 91), "meta_description", [], "any", true, true, false, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 91), "meta_description", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 91), "config", [], "any", false, false, false, 91), "description", [], "any", false, false, false, 91))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 91), "config", [], "any", false, false, false, 91), "description", [], "any", false, false, false, 91))), "html", null, true);
            echo "\">
<meta property=\"og:url\" content=\"";
            // line 92
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">
<title>";
            // line 93
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 93), "meta_title", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 93), "meta_title", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 93), "title", [], "any", false, false, false, 93))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 93), "title", [], "any", false, false, false, 93))), "html", null, true);
            echo " • Glue Up</title>
 <meta property=\"twitter:card\" content=\"summary_large_image\" />
   <!-- <meta property=\"twitter:site\" content=\"@intercom\" />-->
    <meta property=\"twitter:title\" content=\"";
            // line 96
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 96), "meta_title", [], "any", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 96), "meta_title", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 96), "title", [], "any", false, false, false, 96))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 96), "title", [], "any", false, false, false, 96))), "html", null, true);
            echo " • Glue Up\" />
    ";
            // line 98
            echo "    <meta property=\"twitter:description\" content=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 98), "meta_description", [], "any", true, true, false, 98)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 98), "meta_description", [], "any", false, false, false, 98), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 98), "description", [], "any", false, false, false, 98))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 98), "description", [], "any", false, false, false, 98))), "html", null, true);
            echo "\" />
    <link rel=\"canonical\" href=\"https://www.glueup.com\" />
";
        }
        // line 101
        echo "   
";
        // line 103
        echo "<link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Glueup-symbol.svg");
        echo "\">
";
        // line 105
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/glueup.css", 2 => "assets/css/style.css", 3 => "assets/css/cookiealert.css"]);
        // line 110
        echo "\" rel=\"stylesheet\">

";
        // line 113
        echo "<meta name=\"google-site-verification\" content=\"qSkw-c29cDY_garogr01K0G3Ql7YCGCPbx-X3AT3Vvg\" />";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 113,  297 => 110,  294 => 105,  289 => 103,  286 => 101,  279 => 98,  275 => 96,  269 => 93,  265 => 92,  261 => 91,  257 => 90,  254 => 89,  249 => 85,  245 => 84,  240 => 83,  235 => 81,  231 => 80,  226 => 79,  224 => 78,  220 => 77,  215 => 75,  211 => 74,  207 => 73,  203 => 71,  197 => 68,  192 => 66,  188 => 65,  184 => 64,  178 => 61,  173 => 59,  168 => 57,  164 => 56,  160 => 55,  157 => 54,  155 => 53,  150 => 51,  146 => 50,  141 => 49,  136 => 47,  132 => 46,  127 => 45,  125 => 44,  121 => 43,  116 => 41,  111 => 39,  107 => 38,  103 => 37,  100 => 36,  98 => 35,  94 => 34,  89 => 32,  85 => 31,  82 => 30,  78 => 28,  73 => 26,  69 => 25,  65 => 24,  61 => 22,  59 => 21,  56 => 20,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/meta.htm", "");
    }
}
