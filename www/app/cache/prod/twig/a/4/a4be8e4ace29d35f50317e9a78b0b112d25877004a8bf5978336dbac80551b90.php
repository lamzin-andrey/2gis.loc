<?php

/* StudyAppSecurityBundle:Mailer:registration.html.twig */
class __TwigTemplate_a4be8e4ace29d35f50317e9a78b0b112d25877004a8bf5978336dbac80551b90 extends Twig_Template
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
        // line 1
        echo "<html>
<head>
\t<meta charset=\"utf-8\">
</head>
<body>
\t<p>Здравствуйте, ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["last_name"]) ? $context["last_name"] : null), "html", null, true);
        echo "!</p>
\t<p>Вы или кто-то другой зарегистрировались на сайте http://kd.loc.</p>
\t<p>Для завершения регистрации пройдите  
\t<a href=\"http://";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : null), "html", null, true);
        echo "\" target=\"_blank\">по ссылке</a>
\t</p>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "StudyAppSecurityBundle:Mailer:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  26 => 6,  19 => 1,);
    }
}
