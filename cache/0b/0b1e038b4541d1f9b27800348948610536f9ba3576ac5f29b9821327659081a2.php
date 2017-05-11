<?php

/* modelos/modelo/_modelo.twig */
class __TwigTemplate_b44fc0d195be6de85ffafe1beb1cff6624c9bd1d6b8736f4cc2aa6fd34e0bfce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "modelos/modelo/_modelo.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_stylessheet' => array($this, 'block_section_stylessheet'),
            'section' => array($this, 'block_section'),
            'section_arrow' => array($this, 'block_section_arrow'),
            'testdrive_flag' => array($this, 'block_testdrive_flag'),
            'menu_patch' => array($this, 'block_menu_patch'),
            'navbar' => array($this, 'block_navbar'),
            'content_current' => array($this, 'block_content_current'),
            'footer' => array($this, 'block_footer'),
            'script_load_js' => array($this, 'block_script_load_js'),
            'section_scripts' => array($this, 'block_section_scripts'),
            'load_scripts' => array($this, 'block_load_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "super.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 3
    public function block_section_stylessheet($context, array $blocks = array())
    {
        // line 4
        echo "\t<link id=\"model-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" rel=\"stylesheet\" class=\"link-model-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/models.css\">
\t<link id=\"financing-test-drive\" rel=\"stylesheet\" class=\"link-financing-test-drive\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/test-drive-selection.css\">
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $context["model"] = (isset($context["mdopa"]) ? $context["mdopa"] : null);
        // line 9
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" id=\"hidden_lugar\" value=\"modelos\">
";
    }

    // line 12
    public function block_section_arrow($context, array $blocks = array())
    {
        // line 13
        echo "\t<div id=\"model-section-arrow\" style=\"display: none; top: 0px; margin-left: -403px; opacity: 1;\">
\t\t<span>&nbsp;</span>
\t</div>
";
    }

    // line 17
    public function block_testdrive_flag($context, array $blocks = array())
    {
        echo "            
\t<div id=\"model-test-drive-flag\">
\t\t<a href=\"#prueba-de-manejo\" id=\"model-test-drive-flag-link\">
\t\t\t<span>Prueba de Manejo</span>
\t\t</a>
\t</div>
";
    }

    // line 24
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 27
    public function block_navbar($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("modelos/modelo/_modelo.twig", "modelos/modelo/_modelo.twig", 28, "454288110")->display($context);
    }

    // line 36
    public function block_content_current($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->loadTemplate("modelos/modelo/_modelo.twig", "modelos/modelo/_modelo.twig", 37, "759675065")->display($context);
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $this->loadTemplate("modelos/modelo/_modelo.twig", "modelos/modelo/_modelo.twig", 40, "1072339792")->display($context);
    }

    // line 42
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 44
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 45
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/models.js\"></script>
";
    }

    // line 47
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 48
        echo "\ttoHtmlMethod.toHtml();
