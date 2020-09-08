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

/* /var/www/html/glueup/themes/glueup/pages/platform/website.htm */
class __TwigTemplate_afcfcca2de2b514b49a950ed5f62171383c8ca339e263fccb6e370299b69f9b4 extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-website-dev.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Website Solution"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get a Brand-new <span class=\"line\"><ins>Look</ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Upgrade your online presence with a professional, mobile-responsive website that seamlessly integrates with your Glue Up platform."]);
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

<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-7 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["First Impressions Matter"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stay connected with your communities and use your website to build greater engagement."]);
        echo " </p>
                        </div>
                    </div>
            </div>
                        <div class=\"col-lg-10 align-self-center mx-auto\">
                            <div class=\"services__accordion row flex-row-reverse\">
                                    <div class=\"col-md-7 align-self-center\" style=\"margin-bottom:50px;\">
                        \t\t\t\t<div class=\"accordion__img desktop\">
                        \t\t\t\t    <div id=\"tab1-bullet-img\" class=\"firstshow\">
                        \t\t\t\t         <img class=\"feature-window deskto\" src=\"";
        // line 36
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-week.svg");
        echo "\" alt=\"chat\">
                        \t\t\t\t    </div>
                        \t\t\t\t    <div id=\"tab2-bullet-img\">
                        \t\t\t\t        <img class=\"feature-window desktop\" src=\"";
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-highlight.svg");
        echo "\" alt=\"chat\">
                        \t\t\t\t    </div>
                        \t\t\t        <div id=\"tab3-bullet-img\">
                            \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members-1.svg");
        echo "\" alt=\"chat\">
                            \t\t\t    </div>
                        \t\t\t     </div>
                        \t\t\t</div>
                        \t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
                        \t\t\t\t<div class=\"services__accordion\">
                        \t\t\t\t  
                                            <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
                                                
                                                <i class=\"icon-power-switch\"></i>
                                                <span>";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Go live in a week"]);
        echo "</span>
                                                <div class=\"accordion__body firstshow\" style=\"display:none;\">
                        \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Have your new website up and running in less than a week and generate additional revenue. "]);
        echo "
                        \t\t\t\t\t\t\t";
        // line 55
        echo "</p>
                        \t\t\t\t\t\t</div>
                                            </div>
                                            <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
                                                <i class=\"icon-engagement\"></i>
                                                <span>";
        // line 60
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Feature everything automatically"]);
        echo "</span>
                                                <div class=\"accordion__body\" style=\"display:none;\">
                        \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A website that updates itself as you create events or add new memberships on Glue Up."]);
        echo "
                        \t\t\t\t\t\t\t";
        // line 63
        echo "</p>
                        \t\t\t\t\t\t</div>
                                            </div>
                                            <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                                <i class=\"icon-button\"></i>
                                                <span>";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it simple for everyone"]);
        echo "</span>
                                                <div class=\"accordion__body \" style=\"display:none;\">
                        \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and all your audiences’s absolute comfort."]);
        echo "
                        \t\t\t\t\t\t\t";
        // line 71
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
";
        // line 84
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 88
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-website-phone.svg");
        echo "\" alt=\"Glue Up Website is mobile friendly\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automation"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 93
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Website That Just Works"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 95
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Feature events, member applications and other things you create with Glue Up platform to your website visitors in real-time without updating anything. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-power-switch\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 102
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy Setup"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 106
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SEO Optimized"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 110
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Job Boards"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-mobile-check\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 114
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile-friendly"]);
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
        // line 127
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 131
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-community-1.svg");
        echo "\" alt=\"Glue Up website connects with every feature in your community\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Hub"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 136
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A Place to Engage and Exchange Knowledge"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Give your community a digital place where they can share their ideas, discuss various topic and stay social even when meeting in person is not an option."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-menu-section-lemontea\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 145
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Live Feed"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-visible\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 149
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Public & Private Groups"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-directory\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 153
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Directory"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 157
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Announcements"]);
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
        // line 170
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 174
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-directory.svg");
        echo "\" alt=\"Glue Up website features the most relevant information about your community\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 178
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 179
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do More than What’s Expected"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 181
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digitize all processes and deliver premium experience your community deserves. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-speaker\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 188
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Job Boards"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-lock\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 192
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member-only Content"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 196
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["People Profiles"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-menu-section-lemontea\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 200
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Latest News"]);
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
        // line 212
        echo "
";
        // line 214
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 218
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-cms.svg");
        echo "\" alt=\"Glue Up Website is easy to customize\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 222
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Admin"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 223
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stay in Charge"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 225
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["You are the boss of your website. Easily update your website or add new pages, ads or job listings anytime. "]);
        echo "<br>
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-content\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 232
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CMS Training "]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-key\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 236
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Roles & Permissions"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-lock\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SSL Certificate"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 244
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetization Tools"]);
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
        // line 256
        echo "
";
        // line 257
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 258
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/website.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 258,  453 => 257,  450 => 256,  436 => 244,  429 => 240,  422 => 236,  415 => 232,  405 => 225,  400 => 223,  396 => 222,  389 => 218,  383 => 214,  380 => 212,  366 => 200,  359 => 196,  352 => 192,  345 => 188,  335 => 181,  330 => 179,  326 => 178,  319 => 174,  313 => 170,  298 => 157,  291 => 153,  284 => 149,  277 => 145,  267 => 138,  262 => 136,  258 => 135,  251 => 131,  245 => 127,  231 => 114,  224 => 110,  217 => 106,  210 => 102,  200 => 95,  195 => 93,  191 => 92,  184 => 88,  178 => 84,  164 => 71,  160 => 70,  155 => 68,  148 => 63,  144 => 62,  139 => 60,  132 => 55,  128 => 54,  123 => 52,  110 => 42,  104 => 39,  98 => 36,  86 => 27,  82 => 26,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/website.htm", "");
    }
}
