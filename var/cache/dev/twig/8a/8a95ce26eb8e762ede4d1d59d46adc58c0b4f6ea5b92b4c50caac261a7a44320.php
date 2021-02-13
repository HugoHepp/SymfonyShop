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

/* __articlesList.html.twig */
class __TwigTemplate_be01e0c21d14a75303aa3328a5f1a7f92531dc3f456a19f295455a16e4497db1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__articlesList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__articlesList.html.twig"));

        // line 1
        echo "<div class=\"row d-flex\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productList"]) || array_key_exists("productList", $context) ? $context["productList"] : (function () { throw new RuntimeError('Variable "productList" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "        <div class=\"col-md-3 col-12 mt-4 d-flex justify-content-center\">
            <div class=\"card\" style=\"max-width: 20rem;\">
                <div class=\"card-header\">
                    <img class=\"img-fluid\" src=";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "img", [], "any", false, false, false, 6), "html", null, true);
            echo " alt=\"picture of product\">
                </div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 9)), "html", null, true);
            echo "\$</h4>
                    <p class=\"card-text\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
                    <a class=\"btn-detail btn\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">Details</a>
                    <a class=\"btn\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">Add to cart</a>
                </div>
            </div>    
        </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__articlesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  75 => 12,  71 => 11,  67 => 10,  61 => 9,  55 => 6,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row d-flex\">
    {% for product in productList %}
        <div class=\"col-md-3 col-12 mt-4 d-flex justify-content-center\">
            <div class=\"card\" style=\"max-width: 20rem;\">
                <div class=\"card-header\">
                    <img class=\"img-fluid\" src={{product.img}} alt=\"picture of product\">
                </div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{product.title}} - {{product.price | price}}\$</h4>
                    <p class=\"card-text\">{{product.description}}</p>
                    <a class=\"btn-detail btn\" href=\"{{path('product',{'id': product.id})}}\">Details</a>
                    <a class=\"btn\" href=\"{{path('cart_add',{'id': product.id})}}\">Add to cart</a>
                </div>
            </div>    
        </div> 
    {% endfor %}
</div>", "__articlesList.html.twig", "/home/hugo/Desktop/SF-Projects/startproject/startapp/templates/__articlesList.html.twig");
    }
}
