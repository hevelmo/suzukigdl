<?php

/* 404/_404.twig */
class __TwigTemplate_738b08fdbb7bae5de19179d1594ce7a101aac0d63550ac7872c16004df9cb7be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "404/_404.twig", 1);
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
        echo "\t<link id=\"404\" rel=\"stylesheet\" class=\"link-404\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/404.css\">
";
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"404\">
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
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 13, "1517726544")->display($context);
    }

    // line 15
    public function block_content_current($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 16, "439294897")->display($context);
        echo "\t
";
    }

    // line 18
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 19, "1762787665")->display($context);
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 22, "647403330")->display($context);
    }

    // line 24
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 26
    public function block_section_scripts($context, array $blocks = array())
    {
        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/sections/totop.js\"></script>
";
    }

    // line 29
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 29,  112 => 27,  109 => 26,  104 => 24,  99 => 22,  96 => 21,  91 => 19,  88 => 18,  81 => 16,  78 => 15,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_738b08fdbb7bae5de19179d1594ce7a101aac0d63550ac7872c16004df9cb7be_1517726544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("super_navbar.twig", "404/_404.twig", 13);
        $this->blocks = array(
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

    public function getTemplateName()
    {
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 13,  119 => 29,  112 => 27,  109 => 26,  104 => 24,  99 => 22,  96 => 21,  91 => 19,  88 => 18,  81 => 16,  78 => 15,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_738b08fdbb7bae5de19179d1594ce7a101aac0d63550ac7872c16004df9cb7be_439294897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("404/container.twig", "404/_404.twig", 16);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "404/container.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 16,  148 => 13,  119 => 29,  112 => 27,  109 => 26,  104 => 24,  99 => 22,  96 => 21,  91 => 19,  88 => 18,  81 => 16,  78 => 15,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_738b08fdbb7bae5de19179d1594ce7a101aac0d63550ac7872c16004df9cb7be_1762787665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("menus/scrolltotop.twig", "404/_404.twig", 19);
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
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 19,  188 => 16,  148 => 13,  119 => 29,  112 => 27,  109 => 26,  104 => 24,  99 => 22,  96 => 21,  91 => 19,  88 => 18,  81 => 16,  78 => 15,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_738b08fdbb7bae5de19179d1594ce7a101aac0d63550ac7872c16004df9cb7be_647403330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("super_footer.twig", "404/_404.twig", 22);
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
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 22,  228 => 19,  188 => 16,  148 => 13,  119 => 29,  112 => 27,  109 => 26,  104 => 24,  99 => 22,  96 => 21,  91 => 19,  88 => 18,  81 => 16,  78 => 15,  73 => 13,  70 => 12,  62 => 9,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="404" rel="stylesheet" class="link-404" href="{{ _host }}css/sections/404.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="404">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "404/container.twig" %}{% endembed %}	*/
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
/*     <script src="{{ _host }}js/sections/totop.js"></script>*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
