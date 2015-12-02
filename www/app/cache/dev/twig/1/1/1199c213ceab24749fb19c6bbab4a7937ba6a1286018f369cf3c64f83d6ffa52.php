<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1199c213ceab24749fb19c6bbab4a7937ba6a1286018f369cf3c64f83d6ffa52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc64ab30f9b12a4924e5725d107174fe295d2c0de9f9631fe67a8450adef10d1 = $this->env->getExtension("native_profiler");
        $__internal_dc64ab30f9b12a4924e5725d107174fe295d2c0de9f9631fe67a8450adef10d1->enter($__internal_dc64ab30f9b12a4924e5725d107174fe295d2c0de9f9631fe67a8450adef10d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc64ab30f9b12a4924e5725d107174fe295d2c0de9f9631fe67a8450adef10d1->leave($__internal_dc64ab30f9b12a4924e5725d107174fe295d2c0de9f9631fe67a8450adef10d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5640a29b3ff376caa4b5af3e112d225990b73803379cd0ab0eb7d1575dda4277 = $this->env->getExtension("native_profiler");
        $__internal_5640a29b3ff376caa4b5af3e112d225990b73803379cd0ab0eb7d1575dda4277->enter($__internal_5640a29b3ff376caa4b5af3e112d225990b73803379cd0ab0eb7d1575dda4277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5640a29b3ff376caa4b5af3e112d225990b73803379cd0ab0eb7d1575dda4277->leave($__internal_5640a29b3ff376caa4b5af3e112d225990b73803379cd0ab0eb7d1575dda4277_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_870b5ae43070c3b634ff06f45b3dcc821375863d892cd3d63a800673b3acc5f2 = $this->env->getExtension("native_profiler");
        $__internal_870b5ae43070c3b634ff06f45b3dcc821375863d892cd3d63a800673b3acc5f2->enter($__internal_870b5ae43070c3b634ff06f45b3dcc821375863d892cd3d63a800673b3acc5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_870b5ae43070c3b634ff06f45b3dcc821375863d892cd3d63a800673b3acc5f2->leave($__internal_870b5ae43070c3b634ff06f45b3dcc821375863d892cd3d63a800673b3acc5f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b90ae0c4164de1c7239f2589591f9538d5bf635cf38d31211a4a976b2d7388c = $this->env->getExtension("native_profiler");
        $__internal_4b90ae0c4164de1c7239f2589591f9538d5bf635cf38d31211a4a976b2d7388c->enter($__internal_4b90ae0c4164de1c7239f2589591f9538d5bf635cf38d31211a4a976b2d7388c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4b90ae0c4164de1c7239f2589591f9538d5bf635cf38d31211a4a976b2d7388c->leave($__internal_4b90ae0c4164de1c7239f2589591f9538d5bf635cf38d31211a4a976b2d7388c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
