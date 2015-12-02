<?php

/* StudyAppSecurityBundle:Default:add.html.twig */
class __TwigTemplate_2c0c3a5c1d922ea30172298bb5dc92e1bbbd4296547763a844a4c102ab9efa96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppSecurityBundle:Default:add.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/authpage.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/signup.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_navbar($context, array $blocks = array())
    {
        // line 9
        echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <a class=\"navbar-brand white\" href=\"/\">";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Simple Application Example", array(), "messages");
        echo "</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/profile\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Change Profile", array(), "messages");
        echo "</a></li>
            <li><a href=\"#\" id=\"menu-add-comment\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comment", array(), "messages");
        echo "</a></li>
            <li><a href=\"/logout\">";
        // line 18
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
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Home", array(), "messages");
        echo "</a>
\t    </div>
\t    <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 33
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

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "<form class=\"form-authpage form-signup\" action=\"";
        echo $this->env->getExtension('routing')->getPath("study_app_user_create");
        echo "\" method=\"POST\">
\t<div class=\"bg-danger text-danger pad-15 ";
        // line 41
        if ( !(isset($context["error"]) ? $context["error"] : null)) {
            echo " hide ";
        }
        echo "\" id=\"errorsarea\">
\t   ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
\t   ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "
\t</div>
\t<h2 class=\"form-signup-heading\">";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome!", array(), "messages");
        echo "</h2>

\t<input type=\"text\" id=\"user_registration_type_username\" name=\"user_registration_type[username]\" required=\"required\" maxlength=\"64\" class=\"form-control\" placeholder=\"";
        // line 47
        echo $this->env->getExtension('translator')->getTranslator()->trans("Username", array(), "messages");
        echo " \" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "username", array()), "html", null, true);
        echo "\" />
\t<input type=\"email\" id=\"user_registration_type_email\" name=\"user_registration_type[email]\" required=\"required\" maxlength=\"64\" class=\"form-control\" placeholder=\"";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "email", array()), "html", null, true);
        echo "\"/>
\t<input type=\"password\" id=\"user_registration_type_password\" name=\"user_registration_type[password]\" required=\"required\" maxlength=\"60\" class=\"form-control\" placeholder=\"";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "\"  />
\t<input type=\"text\" id=\"user_registration_type_first_name\" name=\"user_registration_type[first_name]\" required=\"required\" maxlength=\"15\" pattern=\".{2,}\" class=\"form-control\" placeholder=\"";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("First Name", array(), "messages");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "firstName", array()), "html", null, true);
        echo "\" />
\t<input type=\"text\" id=\"user_registration_type_last_name\" name=\"user_registration_type[last_name]\" required=\"required\" maxlength=\"32\" class=\"form-control mar-bot-10\" placeholder=\"";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last Name", array(), "messages");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "lastName", array()), "html", null, true);
        echo "\" />
\t<input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"  value=\"";
        // line 52
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sign Up", array(), "messages");
        echo "\">
\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
\t
</form>
";
    }

    public function getTemplateName()
    {
        return "StudyAppSecurityBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 53,  163 => 52,  157 => 51,  151 => 50,  147 => 49,  141 => 48,  135 => 47,  130 => 45,  125 => 43,  121 => 42,  115 => 41,  110 => 40,  107 => 39,  95 => 33,  88 => 29,  74 => 18,  70 => 17,  66 => 16,  59 => 12,  54 => 9,  51 => 8,  45 => 6,  41 => 5,  37 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