\t_datepicker.init();
";
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  146 => 47,  139 => 45,  136 => 44,  131 => 42,  126 => 40,  123 => 39,  118 => 37,  115 => 36,  110 => 28,  107 => 27,  99 => 24,  87 => 17,  80 => 13,  77 => 12,  69 => 9,  66 => 8,  63 => 7,  57 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_modelo.twig */
class __TwigTemplate_b44fc0d195be6de85ffafe1beb1cff6624c9bd1d6b8736f4cc2aa6fd34e0bfce_454288110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 28
        $this->parent = $this->loadTemplate("super_navbar.twig", "modelos/modelo/_modelo.twig", 28);
        $this->blocks = array(
            'phone_call' => array($this, 'block_phone_call'),
            'models_header' => array($this, 'block_models_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_navbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_phone_call($context, array $blocks = array())
    {
        // line 30
        echo "\t\t";
    }

    // line 31
    public function block_models_header($context, array $blocks = array())
    {
        // line 32
        echo "\t\t\t";
        $this->loadTemplate("modelos/modelo/_modelo.twig", "modelos/modelo/_modelo.twig", 32, "415499572")->display($context);
        // line 33
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 33,  207 => 32,  204 => 31,  200 => 30,  197 => 29,  179 => 28,  149 => 48,  146 => 47,  139 => 45,  136 => 44,  131 => 42,  126 => 40,  123 => 39,  118 => 37,  115 => 36,  110 => 28,  107 => 27,  99 => 24,  87 => 17,  80 => 13,  77 => 12,  69 => 9,  66 => 8,  63 => 7,  57 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_modelo.twig */
class __TwigTemplate_b44fc0d195be6de85ffafe1beb1cff6624c9bd1d6b8736f4cc2aa6fd34e0bfce_415499572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 32
        $this->parent = $this->loadTemplate("menus/models_menu.twig", "modelos/modelo/_modelo.twig", 32);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menus/models_menu.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 32,  210 => 33,  207 => 32,  204 => 31,  200 => 30,  197 => 29,  179 => 28,  149 => 48,  146 => 47,  139 => 45,  136 => 44,  131 => 42,  126 => 40,  123 => 39,  118 => 37,  115 => 36,  110 => 28,  107 => 27,  99 => 24,  87 => 17,  80 => 13,  77 => 12,  69 => 9,  66 => 8,  63 => 7,  57 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_modelo.twig */
class __TwigTemplate_b44fc0d195be6de85ffafe1beb1cff6624c9bd1d6b8736f4cc2aa6fd34e0bfce_759675065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 37
        $this->parent = $this->loadTemplate("modelos/modelo/container.twig", "modelos/modelo/_modelo.twig", 37);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "modelos/modelo/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 37,  238 => 32,  210 => 33,  207 => 32,  204 => 31,  200 => 30,  197 => 29,  179 => 28,  149 => 48,  146 => 47,  139 => 45,  136 => 44,  131 => 42,  126 => 40,  123 => 39,  118 => 37,  115 => 36,  110 => 28,  107 => 27,  99 => 24,  87 => 17,  80 => 13,  77 => 12,  69 => 9,  66 => 8,  63 => 7,  57 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_modelo.twig */
class __TwigTemplate_b44fc0d195be6de85ffafe1beb1cff6624c9bd1d6b8736f4cc2aa6fd34e0bfce_1072339792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 40
        $this->parent = $this->loadTemplate("super_footer.twig", "modelos/modelo/_modelo.twig", 40);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_footer.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 40,  278 => 37,  238 => 32,  210 => 33,  207 => 32,  204 => 31,  200 => 30,  197 => 29,  179 => 28,  149 => 48,  146 => 47,  139 => 45,  136 => 44,  131 => 42,  126 => 40,  123 => 39,  118 => 37,  115 => 36,  110 => 28,  107 => 27,  99 => 24,  87 => 17,  80 => 13,  77 => 12,  69 => 9,  66 => 8,  63 => 7,  57 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="model-{{ model.key }}" rel="stylesheet" class="link-model-{{ model.key }}" href="{{ _host }}css/sections/models.css">*/
/* 	<link id="financing-test-drive" rel="stylesheet" class="link-financing-test-drive" href="{{ _host }}css/sections/test-drive-selection.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/* 	{% set model = mdopa %}*/
/*     <input type="hidden" id="hidden_section" value="{{ model.key }}">*/
/*     <input type="hidden" id="hidden_lugar" value="modelos">*/
/* {% endblock %}*/
/* {% block section_arrow %}*/
/* 	<div id="model-section-arrow" style="display: none; top: 0px; margin-left: -403px; opacity: 1;">*/
/* 		<span>&nbsp;</span>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block testdrive_flag %}            */
/* 	<div id="model-test-drive-flag">*/
/* 		<a href="#prueba-de-manejo" id="model-test-drive-flag-link">*/
/* 			<span>Prueba de Manejo</span>*/
/* 		</a>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/* 		{% endblock %}*/
/* 		{% block models_header %}*/
/* 			{% embed "menus/models_menu.twig" %}{% endembed %}*/
/* 	    {% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "modelos/modelo/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/* 	<script src="{{ _host }}js/sections/models.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	toHtmlMethod.toHtml();*/
/* 	_datepicker.init();*/
/* {% endblock %}*/
