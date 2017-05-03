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
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 16, "903703634")->display($context);
    }

    // line 23
    public function block_content_current($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 24, "104146277")->display($context);
    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->loadTemplate("financiamiento/modelo/_modelo.twig", "financiamiento/modelo/_modelo.twig", 27, "604165719")->display($context);
    }

    // line 29
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 31
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 32
        echo "\t";
    }

    // line 34
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 35
        echo "\ttoHtmlMethod.toHtml();
\t";
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
        return array (  118 => 35,  115 => 34,  111 => 32,  108 => 31,  103 => 29,  98 => 27,  95 => 26,  90 => 24,  87 => 23,  82 => 16,  79 => 15,  74 => 13,  71 => 12,  63 => 9,  60 => 8,  57 => 7,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_beb02c5186c0d586e7af06a4942a22ea552e1b401385f183540a5f0077b1e272_903703634 extends Twig_Template
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
        return array (  175 => 20,  172 => 19,  168 => 18,  165 => 17,  147 => 16,  118 => 35,  115 => 34,  111 => 32,  108 => 31,  103 => 29,  98 => 27,  95 => 26,  90 => 24,  87 => 23,  82 => 16,  79 => 15,  74 => 13,  71 => 12,  63 => 9,  60 => 8,  57 => 7,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_beb02c5186c0d586e7af06a4942a22ea552e1b401385f183540a5f0077b1e272_104146277 extends Twig_Template
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
        return array (  203 => 24,  175 => 20,  172 => 19,  168 => 18,  165 => 17,  147 => 16,  118 => 35,  115 => 34,  111 => 32,  108 => 31,  103 => 29,  98 => 27,  95 => 26,  90 => 24,  87 => 23,  82 => 16,  79 => 15,  74 => 13,  71 => 12,  63 => 9,  60 => 8,  57 => 7,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* financiamiento/modelo/_modelo.twig */
class __TwigTemplate_beb02c5186c0d586e7af06a4942a22ea552e1b401385f183540a5f0077b1e272_604165719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 27
        $this->parent = $this->loadTemplate("super_footer.twig", "financiamiento/modelo/_modelo.twig", 27);
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
        return array (  243 => 27,  203 => 24,  175 => 20,  172 => 19,  168 => 18,  165 => 17,  147 => 16,  118 => 35,  115 => 34,  111 => 32,  108 => 31,  103 => 29,  98 => 27,  95 => 26,  90 => 24,  87 => 23,  82 => 16,  79 => 15,  74 => 13,  71 => 12,  63 => 9,  60 => 8,  57 => 7,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/* 	{#<script src="{{ _host }}js/sections/models.js"></script>#}*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	toHtmlMethod.toHtml();*/
/* 	{#financingByModelMethods.valor({{ model.key }});#}*/
/* {% endblock %}*/
