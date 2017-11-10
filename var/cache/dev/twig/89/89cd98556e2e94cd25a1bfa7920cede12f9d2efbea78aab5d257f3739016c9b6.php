<?php

/* TiendaBundle:Cerveza:listarCerveza.html.twig */
class __TwigTemplate_7570039e92192da229a222f28b346e73ed5378e7ac9c91ce60bfe6c3e5833aaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TiendaBundle:Cerveza:listarCerveza.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87e3256b31650ec66d5542e8f3d5977c9bd189e37f463f2d776c9c77eb386a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e3256b31650ec66d5542e8f3d5977c9bd189e37f463f2d776c9c77eb386a49->enter($__internal_87e3256b31650ec66d5542e8f3d5977c9bd189e37f463f2d776c9c77eb386a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TiendaBundle:Cerveza:listarCerveza.html.twig"));

        $__internal_5369f5d5683a47f188b7e513723449ff704d2afa3f3b1f9890685f514420980d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5369f5d5683a47f188b7e513723449ff704d2afa3f3b1f9890685f514420980d->enter($__internal_5369f5d5683a47f188b7e513723449ff704d2afa3f3b1f9890685f514420980d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TiendaBundle:Cerveza:listarCerveza.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87e3256b31650ec66d5542e8f3d5977c9bd189e37f463f2d776c9c77eb386a49->leave($__internal_87e3256b31650ec66d5542e8f3d5977c9bd189e37f463f2d776c9c77eb386a49_prof);

        
        $__internal_5369f5d5683a47f188b7e513723449ff704d2afa3f3b1f9890685f514420980d->leave($__internal_5369f5d5683a47f188b7e513723449ff704d2afa3f3b1f9890685f514420980d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44cc054d85b522d7d71092bc556ecc93cba9a7c2621caf33e871d95bfd52d259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cc054d85b522d7d71092bc556ecc93cba9a7c2621caf33e871d95bfd52d259->enter($__internal_44cc054d85b522d7d71092bc556ecc93cba9a7c2621caf33e871d95bfd52d259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45128318955fc682c52ce04472f1dc30a1924ae7b407dd8fda794ddef21e5f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45128318955fc682c52ce04472f1dc30a1924ae7b407dd8fda794ddef21e5f7e->enter($__internal_45128318955fc682c52ce04472f1dc30a1924ae7b407dd8fda794ddef21e5f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cervezas de importación";
        
        $__internal_45128318955fc682c52ce04472f1dc30a1924ae7b407dd8fda794ddef21e5f7e->leave($__internal_45128318955fc682c52ce04472f1dc30a1924ae7b407dd8fda794ddef21e5f7e_prof);

        
        $__internal_44cc054d85b522d7d71092bc556ecc93cba9a7c2621caf33e871d95bfd52d259->leave($__internal_44cc054d85b522d7d71092bc556ecc93cba9a7c2621caf33e871d95bfd52d259_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb912861378a5688a1da4ebce43597fdd3314b0d9b813637250340216987927c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb912861378a5688a1da4ebce43597fdd3314b0d9b813637250340216987927c->enter($__internal_cb912861378a5688a1da4ebce43597fdd3314b0d9b813637250340216987927c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_531412eb17bf356b9bb6dcd55272275199a303630dcbe449688e645d09d1df69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531412eb17bf356b9bb6dcd55272275199a303630dcbe449688e645d09d1df69->enter($__internal_531412eb17bf356b9bb6dcd55272275199a303630dcbe449688e645d09d1df69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <div class=\"w3-container\">
  <h2>Cervezas Artesanales</h2>

  <br>

  <div class=\"w3-card-4\" style=\"width:50%\">
    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cerveza"] ?? $this->getContext($context, "cerveza")), "foto", array()), "html", null, true);
        echo "\" alt=\"Mountain View\">
    <div class=\"w3-container w3-center\">
      <div align=\"left\">

         <b>Nombre:</b>         ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cerveza"] ?? $this->getContext($context, "cerveza")), "nombre", array()), "html", null, true);
        echo "   <br>
         <b>País:</b>           ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cerveza"] ?? $this->getContext($context, "cerveza")), "pais", array()), "html", null, true);
        echo "     <br>
         <b>Población:</b>      ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cerveza"] ?? $this->getContext($context, "cerveza")), "poblacion", array()), "html", null, true);
        echo "<br>
         <b>Tipo:</b>           ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cerveza"] ?? $this->getContext($context, "cerveza")), "tipo", array()), "html", null, true);
        echo "     <br>

         <!-- Según sea 1/0 el valor obtenido del bool 'importacion',
              indicamos si la cerveza es o no de importación -->

         ";
        // line 25
        if ($this->getAttribute(($context["cerveza"] ?? $this->getContext($context, "cerveza")), "importacion", array())) {
            // line 26
            echo "         <b>Importación:</b>    Si  <br>
         ";
        } else {
            // line 28
            echo "         <b>Importación:</b>    No  <br>
         ";
        }
        // line 30
        echo "
         <b>Almacenamiento:</b> ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cerveza"] ?? $this->getContext($context, "cerveza")), "fechaAlmacenamiento", array()), "Y-M-D"), "html", null, true);
        echo "<br>
         <b>Cantidad:</b>       ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cerveza"] ?? $this->getContext($context, "cerveza")), "cantidad", array()), "html", null, true);
        echo " cl.

      </div>
    </div>
  </div>
  </div>

  </div>

  <br>

";
        
        $__internal_531412eb17bf356b9bb6dcd55272275199a303630dcbe449688e645d09d1df69->leave($__internal_531412eb17bf356b9bb6dcd55272275199a303630dcbe449688e645d09d1df69_prof);

        
        $__internal_cb912861378a5688a1da4ebce43597fdd3314b0d9b813637250340216987927c->leave($__internal_cb912861378a5688a1da4ebce43597fdd3314b0d9b813637250340216987927c_prof);

    }

    public function getTemplateName()
    {
        return "TiendaBundle:Cerveza:listarCerveza.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  117 => 31,  114 => 30,  110 => 28,  106 => 26,  104 => 25,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Cervezas de importación{% endblock %}

{% block body %}

  <div class=\"w3-container\">
  <h2>Cervezas Artesanales</h2>

  <br>

  <div class=\"w3-card-4\" style=\"width:50%\">
    <img src=\"{{cerveza.foto}}\" alt=\"Mountain View\">
    <div class=\"w3-container w3-center\">
      <div align=\"left\">

         <b>Nombre:</b>         {{cerveza.nombre}}   <br>
         <b>País:</b>           {{cerveza.pais}}     <br>
         <b>Población:</b>      {{cerveza.poblacion}}<br>
         <b>Tipo:</b>           {{cerveza.tipo}}     <br>

         <!-- Según sea 1/0 el valor obtenido del bool 'importacion',
              indicamos si la cerveza es o no de importación -->

         {% if cerveza.importacion %}
         <b>Importación:</b>    Si  <br>
         {% else %}
         <b>Importación:</b>    No  <br>
         {% endif %}

         <b>Almacenamiento:</b> {{cerveza.fechaAlmacenamiento | date('Y-M-D')}}<br>
         <b>Cantidad:</b>       {{cerveza.cantidad}} cl.

      </div>
    </div>
  </div>
  </div>

  </div>

  <br>

{% endblock %}
", "TiendaBundle:Cerveza:listarCerveza.html.twig", "C:\\Symfony\\tienda_cervezas\\src\\TiendaBundle/Resources/views/Cerveza/listarCerveza.html.twig");
    }
}
