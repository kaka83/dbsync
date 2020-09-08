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

/* /var/www/html/glueup/themes/glueup/partials/site/scripts.htm */
class __TwigTemplate_acb2ae1af6f953e3d4e24cdbaf71a657b4e5dc1dd3bdd993858e17266a78fbaa extends \Twig\Template
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
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-3.5.1.min.js", 1 => "@framework", 2 => "@framework.extras"]);
        // line 6
        echo "\" type=\"text/javascript\"></script>
   <script src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle.min.js");
        echo "\"></script>
<script src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\"></script>
<script src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.waypoints.min.js", 1 => "assets/js/jquery.counterup.min.js"]);
        // line 12
        echo "\" type=\"text/javascript\" async></script>

<script src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/underliner.js");
        echo "\"></script>
";
        // line 16
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/blog.js");
        echo "\" defer></script>
<script src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/tabs.js");
        echo "\" async></script>
<script src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/tawk.js");
        echo "\" defer></script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  66 => 17,  61 => 16,  57 => 14,  53 => 12,  51 => 9,  47 => 8,  43 => 7,  40 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/scripts.htm", "");
    }
}
