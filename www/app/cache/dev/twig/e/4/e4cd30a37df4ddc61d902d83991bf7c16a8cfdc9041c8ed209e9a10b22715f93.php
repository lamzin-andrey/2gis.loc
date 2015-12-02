<?php

/* StudyAppStudyAppBundle:Default:member_page.html.twig */
class __TwigTemplate_e4cd30a37df4ddc61d902d83991bf7c16a8cfdc9041c8ed209e9a10b22715f93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppStudyAppBundle:Default:member_page.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_482f6da5f61e5606abf9e8bfc82323e5f48f6b78c278f1e2f383f730817997db = $this->env->getExtension("native_profiler");
        $__internal_482f6da5f61e5606abf9e8bfc82323e5f48f6b78c278f1e2f383f730817997db->enter($__internal_482f6da5f61e5606abf9e8bfc82323e5f48f6b78c278f1e2f383f730817997db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle:Default:member_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482f6da5f61e5606abf9e8bfc82323e5f48f6b78c278f1e2f383f730817997db->leave($__internal_482f6da5f61e5606abf9e8bfc82323e5f48f6b78c278f1e2f383f730817997db_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_8ba8ce19b3aedc8b164f7bce75b2d207d0ff14b445c043e222e2a9e3d52ac3b7 = $this->env->getExtension("native_profiler");
        $__internal_8ba8ce19b3aedc8b164f7bce75b2d207d0ff14b445c043e222e2a9e3d52ac3b7->enter($__internal_8ba8ce19b3aedc8b164f7bce75b2d207d0ff14b445c043e222e2a9e3d52ac3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/commentlist.css"), "html", null, true);
        echo "\">
";
        
        $__internal_8ba8ce19b3aedc8b164f7bce75b2d207d0ff14b445c043e222e2a9e3d52ac3b7->leave($__internal_8ba8ce19b3aedc8b164f7bce75b2d207d0ff14b445c043e222e2a9e3d52ac3b7_prof);

    }

    // line 8
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_90966d468f14bd7c0ee9c8c73e30129c66938bc592f312407721ffc7fb212336 = $this->env->getExtension("native_profiler");
        $__internal_90966d468f14bd7c0ee9c8c73e30129c66938bc592f312407721ffc7fb212336->enter($__internal_90966d468f14bd7c0ee9c8c73e30129c66938bc592f312407721ffc7fb212336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 9
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script>
 \tvar totalPages = '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["pages_total"]) ? $context["pages_total"] : $this->getContext($context, "pages_total")), "html", null, true);
        echo "';
</script>\t
";
        
        $__internal_90966d468f14bd7c0ee9c8c73e30129c66938bc592f312407721ffc7fb212336->leave($__internal_90966d468f14bd7c0ee9c8c73e30129c66938bc592f312407721ffc7fb212336_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd94b226d9eaf5515ad5aeaf057441a4f8daa42f768ac6924950bb1ccf8a4b90 = $this->env->getExtension("native_profiler");
        $__internal_bd94b226d9eaf5515ad5aeaf057441a4f8daa42f768ac6924950bb1ccf8a4b90->enter($__internal_bd94b226d9eaf5515ad5aeaf057441a4f8daa42f768ac6924950bb1ccf8a4b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "\t";
        $this->loadTemplate("StudyAppStudyAppBundle:Default:article.html.twig", "StudyAppStudyAppBundle:Default:member_page.html.twig", 18)->display($context);
        // line 19
        echo "\t";
        $this->loadTemplate("StudyAppCommentBundle:Default:list.html.twig", "StudyAppStudyAppBundle:Default:member_page.html.twig", 19)->display($context);
        
        $__internal_bd94b226d9eaf5515ad5aeaf057441a4f8daa42f768ac6924950bb1ccf8a4b90->leave($__internal_bd94b226d9eaf5515ad5aeaf057441a4f8daa42f768ac6924950bb1ccf8a4b90_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:member_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  86 => 18,  80 => 17,  70 => 11,  65 => 9,  59 => 8,  50 => 5,  46 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
