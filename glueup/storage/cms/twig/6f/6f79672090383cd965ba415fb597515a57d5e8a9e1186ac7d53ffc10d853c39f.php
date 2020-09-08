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

/* /var/www/html/glueup/themes/glueup/pages/solutions/training-management-suite.htm */
class __TwigTemplate_2f13a248ced09ecbf0fff88ddd1c707e83686138de6691f5f70f5fc499e7782b extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-learning.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\"> ";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training Management Suite"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline Training Operations <span class=\"line\"><ins>All-in-One</ins></span>"]);
        echo "</h1>
                       <h2 class=\"tagline\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build, market, sell, and analyze courses and events of any kind with ease."]);
        echo " </h2><br>
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("logos/logobar-trainings.htm"        , $context['__cms_partial_params']        , true        );
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Scale Up Your Training Management"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate repetitive tasks so you can get back to growing your courses and engaging your attendees."]);
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
        echo "\" alt=\"Glue Up is all-in-one\">
                \t\t\t\t         
                \t\t\t\t    </div>
                \t\t\t\t    <div id=\"tab2-bullet-img\">
                \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-anywhere.svg");
        echo "\" alt=\"Glue Up is mobile\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 45
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members-1.svg");
        echo "\" alt=\"Glue Up is easy\">
                    \t\t\t    </div>
                    \t\t\t    ";
        // line 50
        echo "                \t\t\t     </div>
                \t\t\t</div>
                \t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"services__accordion\">
                \t\t\t\t    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                                        <i class=\"icon-overview\"></i>
                                        <span>";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it all from one place"]);
        echo "</span>
                                        <div class=\"accordion__body firstshow \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one training software that helps you plan, create, manage, and evaluate every course you run."]);
        echo "
                \t\t\t\t\t\t\t ";
        // line 59
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                        <i class=\"icon-mobile-check\"></i>
                                        <span>";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reach people where they are"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 66
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["One app for you to manage your operations, and one app for your community to stay connected anywhere."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 67
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                        <i class=\"icon-button\"></i>
                                        <span>";
        // line 72
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it simple for everyone"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and your community’s absolute comfort."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 75
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
        // line 91
        echo "

";
        // line 94
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 98
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-event-templates.svg");
        echo "\" alt=\"Glue Up helps you create and promote courses\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 102
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Programming"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run One or Hundred Courses from A to Z"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create beautiful event pages optimized for maximum conversion that match your branding."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Set up VIP and other tickets, offer Coupons or Member Pricing, choose supported payment options."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Customize the registration form to collect all the information you need in the Glue Up CRM. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-website-dev\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Pages"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-applications-reg\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 116
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Registration Forms"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-ticket\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 120
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Ticketing & Payments"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 124
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
        // line 137
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 141
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-webinars.svg");
        echo "\" alt=\"Glue Up helps you monetize webinar courses\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 145
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Events"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 146
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize & Enhance Your Webinars"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 148
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run webinars and other online courses and provide your attendees with a premium and seamless experience."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Give them access to presentations, agenda, as well as ability to connect and chat with other attendees. "]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-sponsor\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 155
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sponsor Promotion"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 159
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Attendee Chat"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-documents\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 163
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Webinar Documents"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 167
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
";
        // line 181
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence\">";
        // line 185
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create courses <span class=\"line\"><ins>80%</ins></span> faster with <span style=\"color:#0d62fe;\">Glue Up</span>."]);
        echo "</p>
                </div>
            </div>
        </div>
