<?php

/* super.twig */
class __TwigTemplate_25d180b82733506f5811146df8b2aac7fa053ad34fa11f7a73f6ed3112d37ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'facebook_tag' => array($this, 'block_facebook_tag'),
            'title' => array($this, 'block_title'),
            'links' => array($this, 'block_links'),
            'section_stylessheet' => array($this, 'block_section_stylessheet'),
            'current_master' => array($this, 'block_current_master'),
            'section' => array($this, 'block_section'),
            'header_wrapper' => array($this, 'block_header_wrapper'),
            'navbar' => array($this, 'block_navbar'),
            'social_bar' => array($this, 'block_social_bar'),
            'content_current' => array($this, 'block_content_current'),
            'footer' => array($this, 'block_footer'),
            'scroll_to_top' => array($this, 'block_scroll_to_top'),
            'mobile_menu' => array($this, 'block_mobile_menu'),
            'body_scripts' => array($this, 'block_body_scripts'),
            'section_scripts' => array($this, 'block_section_scripts'),
            'load_scripts' => array($this, 'block_load_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang=\"es-MX\" class=\"no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html lang=\"es-MX\" class=\"no-js lt-ie10 lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html lang=\"es-MX\" class=\"no-js lt-ie10 lt-ie9\"> <![endif]-->
<!--[if IE 9]>         <html lang=\"es-MX\" class=\"no-js lt-ie10\"> <![endif]-->
    <html class=\"no-js\" lang=\"es\">
        <head>
            ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "
            <title>";
        // line 46
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

            ";
        // line 48
        $this->displayBlock('links', $context, $blocks);
        // line 56
        echo "
            ";
        // line 73
        echo "            ";
        // line 74
        echo "            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-56368711-1', 'auto');
                ga('send', 'pageview');

            </script>
            ";
        // line 85
        echo "            <script type='text/javascript'>
                function trackOutboundLink( url ) {
                    ga('send', 'event', 'outbound', 'click', url, {'hitCallback': function () { document.location = url; } });
                }
                //Usage :
                //<a href=\"http://www.example.com\" onclick=”trackOutboundLink(‘http://www.example.com’); return false;\">Check out example.com</a>
            </script>
            ";
        // line 93
        echo "            <script>
                !function(f,b,e,v,n,t,s)
                {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window,document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '388345931302119'); 
                fbq('track', 'PageView');
            </script>
            <noscript>
                <img height=\"1\" width=\"1\" src=\"https://www.facebook.com/tr?id=388345931302119&ev=PageView &noscript=1\"/>
            </noscript>
            ";
        // line 109
        echo "\t</head>
\t<body id=\"recurrent-body\">
        ";
        // line 111
        $this->displayBlock('current_master', $context, $blocks);
        // line 129
        echo "
        ";
        // line 130
        $this->displayBlock('header_wrapper', $context, $blocks);
        // line 134
        echo "
        ";
        // line 136
        echo "        <div id=\"content-wrapper\">            
            ";
        // line 137
        $this->displayBlock('social_bar', $context, $blocks);
        // line 139
        echo "
            ";
        // line 145
        echo "            ";
        // line 151
        echo "
\t\t    ";
        // line 153
        echo "\t\t    <div class=\"wrapper_content_interactive\" id='content-temporal-interactive'>
                ";
        // line 154
        $this->displayBlock('content_current', $context, $blocks);
        // line 155
        echo "            </div>
        </div>
        ";
        // line 158
        echo "
        ";
        // line 159
        $this->displayBlock('footer', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $this->displayBlock('scroll_to_top', $context, $blocks);
        // line 164
        echo "
        ";
        // line 165
        $this->displayBlock('mobile_menu', $context, $blocks);
        // line 168
        echo "
        ";
        // line 169
        $this->displayBlock('body_scripts', $context, $blocks);
        // line 186
        echo "        <script>";
        $this->displayBlock('load_scripts', $context, $blocks);
        echo "</script>

        ";
        // line 189
        echo "        <script type=\"text/javascript\">
            /* <![CDATA[ */
                var google_conversion_id = 956352007;
                var google_custom_params = window.google_tag_params;
                var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type=\"text/javascript\" src=\"//www.googleadservices.com/pagead/conversion.js\">
        </script>
        <noscript>
            <div style=\"display:inline;\">
                <img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"//googleads.g.doubleclick.net/pagead/viewthroughconversion/956352007/?value=0&amp;guid=ON&amp;script=0\"/>
            </div>
        </noscript>
        <style>
            iframe[name=\"google_conversion_frame\"] {
                display: none;
            }
        </style>
\t</body>
</html>
";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
                <meta http-equiv=\"pragma\" content=\"no-cache\" />
                <meta http-equiv=\"cache-control\" value=\"no-cache, no-store, must-revalidate\" />
                <meta http-equiv=\"expires\" content=\"0\">
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                <meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />
                
                <meta charset=\"UTF-8\">
                <meta name=\"title\" content=\"Suzuki Autos Guadalajara\">
                <meta name=\"identifier-url\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\" />
                <meta name=\"keywords\" content=\"Suzuki guadalajara, Ciaz, Kizashi, Grand Vitara, Nueva Vitara, Swift, Swift Sport, S-cross, Ignis\" />
                <meta name=\"author\" content=\"\" />
                <meta name=\"language\" content=\"ES\" />
                <meta name=\"copyright\" content=\"© ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["_anio"]) ? $context["_anio"] : null), "html", null, true);
        echo " Suzuki Autos Guadalajara\" />

                <meta name=\"robots\" content=\"index, follow\">
                <meta name=\"googlebot\" content=\"robots.txt\">

                <meta itemprop=\"image\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/logo/\">

                <meta itemprop=\"name\" content=\"Suzuki Autos Guadalajara\"/>
                <meta itemprop=\"description\" content=\"Experimenta el estilo de vida Suzuki.\"/>
                <meta itemprop=\"image\" content=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/template/common/header/horizontal_logo.png\"/>

                <meta property=\"business:contact_data:website\" content=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\"/>

                ";
        // line 36
        $this->displayBlock('facebook_tag', $context, $blocks);
        // line 44
        echo "            ";
    }

    // line 36
    public function block_facebook_tag($context, array $blocks = array())
    {
        // line 37
        echo "                    <meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, (isset($context["tag_name_default"]) ? $context["tag_name_default"] : null), "html", null, true);
        echo "\" />
                    <meta property=\"og:type\" content=\"website\" />
                    <meta property=\"og:image:type\" content=\" ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["tag_content_type"]) ? $context["tag_content_type"] : null), "html", null, true);
        echo "\" />
                    <meta property=\"og:image\" content=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["tag_image_default"]) ? $context["tag_image_default"] : null), "html", null, true);
        echo "\" />
                    <meta property=\"og:description\" content=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["tag_description"]) ? $context["tag_description"] : null), "html", null, true);
        echo "\"/>
                    <meta property=\"og:site_name\" content=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["tag_site_name"]) ? $context["tag_site_name"] : null), "html", null, true);
        echo "\" />
                ";
    }

    // line 46
    public function block_title($context, array $blocks = array())
    {
        echo "Suzuki Autos Guadalajara";
    }

    // line 48
    public function block_links($context, array $blocks = array())
    {
        // line 49
        echo "        \t\t";
        // line 50
        echo "                <link type=\"text/css\" rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700,900\" />
                <link id=\"main\" rel=\"stylesheet\" class=\"link-main\"  rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/styles.css\">
                ";
        // line 52
        $this->displayBlock('section_stylessheet', $context, $blocks);
        // line 53
        echo "
                <link rel=\"shortcut icon\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/favicon.ico\">             
            ";
    }

    // line 52
    public function block_section_stylessheet($context, array $blocks = array())
    {
    }

    // line 111
    public function block_current_master($context, array $blocks = array())
    {
        // line 112
        echo "            ";
        // line 113
        echo "            <div id='hidden-inputs-session'></div>

            ";
        // line 116
        echo "            <div id='hidden-inputs-temporal'>
                ";
        // line 117
        $this->displayBlock('section', $context, $blocks);
        // line 118
        echo "            </div>

            ";
        // line 121
        echo "            <input id=\"master-host\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\">

            ";
        // line 124
        echo "            <input id=\"master-max\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["_max"]) ? $context["_max"] : null), "html", null, true);
        echo "\">

            ";
        // line 127
        echo "            <input id=\"master-root-api\" type=\"hidden\" value=\"";
        echo "\">
        ";
    }

    // line 117
    public function block_section($context, array $blocks = array())
    {
    }

    // line 130
    public function block_header_wrapper($context, array $blocks = array())
    {
        // line 131
        echo "            ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 133
        echo "        ";
    }

    // line 131
    public function block_navbar($context, array $blocks = array())
    {
        echo "              
            ";
    }

    // line 137
    public function block_social_bar($context, array $blocks = array())
    {
        echo "                
            ";
    }

    // line 154
    public function block_content_current($context, array $blocks = array())
    {
    }

    // line 159
    public function block_footer($context, array $blocks = array())
    {
        // line 160
        echo "        ";
    }

    // line 162
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 163
        echo "        ";
    }

    // line 165
    public function block_mobile_menu($context, array $blocks = array())
    {
        // line 166
        echo "            ";
        $this->loadTemplate("super.twig", "super.twig", 166, "931050635")->display($context);
        // line 167
        echo "        ";
    }

    // line 169
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 170
        echo "            ";
        // line 171
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "lib/min/core.lib.min.js\"></script>
            ";
        // line 172
        $this->displayBlock('section_scripts', $context, $blocks);
        // line 174
        echo "
            ";
        // line 176
        echo "            <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCCqo-F2TnMAABZvfV5yTQLlWvUCJlJViU&amp;sensor=false\"></script>
            ";
        // line 180
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/main.js\"></script>
            <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/method.js\"></script>
            <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/model.js\"></script>
            <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/objects.js\"></script>
            <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/required.js\"></script>
        ";
    }

    // line 172
    public function block_section_scripts($context, array $blocks = array())
    {
        echo "                
            ";
    }

    // line 186
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "super.twig";
    }

    public function getDebugInfo()
    {
        return array (  443 => 186,  436 => 172,  430 => 184,  426 => 183,  422 => 182,  418 => 181,  413 => 180,  410 => 176,  407 => 174,  405 => 172,  400 => 171,  398 => 170,  395 => 169,  391 => 167,  388 => 166,  385 => 165,  381 => 163,  378 => 162,  374 => 160,  371 => 159,  366 => 154,  359 => 137,  352 => 131,  348 => 133,  345 => 131,  342 => 130,  337 => 117,  331 => 127,  325 => 124,  319 => 121,  315 => 118,  313 => 117,  310 => 116,  306 => 113,  304 => 112,  301 => 111,  296 => 52,  290 => 54,  287 => 53,  285 => 52,  281 => 51,  278 => 50,  276 => 49,  273 => 48,  267 => 46,  261 => 42,  257 => 41,  253 => 40,  249 => 39,  243 => 37,  240 => 36,  236 => 44,  234 => 36,  229 => 34,  224 => 32,  217 => 28,  209 => 23,  202 => 19,  190 => 9,  187 => 8,  162 => 189,  156 => 186,  154 => 169,  151 => 168,  149 => 165,  146 => 164,  144 => 162,  141 => 161,  139 => 159,  136 => 158,  132 => 155,  130 => 154,  127 => 153,  124 => 151,  122 => 145,  119 => 139,  117 => 137,  114 => 136,  111 => 134,  109 => 130,  106 => 129,  104 => 111,  100 => 109,  83 => 93,  74 => 85,  62 => 74,  60 => 73,  57 => 56,  55 => 48,  50 => 46,  47 => 45,  45 => 8,  36 => 1,);
    }
}


