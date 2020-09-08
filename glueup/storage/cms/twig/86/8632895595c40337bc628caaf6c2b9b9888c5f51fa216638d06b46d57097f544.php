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

/* /var/www/html/glueup/themes/glueup/pages/home.htm */
class __TwigTemplate_bb60495ca1e83a6cffabb37be7a69322b2edece4d29926e014f4befae4e9bb00 extends \Twig\Template
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
        echo "<header id=\"hero\" class=\"d-flex align-self-center\">

        <div class=\"container paygage-hero-container align-items-center align-self-center\">
        \t 
            <div class=\"row mx-auto\">
                
                <div class=\"col-lg-8 mx-auto hero home align-self-center text-center\" style=\"padding-top:5vh;\">
\t\t\t\t\t<h1>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All-in-One Software<br> for <span class=\"line\"><ins> Growing</ins></span> Your Community "]);
        echo "</h1>
                       <p class=\"tagline\"> ";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up is an all-in-one platform that helps you build and grow your community through events, memberships, CRM, email campaigns, finance and marketing tools. "]);
        echo " </p><br>
                       <div class=\"row\">
                            <div class=\"col-md-7 mx-auto input-group mt-3 d-flex\">
                                <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Email"]);
        echo "\" aria-label=\"email\" class=\"form-control has_background\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary btn-round-full pointer\" value=\"Submit\" id=\"emailtomodal\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#contact-paygage\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Started"]);
        echo "</button>
                                </div>
                            </div>
                        </div>
                </div>
                <img class=\"col-md-offset-12 img-fluid hero-home text-center mx-auto d-none d-sm-block\" style=\"\" src=\"";
        // line 19
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-hero3.svg");
        echo "\" alt=\"Glue Up helps you with events, memberships, CRM, email campaigns, finance and marketing tools.\">
            </div>
        </div> 
    </header>
";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("logos/logobar-home.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "

<section id=\"product-display\" class=\"py-5\">
    <div class=\"py-5 container\">
        <div class=\"row flex-row\">
                                                    <div class=\"col-md-8 mx-auto\">
                                                       <div class=\"block text-center\">
                                                             <h2 class=\"mt-3 mb-4 sentence  position-relative\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All-in-one Solutions for Every Team"]);
        echo "</h2>
                                                             <p class=\"tagline\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["No matter your needs, our solutions are powerful yet flexible to empower you to grow your organization and your community."]);
        echo " </p>
                                                        </div>
                                                    </div>
        </div>
        <div class=\"row flex-row mt-5\">
                   <div id=\"solutions-display\" class=\"col-md-12 align-self-center\">
                                                <div class=\"row align-self-center\">
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/event-management-suite");
        echo "\">
                                                            <img src=\"";
        // line 41
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event.svg");
        echo "\" class=\"dropdown-visual\" alt=\"Glue Up helps you plan, promote and execute events.\">
                                                            <p class=\"link-title mb-2\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, promote, execute and evaluate all of your events. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/membership-management-suite");
        echo "\">
                                                            <img src=\"";
        // line 48
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership.svg");
        echo "\" class=\"dropdown-visual\" alt=\"Glue Up helps you manage your memberships\"  style=\"max-height:100px;\">
                                                            <p class=\"link-title mb-2\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retain, engage and grow your member community. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/virtual-events-management-suite");
        echo "\">
                                                            <img src=\"";
        // line 55
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-online-events.svg");
        echo "\" class=\"dropdown-visual\" alt=\"Glue Up helps you plan, promote and execute online events\">
                                                            <p class=\"link-title mb-2\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize and enhance your online events and webinars. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/community-management-suite");
        echo "\">
                                                            <img src=\"";
        // line 62
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community-feature.svg");
        echo "\" class=\"dropdown-visual\" alt=\"Glue Up helps you engage your community\">
                                                            <p class=\"link-title mb-2\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your community to thrive and amplify engagement. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/training-management-suite");
        echo "\">
                                                            <img src=\"";
        // line 69
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-learning.svg");
        echo "\" class=\"dropdown-visual pb-4\" alt=\"Glue Up helps you deliver and monetize your courses and CPE/CPD Credits\">
                                                            <p class=\"link-title mb-2\">";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build, market, sell, and analyze courses with ease."]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item pointer btn-block\" value=\"Submit\" id=\"comming-soon-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#pricing\" href=\"";
        // line 75
        echo "\">
                                                        <img src=\"";
        // line 76
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-donations.svg");
        echo "\" class=\"dropdown-visual\" alt=\"Glue Up helps you manage donations\" style=\"max-height:100px;\">
                                                            <p class=\"link-title mb-2\">";
        // line 77
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations Management Suite"]);
        echo " <span class=\"badge badge-soon\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Coming Soon"]);
        echo "</span></p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collect and manage all your donations effortlessly. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
        </div>
    </div>

