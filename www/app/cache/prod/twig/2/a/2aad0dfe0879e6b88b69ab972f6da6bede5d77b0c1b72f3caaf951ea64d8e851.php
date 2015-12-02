<?php

/* StudyAppStudyAppBundle:Default:anonymous_page.html.twig */
class __TwigTemplate_2aad0dfe0879e6b88b69ab972f6da6bede5d77b0c1b72f3caaf951ea64d8e851 extends Twig_Template
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
        $this->loadTemplate("StudyAppSecurityBundle:Default:login.html.twig", "StudyAppStudyAppBundle:Default:anonymous_page.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:anonymous_page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
