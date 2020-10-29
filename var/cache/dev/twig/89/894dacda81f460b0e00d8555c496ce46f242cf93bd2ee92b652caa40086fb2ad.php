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

/* user/notifications.html.twig */
class __TwigTemplate_5a5ccaf8932f988fa99cfc66ab9213b7a0d64c49e8c8176d05026e9f7320103a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/notifications.html.twig"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "
";
        // line 7
        echo "<h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["user_first_name"]) || array_key_exists("user_first_name", $context) ? $context["user_first_name"] : (function () { throw new RuntimeError('Variable "user_first_name" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "!</h1>
<p>You have ";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 8, $this->source); })())), "html", null, true);
        echo " new notifications.</p>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
  </tr>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 16
            echo "  <tr>
    <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "first_name", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "last_name", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/user.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 3,  94 => 2,  84 => 21,  75 => 18,  71 => 17,  68 => 16,  64 => 15,  54 => 8,  49 => 7,  46 => 5,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# the CSS file lives at \"public/css/user.css\" #}
{% block stylesheets %}
    <link href=\"{{ asset('css/user.css') }}\" rel=\"stylesheet\" />
{% endblock %}

{# templates/user/notifications.html.twig #}
<h1>Hello {{ user_first_name }}!</h1>
<p>You have {{ notifications|length }} new notifications.</p>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
  </tr>
  {% for notification in notifications %}
  <tr>
    <td>{{ notification.first_name }}</td>
    <td>{{ notification.last_name }}</td>
  </tr>
  {% endfor %}
</table>", "user/notifications.html.twig", "/Users/tim_jiang/Desktop/symfony-php-learn/templates/user/notifications.html.twig");
    }
}
