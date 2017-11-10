<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6c4b578a4295e48288b4f3c7e68cf7d146d51d4f13e95d572a573cd1f9e96c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4b578a4295e48288b4f3c7e68cf7d146d51d4f13e95d572a573cd1f9e96c5b->enter($__internal_6c4b578a4295e48288b4f3c7e68cf7d146d51d4f13e95d572a573cd1f9e96c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3eba52c5e723028e423ea4fa52ba63ff24b780262ac7f60fc058f2324f951e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eba52c5e723028e423ea4fa52ba63ff24b780262ac7f60fc058f2324f951e40->enter($__internal_3eba52c5e723028e423ea4fa52ba63ff24b780262ac7f60fc058f2324f951e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c4b578a4295e48288b4f3c7e68cf7d146d51d4f13e95d572a573cd1f9e96c5b->leave($__internal_6c4b578a4295e48288b4f3c7e68cf7d146d51d4f13e95d572a573cd1f9e96c5b_prof);

        
        $__internal_3eba52c5e723028e423ea4fa52ba63ff24b780262ac7f60fc058f2324f951e40->leave($__internal_3eba52c5e723028e423ea4fa52ba63ff24b780262ac7f60fc058f2324f951e40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d64ac4502da046af5fdccf2e8589d257dec07d4ae3d3bbaf776ab4ee9e86ad11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64ac4502da046af5fdccf2e8589d257dec07d4ae3d3bbaf776ab4ee9e86ad11->enter($__internal_d64ac4502da046af5fdccf2e8589d257dec07d4ae3d3bbaf776ab4ee9e86ad11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1a83bf7b2fa1d68934fa3b83bd21971b2f61bd9f363b32f322e9d2eb5f137c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a83bf7b2fa1d68934fa3b83bd21971b2f61bd9f363b32f322e9d2eb5f137c2->enter($__internal_e1a83bf7b2fa1d68934fa3b83bd21971b2f61bd9f363b32f322e9d2eb5f137c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e1a83bf7b2fa1d68934fa3b83bd21971b2f61bd9f363b32f322e9d2eb5f137c2->leave($__internal_e1a83bf7b2fa1d68934fa3b83bd21971b2f61bd9f363b32f322e9d2eb5f137c2_prof);

        
        $__internal_d64ac4502da046af5fdccf2e8589d257dec07d4ae3d3bbaf776ab4ee9e86ad11->leave($__internal_d64ac4502da046af5fdccf2e8589d257dec07d4ae3d3bbaf776ab4ee9e86ad11_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2d87a00522519d4555617a151aaa8cf181051fd56e18c2d6b18e87b42667c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d87a00522519d4555617a151aaa8cf181051fd56e18c2d6b18e87b42667c05->enter($__internal_f2d87a00522519d4555617a151aaa8cf181051fd56e18c2d6b18e87b42667c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ebcb37477fd28674255195471d96a7567567c8a128f3eda7c183fd371cfe587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebcb37477fd28674255195471d96a7567567c8a128f3eda7c183fd371cfe587->enter($__internal_7ebcb37477fd28674255195471d96a7567567c8a128f3eda7c183fd371cfe587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7ebcb37477fd28674255195471d96a7567567c8a128f3eda7c183fd371cfe587->leave($__internal_7ebcb37477fd28674255195471d96a7567567c8a128f3eda7c183fd371cfe587_prof);

        
        $__internal_f2d87a00522519d4555617a151aaa8cf181051fd56e18c2d6b18e87b42667c05->leave($__internal_f2d87a00522519d4555617a151aaa8cf181051fd56e18c2d6b18e87b42667c05_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62e259f98a779bcfee07a0c318626bda6e7a0c5b9719124a73de34bbdd655fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e259f98a779bcfee07a0c318626bda6e7a0c5b9719124a73de34bbdd655fb9->enter($__internal_62e259f98a779bcfee07a0c318626bda6e7a0c5b9719124a73de34bbdd655fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_032d087637f5c3b21d7922abb345532695e22bc74c7e903dbe1d8bfe90c7fd53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032d087637f5c3b21d7922abb345532695e22bc74c7e903dbe1d8bfe90c7fd53->enter($__internal_032d087637f5c3b21d7922abb345532695e22bc74c7e903dbe1d8bfe90c7fd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_032d087637f5c3b21d7922abb345532695e22bc74c7e903dbe1d8bfe90c7fd53->leave($__internal_032d087637f5c3b21d7922abb345532695e22bc74c7e903dbe1d8bfe90c7fd53_prof);

        
        $__internal_62e259f98a779bcfee07a0c318626bda6e7a0c5b9719124a73de34bbdd655fb9->leave($__internal_62e259f98a779bcfee07a0c318626bda6e7a0c5b9719124a73de34bbdd655fb9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Symfony\\tienda_cervezas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
