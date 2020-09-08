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

/* /var/www/html/glueup/themes/glueup/pages/platform/crm.htm */
class __TwigTemplate_9d85e9e77ee25f46b81897b025ca2147442eadc9f2d335925cdf65452b0c9a5d extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm-feature.svg");
        echo "\" class=\"paygage-visual\" alt=\"Glue Up provides you with an engagement CRM logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stay in the <span class=\"line\"><ins>Know</ins></span><br>Always."]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Centralize all your data in one place and get deep insights into your community so you can understand engagement and improve your campaigns."]);
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
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Discover the journey of every person in your community"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM built for engagement that helps you manage all your contacts and generate more revenue. "]);
        echo " </p>
                        </div>
                    </div>
            </div>
            <div class=\"col-lg-10 align-self-center mx-auto\">
\t\t\t    <div class=\"services__accordion row flex-row-reverse\">
\t\t\t            <div class=\"col-md-7 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t<div class=\"accordion__img desktop\">
\t\t\t\t\t\t\t    <div id=\"tab1-bullet-img\" class=\"firstshow\">
\t\t\t\t\t\t\t        <img class=\"feature-window desktop\" src=\"";
        // line 35
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" alt=\"chat\">
\t\t\t\t\t\t\t         
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div id=\"tab2-bullet-img\">
\t\t\t\t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm-1.svg");
        echo "\" alt=\"chat\">
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t        <div id=\"tab3-bullet-img\">
\t\t\t    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-security-feature.svg");
        echo "\" alt=\"chat\">
\t\t\t    \t\t\t    </div>
\t\t\t\t\t\t     </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t<div class=\"services__accordion\">
\t\t\t\t\t\t\t  
\t\t\t                    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
\t\t\t                        <i class=\"icon-engagement\"></i>
\t\t\t                        <span>";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it All From One Platform"]);
        echo "</span>
\t\t\t                        <div class=\"accordion__body firstshow\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage your audiences and opportunities with easy-to-use tools. "]);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 54
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                    </div>
\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
\t\t\t                        <i class=\"icon-analytics\"></i>
\t\t\t                        <span>";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make Smarter Decisions"]);
        echo "</span>
\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Gain instant visibility into engagement with interactive dashboards and profiles. "]);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 62
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                    </div>
\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
\t\t\t                        <i class=\"icon-lock\"></i>
\t\t\t                        <span>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stay Protected At All Times"]);
        echo "</span>
\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We take care of security, so you can focus on serving your community. "]);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                    </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t</div>
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("crm-features-1.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Management"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage Your Contacts All In One"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline your processes and get efficient with a first-class cloud platform that consolidates all of your operations and engagement with your contacts in one place."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-reset-time\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["History of all interactions"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-upload\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy import"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatic synchronization"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-tag\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Labels and filters"]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("crm-features-2.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Opportunities"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate Your Sales Workflows"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 137
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Drive revenue with features designed to help you close more deals. All team members can simultaneously track and manage opportunities through each stage of the sales process."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-filter\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 144
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sales pipeline"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-upload\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 148
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Import existing deals"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-edit-update\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 152
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom fields"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-sections\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 156
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Deal stages"]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("crm-features-3.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 177
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 178
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Never Miss a Thing"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 180
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Leverage every sales opportunity by assigning tasks to team members. Efficiently follow up on every lead with tracking tools based on individual or company contact profiles."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-time-unsure\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 187
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom reminders"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-document\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 191
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Add notes & files"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Push notifications"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-tags\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 199
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks history"]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("crm-features-4.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 221
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact & Company Profile"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 222
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Understand Engagement Across Activities"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 224
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Grow your community by knowing everything about your contacts and organizations.  "]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact & Company profiles show activity history so you know which events they have attended, what emails they read and how much money they have spent. "]);
        echo "<br>
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-magnifying-glass\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Insights"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-template\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 235
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable dashboards"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-tags\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 239
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Finance history"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 243
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatic sync"]);
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
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mx-auto paygage-visual lazy \">
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
                                \t<div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-registrations\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 273
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Project Management"]);
        echo "</p>
                                    </div>    
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-smart-list\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 277
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["List segmentation"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-tag\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 281
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tags and filters"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-upload\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 285
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy import/export"]);
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
        return "/var/www/html/glueup/themes/glueup/pages/platform/crm.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 299,  521 => 298,  518 => 297,  504 => 285,  497 => 281,  490 => 277,  483 => 273,  472 => 266,  467 => 264,  463 => 263,  456 => 259,  450 => 255,  436 => 243,  429 => 239,  422 => 235,  415 => 231,  404 => 224,  399 => 222,  395 => 221,  388 => 217,  382 => 213,  379 => 211,  365 => 199,  358 => 195,  351 => 191,  344 => 187,  334 => 180,  329 => 178,  325 => 177,  318 => 173,  312 => 169,  297 => 156,  290 => 152,  283 => 148,  276 => 144,  266 => 137,  261 => 135,  257 => 134,  250 => 130,  244 => 126,  230 => 113,  223 => 109,  216 => 105,  209 => 101,  199 => 94,  194 => 92,  190 => 91,  183 => 87,  177 => 83,  163 => 70,  159 => 69,  154 => 67,  147 => 62,  143 => 61,  138 => 59,  131 => 54,  127 => 53,  122 => 51,  110 => 42,  104 => 39,  97 => 35,  85 => 26,  81 => 25,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/crm.htm", "");
    }
}
