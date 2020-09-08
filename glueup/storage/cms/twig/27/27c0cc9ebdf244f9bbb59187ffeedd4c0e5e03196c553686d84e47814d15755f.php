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

/* /var/www/html/glueup/themes/glueup/pages/platform/event-management.htm */
class __TwigTemplate_0457f01fb71a0f32ba89ac4a67828f0d6ebcaa2350b9f941707737f4235b797a extends \Twig\Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-events-feature.svg");
        echo "\" class=\"paygage-visual\" alt=\"logo\">

                </div>
                <div class=\"col-md-6 hero align-self-center text-left\">
                    <p class=\"tagline mb-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo " </p>
                      <h1>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage Your Events <span class=\"line\"><ins>All-in-one</ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Take care of the whole event lifecycle of your online and offline events from the first idea to follow-up with one platform."]);
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
\t<div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-md-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Own your events at every stage"]);
        echo "</h2>
                             <p class=\"tagline\"> ";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["From small workshops and webinars to multi-day summits with thousands of attendees, Glue Up’s automated events platform makes event planning faster and more efficient for the whole team."]);
        echo "</p>
                        </div>
                    </div>
            </div>
        <div class=\"col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-2 mx-auto pt-5\">
       <div class=\"col-md-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Before"]);
        echo "</h2>
                        </div>
                    </div>
            <ul class=\"timeline timeline-centered\">               
                <li class=\"timeline-item pb-5\">
                    <div class=\"timeline-marker\"></div>
                    <div class=\"timeline-content pt-2 pb-5\">
                        <h4 class=\"timeline-title\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create"]);
        echo "</h4>
                        ";
        // line 42
        echo "                        <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ready, set, go! <br>That easy."]);
        echo "</h2>
                        <p>";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Set up one or hundred high-converting event pages without compromising on your branding."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Create custom registration forms, activate supported payment options, add speakers and agenda. All in just a few clicks."]);
        echo " </p>
                        <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-publishing\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Website Builder"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-event-optimize\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Registration Forms"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-blueprint\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Blueprint & Duplication"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-ticket\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 60
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Ticketing & Payments"]);
        echo "</p>
                                    </div>
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-template\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Templates"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>                        
                        
                    </div>
                    <div class=\"timeline-info\">
                        <img src=\"";
        // line 71
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-event-templates.svg");
        echo "\" alt=\"Glue Up Helps you create and manage events efficiently\" class=\"img-fluid mx-auto paygage-visual lazy \">
                    </div>
                </li>
                <li class=\"timeline-item pb-5\">
                    
                    <div class=\"timeline-marker\"></div>
                    <div class=\"timeline-content pt-2 pb-5\">
                         <h4 class=\"timeline-title\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Promote"]);
        echo "</h4>
                        <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 79
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tell the world <br>about your event"]);
        echo "</h2>
                        <p>";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline your event marketing and send newsletters, branded event invitations and other emails to targeted audiences."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Share your event page on your website or social media channels for even more exposure. "]);
        echo "</p>
                        <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-campaigns\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 85
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Branded Event Invitations"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 89
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automated Notifications"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 93
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Social Media Integrations"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-button\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 97
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Drag & Drop Email Editor"]);
        echo "</p>
                                    </div>
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-filter\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["List Segmentation"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class=\"timeline-info\">
                        <img src=\"";
        // line 107
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-promote.svg");
        echo "\" alt=\"Glue Up Helps you promote your events efficiently\" class=\"img-fluid mx-auto paygage-visual lazy \">
                    </div>
                </li>
                <li class=\"timeline-item period\">
                    <div class=\"timeline-info\"></div>
                    <div class=\"timeline-marker\"></div>
                    <div class=\"timeline-content\">
                        <h2 class=\"timeline-title\">";
        // line 114
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["During"]);
        echo "</h2>
                    </div>
                </li>
                <li class=\"timeline-item pb-5\">
                    <div class=\"timeline-marker\"></div>
                    <div class=\"timeline-content pt-2 pb-5\">
                        <h4 class=\"timeline-title\">";
        // line 120
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Check In"]);
        echo "</h4>
                        ";
        // line 122
        echo "                        <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Make first impressions memorable"]);
        echo "</h2>
                        <p>";
        // line 123
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Remind attendees about the event with push notifications and automatic reminders."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Then welcome them online at your virtual or physical event with smooth check-ins, and provide badges or digital business cards."]);
        echo "</p>
                        <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-qr-code\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 128
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["QR Code Check-ins"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-attendees-badge\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 132
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Badge Design & Printing"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-notifications\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 136
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Custom Notifications"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-planner\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 140
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Agenda, Maps, Bios"]);
        echo "</p>
                                    </div>
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-documents\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 144
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Documents"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>                        
                        
                    </div>
                    <div class=\"timeline-info\">
                        <img src=\"";
        // line 151
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-checkin.svg");
        echo "\" alt=\"Glue Up helps you deliver smooth checkins\" class=\"img-fluid mx-auto paygage-visual lazy \">
                    </div>
                </li>
                <li class=\"timeline-item pb-5\">
                    
                    <div class=\"timeline-marker\"></div>
                    <div class=\"timeline-content pt-2 pb-5\">
                         <h4 class=\"timeline-title\">";
        // line 158
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage"]);
        echo "</h4>
                        <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 159
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Know how you do <br>in real time"]);
        echo "</h2>
                        <p>";
        // line 160
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Track attendance, sponsorship sales, profit & loss from each event and performance of your event campaigns from anywhere."]);
        echo "</p>
                        <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-presentation\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 165
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Profit & Loss Reports"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 169
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Live Check-in Metrics"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-add-contact\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 173
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Walk-in Attendees"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-exhibitor\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 177
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Exhibitor Management"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class=\"timeline-info\">
                        <img src=\"";
        // line 183
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-manage.svg");
        echo "\" alt=\"Glue Up helps you manage your events efficiently\" class=\"img-fluid mx-auto paygage-visual lazy \">
                    </div>
                </li>
                <li class=\"timeline-item pb-5\">
                    
                    <div class=\"timeline-marker\"></div>
                    <div class=\"timeline-content pt-2 pb-5\">
                         <h4 class=\"timeline-title\">";
        // line 190
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Engage"]);
        echo "</h4>
                        <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 191
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Exceed attendes’ expectations"]);
        echo "</h2>
                        <p>";
        // line 192
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your event community to create and share their own digital business cards."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Manage their contacts and effectively network with everyone before, during, and after your physical and online events."]);
        echo "</p>
                        <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 197
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Attendee Chat"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-crm\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 201
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Individual CRM"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 205
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Business Card Exchange"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-social-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Rooms"]);
        echo "</p>
                                    </div>
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-mobile-check\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 213
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up Mobile App"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class=\"timeline-info\">
                        <img src=\"";
        // line 219
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-engage.svg");
        echo "\" alt=\"Glue Up Helps you engage your attendees\" class=\"img-fluid mx-auto paygage-visual lazy \">
                    </div>
                </li>
                <li class=\"timeline-item period\">
                    <div class=\"timeline-info\"></div>
                    <div class=\"timeline-marker\"></div>
                    <div class=\"timeline-content\">
                        <h2 class=\"timeline-title\">";
        // line 226
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["After"]);
        echo "</h2>
                    </div>
                </li>
                <li class=\"timeline-item pb-5\">
                    <div class=\"timeline-marker\"></div>
                    <div class=\"timeline-content pt-2 pb-5\">
                        <h4 class=\"timeline-title\">";
        // line 232
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Follow Up"]);
        echo "</h4>
                        ";
        // line 234
        echo "                        <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ask for feedback"]);
        echo "</h2>
                        <p>";
        // line 235
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easily create surveys, quizzes, and polls to measure and understand feedback so you can improve your events."]);
        echo "</p>
                        <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-button\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy Setup"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-help\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 244
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Unlimited Questions"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-speaker\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 248
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Expert-Written Templates"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-share\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 252
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Survey logic"]);
        echo "</p>
                                    </div>
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 256
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tracking & Analytics"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>                        
                        
                    </div>
                    <div class=\"timeline-info\">
                        <img src=\"";
        // line 263
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-feedback.svg");
        echo "\" alt=\"Glue Up helps you follow up after the event\" class=\"img-fluid mx-auto paygage-visual lazy \">
                    </div>
                </li>
                <li class=\"timeline-item pb-5\">
                    
                    <div class=\"timeline-marker\"></div>
                    <div class=\"timeline-content pt-2 pb-5\">
                         <h4 class=\"timeline-title\">";
        // line 270
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Evaluate"]);
        echo "</h4>
                        <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 271
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Understand the Impact <br>of Your Events"]);
        echo "</h2>
                        <p>";
        // line 272
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Analyze your performance with powerful dashboards and reports to get insights into your attendee’s activity from events, email marketing, sales or finance. "]);
        echo "</p>
                        <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-analytics\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 277
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["ROI Insights "]);
        echo "</p>
                                    </div>      
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-email-solid\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 281
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Analytics"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-dash-2\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 285
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Customizable Dashboards"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-invoice\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 289
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automatic Invoices & Receipts"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class=\"timeline-info\">
                        <img src=\"";
        // line 295
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-analyze.svg");
        echo "\" alt=\"Glue Up helps you analyze your performance\" class=\"img-fluid mx-auto paygage-visual lazy \">
                    </div>
                </li>
                <li class=\"timeline-item pb-5\">
                    
                    <div class=\"timeline-marker\"></div>
                    <div class=\"timeline-content pt-2 pb-5\">
                         <h4 class=\"timeline-title\">";
        // line 302
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Scale Up"]);
        echo "</h4>
                        <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 303
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Better <br>and Go Again "]);
        echo "</h2>
                        <p>";
        // line 304
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Convert your most successful events into templates."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Make quick edits and host new events with similar registration processes, pricing, sponsors, and invite new and previous atteendees to save even more time. "]);
        echo "</p>
                        <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-documents\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 309
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Easy Event Duplication "]);
        echo "</p>
                                    </div>      
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-crm\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 313
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up CRM"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-translation-switch\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 317
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Multi-language Support"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-blueprint\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 321
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Blueprints "]);
        echo "</p>
                                    </div>
                                    <div class=\"col-md text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-opportunity\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 325
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Opportunities Pipeline"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class=\"timeline-info\">
                        <img src=\"";
        // line 331
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-scaleup.svg");
        echo "\" alt=\"Glue Up helps scale up your events\" class=\"img-fluid mx-auto paygage-visual lazy \">
                    </div>
                </li>
                
                ";
        // line 346
        echo "            </ul>
        </div>
    </div>
