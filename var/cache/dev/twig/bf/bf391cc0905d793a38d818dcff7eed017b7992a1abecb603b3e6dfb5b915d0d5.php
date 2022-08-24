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

/* _base/_quote.html.twig */
class __TwigTemplate_771573adc21baa9c38402c20a7f17a70903f535a6b87b9db01127d4551afda2d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_base/_quote.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_base/_quote.html.twig"));

        // line 1
        echo "<!-- Quote/testimonial aside-->
<aside class=\"text-center bg-gradient-primary-to-secondary\">
\t<div class=\"container px-5\">
\t\t<div class=\"row gx-5 justify-content-center\">
\t\t\t<div class=\"col-xl-8\">
\t\t\t\t<div class=\"h2 fs-1 text-white mb-4\">\"Vous manquez de place pour terminer votre meilleur tweet ou finir de remplir votre bio Instagram ? Avec Short Link, gagnez de la place !\"</div>
\t\t\t</div>
\t\t</div>
\t</div>
</aside>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_base/_quote.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Quote/testimonial aside-->
<aside class=\"text-center bg-gradient-primary-to-secondary\">
\t<div class=\"container px-5\">
\t\t<div class=\"row gx-5 justify-content-center\">
\t\t\t<div class=\"col-xl-8\">
\t\t\t\t<div class=\"h2 fs-1 text-white mb-4\">\"Vous manquez de place pour terminer votre meilleur tweet ou finir de remplir votre bio Instagram ? Avec Short Link, gagnez de la place !\"</div>
\t\t\t</div>
\t\t</div>
\t</div>
</aside>
", "_base/_quote.html.twig", "/home/fadhel/ShortLink/templates/_base/_quote.html.twig");
    }
}
