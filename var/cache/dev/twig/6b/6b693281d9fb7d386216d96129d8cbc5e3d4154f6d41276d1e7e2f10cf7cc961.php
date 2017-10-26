<?php

/* default/index.html.twig */
class __TwigTemplate_e685ed4c5a9afa01fadd57a24b9e0c01697ea83a14d199d73fc764e51ec3b70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'form' => array($this, 'block_form'),
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a53dd08b6c9b2ee182576a316557e842cabc1db43f89ab2db05ae968597161c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53dd08b6c9b2ee182576a316557e842cabc1db43f89ab2db05ae968597161c8->enter($__internal_a53dd08b6c9b2ee182576a316557e842cabc1db43f89ab2db05ae968597161c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_adafec499eb6ef5bc923881f6142df004089912d6acbef0707776a9a2e262c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adafec499eb6ef5bc923881f6142df004089912d6acbef0707776a9a2e262c43->enter($__internal_adafec499eb6ef5bc923881f6142df004089912d6acbef0707776a9a2e262c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a53dd08b6c9b2ee182576a316557e842cabc1db43f89ab2db05ae968597161c8->leave($__internal_a53dd08b6c9b2ee182576a316557e842cabc1db43f89ab2db05ae968597161c8_prof);

        
        $__internal_adafec499eb6ef5bc923881f6142df004089912d6acbef0707776a9a2e262c43->leave($__internal_adafec499eb6ef5bc923881f6142df004089912d6acbef0707776a9a2e262c43_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46f91a33c9785b46ec30487eb13363320c2a5522626384f9316a02eb7bdaefe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f91a33c9785b46ec30487eb13363320c2a5522626384f9316a02eb7bdaefe6->enter($__internal_46f91a33c9785b46ec30487eb13363320c2a5522626384f9316a02eb7bdaefe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1dd7a217a1912ce878470f136729a43fcdf0611047506b899cc56ebe4b6f8f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd7a217a1912ce878470f136729a43fcdf0611047506b899cc56ebe4b6f8f81->enter($__internal_1dd7a217a1912ce878470f136729a43fcdf0611047506b899cc56ebe4b6f8f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/signin.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
";
        
        $__internal_1dd7a217a1912ce878470f136729a43fcdf0611047506b899cc56ebe4b6f8f81->leave($__internal_1dd7a217a1912ce878470f136729a43fcdf0611047506b899cc56ebe4b6f8f81_prof);

        
        $__internal_46f91a33c9785b46ec30487eb13363320c2a5522626384f9316a02eb7bdaefe6->leave($__internal_46f91a33c9785b46ec30487eb13363320c2a5522626384f9316a02eb7bdaefe6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_79cc38c8358223251485737dfbaadb101a6319bda50f31ce39e064dcd3845400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79cc38c8358223251485737dfbaadb101a6319bda50f31ce39e064dcd3845400->enter($__internal_79cc38c8358223251485737dfbaadb101a6319bda50f31ce39e064dcd3845400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68224ad931ed693e5af0e6b28965aa0cc42cf77b77e2e6a1cd9a1a8c28065f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68224ad931ed693e5af0e6b28965aa0cc42cf77b77e2e6a1cd9a1a8c28065f0b->enter($__internal_68224ad931ed693e5af0e6b28965aa0cc42cf77b77e2e6a1cd9a1a8c28065f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container panelForm\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("NewsLogo.jpg"), "html", null, true);
        echo "\" class=\"logo\" alt=\"logo\">
        </a>

        ";
        // line 14
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "    </div>

    ";
        // line 17
        $this->displayBlock('message', $context, $blocks);
        
        $__internal_68224ad931ed693e5af0e6b28965aa0cc42cf77b77e2e6a1cd9a1a8c28065f0b->leave($__internal_68224ad931ed693e5af0e6b28965aa0cc42cf77b77e2e6a1cd9a1a8c28065f0b_prof);

        
        $__internal_79cc38c8358223251485737dfbaadb101a6319bda50f31ce39e064dcd3845400->leave($__internal_79cc38c8358223251485737dfbaadb101a6319bda50f31ce39e064dcd3845400_prof);

    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
        $__internal_30edbcb97df91232bd9d17763c41f83dfe19e358e0fabafe0d010c02916fb818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30edbcb97df91232bd9d17763c41f83dfe19e358e0fabafe0d010c02916fb818->enter($__internal_30edbcb97df91232bd9d17763c41f83dfe19e358e0fabafe0d010c02916fb818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_239c43c283102d2885c70b2dd4844f446a6e584b2c221e380587ace75dd478f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239c43c283102d2885c70b2dd4844f446a6e584b2c221e380587ace75dd478f0->enter($__internal_239c43c283102d2885c70b2dd4844f446a6e584b2c221e380587ace75dd478f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_239c43c283102d2885c70b2dd4844f446a6e584b2c221e380587ace75dd478f0->leave($__internal_239c43c283102d2885c70b2dd4844f446a6e584b2c221e380587ace75dd478f0_prof);

        
        $__internal_30edbcb97df91232bd9d17763c41f83dfe19e358e0fabafe0d010c02916fb818->leave($__internal_30edbcb97df91232bd9d17763c41f83dfe19e358e0fabafe0d010c02916fb818_prof);

    }

    // line 17
    public function block_message($context, array $blocks = array())
    {
        $__internal_977061967a960f338fb79bfc99ad1c4c529cd1b8edbd226c760c356a2e16b787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977061967a960f338fb79bfc99ad1c4c529cd1b8edbd226c760c356a2e16b787->enter($__internal_977061967a960f338fb79bfc99ad1c4c529cd1b8edbd226c760c356a2e16b787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        $__internal_321edfa700036efbac166f5f4bddffcb60899d5afeaf7100dacb7ec774d351a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321edfa700036efbac166f5f4bddffcb60899d5afeaf7100dacb7ec774d351a3->enter($__internal_321edfa700036efbac166f5f4bddffcb60899d5afeaf7100dacb7ec774d351a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        
        $__internal_321edfa700036efbac166f5f4bddffcb60899d5afeaf7100dacb7ec774d351a3->leave($__internal_321edfa700036efbac166f5f4bddffcb60899d5afeaf7100dacb7ec774d351a3_prof);

        
        $__internal_977061967a960f338fb79bfc99ad1c4c529cd1b8edbd226c760c356a2e16b787->leave($__internal_977061967a960f338fb79bfc99ad1c4c529cd1b8edbd226c760c356a2e16b787_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 17,  107 => 14,  97 => 17,  93 => 15,  91 => 14,  85 => 11,  81 => 10,  78 => 9,  69 => 8,  57 => 5,  52 => 4,  43 => 3,  11 => 1,);
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

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/signin.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"container panelForm\">
        <a href=\"{{ path('homepage') }}\">
            <img src=\"{{ asset('NewsLogo.jpg') }}\" class=\"logo\" alt=\"logo\">
        </a>

        {% block form %}{% endblock %}
    </div>

    {% block message %}{% endblock %}
{% endblock %}", "default/index.html.twig", "/home/yuriy/Documents/icv_temp/app/Resources/views/default/index.html.twig");
    }
}
