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

/* _base/_basic.html.twig */
class __TwigTemplate_132362f4ca00ab7ad115b92bf8a3ace3c75b2723b4647e4b730941a0100e5b5a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_base/_basic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_base/_basic.html.twig"));

        // line 1
        echo "<!-- App features section-->
<section id=\"features\">
\t<div class=\"container px-5\">
\t\t<div class=\"row gx-5 align-items-center\">
\t\t\t<div class=\"col-lg-8 order-lg-1 mb-5 mb-lg-0\">
\t\t\t\t<div class=\"container-fluid px-5\">
\t\t\t\t\t<div class=\"row gx-5\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-6 mb-5\">
\t\t\t\t\t\t\t<!-- Feature item-->
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<i class=\"bi-phone icon-feature text-gradient d-block mb-3\"></i>
\t\t\t\t\t\t\t\t<h3 class=\"font-alt\">Responsive</h3>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Short Link fonctionne aussi bien sur Smartphone, Tablette ou PC !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-6 mb-5\">
\t\t\t\t\t\t\t<!-- Feature item-->
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<i class=\"bi-alarm icon-feature text-gradient d-block mb-3\"></i>
\t\t\t\t\t\t\t\t<h3 class=\"font-alt\">Rapide</h3>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Copiez, collez, partagez, c'est pas plus long !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-6 mb-5 mb-md-0\">
\t\t\t\t\t\t\t<!-- Feature item-->
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<i class=\"bi-gift icon-feature text-gradient d-block mb-3\"></i>
\t\t\t\t\t\t\t\t<h3 class=\"font-alt\">Gratuit</h3>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Short Link c'est gratuit, et ça le restera toujours.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-6\">
\t\t\t\t\t\t\t<!-- Feature item-->
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<i class=\"bi-patch-check icon-feature text-gradient d-block mb-3\"></i>
\t\t\t\t\t\t\t\t<h3 class=\"font-alt\">Privacy By Design</h3>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Nous ne stockons rien d'autre...que vos liens !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-lg-4 order-lg-0\">
\t\t\t\t<!-- Features section device mockup-->
\t\t\t\t<div class=\"features-device-mockup\">
\t\t\t\t\t<svg class=\"circle\" viewbox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t<linearGradient id=\"circleGradient\" gradienttransform=\"rotate(45)\">
\t\t\t\t\t\t\t\t<stop class=\"gradient-start-color\" offset=\"0%\"></stop>
\t\t\t\t\t\t\t\t<stop class=\"gradient-end-color\" offset=\"100%\"></stop>
\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t</defs>
\t\t\t\t\t\t<circle cx=\"50\" cy=\"50\" r=\"50\"></circle>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"shape-1 d-none d-sm-block\" viewbox=\"0 0 240.83 240.83\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<rect x=\"-32.54\" y=\"78.39\" width=\"305.92\" height=\"84.05\" rx=\"42.03\" transform=\"translate(120.42 -49.88) rotate(45)\"></rect>
\t\t\t\t\t\t<rect x=\"-32.54\" y=\"78.39\" width=\"305.92\" height=\"84.05\" rx=\"42.03\" transform=\"translate(-49.88 120.42) rotate(-45)\"></rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"shape-2 d-none d-sm-block\" viewbox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<circle cx=\"50\" cy=\"50\" r=\"50\"></circle>
\t\t\t\t\t</svg>
\t\t\t\t\t<div class=\"device-wrapper\">
\t\t\t\t\t\t<div class=\"device\" data-device=\"iPhoneX\" data-orientation=\"portrait\" data-color=\"black\">
\t\t\t\t\t\t\t<div class=\"screen bg-black\">
\t\t\t\t\t\t\t\t<!-- PUT CONTENTS HERE:-->
\t\t\t\t\t\t\t\t<!-- * * This can be a video, image, or just about anything else.-->
\t\t\t\t\t\t\t\t<!-- * * Set the max width of your media to 100% and the height to-->
\t\t\t\t\t\t\t\t<!-- * * 100% like the demo example below.--><video muted=\"muted\" autoplay=\"\" loop=\"\" style=\"max-width: 100%; height: 100%\"> <source src=\"/dist/assets/img/demo-screen.mp4\" type=\"video/mp4\"/></video>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_base/_basic.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- App features section-->
<section id=\"features\">
\t<div class=\"container px-5\">
\t\t<div class=\"row gx-5 align-items-center\">
\t\t\t<div class=\"col-lg-8 order-lg-1 mb-5 mb-lg-0\">
\t\t\t\t<div class=\"container-fluid px-5\">
\t\t\t\t\t<div class=\"row gx-5\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-6 mb-5\">
\t\t\t\t\t\t\t<!-- Feature item-->
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<i class=\"bi-phone icon-feature text-gradient d-block mb-3\"></i>
\t\t\t\t\t\t\t\t<h3 class=\"font-alt\">Responsive</h3>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Short Link fonctionne aussi bien sur Smartphone, Tablette ou PC !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-6 mb-5\">
\t\t\t\t\t\t\t<!-- Feature item-->
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<i class=\"bi-alarm icon-feature text-gradient d-block mb-3\"></i>
\t\t\t\t\t\t\t\t<h3 class=\"font-alt\">Rapide</h3>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Copiez, collez, partagez, c'est pas plus long !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-6 mb-5 mb-md-0\">
\t\t\t\t\t\t\t<!-- Feature item-->
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<i class=\"bi-gift icon-feature text-gradient d-block mb-3\"></i>
\t\t\t\t\t\t\t\t<h3 class=\"font-alt\">Gratuit</h3>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Short Link c'est gratuit, et ça le restera toujours.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-6\">
\t\t\t\t\t\t\t<!-- Feature item-->
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<i class=\"bi-patch-check icon-feature text-gradient d-block mb-3\"></i>
\t\t\t\t\t\t\t\t<h3 class=\"font-alt\">Privacy By Design</h3>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Nous ne stockons rien d'autre...que vos liens !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-lg-4 order-lg-0\">
\t\t\t\t<!-- Features section device mockup-->
\t\t\t\t<div class=\"features-device-mockup\">
\t\t\t\t\t<svg class=\"circle\" viewbox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t<linearGradient id=\"circleGradient\" gradienttransform=\"rotate(45)\">
\t\t\t\t\t\t\t\t<stop class=\"gradient-start-color\" offset=\"0%\"></stop>
\t\t\t\t\t\t\t\t<stop class=\"gradient-end-color\" offset=\"100%\"></stop>
\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t</defs>
\t\t\t\t\t\t<circle cx=\"50\" cy=\"50\" r=\"50\"></circle>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"shape-1 d-none d-sm-block\" viewbox=\"0 0 240.83 240.83\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<rect x=\"-32.54\" y=\"78.39\" width=\"305.92\" height=\"84.05\" rx=\"42.03\" transform=\"translate(120.42 -49.88) rotate(45)\"></rect>
\t\t\t\t\t\t<rect x=\"-32.54\" y=\"78.39\" width=\"305.92\" height=\"84.05\" rx=\"42.03\" transform=\"translate(-49.88 120.42) rotate(-45)\"></rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"shape-2 d-none d-sm-block\" viewbox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<circle cx=\"50\" cy=\"50\" r=\"50\"></circle>
\t\t\t\t\t</svg>
\t\t\t\t\t<div class=\"device-wrapper\">
\t\t\t\t\t\t<div class=\"device\" data-device=\"iPhoneX\" data-orientation=\"portrait\" data-color=\"black\">
\t\t\t\t\t\t\t<div class=\"screen bg-black\">
\t\t\t\t\t\t\t\t<!-- PUT CONTENTS HERE:-->
\t\t\t\t\t\t\t\t<!-- * * This can be a video, image, or just about anything else.-->
\t\t\t\t\t\t\t\t<!-- * * Set the max width of your media to 100% and the height to-->
\t\t\t\t\t\t\t\t<!-- * * 100% like the demo example below.--><video muted=\"muted\" autoplay=\"\" loop=\"\" style=\"max-width: 100%; height: 100%\"> <source src=\"/dist/assets/img/demo-screen.mp4\" type=\"video/mp4\"/></video>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "_base/_basic.html.twig", "/home/fadhel/ShortLink/templates/_base/_basic.html.twig");
    }
}
