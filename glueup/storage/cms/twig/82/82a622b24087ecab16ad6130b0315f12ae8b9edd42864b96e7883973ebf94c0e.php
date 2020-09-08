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

/* /var/www/html/glueup/themes/glueup/pages/landing/thank-you.htm */
class __TwigTemplate_bb2b75efc41c99a8c1db0f67dc2f0c0242cb8696699e4d95521fb55252586b37 extends \Twig\Template
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
        echo "<div class=\"generic \" id=\"generic\">  
        <div class=\"container\">
            <div class=\"row pt-5\">
                
                <div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
                      <h1>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Thank <span class=\"line\"><ins> you!</ins></span>"]);
        echo "</h1>
                       <p class=\"tagline pb-3\"> ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A Glue Up expert will be in touch with you shortly. "]);
        echo " </p>
                       <p class=\"tagline pb-3\"> ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["In the meantime, discover what you can do with our powerful all-in-one solutions and read our latest thinking."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" If you need to contact us immediately, please reach out via the live chat in the right corner of the screen or "]);
        echo "<a href=\" ";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "#offices\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["call one of our offices."]);
        echo "</a> </p>


                </div>
               
            </div>
        </div> 
</div>
<section>
<div class=\"cont";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "ainer\">
    <div class=\"row\">
        <div class=\"col-md-12 hero ml-auto pb-2\">
                  ";
        // line 27
        echo "                  <div class=\"row pt-2 pb-5\">
                      
                      ";
        // line 29
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["eventPosts"] ?? null), "posts", [], "any", false, false, false, 29);
        // line 30
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "post", [], "any", false, false, false, 30), "slice", [0 => 0, 1 => 1], "method", false, false, false, 30), "categories", [], "any", false, false, false, 30), "slice", [0 => 0, 1 => 1], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 32), "html", null, true);
            echo "\"  class=\"read-more d-flex\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                                                        </span>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 36
            echo "                                                
                                                <div class=\"col-md-3 hero pb-2\">
                                              <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"\">
                        ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 39), "count", [], "any", false, false, false, 39) > 0)) {
                // line 40
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 40), "last", [], "any", false, false, false, 40), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, false, 40), "html", null, true);
                echo "\" />
                        ";
            } else {
                // line 42
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                        ";
            }
            // line 44
            echo "                         </a>
                                                <h5 class=\"pt-2\">
                                                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 46), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 48
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 48)), 150]);
            echo "</p>
                                                ";
            // line 54
            echo "                                                </div>
                                                
                                                 
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                  </div>
            </div>
       </div>
 </div>
</section>
<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What makes our solutions special?"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A successful partnership starts with a great software that works for both you and your community."]);
        echo "<br>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Not only do our award-winning solutions amplify engagement, they streamline operations for organizations of all sizes."]);
        echo " </p>
                        </div>
                    </div>
            </div>
            <div class=\"row justify-content-center mx-auto\">
            \t<div class=\"col-md-8 mx-auto\">
            \t\t<div class=\"row\">
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 hideme\">
                              <div class=\"card-body pt-4 \">
                                <img src=\"";
        // line 79
        echo $this->extensions['System\Twig\Extension']->mediaFilter("capterra-top-20-img.png");
        echo "\" alt=\"Glue Up Top 20 Rated in Capterra\" class=\" img-fluid mx-auto lazy fadeIn\" style=\"max-height: 120px;\">
                                ";
        // line 81
        echo "                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 hideme\">
                              <div class=\"card-body pt-4\">
                              \t<img alt=\"Glue Up is one of GetApp Category Leaders for Association Management Jul-20\" title=\"Category Leaders Badge\" style=\"width: 140px; border: 0px\" src=\"https://cdn0.capterra-static.com/assets/images/gdm-badges/GA_Badge_Category%20Leaders_Full%20Color.png\">
                                 ";
        // line 89
        echo "                                ";
        // line 90
        echo "                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 hideme\">
                              <div class=\"card-body pt-4 \">
                                ";
        // line 97
        echo "                                <img alt=\"Glue Up is one of the Software Advice Frontrunners for Association Management Jul-20\" title=\"Frontrunners Badge\" style=\"width: 140px; border: 0px\" src=\"https://cdn0.capterra-static.com/assets/images/gdm-badges/SA_FrontRunners_Full%20Color.png\">
                                ";
        // line 99
        echo "                              </div>
                            </div>
                        </div>
                       </div>
                  </div>
            </div>
        </div>
</section>
";
        // line 175
        echo "<section class=\"section\">
        <div class=\"container\">
            ";
        // line 185
        echo "            <div class=\"row justify-content-center mx-auto\">
                <div class=\"col-md-8 py-3 mx-auto\">
                            <div class=\"card pricing  h-100 shadow-sm\">
                              <div class=\"card-body pt-4 text-center\">
                              \t\t <h2 class=\"mt-3 mb-4 text-center position-relative content-title\">";
        // line 189
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Becoming a Glue Up Client"]);
        echo "</h2>
                           \t\t\t  <p class=\"tagline text-center mb-4\">";
        // line 190
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1, 2, 3. Signing Up is That Easy"]);
        echo " </p>
                                   <ul class=\"pricing-list\">
                                        <li class=\"pricing-list-item text-left\"><i class=\"icon-visible\"></i>
                                        <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 193
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get a Demo"]);
        echo "</h4>
                                  \t\t<p class=\"card-text mb-5\">";
        // line 194
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Request a demo anywhere on this website and we’ll show you our platform in a customized demo right away"]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" or at your preferred time later in a week."]);
        echo "</p></span>
                                        </li>
                                        <li class=\"pricing-list-item text-left\"><i class=\"icon-cheque\"></i>
                                        <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 197
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Review proposal and e-sign agreement"]);
        echo "</h4>
                                  \t\t<p class=\"card-text mb-5\">";
        // line 198
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["After your personal demo is over, we will prepare a tailor-made proposal for your organization the same day."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" If all looks good we will send you an e-agreement for signing. "]);
        echo "</p></span>
                                        </li>
                                        <li class=\"pricing-list-item text-left\"><i class=\"icon-flag\"></i>
                                        <span class=\"d-inline-block pt-3\"><h4 class=\"link-title mb-2\">";
        // line 201
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Going live"]);
        echo "</h4>
                                  \t\t<p class=\"card-text mb-5\">";
        // line 202
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With the help of your dedicated Customer Success Manager, we’ll get you onboarded and trained quickly."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" You can begin creating events, running memberships, and collecting payments in no time."]);
        echo "</p></span>
                                        </li>
                                   </ul>
                                   
                              </div>
                            </div>
                        </div>
              </div>
                </div>
