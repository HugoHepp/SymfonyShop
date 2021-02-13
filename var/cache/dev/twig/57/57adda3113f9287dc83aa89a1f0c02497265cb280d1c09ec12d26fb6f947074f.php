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

/* __categoriesSidebox.html.twig */
class __TwigTemplate_73fff2f626f85f829cb10ec41e044c0840603597fd229d0825c9c2142ad5b0b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__categoriesSidebox.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__categoriesSidebox.html.twig"));

        // line 1
        echo "<div class=\"categories-desktop\">
    <div class=\"categories pt-4 pl-3\">
        <p class=\"category-title\">Categories:</p>
        <ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) || array_key_exists("categoryList", $context) ? $context["categoryList"] : (function () { throw new RuntimeError('Variable "categoryList" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\"><li class=\"category_element\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "</li></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ul>
    </div>
</div>

<div class=\"categories-mobile m-4\">
    <div class=\"dropdown\">
        <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Categories
        </a>
        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) || array_key_exists("categoryList", $context) ? $context["categoryList"] : (function () { throw new RuntimeError('Variable "categoryList" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "            <li class=\"m-3 categories-item-mobile\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>
    </div>

    <form class=\"form\" action=\"/search\" action=\"GET\">
         <input class=\"form-search\" name=\"item\" value=\"\" placeholder=\"Search..\">
        <button class=\"form-search-button\" type=\"submit\">Search</button>
    </form>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__categoriesSidebox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 21,  80 => 19,  76 => 18,  64 => 8,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"categories-desktop\">
    <div class=\"categories pt-4 pl-3\">
        <p class=\"category-title\">Categories:</p>
        <ul>
        {% for category in categoryList %}
            <a href=\"{{path('category', {'id' : category.id})}}\"><li class=\"category_element\">{{category.title}}</li></a>
        {% endfor %}
        </ul>
    </div>
</div>

<div class=\"categories-mobile m-4\">
    <div class=\"dropdown\">
        <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Categories
        </a>
        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
        {% for category in categoryList %}
            <li class=\"m-3 categories-item-mobile\"><a href=\"{{path('category', {'id' : category.id})}}\">{{category.title}}</a></li>
        {% endfor %}
        </ul>
    </div>

    <form class=\"form\" action=\"/search\" action=\"GET\">
         <input class=\"form-search\" name=\"item\" value=\"\" placeholder=\"Search..\">
        <button class=\"form-search-button\" type=\"submit\">Search</button>
    </form>
</div>", "__categoriesSidebox.html.twig", "/home/hugo/Desktop/SF-Projects/startproject/startapp/templates/__categoriesSidebox.html.twig");
    }
}
