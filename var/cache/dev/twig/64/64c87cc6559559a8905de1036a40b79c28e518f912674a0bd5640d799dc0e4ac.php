<?php

/* contact/address_edit.html.twig */
class __TwigTemplate_99c7f66f161c61c5d4f045111ea92b595299e6547111724424a66950e16ad996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/address_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/address_edit.html.twig"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 20
        echo "    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/address_edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 20,  39 => 17,  37 => 16,  35 => 13,  33 => 12,  31 => 9,  29 => 8,  27 => 5,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<h2>Address</h2>#}
{#{{ form_start(addressForm) }}#}
{#<div class=\"form\">#}
    {#{{ form_label(addressForm.city) }}#}
    {#{{ form_widget(addressForm.city) }}#}
{#</div>#}
{#<div class=\"form\">#}
    {#{{ form_label(addressForm.street) }}#}
    {#{{ form_widget(addressForm.street) }}#}
{#</div>#}
{#<div class=\"form\">#}
    {#{{ form_label(addressForm.houseNumber) }}#}
    {#{{ form_widget(addressForm.houseNumber) }}#}
{#</div>#}
{#<div class=\"form\">#}
    {#{{ form_label(addressForm.apartamentNumber) }}#}
    {#{{ form_widget(addressForm.apartamentNumber) }}#}
{#</div>#}
{#{{ form_widget(addressForm) }}#}
    {#{{ form_end(addressForm) }}#}", "contact/address_edit.html.twig", "/home/kordianpiatek/Workspace/contact_box/app/Resources/views/contact/address_edit.html.twig");
    }
}
