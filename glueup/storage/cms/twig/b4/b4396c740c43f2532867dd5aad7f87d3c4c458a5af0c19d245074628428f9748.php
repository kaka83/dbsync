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

/* /var/www/html/glueup/themes/glueup/pages/pricing.htm */
class __TwigTemplate_a8456214574a1432949235f53a09027a3d447c070bdc9be995ee9ca6556db14e extends \Twig\Template
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
        echo "<div class=\"generic \" id=\"generic\">  
        <div class=\"container\">
            <div class=\"row pt-5\">
                
                <div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
                      <h1>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Let’s Do<br> Business <span class=\"line\"><ins>Together</ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Find the right plan for your organization, request a demo and start managing your operations and engaging your community today. "]);
        echo " </p>


                </div>
               
            </div>
            ";
        // line 18
        echo "        </div> 
</div>

<section id=\"plans\" class=\"section\">
        <div class=\"container\">
           
            ";
        // line 25
        echo "            <div  class=\"row mx-auto\">
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card pricing text-left h-100 shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                  <img src=\"";
        // line 29
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event.svg");
        echo "\" class=\"dropdown-visual d-table\" style=\"max-width: 34%;\"  alt=\"logo\">
                                  <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "</h4>
                                  <p class=\"card-text mb-5\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, promote, execute and evaluate all of your events. "]);
        echo "</p></span>
                                   <ul class=\"pricing-list\">
                                        <li class=\"pricing-list-item\"><i class=\"icon-events\"></i><span>";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-crm\"></i><span>";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-email-campaigns\"></i><span>";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-invoice\"></i><span>";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-social-share\"></i><span>";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-thumb-full\"></i><span>";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-mobile-check\"></i><span>";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</span></li>
                                   </ul>
                                   \t<input type=\"hidden\" id=\"solution1\" name=\"solution\" placeholder=\"Your solution\" value=\"";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "\" aria-label=\"solution\" class=\"form-control has_background\">
                                    <button class=\"btn btn-primary btn-round-full pointer btn-block\" value=\"Submit\" id=\"pricing-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#pricing\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Quote"]);
        echo "</button>
                              </div>
                            </div>
                        </div>
                         <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card pricing text-left h-100 shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                  <img src=\"";
        // line 49
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership.svg");
        echo "\" class=\"dropdown-visual d-table\"  alt=\"logo\">
                                  <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management Suite"]);
        echo "</h4>
                                  <p class=\"card-text mb-5\">";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retain, engage and grow your member community. "]);
        echo "</p></span>
                                   <ul class=\"pricing-list\">
                                        <li class=\"pricing-list-item\"><i class=\"icon-memberships\"></i><span>";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-events\"></i><span>";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-crm\"></i><span>";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-email-campaigns\"></i><span>";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-invoice\"></i><span>";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-social-share\"></i><span>";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-mobile-check\"></i><span>";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</span></li>
                                   </ul>
                                   <input type=\"hidden\" id=\"solution2\" name=\"solution\" placeholder=\"Your solution\" value=\"";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management Suite"]);
        echo "\" aria-label=\"solution\" class=\"form-control has_background\">
                                    <button class=\"btn btn-primary btn-round-full pointer btn-block\" value=\"Submit\" id=\"pricing-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#pricing\">";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Quote"]);
        echo "</button>
                              </div>
                            </div>
                        </div>
                         <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card pricing text-left h-100 shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                  <img src=\"";
        // line 69
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community-feature.svg");
        echo "\" class=\"dropdown-visual d-table\" style=\"max-width: 32%;\"  alt=\"logo\">
                                  <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Management Suite"]);
        echo "</h4>
                                  <p class=\"card-text mb-5\">";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your community to thrive and amplify engagement. "]);
        echo "</p></span>
                                   <ul class=\"pricing-list\">
                                        <li class=\"pricing-list-item\"><i class=\"icon-crm\"></i><span>";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-email-campaigns\"></i><span>";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-invoice\"></i><span>";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-social-share\"></i><span>";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-mobile-check\"></i><span>";
        // line 77
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i></i><span class=\"muted\">- </span></li>
                                        <li class=\"pricing-list-item\"><i></i><span class=\"muted\">- </span></li>
                                   </ul>
                                   <input type=\"hidden\" id=\"solution3\" name=\"solution\" placeholder=\"Your solution\" value=\"";
        // line 81
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Management Suite"]);
        echo "\" aria-label=\"solution\" class=\"form-control has_background\">
                                    <button class=\"btn btn-primary btn-round-full pointer btn-block\" value=\"Submit\" id=\"pricing-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#pricing\">";
        // line 82
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Quote"]);
        echo "</button>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card pricing text-left h-100 shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                  <img src=\"";
        // line 89
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-online-events.svg");
        echo "\" class=\"dropdown-visual d-table\" style=\"max-width: 42%;\" alt=\"logo\">
                                  <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events Management Suite"]);
        echo "</h4>
                                  <p class=\"card-text mb-5\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize and enhance your online events and webinars. "]);
        echo "</p></span>
                                   <ul class=\"pricing-list\">
                                        <li class=\"pricing-list-item\"><i class=\"icon-events\"></i><span>";
        // line 93
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-crm\"></i><span>";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-email-campaigns\"></i><span>";
        // line 95
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-invoice\"></i><span>";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-social-share\"></i><span>";
        // line 97
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-thumb-full\"></i><span>";
        // line 98
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-mobile-check\"></i><span>";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</span></li>
                                   </ul>
                                   <input type=\"hidden\" id=\"solution4\" name=\"solution\" placeholder=\"Your solution\" value=\"";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Event Management Suite"]);
        echo "\" aria-label=\"solution\" class=\"form-control has_background\">
                                    <button class=\"btn btn-primary btn-round-full pointer btn-block\" value=\"Submit\" id=\"pricing-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#pricing\">";
        // line 102
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Quote"]);
        echo "</button>
                              </div>
                            </div>
                        </div>
                         <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card pricing text-left h-100 shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                  <img src=\"";
        // line 109
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-learning.svg");
        echo "\" class=\"dropdown-visual d-table\" style=\"max-width: 42%;\" alt=\"logo\">
                                  <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 110
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training Management Suite"]);
        echo "</h4>
                                  <p class=\"card-text mb-5\">";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build, market, sell, and analyze courses with ease."]);
        echo "</p></span>
                                   <ul class=\"pricing-list\">
                                        <li class=\"pricing-list-item\"><i class=\"icon-events\"></i><span>";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-crm\"></i><span>";
        // line 114
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-email-campaigns\"></i><span>";
        // line 115
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-invoice\"></i><span>";
        // line 116
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-social-share\"></i><span>";
        // line 117
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-mobile-check\"></i><span>";
        // line 118
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-event-tags\"></i><span>";
        // line 119
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CPE/CPD Credits"]);
        echo "</span></li>
                                   </ul>
                                   <input type=\"hidden\" id=\"solution5\" name=\"solution\" placeholder=\"Your solution\" value=\"";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training Management Suite"]);
        echo "\" aria-label=\"solution\" class=\"form-control has_background\">
                                    <button class=\"btn btn-primary btn-round-full pointer btn-block\" value=\"Submit\" id=\"pricing-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#pricing\">";
        // line 122
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Quote"]);
        echo "</button>
                              </div>
                            </div>
                        </div>
                         <div class=\"col-md-4 py-3 ml-auto\">
                            <div class=\"card pricing text-left h-100 shadow-sm\">
                              <div class=\"card-body pt-4 \">
                                  <img src=\"";
        // line 129
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-donations.svg");
        echo "\" class=\"dropdown-visual d-table\" style=\"max-width: 27%;\" alt=\"logo\">
                                  <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 130
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations Management Suite"]);
        echo "</h4>
                                  <p class=\"card-text mb-5\">";
        // line 131
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your community to thrive and amplify engagement. "]);
        echo "</p></span>
                                   <ul class=\"pricing-list\">
                                   \t\t<li class=\"pricing-list-item\"><i class=\"icon-payments\"></i><span>";
        // line 133
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-crm\"></i><span>";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-email-campaigns\"></i><span>";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-invoice\"></i><span>";
        // line 136
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i class=\"icon-mobile-check\"></i><span>";
        // line 137
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</span></li>
                                        <li class=\"pricing-list-item\"><i></i><span class=\"muted\">- </span></li>
                                        <li class=\"pricing-list-item\"><i></i><span class=\"muted\">- </span></li>
                                   </ul>
                                   <input type=\"hidden\" id=\"solution6\" name=\"solution\" placeholder=\"Your solution\" value=\"";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations Management Suite"]);
        echo "\" aria-label=\"solution\" class=\"form-control has_background\">
                                    <button class=\"btn btn-primary btn-round-full pointer btn-block\" value=\"Submit\" id=\"pricing-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#pricing\">";
        // line 142
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Quote"]);
        echo "</button>
                              </div>
                            </div>
                        </div>
                         
                       
                        
                ";
        // line 150
        echo "            </div>
            ";
        // line 156
        echo "        </div>