/* super.twig */
class __TwigTemplate_25d180b82733506f5811146df8b2aac7fa053ad34fa11f7a73f6ed3112d37ccb_931050635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 166
        $this->parent = $this->loadTemplate("super_mobilemenu.twig", "super.twig", 166);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_mobilemenu.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "super.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 166,  443 => 186,  436 => 172,  430 => 184,  426 => 183,  422 => 182,  418 => 181,  413 => 180,  410 => 176,  407 => 174,  405 => 172,  400 => 171,  398 => 170,  395 => 169,  391 => 167,  388 => 166,  385 => 165,  381 => 163,  378 => 162,  374 => 160,  371 => 159,  366 => 154,  359 => 137,  352 => 131,  348 => 133,  345 => 131,  342 => 130,  337 => 117,  331 => 127,  325 => 124,  319 => 121,  315 => 118,  313 => 117,  310 => 116,  306 => 113,  304 => 112,  301 => 111,  296 => 52,  290 => 54,  287 => 53,  285 => 52,  281 => 51,  278 => 50,  276 => 49,  273 => 48,  267 => 46,  261 => 42,  257 => 41,  253 => 40,  249 => 39,  243 => 37,  240 => 36,  236 => 44,  234 => 36,  229 => 34,  224 => 32,  217 => 28,  209 => 23,  202 => 19,  190 => 9,  187 => 8,  162 => 189,  156 => 186,  154 => 169,  151 => 168,  149 => 165,  146 => 164,  144 => 162,  141 => 161,  139 => 159,  136 => 158,  132 => 155,  130 => 154,  127 => 153,  124 => 151,  122 => 145,  119 => 139,  117 => 137,  114 => 136,  111 => 134,  109 => 130,  106 => 129,  104 => 111,  100 => 109,  83 => 93,  74 => 85,  62 => 74,  60 => 73,  57 => 56,  55 => 48,  50 => 46,  47 => 45,  45 => 8,  36 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html lang="es-MX" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html lang="es-MX" class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html lang="es-MX" class="no-js lt-ie10 lt-ie9"> <![endif]-->*/
