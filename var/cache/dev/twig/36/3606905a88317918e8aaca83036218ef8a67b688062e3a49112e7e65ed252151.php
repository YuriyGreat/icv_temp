<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_da236ab8a6665be43ec1e21f7c9627e7b2e39c8a44daaf735c4a9a1cdacc4601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da236ab8a6665be43ec1e21f7c9627e7b2e39c8a44daaf735c4a9a1cdacc4601->enter($__internal_da236ab8a6665be43ec1e21f7c9627e7b2e39c8a44daaf735c4a9a1cdacc4601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3a6676f34eb6733fc71ec941d7c7882bc75c2b0180cea6b31212ddc4d81f31f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6676f34eb6733fc71ec941d7c7882bc75c2b0180cea6b31212ddc4d81f31f1->enter($__internal_3a6676f34eb6733fc71ec941d7c7882bc75c2b0180cea6b31212ddc4d81f31f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da236ab8a6665be43ec1e21f7c9627e7b2e39c8a44daaf735c4a9a1cdacc4601->leave($__internal_da236ab8a6665be43ec1e21f7c9627e7b2e39c8a44daaf735c4a9a1cdacc4601_prof);

        
        $__internal_3a6676f34eb6733fc71ec941d7c7882bc75c2b0180cea6b31212ddc4d81f31f1->leave($__internal_3a6676f34eb6733fc71ec941d7c7882bc75c2b0180cea6b31212ddc4d81f31f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ab9bed02d8aa77bbd41c46167f196a0519c2a0aaeaede51f1c3ec9005cabb54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab9bed02d8aa77bbd41c46167f196a0519c2a0aaeaede51f1c3ec9005cabb54->enter($__internal_3ab9bed02d8aa77bbd41c46167f196a0519c2a0aaeaede51f1c3ec9005cabb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1b54e4460d6a0016567c7e620eae083a0430f8ccc5304a8c321c90ab442ef84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b54e4460d6a0016567c7e620eae083a0430f8ccc5304a8c321c90ab442ef84d->enter($__internal_1b54e4460d6a0016567c7e620eae083a0430f8ccc5304a8c321c90ab442ef84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1b54e4460d6a0016567c7e620eae083a0430f8ccc5304a8c321c90ab442ef84d->leave($__internal_1b54e4460d6a0016567c7e620eae083a0430f8ccc5304a8c321c90ab442ef84d_prof);

        
        $__internal_3ab9bed02d8aa77bbd41c46167f196a0519c2a0aaeaede51f1c3ec9005cabb54->leave($__internal_3ab9bed02d8aa77bbd41c46167f196a0519c2a0aaeaede51f1c3ec9005cabb54_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56cc8f23cb68002bb055dde8ce75228c9e502acc7d641fcf395426afc0672305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56cc8f23cb68002bb055dde8ce75228c9e502acc7d641fcf395426afc0672305->enter($__internal_56cc8f23cb68002bb055dde8ce75228c9e502acc7d641fcf395426afc0672305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a170c7b01f394113c1111fddeb6666b49133f43a240ae3258e886bbfad79cd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a170c7b01f394113c1111fddeb6666b49133f43a240ae3258e886bbfad79cd8e->enter($__internal_a170c7b01f394113c1111fddeb6666b49133f43a240ae3258e886bbfad79cd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a170c7b01f394113c1111fddeb6666b49133f43a240ae3258e886bbfad79cd8e->leave($__internal_a170c7b01f394113c1111fddeb6666b49133f43a240ae3258e886bbfad79cd8e_prof);

        
        $__internal_56cc8f23cb68002bb055dde8ce75228c9e502acc7d641fcf395426afc0672305->leave($__internal_56cc8f23cb68002bb055dde8ce75228c9e502acc7d641fcf395426afc0672305_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5caf8f942ebafb3f45b97d877c99875b2391dcb3f1e86d2e66888ce68b261db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5caf8f942ebafb3f45b97d877c99875b2391dcb3f1e86d2e66888ce68b261db->enter($__internal_d5caf8f942ebafb3f45b97d877c99875b2391dcb3f1e86d2e66888ce68b261db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cccff11a0501e1bf0ea31551ab2403c652dc2fff9ec6eb332c8edfbff566de23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccff11a0501e1bf0ea31551ab2403c652dc2fff9ec6eb332c8edfbff566de23->enter($__internal_cccff11a0501e1bf0ea31551ab2403c652dc2fff9ec6eb332c8edfbff566de23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cccff11a0501e1bf0ea31551ab2403c652dc2fff9ec6eb332c8edfbff566de23->leave($__internal_cccff11a0501e1bf0ea31551ab2403c652dc2fff9ec6eb332c8edfbff566de23_prof);

        
        $__internal_d5caf8f942ebafb3f45b97d877c99875b2391dcb3f1e86d2e66888ce68b261db->leave($__internal_d5caf8f942ebafb3f45b97d877c99875b2391dcb3f1e86d2e66888ce68b261db_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/yuriy/Documents/itransition-course-work/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
