<?php

/* contact/profile.html.twig */
class __TwigTemplate_d6be0c8d6aa0a495a51d6a18b54c64ba28fe6856b96a73ff487849bd551e9cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "lastname", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"navbar\">
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_person");
        echo "\">Add</a>

    </div>
    <div>
            <div>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "lastname", array()), "html", null, true);
        echo "</div><br>
            <div>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "personDescription", array()), "html", null, true);
        echo "</div>
        <div>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "addresses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 15
            echo "                <div>
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
            echo "//";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "street", array()), "html", null, true);
            echo "//";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "houseNumber", array()), "html", null, true);
            echo "//";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "apartamentNumber", array()), "html", null, true);
            echo "
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
        <div>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "emails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 22
            echo "                <div>
                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "emailAddress", array()), "html", null, true);
            echo "//";
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "type", array()), "html", null, true);
            echo "
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
        <div>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "phoneNumbers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 29
            echo "                <div>
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo "//";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "type", array()), "html", null, true);
            echo "
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 33,  151 => 30,  148 => 29,  144 => 28,  140 => 26,  129 => 23,  126 => 22,  122 => 21,  118 => 19,  103 => 16,  100 => 15,  96 => 14,  91 => 12,  85 => 11,  78 => 7,  74 => 6,  71 => 5,  62 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Contact: {{ person.name }} {{ person.lastname }}{% endblock %}
{% block body %}
    <div class=\"navbar\">
        <a href=\"{{ path('home') }}\">Home</a>
        <a href=\"{{ path('new_person') }}\">Add</a>

    </div>
    <div>
            <div>{{ person.name }} {{ person.lastname }}</div><br>
            <div>{{ person.personDescription }}</div>
        <div>
            {% for address in person.addresses %}
                <div>
                    {{ address.city }}//{{ address.street }}//{{ address.houseNumber }}//{{ address.apartamentNumber }}
                </div>
                {% endfor %}
        </div>
        <div>
            {% for email in person.emails %}
                <div>
                    {{ email.emailAddress }}//{{ email.type }}
                </div>
                {% endfor %}
        </div>
        <div>
            {% for phone in person.phoneNumbers %}
                <div>
                    {{ phone.number }}//{{ phone.type }}
                </div>
                {% endfor %}
        </div>
    </div>
{% endblock %}", "contact/profile.html.twig", "/home/kordianpiatek/Workspace/contact_box/app/Resources/views/contact/profile.html.twig");
    }
}
