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

/* newsletter/index.html.twig */
class __TwigTemplate_7f1f667fd5ad09c4b0bab115143e855c83a0852e7f6d273db172f5a47f0c15b6 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "newsletter/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello NewsletterController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"newsletter\">
    <form method=\"post\" class=\"flex column center\">
        <h1 class=\"h3 mb-3 font-weight-normal\">Keep Contact </h1>
        <p>In order to keep updated on the latest news, <br>please
            register yourself for the newsletter.</p>
        <input placeholder=\"mail\" type=\"email\"  name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
        <input placeholder=\"name\" type=\"text\"  name=\"name\" id=\"inputName\" class=\"form-control\" autocomplete=\"name\" required autofocus>
        <input placeholder=\"phone\" type=\"text\" autocomplete=\"phone\">

        <div class=\"button flex center\">
            <button class=\"bluebutton\" type=\"submit\">
                Submit
            </button>

        </div>
    </form>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "newsletter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello NewsletterController!{% endblock %}

{% block body %}
<section class=\"newsletter\">
    <form method=\"post\" class=\"flex column center\">
        <h1 class=\"h3 mb-3 font-weight-normal\">Keep Contact </h1>
        <p>In order to keep updated on the latest news, <br>please
            register yourself for the newsletter.</p>
        <input placeholder=\"mail\" type=\"email\"  name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
        <input placeholder=\"name\" type=\"text\"  name=\"name\" id=\"inputName\" class=\"form-control\" autocomplete=\"name\" required autofocus>
        <input placeholder=\"phone\" type=\"text\" autocomplete=\"phone\">

        <div class=\"button flex center\">
            <button class=\"bluebutton\" type=\"submit\">
                Submit
            </button>

        </div>
    </form>
</section>
{% endblock %}
", "newsletter/index.html.twig", "/Users/matisdene/DEVELOPEMENT/FlaminGod/templates/newsletter/index.html.twig");
    }
}
