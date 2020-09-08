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

/* /var/www/html/glueup/themes/glueup/pages/solutions/community-management-suite.htm */
class __TwigTemplate_0e64a4e607349e365e160c22b053ce737f9e439c20901d53b3882112492837b4 extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community-feature.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\"> ";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Management Suite"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["<span class=\"line\"><ins>Transform </ins></span> Your Community Engagement"]);
        echo "</h1>
                       <h2 class=\"tagline\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Connecting with your community is more important than ever. Enable them to thrive no matter where they are with the most powerful solution on the market."]);
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("logos/logobar-community.htm"        , $context['__cms_partial_params']        , true        );
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Business Never Sleeps,<br> Neither Should Your Community"]);
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
                \t\t\t\t          <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-anywhere.svg");
        echo "\" alt=\"Glue Up helps you reach your members wherever they are.\">
                \t\t\t\t    </div>
                \t\t\t        <div id=\"tab3-bullet-img\">
                    \t\t\t         <img class=\"feature-window deskto\" src=\"";
        // line 45
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-easy-members-1.svg");
        echo "\" alt=\"Glue Up makes it easy to use for any member of your organization\">
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one software that helps you build, manage, engage, and understand every member of your community."]);
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Reach members where they are"]);
        echo "</span>
                                        <div class=\"accordion__body \" style=\"display:none;\">
                \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 66
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["One app for you to manage your operations from anywhere, and one app for your members to stay connected."]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("community-features-1.svg");
        echo "\" alt=\"Glue Up helps you offer a space for your members to exchange knowledge\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 102
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Hub"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A Place to Engage and Exchange Knowledge"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Provide your community a hub where they can share their ideas, discuss various topic and stay social even when meeting in person is not an option. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-menu-section-lemontea\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Live Feed"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-comment-box\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 116
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Comments & Discussions"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-directory\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 120
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member<br>Directory"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 124
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Social Sharing"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-advertisement\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 128
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Broadcastings"]);
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
        // line 141
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 145
        echo $this->extensions['System\Twig\Extension']->mediaFilter("community-features-2.svg");
        echo "\" alt=\"Glue Up helps you offer discussion groups both private and open\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 149
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Conversations"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Spark Discussions in Open or Private Groups"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 152
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it easy for everyone to find like-minded people and topics that matter to them so they can network with each other and exchange their opinions."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invisible\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 159
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Public & Private Groups"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-comment-box\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 163
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Unlimited Commenting"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-thumb-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Reactions"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-atsymbol\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 171
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["@Mentioning"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contacts\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 175
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
        // line 189
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-6 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence mx-auto\">";
        // line 193
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["<span style=\"color:#0d62fe;\">Glue Up</span> clients are reporting <span class=\"line\"><ins>3x</ins></span> increase in engagement."]);
        echo "</p>
                </div>
            </div>
        </div>
</section>
";
        // line 199
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 203
        echo $this->extensions['System\Twig\Extension']->mediaFilter("community-features-3.svg");
        echo "\" alt=\"Glue Up helps you facilitate business card exchange\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 207
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Networking"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 208
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Help Business Happen"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 210
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your community to create and share their own digital business cards, manage their contacts and effectively network with everyone no matter where they are."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-mobile-apps\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 217
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Free Member App"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-prev\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 221
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Available on all devices"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-lock\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 225
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom privacy settings"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-qr-code\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 229
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Business Card Scanner"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-crm\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 233
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
        // line 245
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 249
        echo $this->extensions['System\Twig\Extension']->mediaFilter("community-features-4.svg");
        echo "\" alt=\"Glue Up helps you connect you audiences\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 253
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Private Discussions"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 254
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Let People Talk"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 256
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it your business to enable everyone in your community develop lasting relationships with you and each other via 1-on-1 chats with option to share business cards."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 263
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1-on-1 Direct Chat"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-heart\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 267
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["GIFs and Emojis"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 271
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Media & Location Sharing"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invisible\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 275
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Privacy Settings"]);
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
        // line 291
        echo "            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 294
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customers <span class=\"line\"><ins>stick</ins></span> with Glue Up"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 295
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["From small associations and non-profits to large Chambers of Commerce with dozens of chapters, our clients in 50+ countries around the world love engaging their members all-in-one with Glue Up."]);
        echo " </p>
                        </div>
                    </div>
            </div>
            <div class=\"row\">
            ";
        // line 300
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['category'] = "associations"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-case-study.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 301
        echo "                   
            </div>
        </div>
</section>

