<?php

/* TimeIncCatsVsDogsBundle::layout.html.twig */
class __TwigTemplate_6cc25eae97d41fdc3816e793e7f81d28e39629f5f1ad15cfca55d4409ff2ebca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TimeIncCatsVsDogsBundle::base.html.twig", "TimeIncCatsVsDogsBundle::layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TimeIncCatsVsDogsBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97eb525aa97eb710b17f537ce4cb1ce306921e4c02b684ab51c8345f5d44cc4c = $this->env->getExtension("native_profiler");
        $__internal_97eb525aa97eb710b17f537ce4cb1ce306921e4c02b684ab51c8345f5d44cc4c->enter($__internal_97eb525aa97eb710b17f537ce4cb1ce306921e4c02b684ab51c8345f5d44cc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TimeIncCatsVsDogsBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97eb525aa97eb710b17f537ce4cb1ce306921e4c02b684ab51c8345f5d44cc4c->leave($__internal_97eb525aa97eb710b17f537ce4cb1ce306921e4c02b684ab51c8345f5d44cc4c_prof);

    }

    public function getTemplateName()
    {
        return "TimeIncCatsVsDogsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
