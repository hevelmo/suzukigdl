<?php

/* modelos/modelo/_model.twig */
class __TwigTemplate_b38d6c1e45c49dec9b60f6cd8ab3e14712d22464e270b19dc3295319340f8313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "modelos/modelo/_model.twig", 1);
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
";
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $context["model"] = (isset($context["mdopa"]) ? $context["mdopa"] : null);
        // line 8
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" id=\"hidden_lugar\" value=\"modelos\">
";
    }

    // line 11
    public function block_section_arrow($context, array $blocks = array())
    {
        // line 12
        echo "\t<div id=\"model-section-arrow\" style=\"display: none; top: 0px; margin-left: -403px; opacity: 1;\">
\t\t<span>&nbsp;</span>
\t</div>
";
    }

    // line 16
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

    // line 23
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 26
    public function block_navbar($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->loadTemplate("modelos/modelo/_model.twig", "modelos/modelo/_model.twig", 27, "421058067")->display($context);
    }

    // line 42
    public function block_content_current($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->loadTemplate("modelos/modelo/_model.twig", "modelos/modelo/_model.twig", 43, "1533122957")->display($context);
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $this->loadTemplate("modelos/modelo/_model.twig", "modelos/modelo/_model.twig", 46, "577123852")->display($context);
    }

    // line 48
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 50
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 51
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/models.js\"></script>
";
    }

    // line 53
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 54
        echo "\ttoHtmlMethod.toHtml();
";
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_model.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 54,  142 => 53,  135 => 51,  132 => 50,  127 => 48,  122 => 46,  119 => 45,  114 => 43,  111 => 42,  106 => 27,  103 => 26,  95 => 23,  83 => 16,  76 => 12,  73 => 11,  65 => 8,  62 => 7,  59 => 6,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_model.twig */
class __TwigTemplate_b38d6c1e45c49dec9b60f6cd8ab3e14712d22464e270b19dc3295319340f8313_421058067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 27
        $this->parent = $this->loadTemplate("super_navbar.twig", "modelos/modelo/_model.twig", 27);
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

    // line 28
    public function block_phone_call($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t";
        // line 36
        echo "\t\t";
    }

    // line 37
    public function block_models_header($context, array $blocks = array())
    {
        // line 38
        echo "\t\t\t
\t    ";
    }

    public function getTemplateName()
    {
        return "modelos/modelo/_model.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 38,  201 => 37,  197 => 36,  195 => 29,  192 => 28,  174 => 27,  145 => 54,  142 => 53,  135 => 51,  132 => 50,  127 => 48,  122 => 46,  119 => 45,  114 => 43,  111 => 42,  106 => 27,  103 => 26,  95 => 23,  83 => 16,  76 => 12,  73 => 11,  65 => 8,  62 => 7,  59 => 6,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_model.twig */
class __TwigTemplate_b38d6c1e45c49dec9b60f6cd8ab3e14712d22464e270b19dc3295319340f8313_1533122957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 43
        $this->parent = $this->loadTemplate("modelos/modelo/container.twig", "modelos/modelo/_model.twig", 43);
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
        return "modelos/modelo/_model.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 43,  204 => 38,  201 => 37,  197 => 36,  195 => 29,  192 => 28,  174 => 27,  145 => 54,  142 => 53,  135 => 51,  132 => 50,  127 => 48,  122 => 46,  119 => 45,  114 => 43,  111 => 42,  106 => 27,  103 => 26,  95 => 23,  83 => 16,  76 => 12,  73 => 11,  65 => 8,  62 => 7,  59 => 6,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_model.twig */
class __TwigTemplate_b38d6c1e45c49dec9b60f6cd8ab3e14712d22464e270b19dc3295319340f8313_577123852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 46
        $this->parent = $this->loadTemplate("super_footer.twig", "modelos/modelo/_model.twig", 46);
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
        return "modelos/modelo/_model.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 46,  233 => 43,  204 => 38,  201 => 37,  197 => 36,  195 => 29,  192 => 28,  174 => 27,  145 => 54,  142 => 53,  135 => 51,  132 => 50,  127 => 48,  122 => 46,  119 => 45,  114 => 43,  111 => 42,  106 => 27,  103 => 26,  95 => 23,  83 => 16,  76 => 12,  73 => 11,  65 => 8,  62 => 7,  59 => 6,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="model-{{ model.key }}" rel="stylesheet" class="link-model-{{ model.key }}" href="{{ _host }}css/sections/models.css">*/
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
/* 			{#<div id="phone-call">*/
/* 				<a href="tel: +013337771989">*/
/* 					<span style="color: #ffffff;">*/
/* 				    	Tel. 01(33)3777-1989*/
/* 					</span>*/
/* 				</a>*/
/* 			</div>#}*/
/* 		{% endblock %}*/
/* 		{% block models_header %}*/
/* 			*/
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
/* {% endblock %}*/