</section>

<section class=\"section\" id=\"faq\">
<div class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"section-title\">
                <small>";
        // line 217
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["FAQ"]);
        echo "</small>
                <h2>";
        // line 218
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Frequently Asked Questions"]);
        echo "</h2>
            </div>

            <div class=\"row pt-4\">
                <div class=\"col-md-6\">
                   <h4 class=\"mb-3 hideme\">";
        // line 223
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Will I be billed monthly or annually?"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 224
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All contracts are billed annually by default."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" however, if you want to use us just for one event/webinar or a special project, we can come up with a pricing that will suit your needs better."]);
        echo "</p>
\t\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 225
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Is my data safe with Glue Up?"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 226
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Confidentiality and "]);
        echo "<a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("security");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Security"]);
        echo "</a>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" is our number one priority."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" The platform has sophisticated security features and follows all latest data regulations like GDPR so you and your community are always protected. "]);
        echo "</p>
\t\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 227
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What happens if I exceed the agreed plan?"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 228
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["You can easily get in touch with your Customer Success Manager to increase the limits."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Add-ons and limit upgrades for events, emails, admins, contacts or integrations can be purchased at any time."]);
        echo "</p>
\t\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 229
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Does Glue Up integrate with my website?"]);
        echo "</h4>
\t\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 230
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We provide customizable widgets that you can embed anywhere on the internet."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" We can also help you with access to our API and Webhooks so you can integrate with our software just the way you need."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" You can also sign up for our "]);
        echo "<a class=\"\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/website");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["professional website solution"]);
        echo "</a>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" that has all the Glue Up integrations built-in already."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" What's more, you can have new website up and running in less than a week!"]);
        echo "</p>
\t\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Who should I contact if I have more questions?"]);
        echo "</h4>
\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 232
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Please email <a href=\"mailto:sales@glueup.com\">sales@glueup.com</a> or reach out via live chat in the right corner of the website for any questions you might have. "]);
        echo "</p>
                </div>
                <div class=\"col-md-6\">
                    
\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 236
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What happens after I sign the agreement?"]);
        echo "</h4>
\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 237
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Customer Success Manager will immediately create your Glue Up account and get in touch to jumpstart your onboarding process."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" You will receive a personal kick-off call and training to get you up and running as soon as possible. Most Glue Up clients go live in less than a week after signing the agreement. "]);
        echo "</p>
\t\t\t\t\t
\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 239
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What type of support can I expect?"]);
        echo "</h4>
\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Once on board, you will gain access to Glue Up’s online HelpDesk with how-to articles, FAQs, practical tutorials and manuals."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["You can also sign up for regular webinars to get tips on how to get the maximum from the platform."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" And if you still have some questions, you can contact us via live chat, email or phone."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" For larger clients, our dedicated Customer Success Managers are ready to help you."]);
        echo "</p>
\t\t\t\t\t
\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 242
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Who uses Glue Up?"]);
        echo "</h4>
\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 243
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our cloud-based management solutions are used by organizations of all sizes in more than 50 countries around the world."]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" They range from multinational enterprises and event agencies, through chambers of commerce and associations, to start-ups and nonprofit organizations."]);
        echo "</p>
\t\t\t\t\t
\t\t\t\t\t<h4 class=\"mb-3 hideme\">";
        // line 245
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Where does Glue Up work?"]);
        echo "</h4>
\t\t\t\t\t<p class=\"light-font mb-5\">";
        // line 246
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We are a global company headquarted in the US. We provide cloud solutions in multiple languages and don’t know any physical borders."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" We currently maintain over 10 offices around the world. Check out our "]);
        echo "<a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "#offices\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Offices"]);
        echo "</a></p>

                </div>
            </div>
        </div>

    </div>
</section>
";
        // line 254
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/pricing-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 255
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 256
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/landing/thank-you.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 256,  421 => 255,  417 => 254,  401 => 246,  397 => 245,  390 => 243,  386 => 242,  376 => 240,  372 => 239,  365 => 237,  361 => 236,  354 => 232,  350 => 231,  334 => 230,  330 => 229,  325 => 228,  321 => 227,  310 => 226,  306 => 225,  301 => 224,  297 => 223,  289 => 218,  285 => 217,  266 => 202,  262 => 201,  255 => 198,  251 => 197,  244 => 194,  240 => 193,  234 => 190,  230 => 189,  224 => 185,  220 => 175,  210 => 99,  207 => 97,  199 => 90,  197 => 89,  188 => 81,  184 => 79,  169 => 69,  165 => 68,  153 => 58,  144 => 54,  140 => 48,  133 => 46,  129 => 44,  123 => 42,  117 => 40,  115 => 39,  111 => 38,  107 => 36,  102 => 35,  91 => 32,  88 => 31,  83 => 30,  81 => 29,  77 => 27,  69 => 17,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/landing/thank-you.htm", "");
    }
}
