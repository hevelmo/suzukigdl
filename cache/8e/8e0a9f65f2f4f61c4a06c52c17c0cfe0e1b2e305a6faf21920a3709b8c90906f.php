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
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 10, "2114637569")->display($context);
    }

    // line 12
    public function block_content_current($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 13, "668529014")->display($context);
        echo "\t
";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->loadTemplate("404/_404.twig", "404/_404.twig", 16, "648299406")->display($context);
    }

    // line 18
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 20
    public function block_section_scripts($context, array $blocks = array())
    {
        echo "                
";
    }

    // line 22
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
        return array (  98 => 22,  91 => 20,  86 => 18,  81 => 16,  78 => 15,  71 => 13,  68 => 12,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_738b08fdbb7bae5de19179d1594ce7a101aac0d63550ac7872c16004df9cb7be_2114637569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("super_navbar.twig", "404/_404.twig", 10);
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
        return array (  127 => 10,  98 => 22,  91 => 20,  86 => 18,  81 => 16,  78 => 15,  71 => 13,  68 => 12,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_738b08fdbb7bae5de19179d1594ce7a101aac0d63550ac7872c16004df9cb7be_668529014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("404/container.twig", "404/_404.twig", 13);
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
        return array (  167 => 13,  127 => 10,  98 => 22,  91 => 20,  86 => 18,  81 => 16,  78 => 15,  71 => 13,  68 => 12,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}


/* 404/_404.twig */
class __TwigTemplate_738b08fdbb7bae5de19179d1594ce7a101aac0d63550ac7872c16004df9cb7be_648299406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("super_footer.twig", "404/_404.twig", 16);
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
        return array (  207 => 16,  167 => 13,  127 => 10,  98 => 22,  91 => 20,  86 => 18,  81 => 16,  78 => 15,  71 => 13,  68 => 12,  63 => 10,  60 => 9,  55 => 7,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "404/container.twig" %}{% endembed %}	*/
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
