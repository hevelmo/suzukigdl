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
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 14, "1333044996")->display($context);
    }

    // line 21
    public function block_content_current($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 22, "413224444")->display($context);
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->loadTemplate("garantia/_garantia.twig", "garantia/_garantia.twig", 25, "1729281133")->display($context);
    }

    // line 27
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 29
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 30
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/warranty.js\"></script>
";
    }

    // line 32
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
        return array (  108 => 32,  101 => 30,  98 => 29,  93 => 27,  88 => 25,  85 => 24,  80 => 22,  77 => 21,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_71840695947a6af0c29f715b263ec0a7d735581a07b8b1e5535b0fcfe8e08ded_1333044996 extends Twig_Template
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
        return array (  165 => 18,  162 => 17,  158 => 16,  155 => 15,  137 => 14,  108 => 32,  101 => 30,  98 => 29,  93 => 27,  88 => 25,  85 => 24,  80 => 22,  77 => 21,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_71840695947a6af0c29f715b263ec0a7d735581a07b8b1e5535b0fcfe8e08ded_413224444 extends Twig_Template
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
        return array (  193 => 22,  165 => 18,  162 => 17,  158 => 16,  155 => 15,  137 => 14,  108 => 32,  101 => 30,  98 => 29,  93 => 27,  88 => 25,  85 => 24,  80 => 22,  77 => 21,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* garantia/_garantia.twig */
class __TwigTemplate_71840695947a6af0c29f715b263ec0a7d735581a07b8b1e5535b0fcfe8e08ded_1729281133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("super_footer.twig", "garantia/_garantia.twig", 25);
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
        return array (  233 => 25,  193 => 22,  165 => 18,  162 => 17,  158 => 16,  155 => 15,  137 => 14,  108 => 32,  101 => 30,  98 => 29,  93 => 27,  88 => 25,  85 => 24,  80 => 22,  77 => 21,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/* 	<script src="{{ _host }}js/sections/warranty.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
