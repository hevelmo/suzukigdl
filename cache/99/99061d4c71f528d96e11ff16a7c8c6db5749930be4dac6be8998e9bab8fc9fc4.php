<?php

/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_beb02c5186c0d586e7af06a4942a22ea552e1b401385f183540a5f0077b1e272 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "financiamiento/modelo/_modelo.twig", 1);
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
        echo "\t<link id=\"financing\" rel=\"stylesheet\" class=\"link-financing\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/financing-selection.css\">
\t<link id=\"financing-test-drive\" rel=\"stylesheet\" class=\"link-financing-test-drive\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/test-drive-selection.css\">
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $context["model"] = (isset($context["mdopa"]) ? $context["mdopa"] : null);
        // line 9
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" id=\"hidden_lugar\" value=\"modelos\">
";
    }

    // line 12
    public function block_menu_patch($context, array $blocks = array())
    {
        // line 13
        echo "\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 16, "191605651")->display($context);
    }

    // line 23
    public function block_content_current($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 24, "1998353982")->display($context);
    }

    // line 26
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 27, "2130601906")->display($context);
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 30, "1291388304")->display($context);
    }

    // line 32
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 34
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 35
        echo "\t";
        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 38
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 39
        echo "\ttoHtmlMethod.toHtml();
";
    }

    public function getTemplateName()
    {
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  129 => 38,  122 => 36,  120 => 35,  117 => 34,  112 => 32,  107 => 30,  104 => 29,  99 => 27,  96 => 26,  91 => 24,  88 => 23,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_beb02c5186c0d586e7af06a4942a22ea552e1b401385f183540a5f0077b1e272_191605651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("super_navbar.twig", "financiamiento/modelo/_modelo.twig", 16);
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

    // line 17
    public function block_phone_call($context, array $blocks = array())
    {
        // line 18
        echo "\t\t";
    }

    // line 19
    public function block_models_header($context, array $blocks = array())
    {
        // line 20
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 20,  186 => 19,  182 => 18,  179 => 17,  161 => 16,  132 => 39,  129 => 38,  122 => 36,  120 => 35,  117 => 34,  112 => 32,  107 => 30,  104 => 29,  99 => 27,  96 => 26,  91 => 24,  88 => 23,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_beb02c5186c0d586e7af06a4942a22ea552e1b401385f183540a5f0077b1e272_1998353982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("financiamiento/modelo/container.twig", "financiamiento/modelo/_modelo.twig", 24);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "financiamiento/modelo/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 24,  189 => 20,  186 => 19,  182 => 18,  179 => 17,  161 => 16,  132 => 39,  129 => 38,  122 => 36,  120 => 35,  117 => 34,  112 => 32,  107 => 30,  104 => 29,  99 => 27,  96 => 26,  91 => 24,  88 => 23,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_beb02c5186c0d586e7af06a4942a22ea552e1b401385f183540a5f0077b1e272_2130601906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 27
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "financiamiento/modelo/_modelo.twig", 27);
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
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 27,  217 => 24,  189 => 20,  186 => 19,  182 => 18,  179 => 17,  161 => 16,  132 => 39,  129 => 38,  122 => 36,  120 => 35,  117 => 34,  112 => 32,  107 => 30,  104 => 29,  99 => 27,  96 => 26,  91 => 24,  88 => 23,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_beb02c5186c0d586e7af06a4942a22ea552e1b401385f183540a5f0077b1e272_1291388304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("super_footer.twig", "financiamiento/modelo/_modelo.twig", 30);
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
        return "financiamiento/modelo/_modelo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 30,  257 => 27,  217 => 24,  189 => 20,  186 => 19,  182 => 18,  179 => 17,  161 => 16,  132 => 39,  129 => 38,  122 => 36,  120 => 35,  117 => 34,  112 => 32,  107 => 30,  104 => 29,  99 => 27,  96 => 26,  91 => 24,  88 => 23,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="financing" rel="stylesheet" class="link-financing" href="{{ _host }}css/sections/financing-selection.css">*/
/* 	<link id="financing-test-drive" rel="stylesheet" class="link-financing-test-drive" href="{{ _host }}css/sections/test-drive-selection.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/* 	{% set model = mdopa %}*/
/*     <input type="hidden" id="hidden_section" value="{{ model.key }}">*/
/*     <input type="hidden" id="hidden_lugar" value="modelos">*/
/* {% endblock %}*/
/* {% block menu_patch %}*/
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
/*     {% embed "financiamiento/modelo/container.twig" %}{% endembed %}*/
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
/* 	{#<script src="{{ _host }}js/sections/models.js"></script>#}*/
/*     <script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	toHtmlMethod.toHtml();*/
/* {% endblock %}*/
