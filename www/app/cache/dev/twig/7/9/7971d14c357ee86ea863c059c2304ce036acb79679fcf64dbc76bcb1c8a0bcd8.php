<?php

/* StudyAppStudyAppBundle:Default:index.html.twig */
class __TwigTemplate_7971d14c357ee86ea863c059c2304ce036acb79679fcf64dbc76bcb1c8a0bcd8 extends Twig_Template
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
        $__internal_98fd5c6c0864115176363b6cbf6c5f35199aafa078cfb32c21c75082a0ab7e04 = $this->env->getExtension("native_profiler");
        $__internal_98fd5c6c0864115176363b6cbf6c5f35199aafa078cfb32c21c75082a0ab7e04->enter($__internal_98fd5c6c0864115176363b6cbf6c5f35199aafa078cfb32c21c75082a0ab7e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle:Default:index.html.twig"));

        // line 1
        $this->loadTemplate("StudyAppStudyAppBundle:Default:api_test.html.twig", "StudyAppStudyAppBundle:Default:index.html.twig", 1)->display($context);
        // line 2
        echo "

";
        
        $__internal_98fd5c6c0864115176363b6cbf6c5f35199aafa078cfb32c21c75082a0ab7e04->leave($__internal_98fd5c6c0864115176363b6cbf6c5f35199aafa078cfb32c21c75082a0ab7e04_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }
}
