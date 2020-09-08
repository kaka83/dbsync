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

/* /var/www/html/glueup/themes/glueup/partials/site/footer.htm */
class __TwigTemplate_df9b6add1c3e563bd52c8092b4bc11cc736d484ee3d53311f8f3abcd3c8cca1c extends \Twig\Template
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
        // line 3
        echo "<footer class=\"footer section pb-4\">
    <nav aria-labelledby=\"sitemap\" class=\"\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 mr-auto col-sm-6\">
\t\t\t   
    \t\t\t\t\t<h4 class=\"text-capitalize mb-2\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up"]);
        echo "</h4>
    \t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35 list-break\">
\t\t\t\t                                 
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/crm");
        echo "\">
                                                            <span>";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span>
                                                    </li>
                                                   <li>
                                                        </a>
                                                        <a class=\"\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/community");
        echo "\">
                                                            <span>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/event-management");
        echo "\">
                                                            <span>";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online & Offline Events"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/membership-management");
        echo "\">
                                                            <span>";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Memberships"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/email-campaigns");
        echo "\">
                                                            <span>";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</span>
                                                            
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/finance");
        echo "\">
                                                            <span>";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Finance & Invoicing"]);
        echo "</span>
                                
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/tasks");
        echo "\">
                                                            <span>";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo "</span>
                                    
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/surveys");
        echo "\">
                                                            <span>";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/cpe-cpd");
        echo "\">
                                                            <span>";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CPE/CPD Credits"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/website");
        echo "\">
                                                            <span>";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Website"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/integrations");
        echo "\">
                                                            <span>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Integrations"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   ";
        // line 75
        echo "                                                   </ul>
                                        <h4 class=\"text-capitalize mb-2\">";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</h4>
                                        <ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t                                 <li>
                                                        <a class=\"\" href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glue-up-app");
        echo "\">
                                                            <span>";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["My Glue"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                <li>
                                                        <a class=\"\" href=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glue-up-manager-app");
        echo "\">
                                                            <span>";
        // line 85
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manager Up"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                        </ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 mr-auto col-sm-6\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-2\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Products"]);
        echo "</h4>
\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t                        
                                                <li>
                                                        <a class=\"\" href=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/event-management-suite");
        echo "\">
                                                            <span>";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/membership-management-suite");
        echo "\">
                                                            <span>";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management Suite"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/virtual-events-management-suite");
        echo "\">
                                                            <span>";
        // line 106
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events Management Suite"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/community-management-suite");
        echo "\">
                                                            <span>";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Management Suite"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/training-management-suite");
        echo "\">
                                                            <span>";
        // line 116
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training Management Suite"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/donations-management-suite");
        echo "\">
                                                            <span>";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations Management Suite"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pricing");
        echo "\">
                                                            <span>";
        // line 126
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pricing"]);
        echo "</span>
                                                    </li>
                                                 </ul>
                    <h4 class=\"text-capitalize mb-2\">";
        // line 129
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Per Industry"]);
        echo "</h4>
\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t
                                                <li>
                                                       <a class=\"\" href=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/association-management-software");
        echo "\">
                                                        <span>";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Associations"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/chamber-management-software");
        echo "\">
                                                        <span>";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Chambers of Commerce"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 141
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/conference-management-software");
        echo "\">
                                                        <span>";
        // line 142
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Conference Organizers"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/corporations-management-software");
        echo "\">
                                                        <span>";
        // line 146
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Corporations"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 149
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/non-profit-management-software");
        echo "\">
                                                        <span>";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Non-Profits"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/financial-services-management-software");
        echo "\">
                                                        <span>";
        // line 154
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Financial Services"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/consultancy-firm-management-software");
        echo "\">
                                                        <span>";
        // line 158
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Consultancy Firms"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/training-management-software");
        echo "\">
                                                        <span>";
        // line 162
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training & Development"]);
        echo "</span></a>
                                                        </li>
                                                 </ul>
            </div>              
\t\t\t<div class=\"col-lg-3 mr-auto col-sm-6\">
    \t\t\t        <h4 class=\"text-capitalize mb-2\">";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Resources"]);
        echo "</h4>
    \t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35 list-break\">
    \t\t\t\t\t    <li><a href=\"";
        // line 169
        echo RainLab\Pages\Classes\Page::url("demo");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Request a Demo"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 170
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Blog"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 171
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("resources/case-studies");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Case Studies"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("resources/whitepapers");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Whitepapers"]);
        echo "</a></li>
    \t\t\t\t\t";
        // line 174
        echo "    \t\t\t\t\t";
        // line 175
        echo "    \t\t\t\t\t";
        // line 176
        echo "    \t\t\t\t\t\t<li><a href=\"#support\" value=\"Submit\" id=\"support-link\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#support\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Support"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/security");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Security"]);
        echo "</a></li>
    \t\t\t\t\t\t
    \t\t\t\t\t\t";
        // line 180
        echo "    \t\t\t\t\t</ul>
    \t\t\t\t\t<h4 class=\"text-capitalize mb-2\">";
        // line 181
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Legal"]);
        echo "</h4>
    \t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35 list-break\">
    \t\t\t\t\t\t<li><a href=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/terms-and-conditions-organizations");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Organizations Terms"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/terms-and-conditions-users");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["User Terms"]);
        echo "</a></li>
    \t\t\t\t\t\t";
        // line 186
        echo "    \t\t\t\t\t\t<li><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/privacy-policy");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Privacy Policy"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/cookie-policy");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cookie Policy"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/legal-notice");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Legal Notice"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/privacy-policy");
        echo "#transfers_data\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["GDPR"]);
        echo "</a></li>
    \t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 197
        echo "\t\t\t<div class=\"col-lg-2 ml-auto col-sm-6\">
