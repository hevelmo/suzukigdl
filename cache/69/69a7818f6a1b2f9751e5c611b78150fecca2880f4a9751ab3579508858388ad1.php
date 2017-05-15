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
            'social_bar' => array($this, 'block_social_bar'),
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
        echo "    <link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/catalog.css\">
    <link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/socialbar.css\">
    <link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/models.css\">
\t<link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/slick-theme.css\">
";
    }

    // line 9
    public function block_social_bar($context, array $blocks = array())
    {
        echo " 
\t";
        // line 10
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 10, "1108202409")->display($context);
        echo "               
";
    }

    // line 12
    public function block_section($context, array $blocks = array())
    {
        // line 13
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"catalogs\">
";
    }

    // line 15
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
    <div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 18
    public function block_navbar($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 19, "1809718897")->display($context);
    }

    // line 26
    public function block_content_current($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 27, "1722886404")->display($context);
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 30, "1612671547")->display($context);
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
        return array (  139 => 39,  136 => 38,  130 => 36,  125 => 35,  122 => 34,  117 => 32,  112 => 30,  109 => 29,  104 => 27,  101 => 26,  96 => 19,  93 => 18,  85 => 15,  80 => 13,  77 => 12,  71 => 10,  66 => 9,  60 => 7,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_1108202409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("super_socialbar.twig", "catalogos/_catalogos.twig", 10);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_socialbar.twig";
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
        return array (  169 => 10,  139 => 39,  136 => 38,  130 => 36,  125 => 35,  122 => 34,  117 => 32,  112 => 30,  109 => 29,  104 => 27,  101 => 26,  96 => 19,  93 => 18,  85 => 15,  80 => 13,  77 => 12,  71 => 10,  66 => 9,  60 => 7,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_1809718897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("super_navbar.twig", "catalogos/_catalogos.twig", 19);
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

    // line 20
    public function block_phone_call($context, array $blocks = array())
    {
        // line 21
        echo "        ";
    }

    // line 22
    public function block_models_header($context, array $blocks = array())
    {
        // line 23
        echo "\t\t";
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
        return array (  237 => 23,  234 => 22,  230 => 21,  227 => 20,  209 => 19,  169 => 10,  139 => 39,  136 => 38,  130 => 36,  125 => 35,  122 => 34,  117 => 32,  112 => 30,  109 => 29,  104 => 27,  101 => 26,  96 => 19,  93 => 18,  85 => 15,  80 => 13,  77 => 12,  71 => 10,  66 => 9,  60 => 7,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_1722886404 extends Twig_Template
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
        return array (  265 => 27,  237 => 23,  234 => 22,  230 => 21,  227 => 20,  209 => 19,  169 => 10,  139 => 39,  136 => 38,  130 => 36,  125 => 35,  122 => 34,  117 => 32,  112 => 30,  109 => 29,  104 => 27,  101 => 26,  96 => 19,  93 => 18,  85 => 15,  80 => 13,  77 => 12,  71 => 10,  66 => 9,  60 => 7,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_1612671547 extends Twig_Template
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
        return array (  305 => 30,  265 => 27,  237 => 23,  234 => 22,  230 => 21,  227 => 20,  209 => 19,  169 => 10,  139 => 39,  136 => 38,  130 => 36,  125 => 35,  122 => 34,  117 => 32,  112 => 30,  109 => 29,  104 => 27,  101 => 26,  96 => 19,  93 => 18,  85 => 15,  80 => 13,  77 => 12,  71 => 10,  66 => 9,  60 => 7,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/*     <link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/catalog.css">*/
/*     <link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/socialbar.css">*/
/*     <link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/models.css">*/
/* 	<link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/slick-theme.css">*/
/* {% endblock %}*/
/* {% block social_bar %} */
/* 	{% embed "super_socialbar.twig" %}{% endembed %}               */
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="catalogs">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/*     <div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/*         {% endblock %}*/
/*         {% block models_header %}*/
/* 		{% endblock %}*/
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
