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

/* /var/www/html/glueup/themes/glueup/partials/site/mobile-nav.htm */
class __TwigTemplate_39a1f78ca3cbdb1781bcb59d28560c63e2c7b891e896e8dce10600f8f3467251 extends \Twig\Template
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
        echo "<li class=\"nav-item dropdown position-static d-block d-sm-none\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Why Glue Up?"]);
        echo "</a>
    <ul class=\"dropdown-menu w-100 shadow p-0\" id=\"navbarcompany\">
        <li class=\"glueupmenu\">
            <div class=\"row pr-4\">
                <div class=\"col-md-8\">
                                                        <a class=\"dropdown-item\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pricing");
        echo "\">
                                                            <span>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pricing"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/crm");
        echo "\">
                                                            <span>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/community");
        echo "\">
                                                            <span>";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/event-management");
        echo "\">
                                                            <span>";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online & Offline Events"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/membership-management");
        echo "\">
                                                            <span>";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Memberships"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/email-campaigns");
        echo "\">
                                                            <span>";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/finance");
        echo "\">
                                                            <span>";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Finance & Invoicing"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/tasks");
        echo "\">
                                                            <span>";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/surveys");
        echo "\">
                                                            <span>";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/cpe-cpd");
        echo "\">
                                                            <span>";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CPE/CPD Credits"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/website");
        echo "\">
                                                            <span>";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Website"]);
        echo "</span>
                                                        </a>
                                                        
                                                       ";
        // line 43
        echo "                                                        </a>
                                                    <h4 class=\"text-capitalize ml-2 mb-2\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</h4>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glueup-app");
        echo "\">
                                                            <span>";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up App"]);
        echo "</span></a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glueup-manager");
        echo "\">
                                                            <span>";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up Manager"]);
        echo "</span></a>
                </div>
            </div>
            </ul>
        </li>

<li class=\"nav-item dropdown position-static d-block d-sm-none\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Products"]);
        echo "</a>
    <ul class=\"dropdown-menu w-100 shadow p-0\" id=\"navbarcompany\">
        <li class=\"glueupmenu\">
            <div class=\"row pr-4\">
                <div class=\"col-md-8\">
                                                        <a class=\"dropdown-item\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/event-management-suite");
        echo "\">
                                                            <span>";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/membership-management-suite");
        echo "\">
                                                            <span>";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management Suite"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/virtual-events-management-suite");
        echo "\">
                                                            <span>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events Management Suite"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/community-management-suite");
        echo "\">
                                                            <span>";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Management Suite"]);
        echo "</span>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/training-management-suite");
        echo "\">
                                                            <span>";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training Management Suite"]);
        echo "</span>
                                                        </a>
                                                        ";
        // line 78
        echo "                    <h4 class=\"text-capitalize ml-2 mb-2\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Per Industry"]);
        echo "</h4>
                                                       <a class=\"dropdown-item\" href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/association-management-software");
        echo "\">
                                                        <span>";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Associations"]);
        echo "</span></a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/chamber-management-software");
        echo "\">
                                                        <span>";
        // line 82
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Chambers of Commerce"]);
        echo "</span></a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/event-agencies-management-software");
        echo "\">
                                                        <span>";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Conference Organizers"]);
        echo "</span></a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/corporation-management-software");
        echo "\">
                                                        <span>";
        // line 86
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Corporations"]);
        echo "</span></a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/non-profit-management-software");
        echo "\">
                                                        <span>";
        // line 88
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Non-Profits"]);
        echo "</span></a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/financial-management-software");
        echo "\">
                                                        <span>";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Financial Services"]);
        echo "</span></a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/consulting-company-management-software");
        echo "\">
                                                        <span>";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Consultancy Firms"]);
        echo "</span></a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/training-company-management-software");
        echo "\">
                                                        <span>";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training & Development"]);
        echo "</span></a>  
                </div>
            </div>
        </li>
    </ul>
</li>
<li class=\"nav-item dropdown position-static d-block d-sm-none\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Resources"]);
        echo "</a>
    <ul class=\"dropdown-menu w-100 shadow p-0\" id=\"navbarcompany\">
        <li class=\"glueupmenu\">
            <div class=\"row pr-4\">
                <div class=\"col-md-8\">
                        ";
        // line 107
        echo "    \t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Blog"]);
        echo "</a>
    \t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("resources/case-studies");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Case Studies"]);
        echo "</a>
    \t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("resources/whitepapers");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Whitepapers"]);
        echo "</a>
    \t\t\t\t";
        // line 111
        echo "    \t\t\t\t";
        // line 112
        echo "    \t\t\t\t";
        // line 113
        echo "    \t\t\t\t";
        // line 114
        echo "    \t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/integrations");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Integrations"]);
        echo "</a>
    \t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("security");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Security"]);
        echo "</a>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class=\"nav-item dropdown position-static d-block d-sm-none\">
         <a class=\"nav-link\" href=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pricing");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pricing"]);
        echo "</a>
</li>
<li class=\"nav-item dropdown position-static d-block d-sm-none\">
        <a class=\"nav-link\" href=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["About"]);
        echo "</a>
</li>
<li class=\"nav-item dropdown position-static d-block d-sm-none\">
        <a class=\"nav-link\" href=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Us"]);
        echo "</a>
</li>
<li class=\"nav-item dropdown position-static d-block d-sm-none\">
        <a class=\"nav-link\" href=\"/account/login\">";
        // line 131
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Log In"]);
        echo "</a>
</li>
<li class=\"nav-item lang d-block d-sm-none py-3\">
";
        // line 134
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 135
        echo "</li>


";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/mobile-nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 135,  387 => 134,  381 => 131,  373 => 128,  365 => 125,  357 => 122,  345 => 115,  338 => 114,  336 => 113,  334 => 112,  332 => 111,  326 => 109,  320 => 108,  313 => 107,  305 => 101,  295 => 94,  291 => 93,  287 => 92,  283 => 91,  279 => 90,  275 => 89,  271 => 88,  267 => 87,  263 => 86,  259 => 85,  255 => 84,  251 => 83,  247 => 82,  243 => 81,  239 => 80,  235 => 79,  230 => 78,  225 => 73,  221 => 72,  216 => 70,  212 => 69,  207 => 67,  203 => 66,  198 => 64,  194 => 63,  189 => 61,  185 => 60,  177 => 55,  167 => 48,  163 => 47,  159 => 46,  155 => 45,  151 => 44,  148 => 43,  142 => 38,  138 => 37,  133 => 35,  129 => 34,  124 => 32,  120 => 31,  115 => 29,  111 => 28,  106 => 26,  102 => 25,  97 => 23,  93 => 22,  88 => 20,  84 => 19,  79 => 17,  75 => 16,  70 => 14,  66 => 13,  61 => 11,  57 => 10,  52 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/mobile-nav.htm", "");
    }
}
