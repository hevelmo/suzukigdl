<?php

/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "modelos/_modelos.twig", 1);
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
        echo "\t<link id=\"models\" rel=\"stylesheet\" class=\"link-models\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/models_gama.css\">
";
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"models\">
";
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 10, "1575367409")->display($context);
    }

    // line 25
    public function block_content_current($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 26, "1349637737")->display($context);
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 29, "1491154321")->display($context);
    }

    // line 31
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 33
    public function block_section_scripts($context, array $blocks = array())
    {
    }

    // line 35
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 36
        echo "\t";
        // line 37
        echo "\ttoHtmlMethod.toHtml();
";
    }

    public function getTemplateName()
    {
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  97 => 36,  94 => 35,  89 => 33,  84 => 31,  79 => 29,  76 => 28,  71 => 26,  68 => 25,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e_1575367409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("super_navbar.twig", "modelos/_modelos.twig", 10);
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
        // line 22
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 22,  158 => 21,  155 => 20,  151 => 19,  149 => 12,  146 => 11,  128 => 10,  99 => 37,  97 => 36,  94 => 35,  89 => 33,  84 => 31,  79 => 29,  76 => 28,  71 => 26,  68 => 25,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e_1349637737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("modelos/container.twig", "modelos/_modelos.twig", 26);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "modelos/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 26,  160 => 22,  158 => 21,  155 => 20,  151 => 19,  149 => 12,  146 => 11,  128 => 10,  99 => 37,  97 => 36,  94 => 35,  89 => 33,  84 => 31,  79 => 29,  76 => 28,  71 => 26,  68 => 25,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e_1491154321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("super_footer.twig", "modelos/_modelos.twig", 29);
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
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 29,  188 => 26,  160 => 22,  158 => 21,  155 => 20,  151 => 19,  149 => 12,  146 => 11,  128 => 10,  99 => 37,  97 => 36,  94 => 35,  89 => 33,  84 => 31,  79 => 29,  76 => 28,  71 => 26,  68 => 25,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="models" rel="stylesheet" class="link-models" href="{{ _host }}css/sections/models_gama.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="models">*/
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
/* 			{#{% embed "menus/models_menu.twig" %}{% endembed %}#}*/
/* 	    {% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "modelos/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	{#$('.seleccionar').chosen();#}*/
/* 	toHtmlMethod.toHtml();*/
/* {% endblock %}*/
