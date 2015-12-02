<?php

/* StudyAppCommentBundle:Default:list.html.twig */
class __TwigTemplate_035325c55e5d7ac78c1ad3a1f09c6dd6eb5a438b27e2b28b80da3dbec789b8f5 extends Twig_Template
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
        echo "<div class=\"detailBoxWide\">
    <div class=\"actionBox\">
        <div class=\"bg-danger text-danger ";
        // line 3
        if ( !(isset($context["has_errors"]) ? $context["has_errors"] : null)) {
            echo "hide ";
        }
        echo "\" id=\"errorsarea\">
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'errors');
        echo "
        </div>
        <ul class=\"commentListWide\">
            <li class=\"hide j-template\">
                <div class=\"commenterImage\">
                  <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/img/5.jpeg"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"commentText\">
\t                <div class=\"commentAuthor\">
\t                    <p>
\t                    \t<span class=\"uname\">{user_name}</span>
\t                    \t<a href=\"#\" class=\"j-edit-comment\" data-id=\"{id}\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
\t                    </p>
\t                </div>
                    <p class=\"j-body\">{body}</p>
                    <span class=\"date sub-text\">Только что</span>
                    <span class=\"sub-text sub-text-primary\">
                    \t<span class=\"j-answer-info hide\">
                                   Ответов <span class=\"j-count_child\"></span>
                                   <a href=\"#\" data-id=\"{id}\" class=\"j-load-childs\"><span class=\"glyphicon glyphicon-chevron-down\"></span></a>
                               </span>
                               <a href=\"#\" class=\"j-reply-comment\" data-id=\"{id}\">Ответить</a>
                    </span>
                </div>
                <ul class=\"j-children\"></ul>
            </li>
            ";
        // line 31
        if ((isset($context["count"]) ? $context["count"] : null)) {
            // line 32
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 33
                echo "            <li style=\"display: list-item;\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\">
                <div class=\"commenterImage\">
                    <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/img/5.jpeg"), "html", null, true);
                echo "\">
                </div>
                <div class=\"commentText\">
                    <div class=\"commentAuthor\">
                        <p>
                            <span class=\"uname\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "lastName", array()), "html", null, true);
                echo "</span>
                            <a href=\"#\" class=\"j-edit-comment\" data-id=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                        </p>
                    </div>
                    <p class=\"j-body\">";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "body", array()), "html", null, true);
                echo "</p>
                    <span class=\"date sub-text j-date\">";
                // line 45
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array()), "none", "none", null, "Europe/Moscow", "d MMMM YYYY в hh:mm"), "html", null, true);
                echo "</span>
                    <span class=\"sub-text sub-text-primary\">
                            <span class=\"j-answer-info";
                // line 47
                if ( !$this->getAttribute($context["comment"], "countChild", array())) {
                    echo " hide";
                }
                echo "\">
                               ";
                // line 48
                echo $this->env->getExtension('translator')->getTranslator()->trans("Answers", array(), "messages");
                echo " <span class=\"j-count_child\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "countChild", array()), "html", null, true);
                echo "</span>
                               <a href=\"#\" data-id=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\" class=\"j-load-childs\"><span class=\"glyphicon glyphicon-chevron-down\"></span></a>
                           </span>
                           <a href=\"#\" class=\"j-reply-comment\" data-id=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Answer him", array(), "messages");
                echo "</a>
                    </span>
                </div>
                <ul class=\"j-children\"></ul>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            ";
        }
        // line 58
        echo "        </ul>
        
        <form class=\"form-inline w100\" role=\"form\" action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("study_app_comments_add");
        echo "\" method=\"POST\" name=\"commentForm\">
            <div class=\"form-group w80\">
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent_id", array()), 'widget', array("type" => "hidden", "id" => "parent_id"));
        echo "
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget', array("type" => "hidden", "id" => "comment_id"));
        echo "
                <input type=\"hidden\" name=\"_method\" value=\"POST\" id=\"_method\"/>
                <input type=\"text\" placeholder=\"";
        // line 65
        echo $this->env->getExtension('translator')->getTranslator()->trans("Your comment", array(), "messages");
        echo "\" class=\"form-control\" name=\"comment_type[body]\" id=\"body\" >
            </div>
            <div class=\"form-group w20\">
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "                
                <button class=\"btn btn-default\" id=\"addComment\">";
        // line 69
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add comment", array(), "messages");
        echo "</button>
            </div>
        </form>
        <div id=\"commentPaging\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "StudyAppCommentBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 69,  165 => 68,  159 => 65,  154 => 63,  150 => 62,  145 => 60,  141 => 58,  138 => 57,  124 => 51,  119 => 49,  113 => 48,  107 => 47,  102 => 45,  98 => 44,  92 => 41,  86 => 40,  78 => 35,  72 => 33,  67 => 32,  65 => 31,  41 => 10,  33 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
