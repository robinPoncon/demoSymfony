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
class __TwigTemplate_76bc7374a4e8a380d6b7dbc4a144bce623dfac5054a53223e472d815db5b6227 extends \Twig\Template
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
\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
\t\t<div class=\"metadata\"> Ecrit le ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "createdAt", [], "any", false, false, false, 7), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "createdAt", [], "any", false, false, false, 7), "H:i"), "html", null, true);
        echo " dans la catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "category", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</div>
\t\t<div class=\"content\">

\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"\">

\t\t\t<p>";
        // line 12
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "content", [], "any", false, false, false, 12);
        echo " </p>

\t\t</div>
\t</article>

\t<section id=\"commentaires\">
\t\t<h2>";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "comments", [], "any", false, false, false, 18)), "html", null, true);
        echo " commentaires :</h2>
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "comments", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 20
            echo "\t\t\t<div class=\"comment\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 23), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 23), "d/m/Y à H:i"), "html", null, true);
            echo "</small>)
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 27);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 34, $this->source); })()), 'form_start');
            echo "
\t\t\t";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 35, $this->source); })()), "author", [], "any", false, false, false, 35), 'row', ["label" => "Auteur", "attr" => ["placeholder" => "Votre nom"]]);
            echo "
\t\t\t";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 36, $this->source); })()), "content", [], "any", false, false, false, 36), 'row', ["label" => "Commentaire", "attr" => ["placeholder" => "Votre commentaire"]]);
            echo "

\t\t\t<button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
\t\t\t";
            // line 39
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 39, $this->source); })()), 'form_end');
            echo "
\t\t";
        } else {
            // line 41
            echo "\t\t\t<h2>Vous ne pouvez pas commenter si vous n'êtes pas connecté !</h2>
\t\t\t<a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\"> Connexion </a>
\t\t";
        }
        // line 44
        echo "\t</section>

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
        return array (  166 => 44,  161 => 42,  158 => 41,  153 => 39,  147 => 36,  143 => 35,  138 => 34,  136 => 33,  133 => 32,  122 => 27,  113 => 23,  108 => 20,  104 => 19,  100 => 18,  91 => 12,  86 => 10,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

\t<article>
\t\t<h1>{{ article.title }}</h1>
\t\t<div class=\"metadata\"> Ecrit le {{ article.createdAt | date(\"d/m/Y\") }} à {{ article.createdAt | date(\"H:i\") }} dans la catégorie {{ article.category.title }}</div>
\t\t<div class=\"content\">

\t\t\t<img src=\"{{ article.image }}\" alt=\"\">

\t\t\t<p>{{ article.content | raw }} </p>

\t\t</div>
\t</article>

\t<section id=\"commentaires\">
\t\t<h2>{{ article.comments | length }} commentaires :</h2>
\t\t{% for comment in article.comments %}
\t\t\t<div class=\"comment\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t{{ comment.author }} (<small>{{ comment.createdAt | date(\"d/m/Y à H:i\") }}</small>)
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t{{ comment.content | raw }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}

\t\t{% if app.user %}
\t\t\t{{ form_start(commentForm) }}
\t\t\t{{ form_row(commentForm.author, {\"label\": \"Auteur\", \"attr\": {\"placeholder\": \"Votre nom\"}}) }}
\t\t\t{{ form_row(commentForm.content, {\"label\": \"Commentaire\",\"attr\": {\"placeholder\": \"Votre commentaire\"}}) }}

\t\t\t<button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
\t\t\t{{ form_end(commentForm) }}
\t\t{% else %}
\t\t\t<h2>Vous ne pouvez pas commenter si vous n'êtes pas connecté !</h2>
\t\t\t<a href=\"{{ path(\"security_login\") }}\" class=\"btn btn-primary\"> Connexion </a>
\t\t{% endif %}
\t</section>

{% endblock %}", "blog/show.html.twig", "/Users/robinponcon/Sites/demo/templates/blog/show.html.twig");
    }
}
