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
class __TwigTemplate_3b2a37d7646cfb56bb04bc6f20f19e46b5a8455e332bc1670044f7d55d0694cc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"css/main.css\" />
</head>
<body class=\"homepage is-preload\">
<div id=\"page-wrapper\">

    <!-- Header -->
    <div id=\"header-wrapper\">
        <div id=\"header\" class=\"container\">

            <!-- Logo -->
            <h1 id=\"logo\"><a href=\"/\">Book Auction Home</a></h1>

            <!-- Nav -->
            <nav id=\"nav\">
                <ul>
                   <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
        echo "\">Login</a></li>
                   <li class=\"break\"><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("default_about");
        echo "\">About</a></li>
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\">Logout</a>

                </ul>
            </nav>

        </div>
        <!-- Hero -->
        <section id=\"hero\" class=\"container\">
            <header>
                <h2>Welcome to this Second Hand Book Auction Website</h2>
                    <br />

            </header>
            <p>Built by Jeremiah Durano
                <br />

            <!--<ul class=\"actions\">
                <li><a href=\"#\" class=\"button\">Get this party started</a></li>
            </ul> -->
        </section>

    </div>
    <!-- Features 1 -->
    <div class=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <section class=\"col-6 col-12-narrower feature\">
                    <div class=\"image-wrapper first\">
                        <a href=\"#\" class=\"image featured first\"><img src=\"";
        // line 53
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
        // line 68
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
    <!-- Promo -->
    <div id=\"promo-wrapper\">
        <section id=\"promo\">
            <h2>Neque semper magna et lorem ipsum adipiscing</h2>
            <a href=\"#\" class=\"button\">Breach the thresholds</a>
        </section>
    </div>
    <br>
    <!-- Footer -->
    <div id=\"footer-wrapper\">
        <div id=\"footer\" class=\"container\">

        <div id=\"copyright\" class=\"container\">
            <ul class=\"menu\">
                <li>&copy; Jeremiah Durano TUD Blanchardstown 2019</li>
            </ul>
        </div>
    </div>
</div>


<!-- Scripts -->
<script src=\"js/jquery.min.js\"></script>
<script src=\"js/jquery.dropotron.min.js\"></script>
<script src=\"js/browser.min.js\"></script>
<script src=\"js/breakpoints.min.js\"></script>
<script src=\"js/util.js\"></script>
<script src=\"js/main.js\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Book Auction";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  183 => 4,  126 => 68,  108 => 53,  77 => 25,  73 => 24,  69 => 23,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
<head>
    <title>{% block title %}Book Auction{% endblock %}</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"css/main.css\" />
</head>
<body class=\"homepage is-preload\">
<div id=\"page-wrapper\">

    <!-- Header -->
    <div id=\"header-wrapper\">
        <div id=\"header\" class=\"container\">

            <!-- Logo -->
            <h1 id=\"logo\"><a href=\"/\">Book Auction Home</a></h1>

            <!-- Nav -->
            <nav id=\"nav\">
                <ul>
                   <li><a href=\"{{ url('app_login') }}\">Login</a></li>
                   <li class=\"break\"><a href=\"{{ url('default_about') }}\">About</a></li>
                    <a href=\"{{ url('logout') }}\">Logout</a>

                </ul>
            </nav>

        </div>
        <!-- Hero -->
        <section id=\"hero\" class=\"container\">
            <header>
                <h2>Welcome to this Second Hand Book Auction Website</h2>
                    <br />

            </header>
            <p>Built by Jeremiah Durano
                <br />

            <!--<ul class=\"actions\">
                <li><a href=\"#\" class=\"button\">Get this party started</a></li>
            </ul> -->
        </section>

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
    <!-- Promo -->
    <div id=\"promo-wrapper\">
        <section id=\"promo\">
            <h2>Neque semper magna et lorem ipsum adipiscing</h2>
            <a href=\"#\" class=\"button\">Breach the thresholds</a>
        </section>
    </div>
    <br>
    <!-- Footer -->
    <div id=\"footer-wrapper\">
        <div id=\"footer\" class=\"container\">

        <div id=\"copyright\" class=\"container\">
            <ul class=\"menu\">
                <li>&copy; Jeremiah Durano TUD Blanchardstown 2019</li>
            </ul>
        </div>
    </div>
</div>


<!-- Scripts -->
<script src=\"js/jquery.min.js\"></script>
<script src=\"js/jquery.dropotron.min.js\"></script>
<script src=\"js/browser.min.js\"></script>
<script src=\"js/breakpoints.min.js\"></script>
<script src=\"js/util.js\"></script>
<script src=\"js/main.js\"></script>

</body>
</html>", "base.html.twig", "/Users/jeremiah/Desktop/BookAuction/templates/base.html.twig");
    }
}
