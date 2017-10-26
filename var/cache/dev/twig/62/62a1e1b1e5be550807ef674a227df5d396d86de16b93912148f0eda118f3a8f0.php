<?php

/* form/signIn.html.twig */
class __TwigTemplate_11bd39891eb936cdddf246a670e9be213dbce597c706716f8e5bf4df5d68f0a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "form/signIn.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'form' => array($this, 'block_form'),
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a6db33d35457871998a01e811a83ed9f0026c608c25b7e8b33dda51313fe219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6db33d35457871998a01e811a83ed9f0026c608c25b7e8b33dda51313fe219->enter($__internal_0a6db33d35457871998a01e811a83ed9f0026c608c25b7e8b33dda51313fe219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/signIn.html.twig"));

        $__internal_e59d190c6cd33cf8253a662e8bf60b4db40331a51fa174f667bb2992fb510c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59d190c6cd33cf8253a662e8bf60b4db40331a51fa174f667bb2992fb510c47->enter($__internal_e59d190c6cd33cf8253a662e8bf60b4db40331a51fa174f667bb2992fb510c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/signIn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6db33d35457871998a01e811a83ed9f0026c608c25b7e8b33dda51313fe219->leave($__internal_0a6db33d35457871998a01e811a83ed9f0026c608c25b7e8b33dda51313fe219_prof);

        
        $__internal_e59d190c6cd33cf8253a662e8bf60b4db40331a51fa174f667bb2992fb510c47->leave($__internal_e59d190c6cd33cf8253a662e8bf60b4db40331a51fa174f667bb2992fb510c47_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f17fb650fec247fd11005f29bc9dc4119a9763863def9e347bdae94bd850c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f17fb650fec247fd11005f29bc9dc4119a9763863def9e347bdae94bd850c2b->enter($__internal_7f17fb650fec247fd11005f29bc9dc4119a9763863def9e347bdae94bd850c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ef068f6c720a87db0f9c14352f0f2e5a99afc159a930e971e8a8c131701b59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef068f6c720a87db0f9c14352f0f2e5a99afc159a930e971e8a8c131701b59d->enter($__internal_1ef068f6c720a87db0f9c14352f0f2e5a99afc159a930e971e8a8c131701b59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Main page
";
        
        $__internal_1ef068f6c720a87db0f9c14352f0f2e5a99afc159a930e971e8a8c131701b59d->leave($__internal_1ef068f6c720a87db0f9c14352f0f2e5a99afc159a930e971e8a8c131701b59d_prof);

        
        $__internal_7f17fb650fec247fd11005f29bc9dc4119a9763863def9e347bdae94bd850c2b->leave($__internal_7f17fb650fec247fd11005f29bc9dc4119a9763863def9e347bdae94bd850c2b_prof);

    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        $__internal_5fabc99a582946fc27613eb2e133729f669a409ec137b71289b2ea3be546ba73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fabc99a582946fc27613eb2e133729f669a409ec137b71289b2ea3be546ba73->enter($__internal_5fabc99a582946fc27613eb2e133729f669a409ec137b71289b2ea3be546ba73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_b4c974f8dd357e2edbf42e493749f9ab415a1f2ba8ecc3454f27d8dcc4f8f5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c974f8dd357e2edbf42e493749f9ab415a1f2ba8ecc3454f27d8dcc4f8f5f9->enter($__internal_b4c974f8dd357e2edbf42e493749f9ab415a1f2ba8ecc3454f27d8dcc4f8f5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 8
        echo "    <form class=\"form-signin\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" method=\"POST\">
        <h3>Sign in to Quiz</h3>
        <input type=\"email\" name=\"_username\" id=\"Email\" class=\"form-control\" placeholder=\"Email\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        echo "\" required autofocus>
        <input type=\"password\" name=\"_password\" id=\"Password\" class=\"form-control\" placeholder=\"Password\" required>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recoverPassword");
        echo "\" class=\"help-block\">Forgot password?</a>
        <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Sign in</button>
    </form>

    <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        echo "\">
        <button type=\"button\" class=\"btn btn-lg btn-link btn-block\">Create an account</button>
    </a>
";
        
        $__internal_b4c974f8dd357e2edbf42e493749f9ab415a1f2ba8ecc3454f27d8dcc4f8f5f9->leave($__internal_b4c974f8dd357e2edbf42e493749f9ab415a1f2ba8ecc3454f27d8dcc4f8f5f9_prof);

        
        $__internal_5fabc99a582946fc27613eb2e133729f669a409ec137b71289b2ea3be546ba73->leave($__internal_5fabc99a582946fc27613eb2e133729f669a409ec137b71289b2ea3be546ba73_prof);

    }

    // line 21
    public function block_message($context, array $blocks = array())
    {
        $__internal_5c4780da2b6be38d191c0d2c2d6633e42be60d778f51851cc5fc36c2cfc08acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4780da2b6be38d191c0d2c2d6633e42be60d778f51851cc5fc36c2cfc08acd->enter($__internal_5c4780da2b6be38d191c0d2c2d6633e42be60d778f51851cc5fc36c2cfc08acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        $__internal_782ca8c24c3e6ac13e73411e81e5580295ed8af678b362c292947d8925a0d2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782ca8c24c3e6ac13e73411e81e5580295ed8af678b362c292947d8925a0d2a1->enter($__internal_782ca8c24c3e6ac13e73411e81e5580295ed8af678b362c292947d8925a0d2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        // line 22
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 23
            echo "        <div class=\"form-signin\">
            <div class=\"alert alert-danger\" role=\"alert\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        </div>
    ";
        }
        
        $__internal_782ca8c24c3e6ac13e73411e81e5580295ed8af678b362c292947d8925a0d2a1->leave($__internal_782ca8c24c3e6ac13e73411e81e5580295ed8af678b362c292947d8925a0d2a1_prof);

        
        $__internal_5c4780da2b6be38d191c0d2c2d6633e42be60d778f51851cc5fc36c2cfc08acd->leave($__internal_5c4780da2b6be38d191c0d2c2d6633e42be60d778f51851cc5fc36c2cfc08acd_prof);

    }

    public function getTemplateName()
    {
        return "form/signIn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 24,  115 => 23,  112 => 22,  103 => 21,  89 => 16,  82 => 12,  77 => 10,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Main page
{% endblock %}

{% block form %}
    <form class=\"form-signin\" action=\"{{ path('homepage') }}\" method=\"POST\">
        <h3>Sign in to Quiz</h3>
        <input type=\"email\" name=\"_username\" id=\"Email\" class=\"form-control\" placeholder=\"Email\" value=\"{{ email }}\" required autofocus>
        <input type=\"password\" name=\"_password\" id=\"Password\" class=\"form-control\" placeholder=\"Password\" required>
        <a href=\"{{ path('recoverPassword') }}\" class=\"help-block\">Forgot password?</a>
        <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Sign in</button>
    </form>

    <a href=\"{{ path('registration') }}\">
        <button type=\"button\" class=\"btn btn-lg btn-link btn-block\">Create an account</button>
    </a>
{% endblock %}

{% block message %}
    {% if error %}
        <div class=\"form-signin\">
            <div class=\"alert alert-danger\" role=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        </div>
    {% endif %}
{% endblock %}", "form/signIn.html.twig", "/home/yuriy/Documents/icv_temp/app/Resources/views/form/signIn.html.twig");
    }
}
