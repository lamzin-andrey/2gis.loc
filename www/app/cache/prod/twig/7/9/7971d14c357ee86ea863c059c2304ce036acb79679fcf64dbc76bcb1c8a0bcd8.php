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
        // line 1
        if ((isset($context["is_auth"]) ? $context["is_auth"] : null)) {
            // line 2
            $this->loadTemplate("StudyAppStudyAppBundle:Default:member_page.html.twig", "StudyAppStudyAppBundle:Default:index.html.twig", 2)->display($context);
        } else {
            // line 4
            $this->loadTemplate("StudyAppStudyAppBundle:Default:anonymous_page.html.twig", "StudyAppStudyAppBundle:Default:index.html.twig", 4)->display($context);
        }
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
        return array (  24 => 4,  21 => 2,  19 => 1,);
    }
}
