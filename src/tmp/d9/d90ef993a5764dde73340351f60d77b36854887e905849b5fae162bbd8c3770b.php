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

/* partials/footer.twig */
class __TwigTemplate_1e34ccd66c66aca162bdc9b575745bf906aeaf6d421ae367a0de413ab3fe5fcb extends Template
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
        echo "<!-- Section Footer -->
<footer>
  <div class=\"row mt-5\">
    <p class=\"text-center mt-3\">&copy; Vincent HAVET</p>
  </div>
</footer>
<!-- Section Footer-End -->

";
    }

    public function getTemplateName()
    {
        return "partials/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/footer.twig", "/var/www/html/Challenges_la_fabrik/portfolio_challenge/src/templates/partials/footer.twig");
    }
}
