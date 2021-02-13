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

/* purchases/index.html.twig */
class __TwigTemplate_1c2023979b04fc2e00eec1aa64a64e1b6af47216154a38bdc0383b663a0170a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchases/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchases/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "purchases/index.html.twig", 1);
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

        echo "My orders";
        
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
        $this->loadTemplate("navbar.html.twig", "purchases/index.html.twig", 7)->display($context);
        // line 8
        echo "

<div class=\"main\">

    ";
        // line 12
        $this->loadTemplate("__categoriesSidebox.html.twig", "purchases/index.html.twig", 12)->display(twig_array_merge($context, ["categoryList" => (isset($context["categoryList"]) || array_key_exists("categoryList", $context) ? $context["categoryList"] : (function () { throw new RuntimeError('Variable "categoryList" does not exist.', 12, $this->source); })())]));
        // line 13
        echo "
 ";
        // line 14
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 14, $this->source); })())), 0))) {
            // line 15
            echo "
    <h2 class=\"p-5\">There is no order in your account</h2>

 ";
        } else {
            // line 19
            echo "

        <div class=\"articles\" style=\"grid-row:1 ;\">
            <div class=\"orders\">

                <h1 style=\"margin-top: 80px; margin-bottom:30px\">Your previous orders:</h1>

                <table class=\"table\">
                    <thead>
                        <tr>
                            <td>Number</td>
                            <td>Address</td>
                            <td>Date</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 38
                echo "                            <tr>
                                <td>n°";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "adress", [], "any", false, false, false, 40), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "postalCode", [], "any", false, false, false, 40), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "city", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                                <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "purchasedAt", [], "any", false, false, false, 41), "format", [0 => "d/m/Y"], "method", false, false, false, 41), "html", null, true);
                echo "</td>
                                <td>
                                    <ul class=\"p-0\">
                                    ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p"], "purchaseItems", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 45), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "productTitle", [], "any", false, false, false, 45), "html", null, true);
                    echo " : ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 45)), "html", null, true);
                    echo "\$</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                                    </ul>
                                </td>
                                <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "total", [], "any", false, false, false, 49), "html", null, true);
                echo "\$</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                    </tbody>
                </table>

            </div>
        </div>



";
        }
        // line 61
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "purchases/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 61,  187 => 52,  178 => 49,  174 => 47,  161 => 45,  157 => 44,  151 => 41,  143 => 40,  139 => 39,  136 => 38,  132 => 37,  112 => 19,  106 => 15,  104 => 14,  101 => 13,  99 => 12,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}My orders{% endblock %}

{% block body %}

{% include \"navbar.html.twig\" %}


<div class=\"main\">

    {% include \"__categoriesSidebox.html.twig\" with {'categoryList': categoryList} %}

 {% if purchases | length == 0  %}

    <h2 class=\"p-5\">There is no order in your account</h2>

 {% else %}


        <div class=\"articles\" style=\"grid-row:1 ;\">
            <div class=\"orders\">

                <h1 style=\"margin-top: 80px; margin-bottom:30px\">Your previous orders:</h1>

                <table class=\"table\">
                    <thead>
                        <tr>
                            <td>Number</td>
                            <td>Address</td>
                            <td>Date</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        {% for p in purchases %}
                            <tr>
                                <td>n°{{p.id}}</td>
                                <td>{{p.adress}}<br>{{p.postalCode}}, {{p.city}}</td>
                                <td>{{p.purchasedAt.format('d/m/Y')}}</td>
                                <td>
                                    <ul class=\"p-0\">
                                    {% for item in p.purchaseItems %}
                                        <li>{{item.quantity}} x {{item.productTitle}} : {{item.total | price}}\$</li>
                                    {% endfor %}
                                    </ul>
                                </td>
                                <td>{{p.total}}\$</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>

            </div>
        </div>



{% endif %}


{% endblock %}", "purchases/index.html.twig", "/home/hugo/Desktop/SF-Projects/startproject/startapp/templates/purchases/index.html.twig");
    }
}
