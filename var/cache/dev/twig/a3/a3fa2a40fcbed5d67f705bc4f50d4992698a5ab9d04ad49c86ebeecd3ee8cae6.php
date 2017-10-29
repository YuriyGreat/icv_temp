<?php

/* form/registration.html.twig */
class __TwigTemplate_1e490e2cd1afcb482018fc436d069bdbfcbf561770cbdeeafc86766ca4304006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "form/registration.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_887c598bd6a6ea228b3bed6e53b933101db68ce60a50f57f1e722aca8f901022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887c598bd6a6ea228b3bed6e53b933101db68ce60a50f57f1e722aca8f901022->enter($__internal_887c598bd6a6ea228b3bed6e53b933101db68ce60a50f57f1e722aca8f901022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/registration.html.twig"));

        $__internal_a9c83128bd9d5a8bdb7a51c754013b7bc4c9aa149ec1c8e780f0e6e99fd4f272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c83128bd9d5a8bdb7a51c754013b7bc4c9aa149ec1c8e780f0e6e99fd4f272->enter($__internal_a9c83128bd9d5a8bdb7a51c754013b7bc4c9aa149ec1c8e780f0e6e99fd4f272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_887c598bd6a6ea228b3bed6e53b933101db68ce60a50f57f1e722aca8f901022->leave($__internal_887c598bd6a6ea228b3bed6e53b933101db68ce60a50f57f1e722aca8f901022_prof);

        
        $__internal_a9c83128bd9d5a8bdb7a51c754013b7bc4c9aa149ec1c8e780f0e6e99fd4f272->leave($__internal_a9c83128bd9d5a8bdb7a51c754013b7bc4c9aa149ec1c8e780f0e6e99fd4f272_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_435c1df0f8bbf35b5da740a4c5cf0fa1f441034871c2a84c193abac1a1d3ffd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435c1df0f8bbf35b5da740a4c5cf0fa1f441034871c2a84c193abac1a1d3ffd4->enter($__internal_435c1df0f8bbf35b5da740a4c5cf0fa1f441034871c2a84c193abac1a1d3ffd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0c6bbd821b005d8a88bdf5ffc74fe4a05c33dfbab94923927df54ce8e233260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c6bbd821b005d8a88bdf5ffc74fe4a05c33dfbab94923927df54ce8e233260->enter($__internal_e0c6bbd821b005d8a88bdf5ffc74fe4a05c33dfbab94923927df54ce8e233260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Registration
";
        
        $__internal_e0c6bbd821b005d8a88bdf5ffc74fe4a05c33dfbab94923927df54ce8e233260->leave($__internal_e0c6bbd821b005d8a88bdf5ffc74fe4a05c33dfbab94923927df54ce8e233260_prof);

        
        $__internal_435c1df0f8bbf35b5da740a4c5cf0fa1f441034871c2a84c193abac1a1d3ffd4->leave($__internal_435c1df0f8bbf35b5da740a4c5cf0fa1f441034871c2a84c193abac1a1d3ffd4_prof);

    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        $__internal_679600895c73304564c4e0d985f063dc3b9e47130a1481a83904ba95ecdc82b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_679600895c73304564c4e0d985f063dc3b9e47130a1481a83904ba95ecdc82b2->enter($__internal_679600895c73304564c4e0d985f063dc3b9e47130a1481a83904ba95ecdc82b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_e0144667203b25e218c00fd22c3873c38ef9884fe31476ca44e4ec0ad9cde254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0144667203b25e218c00fd22c3873c38ef9884fe31476ca44e4ec0ad9cde254->enter($__internal_e0144667203b25e218c00fd22c3873c38ef9884fe31476ca44e4ec0ad9cde254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 8
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-signin")));
        echo "
    <h3>Join Quiz</h3>
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(        // line 11
($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username", "autofocus" => "true")));
        // line 17
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(        // line 19
($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        // line 24
        echo "

    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(        // line 27
($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
        // line 32
        echo "

    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(        // line 35
($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Repeat password")));
        // line 40
        echo "

    <div class=\"checkbox check\">

    </div>

    <button type=\"submit\" class=\"btn btn-lg btn-info btn-block\">Create</button>
    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    ";
        // line 49
        if (($this->getAttribute(($context["errors"] ?? $this->getContext($context, "errors")), "count", array()) > 0)) {
            // line 50
            echo "        <div class=\"form-signin\">
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 52
                echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "getMessage", array(), "method"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </div>
    ";
        }
        
        $__internal_e0144667203b25e218c00fd22c3873c38ef9884fe31476ca44e4ec0ad9cde254->leave($__internal_e0144667203b25e218c00fd22c3873c38ef9884fe31476ca44e4ec0ad9cde254_prof);

        
        $__internal_679600895c73304564c4e0d985f063dc3b9e47130a1481a83904ba95ecdc82b2->leave($__internal_679600895c73304564c4e0d985f063dc3b9e47130a1481a83904ba95ecdc82b2_prof);

    }

    public function getTemplateName()
    {
        return "form/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 56,  125 => 53,  122 => 52,  118 => 51,  115 => 50,  113 => 49,  108 => 47,  99 => 40,  97 => 35,  96 => 34,  92 => 32,  90 => 27,  89 => 26,  85 => 24,  83 => 19,  82 => 18,  79 => 17,  77 => 11,  76 => 10,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block title %}
    Registration
{% endblock %}

{% block form %}
    {{ form_start(form, {'attr': {'class': 'form-signin'}}) }}
    <h3>Join Quiz</h3>
    {{ form_widget(
    form.username,
    {'attr': {
        'class': 'form-control',
        'placeholder': 'Username',
        'autofocus': 'true'
    }})
    }}
    {{ form_widget(
    form.email,
    {'attr': {
        'class': 'form-control',
        'placeholder': 'Email'
    }})
    }}

    {{ form_widget(
    form.plainPassword.first,
    {'attr': {
        'class': 'form-control',
        'placeholder': 'Password'
    }})
    }}

    {{ form_widget(
    form.plainPassword.second,
    {'attr': {
        'class': 'form-control',
        'placeholder': 'Repeat password'
    }})
    }}

    <div class=\"checkbox check\">

    </div>

    <button type=\"submit\" class=\"btn btn-lg btn-info btn-block\">Create</button>
    {{ form_end(form) }}

    {% if errors.count > 0 %}
        <div class=\"form-signin\">
            {% for error in errors %}
                <div class=\"alert alert-danger\" role=\"alert\">
                    {{ error.getMessage() }}
                </div>
            {% endfor%}
        </div>
    {% endif %}
{% endblock %}

", "form/registration.html.twig", "/home/yuriy/Documents/icv_temp/app/Resources/views/form/registration.html.twig");
    }
}
