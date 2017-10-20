<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
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
        $__internal_e1c79d81ab7b314621e07cd0dd522d58d2da041480ec1e331285b23f945eeb5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c79d81ab7b314621e07cd0dd522d58d2da041480ec1e331285b23f945eeb5f->enter($__internal_e1c79d81ab7b314621e07cd0dd522d58d2da041480ec1e331285b23f945eeb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_34283cb937383889e0914bf0c6da40da9e0741b37525f0e86fa6b67395495817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34283cb937383889e0914bf0c6da40da9e0741b37525f0e86fa6b67395495817->enter($__internal_34283cb937383889e0914bf0c6da40da9e0741b37525f0e86fa6b67395495817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c79d81ab7b314621e07cd0dd522d58d2da041480ec1e331285b23f945eeb5f->leave($__internal_e1c79d81ab7b314621e07cd0dd522d58d2da041480ec1e331285b23f945eeb5f_prof);

        
        $__internal_34283cb937383889e0914bf0c6da40da9e0741b37525f0e86fa6b67395495817->leave($__internal_34283cb937383889e0914bf0c6da40da9e0741b37525f0e86fa6b67395495817_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a74aa247a7ca1fde70b2dd7559df66fa144be2bbaead5fc2200dbe94b627e8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74aa247a7ca1fde70b2dd7559df66fa144be2bbaead5fc2200dbe94b627e8f9->enter($__internal_a74aa247a7ca1fde70b2dd7559df66fa144be2bbaead5fc2200dbe94b627e8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c620a421e865a861f28347ec5814931c7b0f123d2f64a94a339b366332ec200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c620a421e865a861f28347ec5814931c7b0f123d2f64a94a339b366332ec200->enter($__internal_5c620a421e865a861f28347ec5814931c7b0f123d2f64a94a339b366332ec200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5c620a421e865a861f28347ec5814931c7b0f123d2f64a94a339b366332ec200->leave($__internal_5c620a421e865a861f28347ec5814931c7b0f123d2f64a94a339b366332ec200_prof);

        
        $__internal_a74aa247a7ca1fde70b2dd7559df66fa144be2bbaead5fc2200dbe94b627e8f9->leave($__internal_a74aa247a7ca1fde70b2dd7559df66fa144be2bbaead5fc2200dbe94b627e8f9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_606ee93f1709a52234f929d9b597739b3a28cc61cea401551be6dd0eb4eb30e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606ee93f1709a52234f929d9b597739b3a28cc61cea401551be6dd0eb4eb30e3->enter($__internal_606ee93f1709a52234f929d9b597739b3a28cc61cea401551be6dd0eb4eb30e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bbb633ff57c091b71a1aaa363607d5090d5688c590a090520d0dd1682aa310bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb633ff57c091b71a1aaa363607d5090d5688c590a090520d0dd1682aa310bf->enter($__internal_bbb633ff57c091b71a1aaa363607d5090d5688c590a090520d0dd1682aa310bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bbb633ff57c091b71a1aaa363607d5090d5688c590a090520d0dd1682aa310bf->leave($__internal_bbb633ff57c091b71a1aaa363607d5090d5688c590a090520d0dd1682aa310bf_prof);

        
        $__internal_606ee93f1709a52234f929d9b597739b3a28cc61cea401551be6dd0eb4eb30e3->leave($__internal_606ee93f1709a52234f929d9b597739b3a28cc61cea401551be6dd0eb4eb30e3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b46fd7829d09fa1ac1803390cebd118717c0eb996c05e22ea0b9de1daf2df7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b46fd7829d09fa1ac1803390cebd118717c0eb996c05e22ea0b9de1daf2df7e->enter($__internal_7b46fd7829d09fa1ac1803390cebd118717c0eb996c05e22ea0b9de1daf2df7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6f2ce555b597e0271104de121fa9c933ef2e16f6791f0f172e92f440f3a6063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f2ce555b597e0271104de121fa9c933ef2e16f6791f0f172e92f440f3a6063->enter($__internal_a6f2ce555b597e0271104de121fa9c933ef2e16f6791f0f172e92f440f3a6063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a6f2ce555b597e0271104de121fa9c933ef2e16f6791f0f172e92f440f3a6063->leave($__internal_a6f2ce555b597e0271104de121fa9c933ef2e16f6791f0f172e92f440f3a6063_prof);

        
        $__internal_7b46fd7829d09fa1ac1803390cebd118717c0eb996c05e22ea0b9de1daf2df7e->leave($__internal_7b46fd7829d09fa1ac1803390cebd118717c0eb996c05e22ea0b9de1daf2df7e_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/yuriy/Documents/itransition-course-work/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