</section>

<section class=\"section py-0\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 165
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What makes our solutions special?"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 166
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A successful partnership starts with a great software that works for both you and your community."]);
        echo "<br>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Not only do our award-winning solutions amplify engagement, they streamline operations for organizations of all sizes."]);
        echo " </p>
                        </div>
                    </div>
            </div>
            <div class=\"row justify-content-center mx-auto\">
            \t<div class=\"col-md-8 mx-auto\">
            \t\t<div class=\"row\">
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 hideme\">
                              <div class=\"card-body pt-4 \">
                                <img src=\"";
        // line 176
        echo $this->extensions['System\Twig\Extension']->mediaFilter("capterra-top-20-img.png");
        echo "\" alt=\"Glue Up Top 20 Rated in Capterra\" class=\" img-fluid mx-auto lazy fadeIn\" style=\"max-height: 120px;\">
                                ";
        // line 178
        echo "                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 hideme\">
                              <div class=\"card-body pt-4\">
                              \t<img alt=\"Glue Up is one of GetApp Category Leaders for Association Management Jul-20\" title=\"Category Leaders Badge\" style=\"width: 140px; border: 0px\" src=\"https://cdn0.capterra-static.com/assets/images/gdm-badges/GA_Badge_Category%20Leaders_Full%20Color.png\">
                                 ";
        // line 186
        echo "                                ";
        // line 187
        echo "                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 hideme\">
                              <div class=\"card-body pt-4 \">
                                ";
        // line 194
        echo "                                <img alt=\"Glue Up is one of the Software Advice Frontrunners for Association Management Jul-20\" title=\"Frontrunners Badge\" style=\"width: 140px; border: 0px\" src=\"https://cdn0.capterra-static.com/assets/images/gdm-badges/SA_FrontRunners_Full%20Color.png\">
                                ";
        // line 196
        echo "                              </div>
                            </div>
                        </div>
                       </div>
                  </div>
            </div>
        </div>
