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
        $__internal_49d8ff8c7f5408697b467956b8847947261f3764cfc240c813006fbd2878dace = $this->env->getExtension("native_profiler");
        $__internal_49d8ff8c7f5408697b467956b8847947261f3764cfc240c813006fbd2878dace->enter($__internal_49d8ff8c7f5408697b467956b8847947261f3764cfc240c813006fbd2878dace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d8ff8c7f5408697b467956b8847947261f3764cfc240c813006fbd2878dace->leave($__internal_49d8ff8c7f5408697b467956b8847947261f3764cfc240c813006fbd2878dace_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1b1470c71b49d93d08f8f49d9c07ebb3d591bf0307ddf84e80eca5bb40bc953 = $this->env->getExtension("native_profiler");
        $__internal_c1b1470c71b49d93d08f8f49d9c07ebb3d591bf0307ddf84e80eca5bb40bc953->enter($__internal_c1b1470c71b49d93d08f8f49d9c07ebb3d591bf0307ddf84e80eca5bb40bc953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c1b1470c71b49d93d08f8f49d9c07ebb3d591bf0307ddf84e80eca5bb40bc953->leave($__internal_c1b1470c71b49d93d08f8f49d9c07ebb3d591bf0307ddf84e80eca5bb40bc953_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4500602252771157df79fd4108b725c949e9ffa056b4895d2d025638308651b9 = $this->env->getExtension("native_profiler");
        $__internal_4500602252771157df79fd4108b725c949e9ffa056b4895d2d025638308651b9->enter($__internal_4500602252771157df79fd4108b725c949e9ffa056b4895d2d025638308651b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4500602252771157df79fd4108b725c949e9ffa056b4895d2d025638308651b9->leave($__internal_4500602252771157df79fd4108b725c949e9ffa056b4895d2d025638308651b9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c513b770e4afac36cb1c84411935849cf869279db27c05085d4aea9a25a08fb8 = $this->env->getExtension("native_profiler");
        $__internal_c513b770e4afac36cb1c84411935849cf869279db27c05085d4aea9a25a08fb8->enter($__internal_c513b770e4afac36cb1c84411935849cf869279db27c05085d4aea9a25a08fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c513b770e4afac36cb1c84411935849cf869279db27c05085d4aea9a25a08fb8->leave($__internal_c513b770e4afac36cb1c84411935849cf869279db27c05085d4aea9a25a08fb8_prof);

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
