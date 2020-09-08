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

/* /var/www/html/glueup/themes/glueup/pages/platform/download-my-glue.htm */
class __TwigTemplate_665fef5dc311fb4982adb35abc2a2fb81f9e3a36249d4f77912c4a3116f3f36e extends \Twig\Template
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
        echo "        <div class=\"container paygage-hero-container text-center\">
           <div class=\"row flex-row\">
                <div class=\"col-md-6 hero align-self-center text-left\">
                   <p class=\"tagline mb-4\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["My Glue"]);
        echo "</p>
                      <h1>";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Network and <br> Engage <span class=\"line\"><ins> Anywhere </ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Transform your event and membership experience from the palm of your hand with the \"My Glue\" app."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["<br>Join communities, manage connections, share business cards, discuss various topics, and stay social on the go."]);
        echo " </p><br>
                       \t\t\t\t       <div class=\"row\">
  <div class=\"col-md-8 mr-auto\">

  ";
        // line 12
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 13
            echo "
\t <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mr-auto\" style=\"padding: .5rem 1rem; max-width:243px;\" href=\"https://apps.apple.com/us/app/eventbank/id958545893\"><i class=\"icon-apple\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在AppStore下载My Glue</span></a>
  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mr-auto mt-3\"  style=\"padding: .5rem 1rem; max-width:243px;\" href=\"https://play.google.com/store/apps/details?id=com.eventbank.android.attendee\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在GooglePlay下载My Glue</span></a>
   <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mr-auto mt-3\"  style=\"padding: .5rem 1rem; max-width:243px;\" href=\"https://www.wandoujia.com/apps/6654640\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在豌豆荚下载My Glue</span></a>
";
        } else {
            // line 18
            if (twig_in_filter(($context["Location"] ?? null), [0 => "CN"])) {
                // line 19
                echo "\t <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mr-auto\" style=\"padding: .5rem 1rem; max-width:243px;\" href=\"https://apps.apple.com/us/app/eventbank/id958545893\"><i class=\"icon-apple\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在AppStore下载My Glue</span></a>
  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mr-auto mt-3\"  style=\"padding: .5rem 1rem; max-width:243px;\" href=\"https://play.google.com/store/apps/details?id=com.eventbank.android.attendee\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在GooglePlay下载My Glue</span></a>
   <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mr-auto mt-3\"  style=\"padding: .5rem 1rem; max-width:243px;\" href=\"https://www.wandoujia.com/apps/6654640\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">在豌豆荚下载My Glue</span></a>
";
            } else {
                // line 23
                echo "
   <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mr-auto\" style=\"padding: .5rem 1rem; max-width:243px;\" href=\"https://apps.apple.com/us/app/eventbank/id958545893\"><i class=\"icon-apple\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">Download My Glue for iOS</span></a>
  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mr-auto mt-3\"  style=\"padding: .5rem 1rem; max-width:273px;\" href=\"https://play.google.com/store/apps/details?id=com.eventbank.android.attendee\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">Download My Glue for Android</span></a>
";
            }
        }
        // line 28
        echo "  
  </div>
  </div>
\t\t\t\t\t
                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                <img src=\"";
        // line 34
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-3some.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">
                </div>
            </div>
        </div> 
</header>

";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/download-my-glue.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 41,  102 => 40,  93 => 34,  85 => 28,  78 => 23,  72 => 19,  70 => 18,  63 => 13,  61 => 12,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/download-my-glue.htm", "");
    }
}
