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

/* /var/www/html/glueup/themes/glueup/pages/platform/finance.htm */
class __TwigTemplate_37ee152f4d14e65d055c2b271cb642dd7c1f59ae787b6464997ea161b47f8698 extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-finance-feature.svg");
        echo "\" class=\"Glue Up helps you manage and automate your finance and invoicing tasks\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Finance & Payments"]);
        echo "</p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate All Your<br>Finance Processes and <span class=\"line\"><ins> Grow </ins></span> Revenue "]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage invoices, deliver receipts, grow revenue, and accept payments in multiple currencies with credit cards, bank transfers, or other online payments."]);
        echo " </p>
                       ";
        // line 14
        echo "                       ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/hero-email-cta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
                </div>
            </div>
        </div> 
</header>
";
        // line 21
        echo "
<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-7 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A Complete Finance Toolkit"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline the entire transaction experience for your organization and for every member of your community. "]);
        echo " </p>
                        </div>
                    </div>
            </div>
\t            <div class=\"col-lg-10 align-self-center mx-auto\">
\t\t\t\t\t    <div class=\"services__accordion row flex-row-reverse\">
\t\t\t\t\t            <div class=\"col-md-7 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion__img desktop\">
\t\t\t\t\t\t\t\t\t    <div id=\"tab1-bullet-img\" class=\"firstshow\">
\t\t\t\t\t\t\t\t\t        <img class=\"feature-window desktop\" src=\"";
        // line 37
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-automate.svg");
        echo "\" alt=\"Glue Up helps you automate\">
\t\t\t\t\t\t\t\t\t         
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t    <div id=\"tab2-bullet-img\">
\t\t\t\t\t\t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 41
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-top-financials.svg");
        echo "\" alt=\"Glue Up helps you stay on top of your financials\">
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t        <div id=\"tab3-bullet-img\">
\t\t\t\t\t    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 44
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members.svg");
        echo "\" alt=\"Glue Up is easy for everyone\">
\t\t\t\t\t    \t\t\t    </div>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t\t\t<div class=\"services__accordion\">
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t                    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
\t\t\t\t\t                        <i class=\"icon-power-switch\"></i>
\t\t\t\t\t                        <span>";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate manual tasks"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body firstshow\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Simplify all payment processes from beginning to end without compromising on security. "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 56
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
\t\t\t\t\t                        <i class=\"icon-analytics\"></i>
\t\t\t\t\t                        <span>";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stay on top of your financials"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With the mobile app, you can access P&L and other financial reports from anywhere. "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 64
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
\t\t\t\t\t                        <i class=\"icon-button\"></i>
\t\t\t\t\t                        <span>";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it simple for everyone"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and all your audiences’s absolute comfort."]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 72
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
            </div>
        </div>

</section>
";
        // line 85
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 89
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-currencies.svg");
        echo "\" alt=\"Glue Up helps you collect revenue in multiple currencies\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 93
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collect Money"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Drive Revenue in Multiple Currencies"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Meet the needs of your community by accepting payments in 100+ currencies, including:"]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" US Dollar, Chinese RMB, Hong Kong Dollar, Euro, Taiwan Dollar, Singapore Dollar, Malaysian Ringgit,"]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" British Pound, South Korean Won, Japanese Yen, Indonesian Rupiah, Indian Rupee, Russian Ruble, and other currencies."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-translation-switch\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Multi-currency Support"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-home\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 107
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Local Payment Methods"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["In-person Payments"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-speaker\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 115
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Dispute Handling"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                  </div>
                </div>
                
            </div>

        </div>
