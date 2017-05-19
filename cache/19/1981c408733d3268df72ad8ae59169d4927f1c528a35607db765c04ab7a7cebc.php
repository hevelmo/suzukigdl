<?php

/* plantillas/_main.twig */
class __TwigTemplate_927d265321e6f6c102458a929e2c8f349cf4ead6ef7a854c570da2fb842258a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content_current' => array($this, 'block_content_current'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 34
        $this->displayBlock('content_current', $context, $blocks);
    }

    public function block_content_current($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $this->loadTemplate("plantillas/_main.twig", "plantillas/_main.twig", 35, "1550091753")->display($context);
    }

    public function getTemplateName()
    {
        return "plantillas/_main.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 35,  20 => 34,);
    }
}


/* plantillas/_main.twig */
class __TwigTemplate_927d265321e6f6c102458a929e2c8f349cf4ead6ef7a854c570da2fb842258a1_1550091753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("plantillas/container.twig", "plantillas/_main.twig", 35);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "plantillas/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "plantillas/_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 35,  20 => 34,);
    }
}
/* {#{% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="model-{{ model.key }}" rel="stylesheet" class="link-model-{{ model.key }}" href="{{ _host }}css/sections/models.css">*/
/* 	<link id="financing-test-drive" rel="stylesheet" class="link-financing-test-drive" href="{{ _host }}css/sections/test-drive-selection.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/* 	{% set model = mdopa %}*/
/*     <input type="hidden" id="hidden_section" value="{{ model.key }}">*/
/*     <input type="hidden" id="hidden_lugar" value="modelos">*/
/* {% endblock %}*/
/* {% block section_arrow %}*/
/* 	<div id="model-section-arrow" style="display: none; top: 0px; margin-left: -403px; opacity: 1;">*/
/* 		<span>&nbsp;</span>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block testdrive_flag %}*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* #}*/
/* {#*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/* 		{% endblock %}*/
/* 		{% block models_header %}*/
/* 			{% embed "menus/models_menu.twig" %}{% endembed %}*/
/* 	    {% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* #}*/
/* {% block content_current %}*/
/*     {% embed "plantillas/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {#*/
/* {% block scroll_to_top %}*/
/*     {% embed "menus/scrolltotop.twig" %}{% endembed %}*/
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
/* #}*/
