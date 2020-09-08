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

/* /var/www/html/glueup/themes/glueup/partials/site/language-exclusions.htm */
class __TwigTemplate_bd5e7ced91df17f4498acf1cfdb3355a56d8d7e2e26d342cf87c52aaf2b3e55f extends \Twig\Template
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
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 2
            echo "<!-- specific css for chinese language active -->
<style>

body, p, h3, h4, .timeline h2 {
\tletter-spacing:0px;
\tline-height: 1.5em!important;
/*\ttext-align: justify!important;*/
/*word-break: break-all;
 white-space: keep-all;
 orphans: 3;*/
 
}
#hero svg.svgline {
    position: absolute;
    margin-right: -110%;
    margin-top: 5.5vh;
}
.secondary-top-nav select.form-control:not([size]):not([multiple]) {
   /* height: 2rem;
    padding: .5rem 1rem;
    font-weight: lighter;
        margin-top: 7px;*/
            height: calc(2.8rem + 8px);
}
.dot-info span.year {
    bottom: -30px;
    left: 50%;
    transform: translateX(0%);
    width: 100px;
}/*
h1 {
\tline-height: 1.3em!important;
/*\tmax-width: 18ch;*/
}/*
p { margin-after: 0.5em;
word-break: break-all;
 white-space: keep-all;
}
.tagline {max-width: 47ch;}

@media print {
  p {
    orphans: 3;
  }
  h1 {
    orphans: 3;
  }
}
em { font-style: normal; }
}
/*p { margin: 0; text-indent: 2em;}*/
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/language-exclusions.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/language-exclusions.htm", "");
    }
}
