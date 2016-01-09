<?php

/* forms/fields/input/hidden.html.twig */
class __TwigTemplate_e2c5631d545e1d9d02fa3535ce37748819b107c61c1cc5fb9280323c62926155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["default"]) ? $context["default"] : null)) ? ("partials/field.html.twig") : ((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"))), "forms/fields/input/hidden.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
    }

    // line 6
    public function block_input($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "array", array())) {
            // line 8
            echo "        ";
            $context["name"] = ((isset($context["name"]) ? $context["name"] : null) . "._json");
            // line 9
            echo "        ";
            $context["value"] = twig_jsonencode_filter(((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), array())) : (array())));
            // line 10
            echo "        ";
        } else {
            // line 11
            echo "        ";
            $context["value"] = twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", ");
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <input
        ";
        // line 16
        echo "        type=\"hidden\"
        name=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"
        value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"
        ";
        // line 20
        echo "        ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
    />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/input/hidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  65 => 18,  61 => 17,  58 => 16,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  28 => 3,  19 => 1,);
    }
}
/* {% extends default ? "partials/field.html.twig" : 'forms/' ~ layout|default('field') ~ '.html.twig' %}*/
/* */
/* {% block label %}*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/*     {% if field.array %}*/
/*         {% set name = name ~ '._json' %}*/
/*         {% set value = value|default([])|json_encode %}*/
/*         {% else %}*/
/*         {% set value = value|join(', ') %}*/
/*     {% endif %}*/
/* */
/*     <input*/
/*         {# required attribute structures #}*/
/*         type="hidden"*/
/*         name="{{ (scope ~ name)|fieldName }}"*/
/*         value="{{ value }}"*/
/*         {# global attribute structures #}*/
/*         {{ block('global_attributes') }}*/
/*     />*/
/* {% endblock %}*/
/* */