</section>
";
        // line 191
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 195
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-certificate-1.svg");
        echo "\" alt=\"Glue Up helps you create and automate certificates\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 199
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Certification "]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 200
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage Certificates Worry-Free "]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 202
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Design and issue great-looking certificates for attendees that meet the criteria and automate their distribution with easy to use editor."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-button\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Drag & Drop Certificate Editor"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-payments\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 213
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Recurring payments"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 217
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatic Reminders"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-credits\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 221
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CPD/CPE Credits Tracking"]);
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
        // line 233
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 237
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-sellout.svg");
        echo "\" alt=\"Glue Up helps you sell out your courses with promotional tools\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 241
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Marketing"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 242
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sell Out Your Courses"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 244
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline your email marketing and increase sales with sophisticated marketing tools that help you get more registrations and increase brand awareness. "]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-campaigns\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 251
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Branded Email Campaigns"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 255
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automated Notifications"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-thumb-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 259
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-filter\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 263
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
        // line 279
        echo "            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 282
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customers <span class=\"line\"><ins>stick</ins></span> with Glue Up"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 283
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["From professional associations and non-profits to large training companies with multiple offices."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Our clients in 50+ countries around the world love scaling up their courses and engaging their audiences with Glue Up."]);
        echo " </p>
                        </div>
                    </div>
            </div>
            <div class=\"row\">
            ";
        // line 288
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['category'] = "associations"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-case-study.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 289
        echo "                   
            </div>
        </div>
</section>

";
        // line 295
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 299
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-manager-experience.svg");
        echo "\" alt=\"Glue Up helps you manage your events on the go\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 303
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 304
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage Your Events on the Go"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 306
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Oversee operations from anywhere."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Manage registrations, collect payments, engage with attendees and facilitate smooth check-ins to carry out successful courses and online events."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-prev\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 313
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Available on all devices"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invisible\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 317
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom privacy settings"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-qr-code\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 321
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Built-in Ticket Scanner"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-mobile-check\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 325
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
        // line 338
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 342
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-performance.svg");
        echo "\" alt=\"Glue Up helps you understand the way your audience interacts with your content\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 346
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Analytics"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 347
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Understand Engagement and Take Action"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 349
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make smarter decisions with real-time data from events, email marketing and finance."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 356
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Information"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-reset-time\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 360
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement History"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 364
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Status and Renewals"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-opportunity\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 368
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Opportunities Management"]);
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
        // line 388
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-certificate-1.svg");
        echo "\" alt=\"Glue Up helps you manage training sessions with CPD/CPE Credits\">
    \t\t\t\t    </div>
    \t\t\t\t     <div id=\"tab1-sellpoint-img\">
    \t\t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 391
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event-management.svg");
        echo "\" alt=\"Glue Up helps you create and manage online and offline events\">
    \t\t\t\t    </div>
    \t\t\t        <div id=\"tab2-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 394
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm.svg");
        echo "\" alt=\"Glue Up helps you centralize all your data in a CRM\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab3-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 397
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-emails.svg");
        echo "\" alt=\"Glue Up helps you deliver email campaigns to promote your content\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab4-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 400
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-finance.svg");
        echo "\" alt=\"Glue Up helps you automate invoices and analyze finance reports\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab5-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 403
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community.svg");
        echo "\" alt=\"Glue Up helps you engage with your community\">
        \t\t\t    </div>
        \t\t\t    ";
        // line 408
        echo "        \t\t\t    <div id=\"tab7-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 409
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-mobile.svg");
        echo "\" alt=\"Glue Up helps you \">
        \t\t\t    </div>
    \t\t\t     </div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-5 mr-auto float-left align-self-center\">
    \t\t\t    <div class=\"pt-1 pb-3 pt-md-5 pb-md-5 ml-xs-0 my-3\">
                                     <small>";
        // line 415
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What's included?"]);
        echo "</small>
                                     <h2 class=\"mt-3 mb-2 position-relative content-title\">";
        // line 416
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training <br> Management Suite"]);
        echo " </h2>
                                     <p class=\"tagline pt-2 \">";
        // line 417
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one solution that helps you save time and focus on your mission while keeping everybody on the same page."]);
        echo " </p>
                    </div>
    \t\t\t\t<div class=\"services__accordion row bullets hideme ml-xs-0 pb-5 mb-5 h-100\" style=\"padding-left:-16px;\">
                        <div class=\"accordion sellpoint active small col text-center pointer px-0 pl-1\" tab-name=\"tab0-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-credits\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 422
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CPE/CPD Credits"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab1-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-events\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 426
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab2-sellpoint\">
                             <i class=\"sellpoint-item align-middle icon-crm\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 430
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab3-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-email-campaigns\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 434
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab4-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-payments\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 438
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab5-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-social-share\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 442
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab7-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-mobile-check\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 446
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
        // line 457
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 462
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about Training Management and Glue Up"]);
        echo "</h2>
                             ";
        // line 464
        echo "                        </div>
                    </div>
            </div>
            ";
        // line 467
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['event'] = "professional-training-learning"        ;
        $context['__cms_partial_params']['wp1'] = "associations"        ;
        $context['__cms_partial_params']['wp2'] = "event"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 468
        echo "            </div>
        </div>

</section>
";
        // line 472
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/solutions/training-management-suite.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 472,  800 => 468,  793 => 467,  788 => 464,  784 => 462,  777 => 457,  764 => 446,  757 => 442,  750 => 438,  743 => 434,  736 => 430,  729 => 426,  722 => 422,  714 => 417,  710 => 416,  706 => 415,  697 => 409,  694 => 408,  689 => 403,  683 => 400,  677 => 397,  671 => 394,  665 => 391,  659 => 388,  636 => 368,  629 => 364,  622 => 360,  615 => 356,  605 => 349,  600 => 347,  596 => 346,  589 => 342,  583 => 338,  568 => 325,  561 => 321,  554 => 317,  547 => 313,  536 => 306,  531 => 304,  527 => 303,  520 => 299,  514 => 295,  507 => 289,  502 => 288,  493 => 283,  489 => 282,  484 => 279,  466 => 263,  459 => 259,  452 => 255,  445 => 251,  435 => 244,  430 => 242,  426 => 241,  419 => 237,  413 => 233,  399 => 221,  392 => 217,  385 => 213,  378 => 209,  368 => 202,  363 => 200,  359 => 199,  352 => 195,  346 => 191,  338 => 185,  332 => 181,  316 => 167,  309 => 163,  302 => 159,  295 => 155,  284 => 148,  279 => 146,  275 => 145,  268 => 141,  262 => 137,  247 => 124,  240 => 120,  233 => 116,  226 => 112,  214 => 105,  209 => 103,  205 => 102,  198 => 98,  192 => 94,  188 => 91,  171 => 75,  167 => 74,  162 => 72,  155 => 67,  151 => 66,  146 => 64,  139 => 59,  135 => 58,  130 => 56,  122 => 50,  117 => 45,  111 => 42,  104 => 38,  92 => 29,  88 => 28,  80 => 22,  76 => 20,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/solutions/training-management-suite.htm", "");
    }
}
