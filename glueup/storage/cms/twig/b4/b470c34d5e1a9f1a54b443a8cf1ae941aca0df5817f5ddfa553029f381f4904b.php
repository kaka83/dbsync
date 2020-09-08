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

/* /var/www/html/glueup/themes/glueup/pages/solutions/membership-management-suite.htm */
class __TwigTemplate_c951b59695906732a4593ebe22a2ced719e59068653b0242157386a4c17bf671 extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership.svg");
        echo "\" class=\"paygage-visual\" alt=\"Glue Up helps you manage your memberships more efficiently\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management Suite"]);
        echo "</p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retain and <span class=\"line\"><ins>Grow</ins></span> Your Member Community"]);
        echo "</h1>
                       <h2 class=\"tagline\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate your membership management processes, maximize retention, and pamper your members with a premium experience they deserve."]);
        echo " </h2>
                       ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/hero-email-cta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
                </div>
                
            </div>
        </div> 
</header>
";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("logos/logobar-membership.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "
<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate Operations,<br> Increase Engagement"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Give your members a digital place where they can connect with you and your mission 365 days a year even when meeting face to face isn’t possible."]);
        echo " </p>
                        </div>
                    </div>
            </div>
                <div class=\"col-lg-10 align-self-center mx-auto\">
                    <div class=\"services__accordion row flex-row-reverse\">
                            <div class=\"col-md-7 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"accordion__img desktop\">
                \t\t\t\t    <div id=\"tab1-bullet-img\" class=\"firstshow\">
                \t\t\t\t        <img class=\"feature-window desktop\" src=\"";
        // line 38
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" alt=\"Glue Up helps you increase your engagement with its all-in-one platform\">
                \t\t\t\t         
                \t\t\t\t    </div>
                \t\t\t\t    <div id=\"tab2-bullet-img\">
                \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-anywhere.svg");
        echo "\" alt=\"Glue Up helps you reach your members wherever they are.\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 45
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members-1.svg");
        echo "\" alt=\"Glue Up makes it easy to use for any member of your organization\">
                    \t\t\t    </div>
                \t\t\t     </div>
                \t\t\t</div>
                \t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"services__accordion\">
                \t\t\t\t    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                                        <i class=\"icon-overview\"></i>
                                        <span>";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it all from one place"]);
        echo "</span>
                                        <div class=\"accordion__body firstshow \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one software that helps you build, manage, engage, and understand every member of your community."]);
        echo "
                \t\t\t\t\t\t\t ";
        // line 56
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                        <i class=\"icon-mobile-check\"></i>
                                        <span>";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reach members where they are"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["One app for you to manage your operations from anywhere, and one app for your members to stay connected."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 64
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                        <i class=\"icon-button\"></i>
                                        <span>";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it simple for everyone"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and your community’s absolute comfort."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 72
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    
                                    </div>
                \t\t\t\t</div>
                \t\t\t</div>
                \t\t\t
                \t\t</div>
                </div>
            </div>
        </div>

</section>

";
        // line 88
        echo "

";
        // line 91
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 95
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-member-application.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["New Members"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 100
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Gain New Members Effortlessly"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 102
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Provide custom online application forms and several membership types to easily bring prospective members in the door. "]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Information is automatically synchronized across the platform from the very start of the application process."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-registrations\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Member Applications"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-applications-reg\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Lists & Advanced Search"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-primary-member\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 117
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Unlimited Membership Types"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-hierarchy\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 121
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
        // line 134
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 138
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-renewals.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 142
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retention "]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 143
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage Renewals Automatically"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 145
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Drive revenue with membership renewal workflows designed to maximize your productivity and retention."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Quickly find outstanding payments and send renewal reminders with automated emails and push notifications."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-task-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 152
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Renewal Workflows"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 156
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Recurring Payments"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-alert\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 160
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatic Reminders"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-directory\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 164
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Directory"]);
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
        // line 178
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence mx-auto\">";
        // line 182
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With <span style=\"color:#0d62fe;\">Glue Up</span> members stick around.<br>Average retention rate of our clients is <span class=\"line\"><ins>82%</ins></span>."]);
        echo "</p>
                </div>
            </div>
        </div>
