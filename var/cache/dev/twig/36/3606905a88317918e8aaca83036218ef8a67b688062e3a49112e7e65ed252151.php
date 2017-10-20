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
        $__internal_03994755aa92d001877f62a4d1a6a00cbf754c165fe9e1f445feb92ea6586fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03994755aa92d001877f62a4d1a6a00cbf754c165fe9e1f445feb92ea6586fd9->enter($__internal_03994755aa92d001877f62a4d1a6a00cbf754c165fe9e1f445feb92ea6586fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_677fbc65620cc787d66ab71231c913724c37ab9ef7c87560a279fdada4e9b0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677fbc65620cc787d66ab71231c913724c37ab9ef7c87560a279fdada4e9b0b5->enter($__internal_677fbc65620cc787d66ab71231c913724c37ab9ef7c87560a279fdada4e9b0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03994755aa92d001877f62a4d1a6a00cbf754c165fe9e1f445feb92ea6586fd9->leave($__internal_03994755aa92d001877f62a4d1a6a00cbf754c165fe9e1f445feb92ea6586fd9_prof);

        
        $__internal_677fbc65620cc787d66ab71231c913724c37ab9ef7c87560a279fdada4e9b0b5->leave($__internal_677fbc65620cc787d66ab71231c913724c37ab9ef7c87560a279fdada4e9b0b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6612a3e3bb956f9df8997681bf5b5f4ee22f96efae132cd3fa596ee90621d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6612a3e3bb956f9df8997681bf5b5f4ee22f96efae132cd3fa596ee90621d63->enter($__internal_c6612a3e3bb956f9df8997681bf5b5f4ee22f96efae132cd3fa596ee90621d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8602e1704edc2f1072c2a9fce2a880d0e5f35aec30a43c3539ee0092b72d74d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8602e1704edc2f1072c2a9fce2a880d0e5f35aec30a43c3539ee0092b72d74d0->enter($__internal_8602e1704edc2f1072c2a9fce2a880d0e5f35aec30a43c3539ee0092b72d74d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8602e1704edc2f1072c2a9fce2a880d0e5f35aec30a43c3539ee0092b72d74d0->leave($__internal_8602e1704edc2f1072c2a9fce2a880d0e5f35aec30a43c3539ee0092b72d74d0_prof);

        
        $__internal_c6612a3e3bb956f9df8997681bf5b5f4ee22f96efae132cd3fa596ee90621d63->leave($__internal_c6612a3e3bb956f9df8997681bf5b5f4ee22f96efae132cd3fa596ee90621d63_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4abd76363e288aeb067ba61852adb59047ff09f5e00b996b1e2ab7dc5275fc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abd76363e288aeb067ba61852adb59047ff09f5e00b996b1e2ab7dc5275fc77->enter($__internal_4abd76363e288aeb067ba61852adb59047ff09f5e00b996b1e2ab7dc5275fc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b75bd8a17654eba0a3e233d8bafb13878a829b5be3c4bd1be6cee4c9d150ec9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75bd8a17654eba0a3e233d8bafb13878a829b5be3c4bd1be6cee4c9d150ec9e->enter($__internal_b75bd8a17654eba0a3e233d8bafb13878a829b5be3c4bd1be6cee4c9d150ec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b75bd8a17654eba0a3e233d8bafb13878a829b5be3c4bd1be6cee4c9d150ec9e->leave($__internal_b75bd8a17654eba0a3e233d8bafb13878a829b5be3c4bd1be6cee4c9d150ec9e_prof);

        
        $__internal_4abd76363e288aeb067ba61852adb59047ff09f5e00b996b1e2ab7dc5275fc77->leave($__internal_4abd76363e288aeb067ba61852adb59047ff09f5e00b996b1e2ab7dc5275fc77_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e8e66f9ee3e20ba211fa827f9682c70570ce3c57f3fc7ad9acc4ab059c36b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8e66f9ee3e20ba211fa827f9682c70570ce3c57f3fc7ad9acc4ab059c36b15->enter($__internal_6e8e66f9ee3e20ba211fa827f9682c70570ce3c57f3fc7ad9acc4ab059c36b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b656b98ac269e7affa82cd52e2c8beed9041788acf39eb05d837969feb1b8ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b656b98ac269e7affa82cd52e2c8beed9041788acf39eb05d837969feb1b8ec5->enter($__internal_b656b98ac269e7affa82cd52e2c8beed9041788acf39eb05d837969feb1b8ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b656b98ac269e7affa82cd52e2c8beed9041788acf39eb05d837969feb1b8ec5->leave($__internal_b656b98ac269e7affa82cd52e2c8beed9041788acf39eb05d837969feb1b8ec5_prof);

        
        $__internal_6e8e66f9ee3e20ba211fa827f9682c70570ce3c57f3fc7ad9acc4ab059c36b15->leave($__internal_6e8e66f9ee3e20ba211fa827f9682c70570ce3c57f3fc7ad9acc4ab059c36b15_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/yuriy/Documents/icv_temp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
