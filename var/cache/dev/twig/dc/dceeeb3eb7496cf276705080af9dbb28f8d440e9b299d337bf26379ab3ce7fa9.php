<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a0824bdb5c3cce7d8e5adf739f696d64bbeecbcb8a0c3a8cf3f63ba150b8918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0824bdb5c3cce7d8e5adf739f696d64bbeecbcb8a0c3a8cf3f63ba150b8918->enter($__internal_1a0824bdb5c3cce7d8e5adf739f696d64bbeecbcb8a0c3a8cf3f63ba150b8918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bb27740ef7169d2c044255bc0bfd064d76564e9854f4866b5688e634ca5feb9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb27740ef7169d2c044255bc0bfd064d76564e9854f4866b5688e634ca5feb9f->enter($__internal_bb27740ef7169d2c044255bc0bfd064d76564e9854f4866b5688e634ca5feb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_1a0824bdb5c3cce7d8e5adf739f696d64bbeecbcb8a0c3a8cf3f63ba150b8918->leave($__internal_1a0824bdb5c3cce7d8e5adf739f696d64bbeecbcb8a0c3a8cf3f63ba150b8918_prof);

        
        $__internal_bb27740ef7169d2c044255bc0bfd064d76564e9854f4866b5688e634ca5feb9f->leave($__internal_bb27740ef7169d2c044255bc0bfd064d76564e9854f4866b5688e634ca5feb9f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a615c63e65205211bc9e2796dbb1bc92892eb01a7fa3e8dfc0bbc8f45368f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a615c63e65205211bc9e2796dbb1bc92892eb01a7fa3e8dfc0bbc8f45368f50->enter($__internal_1a615c63e65205211bc9e2796dbb1bc92892eb01a7fa3e8dfc0bbc8f45368f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9200ecb0d0c8561733999f23e2b43cb35384798875169a1135a045c848d4f38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9200ecb0d0c8561733999f23e2b43cb35384798875169a1135a045c848d4f38f->enter($__internal_9200ecb0d0c8561733999f23e2b43cb35384798875169a1135a045c848d4f38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9200ecb0d0c8561733999f23e2b43cb35384798875169a1135a045c848d4f38f->leave($__internal_9200ecb0d0c8561733999f23e2b43cb35384798875169a1135a045c848d4f38f_prof);

        
        $__internal_1a615c63e65205211bc9e2796dbb1bc92892eb01a7fa3e8dfc0bbc8f45368f50->leave($__internal_1a615c63e65205211bc9e2796dbb1bc92892eb01a7fa3e8dfc0bbc8f45368f50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6273135fb2fb20a9e96c3b9078c10e04a4c5ad3d24ee71883a63862ff72faebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6273135fb2fb20a9e96c3b9078c10e04a4c5ad3d24ee71883a63862ff72faebf->enter($__internal_6273135fb2fb20a9e96c3b9078c10e04a4c5ad3d24ee71883a63862ff72faebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_738c27b7656873f302ef21aafcaae28fe43aabcc7207aa03c91106cd5bd46a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738c27b7656873f302ef21aafcaae28fe43aabcc7207aa03c91106cd5bd46a68->enter($__internal_738c27b7656873f302ef21aafcaae28fe43aabcc7207aa03c91106cd5bd46a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
        ";
        
        $__internal_738c27b7656873f302ef21aafcaae28fe43aabcc7207aa03c91106cd5bd46a68->leave($__internal_738c27b7656873f302ef21aafcaae28fe43aabcc7207aa03c91106cd5bd46a68_prof);

        
        $__internal_6273135fb2fb20a9e96c3b9078c10e04a4c5ad3d24ee71883a63862ff72faebf->leave($__internal_6273135fb2fb20a9e96c3b9078c10e04a4c5ad3d24ee71883a63862ff72faebf_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8728a24d3a231dbd1098d543c0241eb58f2647aedea6ed834c8ac9de53535bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8728a24d3a231dbd1098d543c0241eb58f2647aedea6ed834c8ac9de53535bed->enter($__internal_8728a24d3a231dbd1098d543c0241eb58f2647aedea6ed834c8ac9de53535bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bf8ec028c52d58ea1a69aea7e76d1775bc9c40f3ffebd80e3f4b1f9a77f2a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf8ec028c52d58ea1a69aea7e76d1775bc9c40f3ffebd80e3f4b1f9a77f2a88->enter($__internal_1bf8ec028c52d58ea1a69aea7e76d1775bc9c40f3ffebd80e3f4b1f9a77f2a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1bf8ec028c52d58ea1a69aea7e76d1775bc9c40f3ffebd80e3f4b1f9a77f2a88->leave($__internal_1bf8ec028c52d58ea1a69aea7e76d1775bc9c40f3ffebd80e3f4b1f9a77f2a88_prof);

        
        $__internal_8728a24d3a231dbd1098d543c0241eb58f2647aedea6ed834c8ac9de53535bed->leave($__internal_8728a24d3a231dbd1098d543c0241eb58f2647aedea6ed834c8ac9de53535bed_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c636e5512ff9f13d66abfb0de31244fc77b1ad228f00d14bcbf743cacae5f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c636e5512ff9f13d66abfb0de31244fc77b1ad228f00d14bcbf743cacae5f64->enter($__internal_0c636e5512ff9f13d66abfb0de31244fc77b1ad228f00d14bcbf743cacae5f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4c32c2d91e6f7f53c796138943067c71425008ef8305c9b6f812ebca7f2379fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c32c2d91e6f7f53c796138943067c71425008ef8305c9b6f812ebca7f2379fc->enter($__internal_4c32c2d91e6f7f53c796138943067c71425008ef8305c9b6f812ebca7f2379fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4c32c2d91e6f7f53c796138943067c71425008ef8305c9b6f812ebca7f2379fc->leave($__internal_4c32c2d91e6f7f53c796138943067c71425008ef8305c9b6f812ebca7f2379fc_prof);

        
        $__internal_0c636e5512ff9f13d66abfb0de31244fc77b1ad228f00d14bcbf743cacae5f64->leave($__internal_0c636e5512ff9f13d66abfb0de31244fc77b1ad228f00d14bcbf743cacae5f64_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 13,  103 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 14,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Symfony\\tienda_cervezas\\app\\Resources\\views\\base.html.twig");
    }
}
