<?php

/* form/recoverPassword.html.twig */
class __TwigTemplate_c7c427ebc3eb3c93b9d15ef67e8ecd60cef5933bf933d2733af25c7ee8908a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "form/recoverPassword.html.twig", 1);
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
        $__internal_535d8e089afd488bb87fa28339d2d2957af42d95ca6f906f1160ed02c3719449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535d8e089afd488bb87fa28339d2d2957af42d95ca6f906f1160ed02c3719449->enter($__internal_535d8e089afd488bb87fa28339d2d2957af42d95ca6f906f1160ed02c3719449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/recoverPassword.html.twig"));

        $__internal_09d5f38b1891fb6373bb3f5825aaae444b50746b0267a4f303c83694686a27ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d5f38b1891fb6373bb3f5825aaae444b50746b0267a4f303c83694686a27ff->enter($__internal_09d5f38b1891fb6373bb3f5825aaae444b50746b0267a4f303c83694686a27ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/recoverPassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_535d8e089afd488bb87fa28339d2d2957af42d95ca6f906f1160ed02c3719449->leave($__internal_535d8e089afd488bb87fa28339d2d2957af42d95ca6f906f1160ed02c3719449_prof);

        
        $__internal_09d5f38b1891fb6373bb3f5825aaae444b50746b0267a4f303c83694686a27ff->leave($__internal_09d5f38b1891fb6373bb3f5825aaae444b50746b0267a4f303c83694686a27ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21e925dc14880c02933e46670d9bfa93d96f78558f24dad699fbd836121e907f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e925dc14880c02933e46670d9bfa93d96f78558f24dad699fbd836121e907f->enter($__internal_21e925dc14880c02933e46670d9bfa93d96f78558f24dad699fbd836121e907f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e17361ecd6e7003a7365c4a23e0dd5d72fe3e32d356363a746d69c185eba7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e17361ecd6e7003a7365c4a23e0dd5d72fe3e32d356363a746d69c185eba7f2->enter($__internal_4e17361ecd6e7003a7365c4a23e0dd5d72fe3e32d356363a746d69c185eba7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Recover password
";
        
        $__internal_4e17361ecd6e7003a7365c4a23e0dd5d72fe3e32d356363a746d69c185eba7f2->leave($__internal_4e17361ecd6e7003a7365c4a23e0dd5d72fe3e32d356363a746d69c185eba7f2_prof);

        
        $__internal_21e925dc14880c02933e46670d9bfa93d96f78558f24dad699fbd836121e907f->leave($__internal_21e925dc14880c02933e46670d9bfa93d96f78558f24dad699fbd836121e907f_prof);

    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        $__internal_f823ff62fea49d697cb2d566bede08f3d8d0783ddaf8a80ce215bf4027c0be3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f823ff62fea49d697cb2d566bede08f3d8d0783ddaf8a80ce215bf4027c0be3b->enter($__internal_f823ff62fea49d697cb2d566bede08f3d8d0783ddaf8a80ce215bf4027c0be3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_4c17e03ba300849adc6aa910ddd826300018b736311226e3aa466ed740971a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c17e03ba300849adc6aa910ddd826300018b736311226e3aa466ed740971a41->enter($__internal_4c17e03ba300849adc6aa910ddd826300018b736311226e3aa466ed740971a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 8
        echo "    <form class=\"form-signin\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recover");
        echo "\" method=\"POST\">
        <h3>Recover password</h3>
        <input type=\"email\" name=\"Email\" class=\"form-control\" placeholder=\"Email\" required autofocus>
        <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block margin\">Recover</button>
    </form>
";
        
        $__internal_4c17e03ba300849adc6aa910ddd826300018b736311226e3aa466ed740971a41->leave($__internal_4c17e03ba300849adc6aa910ddd826300018b736311226e3aa466ed740971a41_prof);

        
        $__internal_f823ff62fea49d697cb2d566bede08f3d8d0783ddaf8a80ce215bf4027c0be3b->leave($__internal_f823ff62fea49d697cb2d566bede08f3d8d0783ddaf8a80ce215bf4027c0be3b_prof);

    }

    public function getTemplateName()
    {
        return "form/recoverPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Recover password
{% endblock %}

{% block form %}
    <form class=\"form-signin\" action=\"{{ path('recover') }}\" method=\"POST\">
        <h3>Recover password</h3>
        <input type=\"email\" name=\"Email\" class=\"form-control\" placeholder=\"Email\" required autofocus>
        <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block margin\">Recover</button>
    </form>
{% endblock %}", "form/recoverPassword.html.twig", "/home/yuriy/Documents/icv_temp/app/Resources/views/form/recoverPassword.html.twig");
    }
}