</section>
";
        // line 188
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 192
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-event-templates.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 196
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Programming"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 197
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run One Or Hundred Events From A To Z"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 199
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easily create beautiful event pages optimized for maximum conversion that match your branding."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Set up VIP and other tickets, offer Coupons or Member Pricing, choose supported payment options, and customize the registration form to collect all the information you need in the Glue Up CRM."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-settings\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 206
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Pages"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-text-field\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 210
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Registration Forms"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-ticket\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 214
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Ticketing & Payments"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 218
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium Branding Options"]);
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
        // line 230
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 234
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-email-standout.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 238
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Marketing"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 239
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Send Email Campaigns in A Few Clicks"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 241
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline your email marketing and send newsletters, branded event invitations and other emails in few clicks or create your own campaigns using easy drag&drop or HTML editor."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-campaigns\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 248
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Branded Email Campaigns"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 252
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automated Notifications"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-thumb-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 256
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 260
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Social Media Integrations"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-switch\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 264
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatically Segmented Lists"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            
                  </div>
                </div>
                
            </div>

        </div>

</section>
<section class=\"section pb-0\">
        <div class=\"container\">
            ";
        // line 280
        echo "            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 283
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customers <span class=\"line\"><ins>stick</ins></span> with Glue Up"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 284
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["From small associations and non-profits to large Chambers of Commerce with dozens of chapters, our clients in 50+ countries around the world love engaging their members all-in-one with Glue Up."]);
        echo " </p>
                        </div>
                    </div>
            </div>
            <div class=\"row\">
            ";
        // line 289
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['category'] = "associations"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-case-study.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 290
        echo "                   
            </div>
        </div>
</section>

";
        // line 296
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 300
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-manager-engagement.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 304
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 305
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage Your Community From Anywhere"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 307
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Oversee operations from anywhere. Manage registrations, collect payments, engage with members and facilitate smooth check-ins onsite to carry out successful events."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-prev\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 314
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Available on all devices"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invisible\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 318
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom privacy settings"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-qr-code\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 322
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Built-in Ticket Scanner"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 326
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement Analytics"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-mobile-check\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 330
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Free Manager Up App"]);
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
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 347
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-engage.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 351
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 352
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable Your Community To Thrive"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 354
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it your business to enable every member in your community to develop lasting relationships"]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" with you and each other via 1-on-1 chats with option to share business cards and premium networking features."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-filters\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 361
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Private & Public Groups"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 365
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Media sharing"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 369
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1-on-1 Direct Chat"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 373
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Business Cards"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-mobile-apps\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 377
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Free Member App "]);
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
        // line 392
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 396
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-member-crm.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 400
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Analytics"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 401
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Understand Engagement With Your Members"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 403
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get immediate insights into your members’ activities from events, email marketing, finance and more in the real time and use what you learn to make smarter decisions."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 410
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Information"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-reset-time\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 414
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement History"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-primary-member\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 418
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Status and Renewals"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-opportunity\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 422
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Opportunities Management"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-filter\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 426
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Deal Stages"]);
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
        // line 439
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 443
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-webinars.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 447
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Events"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 448
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize & Enhance Your Webinars"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 450
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run webinars and other online events from all-in-one platform."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Provide your attendees with premium and seamless experience that gives them access to presentations, agenda, as well as ability to connect and chat with other attendees. "]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 457
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium Branding Options"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-sponsor\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 461
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sponsor Promotion"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 465
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Attendee Chat"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-documents\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 469
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Webinar Documents"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 473
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Business Cards"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            
                  </div>
                </div>
                
            </div>

        </div>

</section>

