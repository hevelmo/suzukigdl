<?php

/* bolsa/_bolsa.twig */
class __TwigTemplate_13550b0ce9f61b3b75e00edde1feeb9705d973036a49b19a60896fb03601a969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "bolsa/_bolsa.twig", 1);
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
        echo "\t<link id=\"contact\" rel=\"stylesheet\" class=\"link-contact\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/contact.css\">
\t";
        // line 6
        echo "\t<link id=\"financing-test-drive\" rel=\"stylesheet\" class=\"link-financing-test-drive\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/test-drive-selection.css\">
";
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        // line 10
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"job-board\">
";
    }

    // line 12
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->loadTemplate("bolsa/_bolsa.twig", "bolsa/_bolsa.twig", 16, "176143179")->display($context);
    }

    // line 34
    public function block_content_current($context, array $blocks = array())
    {
        // line 35
        echo "\t";
        $context["model"] = (isset($context["mdopa"]) ? $context["mdopa"] : null);
        // line 36
        echo "    ";
        $this->loadTemplate("bolsa/_bolsa.twig", "bolsa/_bolsa.twig", 36, "607009864")->display($context);
    }

    // line 38
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $this->loadTemplate("bolsa/_bolsa.twig", "bolsa/_bolsa.twig", 39, "1081031544")->display($context);
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->loadTemplate("bolsa/_bolsa.twig", "bolsa/_bolsa.twig", 42, "1704572513")->display($context);
    }

    // line 44
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 46
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 47
        echo "\t";
        // line 48
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 50
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 51
        echo "\t";
        // line 52
        echo "\t\$('#suk_model').on('change', getModel.model);
