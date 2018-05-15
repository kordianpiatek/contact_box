<?php

/* contact/edit_phone.html.twig */
class __TwigTemplate_f4e82fd34ba306bbd68880e04e0f3d5262291b7a9faa542507c56080e133a35d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/edit_phone.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/edit_phone.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/edit_phone.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("address_edit", array("id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">Address</a>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_edit", array("id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">Email</a>

    </div>
    <div class=\"modify\">
        <h2>Phone Number</h2>
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["phoneForm"] ?? $this->getContext($context, "phoneForm")), 'form_start');
        echo "
        <div class=\"form\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["phoneForm"] ?? $this->getContext($context, "phoneForm")), "number", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["phoneForm"] ?? $this->getContext($context, "phoneForm")), "number", array()), 'widget');
        echo "
        </div>
        <div class=\"form\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["phoneForm"] ?? $this->getContext($context, "phoneForm")), "type", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["phoneForm"] ?? $this->getContext($context, "phoneForm")), "type", array()), 'widget');
        echo "
        </div>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["phoneForm"] ?? $this->getContext($context, "phoneForm")), 'widget');
        echo "
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["phoneForm"] ?? $this->getContext($context, "phoneForm")), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/edit_phone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  105 => 27,  100 => 25,  96 => 24,  90 => 21,  86 => 20,  81 => 18,  73 => 13,  69 => 12,  65 => 11,  60 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <a href=\"{{ path('address_edit',{'id' : person.id}) }}\">Address</a>
        <a href=\"{{ path('email_edit',{'id' : person.id}) }}\">Email</a>

    </div>
    <div class=\"modify\">
        <h2>Phone Number</h2>
        {{ form_start(phoneForm) }}
        <div class=\"form\">
            {{ form_label(phoneForm.number) }}
            {{ form_widget(phoneForm.number) }}
        </div>
        <div class=\"form\">
            {{ form_label(phoneForm.type) }}
            {{ form_widget(phoneForm.type) }}
        </div>
        {{ form_widget(phoneForm) }}
        {{ form_end(phoneForm) }}
    </div>
{% endblock %}", "contact/edit_phone.html.twig", "/home/kordianpiatek/Workspace/contact_box/app/Resources/views/contact/edit_phone.html.twig");
    }
}
