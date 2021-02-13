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

/* purchases/payment.html.twig */
class __TwigTemplate_c24181b96d3c68dac78cfe50142e5716d4f151c875c12d3cbfa57351a00c77c7 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchases/payment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchases/payment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "purchases/payment.html.twig", 1);
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

        // line 4
        echo "Payment with Stripe
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $this->loadTemplate("navbar.html.twig", "purchases/payment.html.twig", 9)->display($context);
        // line 10
        echo "
   <div class=\"main\">

        ";
        // line 13
        $this->loadTemplate("__categoriesSidebox.html.twig", "purchases/payment.html.twig", 13)->display(twig_array_merge($context, ["categoryList" => (isset($context["categoryList"]) || array_key_exists("categoryList", $context) ? $context["categoryList"] : (function () { throw new RuntimeError('Variable "categoryList" does not exist.', 13, $this->source); })())]));
        // line 14
        echo "
        <div class=\"articles pl-5\" style=\"grid-row:1 ;\">

            <h2 style=\"margin-top: 80px\">Secure payment with Stripe</h2>
            <hr>

            <form id=\"payment-form\" class=\"payment-form\">

               <div id=\"card-element\"><!--Stripe.js injects the Card Element--></div>

                <p id=\"card-error\" role=\"alert\"></p>

                <button class=\"payment-button\" id=\"submit\">

                   <div class=\"spinner hidden\" id=\"spinner\"></div>

                  <span id=\"button-text\">Validate payment</span>

                </button>
      
            </form>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "
";
        // line 43
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"https://js.stripe.com/v3/\"></script>
 <script>
    const clientSecret = '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["clientSecret"]) || array_key_exists("clientSecret", $context) ? $context["clientSecret"] : (function () { throw new RuntimeError('Variable "clientSecret" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "'
    const stripePublicKey = \"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["stripePublicKey"]) || array_key_exists("stripePublicKey", $context) ? $context["stripePublicKey"] : (function () { throw new RuntimeError('Variable "stripePublicKey" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "\";
    const redirectAfterSuccessUrl = \"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("purchase_payment_success", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\"
 </script>
 <script src=\"/js/payment.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "purchases/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 48,  161 => 47,  157 => 46,  151 => 43,  148 => 42,  138 => 41,  103 => 14,  101 => 13,  96 => 10,  94 => 9,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
Payment with Stripe
{% endblock %}

{% block body %}

{% include \"navbar.html.twig\" %}

   <div class=\"main\">

        {% include \"__categoriesSidebox.html.twig\" with {'categoryList': categoryList} %}

        <div class=\"articles pl-5\" style=\"grid-row:1 ;\">

            <h2 style=\"margin-top: 80px\">Secure payment with Stripe</h2>
            <hr>

            <form id=\"payment-form\" class=\"payment-form\">

               <div id=\"card-element\"><!--Stripe.js injects the Card Element--></div>

                <p id=\"card-error\" role=\"alert\"></p>

                <button class=\"payment-button\" id=\"submit\">

                   <div class=\"spinner hidden\" id=\"spinner\"></div>

                  <span id=\"button-text\">Validate payment</span>

                </button>
      
            </form>
        </div>

    </div>

{% endblock %}

{% block javascripts %}

{{ parent() }}
 <script src=\"https://js.stripe.com/v3/\"></script>
 <script>
    const clientSecret = '{{ clientSecret }}'
    const stripePublicKey = \"{{ stripePublicKey }}\";
    const redirectAfterSuccessUrl = \"{{   url('purchase_payment_success', {'id' : purchase.id })  }}\"
 </script>
 <script src=\"/js/payment.js\"></script>

{% endblock %}", "purchases/payment.html.twig", "/home/hugo/Desktop/SF-Projects/startproject/startapp/templates/purchases/payment.html.twig");
    }
}
