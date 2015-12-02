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
        $__internal_6563e2df091f4e4ef420dfc77eb4f9a9ea471d863f50243bfa2a3d4f4d98a354 = $this->env->getExtension("native_profiler");
        $__internal_6563e2df091f4e4ef420dfc77eb4f9a9ea471d863f50243bfa2a3d4f4d98a354->enter($__internal_6563e2df091f4e4ef420dfc77eb4f9a9ea471d863f50243bfa2a3d4f4d98a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6563e2df091f4e4ef420dfc77eb4f9a9ea471d863f50243bfa2a3d4f4d98a354->leave($__internal_6563e2df091f4e4ef420dfc77eb4f9a9ea471d863f50243bfa2a3d4f4d98a354_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07f92c8c7e446e86d0a5c4b2cd579aaa8dad8cb19c193f89a4d5ea03d50c57a7 = $this->env->getExtension("native_profiler");
        $__internal_07f92c8c7e446e86d0a5c4b2cd579aaa8dad8cb19c193f89a4d5ea03d50c57a7->enter($__internal_07f92c8c7e446e86d0a5c4b2cd579aaa8dad8cb19c193f89a4d5ea03d50c57a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_07f92c8c7e446e86d0a5c4b2cd579aaa8dad8cb19c193f89a4d5ea03d50c57a7->leave($__internal_07f92c8c7e446e86d0a5c4b2cd579aaa8dad8cb19c193f89a4d5ea03d50c57a7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fb4842f86cd453f6b27e17b54254e7e8da1a85dfed9603598772362b5412b69 = $this->env->getExtension("native_profiler");
        $__internal_5fb4842f86cd453f6b27e17b54254e7e8da1a85dfed9603598772362b5412b69->enter($__internal_5fb4842f86cd453f6b27e17b54254e7e8da1a85dfed9603598772362b5412b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5fb4842f86cd453f6b27e17b54254e7e8da1a85dfed9603598772362b5412b69->leave($__internal_5fb4842f86cd453f6b27e17b54254e7e8da1a85dfed9603598772362b5412b69_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_31df56d6d4d749ba875fbb670ed443c91e229ee25b8c961d511760a03fd65da4 = $this->env->getExtension("native_profiler");
        $__internal_31df56d6d4d749ba875fbb670ed443c91e229ee25b8c961d511760a03fd65da4->enter($__internal_31df56d6d4d749ba875fbb670ed443c91e229ee25b8c961d511760a03fd65da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_31df56d6d4d749ba875fbb670ed443c91e229ee25b8c961d511760a03fd65da4->leave($__internal_31df56d6d4d749ba875fbb670ed443c91e229ee25b8c961d511760a03fd65da4_prof);

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
