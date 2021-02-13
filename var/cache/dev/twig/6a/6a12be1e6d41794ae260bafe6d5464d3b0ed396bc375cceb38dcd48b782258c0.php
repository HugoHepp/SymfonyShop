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

/* new_arrivals/index.html.twig */
class __TwigTemplate_022cdaca642d4d14192a35f0e37f85d018891b879e48bf34b4832c539950c17d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new_arrivals/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new_arrivals/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "new_arrivals/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Arrivals";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate("navbar.html.twig", "new_arrivals/index.html.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"main\">

        ";
        // line 9
        $this->loadTemplate("__categoriesSidebox.html.twig", "new_arrivals/index.html.twig", 9)->display(twig_array_merge($context, ["categoryList" => (isset($context["categoryList"]) || array_key_exists("categoryList", $context) ? $context["categoryList"] : (function () { throw new RuntimeError('Variable "categoryList" does not exist.', 9, $this->source); })())]));
        echo " 


        <div class=\"articles\" style=\"grid-row:1 ;\">

            <h1 style=\"margin-top: 80px\">New Arrivals:</h1>
            <hr>

            <div class=\"row d-flex\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productList"]) || array_key_exists("productList", $context) ? $context["productList"] : (function () { throw new RuntimeError('Variable "productList" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "                    <div class=\"col-3 mt-4\">
                        <div class=\"card\" style=\"max-width: 20rem;\">
                            <div class=\"card-header\">
                                <img class=\"img-fluid\" src=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "img", [], "any", false, false, false, 22), "html", null, true);
            echo " alt=\"picture of product\">
                            </div>
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25)), "html", null, true);
            echo "\$</h4>
                                <p class=\"card-text\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                                <a class=\"btn-detail btn\" href=\"product/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">Details</a>
                                <a class=\"btn\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Add to cart</a>
                            </div>
                        </div>    
                    </div> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>
        </div>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "new_arrivals/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  136 => 28,  132 => 27,  128 => 26,  122 => 25,  116 => 22,  111 => 19,  107 => 18,  95 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Arrivals{% endblock %}

{% block body %}
    {% include \"navbar.html.twig\" %}
    <div class=\"main\">

        {% include \"__categoriesSidebox.html.twig\" with {'categoryList': categoryList} %} 


        <div class=\"articles\" style=\"grid-row:1 ;\">

            <h1 style=\"margin-top: 80px\">New Arrivals:</h1>
            <hr>

            <div class=\"row d-flex\">
                {% for product in productList %}
                    <div class=\"col-3 mt-4\">
                        <div class=\"card\" style=\"max-width: 20rem;\">
                            <div class=\"card-header\">
                                <img class=\"img-fluid\" src={{product.img}} alt=\"picture of product\">
                            </div>
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">{{product.title}} - {{product.price | price}}\$</h4>
                                <p class=\"card-text\">{{product.description}}</p>
                                <a class=\"btn-detail btn\" href=\"product/{{product.id}}\">Details</a>
                                <a class=\"btn\" href=\"{{path('cart_add',{'id': product.id})}}\">Add to cart</a>
                            </div>
                        </div>    
                    </div> 
                {% endfor %}
            </div>
        </div>

    </div>


{% endblock %}
", "new_arrivals/index.html.twig", "/home/hugo/Desktop/SF-Projects/startproject/startapp/templates/new_arrivals/index.html.twig");
    }
}
