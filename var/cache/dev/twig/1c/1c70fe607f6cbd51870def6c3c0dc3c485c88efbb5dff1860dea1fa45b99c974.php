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

/* navbar.html.twig */
class __TwigTemplate_daf4f952b8f6da5e97b580f6a75a3dd4e908377d183ead5f4db09de8f2a27a0e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\" id=\"navbar\">
    <a class=\"navbar-brand\" id=\"brand\" href=";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo ">E-Market</a>


    <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"navbar-item\" href=";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo ">Home</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"navbar-item\"  href=";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_arrivals");
        echo ">New arrivals</a>
            </li>
        </ul>
        <form class=\"form ml-auto mr-auto\" action=\"/search\" action=\"GET\">
         <input class=\"form-search\" name=\"item\" value=\"\" placeholder=\"Search..\">
        <button class=\"form-search-button\" type=\"submit\">Search</button>
        </form>

        <a class=\"navbar-item\" href=";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo ">Cart (";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 19, $this->source); })()), "total", [], "any", false, false, false, 19)), "html", null, true);
        echo "\$)</a>

        ";
        // line 21
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "        <a class=\"navbar-item\" href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
            echo ">Login</a>
           <a class=\"navbar-item\" href=";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_register");
            echo ">Register</a>
        ";
        } else {
            // line 24
            echo " 
        <a class=\"navbar-item\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
            echo "\" class=\"\">My orders</a>
        <a class=\"navbar-item\"href=";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
            echo ">Logout</a>
        ";
        }
        // line 28
        echo "    </div>

     <div class=\"dropdown-navbar menu-mobile\">
        <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Menu
        </a>
        <ul class=\"dropdown-menu p-3\" aria-labelledby=\"dropdownMenuLink\">
            <a class=\"navbar-item\" href=";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo ">Cart (";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 35, $this->source); })()), "total", [], "any", false, false, false, 35)), "html", null, true);
        echo "\$)</a>
            ";
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "            <a class=\"navbar-item\" href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
            echo ">Login</a>
            <a class=\"navbar-item\" href=";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_register");
            echo ">Register</a>
            ";
        } else {
            // line 39
            echo " 
            <a class=\"navbar-item\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
            echo "\" class=\"\">My orders</a>
            <a class=\"navbar-item\"href=";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
            echo ">Logout</a>
            ";
        }
        // line 43
        echo "        </ul>
    </div>

</nav>

 ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 49
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 50
                echo "            <div class=\"alert alert-dismissible alert-success text-center\">
                <strong>";
                // line 51
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 51,  158 => 50,  153 => 49,  149 => 48,  142 => 43,  137 => 41,  133 => 40,  130 => 39,  125 => 38,  120 => 37,  118 => 36,  112 => 35,  103 => 28,  98 => 26,  94 => 25,  91 => 24,  86 => 23,  81 => 22,  79 => 21,  72 => 19,  61 => 11,  55 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\" id=\"navbar\">
    <a class=\"navbar-brand\" id=\"brand\" href={{url(\"home\")}}>E-Market</a>


    <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"navbar-item\" href={{url(\"home\")}}>Home</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"navbar-item\"  href={{path('new_arrivals')}}>New arrivals</a>
            </li>
        </ul>
        <form class=\"form ml-auto mr-auto\" action=\"/search\" action=\"GET\">
         <input class=\"form-search\" name=\"item\" value=\"\" placeholder=\"Search..\">
        <button class=\"form-search-button\" type=\"submit\">Search</button>
        </form>

        <a class=\"navbar-item\" href={{url('cart')}}>Cart ({{cartService.total | price }}\$)</a>

        {% if not app.user %}
        <a class=\"navbar-item\" href={{url('app_login')}}>Login</a>
           <a class=\"navbar-item\" href={{url('app_register')}}>Register</a>
        {% else %} 
        <a class=\"navbar-item\" href=\"{{path('purchase_index')}}\" class=\"\">My orders</a>
        <a class=\"navbar-item\"href={{url('app_logout')}}>Logout</a>
        {% endif %}
    </div>

     <div class=\"dropdown-navbar menu-mobile\">
        <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Menu
        </a>
        <ul class=\"dropdown-menu p-3\" aria-labelledby=\"dropdownMenuLink\">
            <a class=\"navbar-item\" href={{url('cart')}}>Cart ({{cartService.total | price }}\$)</a>
            {% if not app.user %}
            <a class=\"navbar-item\" href={{url('app_login')}}>Login</a>
            <a class=\"navbar-item\" href={{url('app_register')}}>Register</a>
            {% else %} 
            <a class=\"navbar-item\" href=\"{{path('purchase_index')}}\" class=\"\">My orders</a>
            <a class=\"navbar-item\"href={{url('app_logout')}}>Logout</a>
            {% endif %}
        </ul>
    </div>

</nav>

 {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-dismissible alert-success text-center\">
                <strong>{{ message }}</strong>
            </div>
        {% endfor %}
{% endfor %}", "navbar.html.twig", "/home/hugo/Desktop/SF-Projects/startproject/startapp/templates/navbar.html.twig");
    }
}
