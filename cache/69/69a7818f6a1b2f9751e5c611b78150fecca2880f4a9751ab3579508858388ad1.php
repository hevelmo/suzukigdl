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
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 9, "2016455985")->display($context);
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
    public function block_navbar($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 15, "1461914534")->display($context);
    }

    // line 22
    public function block_content_current($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 23, "641364043")->display($context);
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->loadTemplate("catalogos/_catalogos.twig", "catalogos/_catalogos.twig", 26, "319075500")->display($context);
    }

    // line 28
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 30
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 31
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/catalogs.js\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "lib/assets/plugins/slick/slick.js\"></script>
";
    }

    // line 34
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 35
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
        return array (  126 => 35,  123 => 34,  117 => 32,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  83 => 15,  80 => 14,  75 => 12,  72 => 11,  66 => 9,  61 => 8,  55 => 6,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_2016455985 extends Twig_Template
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
        return array (  156 => 9,  126 => 35,  123 => 34,  117 => 32,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  83 => 15,  80 => 14,  75 => 12,  72 => 11,  66 => 9,  61 => 8,  55 => 6,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_1461914534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("super_navbar.twig", "catalogos/_catalogos.twig", 15);
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

    // line 16
    public function block_phone_call($context, array $blocks = array())
    {
        // line 17
        echo "        ";
    }

    // line 18
    public function block_models_header($context, array $blocks = array())
    {
        // line 19
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
        return array (  224 => 19,  221 => 18,  217 => 17,  214 => 16,  196 => 15,  156 => 9,  126 => 35,  123 => 34,  117 => 32,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  83 => 15,  80 => 14,  75 => 12,  72 => 11,  66 => 9,  61 => 8,  55 => 6,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_641364043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("catalogos/container.twig", "catalogos/_catalogos.twig", 23);
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
        return array (  252 => 23,  224 => 19,  221 => 18,  217 => 17,  214 => 16,  196 => 15,  156 => 9,  126 => 35,  123 => 34,  117 => 32,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  83 => 15,  80 => 14,  75 => 12,  72 => 11,  66 => 9,  61 => 8,  55 => 6,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* catalogos/_catalogos.twig */
class __TwigTemplate_74db01af925670d05abb7bd5631d0d5031345df358f12ebdca81631163c11db4_319075500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("super_footer.twig", "catalogos/_catalogos.twig", 26);
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
        return array (  292 => 26,  252 => 23,  224 => 19,  221 => 18,  217 => 17,  214 => 16,  196 => 15,  156 => 9,  126 => 35,  123 => 34,  117 => 32,  112 => 31,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  91 => 23,  88 => 22,  83 => 15,  80 => 14,  75 => 12,  72 => 11,  66 => 9,  61 => 8,  55 => 6,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
