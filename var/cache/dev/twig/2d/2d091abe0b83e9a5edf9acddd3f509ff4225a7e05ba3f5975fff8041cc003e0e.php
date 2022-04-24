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

/* base.html.twig */
class __TwigTemplate_367d1c305ce962c9bd25739631546d69fd4abee32da643a2b4fd99c5c5854b10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_FlaminGOD_final.png"), "html", null, true);
        echo "\">
        <script src=\"https://kit.fontawesome.com/4f473a0c14.js\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"https://use.typekit.net/jmi5kfn.css\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "

            </head>
    <body>
        ";
        // line 20
        $this->loadTemplate("partial/nav.html.twig", "base.html.twig", 20)->display($context);
        // line 21
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->loadTemplate("partial/footer.html.twig", "base.html.twig", 22)->display($context);
        // line 23
        echo "        <script href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js"), "html", null, true);
        echo "\">
            let star1 = document.getElementById(\"star1\")
            let star2 = document.getElementById(\"star2\");
            let star3 = document.getElementById(\"star3\");
            let viewAll = document.getElementById(\"viewAll\")
            let viewLess = document.getElementById(\"viewLess\")
            let first_collection = document.getElementById(\"first_collection\")
            let full_collection = document.getElementById(\"full_collection\")


            viewAll.addEventListener('click', function (){
                first_collection.style.display = \"none\"
                full_collection.style.display = \"flex\"
            })
            viewLess.addEventListener('click', function (){
                full_collection.style.display = \"none\"
                first_collection.style.display = \"flex\"
            })
        </script>
    </body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 21,  149 => 14,  142 => 13,  132 => 10,  125 => 9,  112 => 5,  81 => 23,  78 => 22,  75 => 21,  73 => 20,  67 => 16,  65 => 13,  62 => 12,  60 => 9,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('img/logo_FlaminGOD_final.png') }}\">
        <script src=\"https://kit.fontawesome.com/4f473a0c14.js\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"https://use.typekit.net/jmi5kfn.css\">
        {% block stylesheets %}
                <link href=\"{{ asset('style/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}

        {% block javascripts %}

        {% endblock %}


            </head>
    <body>
        {% include \"partial/nav.html.twig\" %}
        {% block body %}{% endblock %}
        {% include \"partial/footer.html.twig\" %}
        <script href=\"{{ asset('app.js') }}\">
            let star1 = document.getElementById(\"star1\")
            let star2 = document.getElementById(\"star2\");
            let star3 = document.getElementById(\"star3\");
            let viewAll = document.getElementById(\"viewAll\")
            let viewLess = document.getElementById(\"viewLess\")
            let first_collection = document.getElementById(\"first_collection\")
            let full_collection = document.getElementById(\"full_collection\")


            viewAll.addEventListener('click', function (){
                first_collection.style.display = \"none\"
                full_collection.style.display = \"flex\"
            })
            viewLess.addEventListener('click', function (){
                full_collection.style.display = \"none\"
                first_collection.style.display = \"flex\"
            })
        </script>
    </body>

</html>
", "base.html.twig", "/Users/matisdene/DEVELOPEMENT/FlaminGod/templates/base.html.twig");
    }
}
