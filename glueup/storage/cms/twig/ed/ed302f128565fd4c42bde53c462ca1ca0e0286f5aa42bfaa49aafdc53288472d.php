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

/* /var/www/html/glueup/themes/glueup/partials/site/offices.htm */
class __TwigTemplate_84b9513f4306a5cc156deea22ed968687864f78ca023bdc12d21c049c76ba468 extends \Twig\Template
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
        echo "<section id=\"offices\" class=\"section ";
        echo twig_escape_filter($this->env, ($context["background"] ?? null), "html", null, true);
        echo "\">
        <div class=\"container\">
\t\t\t";
        // line 3
        $context["string"] = "{{'Contact our office in '|_}}";
        // line 4
        echo "            <div class=\"row pb-5\">
                    <div class=\"col-lg-8 mx-auto \">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up Office Locations"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up is present in more than 40 countries and has offices across Asia, Europe, and North and Latin America."]);
        echo " </p>
                        </div>
                    </div>
            </div>
            ";
        // line 13
        echo "            ";
        if (twig_in_filter(($context["Location"] ?? null), [0 => "CN", 1 => "KR", 2 => "SG", 3 => "IN", 4 => "TW", 5 => "TH", 6 => "MY", 7 => "KH", 8 => "JP"])) {
            // line 14
            echo "             ";
            $context["active3"] = "show active";
            // line 15
            echo "             ";
            $context["active2"] = "";
            // line 16
            echo "             ";
            $context["active1"] = "";
            // line 17
            echo "            <div class=\"row justify-content-center\">
            \t<ul class=\"nav nav-pills pills-dark justify-content-center mx-auto mb-3\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-america-tab\" data-toggle=\"pill\" href=\"#pills-america\" role=\"tab\" aria-controls=\"pills-america\" aria-selected=\"false\">";
            // line 20
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Americas"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-emea-tab\" data-toggle=\"pill\" href=\"#pills-emea\" role=\"tab\" aria-controls=\"pills-emea\" aria-selected=\"false\">";
            // line 23
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Africa, Europe, the Middle East and Russia"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link active\" id=\"pills-asia-tab\" data-toggle=\"pill\" href=\"#pills-asia\" role=\"tab\" aria-controls=\"pills-asia\" aria-selected=\"true\">";
            // line 26
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Asia and the Pacific"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
            </div>
            ";
        } elseif (twig_in_filter(        // line 30
($context["Location"] ?? null), [0 => "RU", 1 => "TR", 2 => "ES", 3 => "FR"])) {
            // line 31
            echo "             ";
            $context["active2"] = "show active";
            // line 32
            echo "             ";
            $context["active3"] = "";
            // line 33
            echo "             ";
            $context["active1"] = "";
            // line 34
            echo "            <div class=\"row justify-content-center\">
            \t<ul class=\"nav nav-pills pills-dark justify-content-center mx-auto mb-3\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-america-tab\" data-toggle=\"pill\" href=\"#pills-america\" role=\"tab\" aria-controls=\"pills-america\" aria-selected=\"false\">";
            // line 37
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Americas"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link active\" id=\"pills-emea-tab\" data-toggle=\"pill\" href=\"#pills-emea\" role=\"tab\" aria-controls=\"pills-emea\" aria-selected=\"true\">";
            // line 40
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Africa, Europe, the Middle East and Russia"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-asia-tab\" data-toggle=\"pill\" href=\"#pills-asia\" role=\"tab\" aria-controls=\"pills-asia\" aria-selected=\"false\">";
            // line 43
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Asia and the Pacific"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
            </div>
            ";
        } else {
            // line 48
            echo "            ";
            $context["active1"] = "show active";
            // line 49
            echo "             ";
            $context["active3"] = "";
            // line 50
            echo "             ";
            $context["active2"] = "";
            // line 51
            echo "            <div class=\"row justify-content-center\">
            \t<ul class=\"nav nav-pills pills-dark justify-content-center mx-auto mb-3\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link active\" id=\"pills-america-tab\" data-toggle=\"pill\" href=\"#pills-america\" role=\"tab\" aria-controls=\"pills-america\" aria-selected=\"true\">";
            // line 54
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Americas"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-emea-tab\" data-toggle=\"pill\" href=\"#pills-emea\" role=\"tab\" aria-controls=\"pills-emea\" aria-selected=\"false\">";
            // line 57
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Africa, Europe, the Middle East and Russia"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-asia-tab\" data-toggle=\"pill\" href=\"#pills-asia\" role=\"tab\" aria-controls=\"pills-asia\" aria-selected=\"false\">";
            // line 60
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Asia and the Pacific"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
            </div>
            ";
        }
        // line 65
        echo "            <div class=\"row justify-content-center\">
            \t<div class=\"tab-content\" id=\"pills-tabContent\">
