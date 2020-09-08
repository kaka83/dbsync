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

/* /var/www/html/glueup/themes/glueup/partials/platform/features-nav.htm */
class __TwigTemplate_0448ee6162328a49d0ad7dae8f9c3dc8d70928d6dd802b98dab4cfad24f3cc9c extends \Twig\Template
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
        echo "<section>
    <div class=\"container\">
   <div class=\"row no-gutters\">
                    <div class=\"col-md-8 mx-auto pb-2 pt-5\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We mean it when we say it’s <span class=\"line\"><ins>all-in-one</ins></span>"]);
        echo "</h2>
                        </div>
                    </div>
            </div>
    <div class=\"row no-gutters\">
                                            <div class=\"col-md-12 pb-4\">
                                                <div class=\"row pt-2 no-gutters\">
                                                    <div class=\"col-md-12 mr-auto\">
                                                        ";
        // line 15
        echo "                                                    </div>
                                                </div>
                                                <div class=\"row pb-5\">
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/crm");
        echo "\">
                                                            <i class=\"icon-crm\"></i>
                                                            <span>";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage all your contacts in one place and leverage analytics. "]);
        echo "</p></span>
                                                            
                                                        </a>
            
                                                        </a>
                                                    </div>
                                                     <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/community");
        echo "\">
                                                            <i class=\"icon-social-share\"></i>
                                                            <span>";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Give your community a digital place where they can engage."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/event-management");
        echo "\">
                                                            <i class=\"icon-events\"></i>
                                                            <span>";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online & Offline Events"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, promote, execute and evaluate all your events. "]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/membership-management");
        echo "\">
                                                            <i class=\"icon-memberships\"></i>
                                                            <span>";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Memberships"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate membership processes and provide members premium experience."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/email-campaigns");
        echo "\">
                                                            <i class=\"icon-email-campaigns\"></i>
                                                            <span>";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create, send, and deliver professional email campaigns of any kind. "]);
        echo "</p></span>
                                                            
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/finance");
        echo "\">
                                                            <i class=\"icon-invoice\"></i>
                                                            <span>";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Finance & Invoicing"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline all your finance-related processes and grow revenue."]);
        echo "</p></span>
                                
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/tasks");
        echo "\">
                                                            <i class=\"icon-task-icon\"></i>
                                                            <span>";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get things done from an idea to a successful completion."]);
        echo "</p></span>
                                    
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/surveys");
        echo "\">
                                                            <i class=\"icon-thumb-full\"></i>
                                                            <span>";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Find answers to your questions with surveys, quizzes, and polls."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/cpe-cpd");
        echo "\">
                                                            <i class=\"icon-event-tags\"></i>
                                                            <span>";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CPE/CPD Credits"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage and scale up your trainings and certification courses."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/website");
        echo "\">
                                                            <i class=\"icon-article-left\"></i>
                                                            <span>";
        // line 81
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Website"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Upgrade your online presence with a fully integrated website."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    ";
        // line 90
        echo "                                                    ";
        // line 96
        echo "                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glue-up-app");
        echo "\">
                                                            <i class=\"icon-glue-up-app\"></i>
                                                            <span>";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["My Glue"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Provide attendees and members mobile app to engage anywhere."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glue-up-manager-app");
        echo "\">
                                                            <i class=\"icon-glue-up-manager-app\"></i>
                                                            <span>";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manager App"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage your operations and stay in the know on the go."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
        // line 136
        echo "                                        </div>
    </div>
";
        // line 139
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/platform/features-nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 139,  240 => 136,  230 => 105,  225 => 103,  216 => 99,  211 => 97,  208 => 96,  206 => 90,  198 => 81,  193 => 79,  184 => 75,  179 => 73,  170 => 69,  165 => 67,  155 => 62,  150 => 60,  140 => 55,  135 => 53,  125 => 48,  120 => 46,  111 => 42,  106 => 40,  97 => 36,  92 => 34,  83 => 30,  78 => 28,  66 => 21,  61 => 19,  55 => 15,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/platform/features-nav.htm", "");
    }
}