<section class=\"section bg-grey\">
        <div class=\"container\">
            <div class=\"services__accordion row flex-row-reverse\">
                <div class=\"col-md-6 align-self-center right h-100\">
    \t\t\t\t<div class=\"accordion__img desktop\">
    \t\t\t\t    <div id=\"tab0-sellpoint-img\" class=\"firstshow\">
    \t\t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 493
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership-management.svg");
        echo "\" alt=\"Best-in-class event management with Glue Up\">
    \t\t\t\t    </div>
    \t\t\t\t     <div id=\"tab1-sellpoint-img\">
    \t\t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 496
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event-management.svg");
        echo "\" alt=\"Best-in-class event management with Glue Up\">
    \t\t\t\t    </div>
    \t\t\t        <div id=\"tab2-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 499
        echo $this->extensions['System\Twig\Extension']->mediaFilter("crm-features-4.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab3-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 502
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-emails.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab4-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 505
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-finance.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab5-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 508
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab6-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 511
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-surveys.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab7-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 514
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-mobile.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
    \t\t\t     </div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-5 mr-auto float-left align-self-center\">
    \t\t\t    <div class=\"pt-1 pb-3 pt-md-5 pb-md-5 ml-xs-0 my-3\">
                                     <small>";
        // line 520
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What's included?"]);
        echo "</small>
                                     <h2 class=\"mt-3 mb-2 position-relative content-title\">";
        // line 521
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership <br> Management Suite"]);
        echo " </h2>
                                     <p class=\"tagline pt-2 \">";
        // line 522
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one solution that helps you save time and focus on your mission while keeping everybody on the same page."]);
        echo " </p>
                    </div>
    \t\t\t\t<div class=\"services__accordion row bullets hideme ml-xs-0 pb-5 mb-5 h-100\" style=\"padding-left:-16px;\">
                        <div class=\"accordion sellpoint active small col text-center pointer px-0 pl-1\" tab-name=\"tab0-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-memberships\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 527
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab1-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-events\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 531
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab2-sellpoint\">
                             <i class=\"sellpoint-item align-middle icon-crm\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 535
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab3-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-email-campaigns\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 539
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab4-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-payments\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 543
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab5-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-social-share\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 547
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab7-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-mobile-check\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 551
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</p>
                        </div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t
    \t\t</div>
            </div>
        </div>

</section>
";
        // line 562
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 567
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about membership management and Glue Up"]);
        echo "</h2>
                             ";
        // line 569
        echo "                        </div>
                    </div>
            </div>
            ";
        // line 572
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['event'] = "associations"        ;
        $context['__cms_partial_params']['wp1'] = "associations"        ;
        $context['__cms_partial_params']['wp2'] = "event"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 573
        echo "            </div>
        </div>

</section>
";
        // line 577
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/solutions/membership-management-suite.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  981 => 577,  975 => 573,  968 => 572,  963 => 569,  959 => 567,  952 => 562,  939 => 551,  932 => 547,  925 => 543,  918 => 539,  911 => 535,  904 => 531,  897 => 527,  889 => 522,  885 => 521,  881 => 520,  872 => 514,  866 => 511,  860 => 508,  854 => 505,  848 => 502,  842 => 499,  836 => 496,  830 => 493,  807 => 473,  800 => 469,  793 => 465,  786 => 461,  779 => 457,  768 => 450,  763 => 448,  759 => 447,  752 => 443,  746 => 439,  731 => 426,  724 => 422,  717 => 418,  710 => 414,  703 => 410,  693 => 403,  688 => 401,  684 => 400,  677 => 396,  671 => 392,  654 => 377,  647 => 373,  640 => 369,  633 => 365,  626 => 361,  615 => 354,  610 => 352,  606 => 351,  599 => 347,  593 => 343,  578 => 330,  571 => 326,  564 => 322,  557 => 318,  550 => 314,  540 => 307,  535 => 305,  531 => 304,  524 => 300,  518 => 296,  511 => 290,  506 => 289,  498 => 284,  494 => 283,  489 => 280,  471 => 264,  464 => 260,  457 => 256,  450 => 252,  443 => 248,  433 => 241,  428 => 239,  424 => 238,  417 => 234,  411 => 230,  397 => 218,  390 => 214,  383 => 210,  376 => 206,  365 => 199,  360 => 197,  356 => 196,  349 => 192,  343 => 188,  335 => 182,  329 => 178,  313 => 164,  306 => 160,  299 => 156,  292 => 152,  281 => 145,  276 => 143,  272 => 142,  265 => 138,  259 => 134,  244 => 121,  237 => 117,  230 => 113,  223 => 109,  212 => 102,  207 => 100,  203 => 99,  196 => 95,  190 => 91,  186 => 88,  169 => 72,  165 => 71,  160 => 69,  153 => 64,  149 => 63,  144 => 61,  137 => 56,  133 => 55,  128 => 53,  117 => 45,  111 => 42,  104 => 38,  92 => 29,  88 => 28,  80 => 22,  76 => 20,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/solutions/membership-management-suite.htm", "");
    }
}
