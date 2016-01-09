<?php

/* @gantry-admin/modals/widget.html.twig */
class __TwigTemplate_aef69508d00f35ed70bfc536a548d05d3798787c71442e49563877d785efcb1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/modals/widget.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), "html", null, true);
        echo "\">
    <div class=\"g-tabs\" role=\"tablist\">
        <ul>
            <li class=\"active\"><a href=\"#\" id=\"g-switcher-platforms-tab\" role=\"presentation\" aria-controls=\"g-switcher-platforms\" role=\"tab\" aria-expanded=\"true\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("Widget"), "html", null, true);
        echo "</a></li>
            ";
        // line 8
        if ((isset($context["block"]) ? $context["block"] : null)) {
            // line 9
            echo "            <li><a href=\"#\" id=\"g-settings-block-tab\" role=\"presentation\" aria-controls=\"g-settings-block\" role=\"tab\" aria-expanded=\"false\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_BLOCK"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 11
        echo "        </ul>
    </div>

    <div class=\"g-panes\">
        <div class=\"g-pane active\" role=\"tabpanel\" id=\"g-settings-particle\" aria-labelledby=\"g-settings-particle-tab\" aria-expanded=\"true\">
            <div class=\"card settings-block\">
                <h4>
                    <span data-title-editable=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
        echo "\" class=\"title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
        echo "</span> <i class=\"fa fa-pencil font-small\" tabindex=\"0\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE"), array("%s" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()))), "html", null, true);
        echo "\" data-title-edit></i>
                    <span class=\"badge font-small\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "options", array()), "type", array()), "html", null, true);
        echo "</span>
                </h4>

                <div class=\"wp-form-params\">
                    ";
        // line 23
        echo (isset($context["form"]) ? $context["form"] : null);
        echo "
                </div>
            </div>
        </div>

        ";
        // line 28
        if ((isset($context["block"]) ? $context["block"] : null)) {
            // line 29
            echo "        <div class=\"g-pane\" role=\"tabpanel\" id=\"g-settings-block\" aria-labelledby=\"g-settings-block-tab\" aria-expanded=\"false\">
            <div class=\"card settings-block\">
                <h4>
                    ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_BLOCK"), "html", null, true);
            echo "
                </h4>
                <div class=\"inner-params\">
                    ";
            // line 35
            $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/modals/widget.html.twig", 35)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "form", array()), "data" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "options", array()), "prefix" => "block.")));
            // line 36
            echo "                </div>
            </div>
        </div>
        ";
        }
        // line 40
        echo "    </div>

    <div class=\"g-modal-actions\">
        <button class=\"button button-primary\" type=\"submit\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
        echo "</button>
        <button class=\"button button-primary\" data-apply-and-save>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
        echo "</button>
        <button class=\"button g5-dialog-close\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/modals/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 45,  111 => 44,  107 => 43,  102 => 40,  96 => 36,  94 => 35,  88 => 32,  83 => 29,  81 => 28,  73 => 23,  66 => 19,  58 => 18,  49 => 11,  43 => 9,  41 => 8,  37 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends ajax-suffix ? "@gantry-admin/partials/ajax.html.twig" : "@gantry-admin/partials/base.html.twig" %}*/
/* */
/* {% block gantry %}*/
/* <form method="post" action="{{ gantry.route(action) }}">*/
/*     <div class="g-tabs" role="tablist">*/
/*         <ul>*/
/*             <li class="active"><a href="#" id="g-switcher-platforms-tab" role="presentation" aria-controls="g-switcher-platforms" role="tab" aria-expanded="true">{{ 'Widget'|trans }}</a></li>*/
/*             {% if block %}*/
/*             <li><a href="#" id="g-settings-block-tab" role="presentation" aria-controls="g-settings-block" role="tab" aria-expanded="false">{{ 'GANTRY5_PLATFORM_BLOCK'|trans }}</a></li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="g-panes">*/
/*         <div class="g-pane active" role="tabpanel" id="g-settings-particle" aria-labelledby="g-settings-particle-tab" aria-expanded="true">*/
/*             <div class="card settings-block">*/
/*                 <h4>*/
/*                     <span data-title-editable="{{ item.title }}" class="title">{{ item.title }}</span> <i class="fa fa-pencil font-small" tabindex="0" aria-label="{{ 'GANTRY5_PLATFORM_EDIT_TITLE'|trans|replace({'%s': item.title }) }}" data-title-edit></i>*/
/*                     <span class="badge font-small">{{ item.options.type }}</span>*/
/*                 </h4>*/
/* */
/*                 <div class="wp-form-params">*/
/*                     {{ form|raw }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if block %}*/
/*         <div class="g-pane" role="tabpanel" id="g-settings-block" aria-labelledby="g-settings-block-tab" aria-expanded="false">*/
/*             <div class="card settings-block">*/
/*                 <h4>*/
/*                     {{ 'GANTRY5_PLATFORM_BLOCK'|trans }}*/
/*                 </h4>*/
/*                 <div class="inner-params">*/
/*                     {% include 'forms/fields.html.twig' with {'blueprints': block.form, 'data': item.options, 'prefix': 'block.'} %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <div class="g-modal-actions">*/
/*         <button class="button button-primary" type="submit">{{ 'GANTRY5_PLATFORM_APPLY'|trans }}</button>*/
/*         <button class="button button-primary" data-apply-and-save>{{ 'GANTRY5_PLATFORM_APPLY_SAVE'|trans }}</button>*/
/*         <button class="button g5-dialog-close">{{ 'GANTRY5_PLATFORM_CANCEL'|trans }}</button>*/
/*     </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
