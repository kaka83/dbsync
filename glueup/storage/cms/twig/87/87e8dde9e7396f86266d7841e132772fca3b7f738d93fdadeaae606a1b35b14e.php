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

/* /var/www/html/glueup/themes/glueup/pages/platform/glue-up-app.htm */
class __TwigTemplate_ecca42bbde39a65141ab3eb5e948710b87eb585e3c7c86864494de0aa955dbb1 extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-3some.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["My Glue"]);
        echo "</p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable Your Community to Engage. <span class=\"line\"><ins> Anywhere </ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Give your attendees and members an easy way to engage, network and receive important information no matter where they are. "]);
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All-in-one Mobile App"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["User friendly mobile app for your communities that comes with every Glue Up solution."]);
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-1.svg");
        echo "\" alt=\"chat\">
            \t\t\t\t         
            \t\t\t\t    </div>
            \t\t\t\t    <div id=\"tab2-bullet-img\">
            \t\t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 39
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-1.svg");
        echo "\" alt=\"chat\">
            \t\t\t\t    </div>
            \t\t\t        <div id=\"tab3-bullet-img\">
                \t\t\t        <img class=\"feature-window deskto\" src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-1.svg");
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Do it all from one place"]);
        echo "</span>
                                    <div class=\"accordion__body firstshow\" style=\"display:none;\">
            \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A single mobile app that has everything your community needs for maximum engagement. "]);
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it simple for everyone"]);
        echo "</span>
                                    <div class=\"accordion__body \" style=\"display:none;\">
            \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium user experience battle-tested for your attendees’ and members’ absolute comfort. "]);
        echo "
            \t\t\t\t\t\t\t";
        // line 62
        echo "</p>
            \t\t\t\t\t\t</div>
                                </div>
                                <div class=\"accordion pl-3 small dropdown-item with-icon pointer\" tab-name=\"tab3-bullet\">
                                    <i class=\"icon-chat\"></i>
                                    <span>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Activate engagement"]);
        echo "</span>
                                    <div class=\"accordion__body \" style=\"display:none;\">
            \t\t\t\t\t\t\t<p class=\"pt-3 d-flex flex-column\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Give your community a digital place where they can share their ideas and stay social even when meeting in person is not possible. "]);
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
";
        // line 149
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-6 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 153
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-3some.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mobile-screen mobile-screen mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-6 align-self-center\">
                    <div>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 157
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Maximize Attendee Experience"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 159
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Keep your attendees up-to-date at all times during your physical and virtual events and give them means to build relationships and stay connected from anywhere."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-speaker\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 166
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Session Documents<br> & Presentations"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-documents\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 170
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Speaker bios and maps"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 174
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Live Event Walls"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-qr-code\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 178
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Seamless <br>QR Code Check-ins"]);
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
        // line 191
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-6 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 195
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-6.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mobile-screen mobile-screen mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-6 align-self-center\">
                 <div>
                          <span class=\"h6 text-color hideme\">";
        // line 199
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Memberships"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 200
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Provide<br> Extra Value to Members"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 202
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Spoil your members like never before with an all-in-one app that lets them get most of their memberships from palm of their hand. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Renewal Management"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-directory\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 213
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Directory"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-membership-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 217
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Profile & Membership Card"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-solid\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 221
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Newsletters & Notifications"]);
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
        // line 235
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-6 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 239
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-2.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mobile-screen mobile-screen mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-6 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 243
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Conversations"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 244
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Let People Talk"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 246
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make it your business to enable everyone in your community develop lasting relationships with you and each other."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 253
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1-on-1 Chats"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-heart\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 257
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["GIFs and Emojis"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-documents\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 261
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Media & Location Sharing"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 265
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Rooms"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-lock\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 269
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Privacy Settings"]);
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
        // line 282
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-6 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 286
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-bsc.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mobile-screen mobile-screen mx-auto paygage-visual lazy fadeIn\">
                </div>
                <div class=\"col-lg-6 align-self-center\">
                 <div>
                            <span class=\"h6 text-color hideme\">";
        // line 290
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Business Cards"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 291
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Help Business Happen"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 293
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your community to create and share their own digital business cards, manage their contacts and effectively network with everyone no matter where they are."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row float-left\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 300
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Business Card Scanner"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-qr-code\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 304
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Personal QR-Codes"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 308
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Individual CRM"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-crm\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 312
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Profile"]);
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
        // line 326
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-6 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 330
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-myglue-5.svg");
        echo "\" alt=\"paygage is accessible\" class=\"img-fluid mobile-screen mobile-screen mx-auto paygage-visual lazy \">
                </div>
                <div class=\"col-lg-6 align-self-center\">
                    <div>
                            <span class=\"h6 text-color hideme\">";
        // line 334
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Showcase Sponsors"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 335
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Increase Revenue  "]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 337
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize the app by giving your sponsors in-app visibility with banner ads, profiles, and push notifications."]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row float-left\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invoice\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 344
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sponsor <br>& Exhibitor Profiles"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 348
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership<br> & Exhibitor Directory"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-edit-update\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 352
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Push <br>Notifications"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-ticket\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 356
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["ROI Tracking"]);
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
        // line 368
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-md-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                            <span class=\"h6 text-color text-center mx-auto hideme\">";
        // line 373
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["White-label App"]);
        echo "</span>
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 374
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make My Glue Your Own"]);
        echo "</h2>
                             <p class=\"tagline\"> ";
        // line 375
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create a unified and engaging experience aligned with your branding requirements for all of your events."]);
        echo " </p>
                        </div>
                        <div class=\"bullets hideme mx-auto pt-3\">
                                <div class=\"row mx-auto\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 381
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom login screen"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-refresh\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 385
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Fonts & Colours "]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-dash-2\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 389
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Logos"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-download\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 393
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Layouts"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 text-center mx-auto mt-1\">
                    <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#contact-paygage\">";
        // line 401
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Book a Demo"]);
        echo "</a>
                </div>
            </div>
        </div>

</section>
";
        // line 408
        echo "
";
        // line 409
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 410
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/glue-up-app.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 410,  586 => 409,  583 => 408,  574 => 401,  563 => 393,  556 => 389,  549 => 385,  542 => 381,  533 => 375,  529 => 374,  525 => 373,  518 => 368,  504 => 356,  497 => 352,  490 => 348,  483 => 344,  473 => 337,  468 => 335,  464 => 334,  457 => 330,  451 => 326,  435 => 312,  428 => 308,  421 => 304,  414 => 300,  404 => 293,  399 => 291,  395 => 290,  388 => 286,  382 => 282,  368 => 269,  361 => 265,  354 => 261,  347 => 257,  340 => 253,  330 => 246,  325 => 244,  321 => 243,  314 => 239,  308 => 235,  293 => 221,  286 => 217,  279 => 213,  272 => 209,  262 => 202,  257 => 200,  253 => 199,  246 => 195,  240 => 191,  226 => 178,  219 => 174,  212 => 170,  205 => 166,  195 => 159,  190 => 157,  183 => 153,  177 => 149,  163 => 70,  159 => 69,  154 => 67,  147 => 62,  143 => 61,  138 => 59,  131 => 54,  127 => 53,  122 => 51,  110 => 42,  104 => 39,  97 => 35,  85 => 26,  81 => 25,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/glue-up-app.htm", "");
    }
}
