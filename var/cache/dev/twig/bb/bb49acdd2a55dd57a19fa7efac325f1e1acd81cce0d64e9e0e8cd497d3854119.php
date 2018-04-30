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
        echo "<div class=\"modify\">
    <div class=\"navbar\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_person");
        echo "\">Add</a>
        ";
        // line 11
        echo "
    </div>
    <br><br><br>
    <div class=\"navedit\">
        ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        // line 19
        echo "
    </div>
    <br><br><br>
    <h1>Modify Contact </h1>
    <h2>Personal data</h2>
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), 'form_start');
        echo "
    <div class=\"form\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "name", array()), 'label');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "name", array()), 'widget');
        echo "
    </div>
    <div class=\"form\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "lastname", array()), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "lastname", array()), 'widget');
        echo "
    </div>
    <div class=\"form\">
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "personDescription", array()), 'label');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), "personDescription", array()), 'widget');
        echo "
    </div>
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), 'widget');
        echo "
    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["modifyForm"] ?? $this->getContext($context, "modifyForm")), 'form_end');
        echo "
--------------------------------------------------------------------------------------
    <h2>Address</h2>
    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'form_start');
        echo "
    <div class=\"form\">
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "city", array()), 'label');
        echo "
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "city", array()), 'widget');
        echo "
    </div>
    <div class=\"form\">
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "street", array()), 'label');
        echo "
    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "street", array()), 'widget');
        echo "
    </div>
    <div class=\"form\">
    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "houseNumber", array()), 'label');
        echo "
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "houseNumber", array()), 'widget');
        echo "
    </div>
    <div class=\"form\">
    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "apartamentNumber", array()), 'label');
        echo "
    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "apartamentNumber", array()), 'widget');
        echo "
    </div>
    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'widget');
        echo "
    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'form_end');
        echo "

    --------------------------------------------------------------------------------------
    <h2>Email</h2>
    ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["emailForm"] ?? $this->getContext($context, "emailForm")), 'form_start');
        echo "
    <div class=\"form\">
    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["emailForm"] ?? $this->getContext($context, "emailForm")), "emailAddress", array()), 'label');
        echo "
    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["emailForm"] ?? $this->getContext($context, "emailForm")), "emailAddress", array()), 'widget');
        echo "
    </div>
    <div class=\"form\">
    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["emailForm"] ?? $this->getContext($context, "emailForm")), "type", array()), 'label');
        echo "
    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["emailForm"] ?? $this->getContext($context, "emailForm")), "type", array()), 'widget');
        echo "
    </div>
    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["emailForm"] ?? $this->getContext($context, "emailForm")), 'widget');
        echo "
    ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["emailForm"] ?? $this->getContext($context, "emailForm")), 'form_end');
        echo "

    --------------------------------------------------------------------------------------

    <h2>Phone Number</h2>
    ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["phoneNumberForm"] ?? $this->getContext($context, "phoneNumberForm")), 'form_start');
        echo "
    <div class=\"form\">
    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["phoneNumberForm"] ?? $this->getContext($context, "phoneNumberForm")), "number", array()), 'label');
        echo "
    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["phoneNumberForm"] ?? $this->getContext($context, "phoneNumberForm")), "number", array()), 'widget');
        echo "
    </div>
    <div class=\"form\">
    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["phoneNumberForm"] ?? $this->getContext($context, "phoneNumberForm")), "type", array()), 'label');
        echo "
    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["phoneNumberForm"] ?? $this->getContext($context, "phoneNumberForm")), "type", array()), 'widget');
        echo "
    </div>
    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["phoneNumberForm"] ?? $this->getContext($context, "phoneNumberForm")), 'widget');
        echo "
    ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["phoneNumberForm"] ?? $this->getContext($context, "phoneNumberForm")), 'form_end');
        echo "
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
        return array (  243 => 88,  239 => 87,  234 => 85,  230 => 84,  224 => 81,  220 => 80,  215 => 78,  207 => 73,  203 => 72,  198 => 70,  194 => 69,  188 => 66,  184 => 65,  179 => 63,  172 => 59,  168 => 58,  163 => 56,  159 => 55,  153 => 52,  149 => 51,  143 => 48,  139 => 47,  133 => 44,  129 => 43,  124 => 41,  118 => 38,  114 => 37,  109 => 35,  105 => 34,  99 => 31,  95 => 30,  89 => 27,  85 => 26,  80 => 24,  73 => 19,  71 => 18,  69 => 17,  67 => 16,  61 => 11,  57 => 9,  53 => 8,  49 => 6,  40 => 5,  11 => 1,);
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
<div class=\"modify\">
    <div class=\"navbar\">
        <a href=\"{{ path('home') }}\">Home</a>
        <a href=\"{{ path('new_person') }}\">Add</a>
        {#<a href=\"{{ path('search') }}\">Search</a>#}

    </div>
    <br><br><br>
    <div class=\"navedit\">
        {#<a href=\"{{ path('modify') }}\">Home</a>#}
        {#<a href=\"{{ path('address-modify') }}\">Add</a>#}
        {#<a href=\"{{ path('email-modify') }}\">Add</a>#}
        {#<a href=\"{{ path('phone-modify') }}\">Add</a>#}

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
    <h2>Email</h2>
    {{ form_start(emailForm) }}
    <div class=\"form\">
    {{ form_label(emailForm.emailAddress) }}
    {{ form_widget(emailForm.emailAddress) }}
    </div>
    <div class=\"form\">
    {{ form_label(emailForm.type) }}
    {{ form_widget(emailForm.type) }}
    </div>
    {{ form_widget(emailForm) }}
    {{ form_end(emailForm) }}

    --------------------------------------------------------------------------------------

    <h2>Phone Number</h2>
    {{ form_start(phoneNumberForm) }}
    <div class=\"form\">
    {{ form_label(phoneNumberForm.number) }}
    {{ form_widget(phoneNumberForm.number) }}
    </div>
    <div class=\"form\">
    {{ form_label(phoneNumberForm.type) }}
    {{ form_widget(phoneNumberForm.type) }}
    </div>
    {{ form_widget(phoneNumberForm) }}
    {{ form_end(phoneNumberForm) }}
</div>
{% endblock %}", "contact/edit_profile.html.twig", "/home/kordianpiatek/Workspace/contact_box/app/Resources/views/contact/edit_profile.html.twig");
    }
}