</section>
";
        // line 272
        echo "<section class=\"section\">
        <div class=\"container\">
            ";
        // line 282
        echo "            <div class=\"row justify-content-center mx-auto\">
                <div class=\"col-md-8 py-3 mx-auto\">
                            <div class=\"card pricing  h-100 shadow-sm\">
                              <div class=\"card-body pt-4 text-center\">
                              \t\t <h2 class=\"mt-3 mb-4 text-center position-relative content-title\">";
        // line 286
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Becoming a Glue Up Client"]);
        echo "</h2>
                           \t\t\t  <p class=\"tagline text-center mb-4\">";
        // line 287
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1, 2, 3. Signing Up is That Easy"]);
        echo " </p>
                                   <ul class=\"pricing-list\">
                                        <li class=\"pricing-list-item text-left\"><i class=\"icon-visible\"></i>
                                        <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 290
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get a Demo"]);
        echo "</h4>
                                  \t\t<p class=\"card-text mb-5\">";
        // line 291
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Request a demo anywhere on this website and we’ll show you our platform in a customized demo right away"]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" or at your preferred time later in a week."]);
        echo "</p></span>
                                        </li>
                                        <li class=\"pricing-list-item text-left\"><i class=\"icon-cheque\"></i>
                                        <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 294
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Review proposal and e-sign agreement"]);
        echo "</h4>
                                  \t\t<p class=\"card-text mb-5\">";
        // line 295
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["After your personal demo is over, we will prepare a tailor-made proposal for your organization the same day."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" If all looks good we will send you an e-agreement for signing. "]);
        echo "</p></span>
                                        </li>
                                        <li class=\"pricing-list-item text-left\"><i class=\"icon-flag\"></i>
                                        <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 298
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Going live"]);
        echo "</h4>
                                  \t\t<p class=\"card-text mb-5\">";
        // line 299
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With the help of your dedicated Customer Success Manager, we’ll get you onboarded and trained quickly."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" You can begin creating events, running memberships, and collecting payments in no time."]);
        echo "</p></span>
                                        </li>
                                   </ul>
                                   <input type=\"hidden\" id=\"solution6\" name=\"solution\" placeholder=\"Your solution\" value=\"";
        // line 302
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations Management Suite"]);
        echo "\" aria-label=\"solution\" class=\"form-control has_background\">
                                    <a class=\"btn btn-primary btn-round-full pointer\" ";
        // line 303
        echo "  href=\"#plans\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Review Plans"]);
        echo "</a>
                              </div>
                            </div>
                        </div>
              </div>
                </div>
</section>

<section class=\"section\" id=\"faq\">
<div class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"section-title\">
                <small>";
        // line 315
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["FAQ"]);
        echo "</small>
                <h2>";
        // line 316
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Frequently Asked Questions"]);
        echo "</h2>
            </div>

            <div class=\"row pt-4\">
                <div class=\"col-md-6\">
                   <h4 class=\"mb-3 hideme\">";
        // line 321
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Will I be billed monthly or annually?"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 322
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All contracts are billed annually by default."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" however, if you want to use us just for one event/webinar or a special project, we can come up with a pricing that will suit your needs better."]);
        echo "</p>
