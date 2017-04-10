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
        echo "\t<link id=\"home\" rel=\"stylesheet\" class=\"link-home\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/home-styles.css\">
";
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"home\">
";
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 10, "2033488579")->display($context);
    }

    // line 12
    public function block_content_current($context, array $blocks = array())
    {
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 15, "1390899096")->display($context);
    }

    // line 17
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 19
    public function block_section_scripts($context, array $blocks = array())
    {
        echo "                
";
    }

    // line 21
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
        return array (  93 => 21,  86 => 19,  81 => 17,  76 => 15,  73 => 14,  68 => 12,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_2033488579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("super_navbar.twig", "home/_home.twig", 10);
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
        return "home/_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 10,  93 => 21,  86 => 19,  81 => 17,  76 => 15,  73 => 14,  68 => 12,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_1390899096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("super_footer.twig", "home/_home.twig", 15);
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
        return array (  162 => 15,  122 => 10,  93 => 21,  86 => 19,  81 => 17,  76 => 15,  73 => 14,  68 => 12,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="home" rel="stylesheet" class="link-home" href="{{ _host }}css/home-styles.css">*/
/* {% endblock %}*/
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="home">*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}                */
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
