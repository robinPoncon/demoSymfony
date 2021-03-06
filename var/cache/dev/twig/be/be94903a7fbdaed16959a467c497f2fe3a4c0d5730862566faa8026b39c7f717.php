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

/* blog/home.html.twig */
class __TwigTemplate_cb112159763a850fa45d6315a1700c8b464a333a65259e6d84b68460216df95b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t
\t<h1>Bienvenue dans ce blog</h1>

\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
\t
\t<h1>Bienvenue dans ce blog</h1>

\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

{% endblock %}", "blog/home.html.twig", "/Users/robinponcon/Sites/demo/templates/blog/home.html.twig");
    }
}
