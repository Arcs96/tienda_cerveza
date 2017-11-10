<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b09bad304c9c2284f506471daa34480dc2fa82a8d4f52d0556ea049ba54c37b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09bad304c9c2284f506471daa34480dc2fa82a8d4f52d0556ea049ba54c37b2->enter($__internal_b09bad304c9c2284f506471daa34480dc2fa82a8d4f52d0556ea049ba54c37b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e9079976f31fdce744307f122f2c4140887b3567bbfb9badd0d079358717d3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9079976f31fdce744307f122f2c4140887b3567bbfb9badd0d079358717d3f1->enter($__internal_e9079976f31fdce744307f122f2c4140887b3567bbfb9badd0d079358717d3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b09bad304c9c2284f506471daa34480dc2fa82a8d4f52d0556ea049ba54c37b2->leave($__internal_b09bad304c9c2284f506471daa34480dc2fa82a8d4f52d0556ea049ba54c37b2_prof);

        
        $__internal_e9079976f31fdce744307f122f2c4140887b3567bbfb9badd0d079358717d3f1->leave($__internal_e9079976f31fdce744307f122f2c4140887b3567bbfb9badd0d079358717d3f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64073fba012ada1bf4996c7d029fb98a77833e2e361332ba37d33c56c516e817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64073fba012ada1bf4996c7d029fb98a77833e2e361332ba37d33c56c516e817->enter($__internal_64073fba012ada1bf4996c7d029fb98a77833e2e361332ba37d33c56c516e817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_068503c91d7e79af9e18fc5dcbd8986cc75b900b7a1c3d50f07b3191c87b9b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068503c91d7e79af9e18fc5dcbd8986cc75b900b7a1c3d50f07b3191c87b9b36->enter($__internal_068503c91d7e79af9e18fc5dcbd8986cc75b900b7a1c3d50f07b3191c87b9b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_068503c91d7e79af9e18fc5dcbd8986cc75b900b7a1c3d50f07b3191c87b9b36->leave($__internal_068503c91d7e79af9e18fc5dcbd8986cc75b900b7a1c3d50f07b3191c87b9b36_prof);

        
        $__internal_64073fba012ada1bf4996c7d029fb98a77833e2e361332ba37d33c56c516e817->leave($__internal_64073fba012ada1bf4996c7d029fb98a77833e2e361332ba37d33c56c516e817_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cdcc7c4d7067f171dff999e419a907187c935f1f5ddaadf22a418d4dd4e15a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcc7c4d7067f171dff999e419a907187c935f1f5ddaadf22a418d4dd4e15a6f->enter($__internal_cdcc7c4d7067f171dff999e419a907187c935f1f5ddaadf22a418d4dd4e15a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_325da6378d3b063aaf25bd42553f1a321aa0f3f17effa1c804864514a3a8a98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325da6378d3b063aaf25bd42553f1a321aa0f3f17effa1c804864514a3a8a98a->enter($__internal_325da6378d3b063aaf25bd42553f1a321aa0f3f17effa1c804864514a3a8a98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_325da6378d3b063aaf25bd42553f1a321aa0f3f17effa1c804864514a3a8a98a->leave($__internal_325da6378d3b063aaf25bd42553f1a321aa0f3f17effa1c804864514a3a8a98a_prof);

        
        $__internal_cdcc7c4d7067f171dff999e419a907187c935f1f5ddaadf22a418d4dd4e15a6f->leave($__internal_cdcc7c4d7067f171dff999e419a907187c935f1f5ddaadf22a418d4dd4e15a6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_701b3521c82535b44ba2dcc2b2c799fb84b2b107a0fa00f05b911fec99da7bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701b3521c82535b44ba2dcc2b2c799fb84b2b107a0fa00f05b911fec99da7bdd->enter($__internal_701b3521c82535b44ba2dcc2b2c799fb84b2b107a0fa00f05b911fec99da7bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f70e98c4ad463de67d5f6e6d94b0daf14d69d4373f4ffde6485d0af7918f2c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70e98c4ad463de67d5f6e6d94b0daf14d69d4373f4ffde6485d0af7918f2c29->enter($__internal_f70e98c4ad463de67d5f6e6d94b0daf14d69d4373f4ffde6485d0af7918f2c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f70e98c4ad463de67d5f6e6d94b0daf14d69d4373f4ffde6485d0af7918f2c29->leave($__internal_f70e98c4ad463de67d5f6e6d94b0daf14d69d4373f4ffde6485d0af7918f2c29_prof);

        
        $__internal_701b3521c82535b44ba2dcc2b2c799fb84b2b107a0fa00f05b911fec99da7bdd->leave($__internal_701b3521c82535b44ba2dcc2b2c799fb84b2b107a0fa00f05b911fec99da7bdd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Symfony\\tienda_cervezas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
