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

/* default/about.html.twig */
class __TwigTemplate_e6007c58396170e03e7345a4dc3abee5d784f7287af33d5e674c0e4a34bc1b96 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("no-sidebar.html.twig", "default/about.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "no-sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"container\">
            <section class=\"col-6 col-12-narrower feature\">
                <header>
                    <h2>Welcome to the About Page</h2>
                </header>
                <p>
                    Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                    sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                    adipiscing elit. Curabitur vel sem sit.
                    Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                    sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                    adipiscing elit. Curabitur vel sem sit.
                </p>
            </section>
        </div>
    </div>
    <!-- Features 1 -->
    <div class=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <section class=\"col-6 col-12-narrower feature\">
                    <div class=\"image-wrapper first\">
                        <a href=\"#\" class=\"image featured first\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic01.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    </div>
                    <header>
                        <h2>Semper magna neque vel<br />
                            adipiscing curabitur</h2>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                        sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                        adipiscing elit. Curabitur vel sem sit.</p>
                    <ul class=\"actions\">
                        <li><a href=\"#\" class=\"button\">See More</a></li>
                    </ul>
                </section>
                <section class=\"col-6 col-12-narrower feature\">
                    <div class=\"image-wrapper\">
                        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic02.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    </div>
                    <header>
                        <h2>Amet lorem ipsum dolor<br />
                            sit consequat magna</h2>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                        sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                        adipiscing elit. Curabitur vel sem sit.</p>
                    <ul class=\"actions\">
                        <li><a href=\"#\" class=\"button\">See More</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  109 => 29,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'no-sidebar.html.twig' %}

{% block title %}About{% endblock %}

{% block body %}
    <div class=\"wrapper\">
        <div class=\"container\">
            <section class=\"col-6 col-12-narrower feature\">
                <header>
                    <h2>Welcome to the About Page</h2>
                </header>
                <p>
                    Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                    sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                    adipiscing elit. Curabitur vel sem sit.
                    Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                    sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                    adipiscing elit. Curabitur vel sem sit.
                </p>
            </section>
        </div>
    </div>
    <!-- Features 1 -->
    <div class=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <section class=\"col-6 col-12-narrower feature\">
                    <div class=\"image-wrapper first\">
                        <a href=\"#\" class=\"image featured first\"><img src=\"{{ asset('images/pic01.jpg') }}\" alt=\"\" /></a>
                    </div>
                    <header>
                        <h2>Semper magna neque vel<br />
                            adipiscing curabitur</h2>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                        sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                        adipiscing elit. Curabitur vel sem sit.</p>
                    <ul class=\"actions\">
                        <li><a href=\"#\" class=\"button\">See More</a></li>
                    </ul>
                </section>
                <section class=\"col-6 col-12-narrower feature\">
                    <div class=\"image-wrapper\">
                        <a href=\"#\" class=\"image featured\"><img src=\"{{ asset('images/pic02.jpg') }}\" alt=\"\" /></a>
                    </div>
                    <header>
                        <h2>Amet lorem ipsum dolor<br />
                            sit consequat magna</h2>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                        sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                        adipiscing elit. Curabitur vel sem sit.</p>
                    <ul class=\"actions\">
                        <li><a href=\"#\" class=\"button\">See More</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>




{% endblock %}", "default/about.html.twig", "/Users/jeremiah/Desktop/BookAuction/templates/default/about.html.twig");
    }
}
