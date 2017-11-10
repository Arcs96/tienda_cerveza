<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb5646b07df75e6a124af2e4cc331d56907fee5d109157695f2954982c9342dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5646b07df75e6a124af2e4cc331d56907fee5d109157695f2954982c9342dc->enter($__internal_bb5646b07df75e6a124af2e4cc331d56907fee5d109157695f2954982c9342dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_da9e913b5a159cdf2234a700d3040fb1e688027c90b7465135744454936bd644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9e913b5a159cdf2234a700d3040fb1e688027c90b7465135744454936bd644->enter($__internal_da9e913b5a159cdf2234a700d3040fb1e688027c90b7465135744454936bd644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb5646b07df75e6a124af2e4cc331d56907fee5d109157695f2954982c9342dc->leave($__internal_bb5646b07df75e6a124af2e4cc331d56907fee5d109157695f2954982c9342dc_prof);

        
        $__internal_da9e913b5a159cdf2234a700d3040fb1e688027c90b7465135744454936bd644->leave($__internal_da9e913b5a159cdf2234a700d3040fb1e688027c90b7465135744454936bd644_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9acf0124caf7a3a95a34bc7dc6ca579f059a61adf140be1e014701bf9ede737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9acf0124caf7a3a95a34bc7dc6ca579f059a61adf140be1e014701bf9ede737->enter($__internal_a9acf0124caf7a3a95a34bc7dc6ca579f059a61adf140be1e014701bf9ede737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57313f94d2dcdff52890c4e455d37efa126284c513fcf51c2c1f6f4ccdcdbf3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57313f94d2dcdff52890c4e455d37efa126284c513fcf51c2c1f6f4ccdcdbf3a->enter($__internal_57313f94d2dcdff52890c4e455d37efa126284c513fcf51c2c1f6f4ccdcdbf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_57313f94d2dcdff52890c4e455d37efa126284c513fcf51c2c1f6f4ccdcdbf3a->leave($__internal_57313f94d2dcdff52890c4e455d37efa126284c513fcf51c2c1f6f4ccdcdbf3a_prof);

        
        $__internal_a9acf0124caf7a3a95a34bc7dc6ca579f059a61adf140be1e014701bf9ede737->leave($__internal_a9acf0124caf7a3a95a34bc7dc6ca579f059a61adf140be1e014701bf9ede737_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_971c8ff0b968d6fea0dc7bb406e494601b6572909c2650893b2e0934e5ab5dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971c8ff0b968d6fea0dc7bb406e494601b6572909c2650893b2e0934e5ab5dc2->enter($__internal_971c8ff0b968d6fea0dc7bb406e494601b6572909c2650893b2e0934e5ab5dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52db6ea3b5540f251f48dcb0641d031f439a740313d9f1d7ec88d65c97c85af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52db6ea3b5540f251f48dcb0641d031f439a740313d9f1d7ec88d65c97c85af3->enter($__internal_52db6ea3b5540f251f48dcb0641d031f439a740313d9f1d7ec88d65c97c85af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_52db6ea3b5540f251f48dcb0641d031f439a740313d9f1d7ec88d65c97c85af3->leave($__internal_52db6ea3b5540f251f48dcb0641d031f439a740313d9f1d7ec88d65c97c85af3_prof);

        
        $__internal_971c8ff0b968d6fea0dc7bb406e494601b6572909c2650893b2e0934e5ab5dc2->leave($__internal_971c8ff0b968d6fea0dc7bb406e494601b6572909c2650893b2e0934e5ab5dc2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d57a60d3f0ff6ac263b01a8aad7e59e1a9c4a275c4f73ceb785851cd6a5033de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57a60d3f0ff6ac263b01a8aad7e59e1a9c4a275c4f73ceb785851cd6a5033de->enter($__internal_d57a60d3f0ff6ac263b01a8aad7e59e1a9c4a275c4f73ceb785851cd6a5033de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_babf97a34a92c62730cb042a6825f31d8610356d81fc800b1502e0ad1e27f504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babf97a34a92c62730cb042a6825f31d8610356d81fc800b1502e0ad1e27f504->enter($__internal_babf97a34a92c62730cb042a6825f31d8610356d81fc800b1502e0ad1e27f504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_babf97a34a92c62730cb042a6825f31d8610356d81fc800b1502e0ad1e27f504->leave($__internal_babf97a34a92c62730cb042a6825f31d8610356d81fc800b1502e0ad1e27f504_prof);

        
        $__internal_d57a60d3f0ff6ac263b01a8aad7e59e1a9c4a275c4f73ceb785851cd6a5033de->leave($__internal_d57a60d3f0ff6ac263b01a8aad7e59e1a9c4a275c4f73ceb785851cd6a5033de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Symfony\\tienda_cervezas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
