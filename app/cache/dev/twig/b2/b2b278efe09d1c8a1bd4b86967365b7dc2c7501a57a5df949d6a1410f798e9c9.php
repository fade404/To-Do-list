<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fbf6338328b5601fb6f2d6713296bf52674c49f92b13a79338ceef1409ac20c2 extends Twig_Template
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
        $__internal_0829b14b254411b3b1e2ee143feade3c54631f1cb409b0b798c842725c84e512 = $this->env->getExtension("native_profiler");
        $__internal_0829b14b254411b3b1e2ee143feade3c54631f1cb409b0b798c842725c84e512->enter($__internal_0829b14b254411b3b1e2ee143feade3c54631f1cb409b0b798c842725c84e512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0829b14b254411b3b1e2ee143feade3c54631f1cb409b0b798c842725c84e512->leave($__internal_0829b14b254411b3b1e2ee143feade3c54631f1cb409b0b798c842725c84e512_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_834a683ad4ebaba40644354fd3913ccc7194cee0e5df09af82de56647fb3e93e = $this->env->getExtension("native_profiler");
        $__internal_834a683ad4ebaba40644354fd3913ccc7194cee0e5df09af82de56647fb3e93e->enter($__internal_834a683ad4ebaba40644354fd3913ccc7194cee0e5df09af82de56647fb3e93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_834a683ad4ebaba40644354fd3913ccc7194cee0e5df09af82de56647fb3e93e->leave($__internal_834a683ad4ebaba40644354fd3913ccc7194cee0e5df09af82de56647fb3e93e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_082470e593010992fa780bcd425850a8031f80296fc255a12d92d7a15e43688d = $this->env->getExtension("native_profiler");
        $__internal_082470e593010992fa780bcd425850a8031f80296fc255a12d92d7a15e43688d->enter($__internal_082470e593010992fa780bcd425850a8031f80296fc255a12d92d7a15e43688d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_082470e593010992fa780bcd425850a8031f80296fc255a12d92d7a15e43688d->leave($__internal_082470e593010992fa780bcd425850a8031f80296fc255a12d92d7a15e43688d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d2ed9d0e216a31fa521fc1dff561578f74e610baa9f9193388432f49d1a1286 = $this->env->getExtension("native_profiler");
        $__internal_1d2ed9d0e216a31fa521fc1dff561578f74e610baa9f9193388432f49d1a1286->enter($__internal_1d2ed9d0e216a31fa521fc1dff561578f74e610baa9f9193388432f49d1a1286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1d2ed9d0e216a31fa521fc1dff561578f74e610baa9f9193388432f49d1a1286->leave($__internal_1d2ed9d0e216a31fa521fc1dff561578f74e610baa9f9193388432f49d1a1286_prof);

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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
