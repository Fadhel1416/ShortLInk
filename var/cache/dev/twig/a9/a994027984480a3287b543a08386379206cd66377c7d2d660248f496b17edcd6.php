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

/* _base/_show.html.twig */
class __TwigTemplate_bb7680e4f8434dfc75ecfd6f702133149ee9efc2b001d2bf6ff543893a6837f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_base/_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_base/_show.html.twig"));

        // line 1
        echo "<header class=\"masthead\">
\t<div class=\"container px-5\">
\t\t<div
\t\t\tclass=\"row gx-5 align-items-center\">
\t\t\t<!-- Mashead text and app badges-->
\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t<div class=\"mb-5 mb-lg-0 text-center text-lg-start\">
\t\t\t\t\t<h1 class=\"display-1 lh-1 mb-3\">Votre lien.</h1>

\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<input id=\"input\" type=\"text\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link", ["short" => twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 11, $this->source); })()), "short", [], "any", false, false, false, 11)])), "html", null, true);
        echo "\" readonly=\"true\">
\t\t\t\t\t\t<button class=\"btn btn-outline-primary\" id=\"copy\"><i class=\"bi bi-clipboard\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"fw-normal text-muted mb-5\">Lien d'origine :
\t\t\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })()), "link", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })()), "link", [], "any", false, false, false, 15), "html", null, true);
        echo "</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>

<script>
function copy() {
  var copyText = document.querySelector(\"#input\");
  copyText.select();
  document.execCommand(\"copy\");
}

document.querySelector(\"#copy\").addEventListener(\"click\", copy);
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_base/_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"masthead\">
\t<div class=\"container px-5\">
\t\t<div
\t\t\tclass=\"row gx-5 align-items-center\">
\t\t\t<!-- Mashead text and app badges-->
\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t<div class=\"mb-5 mb-lg-0 text-center text-lg-start\">
\t\t\t\t\t<h1 class=\"display-1 lh-1 mb-3\">Votre lien.</h1>

\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<input id=\"input\" type=\"text\" class=\"form-control\" value=\"{{ absolute_url(path('link', {'short': message.short})) }}\" readonly=\"true\">
\t\t\t\t\t\t<button class=\"btn btn-outline-primary\" id=\"copy\"><i class=\"bi bi-clipboard\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"fw-normal text-muted mb-5\">Lien d'origine :
\t\t\t\t\t\t<a href=\"{{ message.link }}\">{{ message.link }}</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>

<script>
function copy() {
  var copyText = document.querySelector(\"#input\");
  copyText.select();
  document.execCommand(\"copy\");
}

document.querySelector(\"#copy\").addEventListener(\"click\", copy);
</script>
", "_base/_show.html.twig", "/home/fadhel/ShortLink/templates/_base/_show.html.twig");
    }
}
