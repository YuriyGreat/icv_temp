<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_59ba658a23b13687cc28ac2fec4c2f51f628e0b2dbfcf2ae0ee08170f6d1b127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ba658a23b13687cc28ac2fec4c2f51f628e0b2dbfcf2ae0ee08170f6d1b127->enter($__internal_59ba658a23b13687cc28ac2fec4c2f51f628e0b2dbfcf2ae0ee08170f6d1b127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bf65f4a5d7fba8aa57da75bb689fec5f9815a9b76aa2373f27264f6159973456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf65f4a5d7fba8aa57da75bb689fec5f9815a9b76aa2373f27264f6159973456->enter($__internal_bf65f4a5d7fba8aa57da75bb689fec5f9815a9b76aa2373f27264f6159973456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ba658a23b13687cc28ac2fec4c2f51f628e0b2dbfcf2ae0ee08170f6d1b127->leave($__internal_59ba658a23b13687cc28ac2fec4c2f51f628e0b2dbfcf2ae0ee08170f6d1b127_prof);

        
        $__internal_bf65f4a5d7fba8aa57da75bb689fec5f9815a9b76aa2373f27264f6159973456->leave($__internal_bf65f4a5d7fba8aa57da75bb689fec5f9815a9b76aa2373f27264f6159973456_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_217093bf5dbc0a11bcd4f8ce0c34566af0a0345582fefd8ac1572d15cb323341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217093bf5dbc0a11bcd4f8ce0c34566af0a0345582fefd8ac1572d15cb323341->enter($__internal_217093bf5dbc0a11bcd4f8ce0c34566af0a0345582fefd8ac1572d15cb323341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d1e8ad1f50cf744a2e5c8d16163dff2e01fe527814e11364f9209457d6fa0636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e8ad1f50cf744a2e5c8d16163dff2e01fe527814e11364f9209457d6fa0636->enter($__internal_d1e8ad1f50cf744a2e5c8d16163dff2e01fe527814e11364f9209457d6fa0636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d1e8ad1f50cf744a2e5c8d16163dff2e01fe527814e11364f9209457d6fa0636->leave($__internal_d1e8ad1f50cf744a2e5c8d16163dff2e01fe527814e11364f9209457d6fa0636_prof);

        
        $__internal_217093bf5dbc0a11bcd4f8ce0c34566af0a0345582fefd8ac1572d15cb323341->leave($__internal_217093bf5dbc0a11bcd4f8ce0c34566af0a0345582fefd8ac1572d15cb323341_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b34a3c40046e3a06f13130e9d0ecb4b23b518c33b41ad9de07d0002b843fe10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34a3c40046e3a06f13130e9d0ecb4b23b518c33b41ad9de07d0002b843fe10c->enter($__internal_b34a3c40046e3a06f13130e9d0ecb4b23b518c33b41ad9de07d0002b843fe10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_14bd520f996497743ddd990bd0dec2d46755f0d5c55abdf02e2241043e763ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bd520f996497743ddd990bd0dec2d46755f0d5c55abdf02e2241043e763ba2->enter($__internal_14bd520f996497743ddd990bd0dec2d46755f0d5c55abdf02e2241043e763ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_14bd520f996497743ddd990bd0dec2d46755f0d5c55abdf02e2241043e763ba2->leave($__internal_14bd520f996497743ddd990bd0dec2d46755f0d5c55abdf02e2241043e763ba2_prof);

        
        $__internal_b34a3c40046e3a06f13130e9d0ecb4b23b518c33b41ad9de07d0002b843fe10c->leave($__internal_b34a3c40046e3a06f13130e9d0ecb4b23b518c33b41ad9de07d0002b843fe10c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d97187d1f2c6f08aa5d0b7c1a6af4eb58ce2e71d85a6dec06e1016cc658ae87c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d97187d1f2c6f08aa5d0b7c1a6af4eb58ce2e71d85a6dec06e1016cc658ae87c->enter($__internal_d97187d1f2c6f08aa5d0b7c1a6af4eb58ce2e71d85a6dec06e1016cc658ae87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b5f55f997ec3f8c6d23a125f79b74c13ff9ea2e5e5f7a2b2f63f459cac68f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5f55f997ec3f8c6d23a125f79b74c13ff9ea2e5e5f7a2b2f63f459cac68f4b->enter($__internal_6b5f55f997ec3f8c6d23a125f79b74c13ff9ea2e5e5f7a2b2f63f459cac68f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b5f55f997ec3f8c6d23a125f79b74c13ff9ea2e5e5f7a2b2f63f459cac68f4b->leave($__internal_6b5f55f997ec3f8c6d23a125f79b74c13ff9ea2e5e5f7a2b2f63f459cac68f4b_prof);

        
        $__internal_d97187d1f2c6f08aa5d0b7c1a6af4eb58ce2e71d85a6dec06e1016cc658ae87c->leave($__internal_d97187d1f2c6f08aa5d0b7c1a6af4eb58ce2e71d85a6dec06e1016cc658ae87c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/yuriy/Documents/itransition-course-work/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
