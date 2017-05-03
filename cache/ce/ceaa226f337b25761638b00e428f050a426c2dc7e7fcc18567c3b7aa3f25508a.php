<?php

/* grupo/_grupo.twig */
class __TwigTemplate_9cbaa5067b535b3c3a63fdc4d6787ba33e8476dec48ba94911417dcf69e2cbc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "grupo/_grupo.twig", 1);
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
        echo "\t<link id=\"group\" rel=\"stylesheet\" class=\"link-group\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/warranty.css\">
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"group\">
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
        $this->loadTemplate("grupo/_grupo.twig", "grupo/_grupo.twig", 14, "2141724803")->display($context);
    }

    // line 29
    public function block_content_current($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->loadTemplate("grupo/_grupo.twig", "grupo/_grupo.twig", 30, "2137174575")->display($context);
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $this->loadTemplate("grupo/_grupo.twig", "grupo/_grupo.twig", 33, "954303308")->display($context);
    }

    // line 35
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 37
    public function block_section_scripts($context, array $blocks = array())
    {
    }

    // line 39
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "grupo/_grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  98 => 37,  93 => 35,  88 => 33,  85 => 32,  80 => 30,  77 => 29,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* grupo/_grupo.twig */
class __TwigTemplate_9cbaa5067b535b3c3a63fdc4d6787ba33e8476dec48ba94911417dcf69e2cbc6_2141724803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("super_navbar.twig", "grupo/_grupo.twig", 14);
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
        echo "\t\t\t";
        // line 23
        echo "\t\t";
    }

    // line 24
    public function block_models_header($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t";
        // line 26
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "grupo/_grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 26,  162 => 25,  159 => 24,  155 => 23,  153 => 16,  150 => 15,  132 => 14,  103 => 39,  98 => 37,  93 => 35,  88 => 33,  85 => 32,  80 => 30,  77 => 29,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* grupo/_grupo.twig */
class __TwigTemplate_9cbaa5067b535b3c3a63fdc4d6787ba33e8476dec48ba94911417dcf69e2cbc6_2137174575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("grupo/container.twig", "grupo/_grupo.twig", 30);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "grupo/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "grupo/_grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 30,  164 => 26,  162 => 25,  159 => 24,  155 => 23,  153 => 16,  150 => 15,  132 => 14,  103 => 39,  98 => 37,  93 => 35,  88 => 33,  85 => 32,  80 => 30,  77 => 29,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* grupo/_grupo.twig */
class __TwigTemplate_9cbaa5067b535b3c3a63fdc4d6787ba33e8476dec48ba94911417dcf69e2cbc6_954303308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 33
        $this->parent = $this->loadTemplate("super_footer.twig", "grupo/_grupo.twig", 33);
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
        return "grupo/_grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 33,  192 => 30,  164 => 26,  162 => 25,  159 => 24,  155 => 23,  153 => 16,  150 => 15,  132 => 14,  103 => 39,  98 => 37,  93 => 35,  88 => 33,  85 => 32,  80 => 30,  77 => 29,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="group" rel="stylesheet" class="link-group" href="{{ _host }}css/sections/warranty.css">*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="group">*/
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
/*     {% embed "grupo/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
