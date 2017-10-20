<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fd79a7d00c4de9a180d1cc402c95860fdb0dcb8da6a96d8c6f3b6b75783c2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd79a7d00c4de9a180d1cc402c95860fdb0dcb8da6a96d8c6f3b6b75783c2a6->enter($__internal_2fd79a7d00c4de9a180d1cc402c95860fdb0dcb8da6a96d8c6f3b6b75783c2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_82c7564e1ac13823c1096df0d339e6639399c33a01daabe1658f51f06a91a0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c7564e1ac13823c1096df0d339e6639399c33a01daabe1658f51f06a91a0e0->enter($__internal_82c7564e1ac13823c1096df0d339e6639399c33a01daabe1658f51f06a91a0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2fd79a7d00c4de9a180d1cc402c95860fdb0dcb8da6a96d8c6f3b6b75783c2a6->leave($__internal_2fd79a7d00c4de9a180d1cc402c95860fdb0dcb8da6a96d8c6f3b6b75783c2a6_prof);

        
        $__internal_82c7564e1ac13823c1096df0d339e6639399c33a01daabe1658f51f06a91a0e0->leave($__internal_82c7564e1ac13823c1096df0d339e6639399c33a01daabe1658f51f06a91a0e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73eb02e274bbceb3104c879382565fa32358213cbd6303cd9fa00a51ddc533f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73eb02e274bbceb3104c879382565fa32358213cbd6303cd9fa00a51ddc533f9->enter($__internal_73eb02e274bbceb3104c879382565fa32358213cbd6303cd9fa00a51ddc533f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_833191221118ed4c034a4262fee6368f6056ccbde73ef7c5daed711389746436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833191221118ed4c034a4262fee6368f6056ccbde73ef7c5daed711389746436->enter($__internal_833191221118ed4c034a4262fee6368f6056ccbde73ef7c5daed711389746436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_833191221118ed4c034a4262fee6368f6056ccbde73ef7c5daed711389746436->leave($__internal_833191221118ed4c034a4262fee6368f6056ccbde73ef7c5daed711389746436_prof);

        
        $__internal_73eb02e274bbceb3104c879382565fa32358213cbd6303cd9fa00a51ddc533f9->leave($__internal_73eb02e274bbceb3104c879382565fa32358213cbd6303cd9fa00a51ddc533f9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8499768f8df52f532815789028769899e99a369f46584e541ca275371ee0171e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8499768f8df52f532815789028769899e99a369f46584e541ca275371ee0171e->enter($__internal_8499768f8df52f532815789028769899e99a369f46584e541ca275371ee0171e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4bbecf73ef3f03782b7998ce6e5042f339d59dc6bbb1a457f778dee1467f1373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbecf73ef3f03782b7998ce6e5042f339d59dc6bbb1a457f778dee1467f1373->enter($__internal_4bbecf73ef3f03782b7998ce6e5042f339d59dc6bbb1a457f778dee1467f1373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4bbecf73ef3f03782b7998ce6e5042f339d59dc6bbb1a457f778dee1467f1373->leave($__internal_4bbecf73ef3f03782b7998ce6e5042f339d59dc6bbb1a457f778dee1467f1373_prof);

        
        $__internal_8499768f8df52f532815789028769899e99a369f46584e541ca275371ee0171e->leave($__internal_8499768f8df52f532815789028769899e99a369f46584e541ca275371ee0171e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_faedb94751b37905a64f5d12671d1e603aa295833407d7c5f77402537a4fc658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faedb94751b37905a64f5d12671d1e603aa295833407d7c5f77402537a4fc658->enter($__internal_faedb94751b37905a64f5d12671d1e603aa295833407d7c5f77402537a4fc658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14ce91bf9118db0387f7a1b191847a317c64ac6dac6ea7f86d4d19c0bf4733fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ce91bf9118db0387f7a1b191847a317c64ac6dac6ea7f86d4d19c0bf4733fb->enter($__internal_14ce91bf9118db0387f7a1b191847a317c64ac6dac6ea7f86d4d19c0bf4733fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14ce91bf9118db0387f7a1b191847a317c64ac6dac6ea7f86d4d19c0bf4733fb->leave($__internal_14ce91bf9118db0387f7a1b191847a317c64ac6dac6ea7f86d4d19c0bf4733fb_prof);

        
        $__internal_faedb94751b37905a64f5d12671d1e603aa295833407d7c5f77402537a4fc658->leave($__internal_faedb94751b37905a64f5d12671d1e603aa295833407d7c5f77402537a4fc658_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/yuriy/Documents/icv_temp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