</section>

";
        // line 89
        echo "
<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 94
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event-management.svg");
        echo "\" alt=\"Glue Up helps you manage events big and small\" class=\"img-fluid mx-auto lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color \">";
        // line 98
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Events"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  \">";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Scale Up Events,<br> Not Workload."]);
        echo "</h2>
                            <div class=\"about-content  \">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, promote, and execute one or hundreds of events, large and small, from the first idea to attendee follow-up and evaluate with surveys after your event."]);
        echo "
    \t\t\t\t\t\t     </p>
                             <a href=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/event-management");
        echo "\" class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn More"]);
        echo " <i class=\"read-more-icon icon-arrow\"></i></a>
\t\t\t\t</div>
                            ";
        // line 106
        echo "                             <p class=\"quote-home pt-5\">
                             \"";
        // line 107
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" We host hundreds of events and manage tens of thousands of contacts using Glue Up."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" The platform's professional look and ease of use has enabled us to stand out as a premier forum for convening thought leaders."]);
        echo "\"</p>
                             <span class=\"h6 text-color \">";
        // line 108
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Carol Li Rafferty, "]);
        echo "<span style=\"font-weight:300;\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Managing Director, Yale Center"]);
        echo "</span></span>
                             <div class=\"align-self-center\">
                                 <img src=\"";
        // line 110
        echo $this->extensions['System\Twig\Extension']->mediaFilter("clients/yale-center.svg");
        echo "\" class=\"img-fluid\" style=\"display: block; max-width: 127px; max-height: 320px; padding: 10px 0;\" alt=\"logo\">
                             </div>
                  </div>
                </div>
                
            </div>

        </div>
</section>

<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-8 mx-auto d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence text-center mx-auto\">";
        // line 124
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create events <span class=\"line\"><ins>80%</ins></span> faster with <span style=\"color:#0d62fe;\">Glue Up</span>."]);
        echo "</p>
                </div>
            </div>
        </div>
</section>
";
        // line 130
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 134
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership-management.svg");
        echo "\" alt=\"Glue Up helps you manage memberships of any kind\" class=\"img-fluid mx-auto lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color \">";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Memberships"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  \">";
        // line 139
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retain, engage and grow your community."]);
        echo "</h2>
                            <div class=\"about-content  \">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate your membership management processes, maximize retention, and pamper your members with a premium experience they deserve."]);
        echo "<br>
                \t\t\t     </p>
\t\t\t\t<a href=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/membership-management");
        echo "\" class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn More"]);
        echo " <i class=\"read-more-icon icon-arrow\"></i></a>
                             </div>
                             <p class=\"quote-home pt-5\">
                             \"";
        // line 146
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" We are very pleased with the simplicity of the system. We rarely spend time training staff as most users simply “get it\""]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["  Its simple and fast out-of-the-box solution. We now have 4 client accounts running on Glue Up software."]);
        echo "\"</p>
                             <span class=\"h6 text-color \">";
        // line 147
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Marcel Ewals, "]);
        echo "<span style=\"font-weight:300;\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Director, Community Development, MCI Group"]);
        echo "</span></span>
                             <div class=\"align-self-center\">
                                 <img src=\"";
        // line 149
        echo $this->extensions['System\Twig\Extension']->mediaFilter("clients/mci.svg");
        echo "\" class=\"img-fluid\" style=\"display: block; max-width: 66px; max-height: 320px; padding: 10px 0;\" alt=\"logo\">
                             </div>
                  </div>
                </div>
                
            </div>

        </div>

</section>
";
        // line 160
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence mx-auto text-center\">";
        // line 164
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With <span style=\"color:#0d62fe;\">Glue Up</span>, members stick around. <br> Average retention rate of our clients is <span class=\"line\"><ins> 82%</ins></span>."]);
        echo "</p>
                </div>
            </div>
        </div>
</section>
";
        // line 170
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 174
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-engage.svg");
        echo "\" alt=\"Glue Up Helps your community thrive\" class=\"img-fluid mx-auto lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color \">";
        // line 178
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Communities"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  \">";
        // line 179
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable Your Community To Thrive"]);
        echo "</h2>
                            <div class=\"about-content  \">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 181
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Give your audience a digital place where they can connect with you and your mission 365 days a year even when meeting face to face isn’t possible."]);
        echo "
    \t\t\t\t\t\t     </p>