\t\t\t            <h4 class=\"text-capitalize mb-2\">";
        // line 198
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Company"]);
        echo "</h4>
    \t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35 list-break\">
    \t\t\t\t\t\t<li><a href=\"";
        // line 200
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["About"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 201
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("culture");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Culture"]);
        echo "</a></li>
    \t\t\t\t\t";
        // line 203
        echo "    \t\t\t\t\t";
        // line 204
        echo "    \t\t\t\t\t\t<li><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Us"]);
        echo "</a></li>
    \t\t\t\t\t\t";
        // line 206
        echo "    \t\t\t\t\t</ul>
    \t\t\t\t\t<h4 class=\"text-capitalize mb-2\">";
        // line 207
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Follow Us"]);
        echo "</h4>
    \t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
        \t\t\t\t\t<li><a href=\"https://www.facebook.com/eventbank\"><i class=\"icon-facebook mr-2\"></i>";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Facebook"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"https://twitter.com/eventbank\"><i class=\"icon-twitter mr-2\"></i>";
        // line 210
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Twitter"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/eventbank/\"><i class=\"icon-linkedin mr-2 \"></i>";
        // line 211
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Linked In"]);
        echo "</a></li>
    \t\t\t\t\t</ul>
    \t\t\t\t\t <ul class=\"list-unstyled footer-menu lh-35 mb-0 footer-lang\">
        \t\t\t\t<li><h4 class=\"text-capitalize mb-2\"><i class=\"icon-language mr-1\"></i>";
        // line 214
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Language"]);
        echo "</h4></li>
    \t\t\t
\t\t        ";
        // line 216
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("extendedLocalePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 217
        echo "\t\t        \t\t</ul>
\t\t\t</div>
\t\t\t";
        // line 226
        echo "\t\t
\t\t
\t</div>
\t<div class=\"row pb-0\">
\t\t\t<div class=\"col-lg-3 mx-auto text-center d-block flow-column pb-0\">
\t\t    \t<img src=\"";
        // line 231
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Glueup-symbol.svg");
        echo "\" style=\"width:50px; height:auto;\" class=\"logo img-fluid lazyload pb-2\" alt=\"Glue Up Official Logo\" /><br>
\t\t    \t<span style=\"color:#7a7a7a;\" class=\"pt-3 pb-0\">&copy;Glue Up ";
        // line 232
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span>
\t\t    \t";
        // line 233
        if ((($context["CurrentLanguage"] ?? null) === "cn")) {
        }
        // line 234
        echo "\t\t\t</div>
\t\t</div>
</nav>
</footer>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 234,  553 => 233,  549 => 232,  545 => 231,  538 => 226,  534 => 217,  530 => 216,  525 => 214,  519 => 211,  515 => 210,  511 => 209,  506 => 207,  503 => 206,  496 => 204,  494 => 203,  488 => 201,  482 => 200,  477 => 198,  474 => 197,  464 => 189,  458 => 188,  452 => 187,  445 => 186,  439 => 184,  433 => 183,  428 => 181,  425 => 180,  418 => 177,  413 => 176,  411 => 175,  409 => 174,  403 => 172,  397 => 171,  391 => 170,  385 => 169,  380 => 167,  372 => 162,  368 => 161,  362 => 158,  358 => 157,  352 => 154,  348 => 153,  342 => 150,  338 => 149,  332 => 146,  328 => 145,  322 => 142,  318 => 141,  312 => 138,  308 => 137,  302 => 134,  298 => 133,  291 => 129,  285 => 126,  281 => 125,  274 => 121,  270 => 120,  263 => 116,  259 => 115,  252 => 111,  248 => 110,  241 => 106,  237 => 105,  230 => 101,  226 => 100,  219 => 96,  215 => 95,  208 => 91,  199 => 85,  195 => 84,  188 => 80,  184 => 79,  178 => 76,  175 => 75,  169 => 67,  165 => 66,  158 => 62,  154 => 61,  147 => 57,  143 => 56,  136 => 52,  132 => 51,  124 => 46,  120 => 45,  112 => 40,  108 => 39,  100 => 34,  96 => 33,  89 => 29,  85 => 28,  78 => 24,  74 => 23,  67 => 19,  63 => 18,  56 => 14,  52 => 13,  45 => 9,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/footer.htm", "");
    }
}
