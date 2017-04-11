<?php

/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "home/_home.twig", 1);
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
        echo "\t<link id=\"home\" rel=\"stylesheet\" class=\"link-home\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/home.css\">
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"home\">
";
    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 11, "1223205823")->display($context);
    }

    // line 23
    public function block_content_current($context, array $blocks = array())
    {
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 26, "1139305593")->display($context);
    }

    // line 28
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 30
    public function block_section_scripts($context, array $blocks = array())
    {
        echo "                
";
    }

    // line 32
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "home/_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  86 => 30,  81 => 28,  76 => 26,  73 => 25,  68 => 23,  63 => 11,  60 => 10,  55 => 8,  52 => 7,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_1223205823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("super_navbar.twig", "home/_home.twig", 11);
        $this->blocks = array(
            'phone_call' => array($this, 'block_phone_call'),
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
        echo "\t\t\t<div id=\"phone-call\">
\t\t\t\t<a href=\"tel: +013337771989\">
\t\t\t\t\t<span style=\"color: #ffffff;\">
\t\t\t\t    \tTel. 01(33)3777-1989
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
    }

    public function getTemplateName()
    {
        return "home/_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 13,  139 => 12,  122 => 11,  93 => 32,  86 => 30,  81 => 28,  76 => 26,  73 => 25,  68 => 23,  63 => 11,  60 => 10,  55 => 8,  52 => 7,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_1139305593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("super_footer.twig", "home/_home.twig", 26);
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
        return "home/_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 26,  142 => 13,  139 => 12,  122 => 11,  93 => 32,  86 => 30,  81 => 28,  76 => 26,  73 => 25,  68 => 23,  63 => 11,  60 => 10,  55 => 8,  52 => 7,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="home" rel="stylesheet" class="link-home" href="{{ _host }}css/sections/home.css">*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="home">*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/* 			<div id="phone-call">*/
/* 				<a href="tel: +013337771989">*/
/* 					<span style="color: #ffffff;">*/
/* 				    	Tel. 01(33)3777-1989*/
/* 					</span>*/
/* 				</a>*/
/* 			</div>*/
/* 		{% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}                */
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
