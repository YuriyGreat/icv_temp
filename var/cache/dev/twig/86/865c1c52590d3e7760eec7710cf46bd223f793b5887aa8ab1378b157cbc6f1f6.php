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
        $__internal_7fc35b39d51deea951abb7efc5d2679832dce1d09472783f6bc04355ad5e9757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc35b39d51deea951abb7efc5d2679832dce1d09472783f6bc04355ad5e9757->enter($__internal_7fc35b39d51deea951abb7efc5d2679832dce1d09472783f6bc04355ad5e9757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_50de9b5e50be0c6d47d027d38617e85092094eb9cd3eee94cb7afdd72f80385a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50de9b5e50be0c6d47d027d38617e85092094eb9cd3eee94cb7afdd72f80385a->enter($__internal_50de9b5e50be0c6d47d027d38617e85092094eb9cd3eee94cb7afdd72f80385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc35b39d51deea951abb7efc5d2679832dce1d09472783f6bc04355ad5e9757->leave($__internal_7fc35b39d51deea951abb7efc5d2679832dce1d09472783f6bc04355ad5e9757_prof);

        
        $__internal_50de9b5e50be0c6d47d027d38617e85092094eb9cd3eee94cb7afdd72f80385a->leave($__internal_50de9b5e50be0c6d47d027d38617e85092094eb9cd3eee94cb7afdd72f80385a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83f0168bc02e1133a08ab794ffbe605b8f5011f35447c8f6039641da320ebebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f0168bc02e1133a08ab794ffbe605b8f5011f35447c8f6039641da320ebebf->enter($__internal_83f0168bc02e1133a08ab794ffbe605b8f5011f35447c8f6039641da320ebebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a293d08f0c3df845fbcc022db37be9d40a7ee0a680d46037f704fab71927d915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a293d08f0c3df845fbcc022db37be9d40a7ee0a680d46037f704fab71927d915->enter($__internal_a293d08f0c3df845fbcc022db37be9d40a7ee0a680d46037f704fab71927d915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a293d08f0c3df845fbcc022db37be9d40a7ee0a680d46037f704fab71927d915->leave($__internal_a293d08f0c3df845fbcc022db37be9d40a7ee0a680d46037f704fab71927d915_prof);

        
        $__internal_83f0168bc02e1133a08ab794ffbe605b8f5011f35447c8f6039641da320ebebf->leave($__internal_83f0168bc02e1133a08ab794ffbe605b8f5011f35447c8f6039641da320ebebf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a38db9299a6da136e4566c83fa8f39ad311f422b259d21b076d58f08a25b0cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38db9299a6da136e4566c83fa8f39ad311f422b259d21b076d58f08a25b0cf2->enter($__internal_a38db9299a6da136e4566c83fa8f39ad311f422b259d21b076d58f08a25b0cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_85d309ce9f7809ecd729e532ff3199a57200fe0b46f3a76fec8b30d5bfd7a00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d309ce9f7809ecd729e532ff3199a57200fe0b46f3a76fec8b30d5bfd7a00e->enter($__internal_85d309ce9f7809ecd729e532ff3199a57200fe0b46f3a76fec8b30d5bfd7a00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_85d309ce9f7809ecd729e532ff3199a57200fe0b46f3a76fec8b30d5bfd7a00e->leave($__internal_85d309ce9f7809ecd729e532ff3199a57200fe0b46f3a76fec8b30d5bfd7a00e_prof);

        
        $__internal_a38db9299a6da136e4566c83fa8f39ad311f422b259d21b076d58f08a25b0cf2->leave($__internal_a38db9299a6da136e4566c83fa8f39ad311f422b259d21b076d58f08a25b0cf2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_365f58bd5a05b65b2bc7ca888140eb34c56ce22621e707bc76e424a902e6ee21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365f58bd5a05b65b2bc7ca888140eb34c56ce22621e707bc76e424a902e6ee21->enter($__internal_365f58bd5a05b65b2bc7ca888140eb34c56ce22621e707bc76e424a902e6ee21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_08c52d72c31dc88a303826b86464a1e92f504b8249e44040063bca59dfc16e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c52d72c31dc88a303826b86464a1e92f504b8249e44040063bca59dfc16e2d->enter($__internal_08c52d72c31dc88a303826b86464a1e92f504b8249e44040063bca59dfc16e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08c52d72c31dc88a303826b86464a1e92f504b8249e44040063bca59dfc16e2d->leave($__internal_08c52d72c31dc88a303826b86464a1e92f504b8249e44040063bca59dfc16e2d_prof);

        
        $__internal_365f58bd5a05b65b2bc7ca888140eb34c56ce22621e707bc76e424a902e6ee21->leave($__internal_365f58bd5a05b65b2bc7ca888140eb34c56ce22621e707bc76e424a902e6ee21_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/yuriy/Documents/icv_temp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