/* <!--[if IE 9]>         <html lang="es-MX" class="no-js lt-ie10"> <![endif]-->*/
/*     <html class="no-js" lang="es">*/
/*         <head>*/
/*             {% block head %}*/
/*                 <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />*/
/*                 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*                 <meta http-equiv="pragma" content="no-cache" />*/
/*                 <meta http-equiv="cache-control" value="no-cache, no-store, must-revalidate" />*/
/*                 <meta http-equiv="expires" content="0">*/
/*                 <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>*/
/*                 <meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />*/
/*                 */
/*                 <meta charset="UTF-8">*/
/*                 <meta name="title" content="Suzuki Autos Guadalajara">*/
/*                 <meta name="identifier-url" content="{{ _host }}" />*/
/*                 <meta name="keywords" content="Suzuki guadalajara, Ciaz, Kizashi, Grand Vitara, Nueva Vitara, Swift, Swift Sport, S-cross, Ignis" />*/
/*                 <meta name="author" content="" />*/
/*                 <meta name="language" content="ES" />*/
/*                 <meta name="copyright" content="© {{ _anio }} Suzuki Autos Guadalajara" />*/
/* */
/*                 <meta name="robots" content="index, follow">*/
/*                 <meta name="googlebot" content="robots.txt">*/
/* */
/*                 <meta itemprop="image" content="{{ _host }}img/logo/">*/
/* */
/*                 <meta itemprop="name" content="Suzuki Autos Guadalajara"/>*/
/*                 <meta itemprop="description" content="Experimenta el estilo de vida Suzuki."/>*/
/*                 <meta itemprop="image" content="{{ _host }}img/template/common/header/horizontal_logo.png"/>*/
/* */
/*                 <meta property="business:contact_data:website" content="{{ _host }}"/>*/
/* */
/*                 {% block facebook_tag %}*/
/*                     <meta property="og:title" content="{{ tag_name_default }}" />*/
/*                     <meta property="og:type" content="website" />*/
/*                     <meta property="og:image:type" content=" {{ tag_content_type }}" />*/
/*                     <meta property="og:image" content="{{ tag_image_default }}" />*/
/*                     <meta property="og:description" content="{{ tag_description }}"/>*/
/*                     <meta property="og:site_name" content="{{ tag_site_name }}" />*/
/*                 {% endblock %}*/
/*             {% endblock %}*/
/* */
/*             <title>{% block title %}Suzuki Autos Guadalajara{% endblock %}</title>*/
/* */
/*             {% block links %}*/
/*         		{# stylesheet #}*/
/*                 <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" />*/
/*                 <link id="main" rel="stylesheet" class="link-main"  rel="stylesheet" href="{{ _host }}css/styles.css">*/
/*                 {% block section_stylessheet %}{% endblock %}*/
/* */
/*                 <link rel="shortcut icon" href="{{ _host }}img/favicon.ico">             */
/*             {% endblock %}*/
/* */
/*             {#*/
/*             <!--[if IE]>*/
/*             <link type="text/css" rel="stylesheet" href="/css/suzuki/iefix.css" />*/
/*             <![endif]-->*/
/*             <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*             <![endif]-->*/
/*             <!-- Google Analytics -->*/
/*             <!--[if gte IE 9]*/
/*             <style type="text/css">*/
/*                 .gradient {*/
/*                     filter: none;*/
/*                 }*/
/*             </style>*/
/*             <![endif]-->*/
/*             #}*/
/*             {# Google Analytics #}*/
/*             <script>*/
/*                 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*                     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*                         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*                 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*                 ga('create', 'UA-56368711-1', 'auto');*/
/*                 ga('send', 'pageview');*/
/* */
/*             </script>*/
/*             {# End Google Analytics #}*/
/*             <script type='text/javascript'>*/
/*                 function trackOutboundLink( url ) {*/
/*                     ga('send', 'event', 'outbound', 'click', url, {'hitCallback': function () { document.location = url; } });*/
/*                 }*/
/*                 //Usage :*/
/*                 //<a href="http://www.example.com" onclick=”trackOutboundLink(‘http://www.example.com’); return false;">Check out example.com</a>*/
/*             </script>*/
/*             {# Facebook Pixel Code #}*/
/*             <script>*/
/*                 !function(f,b,e,v,n,t,s)*/
/*                 {if(f.fbq)return;n=f.fbq=function(){n.callMethod?*/
/*                 n.callMethod.apply(n,arguments):n.queue.push(arguments)};*/
/*                 if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';*/
/*                 n.queue=[];t=b.createElement(e);t.async=!0;*/
/*                 t.src=v;s=b.getElementsByTagName(e)[0];*/
/*                 s.parentNode.insertBefore(t,s)}(window,document,'script',*/
/*                 'https://connect.facebook.net/en_US/fbevents.js');*/
/*                 fbq('init', '388345931302119'); */
/*                 fbq('track', 'PageView');*/
/*             </script>*/
/*             <noscript>*/
/*                 <img height="1" width="1" src="https://www.facebook.com/tr?id=388345931302119&ev=PageView &noscript=1"/>*/
/*             </noscript>*/
/*             {# End Facebook Pixel Code #}*/
/* 	</head>*/
/* 	<body id="recurrent-body">*/
/*         {% block current_master %}*/
/*             {# Auxiliar Temporal Inputs's DIV #}*/
/*             <div id='hidden-inputs-session'></div>*/
/* */
/*             {# Auxiliar Temporal Inputs's DIV #}*/
/*             <div id='hidden-inputs-temporal'>*/
/*                 {% block section %}{% endblock %}*/
/*             </div>*/
/* */
/*             {# Auxiliar Master Host #}*/
/*             <input id="master-host" type="hidden" value="{{ _host }}">*/
/* */
/*             {# Auxiliar Master Max Leads #}*/
/*             <input id="master-max" type="hidden" value="{{ _max }}">*/
/* */
/*             {# Auxiliar Master Root Api #}*/
/*             <input id="master-root-api" type="hidden" value="{#{{ _rootapi }}#}">*/
/*         {% endblock %}*/
/* */
/*         {% block header_wrapper %}*/
/*             {% block navbar %}              */
/*             {% endblock %}*/
/*         {% endblock %}*/
/* */
/*         {# Begin: Content #}*/
/*         <div id="content-wrapper">            */
/*             {% block social_bar %}                */
/*             {% endblock %}*/
/* */
/*             {# content hidden concessionaires */
/*             <div id="content-inputs-concessionaires">*/
/*                 <input type="hidden" id="hidden_id_concessionaire" value="0">*/
/*             </div>*/
/*             #}*/
/*             {# content hidden gama model */
/*             <div id="content-inputs-model-gama">*/
/*                 <input type="hidden" id="hidden_id_model_gama" value="0">*/
/*                 <input type="hidden" id="hidden_key_model_gama" value="">*/
/*             </div>*/
/*             #}*/
/* */
/* 		    {# Templates's DIV #}*/
/* 		    <div class="wrapper_content_interactive" id='content-temporal-interactive'>*/
/*                 {% block content_current %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         {# End: Content #}*/
/* */
/*         {% block footer %}*/
/*         {% endblock %}*/
/* */
/*         {% block scroll_to_top %}*/
/*         {% endblock %}*/
/* */
/*         {% block mobile_menu %}*/
/*             {% embed "super_mobilemenu.twig" %}{% endembed %}*/
/*         {% endblock %}*/
/* */
/*         {% block body_scripts %}*/
/*             {# CORE LIBS #}*/
/*             <script src="{{ _host }}lib/min/core.lib.min.js"></script>*/
/*             {% block section_scripts %}                */
/*             {% endblock %}*/
/* */
/*             {# GOOGLE API #}*/
/*             <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCqo-F2TnMAABZvfV5yTQLlWvUCJlJViU&amp;sensor=false"></script>*/
/*             {#*/
/*             <script src="{{ _host }}js/min/core.min.js"></script>*/
/*             #}*/
/*             <script src="{{ _host }}js/main.js"></script>*/
/*             <script src="{{ _host }}js/method.js"></script>*/
/*             <script src="{{ _host }}js/model.js"></script>*/
/*             <script src="{{ _host }}js/objects.js"></script>*/
/*             <script src="{{ _host }}js/required.js"></script>*/
/*         {% endblock %}*/
/*         <script>{% block load_scripts %}{% endblock %}</script>*/
/* */
/*         {# GOOGLE CODE PARA ETIQUETAS DE REMARKETING #}*/
/*         <script type="text/javascript">*/
/*             /* <![CDATA[ *//* */
/*                 var google_conversion_id = 956352007;*/
/*                 var google_custom_params = window.google_tag_params;*/
/*                 var google_remarketing_only = true;*/
/*             /* ]]> *//* */
/*         </script>*/
/*         <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">*/
/*         </script>*/
/*         <noscript>*/
/*             <div style="display:inline;">*/
/*                 <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/956352007/?value=0&amp;guid=ON&amp;script=0"/>*/
/*             </div>*/
/*         </noscript>*/
/*         <style>*/
/*             iframe[name="google_conversion_frame"] {*/
/*                 display: none;*/
/*             }*/
/*         </style>*/
/* 	</body>*/
/* </html>*/
/* */
