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

/* /var/www/html/glueup/plugins/terne/hubspot/components/trackingcode/default.htm */
class __TwigTemplate_0ea815a8c188ffddf1173b2809bbad06a002705c75771a65d6ab64a824016d69 extends \Twig\Template
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
        echo "<!-- Start of Async HubSpot Analytics Code -->
  <script type=\"text/javascript\">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/";
        // line 6
        echo twig_escape_filter($this->env, ($context["hub_id"] ?? null), "html", null, true);
        echo ".js';
      e.parentNode.insertBefore(n, e);
    })(document,\"script\",\"hs-analytics\",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/plugins/terne/hubspot/components/trackingcode/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/plugins/terne/hubspot/components/trackingcode/default.htm", "");
    }
}
