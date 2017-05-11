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
        echo "    <link id=\"catalogs\" rel=\"stylesheet\" class=\"link-catalogs\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/concessionaires.css\">
";
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
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
    <div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->loadTemplate("concesionarias/_concesionarias.twig", "concesionarias/_concesionarias.twig", 15, "1147252133")->display($context);
    }

    // line 22
    public function block_content_current($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("concesionarias/_concesionarias.twig", "concesionarias/_concesionarias.twig", 23, "1903695567")->display($context);
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->loadTemplate("concesionarias/_concesionarias.twig", "concesionarias/_concesionarias.twig", 26, "686356946")->display($context);
    }

    // line 28
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 30
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 31
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/concessionaires.js\"></script>
";
    }

    // line 33
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 34
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
        return array (  119 => 34,  116 => 33,  109 => 31,  106 => 30,  101 => 28,  96 => 26,  93 => 25,  88 => 23,  85 => 22,  80 => 15,  77 => 14,  69 => 11,  64 => 9,  61 => 8,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* concesionarias/_concesionarias.twig */
class __TwigTemplate_e340bdb3135ad83dfe48c931e601d877ce70727ab0771e007c82a17152a88f22_1147252133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("super_navbar.twig", "concesionarias/_concesionarias.twig", 15);
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
        echo "        ";
    }

    // line 18
    public function block_models_header($context, array $blocks = array())
    {
        // line 19
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
        return array (  177 => 19,  174 => 18,  170 => 17,  167 => 16,  149 => 15,  119 => 34,  116 => 33,  109 => 31,  106 => 30,  101 => 28,  96 => 26,  93 => 25,  88 => 23,  85 => 22,  80 => 15,  77 => 14,  69 => 11,  64 => 9,  61 => 8,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* concesionarias/_concesionarias.twig */
class __TwigTemplate_e340bdb3135ad83dfe48c931e601d877ce70727ab0771e007c82a17152a88f22_1903695567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("concesionarias/container.twig", "concesionarias/_concesionarias.twig", 23);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "concesionarias/container.twig";
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
        return array (  205 => 23,  177 => 19,  174 => 18,  170 => 17,  167 => 16,  149 => 15,  119 => 34,  116 => 33,  109 => 31,  106 => 30,  101 => 28,  96 => 26,  93 => 25,  88 => 23,  85 => 22,  80 => 15,  77 => 14,  69 => 11,  64 => 9,  61 => 8,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* concesionarias/_concesionarias.twig */
class __TwigTemplate_e340bdb3135ad83dfe48c931e601d877ce70727ab0771e007c82a17152a88f22_686356946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("super_footer.twig", "concesionarias/_concesionarias.twig", 26);
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
        return array (  245 => 26,  205 => 23,  177 => 19,  174 => 18,  170 => 17,  167 => 16,  149 => 15,  119 => 34,  116 => 33,  109 => 31,  106 => 30,  101 => 28,  96 => 26,  93 => 25,  88 => 23,  85 => 22,  80 => 15,  77 => 14,  69 => 11,  64 => 9,  61 => 8,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/*     <link id="catalogs" rel="stylesheet" class="link-catalogs" href="{{ _host }}css/sections/concessionaires.css">*/
/* {% endblock %}*/
/* {% block social_bar %} */
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="concessionaires">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/*     <div class="menu-patch" id="patch">&nbsp;</div>*/
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
/*     {% embed "concesionarias/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/*     <script src="{{ _host }}js/sections/concessionaires.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/*     $('body').prepend( patch_bar );*/
/*     detectNavigatorMethods.IE10();*/
/* {% endblock %}*/