\t\t\t\t<a href=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/community");
        echo "\" class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn More"]);
        echo " <i class=\"read-more-icon icon-arrow\"></i></a>
                             </div>
                             <p class=\"quote-home pt-5\">
                             \"";
        // line 186
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Many great features under one umbrella."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" From CRM, Event Management, Social Engagement, Email Marketing Campaigns, Invoicing, Membership Management & Financing, this software enables you run your business effectively and efficiently."]);
        echo "\"</p>
                             <span class=\"h6 text-color \">";
        // line 187
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Edward Ornelas, "]);
        echo "<span style=\"font-weight:300;\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["President & CEO, Inland Empire Regional Chamber of Commerce"]);
        echo "</span></span>
                             <div class=\"align-self-center\">
                                 <img src=\"";
        // line 189
        echo $this->extensions['System\Twig\Extension']->mediaFilter("clients/iechamber.svg");
        echo "\" class=\"img-fluid\" style=\"display: block; max-width: 160px; max-height: 320px; padding: 10px 0;\" alt=\"logo\">
                             </div>
                             
                  </div>
                </div>
                
            </div>

        </div>
</section>
";
        // line 199
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/blogs-sort-home.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 200
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence mx-auto text-center\">";
        // line 204
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Don't take  <span class='line'><ins> our word </ins></span> for it."]);
        echo "</p>
                </div>
            </div>
            <div class=\"row mx-auto\">
            \t<div class=\"col-md-8 mx-auto\">
            \t\t<div class=\"row\">
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 \">
                              <div class=\"card-body pt-4 \">
                                <img src=\"";
        // line 213
        echo $this->extensions['System\Twig\Extension']->mediaFilter("capterra-top-20-img.png");
        echo "\" alt=\"Glue Up Top 20 Rated in Capterra\" class=\" img-fluid mx-auto lazy fadeIn\" style=\"max-height: 120px;\">
                                ";
        // line 215
        echo "                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 \">
                              <div class=\"card-body pt-4\">
                              \t<img alt=\"Glue Up is one of GetApp Category Leaders for Association Management Jul-20\" title=\"Category Leaders Badge\" style=\"width: 140px; border: 0px\" src=\"https://cdn0.capterra-static.com/assets/images/gdm-badges/GA_Badge_Category%20Leaders_Full%20Color.png\">
                                 ";
        // line 223
        echo "                                ";
        // line 224
        echo "                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 \">
                              <div class=\"card-body pt-4 \">
                                ";
        // line 231
        echo "                                <img alt=\"Glue Up is one of the Software Advice Frontrunners for Association Management Jul-20\" title=\"Frontrunners Badge\" style=\"width: 140px; border: 0px\" src=\"https://cdn0.capterra-static.com/assets/images/gdm-badges/SA_FrontRunners_Full%20Color.png\">
                                ";
        // line 233
        echo "                              </div>
                            </div>
                        </div>
                       </div>
                  </div>
            </div>
</section>

";
        // line 241
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/pricing-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 250
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer-cta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 250,  492 => 241,  482 => 233,  479 => 231,  471 => 224,  469 => 223,  460 => 215,  456 => 213,  444 => 204,  438 => 200,  434 => 199,  421 => 189,  414 => 187,  409 => 186,  401 => 183,  396 => 181,  391 => 179,  387 => 178,  380 => 174,  374 => 170,  366 => 164,  360 => 160,  347 => 149,  340 => 147,  335 => 146,  327 => 143,  322 => 141,  317 => 139,  313 => 138,  306 => 134,  300 => 130,  292 => 124,  275 => 110,  268 => 108,  263 => 107,  260 => 106,  253 => 103,  248 => 101,  243 => 99,  239 => 98,  232 => 94,  225 => 89,  212 => 78,  206 => 77,  202 => 76,  199 => 75,  192 => 71,  188 => 70,  184 => 69,  180 => 68,  173 => 64,  169 => 63,  165 => 62,  161 => 61,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  135 => 50,  131 => 49,  127 => 48,  123 => 47,  116 => 43,  112 => 42,  108 => 41,  104 => 40,  93 => 32,  89 => 31,  80 => 24,  76 => 23,  69 => 19,  61 => 14,  56 => 12,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/home.htm", "");
    }
}
