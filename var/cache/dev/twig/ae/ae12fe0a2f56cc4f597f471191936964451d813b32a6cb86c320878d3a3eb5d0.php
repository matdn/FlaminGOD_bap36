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

/* bio/index.html.twig */
class __TwigTemplate_0a2ffc4a3a157e477b8f510176d9278d1e1a7667d13c50eab07613f578417c7b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bio/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<section class=\"section_bio flex column \">
    <div class=\"text\">
        <h2>Drawing</h2>
        <p>\"_Z_\" is the username which I made myself known by drawing and criticizing the Tunisian news under the dictatorship of Ben Ali since 2007. It is through my blog, still active, www.debatunisie.com, that I have maintained my political activism and my exercise of satirical drawing. My anonymity allowed me to escape the nets of the politics in place and preserve my freedom of speech.<br><br>

            After the fall of Ben Ali in 2011, I've been able to develop and diversify my artistic activity through publications, conférences and exhibitions. I am a member of \"Cartooning for Peace\" founded by the cartoonist Plantu.<br>
            Through this international association which counts more than a hundred cartoonists from all over the world, I multiply the interventions around the drawing and freedom of speech in schools as well as in prisons in Paris, France and abroad.<br><br>

            However, I maintain my anonymity in order to continue to freely approach certain sensitive subjects such as the sacred. I am a public figure in Tunisia, active in the written press and in social networks, recognized for my drawings and fights for an unconditional freedom of speech.</p>
    </div>
    <div class=\"text\">
        <h2>Architecture</h2>
        <p>I am also an architect DPLG, graduated from the school Paris Val de Seines in 2006, holder of a master II in urban planning that I obtained in 2008 in Paris 12. Today I am a freelance architect.<br>
            I intervene mainly on renovation sites in Paris apartments. This allows me to ensure a regular income thanks to which I can fully devote myself to my art. <br>
            Before practicing as a freelance architect, from 2009 to 2017, I was employed in the agency Derbesse in Paris, where I was able to work on major projects such as the renovation of the Molitor swimming pool (2014) and many collectives housings operations in the French islands.</p>
    </div>
    <div class=\"text\">
        <h2>Cinema</h2>
        <p>Since I started practicing as a freelancer, I have invested in the realization of an animated film project. It is a feature movie that I am currently developing with \"les films d'ici\". My movie is a continuation of my career as a cartoonist and deals with the religious question through science fiction.<br>
            The provisional title of the movie is \"La Pierre Noire\". It has been selected in residence of writing to \"sud écriture\" (CNC), and selected among the projects laureate 2019/2020 to the Cité des Arts in Paris, where I settled until December 2020.</p>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  65 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

<section class=\"section_bio flex column \">
    <div class=\"text\">
        <h2>Drawing</h2>
        <p>\"_Z_\" is the username which I made myself known by drawing and criticizing the Tunisian news under the dictatorship of Ben Ali since 2007. It is through my blog, still active, www.debatunisie.com, that I have maintained my political activism and my exercise of satirical drawing. My anonymity allowed me to escape the nets of the politics in place and preserve my freedom of speech.<br><br>

            After the fall of Ben Ali in 2011, I've been able to develop and diversify my artistic activity through publications, conférences and exhibitions. I am a member of \"Cartooning for Peace\" founded by the cartoonist Plantu.<br>
            Through this international association which counts more than a hundred cartoonists from all over the world, I multiply the interventions around the drawing and freedom of speech in schools as well as in prisons in Paris, France and abroad.<br><br>

            However, I maintain my anonymity in order to continue to freely approach certain sensitive subjects such as the sacred. I am a public figure in Tunisia, active in the written press and in social networks, recognized for my drawings and fights for an unconditional freedom of speech.</p>
    </div>
    <div class=\"text\">
        <h2>Architecture</h2>
        <p>I am also an architect DPLG, graduated from the school Paris Val de Seines in 2006, holder of a master II in urban planning that I obtained in 2008 in Paris 12. Today I am a freelance architect.<br>
            I intervene mainly on renovation sites in Paris apartments. This allows me to ensure a regular income thanks to which I can fully devote myself to my art. <br>
            Before practicing as a freelance architect, from 2009 to 2017, I was employed in the agency Derbesse in Paris, where I was able to work on major projects such as the renovation of the Molitor swimming pool (2014) and many collectives housings operations in the French islands.</p>
    </div>
    <div class=\"text\">
        <h2>Cinema</h2>
        <p>Since I started practicing as a freelancer, I have invested in the realization of an animated film project. It is a feature movie that I am currently developing with \"les films d'ici\". My movie is a continuation of my career as a cartoonist and deals with the religious question through science fiction.<br>
            The provisional title of the movie is \"La Pierre Noire\". It has been selected in residence of writing to \"sud écriture\" (CNC), and selected among the projects laureate 2019/2020 to the Cité des Arts in Paris, where I settled until December 2020.</p>
    </div>
</section>
{% endblock %}
", "bio/index.html.twig", "/Users/matisdene/DEVELOPEMENT/FlaminGod/templates/bio/index.html.twig");
    }
}