\t\t\t\t  <div class=\"tab-pane fade ";
        // line 67
        echo twig_escape_filter($this->env, ($context["active1"] ?? null), "html", null, true);
        echo "\" id=\"pills-america\" role=\"tabpanel\" aria-labelledby=\"pills-america-tab\">
\t\t\t\t  \t\t<div class=\"row justify-content-center\">
\t\t\t\t  \t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 71
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/usa.png");
        echo "\" alt=\"Glue Up Office in the USA\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Washington DC"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1775 Tysons Blvd, 5th Floor<br>Tysons, VA 22102"]);
        echo "</p>
\t\t\t\t\t\t\t\t    <a href=\"tel:1-888-218-1354\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">1-888-218-1354</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 82
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/mexico.png");
        echo "\" alt=\"Glue Up Office in Mexico\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mexico City"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    ";
        // line 86
        echo "\t\t\t\t\t\t\t\t    <a href=\"mailto:salesmx@glueup.com\" class=\"pb-4\"><i class=\"icon-email-campaigns\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">salesmx@glueup.com</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 87
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 93
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/brazil.png");
        echo "\" alt=\"Glue Up Office in Brazil\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 95
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sâo Paulo"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    ";
        // line 97
        echo "\t\t\t\t\t\t\t\t    <a href=\"mailto:salesbr@glueup.com\" class=\"pb-4\"><i class=\"icon-email-campaigns\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">salesbr@glueup.com</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 98
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"tab-pane fade ";
        // line 105
        echo twig_escape_filter($this->env, ($context["active2"] ?? null), "html", null, true);
        echo "\" id=\"pills-emea\" role=\"tabpanel\" aria-labelledby=\"pills-emea-tab\">
\t\t\t\t  \t\t
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 110
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/nairobi.png");
        echo "\" alt=\"Glue Up Office in Kenya\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nairobi"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mirage Towers, Waiyaki Way <br> Westlands, Floor M2 <br> Nairobi <br> Kenya"]);
        echo "</p>
\t\t\t\t\t\t\t\t    <a href=\"tel:+254 734-698-114\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+254 734-698-114</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 115
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 121
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/moscow.png");
        echo "\" alt=\"Glue Up Office in the USA\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 123
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Moscow"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 124
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Aviamotornaya Street 8,<br>Moscow"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+7(495)260-14-25\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+7(495)260-14-25</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 126
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 132
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/za.png");
        echo "\" alt=\"Glue Up Office in South Africa\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cape Town"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1 Bridgeway Road, Bridgeways Precinct,<br>Century City<br>Cape Town 7441<br>South Africa"]);
        echo "</p>
\t\t\t\t\t\t\t\t    <a href=\"tel:+27 62-971-3405\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+27 62-971-3405</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 137
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 143
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/istanbul.png");
        echo "\" alt=\"Glue Up Office in Turkey\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 145
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Istanbul"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 146
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Göktürk Cad. No:9 Kat:3 D:13,<br>Neo Yaşam İş Merkezi, Göktürk,<br>Istanbul, Turkey"]);
        echo "</p>
\t\t\t\t\t\t\t\t    <a href=\"tel:+90 212 322 9210\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+90 212 322 9210</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 148
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>";
        // line 154
        echo "\t\t\t\t  </div>
\t\t\t\t  <div class=\"tab-pane fade ";
        // line 155
        echo twig_escape_filter($this->env, ($context["active3"] ?? null), "html", null, true);
        echo "\" id=\"pills-asia\" role=\"tabpanel\" aria-labelledby=\"pills-asia-tab\">
