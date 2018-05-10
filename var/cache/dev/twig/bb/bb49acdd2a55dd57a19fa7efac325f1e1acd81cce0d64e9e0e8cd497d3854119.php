<?php

/* contact/edit_profile.html.twig */
class __TwigTemplate_5408f773f1b7b0e43519b084565f2223b3d6ba4517bad256ab01231e3732b6e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/edit_profile.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/edit_profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/edit_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"navbar\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_person");
        echo "\">Add</a>
        ";
        // line 10
        echo "
    </div>
<div class=\"modify\">
    <br><br><br>
    <div class=\"navedit\">
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("address_edit", array("id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">Address</a>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_edit", array("id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">Email</a>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phone_edit", array("id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">Phone Number</a>

    </div>
    <br><br><br>
    <h1>Modify Contact </h1>
    <h2>Personal data</h2>
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), 'form_start');
        echo "
    <div class=\"form\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "name", array()), 'label');
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "name", array()), 'widget');
        echo "
    </div>
    <div class=\"form\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "lastname", array()), 'label');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "lastname", array()), 'widget');
        echo "
    </div>
    <div class=\"form\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "personDescription", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "personDescription", array()), 'widget');
        echo "
    </div>
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), 'widget');
        echo "
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), 'form_end');
        echo "
--------------------------------------------------------------------------------------
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  118 => 36,  113 => 34,  109 => 33,  103 => 30,  99 => 29,  93 => 26,  89 => 25,  84 => 23,  75 => 17,  71 => 16,  67 => 15,  60 => 10,  56 => 8,  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{#{% block title %}Edit: {{ person.name }} {{ person.lastname }} {% endblock %}#}

{% block body %}
    <div class=\"navbar\">
        <a href=\"{{ path('home') }}\">Home</a>
        <a href=\"{{ path('new_person') }}\">Add</a>
        {#<a href=\"{{ path('search') }}\">Search</a>#}

    </div>
<div class=\"modify\">
    <br><br><br>
    <div class=\"navedit\">
        <a href=\"{{ path('address_edit',{'id' : person.id}) }}\">Address</a>
        <a href=\"{{ path('email_edit',{'id' : person.id}) }}\">Email</a>
        <a href=\"{{ path('phone_edit',{'id' : person.id}) }}\">Phone Number</a>

    </div>
    <br><br><br>
    <h1>Modify Contact </h1>
    <h2>Personal data</h2>
    {{ form_start(modifyForm) }}
    <div class=\"form\">
        {{ form_label(modifyForm.name) }}
        {{ form_widget(modifyForm.name) }}
    </div>
    <div class=\"form\">
        {{ form_label(modifyForm.lastname) }}
        {{ form_widget(modifyForm.lastname) }}
    </div>
    <div class=\"form\">
        {{ form_label(modifyForm.personDescription) }}
        {{ form_widget(modifyForm.personDescription) }}
    </div>
    {{ form_widget(modifyForm) }}
    {{ form_end(modifyForm) }}
--------------------------------------------------------------------------------------
</div>
{% endblock %}", "contact/edit_profile.html.twig", "/home/kordianpiatek/Workspace/contact_box/app/Resources/views/contact/edit_profile.html.twig");
    }
}