</section>
";
        // line 128
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 132
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-payment-methods.svg");
        echo "\" alt=\"Glue Up helps you drive revenue with secure and smooth payments in any method\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 136
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Security "]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 137
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable Secure & Smooth Payments"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 139
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Facilitate easy, secure payments with online digital payment gateways, credit cards, and bank transfers over encrypted SSL connections."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Credit card numbers and other electronic financial data are not stored in any form."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-key\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 146
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Roles & Permissions"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-lock\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SSL Protected"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-checked-in\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 154
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["GDPR Compliant"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-credits\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 158
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PCI DSS Certified"]);
        echo "</p>
                                    </div>
                                    
                                </div>
                            </div>
                  </div>
                </div>
                
            </div>

        </div>

</section>
";
        // line 172
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 176
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-automatic-invoices.svg");
        echo "\" alt=\"Glue Up helps you automate your finance processes\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 180
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Financial Journey"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 181
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage Your Finances Effortlessly "]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 183
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate your complete financial journey from online payments through ticketing and invoice generation all the way until your taxes are due."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invoice\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 190
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatic Invoicing"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 194
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Reminders & Notifications"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-edit-update\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 198
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Tax Setup"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-ticket\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 202
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Coupons & Discounts"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                  </div>
                </div>
                
            </div>

        </div>
</section>
";
        // line 214
        echo "
";
        // line 216
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 220
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-reports.svg");
        echo "\" alt=\"Glue Up helps you centralize and track all payments\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 224
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Analytics & Reports"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 225
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Centralize and Track All Payments"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 227
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Keep your payment processing centralized in one place. Stay up to date on all your online and offline revenue streams with automated tracking, analytics, and reports."]);
        echo "<br>
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 234
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["P&L Reports"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 238
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Real-time Analytics"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-dash-2\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 242
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Dashboards"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-download\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 246
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy Export"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                  </div>
                </div>
                
            </div>

        </div>
</section>
";
        // line 343
        echo "<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-md-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                            <span class=\"h6 text-color text-center mx-auto hideme\">";
        // line 348
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Advanced Integrations"]);
        echo "</span>
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 349
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Maximize Your Financial Workflows"]);
        echo "</h2>
                             <p class=\"tagline\"> ";
        // line 350
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Save time and eliminate manual tasks by connecting Glue Up to your favorite accounting software."]);
        echo " </p>
                        </div>
                    </div>
            </div>
            ";
        // line 355
        echo "                <div class=\"row\">
                        <div class=\"col-md-2 py-3\">
                        </div>
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4\">
                                <i class=\"align-middle icon-overview pt-5\"></i>
                                <h5 class=\"card-title mt-3\">";
        // line 362
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["QuickBooks"]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 363
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get a full accounting experience by combining the best of Glue Up’s all-in-one engagement management software with easy plug&play QuickBooks integration that can be set up in a few clicks."]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 hideme shadow-sm\">
                              <div class=\"card-body pt-4\">
                                <i class=\"align-middle icon-mobile-check pt-5\"></i>
                                <h5 class=\"card-title mt-3\">";
        // line 371
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Xero "]);
        echo "</h5>
                                <p class=\"card-text mb-5\">";
        // line 372
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Synchronize and update your invoices from both apps, collect tickets and memberships as line-items and manage both finance systems effortlessly. "]);
        echo "</p>
                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-2 py-3\">
                        </div>
                ";
        // line 379
        echo "            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 text-center mx-auto mt-1\">
                    <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#contact-paygage\">See it in Action</a>
                </div>
            </div>
        </div>

</section>
";
        // line 389
        echo "
";
        // line 390
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 391
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/finance.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 391,  529 => 390,  526 => 389,  515 => 379,  506 => 372,  502 => 371,  491 => 363,  487 => 362,  478 => 355,  471 => 350,  467 => 349,  463 => 348,  456 => 343,  442 => 246,  435 => 242,  428 => 238,  421 => 234,  411 => 227,  406 => 225,  402 => 224,  395 => 220,  389 => 216,  386 => 214,  372 => 202,  365 => 198,  358 => 194,  351 => 190,  341 => 183,  336 => 181,  332 => 180,  325 => 176,  319 => 172,  303 => 158,  296 => 154,  289 => 150,  282 => 146,  271 => 139,  266 => 137,  262 => 136,  255 => 132,  249 => 128,  235 => 115,  228 => 111,  221 => 107,  214 => 103,  202 => 96,  197 => 94,  193 => 93,  186 => 89,  180 => 85,  166 => 72,  162 => 71,  157 => 69,  150 => 64,  146 => 63,  141 => 61,  134 => 56,  130 => 55,  125 => 53,  113 => 44,  107 => 41,  100 => 37,  88 => 28,  84 => 27,  76 => 21,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/finance.htm", "");
    }
}
