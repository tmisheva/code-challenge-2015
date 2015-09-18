<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_47300003348ae84e121021f717e7fe4f88ce996d81f173dca1049eaf2929c9ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b39dd9cbbec0d81b23d3359f9b4af81027bab7abe263cb96d0d6c128023381c1 = $this->env->getExtension("native_profiler");
        $__internal_b39dd9cbbec0d81b23d3359f9b4af81027bab7abe263cb96d0d6c128023381c1->enter($__internal_b39dd9cbbec0d81b23d3359f9b4af81027bab7abe263cb96d0d6c128023381c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b39dd9cbbec0d81b23d3359f9b4af81027bab7abe263cb96d0d6c128023381c1->leave($__internal_b39dd9cbbec0d81b23d3359f9b4af81027bab7abe263cb96d0d6c128023381c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_071e31d758048309f3236d98470730bddc0367babde35a015eb9bed77ac5f6dd = $this->env->getExtension("native_profiler");
        $__internal_071e31d758048309f3236d98470730bddc0367babde35a015eb9bed77ac5f6dd->enter($__internal_071e31d758048309f3236d98470730bddc0367babde35a015eb9bed77ac5f6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_071e31d758048309f3236d98470730bddc0367babde35a015eb9bed77ac5f6dd->leave($__internal_071e31d758048309f3236d98470730bddc0367babde35a015eb9bed77ac5f6dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebc7bb6c34cc307c0df46263a92f8ff9d02fa640d1a1fd7275d4604dabf0e785 = $this->env->getExtension("native_profiler");
        $__internal_ebc7bb6c34cc307c0df46263a92f8ff9d02fa640d1a1fd7275d4604dabf0e785->enter($__internal_ebc7bb6c34cc307c0df46263a92f8ff9d02fa640d1a1fd7275d4604dabf0e785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ebc7bb6c34cc307c0df46263a92f8ff9d02fa640d1a1fd7275d4604dabf0e785->leave($__internal_ebc7bb6c34cc307c0df46263a92f8ff9d02fa640d1a1fd7275d4604dabf0e785_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b0f2e6a71d8d3eca53c565806a444f07de466707f251c55b852edc8fd82772b = $this->env->getExtension("native_profiler");
        $__internal_9b0f2e6a71d8d3eca53c565806a444f07de466707f251c55b852edc8fd82772b->enter($__internal_9b0f2e6a71d8d3eca53c565806a444f07de466707f251c55b852edc8fd82772b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9b0f2e6a71d8d3eca53c565806a444f07de466707f251c55b852edc8fd82772b->leave($__internal_9b0f2e6a71d8d3eca53c565806a444f07de466707f251c55b852edc8fd82772b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
