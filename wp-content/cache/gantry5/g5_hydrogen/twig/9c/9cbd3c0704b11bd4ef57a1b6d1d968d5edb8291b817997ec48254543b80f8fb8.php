<?php

/* @particles/loginform.html.twig */
class __TwigTemplate_7efc2c61d1431a28e876305ce59030d351603db68cb1c79d706e64aad73271c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/loginform.html.twig", 1);
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
        echo "
    ";
        // line 5
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 6
        echo "
    <div class=\"g-loginform ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">

        ";
        // line 9
        if ( !(isset($context["is_user_logged_in"]) ? $context["is_user_logged_in"] : null)) {
            // line 10
            echo "
            <form action=\"";
            // line 11
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), array("wp_login_url", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "request", array()), "server", array()), "REQUEST_URI", array(), "array")));
            echo "\" method=\"post\" id=\"g-loginform\">
                ";
            // line 12
            call_user_func_array($this->env->getFunction('function')->getCallable(), array("wp_nonce_field", "log-in"));
            // line 13
            echo "
                ";
            // line 14
            if ( !twig_test_empty($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pretext", array()))) {
                // line 15
                echo "                    <div class=\"login-pretext\">
                        <p>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pretext", array()), "html", null, true);
                echo "</p>
                    </div>
                ";
            }
            // line 19
            echo "
                <fieldset class=\"login-data\">
                    <p id=\"login-username\">
                        <label for=\"username\">";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("User Name", "gantry5")), "html", null, true);
            echo "</label>
                        <input id=\"username\" type=\"text\" name=\"log\" class=\"inputbox\" alt=\"username\" size=\"18\" value=\"\" />
                    </p>
                    <p id=\"login-password\">
                        <label for=\"passwd\">";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Password", "gantry5")), "html", null, true);
            echo "</label>
                        <input id=\"passwd\" type=\"password\" name=\"pwd\" class=\"inputbox\" size=\"18\" alt=\"password\" value=\"\" />
                    </p>
                    <p id=\"login-remember\">
                        <input id=\"remember\" type=\"checkbox\" name=\"rememberme\" class=\"inputbox\" />
                        <label for=\"remember\">";
            // line 31
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Remember me", "gantry5")), "html", null, true);
            echo "</label>
                    </p>
                    <input type=\"submit\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Log In", "gantry5")), "html", null, true);
            echo "\" class=\"button\" name=\"submit\" />
                </fieldset>
                <ul class=\"login-extra\">
                    <li>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('function')->getCallable(), array("wp_lostpassword_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Forgot your password ?", "gantry5")), "html", null, true);
            echo "</a>
                    </li>
                    ";
            // line 39
            if (call_user_func_array($this->env->getFunction('function')->getCallable(), array("get_option", "users_can_register"))) {
                // line 40
                echo "                        <li>
                            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('function')->getCallable(), array("wp_registration_url")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Register", "gantry5")), "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            // line 44
            echo "                </ul>

                ";
            // line 46
            if ( !twig_test_empty($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "posttext", array()))) {
                // line 47
                echo "                    <div class=\"login-posttext\">
                        <p>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "posttext", array()), "html", null, true);
                echo "</p>
                    </div>
                ";
            }
            // line 51
            echo "
            </form>

        ";
        } else {
            // line 55
            echo "
            <form action=\"";
            // line 56
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), array("wp_logout_url", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "request", array()), "server", array()), "REQUEST_URI", array(), "array")));
            echo "\" method=\"post\" id=\"g-loginform\">
                ";
            // line 57
            call_user_func_array($this->env->getFunction('function')->getCallable(), array("wp_nonce_field", "log-out"));
            // line 58
            echo "                <div class=\"greeting\">
                    <p>";
            // line 59
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "greeting", array()), $this->getAttribute((isset($context["current_user"]) ? $context["current_user"] : null), "display_name", array())), "html", null, true);
            echo "</p>
                </div>
                <div class=\"logout-button\">
                    <input type=\"submit\" name=\"submit\" class=\"button\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Log Out", "gantry5")), "html", null, true);
            echo "\" />
                </div>
            </form>

        ";
        }
        // line 67
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/loginform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 67,  164 => 62,  158 => 59,  155 => 58,  153 => 57,  149 => 56,  146 => 55,  140 => 51,  134 => 48,  131 => 47,  129 => 46,  125 => 44,  117 => 41,  114 => 40,  112 => 39,  105 => 37,  98 => 33,  93 => 31,  85 => 26,  78 => 22,  73 => 19,  67 => 16,  64 => 15,  62 => 14,  59 => 13,  57 => 12,  53 => 11,  50 => 10,  48 => 9,  43 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* */
/*     {% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/*     <div class="g-loginform {{ particle.class|e }}">*/
/* */
/*         {% if not is_user_logged_in %}*/
/* */
/*             <form action="{{ function('wp_login_url', gantry.request.server['REQUEST_URI'])|raw }}" method="post" id="g-loginform">*/
/*                 {% do function('wp_nonce_field', 'log-in') %}*/
/* */
/*                 {% if particle.pretext is not empty %}*/
/*                     <div class="login-pretext">*/
/*                         <p>{{ particle.pretext }}</p>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <fieldset class="login-data">*/
/*                     <p id="login-username">*/
/*                         <label for="username">{{ __('User Name', 'gantry5') }}</label>*/
/*                         <input id="username" type="text" name="log" class="inputbox" alt="username" size="18" value="" />*/
/*                     </p>*/
/*                     <p id="login-password">*/
/*                         <label for="passwd">{{ __('Password', 'gantry5') }}</label>*/
/*                         <input id="passwd" type="password" name="pwd" class="inputbox" size="18" alt="password" value="" />*/
/*                     </p>*/
/*                     <p id="login-remember">*/
/*                         <input id="remember" type="checkbox" name="rememberme" class="inputbox" />*/
/*                         <label for="remember">{{ __('Remember me', 'gantry5') }}</label>*/
/*                     </p>*/
/*                     <input type="submit" value="{{ __('Log In', 'gantry5') }}" class="button" name="submit" />*/
/*                 </fieldset>*/
/*                 <ul class="login-extra">*/
/*                     <li>*/
/*                         <a href="{{ function('wp_lostpassword_url') }}">{{ __('Forgot your password ?', 'gantry5') }}</a>*/
/*                     </li>*/
/*                     {% if function('get_option', 'users_can_register') %}*/
/*                         <li>*/
/*                             <a href="{{ function('wp_registration_url') }}">{{ __('Register', 'gantry5') }}</a>*/
/*                         </li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/* */
/*                 {% if particle.posttext is not empty %}*/
/*                     <div class="login-posttext">*/
/*                         <p>{{ particle.posttext }}</p>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*             </form>*/
/* */
/*         {% else %}*/
/* */
/*             <form action="{{ function('wp_logout_url', gantry.request.server['REQUEST_URI'])|raw }}" method="post" id="g-loginform">*/
/*                 {% do function('wp_nonce_field', 'log-out') %}*/
/*                 <div class="greeting">*/
/*                     <p>{{ particle.greeting|format(current_user.display_name) }}</p>*/
/*                 </div>*/
/*                 <div class="logout-button">*/
/*                     <input type="submit" name="submit" class="button" value="{{ __('Log Out', 'gantry5') }}" />*/
/*                 </div>*/
/*             </form>*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
