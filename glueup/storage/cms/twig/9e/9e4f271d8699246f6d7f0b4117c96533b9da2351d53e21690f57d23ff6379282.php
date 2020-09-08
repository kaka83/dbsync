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

/* /var/www/html/glueup/themes/glueup/pages/platform/glue-up-manager-app.htm */
class __TwigTemplate_7d3b0e28094f6b7387fc23d59500d17b3676a4c6c41cd1dc77549c34e1533887 extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-manager-engagement.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up Manager"]);
        echo "</p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run Your Operations from <span class=\"line\"><ins> Anywhere </ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline processes and manage your community from palm of your hand with a mobile app that consolidates all your operations and engagement. "]);
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
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Everyday App for Successful Managers"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage registrations, member sign ups and renewals, collect payments, and facilitate smooth check-ins to carry out successful events with an app that comes with each Glue Up solution."]);
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
        // line 35
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-3some.svg");
        echo "\" alt=\"chat\">
            \t\t\t\t         
            \t\t\t\t    </div>
            \t\t\t\t    <div id=\"tab2-bullet-img\">
            \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-3some.svg");
        echo "\" alt=\"chat\">
            \t\t\t\t    </div>
            \t\t\t        <div id=\"tab3-bullet-img\">
                \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-3some.svg");
        echo "\" alt=\"chat\">
                \t\t\t    </div>
            \t\t\t     </div>
            \t\t\t</div>
            \t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
            \t\t\t\t<div class=\"services__accordion\">
            \t\t\t\t  
                                <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                                    <i class=\"icon-engagement\"></i>
                                    <span>";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it all from one app"]);
        echo "</span>
                                    <div class=\"accordion__body firstshow\" style=\"display:none;\">
            \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ultimate mobile app that has everything you need to manage your community anywhere you go.  "]);
        echo "
            \t\t\t\t\t\t\t";
        // line 54
        echo "</p>
            \t\t\t\t\t\t</div>
                                </div>
                                <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                    <i class=\"icon-button\"></i>
                                    <span>";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Operations simplified"]);
        echo "</span>
                                    <div class=\"accordion__body \" style=\"display:none;\">
            \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your absolute comfort (our CEO uses Manager Up daily too). "]);
        echo "
            \t\t\t\t\t\t\t";
        // line 62
        echo "</p>
            \t\t\t\t\t\t</div>
                                </div>
                                <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                    <i class=\"icon-notifications\"></i>
                                    <span>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Never miss a thing"]);
        echo "</span>
                                    <div class=\"accordion__body \" style=\"display:none;\">
            \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get immediate insights into your community’s activities from events, emails, finance and more in real time. "]);
        echo "
            \t\t\t\t\t\t\t";
        // line 70
        echo "</p>
            \t\t\t\t\t\t</div>
                                </div>
            \t\t\t\t</div>
            \t\t\t</div>
            \t\t\t
            \t\t</div>
            </div>
            </div>
        </div>

</section>

<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-6 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 87
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-manager-experience.svg");
        echo "\" alt=\"Glue Up Manager helps you maximize attendee experience\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-6 align-self-center\">
                    <div>
                           <span class=\"h6 text-color hideme\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Events"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Maximize Attendee Experience"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage your events and engage with your attendees, even at multiple events at the same time. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-publishing\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create & Edit Events"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-ticket\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ticket Sales"]);
        echo "</p>
                                    </div>  
                                    ";
        // line 111
        echo "                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Badge Design & Printing"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-qr-code\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 117
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Seamless QR Code Check-ins"]);
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
        // line 130
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-6 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 134
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-manager-members.svg");
        echo "\" alt=\"Glue Up Manager App helps you manage your memberships on the go\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-6 align-self-center\">
                 <div>
                           <span class=\"h6 text-color hideme\">";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Memberships"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 139
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Go the Extra Mile<br> for Your Members"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Impact your members while you are waiting in a cab, stuck on a plane, at hospital, or anywhere else you can access the internet. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                   ";
        // line 150
        echo "                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 152
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Renewal Management"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-directory\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 156
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Directory"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-membership-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 160
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Profile"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-solid\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 164
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Newsletters & Updates"]);
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
        // line 251
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-6 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 255
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-manager-collaborate.svg");
        echo "\" alt=\"Glue Up Manager Up helps you collaborate\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-6 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 259
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Team Management"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 260
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collaborate Effectively"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 262
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Work across teams on multiple projects at once and centralize all your tasks in one dashboard for easy access."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-task-icon\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 269
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Task Lists"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-alert\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 273
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Reminders"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 277
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Push Notifications"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-hierarchy\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 281
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Roles & Permissions"]);
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
        // line 294
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-6 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 298
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-manager-engagement.svg");
        echo "\" alt=\"Glue Up Manager App helps you understand engagement\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-6 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 302
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Analytics"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 303
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Understand Engagement<br> & Take Action"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 305
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stay up to date on everything you have going on with automated tracking, analytics, and reports in real time."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row float-left\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-button\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 312
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Dashboards"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 316
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["P&L Reports"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-menu-section-lemontea\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 320
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Live Check-in Statistics"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-content\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 324
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Project Management"]);
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
        echo "
";
        // line 341
        echo "
";
        // line 342
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 343
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/glue-up-manager-app.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 343,  457 => 342,  454 => 341,  451 => 338,  435 => 324,  428 => 320,  421 => 316,  414 => 312,  404 => 305,  399 => 303,  395 => 302,  388 => 298,  382 => 294,  368 => 281,  361 => 277,  354 => 273,  347 => 269,  337 => 262,  332 => 260,  328 => 259,  321 => 255,  315 => 251,  300 => 164,  293 => 160,  286 => 156,  279 => 152,  275 => 150,  267 => 141,  262 => 139,  258 => 138,  251 => 134,  245 => 130,  231 => 117,  224 => 113,  220 => 111,  215 => 105,  208 => 101,  198 => 94,  193 => 92,  189 => 91,  182 => 87,  163 => 70,  159 => 69,  154 => 67,  147 => 62,  143 => 61,  138 => 59,  131 => 54,  127 => 53,  122 => 51,  110 => 42,  104 => 39,  97 => 35,  85 => 26,  81 => 25,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/glue-up-manager-app.htm", "");
    }
}
