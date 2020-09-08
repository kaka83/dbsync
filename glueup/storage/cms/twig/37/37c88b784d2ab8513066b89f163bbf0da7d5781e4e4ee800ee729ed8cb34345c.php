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

/* /var/www/html/glueup/themes/glueup/pages/platform/membership-management.htm */
class __TwigTemplate_2885badfcc8757cf3fe476247da6b48b6c82af161a36108764ee05362a79a31e extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership-management-feature.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
               <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Don’t just manage<br> your members. <br><span class=\"line\"><ins> Engage</ins></span> them."]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Increase productivity and simplify your operations with the software that helps you build, manage, and engage your community and provides you deep insights on every member of your community."]);
        echo " </p><br>
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
<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-7 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get to truly know every member of your community"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The only membership software which helps you with both keeping your members happy and with generating new revenue streams.  "]);
        echo " </p>
                        </div>
                    </div>
            </div>
            \t<div class=\"col-lg-10 align-self-center mx-auto\">
\t\t\t\t\t    <div class=\"services__accordion row flex-row-reverse\">
\t\t\t\t\t            <div class=\"col-md-7 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion__img desktop\">
\t\t\t\t\t\t\t\t\t    <div id=\"tab1-bullet-img\" class=\"firstshow\">
\t\t\t\t\t\t\t\t\t        <img class=\"feature-window desktop\" src=\"";
        // line 35
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members.svg");
        echo "\" alt=\"chat\">
\t\t\t\t\t\t\t\t\t         
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t    <div id=\"tab2-bullet-img\">
\t\t\t\t\t\t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-engage-members.svg");
        echo "\" alt=\"chat\">
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t        <div id=\"tab3-bullet-img\">
\t\t\t\t\t    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-anywhere-members.svg");
        echo "\" alt=\"chat\">
\t\t\t\t\t    \t\t\t    </div>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t\t\t<div class=\"services__accordion\">
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t                    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
\t\t\t\t\t                        <i class=\"icon-button\"></i>
\t\t\t\t\t                        <span>";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make It Easy For Everyone"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body firstshow\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and all your members’ absolute comfort."]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
\t\t\t\t\t                        <i class=\"icon-engagement\"></i>
\t\t\t\t\t                        <span>";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engage Your Members"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Gain instant visibility into engagement and performance with interactive dashboards and profiles. "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 62
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
\t\t\t\t\t                        <i class=\"icon-mobile-check\"></i>
\t\t\t\t\t                        <span>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stay Engaged, Anywhere"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["You and your members are doing more and more work from mobile, so software comes with two mobile apps - one for you and one for your members. "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 70
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
        // line 83
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 87
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-renewals.svg");
        echo "\" alt=\"Glue Up helps you with membership renewals\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Workflows"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate Manual Processes"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate your membership management processes from new applications, through events, to renewals to maximize retention and to pamper your members with a premium experience they deserve."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-time-unsure\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatic Reminders"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-payments\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Recurring payments"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-edit-update\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Applications"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-transfer-primary-member\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Workflows"]);
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
        // line 126
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 130
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-directory.svg");
        echo "\" alt=\"Glue Up helps you bring your member directory online\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Directory"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable Your Community To Thrive"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 137
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digitize your membership directory and provide your community with instant access to member profiles and information. All members can search the directory via the web platform or mobile apps."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-sponsor\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 144
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium Listings"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-tag\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 148
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tags  & Filters"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-key\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 152
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Roles & permissions"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-upload\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 156
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy Import/Export"]);
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
        // line 169
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 173
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-member-crm.svg");
        echo "\" alt=\"Glue Up helps you manager members with smart lists\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 177
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Lists & Advanced Search"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 178
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Personalize Your Communication"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 180
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Keep all member information up-to-date, secure, and centralized in one place automatically. Easily search and save member information into lists so you can utilize the data across the platform."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-switch\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 187
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatically Segmented Lists"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-magnifying-glass\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 191
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy Search"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-smart-list\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Smart Lists"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-tags\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 199
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement History"]);
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
        // line 211
        echo "
";
        // line 213
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 217
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-application.svg");
        echo "\" alt=\"Glue Up helps you with online member applications and membership types\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 221
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Application"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 222
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Recruit New Members Effortlessly"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 224
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Provide custom online application forms and several membership types with custom pricing and discounts to easily bring prospective members in the door."]);
        echo "<br>
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-edit-update\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Application Forms"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-hierarchy\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 235
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Unlimited Membership Types"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-coupon\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 239
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Discounts & Coupons"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invoice\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 243
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automated Invoices & Receipts"]);
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
        // line 255
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 259
        echo $this->extensions['System\Twig\Extension']->mediaFilter("crm-features-5.svg");
        echo "\" alt=\"Glue Up helps you manage your members and your memberships\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 263
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Smart Lists & Advanced Search"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 264
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Personalize Your Approach"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 266
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easily search and save contacts into different lists so you can personalize your marketing activities and stay targeted."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Activate your data to unify your client communications strategy and stay in touch with everyone critical to your organization’s growth."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-smart-list\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 273
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["List segmentation"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-tag\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 277
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tags and filters"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-upload\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 281
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy import/export"]);
        echo "</p>
                                    </div> 
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-hierarchy\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 285
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Committee Management"]);
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
        // line 297
        echo "
";
        // line 298
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 299
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/membership-management.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 299,  520 => 298,  517 => 297,  503 => 285,  496 => 281,  489 => 277,  482 => 273,  471 => 266,  466 => 264,  462 => 263,  455 => 259,  449 => 255,  435 => 243,  428 => 239,  421 => 235,  414 => 231,  404 => 224,  399 => 222,  395 => 221,  388 => 217,  382 => 213,  379 => 211,  365 => 199,  358 => 195,  351 => 191,  344 => 187,  334 => 180,  329 => 178,  325 => 177,  318 => 173,  312 => 169,  297 => 156,  290 => 152,  283 => 148,  276 => 144,  266 => 137,  261 => 135,  257 => 134,  250 => 130,  244 => 126,  230 => 113,  223 => 109,  216 => 105,  209 => 101,  199 => 94,  194 => 92,  190 => 91,  183 => 87,  177 => 83,  163 => 70,  159 => 69,  154 => 67,  147 => 62,  143 => 61,  138 => 59,  131 => 54,  127 => 53,  122 => 51,  110 => 42,  104 => 39,  97 => 35,  85 => 26,  81 => 25,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/membership-management.htm", "");
    }
}
