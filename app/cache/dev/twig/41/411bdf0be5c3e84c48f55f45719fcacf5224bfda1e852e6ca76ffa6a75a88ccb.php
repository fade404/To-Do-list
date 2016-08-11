<?php

/* ToDoListBundle:Default:add.html.twig */
class __TwigTemplate_3f2256443679244b7f1704164174985488b422153ec436c1f91903154fb1f23f extends Twig_Template
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
        $__internal_04b0e04a6570ee7b9a36050d15714e712a26fc4c2c149fdfe4a8463d84cb023e = $this->env->getExtension("native_profiler");
        $__internal_04b0e04a6570ee7b9a36050d15714e712a26fc4c2c149fdfe4a8463d84cb023e->enter($__internal_04b0e04a6570ee7b9a36050d15714e712a26fc4c2c149fdfe4a8463d84cb023e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ToDoListBundle:Default:add.html.twig"));

        // line 1
        if (array_key_exists("success", $context)) {
            // line 2
            echo "    Sukces! Użytkownik dodany
";
        } else {
            // line 4
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
";
            // line 6
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
";
        }
        // line 8
        echo "
";
        
        $__internal_04b0e04a6570ee7b9a36050d15714e712a26fc4c2c149fdfe4a8463d84cb023e->leave($__internal_04b0e04a6570ee7b9a36050d15714e712a26fc4c2c149fdfe4a8463d84cb023e_prof);

    }

    public function getTemplateName()
    {
        return "ToDoListBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 6,  32 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if success is defined %}*/
/*     Sukces! Użytkownik dodany*/
/* {% else %}*/
/* {{form_start(form)}}*/
/* {{form_widget(form)}}*/
/* {{form_end(form)}}*/
/* {% endif%}*/
/* */
/* */
