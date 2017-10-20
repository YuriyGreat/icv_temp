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
        $__internal_a6d0e3601d964abeff73832ed74c007cf4bb44af2f7147623f30d43afcd47f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d0e3601d964abeff73832ed74c007cf4bb44af2f7147623f30d43afcd47f8b->enter($__internal_a6d0e3601d964abeff73832ed74c007cf4bb44af2f7147623f30d43afcd47f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1669431c3862fc981ad306c91f45aa3b0ac612c69e3e518f38c8009ebad3f924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1669431c3862fc981ad306c91f45aa3b0ac612c69e3e518f38c8009ebad3f924->enter($__internal_1669431c3862fc981ad306c91f45aa3b0ac612c69e3e518f38c8009ebad3f924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a6d0e3601d964abeff73832ed74c007cf4bb44af2f7147623f30d43afcd47f8b->leave($__internal_a6d0e3601d964abeff73832ed74c007cf4bb44af2f7147623f30d43afcd47f8b_prof);

        
        $__internal_1669431c3862fc981ad306c91f45aa3b0ac612c69e3e518f38c8009ebad3f924->leave($__internal_1669431c3862fc981ad306c91f45aa3b0ac612c69e3e518f38c8009ebad3f924_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d05096fdca57eda1a331afaf0373c4476e0ec443683e7c568e4245c38a15caae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05096fdca57eda1a331afaf0373c4476e0ec443683e7c568e4245c38a15caae->enter($__internal_d05096fdca57eda1a331afaf0373c4476e0ec443683e7c568e4245c38a15caae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_206d9020b31c061e14899b94d0608c72ecbe8ec75ab44a1a6c4922bbf919f208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206d9020b31c061e14899b94d0608c72ecbe8ec75ab44a1a6c4922bbf919f208->enter($__internal_206d9020b31c061e14899b94d0608c72ecbe8ec75ab44a1a6c4922bbf919f208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_206d9020b31c061e14899b94d0608c72ecbe8ec75ab44a1a6c4922bbf919f208->leave($__internal_206d9020b31c061e14899b94d0608c72ecbe8ec75ab44a1a6c4922bbf919f208_prof);

        
        $__internal_d05096fdca57eda1a331afaf0373c4476e0ec443683e7c568e4245c38a15caae->leave($__internal_d05096fdca57eda1a331afaf0373c4476e0ec443683e7c568e4245c38a15caae_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15db7fd1f6a0bace1b844f2494ca130af8f385e9a2c74cc6c27bb8b99a51f149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15db7fd1f6a0bace1b844f2494ca130af8f385e9a2c74cc6c27bb8b99a51f149->enter($__internal_15db7fd1f6a0bace1b844f2494ca130af8f385e9a2c74cc6c27bb8b99a51f149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fbd475eaefefb239ffd5cf1446081b2669aa33c6a8b98499fa849c423e37ebb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd475eaefefb239ffd5cf1446081b2669aa33c6a8b98499fa849c423e37ebb5->enter($__internal_fbd475eaefefb239ffd5cf1446081b2669aa33c6a8b98499fa849c423e37ebb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fbd475eaefefb239ffd5cf1446081b2669aa33c6a8b98499fa849c423e37ebb5->leave($__internal_fbd475eaefefb239ffd5cf1446081b2669aa33c6a8b98499fa849c423e37ebb5_prof);

        
        $__internal_15db7fd1f6a0bace1b844f2494ca130af8f385e9a2c74cc6c27bb8b99a51f149->leave($__internal_15db7fd1f6a0bace1b844f2494ca130af8f385e9a2c74cc6c27bb8b99a51f149_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6100a0b6a8436e789b985e57268efc8223ea66efef9f886ef41971b88e6008c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6100a0b6a8436e789b985e57268efc8223ea66efef9f886ef41971b88e6008c7->enter($__internal_6100a0b6a8436e789b985e57268efc8223ea66efef9f886ef41971b88e6008c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce55e311307d8a8ff30414d382052629bbb31855f4e482f6ceaab2e34455a09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce55e311307d8a8ff30414d382052629bbb31855f4e482f6ceaab2e34455a09f->enter($__internal_ce55e311307d8a8ff30414d382052629bbb31855f4e482f6ceaab2e34455a09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce55e311307d8a8ff30414d382052629bbb31855f4e482f6ceaab2e34455a09f->leave($__internal_ce55e311307d8a8ff30414d382052629bbb31855f4e482f6ceaab2e34455a09f_prof);

        
        $__internal_6100a0b6a8436e789b985e57268efc8223ea66efef9f886ef41971b88e6008c7->leave($__internal_6100a0b6a8436e789b985e57268efc8223ea66efef9f886ef41971b88e6008c7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52ea6c61992019e27b818227c7eb41c30904312179c57397a2b24b514fa11c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ea6c61992019e27b818227c7eb41c30904312179c57397a2b24b514fa11c2d->enter($__internal_52ea6c61992019e27b818227c7eb41c30904312179c57397a2b24b514fa11c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b4813a8de6a00cc3c840531820c4fc8481e0dec077709d71159b5c34fdc536c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4813a8de6a00cc3c840531820c4fc8481e0dec077709d71159b5c34fdc536c0->enter($__internal_b4813a8de6a00cc3c840531820c4fc8481e0dec077709d71159b5c34fdc536c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b4813a8de6a00cc3c840531820c4fc8481e0dec077709d71159b5c34fdc536c0->leave($__internal_b4813a8de6a00cc3c840531820c4fc8481e0dec077709d71159b5c34fdc536c0_prof);

        
        $__internal_52ea6c61992019e27b818227c7eb41c30904312179c57397a2b24b514fa11c2d->leave($__internal_52ea6c61992019e27b818227c7eb41c30904312179c57397a2b24b514fa11c2d_prof);

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
", "base.html.twig", "/home/yuriy/Documents/icv_temp/app/Resources/views/base.html.twig");
    }
}
