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

/* /var/www/html/glueup/themes/glueup/pages/solutions/virtual-events-management-suite.htm */
class __TwigTemplate_72ac2fcc0e7cee512269f4715780ac1cf5ef180a56815f24ff1c97c2dcb7baee extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-online-events.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\"> ";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events Management Suite"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize and <span class=\"line\"><ins>Enhance </ins></span> Your Online Events"]);
        echo "</h1>
                       <h2 class=\"tagline\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Provide attendees with premium and seamless experience that gives them access to presentations, agenda, as well as ability to connect and chat with each other during live events."]);
        echo " </h2><br>
                       ";
        // line 14
        echo "                        ";
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("logos/logobar-events.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "
<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run Webinars Attendees Will Remember"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, promote, execute, and evaluate one or hundreds of engaging virtual events from start to finish."]);
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
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t         
                \t\t\t\t    </div>
                \t\t\t\t    <div id=\"tab2-bullet-img\">
                \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 43
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-anywhere.svg");
        echo "\" alt=\"chat\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 46
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members-1.svg");
        echo "\" alt=\"chat\">
                    \t\t\t    </div>
                    \t\t\t    ";
        // line 51
        echo "                \t\t\t     </div>
                \t\t\t</div>
                \t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
                \t\t\t\t<div class=\"services__accordion\">
                \t\t\t\t    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                                        <i class=\"icon-overview\"></i>
                                        <span>";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it all from one place"]);
        echo "</span>
                                        <div class=\"accordion__body firstshow \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ultimate virtual event management toolkit that has everything you need to run successful webinars. "]);
        echo "
                \t\t\t\t\t\t\t ";
        // line 60
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                        <i class=\"icon-mobile-check\"></i>
                                        <span>";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engage virtually"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make your online events stand out and offer premium networking options for your attendees. "]);
        echo "
                \t\t\t\t\t\t\t";
        // line 68
        echo "</p>
                \t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                        <i class=\"icon-button\"></i>
                                        <span>";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it super simple for everyone"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and all your attendees’ absolute comfort."]);
        echo "
                \t\t\t\t\t\t\t";
        // line 76
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
        // line 92
        echo "

";
        // line 95
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 99
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-event-templates.svg");
        echo "\" alt=\"Glue Up helps you create virtual event pages in few clicks\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Event Setup"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 104
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ready, Set, Stream. It’s That Easy"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 106
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create breath-taking event pages, send out event invitations and remind your attendees of your webinars effortlessly in a few simple steps."]);
        echo "<br>
    \t\t\t\t\t\t      </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-publishing\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Website Builder & Blueprints"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-optimize\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 117
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Partner Promotion"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-text-field\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Registration Forms"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-ticket\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 125
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Ticketing & Payments"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-translation-switch\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 129
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Multi-language Support"]);
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
        // line 142
        echo "
<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence\">";
        // line 147
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customers who started running their webinars on <span style=\"color:#0d62fe;\">Glue Up</span> are reporting <span class=\"line\"><ins>58%</ins></span> increase in revenue from online events."]);
        echo "</p>
                </div>
            </div>
        </div>
</section>
<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 156
        echo $this->extensions['System\Twig\Extension']->mediaFilter("community-features-1.svg");
        echo "\" alt=\"Glue Up Helps you spark discussions and turn webinars into experiences\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 160
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Attendee Experience"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 161
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Spark Discussions and Turn Webinars into Experiences"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 163
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it easy for everyone to find like-minded people and topics that matter to them so they can network with each other and exchange their opinions."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invisible\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 170
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Public & Private Groups"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-comment-box\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 174
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Unlimited Commenting"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-thumb-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 178
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Reactions"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-atsymbol\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 182
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["@Mentioning"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contacts\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 186
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["People Profiles"]);
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
        // line 200
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence\">";
        // line 204
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["On average, <span style=\"color:#0d62fe;\">Glue Up</span> customers see <span class=\"line\"><ins>2X</ins></span> increase in attendee registrations compared to their physical events."]);
        echo "</p>
                </div>
            </div>
        </div>
</section>
";
        // line 210
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 214
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-engage.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 218
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Engagement"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 219
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Help Business Happen at Your Online Events"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 221
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your attendees to create and share their own digital business cards, manage connections they make and effectively network with everyone no matter where they are."]);
        echo " 
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 228
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Media sharing"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 232
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1-on-1 Direct Chat"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 236
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Business Cards"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-crm\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stored in Individual CRM"]);
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
        // line 252
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 256
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-webinars.svg");
        echo "\" alt=\"Glue Up helps you own your webinars\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 260
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Admin Control"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 261
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Webinars, Your Branding"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 263
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["You are in charge of the looks and engagement."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Tweak event pages, create and manage different groups, allow and restrict access or offer greater functionalities to paying members of your community."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 270
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Branding Settings"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-filters\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 274
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Advanced Filters"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-hierarchy\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 278
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Roles & Permissions"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-lock\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 282
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Content Moderation"]);
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
        // line 339
        echo "<section class=\"section pb-0\">
        <div class=\"container\">
            ";
        // line 342
        echo "            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 345
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customers <span class=\"line\"><ins>stick</ins></span> with Glue Up"]);
        echo "</h2>
                             ";
        // line 347
        echo "                        </div>
                    </div>
            </div>
            <div class=\"row\">
            ";
        // line 351
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['category'] = "event-management"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-case-study.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 352
        echo "                   
            </div>
        </div>
