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

/* blog/show.html.twig */
class __TwigTemplate_e1bb2284e0a07815ab391d9766c2b6d5782402133fd090a0664b38280ffd7511 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
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
        echo "
\t<article>
\t\t<h2>Titre de l'article</h2>
\t\t<div class=\"metadata\"> Ecrit le 10/05/2018 à 19:00 dans la catégorie Politique</div>
\t\t<div class=\"content\">

\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">

\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod

\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

\t\t</div>
\t</article>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
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

\t<article>
\t\t<h2>Titre de l'article</h2>
\t\t<div class=\"metadata\"> Ecrit le 10/05/2018 à 19:00 dans la catégorie Politique</div>
\t\t<div class=\"content\">

\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">

\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod

\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

\t\t</div>
\t</article>

{% endblock %}", "blog/show.html.twig", "/Users/robinponcon/Sites/demo/templates/blog/show.html.twig");
    }
}
