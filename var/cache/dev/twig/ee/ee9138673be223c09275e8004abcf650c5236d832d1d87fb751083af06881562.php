<?php

/* TiendaBundle:Cerveza:form.html.twig */
class __TwigTemplate_3dd240030b388c8542d7f36818d8ac6bf632415727eb964d0bc27bacc140bcdd extends Twig_Template
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
        $__internal_eb7cb94e3959049be89e82bec944bfb04b9572910c41d6122a9b952b56c8e0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7cb94e3959049be89e82bec944bfb04b9572910c41d6122a9b952b56c8e0d1->enter($__internal_eb7cb94e3959049be89e82bec944bfb04b9572910c41d6122a9b952b56c8e0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TiendaBundle:Cerveza:form.html.twig"));

        $__internal_f07494345481b94ac61778b0da7610e26e49af38a39cc3cb37dfe4a20f7e6319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07494345481b94ac61778b0da7610e26e49af38a39cc3cb37dfe4a20f7e6319->enter($__internal_f07494345481b94ac61778b0da7610e26e49af38a39cc3cb37dfe4a20f7e6319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TiendaBundle:Cerveza:form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_eb7cb94e3959049be89e82bec944bfb04b9572910c41d6122a9b952b56c8e0d1->leave($__internal_eb7cb94e3959049be89e82bec944bfb04b9572910c41d6122a9b952b56c8e0d1_prof);

        
        $__internal_f07494345481b94ac61778b0da7610e26e49af38a39cc3cb37dfe4a20f7e6319->leave($__internal_f07494345481b94ac61778b0da7610e26e49af38a39cc3cb37dfe4a20f7e6319_prof);

    }

    public function getTemplateName()
    {
        return "TiendaBundle:Cerveza:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
", "TiendaBundle:Cerveza:form.html.twig", "C:\\Symfony\\tienda_cervezas\\src\\TiendaBundle/Resources/views/Cerveza/form.html.twig");
    }
}