";
        // line 307
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 311
        echo $this->extensions['System\Twig\Extension']->mediaFilter("community-features-5.svg");
        echo "\" alt=\"Glue Up helps you define the engagement rules\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 315
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Admin Controls"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 316
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Define Rules Of Engagement"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 318
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["You are the boss of the engagement. Create and manage different groups, allow and restrict access or offer greater functionalities to paying members of your community."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-filters\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 325
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Advanced Filters"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-hierarchy\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 329
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Roles & Permissions"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-lock\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 333
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Full Moderation"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-advertisement\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 337
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Post Broadcastings"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 341
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement Analytics"]);
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
        // line 354
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 358
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-engage.svg");
        echo "\" alt=\"Glue Up helps you facilitat interaction and engagement with and for your community\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 362
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 363
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable Your Community To Thrive"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 365
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it your business to enable every member in your community to develop lasting relationships"]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" with you and each other via 1-on-1 chats with option to share business cards and premium networking features."]);
        echo "<br>
                \t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invisible\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 372
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Private & Public Groups"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 376
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Media sharing"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 380
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1-on-1 Direct Chat"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 384
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Business Cards"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-mobile-apps\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 388
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
        // line 403
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 407
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-analyze.svg");
        echo "\" alt=\"Glue Up helps you analyze your engagement\" class=\"img-fluid mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 411
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Analytics"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 412
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Understand Engagement With Your Members"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 414
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get immediate insights into your members’ activities from events, email marketing, finance and more in the real time and use what you learn to make smarter decisions."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 421
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Information"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-reset-time\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 425
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engagement History"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 429
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Status and Renewals"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-opportunity\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 433
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Opportunities Management"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-filter\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 437
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
        // line 450
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 454
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-webinars.svg");
        echo "\" alt=\"Glue Up helps you monetize your webinars\" class=\"img-fluid mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 458
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Events"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 459
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize & Enhance Your Webinars"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 461
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
        // line 468
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium Branding Options"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-sponsor\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 472
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sponsor Promotion"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 476
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Attendee Chat"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-documents\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 480
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Webinar Documents"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 484
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
    \t\t\t\t    <div id=\"tab1-sellpoint-img\" class=\"firstshow\">
    \t\t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 504
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community.svg");
        echo "\" alt=\"Best-in-class event management with Glue Up\">
    \t\t\t\t    </div>
    \t\t\t        <div id=\"tab2-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 507
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-crm.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab3-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 510
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-emails.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab4-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 513
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-finance.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab5-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 516
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-tasks.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab6-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 519
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-surveys.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
        \t\t\t    <div id=\"tab7-sellpoint-img\">
        \t\t\t        <img class=\"feature-window deskto lazyload\" src=\"";
        // line 522
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-mobile.svg");
        echo "\" alt=\"chat\">
        \t\t\t    </div>
    \t\t\t     </div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-5 mr-auto float-left align-self-center\">
    \t\t\t    <div class=\"pt-1 pb-3 pt-md-5 pb-md-5 ml-xs-0 my-3\">
                                     <small>";
        // line 528
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What's included?"]);
        echo "</small>
                                     <h2 class=\"mt-3 mb-2 position-relative content-title\">";
        // line 529
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community <br> Management Suite"]);
        echo " </h2>
                                     <p class=\"tagline pt-2 \">";
        // line 530
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["An all-in-one solution that helps you save time and focus on your mission while keeping everybody on the same page."]);
        echo " </p>
                    </div>
    \t\t\t\t<div class=\"services__accordion row bullets hideme ml-xs-0 pb-5 mb-5 h-100\" style=\"padding-left:-16px;\">
    \t\t\t\t    <div class=\"accordion sellpoint active small col text-center pointer px-0 pl-1\" tab-name=\"tab1-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-social-share\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 535
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab2-sellpoint\">
                             <i class=\"sellpoint-item align-middle icon-crm\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 539
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab3-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-email-campaigns\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 543
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab4-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-payments\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 547
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Invoicing & Payments"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab5-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-task-icon\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 551
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo "</p>
                        </div>
                        <div class=\"accordion sellpoint small col text-center pointer px-0 pl-1\" tab-name=\"tab7-sellpoint\">
                            <i class=\"sellpoint-item align-middle icon-mobile-check\"></i>
                            <p class=\"bullet-small text-center pt-2 mt-2 px-0 mx-0 \">";
        // line 555
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
        // line 566
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 571
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about community engagement and Glue Up"]);
        echo "</h2>
                             ";
        // line 573
        echo "                        </div>
                    </div>
            </div>
           ";
        // line 577
        echo "           ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['event'] = "communities"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 578
        echo "            </div>
        </div>

</section>
";
        // line 582
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/solutions/community-management-suite.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  980 => 582,  974 => 578,  968 => 577,  963 => 573,  959 => 571,  952 => 566,  939 => 555,  932 => 551,  925 => 547,  918 => 543,  911 => 539,  904 => 535,  896 => 530,  892 => 529,  888 => 528,  879 => 522,  873 => 519,  867 => 516,  861 => 513,  855 => 510,  849 => 507,  843 => 504,  820 => 484,  813 => 480,  806 => 476,  799 => 472,  792 => 468,  781 => 461,  776 => 459,  772 => 458,  765 => 454,  759 => 450,  744 => 437,  737 => 433,  730 => 429,  723 => 425,  716 => 421,  706 => 414,  701 => 412,  697 => 411,  690 => 407,  684 => 403,  667 => 388,  660 => 384,  653 => 380,  646 => 376,  639 => 372,  628 => 365,  623 => 363,  619 => 362,  612 => 358,  606 => 354,  591 => 341,  584 => 337,  577 => 333,  570 => 329,  563 => 325,  553 => 318,  548 => 316,  544 => 315,  537 => 311,  531 => 307,  524 => 301,  519 => 300,  511 => 295,  507 => 294,  502 => 291,  484 => 275,  477 => 271,  470 => 267,  463 => 263,  453 => 256,  448 => 254,  444 => 253,  437 => 249,  431 => 245,  417 => 233,  410 => 229,  403 => 225,  396 => 221,  389 => 217,  379 => 210,  374 => 208,  370 => 207,  363 => 203,  357 => 199,  349 => 193,  343 => 189,  327 => 175,  320 => 171,  313 => 167,  306 => 163,  299 => 159,  289 => 152,  284 => 150,  280 => 149,  273 => 145,  267 => 141,  252 => 128,  245 => 124,  238 => 120,  231 => 116,  224 => 112,  214 => 105,  209 => 103,  205 => 102,  198 => 98,  192 => 94,  188 => 91,  171 => 75,  167 => 74,  162 => 72,  155 => 67,  151 => 66,  146 => 64,  139 => 59,  135 => 58,  130 => 56,  122 => 50,  117 => 45,  111 => 42,  104 => 38,  92 => 29,  88 => 28,  80 => 22,  76 => 20,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/solutions/community-management-suite.htm", "");
    }
}
