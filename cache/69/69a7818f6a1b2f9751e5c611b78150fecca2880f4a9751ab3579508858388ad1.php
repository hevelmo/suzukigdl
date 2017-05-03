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
\t<link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/slick-theme.css\">
";
    }

    // line 8
    public function block_social_bar($context, array $blocks = array())
    {
        echo " 
\t";
        // line 9
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 9, "34254169")->display($context);
        echo "               
";
    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        // line 12
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"catalogs\">
";
    }

    // line 14
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
    <div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 17
    public function block_navbar($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 18, "358621858")->display($context);
    }

    // line 25
    public function block_content_current($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 26, "1786935110")->display($context);
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 29, "1835275785")->display($context);
    }

    // line 31
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 33
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 34
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/catalogs.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "lib/assets/plugins/slick/slick.js\"></script>
";
    }

    // line 37
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 38
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
        return array (  135 => 38,  132 => 37,  126 => 35,  121 => 34,  118 => 33,  113 => 31,  108 => 29,  105 => 28,  100 => 26,  97 => 25,  92 => 18,  89 => 17,  81 => 14,  76 => 12,  73 => 11,  67 => 9,  62 => 8,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_34254169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("super_socialbar.twig", "catalogos/_catalogos.twig", 9);
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
        return array (  165 => 9,  135 => 38,  132 => 37,  126 => 35,  121 => 34,  118 => 33,  113 => 31,  108 => 29,  105 => 28,  100 => 26,  97 => 25,  92 => 18,  89 => 17,  81 => 14,  76 => 12,  73 => 11,  67 => 9,  62 => 8,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_358621858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("super_navbar.twig", "catalogos/_catalogos.twig", 18);
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

    // line 19
    public function block_phone_call($context, array $blocks = array())
    {
        // line 20
        echo "        ";
    }

    // line 21
    public function block_models_header($context, array $blocks = array())
    {
        // line 22
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
        return array (  233 => 22,  230 => 21,  226 => 20,  223 => 19,  205 => 18,  165 => 9,  135 => 38,  132 => 37,  126 => 35,  121 => 34,  118 => 33,  113 => 31,  108 => 29,  105 => 28,  100 => 26,  97 => 25,  92 => 18,  89 => 17,  81 => 14,  76 => 12,  73 => 11,  67 => 9,  62 => 8,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_1786935110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("catalogos/container.twig", "catalogos/_catalogos.twig", 26);
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
        return array (  261 => 26,  233 => 22,  230 => 21,  226 => 20,  223 => 19,  205 => 18,  165 => 9,  135 => 38,  132 => 37,  126 => 35,  121 => 34,  118 => 33,  113 => 31,  108 => 29,  105 => 28,  100 => 26,  97 => 25,  92 => 18,  89 => 17,  81 => 14,  76 => 12,  73 => 11,  67 => 9,  62 => 8,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_1835275785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("super_footer.twig", "catalogos/_catalogos.twig", 29);
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
        return array (  301 => 29,  261 => 26,  233 => 22,  230 => 21,  226 => 20,  223 => 19,  205 => 18,  165 => 9,  135 => 38,  132 => 37,  126 => 35,  121 => 34,  118 => 33,  113 => 31,  108 => 29,  105 => 28,  100 => 26,  97 => 25,  92 => 18,  89 => 17,  81 => 14,  76 => 12,  73 => 11,  67 => 9,  62 => 8,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/*     <link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/catalog.css">*/
/*     <link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/socialbar.css">*/
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