</div>
</section>
<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center mx-auto pb-3 pb-md-0 text-center\">
                <div>
                            <span class=\"h6 text-color hideme\">";
        // line 356
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Events"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  hideme\">";
        // line 357
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize & Enhance <br>Your Webinars"]);
        echo "</h2>
                            <div class=\"about-content  hideme\">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 359
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Run webinars and other online events from an all-in-one platform. Provide premium and seamless experience to attendees and marketing exposure to your sponsors and partners. "]);
        echo "
    \t\t\t\t\t\t     </p>
                             </div>
                
                  <img src=\"";
        // line 363
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-webinars.svg");
        echo "\" alt=\"Glue Up helps you monetize your webinars\" class=\"img-fluid mx-auto paygage-visual lazy \">
                             <div class=\"bullets hideme pt-3\">
                                <div class=\"row\">
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-star-full\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 368
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Premium Branding Options"]);
        echo "</p>
                                    </div>      
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-sponsor\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 372
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sponsor Promotion"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-chat\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 376
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Attendeee Chat"]);
        echo "</p>
                                    </div>  
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-document\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 380
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Webinar Documents"]);
        echo "</p>
                                    </div>
                                    <div class=\"col mt-3 text-center mr-auto\">
                                        <i class=\"bullet-icon shadow-sm align-middle icon-contact-card\"></i>
                                        <p class=\"bullet-small text-center pt-4\">";
        // line 384
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Digital Business Cards"]);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                </div>
                
            </div>

        </div>
