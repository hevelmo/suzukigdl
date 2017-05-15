<?php

/* privacidad/_privacidad.twig */
class __TwigTemplate_c11f5f1c86bf5fe887f3dacdc4ff628664aef429dc7d46918c4d3a9dad7b6610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "privacidad/_privacidad.twig", 1);
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
        echo "\t<link id=\"legals\" rel=\"stylesheet\" class=\"link-legals\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/legals.css\">
";
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"privacy-notice\">
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
        $this->loadTemplate("privacidad/_privacidad.twig", "privacidad/_privacidad.twig", 13, "824051082")->display($context);
    }

    // line 19
    public function block_content_current($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->loadTemplate("privacidad/_privacidad.twig", "privacidad/_privacidad.twig", 20, "1393952821")->display($context);
    }

    // line 22
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("privacidad/_privacidad.twig", "privacidad/_privacidad.twig", 23, "1139325091")->display($context);
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->loadTemplate("privacidad/_privacidad.twig", "privacidad/_privacidad.twig", 26, "1272136586")->display($context);
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
        echo "js/sections/totop.js\"></script>
";
    }

    // line 33
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "privacidad/_privacidad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  110 => 31,  107 => 30,  102 => 28,  97 => 26,  94 => 25,  89 => 23,  86 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* privacidad/_privacidad.twig */
class __TwigTemplate_c11f5f1c86bf5fe887f3dacdc4ff628664aef429dc7d46918c4d3a9dad7b6610_824051082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("super_navbar.twig", "privacidad/_privacidad.twig", 13);
        $this->blocks = array(
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
    public function block_models_header($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t";
        // line 16
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "privacidad/_privacidad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 16,  166 => 15,  163 => 14,  146 => 13,  117 => 33,  110 => 31,  107 => 30,  102 => 28,  97 => 26,  94 => 25,  89 => 23,  86 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* privacidad/_privacidad.twig */
class __TwigTemplate_c11f5f1c86bf5fe887f3dacdc4ff628664aef429dc7d46918c4d3a9dad7b6610_1393952821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("privacidad/container.twig", "privacidad/_privacidad.twig", 20);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "privacidad/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "privacidad/_privacidad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 20,  168 => 16,  166 => 15,  163 => 14,  146 => 13,  117 => 33,  110 => 31,  107 => 30,  102 => 28,  97 => 26,  94 => 25,  89 => 23,  86 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* privacidad/_privacidad.twig */
class __TwigTemplate_c11f5f1c86bf5fe887f3dacdc4ff628664aef429dc7d46918c4d3a9dad7b6610_1139325091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "privacidad/_privacidad.twig", 23);
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
        return "privacidad/_privacidad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 23,  196 => 20,  168 => 16,  166 => 15,  163 => 14,  146 => 13,  117 => 33,  110 => 31,  107 => 30,  102 => 28,  97 => 26,  94 => 25,  89 => 23,  86 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* privacidad/_privacidad.twig */
class __TwigTemplate_c11f5f1c86bf5fe887f3dacdc4ff628664aef429dc7d46918c4d3a9dad7b6610_1272136586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("super_footer.twig", "privacidad/_privacidad.twig", 26);
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
        return "privacidad/_privacidad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 26,  236 => 23,  196 => 20,  168 => 16,  166 => 15,  163 => 14,  146 => 13,  117 => 33,  110 => 31,  107 => 30,  102 => 28,  97 => 26,  94 => 25,  89 => 23,  86 => 22,  81 => 20,  78 => 19,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="legals" rel="stylesheet" class="link-legals" href="{{ _host }}css/sections/legals.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="privacy-notice">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block models_header %}*/
/* 			{#{% embed "menus/models_menu.twig" %}{% endembed %}#}*/
/* 	    {% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "privacidad/container.twig" %}{% endembed %}*/
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
/*     <script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
