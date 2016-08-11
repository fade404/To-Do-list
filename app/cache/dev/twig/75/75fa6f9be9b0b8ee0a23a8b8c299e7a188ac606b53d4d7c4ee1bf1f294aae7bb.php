<?php

/* ToDoListBundle:Default:index.html.twig */
class __TwigTemplate_ba66f3dc1420d3dd62ea88b81c0729052a9f08df96fecab290b0186a65861b89 extends Twig_Template
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
        $__internal_99e1ea1516c842d6c0e44c6acd7175f84409660b98d6a7ac16357119ae3f256e = $this->env->getExtension("native_profiler");
        $__internal_99e1ea1516c842d6c0e44c6acd7175f84409660b98d6a7ac16357119ae3f256e->enter($__internal_99e1ea1516c842d6c0e44c6acd7175f84409660b98d6a7ac16357119ae3f256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ToDoListBundle:Default:index.html.twig"));

        // line 1
        if (array_key_exists("error", $context)) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 5
                echo "        Tytuł: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                echo "<br>
        Treść: ";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "description", array()), "html", null, true);
                echo "<br>
        Termin: ";
                // line 7
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "date", array()), "Y-m-d"), "html", null, true);
                echo "<br>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_99e1ea1516c842d6c0e44c6acd7175f84409660b98d6a7ac16357119ae3f256e->leave($__internal_99e1ea1516c842d6c0e44c6acd7175f84409660b98d6a7ac16357119ae3f256e_prof);

    }

    public function getTemplateName()
    {
        return "ToDoListBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  40 => 6,  35 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if error is defined %}*/
/*     {{error}}*/
/* {% else %}*/
/*     {% for task in tasks %}*/
/*         Tytuł: {{task.title}}<br>*/
/*         Treść: {{task.description}}<br>*/
/*         Termin: {{task.date|date('Y-m-d')}}<br>*/
/*     {% endfor %}*/
/* {%endif%}*/