</section>
";
        // line 395
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 397
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 402
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more about Associations and Glue Up"]);
        echo "</h2>
                             ";
        // line 404
        echo "                        </div>
                    </div>
            </div>
             ";
        // line 407
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['event'] = "associations"        ;
        $context['__cms_partial_params']['wp1'] = "associations"        ;
        $context['__cms_partial_params']['wp2'] = "event"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("industry/industry-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 408
        echo "            </div>
        </div>

</section>
";
        // line 412
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/platform/event-management.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  732 => 412,  726 => 408,  719 => 407,  714 => 404,  710 => 402,  703 => 397,  699 => 395,  686 => 384,  679 => 380,  672 => 376,  665 => 372,  658 => 368,  650 => 363,  643 => 359,  638 => 357,  634 => 356,  622 => 346,  615 => 331,  606 => 325,  599 => 321,  592 => 317,  585 => 313,  578 => 309,  569 => 304,  565 => 303,  561 => 302,  551 => 295,  542 => 289,  535 => 285,  528 => 281,  521 => 277,  513 => 272,  509 => 271,  505 => 270,  495 => 263,  485 => 256,  478 => 252,  471 => 248,  464 => 244,  457 => 240,  449 => 235,  444 => 234,  440 => 232,  431 => 226,  421 => 219,  412 => 213,  405 => 209,  398 => 205,  391 => 201,  384 => 197,  375 => 192,  371 => 191,  367 => 190,  357 => 183,  348 => 177,  341 => 173,  334 => 169,  327 => 165,  319 => 160,  315 => 159,  311 => 158,  301 => 151,  291 => 144,  284 => 140,  277 => 136,  270 => 132,  263 => 128,  253 => 123,  248 => 122,  244 => 120,  235 => 114,  225 => 107,  216 => 101,  209 => 97,  202 => 93,  195 => 89,  188 => 85,  179 => 80,  175 => 79,  171 => 78,  161 => 71,  151 => 64,  144 => 60,  137 => 56,  130 => 52,  123 => 48,  114 => 43,  109 => 42,  105 => 40,  95 => 33,  85 => 26,  81 => 25,  69 => 15,  64 => 14,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/platform/event-management.htm", "");
    }
}