\tcustomFileMethods.init_customFile();
";
    }

    public function getTemplateName()
    {
        return "bolsa/_bolsa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 52,  130 => 51,  127 => 50,  120 => 48,  118 => 47,  115 => 46,  110 => 44,  105 => 42,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  83 => 34,  78 => 16,  75 => 15,  67 => 12,  62 => 10,  59 => 9,  52 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* bolsa/_bolsa.twig */
class __TwigTemplate_13550b0ce9f61b3b75e00edde1feeb9705d973036a49b19a60896fb03601a969_176143179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("super_navbar.twig", "bolsa/_bolsa.twig", 16);
        $this->blocks = array(
            'phone_call' => array($this, 'block_phone_call'),
            'models_header' => array($this, 'block_models_header'),
            'menu_catalogs' => array($this, 'block_menu_catalogs'),
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

    // line 17
    public function block_phone_call($context, array $blocks = array())
    {
        // line 18
        echo "\t\t\t";
        // line 25
        echo "\t\t";
    }

    // line 26
    public function block_models_header($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t";
        // line 28
        echo "\t    ";
    }

    // line 29
    public function block_menu_catalogs($context, array $blocks = array())
    {
        echo "                
\t\t    ";
        // line 30
        $this->loadTemplate("bolsa/_bolsa.twig", "bolsa/_bolsa.twig", 30, "856035134")->display($context);
        // line 31
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "bolsa/_bolsa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 31,  204 => 30,  199 => 29,  195 => 28,  193 => 27,  190 => 26,  186 => 25,  184 => 18,  181 => 17,  162 => 16,  132 => 52,  130 => 51,  127 => 50,  120 => 48,  118 => 47,  115 => 46,  110 => 44,  105 => 42,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  83 => 34,  78 => 16,  75 => 15,  67 => 12,  62 => 10,  59 => 9,  52 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* bolsa/_bolsa.twig */
class __TwigTemplate_13550b0ce9f61b3b75e00edde1feeb9705d973036a49b19a60896fb03601a969_856035134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("menus/list_catallogs.twig", "bolsa/_bolsa.twig", 30);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menus/list_catallogs.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "bolsa/_bolsa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 30,  206 => 31,  204 => 30,  199 => 29,  195 => 28,  193 => 27,  190 => 26,  186 => 25,  184 => 18,  181 => 17,  162 => 16,  132 => 52,  130 => 51,  127 => 50,  120 => 48,  118 => 47,  115 => 46,  110 => 44,  105 => 42,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  83 => 34,  78 => 16,  75 => 15,  67 => 12,  62 => 10,  59 => 9,  52 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* bolsa/_bolsa.twig */
class __TwigTemplate_13550b0ce9f61b3b75e00edde1feeb9705d973036a49b19a60896fb03601a969_607009864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 36
        $this->parent = $this->loadTemplate("bolsa/container.twig", "bolsa/_bolsa.twig", 36);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "bolsa/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "bolsa/_bolsa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 36,  234 => 30,  206 => 31,  204 => 30,  199 => 29,  195 => 28,  193 => 27,  190 => 26,  186 => 25,  184 => 18,  181 => 17,  162 => 16,  132 => 52,  130 => 51,  127 => 50,  120 => 48,  118 => 47,  115 => 46,  110 => 44,  105 => 42,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  83 => 34,  78 => 16,  75 => 15,  67 => 12,  62 => 10,  59 => 9,  52 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* bolsa/_bolsa.twig */
class __TwigTemplate_13550b0ce9f61b3b75e00edde1feeb9705d973036a49b19a60896fb03601a969_1081031544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 39
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "bolsa/_bolsa.twig", 39);
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
        return "bolsa/_bolsa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 39,  274 => 36,  234 => 30,  206 => 31,  204 => 30,  199 => 29,  195 => 28,  193 => 27,  190 => 26,  186 => 25,  184 => 18,  181 => 17,  162 => 16,  132 => 52,  130 => 51,  127 => 50,  120 => 48,  118 => 47,  115 => 46,  110 => 44,  105 => 42,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  83 => 34,  78 => 16,  75 => 15,  67 => 12,  62 => 10,  59 => 9,  52 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* bolsa/_bolsa.twig */
class __TwigTemplate_13550b0ce9f61b3b75e00edde1feeb9705d973036a49b19a60896fb03601a969_1704572513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 42
        $this->parent = $this->loadTemplate("super_footer.twig", "bolsa/_bolsa.twig", 42);
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
        return "bolsa/_bolsa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 42,  314 => 39,  274 => 36,  234 => 30,  206 => 31,  204 => 30,  199 => 29,  195 => 28,  193 => 27,  190 => 26,  186 => 25,  184 => 18,  181 => 17,  162 => 16,  132 => 52,  130 => 51,  127 => 50,  120 => 48,  118 => 47,  115 => 46,  110 => 44,  105 => 42,  102 => 41,  97 => 39,  94 => 38,  89 => 36,  86 => 35,  83 => 34,  78 => 16,  75 => 15,  67 => 12,  62 => 10,  59 => 9,  52 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="contact" rel="stylesheet" class="link-contact" href="{{ _host }}css/sections/contact.css">*/
/* 	{#<link id="contact" rel="stylesheet" class="link-contact" href="{{ _host }}css/plugins/jquery.chosen/chosen.css">#}*/
/* 	<link id="financing-test-drive" rel="stylesheet" class="link-financing-test-drive" href="{{ _host }}css/sections/test-drive-selection.css">*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="job-board">*/
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
/* 	    {% block menu_catalogs %}                */
/* 		    {% embed "menus/list_catallogs.twig" %}{% endembed %}*/
/* 		{% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/* 	{% set model = mdopa %}*/
/*     {% embed "bolsa/container.twig" %}{% endembed %}*/
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
/* 	{#<script src="{{ _host }}js/sections/contact.js"></script>#}*/
/*     <script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	{#$('.seleccionar').chosen();#}*/
/* 	$('#suk_model').on('change', getModel.model);*/
/* 	customFileMethods.init_customFile();*/
/* {% endblock %}*/