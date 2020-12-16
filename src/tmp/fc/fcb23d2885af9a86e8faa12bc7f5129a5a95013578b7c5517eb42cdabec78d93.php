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

/* home.twig */
class __TwigTemplate_869d207392b755b6b7ea7ed16b802bc52d57f40aebfb973f391db369c1cbb976 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Présentation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <!-- Section Home -->
    <h1 class=\"text-center my-5\">Présentation</h1>
    <div class=\"row my-5\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["abouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 10
            echo "            <h3 class=\"mb-3\">
                Bonjour je m'appelle <strong>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "FIRST_NAME", [], "any", false, false, false, 11), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "LAST_NAME", [], "any", false, false, false, 11), "html", null, true);
            echo "</strong> et je suis développeur web et web mobile.
            </h3> 
            <hr class=\"my-4\">           
            <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "DESCRIPTION", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
    <!-- Section Home-End -->
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 16,  80 => 14,  72 => 11,  69 => 10,  65 => 9,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.twig", "/var/www/html/Challenges_la_fabrik/portfolio_challenge/src/templates/home.twig");
    }
}
