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

/* app/index.html.twig */
class __TwigTemplate_d19255632cc0aadfbc8373179c0c28f47ae0a3c66524cf3afff2b8aaeac7ff8a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home - FlaminGod";
        
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
    <section>
        <div class=\"presentation\">
            <h1>FlaminGOD</h1>
            <p>The NFT FlaminGOD project is designed to generate 3333 NFTs of pink flamingos posing in various places.
                <br><br>
                Each flamingo poses, like a renaissance character, in a setting dominated by a mysterious mountain with two horns.
            </p>
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_collection");
        echo "\"><button class=\"bluebutton\">See collection</button></a>
        </div>
        <div class=\"img_header\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </section>
    <section class=\"section2\">
        <div class=\"caroussel flex center\">
            <div class=\"vertical\">
                <div class=\"slide1 flex column scroll-slide1\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft3.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft3.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft3.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>


            <div class=\"vertical \">
                <div class=\"slide2 flex column  scroll-slide2\">
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft4.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft4.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft4.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
            <div class=\"vertical\">
                <div class=\"slide3 flex column scroll-slide3\">
                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft5.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft5.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft5.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft5.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
            <div class=\"vertical scrollInvert\">
                <div class=\"slide4 flex column scroll-slide4\">
                    <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft3.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft3.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft3.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft3.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
            <div class=\"vertical scroll\">
                <div class=\"slide5 flex column scroll-slide5\">
                    <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
            <div class=\"vertical scrollInvert\">
                <div class=\"slide6 flex column scroll-slide6\">
                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft2.png"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nft1.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class=\"presentation2\">
            <h1>What is FlaminGOD ?</h1>
            <p>“_Z_” is the username I got known by, while drawing and criticizing the Tunisian news under the dictatorship of Ben Ali since 2007.
                <br>
                My anonymity allowed me to escape the nets of the politics in place and preserve my freedom of speech.
            </p>
            <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio");
        echo "\"><button class=\"transparentbutton\">Learn More</button></a>
        </div>
    </section>

    <script>
        let img_hover = document.querySelectorAll('img')

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "app/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 100,  289 => 88,  285 => 87,  281 => 86,  277 => 85,  273 => 84,  269 => 83,  265 => 82,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  241 => 73,  237 => 72,  233 => 71,  225 => 66,  221 => 65,  217 => 64,  213 => 63,  209 => 62,  205 => 61,  201 => 60,  193 => 55,  189 => 54,  185 => 53,  181 => 52,  177 => 51,  173 => 50,  169 => 49,  161 => 44,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  141 => 39,  137 => 38,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  103 => 25,  93 => 18,  89 => 17,  83 => 14,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - FlaminGod{% endblock %}

{% block body %}

    <section>
        <div class=\"presentation\">
            <h1>FlaminGOD</h1>
            <p>The NFT FlaminGOD project is designed to generate 3333 NFTs of pink flamingos posing in various places.
                <br><br>
                Each flamingo poses, like a renaissance character, in a setting dominated by a mysterious mountain with two horns.
            </p>
            <a href=\"{{ path('app_collection') }}\"><button class=\"bluebutton\">See collection</button></a>
        </div>
        <div class=\"img_header\">
            <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
            <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
        </div>
    </section>
    <section class=\"section2\">
        <div class=\"caroussel flex center\">
            <div class=\"vertical\">
                <div class=\"slide1 flex column scroll-slide1\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft3.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft3.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft3.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                </div>
            </div>


            <div class=\"vertical \">
                <div class=\"slide2 flex column  scroll-slide2\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft4.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft4.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft4.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                </div>
            </div>
            <div class=\"vertical\">
                <div class=\"slide3 flex column scroll-slide3\">
                    <img src=\"{{ asset('img/nft5.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft5.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft5.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft5.png') }}\" alt=\"\">
                </div>
            </div>
            <div class=\"vertical scrollInvert\">
                <div class=\"slide4 flex column scroll-slide4\">
                    <img src=\"{{ asset('img/nft3.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft3.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft3.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft3.png') }}\" alt=\"\">
                </div>
            </div>
            <div class=\"vertical scroll\">
                <div class=\"slide5 flex column scroll-slide5\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                </div>
            </div>
            <div class=\"vertical scrollInvert\">
                <div class=\"slide6 flex column scroll-slide6\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft2.png') }}\" alt=\"\">
                    <img src=\"{{ asset('img/nft1.png') }}\" alt=\"\">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class=\"presentation2\">
            <h1>What is FlaminGOD ?</h1>
            <p>“_Z_” is the username I got known by, while drawing and criticizing the Tunisian news under the dictatorship of Ben Ali since 2007.
                <br>
                My anonymity allowed me to escape the nets of the politics in place and preserve my freedom of speech.
            </p>
            <a href=\"{{ path(\"app_bio\") }}\"><button class=\"transparentbutton\">Learn More</button></a>
        </div>
    </section>

    <script>
        let img_hover = document.querySelectorAll('img')

    </script>
{% endblock %}
", "app/index.html.twig", "/Users/matisdene/DEVELOPEMENT/FlaminGod/templates/app/index.html.twig");
    }
}
