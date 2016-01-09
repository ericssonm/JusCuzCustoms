<?php

/* @gantry-admin/pages/configurations/page/atoms.html.twig */
class __TwigTemplate_aec50294e6e6130af182ce68f193ceecf63ae9bf06b256093bff37a844becc52 extends Twig_Template
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
        echo "<h2 class=\"page-title\">
    <span class=\"title\">Atoms</span>
</h2>

<div id=\"atoms\"";
        // line 5
        echo (((isset($context["overrideable"]) ? $context["overrideable"] : null)) ? (" class=\"atoms-override\"") : (""));
        echo ">
    <ul class=\"atoms-picker\">";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["atoms"]) ? $context["atoms"] : null));
        foreach ($context['_seq'] as $context["atom"] => $context["label"]) {
            // line 8
            echo "<li data-atom-type=\"";
            echo twig_escape_filter($this->env, $context["atom"], "html", null, true);
            echo "\" data-atom-picked=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("title" => $context["label"], "type" => $context["atom"], "attributes" => $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => ("particles." . $context["atom"])), "method"))), "html_attr");
            echo "\">
            <i class=\"fa fa-fw fa-hand-stop-o drag-indicator\"></i>
            <span class=\"atom-title\">";
            // line 10
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</span>
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["page_id"]) ? $context["page_id"] : null), 2 => "page", 3 => "atoms", 4 => $context["atom"]), "method"));
            echo "\" class=\"atom-settings config-cog\"><i aria-label=\"Configure Atom Settings\" class=\"fa fa-cog\"></i></a>
        </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['atom'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>

    <div class=\"card settings-block\">
        ";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => "page.head.atoms"), "method")) {
            // line 18
            echo "                <ul class=\"atoms-list\">";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => "page.head.atoms"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["atom"]) {
                // line 20
                $context["status"] = (($this->getAttribute($this->getAttribute($context["atom"], "attributes", array()), "enabled", array())) ? ("") : ("class=\"atom-disabled\" title=\"This atom has been disabled and it won't be rendered on front-end. You can still configure, move and delete.\""));
                // line 21
                echo "                    <li data-atom-picked=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($context["atom"]), "html_attr");
                echo "\" ";
                echo (isset($context["status"]) ? $context["status"] : null);
                echo " data-atom-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["atom"], "type", array()), "html", null, true);
                echo "\">
                        <i class=\"fa fa-fw fa-hand-stop-o drag-indicator\"></i>
                        <span class=\"atom-title\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["atom"], "title", array()), "html", null, true);
                echo "</span>
                        <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["page_id"]) ? $context["page_id"] : null), 2 => "page", 3 => "atoms", 4 => $this->getAttribute($context["atom"], "type", array())), "method"));
                echo "\" class=\"atom-settings config-cog\"><i aria-label=\"Configure Atom Settings\" class=\"fa fa-cog\"></i></a>
                    </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "</ul>
        ";
        } else {
            // line 29
            echo "            <ul class=\"atoms-list\"></ul>
        ";
        }
        // line 31
        echo "
        ";
        // line 32
        if ((isset($context["overrideable"]) ? $context["overrideable"] : null)) {
            // line 33
            echo "            ";
            $context["prefix"] = "page.head.";
            // line 34
            echo "            ";
            $this->loadTemplate("forms/override.html.twig", "@gantry-admin/pages/configurations/page/atoms.html.twig", 34)->display(array_merge($context, array("scope" => (isset($context["prefix"]) ? $context["prefix"] : null), "name" => "atoms", "default_value" => $this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), ((isset($context["prefix"]) ? $context["prefix"] : null) . "atoms")), "value" => $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "atoms")), "method"), "field" => array("label" => "Enabled of the field Atoms"))));
            // line 35
            echo "        ";
        }
        // line 36
        echo "    </div>

    ";
        // line 39
        echo "    ";
        if ((( !(null === (isset($context["atoms_deprecated"]) ? $context["atoms_deprecated"] : null)) && twig_length_filter($this->env, (isset($context["atoms_deprecated"]) ? $context["atoms_deprecated"] : null))) && $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => "page.head.atoms"), "method"))) {
            // line 40
            echo "        <p class=\"alert alert-notice\">The above Atoms have been imported from the current Outline Layout. Since Gantry 5.2.0 Atoms are no longer located in the Layout Manager. While we are automatically migrating the Atoms for you, please ensure all the settings are correct and resave the Page Settings, as well as the Layout, if needed.</p>
    ";
        }
        // line 42
        echo "
    <div id=\"trash\" data-atoms-erase><div class=\"trash-zone\">&times;</div><span>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_DROP_DELETE"), "html", null, true);
        echo "</span></div>
    ";
        // line 45
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/page/atoms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 45,  126 => 43,  123 => 42,  119 => 40,  116 => 39,  112 => 36,  109 => 35,  106 => 34,  103 => 33,  101 => 32,  98 => 31,  94 => 29,  90 => 27,  82 => 24,  78 => 23,  68 => 21,  66 => 20,  62 => 19,  60 => 18,  58 => 17,  53 => 14,  45 => 11,  41 => 10,  33 => 8,  29 => 7,  25 => 5,  19 => 1,);
    }
}
/* <h2 class="page-title">*/
/*     <span class="title">Atoms</span>*/
/* </h2>*/
/* */
/* <div id="atoms"{{ overrideable ? ' class="atoms-override"' }}>*/
/*     <ul class="atoms-picker">*/
/*         {%- for atom, label in atoms -%}*/
/*         <li data-atom-type="{{ atom }}" data-atom-picked="{{ { 'title': label, 'type': atom, 'attributes': gantry.config.get('particles.' ~ atom) } |json_encode|e('html_attr')}}">*/
/*             <i class="fa fa-fw fa-hand-stop-o drag-indicator"></i>*/
/*             <span class="atom-title">{{ label }}</span>*/
/*             <a href="{{ gantry.route('configurations', page_id, 'page', 'atoms', atom)|e }}" class="atom-settings config-cog"><i aria-label="Configure Atom Settings" class="fa fa-cog"></i></a>*/
/*         </li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/* */
/*     <div class="card settings-block">*/
/*         {% if gantry.config.get('page.head.atoms') %}*/
/*                 <ul class="atoms-list">*/
/*                 {%- for atom in gantry.config.get('page.head.atoms') -%}*/
/*                     {% set status = atom.attributes.enabled ? '' : 'class="atom-disabled" title="This atom has been disabled and it won\'t be rendered on front-end. You can still configure, move and delete."' %}*/
/*                     <li data-atom-picked="{{ atom|json_encode|e('html_attr') }}" {{ status|raw }} data-atom-type="{{ atom.type }}">*/
/*                         <i class="fa fa-fw fa-hand-stop-o drag-indicator"></i>*/
/*                         <span class="atom-title">{{- atom.title -}}</span>*/
/*                         <a href="{{ gantry.route('configurations', page_id, 'page', 'atoms', atom.type)|e }}" class="atom-settings config-cog"><i aria-label="Configure Atom Settings" class="fa fa-cog"></i></a>*/
/*                     </li>*/
/*                 {%- endfor -%}*/
/*                 </ul>*/
/*         {% else %}*/
/*             <ul class="atoms-list"></ul>*/
/*         {% endif %}*/
/* */
/*         {% if overrideable %}*/
/*             {% set prefix = 'page.head.' %}*/
/*             {% include 'forms/override.html.twig' with {'scope': prefix, 'name': 'atoms', 'default_value': attribute(defaults, prefix ~ 'atoms'), 'value': gantry.config.get(prefix ~ 'atoms'), 'field': {'label': 'Enabled of the field Atoms' }} %}*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {# Deprecated Atoms from Layout (< 5.2.0) #}*/
/*     {% if atoms_deprecated is not null and atoms_deprecated|length and gantry.config.get('page.head.atoms') %}*/
/*         <p class="alert alert-notice">The above Atoms have been imported from the current Outline Layout. Since Gantry 5.2.0 Atoms are no longer located in the Layout Manager. While we are automatically migrating the Atoms for you, please ensure all the settings are correct and resave the Page Settings, as well as the Layout, if needed.</p>*/
/*     {% endif %}*/
/* */
/*     <div id="trash" data-atoms-erase><div class="trash-zone">&times;</div><span>{{ 'GANTRY5_PLATFORM_DROP_DELETE'|trans }}</span></div>*/
/*     {#{{ dump(atoms_deprecated|json_encode) }}#}*/
/* </div>*/
