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

/* /var/www/html/glueup/themes/glueup/pages/platform/download-manager-app.htm */
class __TwigTemplate_a0ec3d7f527742911368c15d05a8bafc8853c6f6cdbdb33219e05972a803e3ce extends \Twig\Template
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
        echo "<header id=\"hero\" class=\"\">
";
        // line 3
        echo "        <div class=\"container paygage-hero-container\">
           <div class=\"row flex-row-reverse\">
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <img src=\"";
        // line 6
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-manager-engagement.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up Manager"]);
        echo "</p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run Your Operations from <span class=\"line\"><ins> Anywhere </ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline processes and manage your community from palm of your hand with a mobile app that consolidates all your operations and engagement. "]);
        echo " </p><br>
                       ";
        // line 14
        echo "\t\t\t\t       <div class=\"row\">
  <div class=\"col-md-8 mr-auto\">
   ";
        // line 16
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 17
            echo "\t
\t  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto\" style=\"padding: .5rem 1rem;\" href=\"https://apps.apple.com/us/app/eventbank-manager/id740353437\"><i class=\"icon-apple\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在App Store下载Glue Up Manager</span></a>
\t  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto mt-3\"  style=\"padding: .5rem 1rem;\" href=\"https://play.google.com/store/apps/details?id=com.eventbank.android\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在GooglePlay下载Glue Up Manager</span></a>
\t  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto mt-3\"  style=\"padding: .5rem 1rem;\" href=\"https://www.wandoujia.com/search/2146381061967852209\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在豌豆荚下载Glue Up Manager</span></a></div>
\t 
\t  
\t";
        } elseif (twig_in_filter(        // line 23
($context["Location"] ?? null), [0 => "CN"])) {
            // line 24
            echo "\t  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto\" style=\"padding: .5rem 1rem;\" href=\"https://apps.apple.com/us/app/eventbank-manager/id740353437\"><i class=\"icon-apple\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在App Store下载Glue Up Manager</span></a>
\t  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto mt-3\"  style=\"padding: .5rem 1rem;\" href=\"https://play.google.com/store/apps/details?id=com.eventbank.android\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在GooglePlay下载Glue Up Manager</span></a>
\t  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto mt-3\"  style=\"padding: .5rem 1rem;\" href=\"https://www.wandoujia.com/search/2146381061967852209\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在豌豆荚下载Glue Up Manager</span></a></div>
\t ";
        } else {
            // line 28
            echo "\t  
\t  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mr-auto\" style=\"padding: .5rem 1rem;\" href=\"https://apps.apple.com/us/app/eventbank-manager/id740353437\"><i class=\"icon-apple\" style=\"font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">Download Glue Up Manager for iOS</span></a>
\t  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto mt-3\"  style=\"padding: .5rem 1rem;\" href=\"https://play.google.com/store/apps/details?id=com.eventbank.android\"><i class=\"icon-android\" style=\"font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">Download Glue Up Manager for Android</span></a></div>
\t  
\t  
";
        }
        // line 34
        echo "  </div>

                </div>
            </div>
        </div> 
</header>

";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/download-manager-app.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 42,  103 => 41,  94 => 34,  86 => 28,  80 => 24,  78 => 23,  70 => 17,  68 => 16,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/download-manager-app.htm", "");
    }
}
