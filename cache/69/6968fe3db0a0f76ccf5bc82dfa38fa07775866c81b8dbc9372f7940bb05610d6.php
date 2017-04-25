<?php

/* concesionarias/_concesionarias.twig */
class __TwigTemplate_e340bdb3135ad83dfe48c931e601d877ce70727ab0771e007c82a17152a88f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "concesionarias/_concesionarias.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_stylessheet' => array($this, 'block_section_stylessheet'),
            'social_bar' => array($this, 'block_social_bar'),
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
        echo "    ";
    }

    // line 6
    public function block_social_bar($context, array $blocks = array())
    {
        echo " 
";
    }

    // line 8
    public function block_section($context, array $blocks = array())
    {
        // line 9
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"concessionaires\">
";
    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->loadTemplate("concesionarias/_concesionarias.twig", "concesionarias/_concesionarias.twig", 12, "1014658596")->display($context);
    }

    // line 19
    public function block_content_current($context, array $blocks = array())
    {
        // line 20
        echo "    ";
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("concesionarias/_concesionarias.twig", "concesionarias/_concesionarias.twig", 23, "661595369")->display($context);
    }

    // line 25
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 27
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 28
        echo "    ";
    }

    // line 30
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 31
        echo "    \$('body').prepend( patch_bar );
    detectNavigatorMethods.IE10();
";
    }

    public function getTemplateName()
    {
        return "concesionarias/_concesionarias.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  100 => 30,  96 => 28,  93 => 27,  88 => 25,  83 => 23,  80 => 22,  76 => 20,  73 => 19,  68 => 12,  65 => 11,  60 => 9,  57 => 8,  50 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* concesionarias/_concesionarias.twig */
class __TwigTemplate_e340bdb3135ad83dfe48c931e601d877ce70727ab0771e007c82a17152a88f22_1014658596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("super_navbar.twig", "concesionarias/_concesionarias.twig", 12);
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

    // line 13
    public function block_phone_call($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    // line 15
    public function block_models_header($context, array $blocks = array())
    {
        // line 16
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "concesionarias/_concesionarias.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 16,  158 => 15,  154 => 14,  151 => 13,  133 => 12,  103 => 31,  100 => 30,  96 => 28,  93 => 27,  88 => 25,  83 => 23,  80 => 22,  76 => 20,  73 => 19,  68 => 12,  65 => 11,  60 => 9,  57 => 8,  50 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* concesionarias/_concesionarias.twig */
class __TwigTemplate_e340bdb3135ad83dfe48c931e601d877ce70727ab0771e007c82a17152a88f22_661595369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("super_footer.twig", "concesionarias/_concesionarias.twig", 23);
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
        return "concesionarias/_concesionarias.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 23,  161 => 16,  158 => 15,  154 => 14,  151 => 13,  133 => 12,  103 => 31,  100 => 30,  96 => 28,  93 => 27,  88 => 25,  83 => 23,  80 => 22,  76 => 20,  73 => 19,  68 => 12,  65 => 11,  60 => 9,  57 => 8,  50 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/*     {#<link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/catalog.css">#}*/
/* {% endblock %}*/
/* {% block social_bar %} */
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="concessionaires">*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/*         {% endblock %}*/
/*         {% block models_header %}*/
/* 		{% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {#{% embed "concesionarias/container.twig" %}{% endembed %}#}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/*     {#<script src="{{ _host }}js/sections/catalogs.js"></script>#}*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/*     $('body').prepend( patch_bar );*/
/*     detectNavigatorMethods.IE10();*/
/* {% endblock %}*/
