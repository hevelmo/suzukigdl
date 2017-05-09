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
        echo "\t<link id=\"home\" rel=\"stylesheet\" class=\"link-home\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/sections/home.css\">
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    <input type=\"hidden\" id=\"hidden_section\" value=\"home\">
";
    }

    // line 10
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "    
\t<div class=\"menu-patch\" id=\"patch\">&nbsp;</div>
";
    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 14, "323650237")->display($context);
        // line 28
        echo "    
";
    }

    // line 30
    public function block_content_current($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 31, "517314509")->display($context);
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 34, "1020318356")->display($context);
    }

    // line 36
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 38
    public function block_section_scripts($context, array $blocks = array())
    {
    }

    // line 40
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 41
        echo "\t//Specifications Slider controls and functionality
\tvar specifications_i = 0;
\tvar specifications_total =  \$('.specifications-wrapper .specification').length - 1;
\t\$(\"body\").on('click', 'a.specifications-controls', function( e ){
\t    e.preventDefault();
\t    var direction, fake_div, copy_div;
\t    \$('.specifications-wrapper .fake_div').remove();
\t    if( \$(this).attr('href') == '#left' ){
\t        if( specifications_i > 0 ){
\t            specifications_i--;
\t        }else{
\t            specifications_i = specifications_total ;
\t            fake_div = true;
\t            copy_div = \$('#features-wrapper .specification').eq( 0).clone();
\t            copy_div.addClass('fake_div');
\t            \$('#features-wrapper').append( copy_div ).css({marginLeft: ( ( specifications_i + 1 ) * -100 )+'%' }).stop().animate({marginLeft: ( specifications_i * -100) + '%' });
\t        }
\t    }else{
\t        if( specifications_i < specifications_total ){
\t            specifications_i++;
\t        }else{
\t            fake_div = true;
\t            specifications_i = 0;
\t            copy_div = \$('#features-wrapper .specification').eq( specifications_i -1  ).clone();
\t            \$('#features-wrapper').prepend( copy_div ).css({marginLeft: '100%' }).stop();
\t            copy_div.addClass('fake_div').css({marginLeft:\"-99%\", position:\"absolute\", width: \"100%\"}).stop().animate({marginLeft:'-100%'} );
\t            \$('#features-wrapper').animate({marginLeft: '0'});
\t        }
\t    }
\t    if( !fake_div ){
\t        \$('.specifications-wrapper .specifications').stop().animate({marginLeft: ( specifications_i * -100) + '%' });
\t    }
\t});
";
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
        return array (  109 => 41,  106 => 40,  101 => 38,  96 => 36,  91 => 34,  88 => 33,  83 => 31,  80 => 30,  75 => 28,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_323650237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("super_navbar.twig", "home/_home.twig", 14);
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

    // line 15
    public function block_phone_call($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t<div id=\"phone-call\">
\t\t\t\t<a href=\"tel: +013337771989\">
\t\t\t\t\t<span style=\"color: #ffffff;\">
\t\t\t\t    \tTel. 01(33)3777-1989
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
    }

    // line 24
    public function block_models_header($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t";
        // line 26
        echo "\t    ";
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
        return array (  207 => 26,  205 => 25,  202 => 24,  191 => 16,  188 => 15,  170 => 14,  109 => 41,  106 => 40,  101 => 38,  96 => 36,  91 => 34,  88 => 33,  83 => 31,  80 => 30,  75 => 28,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_517314509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 31
        $this->parent = $this->loadTemplate("home/container.twig", "home/_home.twig", 31);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/container.twig";
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
        return array (  235 => 31,  207 => 26,  205 => 25,  202 => 24,  191 => 16,  188 => 15,  170 => 14,  109 => 41,  106 => 40,  101 => 38,  96 => 36,  91 => 34,  88 => 33,  83 => 31,  80 => 30,  75 => 28,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_b2f3c399226d11076cb5fbe99ff264deb0ce8564d4d466ede2c447e629fcfd5b_1020318356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 34
        $this->parent = $this->loadTemplate("super_footer.twig", "home/_home.twig", 34);
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
        return array (  275 => 34,  235 => 31,  207 => 26,  205 => 25,  202 => 24,  191 => 16,  188 => 15,  170 => 14,  109 => 41,  106 => 40,  101 => 38,  96 => 36,  91 => 34,  88 => 33,  83 => 31,  80 => 30,  75 => 28,  72 => 14,  69 => 13,  61 => 10,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section_stylessheet %}*/
/* 	<link id="home" rel="stylesheet" class="link-home" href="{{ _host }}css/sections/home.css">*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <input type="hidden" id="hidden_section" value="home">*/
/* {% endblock %}*/
/* {% block menu_patch %}    */
/* 	<div class="menu-patch" id="patch">&nbsp;</div>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/*     {% embed "super_navbar.twig" %}*/
/* 		{% block phone_call %}*/
/* 			<div id="phone-call">*/
/* 				<a href="tel: +013337771989">*/
/* 					<span style="color: #ffffff;">*/
/* 				    	Tel. 01(33)3777-1989*/
/* 					</span>*/
/* 				</a>*/
/* 			</div>*/
/* 		{% endblock %}*/
/* 		{% block models_header %}*/
/* 			{#{% embed "menus/models_menu.twig" %}{% endembed %}#}*/
/* 	    {% endblock %}*/
/*     {% endembed %}*/
/*     */
/* {% endblock %}*/
/* {% block content_current %}*/
/*     {% embed "home/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% embed "super_footer.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* {% endblock %}*/
/* {% block section_scripts %}*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	//Specifications Slider controls and functionality*/
/* 	var specifications_i = 0;*/
/* 	var specifications_total =  $('.specifications-wrapper .specification').length - 1;*/
/* 	$("body").on('click', 'a.specifications-controls', function( e ){*/
/* 	    e.preventDefault();*/
/* 	    var direction, fake_div, copy_div;*/
/* 	    $('.specifications-wrapper .fake_div').remove();*/
/* 	    if( $(this).attr('href') == '#left' ){*/
/* 	        if( specifications_i > 0 ){*/
/* 	            specifications_i--;*/
/* 	        }else{*/
/* 	            specifications_i = specifications_total ;*/
/* 	            fake_div = true;*/
/* 	            copy_div = $('#features-wrapper .specification').eq( 0).clone();*/
/* 	            copy_div.addClass('fake_div');*/
/* 	            $('#features-wrapper').append( copy_div ).css({marginLeft: ( ( specifications_i + 1 ) * -100 )+'%' }).stop().animate({marginLeft: ( specifications_i * -100) + '%' });*/
/* 	        }*/
/* 	    }else{*/
/* 	        if( specifications_i < specifications_total ){*/
/* 	            specifications_i++;*/
/* 	        }else{*/
/* 	            fake_div = true;*/
/* 	            specifications_i = 0;*/
/* 	            copy_div = $('#features-wrapper .specification').eq( specifications_i -1  ).clone();*/
/* 	            $('#features-wrapper').prepend( copy_div ).css({marginLeft: '100%' }).stop();*/
/* 	            copy_div.addClass('fake_div').css({marginLeft:"-99%", position:"absolute", width: "100%"}).stop().animate({marginLeft:'-100%'} );*/
/* 	            $('#features-wrapper').animate({marginLeft: '0'});*/
/* 	        }*/
/* 	    }*/
/* 	    if( !fake_div ){*/
/* 	        $('.specifications-wrapper .specifications').stop().animate({marginLeft: ( specifications_i * -100) + '%' });*/
/* 	    }*/
/* 	});*/
/* {% endblock %}*/