\t\t\t\t  \t\t<div class=\"row justify-content-center\">
\t\t\t\t  \t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 159
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/beijing.png");
        echo "\" alt=\"Glue Up Office in Beijing, China\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 161
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Beijing"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 162
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Room 3-1, Tower D,<br>Guanghualu SOHO2<br>No. 9 Guanghua Road,<br>Chaoyang District<br>Beijing 100020"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:(+86) 138 1105 8450\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">(+86) 138 1105 8450</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 164
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 170
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/shanghai.png");
        echo "\" alt=\"Glue Up Office in Shanghai, China\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 172
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Shanghai"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 173
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["9th Floor, Tower B<br>China Overseas Building<br>838 S. Huangpi Road<br>Huangpu District<br>Shanghai 200025"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:(+86) 152-2117-7322\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">(+86) 152-2117-7322</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 175
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t  \t\t\t
\t\t\t            <div class=\"col-md-4 pt-4\">
\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 182
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/hk.png");
        echo "\" alt=\"Glue Up Office in the Hong Kong\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 184
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hong Kong"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 185
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["10/F, YF Life Tower,<br>33 Lockhart Road, Unit 7114,<br>Wanchai, Hong Kong"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+852 3905 2030\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+852 3905 2030</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 187
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 193
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/jakarta.png");
        echo "\" alt=\"Glue Up Office in the Jakarta Indonesia\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Jakarta"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 196
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Plaza Office Tower 41F,<br>Jl. M. H. Thamrin Kav. 28-30,<br>Jakarta, 10350,<br>Indonesia"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+62 21 2992 6654\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+62 21 2992 6654</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 198
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 204
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/seoul.png");
        echo "\" alt=\"Glue Up Office in the Seoul Korea\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 206
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Seoul"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 207
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["5, Yongmasan-ro 32 gil,<br>Gwangjin-gu<br>Seoul 04938,<br>South Korea"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+82-02-455-3700\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+82-02-455-3700</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 224
        echo "\t\t\t            <div class=\"col-md-4 pt-4\">
\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 226
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/manila.png");
        echo "\" alt=\"Glue Up Office in The Philippines\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 228
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manila"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 229
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["928 Arnaiz Avenue<br>Barangay San Lorenzo<br>Makati City<br>Manila, 1223<br>Philippines"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+63 (2) 8396-5621\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+63 (2) 8396-5621</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 237
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/singapore.png");
        echo "\" alt=\"Glue Up Office in Singapore\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 239
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Singapore"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["9 Battery Road<br>MYP Centre<br>Office #27-107<br>Singapore 049910"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+65 6815 0656\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+65 6815 0656</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 242
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 248
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/bangalore.png");
        echo "\" alt=\"Glue Up Office in India\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 250
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Bangalore"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 251
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["43 - Residency Rd, Shanthala Nagar,<br>Ashok Nagar, Bengaluru,<br>Karnataka 560025 India"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+91-984-414-1817\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+91-984-414-1817</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 253
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t            
            </div>
            </div>
       </div>
   </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/offices.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 253,  526 => 251,  522 => 250,  517 => 248,  508 => 242,  503 => 240,  499 => 239,  494 => 237,  485 => 231,  480 => 229,  476 => 228,  471 => 226,  467 => 224,  460 => 209,  455 => 207,  451 => 206,  446 => 204,  437 => 198,  432 => 196,  428 => 195,  423 => 193,  414 => 187,  409 => 185,  405 => 184,  400 => 182,  390 => 175,  385 => 173,  381 => 172,  376 => 170,  367 => 164,  362 => 162,  358 => 161,  353 => 159,  346 => 155,  343 => 154,  335 => 148,  330 => 146,  326 => 145,  321 => 143,  312 => 137,  307 => 135,  303 => 134,  298 => 132,  289 => 126,  284 => 124,  280 => 123,  275 => 121,  266 => 115,  261 => 113,  257 => 112,  252 => 110,  244 => 105,  234 => 98,  231 => 97,  227 => 95,  222 => 93,  213 => 87,  210 => 86,  206 => 84,  201 => 82,  192 => 76,  187 => 74,  183 => 73,  178 => 71,  171 => 67,  167 => 65,  159 => 60,  153 => 57,  147 => 54,  142 => 51,  139 => 50,  136 => 49,  133 => 48,  125 => 43,  119 => 40,  113 => 37,  108 => 34,  105 => 33,  102 => 32,  99 => 31,  97 => 30,  90 => 26,  84 => 23,  78 => 20,  73 => 17,  70 => 16,  67 => 15,  64 => 14,  61 => 13,  54 => 8,  50 => 7,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/offices.htm", "");
    }
}
