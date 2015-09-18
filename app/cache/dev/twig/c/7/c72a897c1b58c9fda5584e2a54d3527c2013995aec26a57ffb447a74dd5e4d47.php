<?php

/* TimeIncCatsVsDogsBundle:Homepage:homepage.html.twig */
class __TwigTemplate_c72a897c1b58c9fda5584e2a54d3527c2013995aec26a57ffb447a74dd5e4d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TimeIncCatsVsDogsBundle::layout.html.twig", "TimeIncCatsVsDogsBundle:Homepage:homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TimeIncCatsVsDogsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25a3abbf9ef2682810a09835df108f5c39c2cf4a5b68a4b1829d204b3147c872 = $this->env->getExtension("native_profiler");
        $__internal_25a3abbf9ef2682810a09835df108f5c39c2cf4a5b68a4b1829d204b3147c872->enter($__internal_25a3abbf9ef2682810a09835df108f5c39c2cf4a5b68a4b1829d204b3147c872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TimeIncCatsVsDogsBundle:Homepage:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a3abbf9ef2682810a09835df108f5c39c2cf4a5b68a4b1829d204b3147c872->leave($__internal_25a3abbf9ef2682810a09835df108f5c39c2cf4a5b68a4b1829d204b3147c872_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd7dce61bfe9860b95ee95ebe6c84f4098ed4bf8f210abcb32c95545f57c0cb6 = $this->env->getExtension("native_profiler");
        $__internal_fd7dce61bfe9860b95ee95ebe6c84f4098ed4bf8f210abcb32c95545f57c0cb6->enter($__internal_fd7dce61bfe9860b95ee95ebe6c84f4098ed4bf8f210abcb32c95545f57c0cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"poll-container\" align=\"center\" data-cat=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "imageSrc", array()), "html", null, true);
        echo "\" data-dog=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dog"]) ? $context["dog"] : $this->getContext($context, "dog")), "imageSrc", array()), "html", null, true);
        echo "\">
                <script type=\"text/javascript\" charset=\"utf-8\" src=\"http://static.polldaddy.com/p/9081870.js\"></script>
                <noscript><a href=\"http://polldaddy.com/poll/9081870/\">Symfony Live London 2015 - Cats vs. Dogs</a></noscript>
            </div>
        </div>
    </div>

    <script>
        // This is really dirty but was written in 5 mins, so meh.
        var setImages = function() {

            var pollContainer = \$('.poll-container'),
                anchors = \$('.pds-answer-group'),
                answers = ['cat', 'dog'];

            anchors.each(function (index) {
                var container = \$(this);
                var a = container.find('a');
                var img = a.find('img');
                var input = container.find('input')[0];

                a.attr('href', pollContainer.data(answers[index]));

                img.attr('src', pollContainer.data(answers[index]));
                img.attr('width', '100%');
                img.removeAttr('height');

                a.click(function (e) {
                    e.preventDefault();
                    input.checked = true;
                });
            });
        };

        var pd_callback = function(data){
            setTimeout(function() {
                window.location = window.location.href;
            }, 2000);
        };

        setImages();
    </script>
";
        
        $__internal_fd7dce61bfe9860b95ee95ebe6c84f4098ed4bf8f210abcb32c95545f57c0cb6->leave($__internal_fd7dce61bfe9860b95ee95ebe6c84f4098ed4bf8f210abcb32c95545f57c0cb6_prof);

    }

    public function getTemplateName()
    {
        return "TimeIncCatsVsDogsBundle:Homepage:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
