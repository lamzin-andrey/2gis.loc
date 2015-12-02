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
        $__internal_66e22d15894f5f1080cee7a0f1da5e253e4d4ff3fb21089099ccf151f4b35840 = $this->env->getExtension("native_profiler");
        $__internal_66e22d15894f5f1080cee7a0f1da5e253e4d4ff3fb21089099ccf151f4b35840->enter($__internal_66e22d15894f5f1080cee7a0f1da5e253e4d4ff3fb21089099ccf151f4b35840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle:Default:anonymous_page.html.twig"));

        // line 1
        $this->loadTemplate("StudyAppSecurityBundle:Default:login.html.twig", "StudyAppStudyAppBundle:Default:anonymous_page.html.twig", 1)->display($context);
        
        $__internal_66e22d15894f5f1080cee7a0f1da5e253e4d4ff3fb21089099ccf151f4b35840->leave($__internal_66e22d15894f5f1080cee7a0f1da5e253e4d4ff3fb21089099ccf151f4b35840_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:anonymous_page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
