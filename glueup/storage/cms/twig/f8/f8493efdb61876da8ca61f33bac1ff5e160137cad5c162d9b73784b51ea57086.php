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

/* /var/www/html/glueup/themes/glueup/pages/platform/email-campaigns.htm */
class __TwigTemplate_5ab6e0581b5360b66256ffe26166e0e434e89ea5293d8bf94f2a8411df182f17 extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-emails-feature.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>                
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Send <span class=\"line\"><ins>Better </ins></span> Campaigns"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Personalize your communications and grow your organization with branded email campaigns, newsletters, and event invitations that can be built and sent in few clicks."]);
        echo " </p>
                       ";
        // line 14
        echo "                       ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("elements/hero-email-cta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "                </div>
            </div>
        </div>
</header>
<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-7 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create and Send Emails to Connect with Your Community"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Whether you’re welcoming new members or promoting your events, you can send any kind of email campaigns with great looks in just a few clicks. "]);
        echo " </p>
                        </div>
                    </div>
            </div>
\t            <div class=\"col-lg-10 align-self-center mx-auto\">
\t\t\t\t    <div class=\"services__accordion row flex-row-reverse\">
\t\t\t\t            <div class=\"col-md-7 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t\t<div class=\"accordion__img desktop\">
\t\t\t\t\t\t\t\t    <div id=\"tab1-bullet-img\" class=\"firstshow\">
\t\t\t\t                \t\t<img class=\"feature-window desktop\" src=\"";
        // line 34
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" alt=\"chat\">
\t\t\t\t                \t\t\t\t         
\t\t\t\t                \t</div>
\t\t\t\t                \t<div id=\"tab2-bullet-img\">
\t\t\t\t                \t\t<img class=\"feature-window deskto\" src=\"";
        // line 38
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-anywhere.svg");
        echo "\" alt=\"chat\">
\t\t\t\t                \t</div>
\t\t\t\t                \t\t\t <div id=\"tab3-bullet-img\">
\t\t\t\t                    \t\t\t <img class=\"feature-window deskto\" src=\"";
        // line 41
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members.svg");
        echo "\" alt=\"chat\">
\t\t\t\t                    \t\t\t</div>
\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t\t<div class=\"services__accordion\">
\t\t\t\t\t\t\t\t  
\t\t\t\t                    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
\t\t\t\t                        <i class=\"icon-engagement\"></i>
\t\t\t\t                        <span>";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it all from one place"]);
        echo "</span>
\t\t\t\t                        <div class=\"accordion__body firstshow\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ultimate toolkit that has everything you and your community needs for maximum engagement."]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 53
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t                    </div>
\t\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
\t\t\t\t                        <i class=\"icon-mobile-check\"></i>
\t\t\t\t                        <span>";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reach people where they are"]);
        echo "</span>
\t\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 60
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["One app for you to manage everything on the go, and one app for your community to stay connected."]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 61
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t                    </div>
\t\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
\t\t\t\t                        <i class=\"icon-button\"></i>
\t\t\t\t                        <span>";
        // line 66
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it simple for everyone"]);
        echo "</span>
\t\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and all your audiences’s absolute comfort."]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 69
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </div>

</section>
";
        // line 82
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 86
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-email-standout.svg");
        echo "\" alt=\"Glue Up drag and drop email creator helps you deliver best in class email campaigns\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Email Creator"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make Your Emails Stand Out"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 93
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Use a simple drag-and-drop editor or your own custom HTML code to create custom templates with your own branding."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-button\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 100
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Drag & Drop, & HTML Editor"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 104
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Management"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 108
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Branding"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Send Push Notifications"]);
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
        // line 125
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 129
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-email-template.svg");
        echo "\" alt=\"Glue Up email template helps you automate your email marketing campaigns\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 133
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Templates"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Scale Up Your Email Marketing"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 136
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Save time with professional, branded templates to deliver messages that drive engagement. Preview emails before they go out to ensure your messaging is exactly the way you like."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-solid\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 143
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Newsletters"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 147
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Marketing Automation"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-time-unsure\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 151
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Invitations"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-memberships\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 155
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Journey Emails"]);
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
        // line 168
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 172
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-newsletter.svg");
        echo "\" alt=\"Glue Up helps you personalize your communications with subscription lists\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 176
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Subscription Lists & Website Widgets"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 177
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Grow Your Community"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 179
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Deliver personalized communications with tailored subscriptions lists. Acquire more subscribers by embedding custom email sign-up forms anywhere on the web."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-smart-list\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 186
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Smart Lists"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-subscription\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 190
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Subscription Management"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-object-forward\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 194
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sign-up Widgets"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-unsubscription\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 198
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Suppression Management"]);
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
        // line 210
        echo "
";
        // line 212
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 216
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-email-analytics.svg");
        echo "\" alt=\"Glue Up helps you learn about your email campaign performances\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 220
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Analytics & Reports"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 221
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn What Emails Work Best"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 223
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Optimize the success of your outreach. Analyze metrics and monitor the performance of your email campaigns together with other insights available in each contact’s profile."]);
        echo "<br>
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 230
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Statistics"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-close-outlined\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 234
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Bounce Management"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-checked-in\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 238
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Dedicated IP Address"]);
        echo "*</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-add-dashboard\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 242
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Dashboards"]);
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
        // line 254
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 255
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/email-campaigns.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 255,  449 => 254,  434 => 242,  427 => 238,  420 => 234,  413 => 230,  403 => 223,  398 => 221,  394 => 220,  387 => 216,  381 => 212,  378 => 210,  364 => 198,  357 => 194,  350 => 190,  343 => 186,  333 => 179,  328 => 177,  324 => 176,  317 => 172,  311 => 168,  296 => 155,  289 => 151,  282 => 147,  275 => 143,  265 => 136,  260 => 134,  256 => 133,  249 => 129,  243 => 125,  229 => 112,  222 => 108,  215 => 104,  208 => 100,  198 => 93,  193 => 91,  189 => 90,  182 => 86,  176 => 82,  162 => 69,  158 => 68,  153 => 66,  146 => 61,  142 => 60,  137 => 58,  130 => 53,  126 => 52,  121 => 50,  109 => 41,  103 => 38,  96 => 34,  84 => 25,  80 => 24,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/email-campaigns.htm", "");
    }
}
