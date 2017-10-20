<?php

/* security/login.html.twig */
class __TwigTemplate_4bb177b7a5d7f6b54e567686082257f165657b55087539c4bc329e7b2b6786e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9c7b622c9a6307b1fa9c849412f98ee79f0f5067e35b42a8a33a48730426e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c7b622c9a6307b1fa9c849412f98ee79f0f5067e35b42a8a33a48730426e77->enter($__internal_f9c7b622c9a6307b1fa9c849412f98ee79f0f5067e35b42a8a33a48730426e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_03375cfbf30aba8d350d9f728238199bec453f3664505c2583532d5b6106821f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03375cfbf30aba8d350d9f728238199bec453f3664505c2583532d5b6106821f->enter($__internal_03375cfbf30aba8d350d9f728238199bec453f3664505c2583532d5b6106821f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 3
        echo "
";
        // line 4
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 20
        echo "
    <button type=\"submit\">login</button>
</form>
";
        
        $__internal_f9c7b622c9a6307b1fa9c849412f98ee79f0f5067e35b42a8a33a48730426e77->leave($__internal_f9c7b622c9a6307b1fa9c849412f98ee79f0f5067e35b42a8a33a48730426e77_prof);

        
        $__internal_03375cfbf30aba8d350d9f728238199bec453f3664505c2583532d5b6106821f->leave($__internal_03375cfbf30aba8d350d9f728238199bec453f3664505c2583532d5b6106821f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  44 => 10,  39 => 8,  36 => 7,  30 => 5,  28 => 4,  25 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>
", "security/login.html.twig", "/home/yuriy/Documents/itransition-course-work/app/Resources/views/security/login.html.twig");
    }
}
