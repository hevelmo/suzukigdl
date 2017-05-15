<?php

/* razones/_razones.twig */
class __TwigTemplate_640f5318304426e6a8f12b14bbeab31260c422d545384f2ad6122b6a1093d121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "razones/_razones.twig", 1);
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
        echo "css/sections/10reasons.css\">
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
        $this->loadTemplate("razones/_razones.twig", "razones/_razones.twig", 14, "227283948")->display($context);
    }

    // line 21
    public function block_content_current($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->loadTemplate("razones/_razones.twig", "razones/_razones.twig", 22, "274402219")->display($context);
    }

    // line 24
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->loadTemplate("razones/_razones.twig", "razones/_razones.twig", 25, "2115442788")->display($context);
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("razones/_razones.twig", "razones/_razones.twig", 28, "220993989")->display($context);
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
        echo "js/sections/reasons.js\"></script>
\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 36
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 37
        echo "
";
    }

    public function getTemplateName()
    {
        return "razones/_razones.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  121 => 36,  115 => 34,  110 => 33,  107 => 32,  102 => 30,  97 => 28,  94 => 27,  89 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* razones/_razones.twig */
class __TwigTemplate_640f5318304426e6a8f12b14bbeab31260c422d545384f2ad6122b6a1093d121_227283948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("super_navbar.twig", "razones/_razones.twig", 14);
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
        return "razones/_razones.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 18,  178 => 17,  174 => 16,  171 => 15,  153 => 14,  124 => 37,  121 => 36,  115 => 34,  110 => 33,  107 => 32,  102 => 30,  97 => 28,  94 => 27,  89 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* razones/_razones.twig */
class __TwigTemplate_640f5318304426e6a8f12b14bbeab31260c422d545384f2ad6122b6a1093d121_274402219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("razones/container.twig", "razones/_razones.twig", 22);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "razones/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "razones/_razones.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 22,  181 => 18,  178 => 17,  174 => 16,  171 => 15,  153 => 14,  124 => 37,  121 => 36,  115 => 34,  110 => 33,  107 => 32,  102 => 30,  97 => 28,  94 => 27,  89 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* razones/_razones.twig */
class __TwigTemplate_640f5318304426e6a8f12b14bbeab31260c422d545384f2ad6122b6a1093d121_2115442788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "razones/_razones.twig", 25);
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
        return "razones/_razones.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 25,  209 => 22,  181 => 18,  178 => 17,  174 => 16,  171 => 15,  153 => 14,  124 => 37,  121 => 36,  115 => 34,  110 => 33,  107 => 32,  102 => 30,  97 => 28,  94 => 27,  89 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* razones/_razones.twig */
class __TwigTemplate_640f5318304426e6a8f12b14bbeab31260c422d545384f2ad6122b6a1093d121_220993989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 28
        $this->parent = $this->loadTemplate("super_footer.twig", "razones/_razones.twig", 28);
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
        return "razones/_razones.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 28,  249 => 25,  209 => 22,  181 => 18,  178 => 17,  174 => 16,  171 => 15,  153 => 14,  124 => 37,  121 => 36,  115 => 34,  110 => 33,  107 => 32,  102 => 30,  97 => 28,  94 => 27,  89 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 14,  70 => 13,  62 => 10,  57 => 8,  54 => 7,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="home" rel="stylesheet" class="link-home" href="{{ _host }}css/sections/10reasons.css">*/
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
/*     {% embed "razones/container.twig" %}{% endembed %}*/
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
/* 	<script src="{{ _host }}js/sections/reasons.js"></script>*/
/* 	<script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* */
/* {% endblock %}*/
