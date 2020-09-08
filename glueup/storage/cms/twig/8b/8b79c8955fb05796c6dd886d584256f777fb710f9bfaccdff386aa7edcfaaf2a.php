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

/* /var/www/html/glueup/themes/glueup/pages/legal/legal-notice.htm */
class __TwigTemplate_7aa4985d92feee55172d30a8f1a04f0f92e7e2f70ddffe3ad4ee04f5852c2688 extends \Twig\Template
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
        echo "<section class=\"section legal\" id=\"terms_org\">
<div class=\"pt-0\">
        <div class=\"container\">
        <div class=\"row pt-4\">
        <div class=\"col-md-8 align-self-center mx-auto\">
        <h3 class=\"pt-4\">EventBank Inc.</h3>
         <p>1775 Tysons Blvd, 5th Floor<br>
             Tysons, VA 22102<br>
               USA </p>
        
            <p class=\"pt-4\">You may contact us via email at <a href=\"mailto:support@eventbank.com\">support@eventbank.com</a></p>
            
            <h3 class=\"pt-4\">CEO</h3>
             <p>Eric L. Schmidt</p>
             <br>
             <br>
              <small style=\"color:#7a7a7a;\">We assume no liability for the content of websites linked to us.
The owners of these linked websites take sole responsibility for their contents.</small>
       
           </div>
           </div>
        </div>
        </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/legal/legal-notice.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/legal/legal-notice.htm", "");
    }
}
