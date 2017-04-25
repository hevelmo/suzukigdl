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
        echo "\t<link id=\"model\" rel=\"stylesheet\" class=\"link-model\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/models.css\">
";
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"model\">
";
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->loadTemplate("modelos/modelo/_model.twig", "modelos/modelo/_model.twig", 10, "116904427")->display($context);
    }

    // line 25
    public function block_content_current($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->loadTemplate("modelos/modelo/_model.twig", "modelos/modelo/_model.twig", 26, "1429626434")->display($context);
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->loadTemplate("modelos/modelo/_model.twig", "modelos/modelo/_model.twig", 29, "1309877576")->display($context);
    }

    // line 31
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 33
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 34
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/models.js\"></script>
";
    }

    // line 36
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 37
        echo "\t";
        // line 38
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
        return array (  104 => 38,  102 => 37,  99 => 36,  92 => 34,  89 => 33,  84 => 31,  79 => 29,  76 => 28,  71 => 26,  68 => 25,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_model.twig */
class __TwigTemplate_b38d6c1e45c49dec9b60f6cd8ab3e14712d22464e270b19dc3295319340f8313_116904427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("super_navbar.twig", "modelos/modelo/_model.twig", 10);
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

    // line 11
    public function block_phone_call($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t";
        // line 19
        echo "\t\t";
    }

    // line 20
    public function block_models_header($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t";
        $this->loadTemplate("modelos/modelo/_model.twig", "modelos/modelo/_model.twig", 21, "460673682")->display($context);
        // line 22
        echo "\t    ";
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
        return array (  166 => 22,  163 => 21,  160 => 20,  156 => 19,  154 => 12,  151 => 11,  133 => 10,  104 => 38,  102 => 37,  99 => 36,  92 => 34,  89 => 33,  84 => 31,  79 => 29,  76 => 28,  71 => 26,  68 => 25,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_model.twig */
class __TwigTemplate_b38d6c1e45c49dec9b60f6cd8ab3e14712d22464e270b19dc3295319340f8313_460673682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 21
        $this->parent = $this->loadTemplate("menus/models_menu.twig", "modelos/modelo/_model.twig", 21);
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
        return "modelos/modelo/_model.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 21,  166 => 22,  163 => 21,  160 => 20,  156 => 19,  154 => 12,  151 => 11,  133 => 10,  104 => 38,  102 => 37,  99 => 36,  92 => 34,  89 => 33,  84 => 31,  79 => 29,  76 => 28,  71 => 26,  68 => 25,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_model.twig */
class __TwigTemplate_b38d6c1e45c49dec9b60f6cd8ab3e14712d22464e270b19dc3295319340f8313_1429626434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("modelos/modelo/container.twig", "modelos/modelo/_model.twig", 26);
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
        return array (  234 => 26,  194 => 21,  166 => 22,  163 => 21,  160 => 20,  156 => 19,  154 => 12,  151 => 11,  133 => 10,  104 => 38,  102 => 37,  99 => 36,  92 => 34,  89 => 33,  84 => 31,  79 => 29,  76 => 28,  71 => 26,  68 => 25,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* modelos/modelo/_model.twig */
class __TwigTemplate_b38d6c1e45c49dec9b60f6cd8ab3e14712d22464e270b19dc3295319340f8313_1309877576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("super_footer.twig", "modelos/modelo/_model.twig", 29);
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
        return array (  274 => 29,  234 => 26,  194 => 21,  166 => 22,  163 => 21,  160 => 20,  156 => 19,  154 => 12,  151 => 11,  133 => 10,  104 => 38,  102 => 37,  99 => 36,  92 => 34,  89 => 33,  84 => 31,  79 => 29,  76 => 28,  71 => 26,  68 => 25,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="model" rel="stylesheet" class="link-model" href="{{ _host }}css/sections/models.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="model">*/
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
/* 	{#$('.seleccionar').chosen();#}*/
/* 	toHtmlMethod.toHtml();*/
/* {% endblock %}*/
