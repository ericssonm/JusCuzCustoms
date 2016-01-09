<?php

/* searchform.html.twig */
class __TwigTemplate_5746b0302e91b7a319e6b993d841f0b8f5dd6c17f827e4eaa1cdd859356250b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'searchform' => array($this, 'block_searchform'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["twigTemplate"] = "searchform.html.twig";
        // line 2
        $context["scope"] = "searchform";
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('searchform', $context, $blocks);
    }

    public function block_searchform($context, array $blocks = array())
    {
        // line 5
        echo "
    <form role=\"search\" method=\"get\" class=\"search-form form\" action=\"";
        // line 6
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
        echo "/\">
        <label>
            <span class=\"screen-reader-text\">";
        // line 8
        echo call_user_func_array($this->env->getFunction('__')->getCallable(), array("Search for:", "g5_hydrogen"));
        echo "</span>
            <input type=\"search\" class=\"search-field\" placeholder=\"";
        // line 9
        echo call_user_func_array($this->env->getFunction('__')->getCallable(), array("Search …", "g5_hydrogen"));
        echo "\" value=\"\" name=\"s\" title=\"";
        echo call_user_func_array($this->env->getFunction('__')->getCallable(), array("Search for:", "g5_hydrogen"));
        echo "\" />
        </label>
        <input type=\"submit\" class=\"search-submit button\" value=\"Search\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "searchform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  41 => 8,  36 => 6,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
/* {% set twigTemplate = 'searchform.html.twig' %}*/
/* {% set scope = 'searchform' %}*/
/* */
/* {% block searchform %}*/
/* */
/*     <form role="search" method="get" class="search-form form" action="{{ site.url }}/">*/
/*         <label>*/
/*             <span class="screen-reader-text">{{ __('Search for:', 'g5_hydrogen') }}</span>*/
/*             <input type="search" class="search-field" placeholder="{{ __( 'Search …', 'g5_hydrogen' ) }}" value="" name="s" title="{{ __('Search for:', 'g5_hydrogen') }}" />*/
/*         </label>*/
/*         <input type="submit" class="search-submit button" value="Search" />*/
/*     </form>*/
/* */
/* {% endblock %}*/
/* */
