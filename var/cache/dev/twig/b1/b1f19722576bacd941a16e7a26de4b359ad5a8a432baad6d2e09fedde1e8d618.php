<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_94b8784544cc50c13fa584d3312fe87a8d0d56df859c77cf6d12a605ba1248dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b8784544cc50c13fa584d3312fe87a8d0d56df859c77cf6d12a605ba1248dd->enter($__internal_94b8784544cc50c13fa584d3312fe87a8d0d56df859c77cf6d12a605ba1248dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a5206ecba36d698fd1e7729b5f531f2835083ab0e60c8c383f1341dce78d272d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5206ecba36d698fd1e7729b5f531f2835083ab0e60c8c383f1341dce78d272d->enter($__internal_a5206ecba36d698fd1e7729b5f531f2835083ab0e60c8c383f1341dce78d272d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_94b8784544cc50c13fa584d3312fe87a8d0d56df859c77cf6d12a605ba1248dd->leave($__internal_94b8784544cc50c13fa584d3312fe87a8d0d56df859c77cf6d12a605ba1248dd_prof);

        
        $__internal_a5206ecba36d698fd1e7729b5f531f2835083ab0e60c8c383f1341dce78d272d->leave($__internal_a5206ecba36d698fd1e7729b5f531f2835083ab0e60c8c383f1341dce78d272d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9f9c86ef691715d239b9c4f4b6e76e6fc15d543c39bdc3777ab7d84ffcb20da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f9c86ef691715d239b9c4f4b6e76e6fc15d543c39bdc3777ab7d84ffcb20da->enter($__internal_e9f9c86ef691715d239b9c4f4b6e76e6fc15d543c39bdc3777ab7d84ffcb20da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2fde70af1fec6281a4369346f39b536aa6f04cc6db39e45f30ab342403bc14ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fde70af1fec6281a4369346f39b536aa6f04cc6db39e45f30ab342403bc14ed->enter($__internal_2fde70af1fec6281a4369346f39b536aa6f04cc6db39e45f30ab342403bc14ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2fde70af1fec6281a4369346f39b536aa6f04cc6db39e45f30ab342403bc14ed->leave($__internal_2fde70af1fec6281a4369346f39b536aa6f04cc6db39e45f30ab342403bc14ed_prof);

        
        $__internal_e9f9c86ef691715d239b9c4f4b6e76e6fc15d543c39bdc3777ab7d84ffcb20da->leave($__internal_e9f9c86ef691715d239b9c4f4b6e76e6fc15d543c39bdc3777ab7d84ffcb20da_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b3fe4620d9a4604bcaa47afb0924310d7ee87eaaedc688fc9764fb3a74cea50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3fe4620d9a4604bcaa47afb0924310d7ee87eaaedc688fc9764fb3a74cea50->enter($__internal_0b3fe4620d9a4604bcaa47afb0924310d7ee87eaaedc688fc9764fb3a74cea50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_80e67e890958308ee423b1c50963e57bb2782e32fede4f821b0026d4ad161d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e67e890958308ee423b1c50963e57bb2782e32fede4f821b0026d4ad161d27->enter($__internal_80e67e890958308ee423b1c50963e57bb2782e32fede4f821b0026d4ad161d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_80e67e890958308ee423b1c50963e57bb2782e32fede4f821b0026d4ad161d27->leave($__internal_80e67e890958308ee423b1c50963e57bb2782e32fede4f821b0026d4ad161d27_prof);

        
        $__internal_0b3fe4620d9a4604bcaa47afb0924310d7ee87eaaedc688fc9764fb3a74cea50->leave($__internal_0b3fe4620d9a4604bcaa47afb0924310d7ee87eaaedc688fc9764fb3a74cea50_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e904958bf51f5bc92b63b70b34764822068774b43f8e9ade85ce6d8747dd2e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e904958bf51f5bc92b63b70b34764822068774b43f8e9ade85ce6d8747dd2e02->enter($__internal_e904958bf51f5bc92b63b70b34764822068774b43f8e9ade85ce6d8747dd2e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2580879901933a22176ee4426c6f639af721bf0cfeb22f1b348b2dd102601124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2580879901933a22176ee4426c6f639af721bf0cfeb22f1b348b2dd102601124->enter($__internal_2580879901933a22176ee4426c6f639af721bf0cfeb22f1b348b2dd102601124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2580879901933a22176ee4426c6f639af721bf0cfeb22f1b348b2dd102601124->leave($__internal_2580879901933a22176ee4426c6f639af721bf0cfeb22f1b348b2dd102601124_prof);

        
        $__internal_e904958bf51f5bc92b63b70b34764822068774b43f8e9ade85ce6d8747dd2e02->leave($__internal_e904958bf51f5bc92b63b70b34764822068774b43f8e9ade85ce6d8747dd2e02_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_079adece9c8f5a7e71179160c80637b75593a33d0742a93e3889e2bbf7eecf6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079adece9c8f5a7e71179160c80637b75593a33d0742a93e3889e2bbf7eecf6f->enter($__internal_079adece9c8f5a7e71179160c80637b75593a33d0742a93e3889e2bbf7eecf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca68566414dda76fcc9f57829a6997c00f8412ef26ee687534bec7bd8f87c257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca68566414dda76fcc9f57829a6997c00f8412ef26ee687534bec7bd8f87c257->enter($__internal_ca68566414dda76fcc9f57829a6997c00f8412ef26ee687534bec7bd8f87c257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca68566414dda76fcc9f57829a6997c00f8412ef26ee687534bec7bd8f87c257->leave($__internal_ca68566414dda76fcc9f57829a6997c00f8412ef26ee687534bec7bd8f87c257_prof);

        
        $__internal_079adece9c8f5a7e71179160c80637b75593a33d0742a93e3889e2bbf7eecf6f->leave($__internal_079adece9c8f5a7e71179160c80637b75593a33d0742a93e3889e2bbf7eecf6f_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/yuriy/Documents/itransition-course-work/app/Resources/views/base.html.twig");
    }
}
