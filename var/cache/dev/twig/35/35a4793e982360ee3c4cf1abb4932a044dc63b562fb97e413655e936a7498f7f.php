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

/* cart/index.html.twig */
class __TwigTemplate_2d29362a4964c42aa797ed2079f33392ef428883b329e63599e21a0b73a4d8e4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Panier";
        
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
        $this->loadTemplate("navbar.html.twig", "cart/index.html.twig", 7)->display($context);
        // line 8
        echo "
 <div class=\"main\">

    ";
        // line 11
        $this->loadTemplate("__categoriesSidebox.html.twig", "cart/index.html.twig", 11)->display(twig_array_merge($context, ["categoryList" => (isset($context["categoryList"]) || array_key_exists("categoryList", $context) ? $context["categoryList"] : (function () { throw new RuntimeError('Variable "categoryList" does not exist.', 11, $this->source); })())]));
        echo " 

    <div class=\"articles p-2 pt-4\" style=\"grid-row:1 ;\">
   
        <h1 class=\"pl-1\">Cart</h1>

        ";
        // line 17
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 17, $this->source); })())), 0))) {
            // line 18
            echo "        
            <table class=\"table mt-4\">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "                        <tr>
                            <td>
                                ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 36), "price", [], "any", false, false, false, 36)), "html", null, true);
                echo "
                            </td>
                            <td>
                            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_decrement", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\" class=\"btn btn-sm\">-</a>
                                ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "qty", [], "any", false, false, false, 40), "html", null, true);
                echo "
                            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "?returnToCart=true\" class=\"btn btn-sm\">+</a>
                            </td>
                            <td>
                                ";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 44)), "html", null, true);
                echo "
                            </td>
                            <td>
                                <a class=\"btn btn-warning\" href='";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "'>Delete</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan='3'>Total:</td>
                        <td colspan='2'>";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->formatPrice((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })())), "html", null, true);
            echo "</td>
                    </tr>
                </tfoot>
            </table>

        ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
                // line 61
                echo "            
            <hr>

            <h2 class=\"mt-5 mb-4 pl-1\">Confirm order</h2>

            ";
                // line 66
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 66, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_confirm")]);
                echo "

            ";
                // line 68
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 68, $this->source); })()), 'widget');
                echo "

            <button class=\"btn btn-success mb-5 mt-2 ml-2\" type=\"submit\">Confirm</button>

            ";
                // line 72
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 72, $this->source); })()), 'form_end');
                echo "

        ";
            } else {
                // line 75
                echo "                
            <h5 class=\"mt-4 mb-4 p-2 pt-4\">You should be logged to confirm your order</h5>
            
            <a class=\"btn btn-success\" href=";
                // line 78
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo ">Go to login</a>

        ";
            }
            // line 81
            echo "
        ";
        } else {
            // line 83
            echo "
            <h2 class=\"p-2 pt-4\">Your cart is empty</h2>

        ";
        }
        // line 87
        echo "
    </div>
    
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 87,  229 => 83,  225 => 81,  219 => 78,  214 => 75,  208 => 72,  201 => 68,  196 => 66,  189 => 61,  187 => 60,  179 => 55,  173 => 51,  163 => 47,  157 => 44,  151 => 41,  147 => 40,  143 => 39,  137 => 36,  131 => 33,  127 => 31,  123 => 30,  109 => 18,  107 => 17,  98 => 11,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}

{% include \"navbar.html.twig\" %}

 <div class=\"main\">

    {% include \"__categoriesSidebox.html.twig\" with {'categoryList': categoryList} %} 

    <div class=\"articles p-2 pt-4\" style=\"grid-row:1 ;\">
   
        <h1 class=\"pl-1\">Cart</h1>

        {% if items | length > 0 %}
        
            <table class=\"table mt-4\">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in items %}
                        <tr>
                            <td>
                                {{ item.product.title }}
                            </td>
                            <td>
                                {{ item.product.price | price }}
                            </td>
                            <td>
                            <a href=\"{{path('cart_decrement',{'id': item.product.id})}}\" class=\"btn btn-sm\">-</a>
                                {{ item.qty }}
                            <a href=\"{{path('cart_add',{'id': item.product.id})}}?returnToCart=true\" class=\"btn btn-sm\">+</a>
                            </td>
                            <td>
                                {{ item.total | price }}
                            </td>
                            <td>
                                <a class=\"btn btn-warning\" href='{{ path(\"cart_delete\", {\"id\": item.product.id})}}'>Delete</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan='3'>Total:</td>
                        <td colspan='2'>{{total | price}}</td>
                    </tr>
                </tfoot>
            </table>

        {% if app.user %}
            
            <hr>

            <h2 class=\"mt-5 mb-4 pl-1\">Confirm order</h2>

            {{ form_start(confirmationForm, {'action': path('purchase_confirm')}) }}

            {{ form_widget(confirmationForm) }}

            <button class=\"btn btn-success mb-5 mt-2 ml-2\" type=\"submit\">Confirm</button>

            {{ form_end(confirmationForm) }}

        {% else %}
                
            <h5 class=\"mt-4 mb-4 p-2 pt-4\">You should be logged to confirm your order</h5>
            
            <a class=\"btn btn-success\" href={{path('app_login')}}>Go to login</a>

        {% endif %}

        {% else %}

            <h2 class=\"p-2 pt-4\">Your cart is empty</h2>

        {% endif %}

    </div>
    
</div>


{% endblock %}
", "cart/index.html.twig", "/home/hugo/Desktop/SF-Projects/startproject/startapp/templates/cart/index.html.twig");
    }
}
