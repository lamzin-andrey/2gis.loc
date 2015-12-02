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
        $__internal_7faef694f6b9de4a8834d2396be64ad3d28ab6473c6ebc7e5b3dd064e87e2a2c = $this->env->getExtension("native_profiler");
        $__internal_7faef694f6b9de4a8834d2396be64ad3d28ab6473c6ebc7e5b3dd064e87e2a2c->enter($__internal_7faef694f6b9de4a8834d2396be64ad3d28ab6473c6ebc7e5b3dd064e87e2a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle:Default:index.html.twig"));

        // line 1
        $this->loadTemplate("StudyAppStudyAppBundle:Default:api_test.html.twig", "StudyAppStudyAppBundle:Default:index.html.twig", 1)->display($context);
        // line 2
        echo "

";
        
        $__internal_7faef694f6b9de4a8834d2396be64ad3d28ab6473c6ebc7e5b3dd064e87e2a2c->leave($__internal_7faef694f6b9de4a8834d2396be64ad3d28ab6473c6ebc7e5b3dd064e87e2a2c_prof);

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
