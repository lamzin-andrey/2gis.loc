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
        $__internal_96ddc48106bb24265f706d359e5f61bc6dc498b75289589bd0015255faa1782f = $this->env->getExtension("native_profiler");
        $__internal_96ddc48106bb24265f706d359e5f61bc6dc498b75289589bd0015255faa1782f->enter($__internal_96ddc48106bb24265f706d359e5f61bc6dc498b75289589bd0015255faa1782f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96ddc48106bb24265f706d359e5f61bc6dc498b75289589bd0015255faa1782f->leave($__internal_96ddc48106bb24265f706d359e5f61bc6dc498b75289589bd0015255faa1782f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83251cb1027e771c629cdd6e94121c3b790ab6752d599c646b9a0dd9b4bfff72 = $this->env->getExtension("native_profiler");
        $__internal_83251cb1027e771c629cdd6e94121c3b790ab6752d599c646b9a0dd9b4bfff72->enter($__internal_83251cb1027e771c629cdd6e94121c3b790ab6752d599c646b9a0dd9b4bfff72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_83251cb1027e771c629cdd6e94121c3b790ab6752d599c646b9a0dd9b4bfff72->leave($__internal_83251cb1027e771c629cdd6e94121c3b790ab6752d599c646b9a0dd9b4bfff72_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a73cc92f8abf444963d50bb888ef6c00bf2e4ccf38d0317ed262ed857031831c = $this->env->getExtension("native_profiler");
        $__internal_a73cc92f8abf444963d50bb888ef6c00bf2e4ccf38d0317ed262ed857031831c->enter($__internal_a73cc92f8abf444963d50bb888ef6c00bf2e4ccf38d0317ed262ed857031831c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a73cc92f8abf444963d50bb888ef6c00bf2e4ccf38d0317ed262ed857031831c->leave($__internal_a73cc92f8abf444963d50bb888ef6c00bf2e4ccf38d0317ed262ed857031831c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_295d0540a3da30c30c09929352b919e9e8adbca6d6380d2d01bbde352036cf86 = $this->env->getExtension("native_profiler");
        $__internal_295d0540a3da30c30c09929352b919e9e8adbca6d6380d2d01bbde352036cf86->enter($__internal_295d0540a3da30c30c09929352b919e9e8adbca6d6380d2d01bbde352036cf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_295d0540a3da30c30c09929352b919e9e8adbca6d6380d2d01bbde352036cf86->leave($__internal_295d0540a3da30c30c09929352b919e9e8adbca6d6380d2d01bbde352036cf86_prof);

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
