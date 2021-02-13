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

/* product/index.html.twig */
class __TwigTemplate_398a80b931c909b55f5add2810b4c3f5f27f7548bd77706acb9eb3aea00e790e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        echo "Product";
        
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
        echo "   
    ";
        // line 7
        $this->loadTemplate("navbar.html.twig", "product/index.html.twig", 7)->display($context);
        // line 8
        echo "    
    <div class=\"main\">

        ";
        // line 11
        $this->loadTemplate("__categoriesSidebox.html.twig", "product/index.html.twig", 11)->display(twig_array_merge($context, ["categoryList" => (isset($context["categoryList"]) || array_key_exists("categoryList", $context) ? $context["categoryList"] : (function () { throw new RuntimeError('Variable "categoryList" does not exist.', 11, $this->source); })())]));
        echo " 

        <div class=\"articles\" style=\"grid-row:1 ;\">

        <div class=\"product-main\">

            <div class=\"product-imgblock\">
                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), 0, [], "array", false, false, false, 18), "img", [], "any", false, false, false, 18), "html", null, true);
        echo "\" alt=\"image of product\" class=\"img-fluid\">
            </div>

            <div class=\"product-descBlock\">
                <div class=\"product-header\">
                    <h2>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "</h2>
                    <p>Bought ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), 0, [], "array", false, false, false, 24), "countSold", [], "any", false, false, false, 24), "html", null, true);
        echo " times!</p>
                    <hr>
                </div>
            
                <div class=\"product-description mt-3\">
                    <p>Current Price: <h2>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), 0, [], "array", false, false, false, 29), "price", [], "any", false, false, false, 29)), "html", null, true);
        echo "\$ </h2></p>
                    <p>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), 0, [], "array", false, false, false, 30), "description", [], "any", false, false, false, 30), "html", null, true);
        echo " </p>
                    <a class=\"btn\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), 0, [], "array", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">Add to cart</a>
                </div>
            </div>

        </div>
    </div>








    ";
        // line 63
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 63,  136 => 31,  132 => 30,  128 => 29,  120 => 24,  116 => 23,  108 => 18,  98 => 11,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product{% endblock %}

{% block body %}
   
    {% include \"navbar.html.twig\" %}
    
    <div class=\"main\">

        {% include \"__categoriesSidebox.html.twig\" with {'categoryList': categoryList} %} 

        <div class=\"articles\" style=\"grid-row:1 ;\">

        <div class=\"product-main\">

            <div class=\"product-imgblock\">
                <img src=\"{{product[0].img}}\" alt=\"image of product\" class=\"img-fluid\">
            </div>

            <div class=\"product-descBlock\">
                <div class=\"product-header\">
                    <h2>{{product[0].title}}</h2>
                    <p>Bought {{product[0].countSold}} times!</p>
                    <hr>
                </div>
            
                <div class=\"product-description mt-3\">
                    <p>Current Price: <h2>{{product[0].price | price}}\$ </h2></p>
                    <p>{{product[0].description}} </p>
                    <a class=\"btn\" href=\"{{path('cart_add',{'id': product[0].id})}}\">Add to cart</a>
                </div>
            </div>

        </div>
    </div>








    {# <div class=\"container\">
        <div class=\"row d-flex justify-content-center mt-4\">
            <h2>{{product[0].title}}</h2>
        </div>
        <div class=\"row d-flex justify-content-center\">
            {% for product in product %}
            <div class=\"col-4 mt-4\">
                <div class=\"card\" style=\"max-width: 20rem;\">
                    <div class=\"card-header\"><img class=\"img-fluid\" src={{product.img}} alt=\"picture of product\"></div>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">{{product.title}} - {{product.price | price}}\$</h4>
                        <p class=\"card-text\">{{product.description}}</p>
                    </div>
                </div> 
            </div> 
            {% endfor %}
        </div>
    </div> #}

{% endblock %}
", "product/index.html.twig", "/home/hugo/Desktop/SF-Projects/startproject/startapp/templates/product/index.html.twig");
    }
}
