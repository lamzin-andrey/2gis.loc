<?php

/* StudyAppSecurityBundle:Default:login.html.twig */
class __TwigTemplate_126cb735bc6549980e6271263e177394080ddc36bc333535e6fd59a3b244017a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppSecurityBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07a0c921a420200665133c647e9cab0e98072dffac00aa3c3e14b39649e03068 = $this->env->getExtension("native_profiler");
        $__internal_07a0c921a420200665133c647e9cab0e98072dffac00aa3c3e14b39649e03068->enter($__internal_07a0c921a420200665133c647e9cab0e98072dffac00aa3c3e14b39649e03068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppSecurityBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a0c921a420200665133c647e9cab0e98072dffac00aa3c3e14b39649e03068->leave($__internal_07a0c921a420200665133c647e9cab0e98072dffac00aa3c3e14b39649e03068_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_8b40ce0d9b960d43459e1e901bbfac9f6a0f1f0fbcf4e36362a508033b03feca = $this->env->getExtension("native_profiler");
        $__internal_8b40ce0d9b960d43459e1e901bbfac9f6a0f1f0fbcf4e36362a508033b03feca->enter($__internal_8b40ce0d9b960d43459e1e901bbfac9f6a0f1f0fbcf4e36362a508033b03feca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/authpage.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/signin.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\">
";
        
        $__internal_8b40ce0d9b960d43459e1e901bbfac9f6a0f1f0fbcf4e36362a508033b03feca->leave($__internal_8b40ce0d9b960d43459e1e901bbfac9f6a0f1f0fbcf4e36362a508033b03feca_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_077b7ff2f98609413d7f1c25be498c6ffb89be758ca7e93d6d6d509ab9102298 = $this->env->getExtension("native_profiler");
        $__internal_077b7ff2f98609413d7f1c25be498c6ffb89be758ca7e93d6d6d509ab9102298->enter($__internal_077b7ff2f98609413d7f1c25be498c6ffb89be758ca7e93d6d6d509ab9102298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<form class=\"form-authpage form-signin\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">
\t<p class=\"bg-danger text-danger ";
        // line 11
        if ( !(isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            echo " hide ";
        }
        echo " pad-15\" id=\"errorsarea\">
\t\t";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "
\t\t";
        }
        // line 15
        echo "\t</p>
\t<h2 class=\"form-signin-heading\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
        echo "</h2>

<label for=\"username\" class=\"sr-only\">Username:</label>
<input type=\"text\" name=\"_username\" id=\"username\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Username", array(), "messages");
        echo "\" required autofocus >
<label for=\"password\" class=\"sr-only\">Password:</label>
<input type=\"password\" name=\"_password\" id=\"password\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "\" required>
\t
<input type=\"hidden\" name=\"_target_path\"  value=\"/\">
<input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"  value=\"";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sign in", array(), "messages");
        echo "\">
<div class=\"fb-login-link\">
\t<a  href=\"https://www.facebook.com/dialog/oauth?client_id=";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["facebook_client_id"]) ? $context["facebook_client_id"] : $this->getContext($context, "facebook_client_id")), "html", null, true);
        echo "&redirect_uri=http://";
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : $this->getContext($context, "host")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["oauth_facebook_route"]) ? $context["oauth_facebook_route"] : $this->getContext($context, "oauth_facebook_route")), "html", null, true);
        echo "&response_type=token\" >
\t\t<i class=\"icon-large icon-facebook\"></i> <span>";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Facebook login", array(), "messages");
        echo "</span>
\t</a>
</div>

</form>
";
        
        $__internal_077b7ff2f98609413d7f1c25be498c6ffb89be758ca7e93d6d6d509ab9102298->leave($__internal_077b7ff2f98609413d7f1c25be498c6ffb89be758ca7e93d6d6d509ab9102298_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppSecurityBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 27,  114 => 26,  109 => 24,  103 => 21,  98 => 19,  92 => 16,  89 => 15,  83 => 13,  81 => 12,  75 => 11,  71 => 10,  68 => 9,  62 => 8,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