</section>

";
        // line 358
        echo "
<section class=\"section bg-grey\">
        <div class=\"container\">
            <div class=\"services__accordion row flex-row-reverse\">
                <div class=\"col-md-6 align-self-center right h-100\">
    \t\t\t\t<div class=\"accordion__img desktop\">
    \t\t\t\t    <div id=\"tab1-sellpoint-img\" class=\"firstshow\">
    \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 365
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event-management.svg");
        echo "\" alt=\"Best-in-class event management with Glue Up\">
    \t\t\t\t    </div>
    \t\t\t        <div id=\"tab2-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 368
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab3-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 371
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-emails.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab4-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 374
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-finance.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab5-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 377
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab6-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 380
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-surveys.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab7-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 383
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-mobile.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
    \t\t\t     </div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-5 mr-auto float-left align-self-center\">
    \t\t\t    <div class=\"pt-1 pb-3 pt-md-5 pb-md-5 ml-xs-0 my-3\">
                                     <small>";
        // line 389
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What's included?"]);
        echo "</small>
                                     <h2 class=\"mt-3 mb-2 position-relative content-title\">";
        // line 390
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event <br> Management Suite"]);
        echo " </h2>
                                     <p class=\"tagline pt-2 \">";
        // line 391
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one solution that helps you save time and focus on your mission while keeping everybody on the same page."]);
        echo " </p>
                    </div>
    \t\t\t\t<div class=\"services__accordion row bullets hideme ml-xs-0 pb-5 mb-5 h-100\" style=\"padding-left:-16px;\">
                        <div class=\"accordion sellpoint active small col text-center pointer px-0 pl-1\" tab-name=\"tab1-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-events\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 396
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Event Management"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab2-sellpoint\">
                             <i class=\"sellpoint-item align-middle icon-crm\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 400
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab3-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-email-campaigns\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 404
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab4-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-payments\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 408
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab5-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-social-share\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 412
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab6-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-thumb-full\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 416
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</p>
                        </div>
                        ";
        // line 422
        echo "    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t
    \t\t</div>
            </div>
        </div>

</section>
";
        // line 431
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 436
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about Virtual Events and Glue Up"]);
        echo "</h2>
                             ";
        // line 438
        echo "                        </div>
                    </div>
            </div>
            ";
        // line 441
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['event'] = "virtual-events-webinars"        ;
        $context['__cms_partial_params']['wp1'] = "associations"        ;
        $context['__cms_partial_params']['wp2'] = "event"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 442
        echo "            </div>
        </div>

</section>
";
        // line 446
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/solutions/virtual-events-management-suite.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  689 => 446,  683 => 442,  676 => 441,  671 => 438,  667 => 436,  660 => 431,  650 => 422,  645 => 416,  638 => 412,  631 => 408,  624 => 404,  617 => 400,  610 => 396,  602 => 391,  598 => 390,  594 => 389,  585 => 383,  579 => 380,  573 => 377,  567 => 374,  561 => 371,  555 => 368,  549 => 365,  540 => 358,  533 => 352,  528 => 351,  522 => 347,  518 => 345,  513 => 342,  509 => 339,  492 => 282,  485 => 278,  478 => 274,  471 => 270,  460 => 263,  455 => 261,  451 => 260,  444 => 256,  438 => 252,  424 => 240,  417 => 236,  410 => 232,  403 => 228,  393 => 221,  388 => 219,  384 => 218,  377 => 214,  371 => 210,  363 => 204,  357 => 200,  341 => 186,  334 => 182,  327 => 178,  320 => 174,  313 => 170,  303 => 163,  298 => 161,  294 => 160,  287 => 156,  275 => 147,  268 => 142,  253 => 129,  246 => 125,  239 => 121,  232 => 117,  225 => 113,  215 => 106,  210 => 104,  206 => 103,  199 => 99,  193 => 95,  189 => 92,  172 => 76,  168 => 75,  163 => 73,  156 => 68,  152 => 67,  147 => 65,  140 => 60,  136 => 59,  131 => 57,  123 => 51,  118 => 46,  112 => 43,  105 => 39,  93 => 30,  89 => 29,  81 => 23,  77 => 21,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/solutions/virtual-events-management-suite.htm", "");
    }
}
