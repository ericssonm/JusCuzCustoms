<?php

/* partials/page.html.twig */
class __TwigTemplate_926b82c5980eb85c6945b0bbe80bea2a87d9ce80e9deacbeec98a306352dde33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/page.html.twig", "partials/page.html.twig", 1);
        $this->blocks = array(
            'page_head' => array($this, 'block_page_head'),
            'page_footer' => array($this, 'block_page_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_head($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["page_head"]) ? $context["page_head"] : null)) {
            // line 5
            echo "        ";
            echo (isset($context["page_head"]) ? $context["page_head"] : null);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            $this->displayParentBlock("page_head", $context, $blocks);
            echo "
    ";
        }
    }

    // line 11
    public function block_page_footer($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo (isset($context["wp_footer"]) ? $context["wp_footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  48 => 11,  40 => 7,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "@nucleus/page.html.twig" %}*/
/* */
/* {% block page_head -%}*/
/*     {% if page_head %}*/
/*         {{ page_head|raw }}*/
/*     {% else %}*/
/*         {{ parent() }}*/
/*     {% endif %}*/
/* {%- endblock %}*/
/* */
/* {% block page_footer %}*/
/*     {{ wp_footer|raw }}*/
/* {% endblock %}*/
/* */
