<?php

/* TimeIncCatsVsDogsBundle::base.html.twig */
class __TwigTemplate_d82f7bedb0d6f08c8119f9e17ac980485a2ca9b316595c9db1f3e3d15633e075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de82a9018d2c86c3cac60013e9f3ba650a8553ba04467ccdaf80116574c4ae6f = $this->env->getExtension("native_profiler");
        $__internal_de82a9018d2c86c3cac60013e9f3ba650a8553ba04467ccdaf80116574c4ae6f->enter($__internal_de82a9018d2c86c3cac60013e9f3ba650a8553ba04467ccdaf80116574c4ae6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TimeIncCatsVsDogsBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Cats VS Dogs!</title>

    <!-- We all know that cats will win -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/timeinccatsvsdogs/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/timeinccatsvsdogs/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/timeinccatsvsdogs/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
    <nav class=\"navbar navbar-default navbar-static-top\">
        <div class=\"container\">
            <p class=\"navbar-text\">
                Cats VS Dogs! <em>The ultimate cuteness battle!</em>
            </p>
        </div>
    </nav>

    <div class=\"container\">

        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "    </div>
</body>
</html>


";
        
        $__internal_de82a9018d2c86c3cac60013e9f3ba650a8553ba04467ccdaf80116574c4ae6f->leave($__internal_de82a9018d2c86c3cac60013e9f3ba650a8553ba04467ccdaf80116574c4ae6f_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2b103f943c7f65b1e2c818cd2afa9c965116e13d8720a32620f558155a00526 = $this->env->getExtension("native_profiler");
        $__internal_d2b103f943c7f65b1e2c818cd2afa9c965116e13d8720a32620f558155a00526->enter($__internal_d2b103f943c7f65b1e2c818cd2afa9c965116e13d8720a32620f558155a00526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "        ";
        
        $__internal_d2b103f943c7f65b1e2c818cd2afa9c965116e13d8720a32620f558155a00526->leave($__internal_d2b103f943c7f65b1e2c818cd2afa9c965116e13d8720a32620f558155a00526_prof);

    }

    public function getTemplateName()
    {
        return "TimeIncCatsVsDogsBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  71 => 24,  59 => 26,  57 => 24,  41 => 11,  37 => 10,  32 => 8,  23 => 1,);
    }
}
