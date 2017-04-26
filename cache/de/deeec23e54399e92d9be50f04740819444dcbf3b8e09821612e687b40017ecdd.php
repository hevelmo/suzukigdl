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
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 13, "1181915903")->display($context);
    }

    // line 28
    public function block_content_current($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 29, "1205937829")->display($context);
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 32, "753220707")->display($context);
    }

    // line 34
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 36
    public function block_section_scripts($context, array $blocks = array())
    {
    }

    // line 38
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 39
        echo "\t";
        // line 40
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
        return array (  108 => 40,  106 => 39,  103 => 38,  98 => 36,  93 => 34,  88 => 32,  85 => 31,  80 => 29,  77 => 28,  72 => 13,  69 => 12,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e_1181915903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("super_navbar.twig", "modelos/_modelos.twig", 13);
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

    // line 14
    public function block_phone_call($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t";
        // line 22
        echo "\t\t";
    }

    // line 23
    public function block_models_header($context, array $blocks = array())
    {
        // line 24
        echo "\t\t\t";
        // line 25
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
        return array (  169 => 25,  167 => 24,  164 => 23,  160 => 22,  158 => 15,  155 => 14,  137 => 13,  108 => 40,  106 => 39,  103 => 38,  98 => 36,  93 => 34,  88 => 32,  85 => 31,  80 => 29,  77 => 28,  72 => 13,  69 => 12,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e_1205937829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("modelos/container.twig", "modelos/_modelos.twig", 29);
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
        return array (  197 => 29,  169 => 25,  167 => 24,  164 => 23,  160 => 22,  158 => 15,  155 => 14,  137 => 13,  108 => 40,  106 => 39,  103 => 38,  98 => 36,  93 => 34,  88 => 32,  85 => 31,  80 => 29,  77 => 28,  72 => 13,  69 => 12,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e_753220707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 32
        $this->parent = $this->loadTemplate("super_footer.twig", "modelos/_modelos.twig", 32);
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
        return array (  237 => 32,  197 => 29,  169 => 25,  167 => 24,  164 => 23,  160 => 22,  158 => 15,  155 => 14,  137 => 13,  108 => 40,  106 => 39,  103 => 38,  98 => 36,  93 => 34,  88 => 32,  85 => 31,  80 => 29,  77 => 28,  72 => 13,  69 => 12,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
