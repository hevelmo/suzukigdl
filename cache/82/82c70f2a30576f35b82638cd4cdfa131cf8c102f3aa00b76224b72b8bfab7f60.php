<?php

/* privacidad/_privacidad.twig */
class __TwigTemplate_c11f5f1c86bf5fe887f3dacdc4ff628664aef429dc7d46918c4d3a9dad7b6610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "privacidad/_privacidad.twig", 1);
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
        echo "\t<link id=\"legals\" rel=\"stylesheet\" class=\"link-legals\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/legals.css\">
";
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"privacy-notice\">
";
    }

    // line 9
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->loadTemplate("privacidad/_privacidad.twig", "privacidad/_privacidad.twig", 13, "441595457")->display($context);
    }

    // line 19
    public function block_content_current($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->loadTemplate("privacidad/_privacidad.twig", "privacidad/_privacidad.twig", 20, "847305239")->display($context);
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("privacidad/_privacidad.twig", "privacidad/_privacidad.twig", 23, "70889367")->display($context);
    }

    // line 25
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 27
    public function block_section_scripts($context, array $blocks = array())
    {
    }

    // line 29
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "privacidad/_privacidad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  98 => 27,  93 => 25,  88 => 23,  85 => 22,  80 => 20,  77 => 19,  72 => 13,  69 => 12,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* privacidad/_privacidad.twig */
class __TwigTemplate_c11f5f1c86bf5fe887f3dacdc4ff628664aef429dc7d46918c4d3a9dad7b6610_441595457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("super_navbar.twig", "privacidad/_privacidad.twig", 13);
        $this->blocks = array(
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
    public function block_models_header($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t";
        // line 16
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "privacidad/_privacidad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 16,  152 => 15,  149 => 14,  132 => 13,  103 => 29,  98 => 27,  93 => 25,  88 => 23,  85 => 22,  80 => 20,  77 => 19,  72 => 13,  69 => 12,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* privacidad/_privacidad.twig */
class __TwigTemplate_c11f5f1c86bf5fe887f3dacdc4ff628664aef429dc7d46918c4d3a9dad7b6610_847305239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("privacidad/container.twig", "privacidad/_privacidad.twig", 20);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "privacidad/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "privacidad/_privacidad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 20,  154 => 16,  152 => 15,  149 => 14,  132 => 13,  103 => 29,  98 => 27,  93 => 25,  88 => 23,  85 => 22,  80 => 20,  77 => 19,  72 => 13,  69 => 12,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* privacidad/_privacidad.twig */
class __TwigTemplate_c11f5f1c86bf5fe887f3dacdc4ff628664aef429dc7d46918c4d3a9dad7b6610_70889367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("super_footer.twig", "privacidad/_privacidad.twig", 23);
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
        return "privacidad/_privacidad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 23,  182 => 20,  154 => 16,  152 => 15,  149 => 14,  132 => 13,  103 => 29,  98 => 27,  93 => 25,  88 => 23,  85 => 22,  80 => 20,  77 => 19,  72 => 13,  69 => 12,  61 => 9,  56 => 7,  53 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="legals" rel="stylesheet" class="link-legals" href="{{ _host }}css/sections/legals.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="privacy-notice">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block models_header %}*/
/* 			{#{% embed "menus/models_menu.twig" %}{% endembed %}#}*/
/* 	    {% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "privacidad/container.twig" %}{% endembed %}*/
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