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

/* portfolio.twig */
class __TwigTemplate_5287cb50f563ef323efb12ae406c4895ecee4365836222adcabd0410c8e2c3f8 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "portfolio.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Portfolio - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<!-- Section Portfolio -->
<h1 class=\"text-center my-5\">Mon Portfolio</h1>
    
<div class=\"row row-cols-1 row-cols-md-2 g-4\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["portfolios"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            echo " 
        <div class=\"col\">
            <div class=\"card text-center border-dark m-3 h-100\">
                <div class=\"card-header\">
                    <h4>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["portfolio"], "TITLE", [], "any", false, false, false, 14), "html", null, true);
            echo "</h4>
                </div>
                <div class=\"card-body\">  
                    <span class=\"card-subtitle mb-2  badge rounded-pill bg-primary\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["portfolio"], "TAG", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
                    <p class=\"card-text  text-left\">";
            // line 18
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["portfolio"], "DESCRIPTION", [], "any", false, false, false, 18), "html", null, true));
            echo " </p>
                </div>
                <div class=\"card-footer text-muted\">
                    <a href=";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["portfolio"], "URL", [], "any", false, false, false, 21), "html", null, true);
            echo " class=\"btn btn-outline-dark rounded-pill btn-sm\">
                        GitHub
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div> 
<!-- Section Portfolio-End -->
";
    }

    public function getTemplateName()
    {
        return "portfolio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  91 => 21,  85 => 18,  81 => 17,  75 => 14,  66 => 10,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "portfolio.twig", "/var/www/html/Challenges_la_fabrik/portfolio_challenge/src/templates/portfolio.twig");
    }
}
