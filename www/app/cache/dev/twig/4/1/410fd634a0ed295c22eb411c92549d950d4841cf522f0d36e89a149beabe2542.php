<?php

/* StudyAppCommentBundle:Default:apiform.html.twig */
class __TwigTemplate_410fd634a0ed295c22eb411c92549d950d4841cf522f0d36e89a149beabe2542 extends Twig_Template
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
        $__internal_bf5bc53d5fee7fd92088031b9506a898268109c865a16b6d35ad1c549c44cd45 = $this->env->getExtension("native_profiler");
        $__internal_bf5bc53d5fee7fd92088031b9506a898268109c865a16b6d35ad1c549c44cd45->enter($__internal_bf5bc53d5fee7fd92088031b9506a898268109c865a16b6d35ad1c549c44cd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppCommentBundle:Default:apiform.html.twig"));

        // line 1
        echo "<div class=\"detailBoxWide\">
    <div class=\"actionBox\">
        <div class=\"bg-danger text-danger ";
        // line 3
        if ( !(isset($context["has_errors"]) ? $context["has_errors"] : $this->getContext($context, "has_errors"))) {
            echo "hide ";
        }
        echo "\" id=\"errorsarea\">
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'errors');
        echo "
        </div>

        <form class=\"form-inline w100\" role=\"form\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("study_app_comments_add");
        echo "\" method=\"POST\" name=\"commentForm\">
            <div class=\"form-group w80\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent_id", array()), 'widget', array("type" => "hidden", "id" => "parent_id"));
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget', array("type" => "hidden", "id" => "comment_id"));
        echo "
                <input type=\"hidden\" name=\"_method\" value=\"POST\" id=\"_method\"/>
                <input type=\"text\" placeholder=\"";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Your comment", array(), "messages");
        echo "\" class=\"form-control\" name=\"comment_type[body]\" id=\"body\" >
            </div>
            <div class=\"form-group w20\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "                
                <button class=\"btn btn-default\" id=\"addComment\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add comment", array(), "messages");
        echo "</button>
            </div>
        </form>
    </div>
</div>";
        
        $__internal_bf5bc53d5fee7fd92088031b9506a898268109c865a16b6d35ad1c549c44cd45->leave($__internal_bf5bc53d5fee7fd92088031b9506a898268109c865a16b6d35ad1c549c44cd45_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppCommentBundle:Default:apiform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  62 => 16,  56 => 13,  51 => 11,  47 => 10,  42 => 8,  36 => 5,  32 => 4,  26 => 3,  22 => 1,);
    }
}
