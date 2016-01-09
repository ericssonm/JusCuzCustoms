<?php

/* @gantry-admin/modals/widget-picker.html.twig */
class __TwigTemplate_68984dd9a5b8896a9c7085516da897b584d58b0af1203d078f096ffbbb9e3537 extends Twig_Template
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
        // line 5
        echo "<div data-mm-particle-stepone=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => ((array_key_exists("next", $context)) ? (_twig_default_filter((isset($context["next"]) ? $context["next"] : null), "widget")) : ("widget"))), "method"), "html", null, true);
        echo "\" class=\"menu-editor-extras\">
    <div class=\"card settings-block\">
        <h4>
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("Pick a Widget"), "html", null, true);
        echo "
        </h4>
        <div class=\"inner-params\">
            <div class=\"g5-mm-modules-picker menu-editor-modules\">
                <div class=\"search\">
                    <input type=\"text\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SEARCH_ELI"), "html", null, true);
        echo "\" />
                    <i class=\"fa fa-search\"></i>
                </div>
                <div class=\"modules-wrapper\">
                    <ul>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "listWidgets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 19
            echo "                        ";
            if (($this->getAttribute($context["widget"], "id", array()) != "particle_widget")) {
                // line 20
                echo "                        <li data-lm-nodrag
                            data-mm-type=\"widget\"
                            data-lm-subtype=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "id", array()), "html", null, true);
                echo "\"
                            data-lm-blocktype=\"position\"
                            data-mm-filter=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "title", array()), "html", null, true);
                echo "\">
                            <span title=\"";
                // line 25
                echo $this->getAttribute($context["widget"], "description", array());
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "title", array()), "html", null, true);
                echo "</span>
                        </li>
                        ";
            }
            // line 28
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"g-modal-actions\">
        <button class=\"button button-primary\" type=\"submit\" data-mm-select disabled>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SELECT"), "html", null, true);
        echo " <i class=\"fa fa-fw fa-chevron-right\"></i></button>
        <button class=\"button g5-dialog-close\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/modals/widget-picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 36,  84 => 35,  76 => 29,  70 => 28,  62 => 25,  58 => 24,  53 => 22,  49 => 20,  46 => 19,  42 => 18,  34 => 13,  26 => 8,  19 => 5,);
    }
}
/* {# Available variables:*/
/* */
/* widget.[id | title | description]*/
/* #}*/
/* <div data-mm-particle-stepone="{{ gantry.route(next|default('widget')) }}" class="menu-editor-extras">*/
/*     <div class="card settings-block">*/
/*         <h4>*/
/*             {{ 'Pick a Widget'|trans }}*/
/*         </h4>*/
/*         <div class="inner-params">*/
/*             <div class="g5-mm-modules-picker menu-editor-modules">*/
/*                 <div class="search">*/
/*                     <input type="text" placeholder="{{ 'GANTRY5_PLATFORM_SEARCH_ELI'|trans }}" />*/
/*                     <i class="fa fa-search"></i>*/
/*                 </div>*/
/*                 <div class="modules-wrapper">*/
/*                     <ul>*/
/*                         {% for widget in gantry.platform.listWidgets %}*/
/*                         {% if widget.id != 'particle_widget' %}*/
/*                         <li data-lm-nodrag*/
/*                             data-mm-type="widget"*/
/*                             data-lm-subtype="{{ widget.id }}"*/
/*                             data-lm-blocktype="position"*/
/*                             data-mm-filter="{{ widget.title }}">*/
/*                             <span title="{{ widget.description|raw }}">{{ widget.title }}</span>*/
/*                         </li>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="g-modal-actions">*/
/*         <button class="button button-primary" type="submit" data-mm-select disabled>{{ 'GANTRY5_PLATFORM_SELECT'|trans }} <i class="fa fa-fw fa-chevron-right"></i></button>*/
/*         <button class="button g5-dialog-close">{{ 'GANTRY5_PLATFORM_CANCEL'|trans }}</button>*/
/*     </div>*/
/* </div>*/
/* */
