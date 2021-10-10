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

/* themes/restaurant_ds/templates/layout/page--404.html.twig */
class __TwigTemplate_9a781164447db246cce7b97e928ce13358cc6ef787af0fbd3f63b62b24de3403 extends \Twig\Template
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
    <div id=\"banner\" class=\"banner full-screen-mode\">
        <div class=\"container pr\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"banner-static\">
                    <div class=\"banner-text\">
                        <div class=\"banner-cell\">
                            <h1>404  Page <span class=\"typer\" id=\"some-id\" data-delay=\"200\" data-delim=\":\"data-words=\" Not found : may be deleted\" data-colors=\"red\"></span><span class=\"cursor\" data-cursorDisplay=\"_\" data-owner=\"some-id\"></span></h1>
                           <h2>Sorry. We can't find a page.</h2>
                            <p>
                              The Page you are looking for might have a removed, had its name changed, or its temporarily unavailable.
                            </p>  
                                <div class=\"book-btn\">
                                    <a class=\"table-btn hvr-underline-from-center\" href=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 14, $this->source), "html", null, true);
        echo "\">
                                        Go Home
                                    </a>
                                </div>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->";
    }

    public function getTemplateName()
    {
        return "themes/restaurant_ds/templates/layout/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/restaurant_ds/templates/layout/page--404.html.twig", "/var/www/html/assdrupal/themes/restaurant_ds/templates/layout/page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
