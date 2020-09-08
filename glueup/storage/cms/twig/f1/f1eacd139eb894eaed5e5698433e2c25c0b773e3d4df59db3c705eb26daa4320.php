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

/* /var/www/html/glueup/themes/glueup/pages/platform/tasks.htm */
class __TwigTemplate_16ff61aeb7660851da31921698a2606b071c7f01490557fee1ff58fd2af5a443 extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-tasks-feature.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Work <span class=\"line\"><ins>Done </ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, organize, execute and evaluate all your projects from one platform. "]);
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collaborate Effectively"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage your projects and your teams from start to finish. Get things done from an idea to a successful completion."]);
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
        // line 35
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-all-in-one.svg");
        echo "\" alt=\"Glue Up is all-in-one\">
\t\t\t\t\t\t\t\t\t         
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t    <div id=\"tab2-bullet-img\">
\t\t\t\t\t\t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-automate.svg");
        echo "\" alt=\"Glue Up helps you automate manual tasks\">
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t        <div id=\"tab3-bullet-img\">
\t\t\t\t\t    \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members.svg");
        echo "\" alt=\"Glue Up is easy for everyone\">
\t\t\t\t\t    \t\t\t    </div>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-5 align-self-center\" style=\"margin-bottom:50px;\">
\t\t\t\t\t\t\t\t\t<div class=\"services__accordion\">
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t                    <div class=\"accordion pl-3 active small dropdown-item with-icon pointer\" tab-name=\"tab1-bullet\">
\t\t\t\t\t                        <i class=\"icon-engagement\"></i>
\t\t\t\t\t                        <span>";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it all from one place"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body firstshow\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ultimate toolkit that has everything you and your community needs for maximum engagement."]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab2-bullet\">
\t\t\t\t\t                        <i class=\"icon-power-switch\"></i>
\t\t\t\t\t                        <span>";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate manual tasks"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline your processes and become the best version of yourself."]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 62
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
\t\t\t\t\t                        <i class=\"icon-button\"></i>
\t\t\t\t\t                        <span>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it simple for everyone"]);
        echo "</span>
\t\t\t\t\t                        <div class=\"accordion__body \" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your and all your audiences’s absolute comfort."]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-tasks.svg");
        echo "\" alt=\"Glue Up helps you plan tasks across your team\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Spend Less Time Planning"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collaborate across teams on multiple projects at once and centralize all your tasks in one dashboard for easy access. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-task-icon\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Task Lists"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-object-forward\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Kanban Boards"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-clock-outlined\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Reminders"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Push Notifications"]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-tasks-team.svg");
        echo "\" alt=\"Glue Up helps you keep your team focused\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Team Work"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Keep Your Team Focused"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 137
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Focus on your projects and automate manual routine tasks that might be slowing down your progress. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-power-switch\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 144
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Workflow Automation"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-events\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 148
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Calendar"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-atsymbol\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 152
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["@Mentioning"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-view\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 156
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Visualizations"]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-scaleup.svg");
        echo "\" alt=\"Glue Up hels you automate tasks\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 177
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 178
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Simplify Event Planning"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 180
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Optimize the lifecycle of your offline and online events from initial planning through follow-up to surveys."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-events\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 187
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Calendar"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-website-dev\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 191
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Pages"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-campaigns\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-ticket\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 199
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ticketing & Payments"]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-analyze.svg");
        echo "\" alt=\"Glue Up helps you analyze your results\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 221
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Analytics"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 222
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make Smart Decisions"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 224
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stay up to date on all your projects with automated tracking, analytics, and reports."]);
        echo "<br>
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-menu-section-lemontea\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Real-Time Insights"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-add-dashboard\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 235
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Dashboards"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-hierarchy\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 239
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Roles & Permissions"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 243
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["P&L Reports"]);
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
        echo "
";
        // line 256
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 257
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/tasks.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 257,  452 => 256,  449 => 255,  435 => 243,  428 => 239,  421 => 235,  414 => 231,  404 => 224,  399 => 222,  395 => 221,  388 => 217,  382 => 213,  379 => 211,  365 => 199,  358 => 195,  351 => 191,  344 => 187,  334 => 180,  329 => 178,  325 => 177,  318 => 173,  312 => 169,  297 => 156,  290 => 152,  283 => 148,  276 => 144,  266 => 137,  261 => 135,  257 => 134,  250 => 130,  244 => 126,  230 => 113,  223 => 109,  216 => 105,  209 => 101,  199 => 94,  194 => 92,  190 => 91,  183 => 87,  177 => 83,  163 => 70,  159 => 69,  154 => 67,  147 => 62,  143 => 61,  138 => 59,  131 => 54,  127 => 53,  122 => 51,  110 => 42,  104 => 39,  97 => 35,  85 => 26,  81 => 25,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/tasks.htm", "");
    }
}
