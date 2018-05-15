<?php

/* contact/edit_address.html.twig */
class __TwigTemplate_94fda40e7ed36cc60d94b935184f04f35fabc6353af5c7e4cbbd43f91a72c7a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/edit_address.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/edit_address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/edit_address.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"navbar\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_person");
        echo "\">Add</a>
        ";
        // line 8
        echo "
    </div>
    <div class=\"navedit\">
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">Personal Data</a>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_edit", array("id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">Email</a>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phone_edit", array("id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">Phone Number</a>

    </div>
    <div class=\"modify\">
        <h2>Address</h2>
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'form_start');
        echo "
        <div class=\"form\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "city", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "city", array()), 'widget');
        echo "
        </div>
        <div class=\"form\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "street", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "street", array()), 'widget');
        echo "
        </div>
        <div class=\"form\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "houseNumber", array()), 'label');
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "houseNumber", array()), 'widget');
        echo "
        </div>
        <div class=\"form\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "apartamentNumber", array()), 'label');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "apartamentNumber", array()), 'widget');
        echo "
        </div>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'widget');
        echo "
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'form_end');
        echo "

        --------------------------------------------------------------------------------------
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/edit_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 36,  125 => 35,  120 => 33,  116 => 32,  110 => 29,  106 => 28,  100 => 25,  96 => 24,  90 => 21,  86 => 20,  81 => 18,  73 => 13,  69 => 12,  65 => 11,  60 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"navbar\">
        <a href=\"{{ path('home') }}\">Home</a>
        <a href=\"{{ path('new_person') }}\">Add</a>
        {#<a href=\"{{ path('search') }}\">Search</a>#}

    </div>
    <div class=\"navedit\">
        <a href=\"{{ path('edit',{'id' : person.id}) }}\">Personal Data</a>
        <a href=\"{{ path('email_edit',{'id' : person.id}) }}\">Email</a>
        <a href=\"{{ path('phone_edit',{'id' : person.id}) }}\">Phone Number</a>

    </div>
    <div class=\"modify\">
        <h2>Address</h2>
        {{ form_start(addressForm) }}
        <div class=\"form\">
            {{ form_label(addressForm.city) }}
            {{ form_widget(addressForm.city) }}
        </div>
        <div class=\"form\">
            {{ form_label(addressForm.street) }}
            {{ form_widget(addressForm.street) }}
        </div>
        <div class=\"form\">
            {{ form_label(addressForm.houseNumber) }}
            {{ form_widget(addressForm.houseNumber) }}
        </div>
        <div class=\"form\">
            {{ form_label(addressForm.apartamentNumber) }}
            {{ form_widget(addressForm.apartamentNumber) }}
        </div>
        {{ form_widget(addressForm) }}
        {{ form_end(addressForm) }}

        --------------------------------------------------------------------------------------
    </div>
{% endblock %}", "contact/edit_address.html.twig", "/home/kordianpiatek/Workspace/contact_box/app/Resources/views/contact/edit_address.html.twig");
    }
}
