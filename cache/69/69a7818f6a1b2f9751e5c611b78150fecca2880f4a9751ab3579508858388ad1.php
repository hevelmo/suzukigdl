<?php

/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "catalogos/_catalogos.twig", 1);
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
        echo "    <link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/catalog.css\">
\t<link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/slick-theme.css\">
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"catalogs\">
";
    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 11, "717153507")->display($context);
    }

    // line 26
    public function block_content_current($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 27, "1384039519")->display($context);
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 30, "1915303767")->display($context);
    }

    // line 32
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 34
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 35
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/catalogs.js\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "lib/assets/plugins/slick/slick.js\"></script>
";
    }

    // line 38
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 39
        echo "\$('body').prepend( patch_bar );
detectNavigatorMethods.IE10();
";
    }

    public function getTemplateName()
    {
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  107 => 38,  101 => 36,  96 => 35,  93 => 34,  88 => 32,  83 => 30,  80 => 29,  75 => 27,  72 => 26,  67 => 11,  64 => 10,  59 => 8,  56 => 7,  50 => 5,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_717153507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("super_navbar.twig", "catalogos/_catalogos.twig", 11);
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

    // line 12
    public function block_phone_call($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t";
        // line 20
        echo "\t\t";
    }

    // line 21
    public function block_models_header($context, array $blocks = array())
    {
        // line 22
        echo "\t\t\t";
        // line 23
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 23,  170 => 22,  167 => 21,  163 => 20,  161 => 13,  158 => 12,  140 => 11,  110 => 39,  107 => 38,  101 => 36,  96 => 35,  93 => 34,  88 => 32,  83 => 30,  80 => 29,  75 => 27,  72 => 26,  67 => 11,  64 => 10,  59 => 8,  56 => 7,  50 => 5,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_1384039519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 27
        $this->parent = $this->loadTemplate("catalogos/container.twig", "catalogos/_catalogos.twig", 27);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "catalogos/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 27,  172 => 23,  170 => 22,  167 => 21,  163 => 20,  161 => 13,  158 => 12,  140 => 11,  110 => 39,  107 => 38,  101 => 36,  96 => 35,  93 => 34,  88 => 32,  83 => 30,  80 => 29,  75 => 27,  72 => 26,  67 => 11,  64 => 10,  59 => 8,  56 => 7,  50 => 5,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_1915303767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("super_footer.twig", "catalogos/_catalogos.twig", 30);
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
        return "catalogos/_catalogos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 30,  200 => 27,  172 => 23,  170 => 22,  167 => 21,  163 => 20,  161 => 13,  158 => 12,  140 => 11,  110 => 39,  107 => 38,  101 => 36,  96 => 35,  93 => 34,  88 => 32,  83 => 30,  80 => 29,  75 => 27,  72 => 26,  67 => 11,  64 => 10,  59 => 8,  56 => 7,  50 => 5,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/*     <link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/catalog.css">*/
/* 	<link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/slick-theme.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="catalogs">*/
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
/*     {% embed "catalogos/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/*     <script src="{{ _host }}js/sections/catalogs.js"></script>*/
/*     <script src="{{ _host }}lib/assets/plugins/slick/slick.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* $('body').prepend( patch_bar );*/
/* detectNavigatorMethods.IE10();*/
/* {% endblock %}*/
