<?php

/* @particles/widget.html.twig */
class __TwigTemplate_6934c295ae7681d21616350e593222d16b64f4ed7319c7b5adcb4a85295f7148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/widget.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "displayWidget", array(0 => $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "widget", array()), 1 => array("chrome" => (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "chrome", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "chrome", array()), "gantry")) : ("gantry")), "prepare_layout" => (isset($context["prepare_layout"]) ? $context["prepare_layout"] : null))), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/*     {{ gantry.platform.displayWidget(particle.widget, {'chrome': particle.chrome|default('gantry'), 'prepare_layout': prepare_layout})|raw }}*/
/* {% endblock %}*/
/* */
