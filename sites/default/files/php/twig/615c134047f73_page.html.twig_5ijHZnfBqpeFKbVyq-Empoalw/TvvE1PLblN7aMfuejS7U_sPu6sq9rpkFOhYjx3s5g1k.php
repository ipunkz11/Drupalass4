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

/* themes/restaurant_ds/templates/layout/page.html.twig */
class __TwigTemplate_acfb01f63c0d3ceb0b7d75539efd91f76ecbc43a1871907e71277fa23784897e extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
    <div id=\"site-header\">
        <header id=\"header\" class=\"header-block-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"main-menu\">
                        <!-- navbar -->
                        <nav class=\"navbar navbar-default\" id=\"mainNav\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                                <div class=\"logo\">
                                   ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
                                </div>
                            </div>
                            ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
  <!-- end site-header -->
  <div class=\"highlighted\">
    ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
  </div>
  ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
    <div id=\"footer\" class=\"footer-main\">
        <div class=\"footer-box pad-top-70\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"footer-in-main\">
                        ";
        // line 42
        if ((($context["logo_path"] ?? null) != "")) {
            // line 43
            echo "                            <div class=\"footer-logo\">
                                <div class=\"text-center\">
                                    <img src=\"";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo_path"] ?? null), 45, $this->source), "html", null, true);
            echo "\" alt=\"\" />
                                </div>
                            </div>
                        ";
        }
        // line 49
        echo "                        <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"footer-box-a\">
                                ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
                                <ul class=\"socials-box footer-socials pull-left\">
                                    <li>
                                        <a href=\"";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 54, $this->source), "html", null, true);
        echo "\">
                                            <div class=\"social-circle-border\"><i class=\"fa  fa-facebook\"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 59, $this->source), "html", null, true);
        echo "\">
                                            <div class=\"social-circle-border\"><i class=\"fa fa-twitter\"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["googleplus"] ?? null), 64, $this->source), "html", null, true);
        echo "\">
                                            <div class=\"social-circle-border\"><i class=\"fa fa-google-plus\"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest"] ?? null), 69, $this->source), "html", null, true);
        echo "\">
                                            <div class=\"social-circle-border\"><i class=\"fa fa-pinterest\"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 74, $this->source), "html", null, true);
        echo "\">
                                            <div class=\"social-circle-border\"><i class=\"fa fa-linkedin\"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"footer-box-b\">
                                ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"footer-box-c\">
                                <h3>";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_us_title"] ?? null), 93, $this->source), "html", null, true);
        echo "</h3>
                                <p>
                                    <i class=\"fa fa-map-signs\" aria-hidden=\"true\"></i>
                                    <span>";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 96, $this->source), "html", null, true);
        echo "</span>
                                </p>
                                <p>
                                    <i class=\"fa fa-mobile\" aria-hidden=\"true\"></i>
                                    <span>";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 100, $this->source), "html", null, true);
        echo "</span>
                                </p>
                                <p>
                                    <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                                    <span><a href=\"mailto:";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 104, $this->source), "html", null, true);
        echo "\"></a>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 104, $this->source), "html", null, true);
        echo "</span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"footer-box-d\">
                                ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id=\"copyright\" class=\"copyright-main\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <h6 class=\"copy-title\">";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright"] ?? null), 126, $this->source), "html", null, true);
        echo " | HTML designed by <a href=\"https://melodythemes.com\" target=\"_blank\">Melody themes</a> </h6>
                            <h6 class=\"copy-title\">Drupal Theme developed by <a href=\"https://drupalslave.com\" target=\"_blank\">Drupal Slave</a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->
";
    }

    public function getTemplateName()
    {
        return "themes/restaurant_ds/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 126,  207 => 112,  194 => 104,  187 => 100,  180 => 96,  174 => 93,  164 => 86,  149 => 74,  141 => 69,  133 => 64,  125 => 59,  117 => 54,  111 => 51,  107 => 49,  100 => 45,  96 => 43,  94 => 42,  85 => 36,  80 => 34,  63 => 20,  57 => 17,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/restaurant_ds/templates/layout/page.html.twig", "/var/www/html/assdrupal/themes/restaurant_ds/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 42);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