\t\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 323
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Is my data safe with Glue Up?"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 324
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Confidentiality and "]);
        echo "<a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("security");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Security"]);
        echo "</a>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" is our number one priority."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" The platform has sophisticated security features and follows all latest data regulations like GDPR so you and your community are always protected. "]);
        echo "</p>
\t\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 325
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What happens if I exceed the agreed plan?"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 326
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["You can easily get in touch with your Customer Success Manager to increase the limits."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Add-ons and limit upgrades for events, emails, admins, contacts or integrations can be purchased at any time."]);
        echo "</p>
\t\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 327
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Does Glue Up integrate with my website?"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 328
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We provide customizable widgets that you can embed anywhere on the internet."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" We can also help you with access to our API and Webhooks so you can integrate with our software just the way you need."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" You can also sign up for our "]);
        echo "<a class=\"\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/website");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["professional website solution"]);
        echo "</a>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" that has all the Glue Up integrations built-in already."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" What's more, you can have new website up and running in less than a week!"]);
        echo "</p>
\t\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 329
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Who should I contact if I have more questions?"]);
        echo "</h4>
\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 330
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Please email <a href=\"mailto:sales@glueup.com\">sales@glueup.com</a> or reach out via live chat in the right corner of the website for any questions you might have. "]);
        echo "</p>
                </div>
                <div class=\"col-md-6\">
                    
\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 334
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What happens after I sign the agreement?"]);
        echo "</h4>
\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 335
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Customer Success Manager will immediately create your Glue Up account and get in touch to jumpstart your onboarding process."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" You will receive a personal kick-off call and training to get you up and running as soon as possible. Most Glue Up clients go live in less than a week after signing the agreement. "]);
        echo "</p>
\t\t\t\t\t
\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 337
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What type of support can I expect?"]);
        echo "</h4>
\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 338
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Once on board, you will gain access to Glue Up’s online HelpDesk with how-to articles, FAQs, practical tutorials and manuals."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["You can also sign up for regular webinars to get tips on how to get the maximum from the platform."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" And if you still have some questions, you can contact us via live chat, email or phone."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" For larger clients, our dedicated Customer Success Managers are ready to help you."]);
        echo "</p>
\t\t\t\t\t
\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 340
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Who uses Glue Up?"]);
        echo "</h4>
\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 341
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our cloud-based management solutions are used by organizations of all sizes in more than 50 countries around the world."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" They range from multinational enterprises and event agencies, through chambers of commerce and associations, to start-ups and nonprofit organizations."]);
        echo "</p>
\t\t\t\t\t
\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 343
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Where does Glue Up work?"]);
        echo "</h4>
\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 344
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We are a global company headquarted in the US. We provide cloud solutions in multiple languages and don’t know any physical borders."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" We currently maintain over 10 offices around the world. Check out our "]);
        echo "<a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "#offices\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Offices"]);
        echo "</a></p>

                </div>
            </div>
        </div>

    </div>
</section>
";
        // line 352
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/pricing-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 353
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 354
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/pricing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  677 => 354,  673 => 353,  669 => 352,  653 => 344,  649 => 343,  642 => 341,  638 => 340,  628 => 338,  624 => 337,  617 => 335,  613 => 334,  606 => 330,  602 => 329,  586 => 328,  582 => 327,  577 => 326,  573 => 325,  562 => 324,  558 => 323,  553 => 322,  549 => 321,  541 => 316,  537 => 315,  521 => 303,  517 => 302,  510 => 299,  506 => 298,  499 => 295,  495 => 294,  488 => 291,  484 => 290,  478 => 287,  474 => 286,  468 => 282,  464 => 272,  454 => 196,  451 => 194,  443 => 187,  441 => 186,  432 => 178,  428 => 176,  413 => 166,  409 => 165,  398 => 156,  395 => 150,  385 => 142,  381 => 141,  374 => 137,  370 => 136,  366 => 135,  362 => 134,  358 => 133,  353 => 131,  349 => 130,  345 => 129,  335 => 122,  331 => 121,  326 => 119,  322 => 118,  318 => 117,  314 => 116,  310 => 115,  306 => 114,  302 => 113,  297 => 111,  293 => 110,  289 => 109,  279 => 102,  275 => 101,  270 => 99,  266 => 98,  262 => 97,  258 => 96,  254 => 95,  250 => 94,  246 => 93,  241 => 91,  237 => 90,  233 => 89,  223 => 82,  219 => 81,  212 => 77,  208 => 76,  204 => 75,  200 => 74,  196 => 73,  191 => 71,  187 => 70,  183 => 69,  173 => 62,  169 => 61,  164 => 59,  160 => 58,  156 => 57,  152 => 56,  148 => 55,  144 => 54,  140 => 53,  135 => 51,  131 => 50,  127 => 49,  117 => 42,  113 => 41,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  79 => 31,  75 => 30,  71 => 29,  65 => 25,  57 => 18,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/pricing.htm", "");
    }
}
