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

/* experiences.twig */
class __TwigTemplate_1bfd51ad16d40c19fe336a952e9d7447fd9cc1f279f0750dd7a328b5d94f3cb0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "experiences.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Expériences - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<!-- Section Experiences -->  
<h1 class=\"text-center my-5\">Mes Expériences</h1>
   
<div class=\"row row-cols-1 row-cols-md-2 g-4\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["experiences"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            echo " 
        <div class=\"col\">
            <div class=\"card text-center border-dark m-3 h-100\">
                <div class=\"card-header\">
                    <h4>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "TITLE", [], "any", false, false, false, 14), "html", null, true);
            echo "</h4>
                </div>
                <div class=\"card-body\">
                    <h6 class=\"card-subtitle mb-2 text-muted\"><strong>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "COMPANY", [], "any", false, false, false, 17), "html", null, true);
            echo "</strong></h6>
                    <small class=\"text-muted\"><em> ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "START_DATE", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
            echo "</em>  -  <em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "END_DATE", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
            echo "</em> </small>
                    <p class=\"card-text\">";
            // line 19
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "DESCRIPTION", [], "any", false, false, false, 19), "html", null, true));
            echo " </p>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</div>                  
<!-- Section Experiences-End -->
";
    }

    public function getTemplateName()
    {
        return "experiences.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  91 => 19,  85 => 18,  81 => 17,  75 => 14,  66 => 10,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "experiences.twig", "/var/www/html/Challenges_la_fabrik/portfolio_challenge/src/templates/experiences.twig");
    }
}
