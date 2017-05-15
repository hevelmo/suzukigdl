<?php

/* garantia/_garantia.twig */
class __TwigTemplate_71840695947a6af0c29f715b263ec0a7d735581a07b8b1e5535b0fcfe8e08ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "garantia/_garantia.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_stylessheet' => array($this, 'block_section_stylessheet'),
            'section' => array($this, 'block_section'),
            'menu_patch' => array($this, 'block_menu_patch'),
            'navbar' => array($this, 'block_navbar'),
            'content_current' => array($this, 'block_content_current'),
            'scroll_to_top' => array($this, 'block_scroll_to_top'),
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
        echo "\t<link id=\"home\" rel=\"stylesheet\" class=\"link-home\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/warranty.css\">
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"reasons\">
";
    }

    // line 10
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 14, "1334233074")->display($context);
    }

    // line 21
    public function block_content_current($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 22, "1996390386")->display($context);
    }

    // line 24
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 25, "959680974")->display($context);
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 28, "1562182747")->display($context);
    }

    // line 30
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 32
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 33
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/warranty.js\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 36
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  115 => 34,  110 => 33,  107 => 32,  102 => 30,  97 => 28,  94 => 27,  89 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_71840695947a6af0c29f715b263ec0a7d735581a07b8b1e5535b0fcfe8e08ded_1334233074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("super_navbar.twig", "garantia/_garantia.twig", 14);
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

    // line 15
    public function block_phone_call($context, array $blocks = array())
    {
        // line 16
        echo "\t\t";
    }

    // line 17
    public function block_models_header($context, array $blocks = array())
    {
        // line 18
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 18,  175 => 17,  171 => 16,  168 => 15,  150 => 14,  121 => 36,  115 => 34,  110 => 33,  107 => 32,  102 => 30,  97 => 28,  94 => 27,  89 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_71840695947a6af0c29f715b263ec0a7d735581a07b8b1e5535b0fcfe8e08ded_1996390386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("garantia/container.twig", "garantia/_garantia.twig", 22);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "garantia/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 22,  178 => 18,  175 => 17,  171 => 16,  168 => 15,  150 => 14,  121 => 36,  115 => 34,  110 => 33,  107 => 32,  102 => 30,  97 => 28,  94 => 27,  89 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_71840695947a6af0c29f715b263ec0a7d735581a07b8b1e5535b0fcfe8e08ded_959680974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "garantia/_garantia.twig", 25);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menus/scrolltotop.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 25,  206 => 22,  178 => 18,  175 => 17,  171 => 16,  168 => 15,  150 => 14,  121 => 36,  115 => 34,  110 => 33,  107 => 32,  102 => 30,  97 => 28,  94 => 27,  89 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_71840695947a6af0c29f715b263ec0a7d735581a07b8b1e5535b0fcfe8e08ded_1562182747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 28
        $this->parent = $this->loadTemplate("super_footer.twig", "garantia/_garantia.twig", 28);
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
        return "garantia/_garantia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 28,  246 => 25,  206 => 22,  178 => 18,  175 => 17,  171 => 16,  168 => 15,  150 => 14,  121 => 36,  115 => 34,  110 => 33,  107 => 32,  102 => 30,  97 => 28,  94 => 27,  89 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="home" rel="stylesheet" class="link-home" href="{{ _host }}css/sections/warranty.css">*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="reasons">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/* 		{% endblock %}*/
/* 		{% block models_header %}*/
/* 	    {% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "garantia/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block scroll_to_top %}*/
/*     {% embed "menus/scrolltotop.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/* 	<script src="{{ _host }}js/sections/warranty.js"></script>*/
/*     <script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
