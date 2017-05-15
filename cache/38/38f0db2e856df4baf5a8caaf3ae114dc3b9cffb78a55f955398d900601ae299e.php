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
        echo "css/sections/home.css\">
\t<link id=\"home\" rel=\"stylesheet\" class=\"link-home\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/models-home.css\">
";
    }

    // line 8
    public function block_section($context, array $blocks = array())
    {
        // line 9
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"home\">
";
    }

    // line 11
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 15, "980030418")->display($context);
    }

    // line 30
    public function block_content_current($context, array $blocks = array())
    {
        // line 31
        echo "\t<div id=\"content-content\">
\t\t<div class=\"promos-wrapper-shide_s-cross\">
\t\t\t<div class=\"promos-container\">
\t\t\t\t<div class=\"promotion\">
\t\t\t\t\t<div id=\"content-section-slider-home\">
    \t\t\t\t\t";
        // line 36
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 36, "327495713")->display($context);
        // line 37
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 43
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 44, "453810848")->display($context);
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 47, "1098856036")->display($context);
    }

    // line 49
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 51
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 52
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/home.js\"></script>
\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 55
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
        return array (  138 => 55,  132 => 53,  127 => 52,  124 => 51,  119 => 49,  114 => 47,  111 => 46,  106 => 44,  103 => 43,  94 => 37,  92 => 36,  85 => 31,  82 => 30,  77 => 15,  74 => 14,  66 => 11,  61 => 9,  58 => 8,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_980030418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("super_navbar.twig", "home/_home.twig", 15);
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
        echo "\t\t\t<div id=\"phone-call\">
\t\t\t\t<a href=\"tel: +013337771989\">
\t\t\t\t\t<span style=\"color: #ffffff;\">
\t\t\t\t    \tTel. 01(33)3777-1989
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
    }

    // line 25
    public function block_models_header($context, array $blocks = array())
    {
        // line 26
        echo "\t\t\t";
        // line 27
        echo "\t    ";
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
        return array (  204 => 27,  202 => 26,  199 => 25,  188 => 17,  185 => 16,  167 => 15,  138 => 55,  132 => 53,  127 => 52,  124 => 51,  119 => 49,  114 => 47,  111 => 46,  106 => 44,  103 => 43,  94 => 37,  92 => 36,  85 => 31,  82 => 30,  77 => 15,  74 => 14,  66 => 11,  61 => 9,  58 => 8,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_327495713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 36
        $this->parent = $this->loadTemplate("home/container.twig", "home/_home.twig", 36);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/container.twig";
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
        return array (  232 => 36,  204 => 27,  202 => 26,  199 => 25,  188 => 17,  185 => 16,  167 => 15,  138 => 55,  132 => 53,  127 => 52,  124 => 51,  119 => 49,  114 => 47,  111 => 46,  106 => 44,  103 => 43,  94 => 37,  92 => 36,  85 => 31,  82 => 30,  77 => 15,  74 => 14,  66 => 11,  61 => 9,  58 => 8,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_453810848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 44
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "home/_home.twig", 44);
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
        return "home/_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 44,  232 => 36,  204 => 27,  202 => 26,  199 => 25,  188 => 17,  185 => 16,  167 => 15,  138 => 55,  132 => 53,  127 => 52,  124 => 51,  119 => 49,  114 => 47,  111 => 46,  106 => 44,  103 => 43,  94 => 37,  92 => 36,  85 => 31,  82 => 30,  77 => 15,  74 => 14,  66 => 11,  61 => 9,  58 => 8,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_1098856036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 47
        $this->parent = $this->loadTemplate("super_footer.twig", "home/_home.twig", 47);
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
        return array (  312 => 47,  272 => 44,  232 => 36,  204 => 27,  202 => 26,  199 => 25,  188 => 17,  185 => 16,  167 => 15,  138 => 55,  132 => 53,  127 => 52,  124 => 51,  119 => 49,  114 => 47,  111 => 46,  106 => 44,  103 => 43,  94 => 37,  92 => 36,  85 => 31,  82 => 30,  77 => 15,  74 => 14,  66 => 11,  61 => 9,  58 => 8,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="home" rel="stylesheet" class="link-home" href="{{ _host }}css/sections/home.css">*/
/* 	<link id="home" rel="stylesheet" class="link-home" href="{{ _host }}css/sections/models-home.css">*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="home">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
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
/* 		{% block models_header %}*/
/* 			{#{% embed "menus/models_menu.twig" %}{% endembed %}#}*/
/* 	    {% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/* 	<div id="content-content">*/
/* 		<div class="promos-wrapper-shide_s-cross">*/
/* 			<div class="promos-container">*/
/* 				<div class="promotion">*/
/* 					<div id="content-section-slider-home">*/
/*     					{% embed "home/container.twig" %}{% endembed %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
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
/* 	<script src="{{ _host }}js/sections/home.js"></script>*/
/* 	<script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
