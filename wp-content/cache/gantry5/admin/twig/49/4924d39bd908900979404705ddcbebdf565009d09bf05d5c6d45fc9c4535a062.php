<?php

/* menu/list.html.twig */
class __TwigTemplate_de41a0ec15eee9362de979fd08c5d3c23d7344e832e1aeee1246cf72aadb85e2 extends Twig_Template
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
        $context["children"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) == 1)) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "group", array(0 => (isset($context["group"]) ? $context["group"] : null)), "method")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array())));
        // line 2
        echo "
<div class=\"submenu-level\">Level ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()), "html", null, true);
        echo "</div>
<ul class=\"submenu-items\" data-mm-base=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true);
        echo "\" data-mm-base-level=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()), "html", null, true);
        echo "\">";
        // line 5
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) > 1)) {
            // line 6
            echo "        <li>
            <a class=\"menu-item\" data-g5-ajaxify=\"\" data-g5-ajaxify-params=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("inline" => 1, "group" => (isset($context["group"]) ? $context["group"] : null))), "html_attr");
            echo "\" data-g5-ajaxify-target-parent=\".submenu-column\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu", 1 => (isset($context["id"]) ? $context["id"] : null), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent", array()), "path", array())), "method"), "html", null, true);
            echo "\">
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 9
                echo "                <i class=\"fa fa-fw fa-chevron-left\"></i> &nbsp;
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            </a>
        </li>
    ";
        }
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 15
            echo "        <li data-mm-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "path", array()), "html", null, true);
            echo "\" data-mm-level=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "level", array()), "html", null, true);
            echo "\"";
            if ((($this->getAttribute($context["child"], "type", array()) == "particle") || ($this->getAttribute($context["child"], "type", array()) == "module"))) {
                echo " class=\"g-menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "type", array()), "html", null, true);
                echo "\" data-mm-original-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "type", array()), "html", null, true);
                echo "\"";
            }
            echo ">
            ";
            // line 16
            $this->loadTemplate("menu/item.html.twig", "menu/list.html.twig", 16)->display(array_merge($context, array("item" => $context["child"], "target" => ("list-" . (isset($context["group"]) ? $context["group"] : null)))));
            // line 17
            echo "        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>
<span class=\"submenu-reorder\"><i class=\"fa fa-fw fa-arrows-h\"></i></span>
";
    }

    public function getTemplateName()
    {
        return "menu/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  94 => 17,  92 => 16,  77 => 15,  60 => 14,  55 => 11,  48 => 9,  44 => 8,  38 => 7,  35 => 6,  33 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set children = (item.level == 1 ? item.group(group) : item.children) %}*/
/* */
/* <div class="submenu-level">Level {{ item.level }}</div>*/
/* <ul class="submenu-items" data-mm-base="{{ item.path }}" data-mm-base-level="{{ item.level }}">*/
/*     {%- if item.level > 1 %}*/
/*         <li>*/
/*             <a class="menu-item" data-g5-ajaxify="" data-g5-ajaxify-params="{{ {'inline': 1, 'group': group}|json_encode|escape('html_attr') }}" data-g5-ajaxify-target-parent=".submenu-column" href="{{ gantry.route('menu', id, item.parent.path) }}">*/
/*                 {% for i in range(1, item.level-1) %}*/
/*                 <i class="fa fa-fw fa-chevron-left"></i> &nbsp;*/
/*                 {% endfor %}*/
/*             </a>*/
/*         </li>*/
/*     {% endif -%}*/
/*     {%- for child in children %}*/
/*         <li data-mm-id="{{ child.path }}" data-mm-level="{{ child.level }}"{% if child.type == 'particle' or child.type == 'module' %} class="g-menu-item-{{ child.type }}" data-mm-original-type="{{ child.type }}"{% endif %}>*/
/*             {% include 'menu/item.html.twig' with {'item': child, 'target': 'list-' ~ group } %}*/
/*         </li>*/
/*     {% endfor -%}*/
/* </ul>*/
/* <span class="submenu-reorder"><i class="fa fa-fw fa-arrows-h"></i></span>*/
/* */
