<?php

/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "modelos/_modelos.twig", 1);
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
        echo "\t<link id=\"models\" rel=\"stylesheet\" class=\"link-models\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/models_gama.css\">
";
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"modelos\">
";
    }

    // line 9
    public function block_menu_patch($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 13, "2098443331")->display($context);
    }

    // line 20
    public function block_content_current($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 21, "703842825")->display($context);
    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->loadTemplate("modelos/_modelos.twig", "modelos/_modelos.twig", 24, "930497694")->display($context);
    }

    // line 26
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 28
    public function block_section_scripts($context, array $blocks = array())
    {
    }

    // line 30
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 31
        echo "\t";
        // line 32
        echo "\ttoHtmlMethod.toHtml();
";
    }

    public function getTemplateName()
    {
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  106 => 31,  103 => 30,  98 => 28,  93 => 26,  88 => 24,  85 => 23,  80 => 21,  77 => 20,  72 => 13,  69 => 12,  64 => 10,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e_2098443331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("super_navbar.twig", "modelos/_modelos.twig", 13);
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

    // line 14
    public function block_phone_call($context, array $blocks = array())
    {
        // line 15
        echo "\t\t";
    }

    // line 16
    public function block_models_header($context, array $blocks = array())
    {
        // line 17
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 17,  162 => 16,  158 => 15,  155 => 14,  137 => 13,  108 => 32,  106 => 31,  103 => 30,  98 => 28,  93 => 26,  88 => 24,  85 => 23,  80 => 21,  77 => 20,  72 => 13,  69 => 12,  64 => 10,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e_703842825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 21
        $this->parent = $this->loadTemplate("modelos/container.twig", "modelos/_modelos.twig", 21);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "modelos/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 21,  165 => 17,  162 => 16,  158 => 15,  155 => 14,  137 => 13,  108 => 32,  106 => 31,  103 => 30,  98 => 28,  93 => 26,  88 => 24,  85 => 23,  80 => 21,  77 => 20,  72 => 13,  69 => 12,  64 => 10,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* modelos/_modelos.twig */
class __TwigTemplate_5f65f3060813c27e930f2cdd1899ec740ff19ca0180e4664deb434e440c7c28e_930497694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("super_footer.twig", "modelos/_modelos.twig", 24);
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
        return "modelos/_modelos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 24,  193 => 21,  165 => 17,  162 => 16,  158 => 15,  155 => 14,  137 => 13,  108 => 32,  106 => 31,  103 => 30,  98 => 28,  93 => 26,  88 => 24,  85 => 23,  80 => 21,  77 => 20,  72 => 13,  69 => 12,  64 => 10,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="models" rel="stylesheet" class="link-models" href="{{ _host }}css/sections/models_gama.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="modelos">*/
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
/*     {% embed "modelos/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	{#$('.seleccionar').chosen();#}*/
/* 	toHtmlMethod.toHtml();*/
/* {% endblock %}*/
