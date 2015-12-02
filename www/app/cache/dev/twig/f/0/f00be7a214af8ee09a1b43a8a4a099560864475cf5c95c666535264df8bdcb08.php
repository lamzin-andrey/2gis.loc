<?php

/* StudyAppStudyAppBundle::layout.html.twig */
class __TwigTemplate_f00be7a214af8ee09a1b43a8a4a099560864475cf5c95c666535264df8bdcb08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c1a858f2dc83618d82d87f8efd60ffc97a8df9075a0f284e5a27a7793180899 = $this->env->getExtension("native_profiler");
        $__internal_5c1a858f2dc83618d82d87f8efd60ffc97a8df9075a0f284e5a27a7793180899->enter($__internal_5c1a858f2dc83618d82d87f8efd60ffc97a8df9075a0f284e5a27a7793180899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\">
\t<title>Simple Application Simfony 2</title>
\t";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        echo "\t";
        $this->displayBlock('javascript', $context, $blocks);
        // line 19
        echo "\t        
</head>
<body>
";
        // line 22
        $this->displayBlock('navbar', $context, $blocks);
        // line 53
        echo "<div class=\"container\">
    <div class=\"row row-offcanvas row-offcanvas-right\">
     <div class=\"col-xs-12\">
";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "\t</div>
\t</div>
\t</div>
</body>
</html>
";
        
        $__internal_5c1a858f2dc83618d82d87f8efd60ffc97a8df9075a0f284e5a27a7793180899->leave($__internal_5c1a858f2dc83618d82d87f8efd60ffc97a8df9075a0f284e5a27a7793180899_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5d6ac2ecd00055b2cb8750c3b3dbe340711838339f5241293b927eb16affb948 = $this->env->getExtension("native_profiler");
        $__internal_5d6ac2ecd00055b2cb8750c3b3dbe340711838339f5241293b927eb16affb948->enter($__internal_5d6ac2ecd00055b2cb8750c3b3dbe340711838339f5241293b927eb16affb948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/pagination.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/offcanvas.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/app.css"), "html", null, true);
        echo "\">
\t";
        
        $__internal_5d6ac2ecd00055b2cb8750c3b3dbe340711838339f5241293b927eb16affb948->leave($__internal_5d6ac2ecd00055b2cb8750c3b3dbe340711838339f5241293b927eb16affb948_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_95978cbc249e5fc57e1659dc1c2e2b40a912fa3d1d7f132acc243cba77124988 = $this->env->getExtension("native_profiler");
        $__internal_95978cbc249e5fc57e1659dc1c2e2b40a912fa3d1d7f132acc243cba77124988->enter($__internal_95978cbc249e5fc57e1659dc1c2e2b40a912fa3d1d7f132acc243cba77124988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/bootstrap-paginator.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/app.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_95978cbc249e5fc57e1659dc1c2e2b40a912fa3d1d7f132acc243cba77124988->leave($__internal_95978cbc249e5fc57e1659dc1c2e2b40a912fa3d1d7f132acc243cba77124988_prof);

    }

    // line 22
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_650dd37a2fe9faa9dae90fba23d84fa0000c671e51c059d39dda7275b846ef9d = $this->env->getExtension("native_profiler");
        $__internal_650dd37a2fe9faa9dae90fba23d84fa0000c671e51c059d39dda7275b846ef9d->enter($__internal_650dd37a2fe9faa9dae90fba23d84fa0000c671e51c059d39dda7275b846ef9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 23
        if ( !(isset($context["is_auth"]) ? $context["is_auth"] : $this->getContext($context, "is_auth"))) {
            // line 24
            echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
    <div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <a class=\"navbar-brand\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("study_app_home");
            echo "\" >";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Home", array(), "messages");
            echo "</a>
\t    </div>
\t    <div id=\"navbar\" class=\"collapse navbar-collapse\">
          ";
            // line 33
            echo "        </div>
    </div><!-- /.container -->
</nav><!-- /.navbar -->
";
        } else {
            // line 37
            echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
        <a class=\"navbar-brand white\" href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("study_app_home");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Simple Application Example", array(), "messages");
            echo "</a>
    </div>
    <div id=\"navbar\" class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav\">
      <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("profile");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Change Profile", array(), "messages");
            echo "</a></li>
      <li><a href=\"#\" id=\"menu-add-comment\">";
            // line 45
            echo $this->env->getExtension('translator')->getTranslator()->trans("Comment", array(), "messages");
            echo "</a></li>
      <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
            echo "</a></li>
    </ul>
    </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
";
        }
        
        $__internal_650dd37a2fe9faa9dae90fba23d84fa0000c671e51c059d39dda7275b846ef9d->leave($__internal_650dd37a2fe9faa9dae90fba23d84fa0000c671e51c059d39dda7275b846ef9d_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_43608a8afc8f1b42d28b781e599a5c66fb6315d775c8123eed0874cc484f8c54 = $this->env->getExtension("native_profiler");
        $__internal_43608a8afc8f1b42d28b781e599a5c66fb6315d775c8123eed0874cc484f8c54->enter($__internal_43608a8afc8f1b42d28b781e599a5c66fb6315d775c8123eed0874cc484f8c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43608a8afc8f1b42d28b781e599a5c66fb6315d775c8123eed0874cc484f8c54->leave($__internal_43608a8afc8f1b42d28b781e599a5c66fb6315d775c8123eed0874cc484f8c54_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  191 => 56,  175 => 46,  171 => 45,  165 => 44,  156 => 40,  151 => 37,  145 => 33,  137 => 27,  132 => 24,  130 => 23,  124 => 22,  115 => 17,  111 => 16,  107 => 15,  102 => 14,  96 => 13,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  70 => 7,  64 => 6,  52 => 58,  50 => 56,  45 => 53,  43 => 22,  38 => 19,  35 => 13,  33 => 6,  26 => 1,);
    }
}
