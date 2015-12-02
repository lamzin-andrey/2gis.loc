<?php

/* StudyAppSecurityBundle:Default:message.html.twig */
class __TwigTemplate_5b9a90ee29ac977a1bda6c385fe49e94c70e114efa2bf76c58ae8fa80a7a92a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppSecurityBundle:Default:message.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\">
";
    }

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        // line 7
        echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <a class=\"navbar-brand white\" href=\"/\">";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Simple Application Example", array(), "messages");
        echo "</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/profile\">";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Change Profile", array(), "messages");
        echo "</a></li>
            <li><a href=\"#\" id=\"menu-add-comment\">";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comment", array(), "messages");
        echo "</a></li>
            <li><a href=\"/logout\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
        echo "</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
         <div class=\"container\">
     <div class=\"row row-offcanvas row-offcanvas-right\">
     <div class=\"col-xs-12\">
\t\t<nav class=\"navbar navbar-fixed-top navbar-inverse\">
      <div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <a class=\"navbar-brand\" href=\"/\" >";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Home", array(), "messages");
        echo "</a>
\t    </div>
\t    <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("study_app_login");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
        echo "</a></li>
          </ul>
        </div>
  </div><!-- /.container -->
</nav><!-- /.navbar -->
";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"bg-";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " pad-15\">";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</div>
    ";
        // line 39
        if ((isset($context["route"]) ? $context["route"] : null)) {
            // line 40
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null));
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["link_text"]) ? $context["link_text"] : null), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "StudyAppSecurityBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  109 => 39,  102 => 38,  99 => 37,  87 => 31,  80 => 27,  66 => 16,  62 => 15,  58 => 14,  51 => 10,  46 => 7,  43 => 6,  37 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
