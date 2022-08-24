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

/* _base/_nav.html.twig */
class __TwigTemplate_a16ff0a278917a657ee720a97dd2e0c86c71ffd6cf19ba70379be48944d85be6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_base/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_base/_nav.html.twig"));

        // line 1
        echo "<!-- Navigation-->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top shadow-sm\" id=\"mainNav\">
\t<div class=\"container px-5\">
\t\t<a class=\"navbar-brand fw-bold\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\">Short Link</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\tMenu
\t\t\t<i class=\"bi-list\"></i>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
\t\t\t<ul class=\"navbar-nav ms-auto me-4 my-3 my-lg-0\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link me-lg-3\" href=\"#features\">Fonctionnalités<a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link me-lg-3\" href=\"/#download\">Statistique</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<button class=\"btn btn-primary rounded-pill px-3 mb-2 mb-lg-0\" data-bs-toggle=\"modal\" data-bs-target=\"#feedbackModal\">
\t\t\t\t<span class=\"d-flex align-items-center\">
\t\t\t\t\t<i class=\"bi-link me-2\"></i>
\t\t\t\t\t<span class=\"small\">Réduire un lien</span>
\t\t\t\t</span>
\t\t\t</button>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_base/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navigation-->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top shadow-sm\" id=\"mainNav\">
\t<div class=\"container px-5\">
\t\t<a class=\"navbar-brand fw-bold\" href=\"{{ path('add') }}\">Short Link</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\tMenu
\t\t\t<i class=\"bi-list\"></i>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
\t\t\t<ul class=\"navbar-nav ms-auto me-4 my-3 my-lg-0\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link me-lg-3\" href=\"#features\">Fonctionnalités<a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link me-lg-3\" href=\"/#download\">Statistique</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<button class=\"btn btn-primary rounded-pill px-3 mb-2 mb-lg-0\" data-bs-toggle=\"modal\" data-bs-target=\"#feedbackModal\">
\t\t\t\t<span class=\"d-flex align-items-center\">
\t\t\t\t\t<i class=\"bi-link me-2\"></i>
\t\t\t\t\t<span class=\"small\">Réduire un lien</span>
\t\t\t\t</span>
\t\t\t</button>
\t\t</div>
\t</div>
</nav>
", "_base/_nav.html.twig", "/home/fadhel/ShortLink/templates/_base/_nav.html.twig");
    }
}
