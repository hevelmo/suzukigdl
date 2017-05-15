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
            'social_bar' => array($this, 'block_social_bar'),
            'section_arrow' => array($this, 'block_section_arrow'),
            'testdrive_flag' => array($this, 'block_testdrive_flag'),
            'menu_patch' => array($this, 'block_menu_patch'),
            'current_master' => array($this, 'block_current_master'),
            'section' => array($this, 'block_section'),
            'header_wrapper' => array($this, 'block_header_wrapper'),
            'navbar' => array($this, 'block_navbar'),
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
\t<body>
        ";
        // line 111
        $this->displayBlock('social_bar', $context, $blocks);
        // line 113
        echo "        ";
        $this->displayBlock('section_arrow', $context, $blocks);
        // line 115
        echo "        ";
        $this->displayBlock('testdrive_flag', $context, $blocks);
        // line 117
        echo "        ";
        $this->displayBlock('menu_patch', $context, $blocks);
        // line 119
        echo "        ";
        $this->displayBlock('current_master', $context, $blocks);
        // line 137
        echo "
        ";
        // line 138
        $this->displayBlock('header_wrapper', $context, $blocks);
        // line 142
        echo "
        ";
        // line 144
        echo "\t    <div class=\"wrapper_content_interactive\" id='content-temporal-interactive'>
            <div id=\"content-wrapper\">
                
                ";
        // line 152
        echo "                ";
        // line 158
        echo "
                ";
        // line 160
        echo "                ";
        $this->displayBlock('content_current', $context, $blocks);
        // line 161
        echo "            </div>
        </div>
        ";
        // line 164
        echo "
        ";
        // line 165
        $this->displayBlock('footer', $context, $blocks);
        // line 167
        echo "
        ";
        // line 168
        $this->displayBlock('scroll_to_top', $context, $blocks);
        // line 170
        echo "
        ";
        // line 171
        $this->displayBlock('mobile_menu', $context, $blocks);
        // line 174
        echo "
        ";
        // line 175
        $this->displayBlock('body_scripts', $context, $blocks);
        // line 193
        echo "        <script>
            ";
        // line 194
        $this->displayBlock('load_scripts', $context, $blocks);
        // line 199
        echo "        </script>

        ";
        // line 202
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
                <meta name=\"title\" content=\"Suzuki Autos ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\">
                <meta name=\"identifier-url\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\" />
                <meta name=\"keywords\" content=\"Suzuki Autos ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo ", Ciaz, Kizashi, Grand Vitara, Nueva Vitara, Swift, Swift Sport, S-cross, Ignis\" />
                <meta name=\"author\" content=\"\" />
                <meta name=\"language\" content=\"ES\" />
                <meta name=\"copyright\" content=\"© ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["_anio"]) ? $context["_anio"] : null), "html", null, true);
        echo " Suzuki Autos ";
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\" />

                <meta name=\"robots\" content=\"index, follow\">
                <meta name=\"googlebot\" content=\"robots.txt\">

                <meta itemprop=\"image\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/logo/\">

                <meta itemprop=\"name\" content=\"Suzuki Autos ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\"/>
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
        echo "Suzuki Autos ";
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
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
    public function block_social_bar($context, array $blocks = array())
    {
        echo "                
        ";
    }

    // line 113
    public function block_section_arrow($context, array $blocks = array())
    {
        echo "            
        ";
    }

    // line 115
    public function block_testdrive_flag($context, array $blocks = array())
    {
        echo "            
        ";
    }

    // line 117
    public function block_menu_patch($context, array $blocks = array())
    {
        echo "            
        ";
    }

    // line 119
    public function block_current_master($context, array $blocks = array())
    {
        // line 120
        echo "            ";
        // line 121
        echo "            <div id='hidden-inputs-session'></div>

            ";
        // line 124
        echo "            <div id='hidden-inputs-temporal'>
                ";
        // line 125
        $this->displayBlock('section', $context, $blocks);
        // line 126
        echo "            </div>

            ";
        // line 129
        echo "            <input id=\"master-host\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\">

            ";
        // line 132
        echo "            <input id=\"master-max\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["_max"]) ? $context["_max"] : null), "html", null, true);
        echo "\">

            ";
        // line 135
        echo "            <input id=\"master-root-api\" type=\"hidden\" value=\"";
        echo "\">
        ";
    }

    // line 125
    public function block_section($context, array $blocks = array())
    {
    }

    // line 138
    public function block_header_wrapper($context, array $blocks = array())
    {
        // line 139
        echo "            ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 141
        echo "        ";
    }

    // line 139
    public function block_navbar($context, array $blocks = array())
    {
        echo "              
            ";
    }

    // line 160
    public function block_content_current($context, array $blocks = array())
    {
    }

    // line 165
    public function block_footer($context, array $blocks = array())
    {
        // line 166
        echo "        ";
    }

    // line 168
    public function block_scroll_to_top($context, array $blocks = array())
    {
        // line 169
        echo "        ";
    }

    // line 171
    public function block_mobile_menu($context, array $blocks = array())
    {
        // line 172
        echo "            ";
        $this->loadTemplate("super.twig", "super.twig", 172, "341281202")->display($context);
        // line 173
        echo "        ";
    }

    // line 175
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 176
        echo "            ";
        // line 177
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "lib/min/core.lib.min.js\"></script>

            ";
        // line 180
        echo "            <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCCqo-F2TnMAABZvfV5yTQLlWvUCJlJViU&amp;sensor=false\"></script>
            ";
        // line 184
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/main.js\"></script>
            <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/method.js\"></script>
            <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/model.js\"></script>
            <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/objects.js\"></script>
            <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/required.js\"></script>
            ";
        // line 189
        $this->displayBlock('section_scripts', $context, $blocks);
        // line 191
        echo "            
        ";
    }

    // line 189
    public function block_section_scripts($context, array $blocks = array())
    {
        echo "                
            ";
    }

    // line 194
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 195
        echo "                toHtmlMethod.toHtml();
                //hide or show the \"back to top\" link
                \$(window).scroll(scrolltotop.windowScroll());
            ";
    }

    public function getTemplateName()
    {
        return "super.twig";
    }

    public function getDebugInfo()
    {
        return array (  493 => 195,  490 => 194,  483 => 189,  478 => 191,  476 => 189,  472 => 188,  468 => 187,  464 => 186,  460 => 185,  455 => 184,  452 => 180,  446 => 177,  444 => 176,  441 => 175,  437 => 173,  434 => 172,  431 => 171,  427 => 169,  424 => 168,  420 => 166,  417 => 165,  412 => 160,  405 => 139,  401 => 141,  398 => 139,  395 => 138,  390 => 125,  384 => 135,  378 => 132,  372 => 129,  368 => 126,  366 => 125,  363 => 124,  359 => 121,  357 => 120,  354 => 119,  347 => 117,  340 => 115,  333 => 113,  326 => 111,  321 => 52,  315 => 54,  312 => 53,  310 => 52,  306 => 51,  303 => 50,  301 => 49,  298 => 48,  291 => 46,  285 => 42,  281 => 41,  277 => 40,  273 => 39,  267 => 37,  264 => 36,  260 => 44,  258 => 36,  253 => 34,  248 => 32,  243 => 30,  238 => 28,  228 => 23,  222 => 20,  218 => 19,  214 => 18,  203 => 9,  200 => 8,  175 => 202,  171 => 199,  169 => 194,  166 => 193,  164 => 175,  161 => 174,  159 => 171,  156 => 170,  154 => 168,  151 => 167,  149 => 165,  146 => 164,  142 => 161,  139 => 160,  136 => 158,  134 => 152,  129 => 144,  126 => 142,  124 => 138,  121 => 137,  118 => 119,  115 => 117,  112 => 115,  109 => 113,  107 => 111,  103 => 109,  86 => 93,  77 => 85,  65 => 74,  63 => 73,  60 => 56,  58 => 48,  53 => 46,  50 => 45,  48 => 8,  39 => 1,);
    }
}


/* super.twig */
class __TwigTemplate_25d180b82733506f5811146df8b2aac7fa053ad34fa11f7a73f6ed3112d37ccb_341281202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 172
        $this->parent = $this->loadTemplate("super_mobilemenu.twig", "super.twig", 172);
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
        return array (  519 => 172,  493 => 195,  490 => 194,  483 => 189,  478 => 191,  476 => 189,  472 => 188,  468 => 187,  464 => 186,  460 => 185,  455 => 184,  452 => 180,  446 => 177,  444 => 176,  441 => 175,  437 => 173,  434 => 172,  431 => 171,  427 => 169,  424 => 168,  420 => 166,  417 => 165,  412 => 160,  405 => 139,  401 => 141,  398 => 139,  395 => 138,  390 => 125,  384 => 135,  378 => 132,  372 => 129,  368 => 126,  366 => 125,  363 => 124,  359 => 121,  357 => 120,  354 => 119,  347 => 117,  340 => 115,  333 => 113,  326 => 111,  321 => 52,  315 => 54,  312 => 53,  310 => 52,  306 => 51,  303 => 50,  301 => 49,  298 => 48,  291 => 46,  285 => 42,  281 => 41,  277 => 40,  273 => 39,  267 => 37,  264 => 36,  260 => 44,  258 => 36,  253 => 34,  248 => 32,  243 => 30,  238 => 28,  228 => 23,  222 => 20,  218 => 19,  214 => 18,  203 => 9,  200 => 8,  175 => 202,  171 => 199,  169 => 194,  166 => 193,  164 => 175,  161 => 174,  159 => 171,  156 => 170,  154 => 168,  151 => 167,  149 => 165,  146 => 164,  142 => 161,  139 => 160,  136 => 158,  134 => 152,  129 => 144,  126 => 142,  124 => 138,  121 => 137,  118 => 119,  115 => 117,  112 => 115,  109 => 113,  107 => 111,  103 => 109,  86 => 93,  77 => 85,  65 => 74,  63 => 73,  60 => 56,  58 => 48,  53 => 46,  50 => 45,  48 => 8,  39 => 1,);
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
/*                 <meta name="title" content="Suzuki Autos {{ _loc }}">*/
/*                 <meta name="identifier-url" content="{{ _host }}" />*/
/*                 <meta name="keywords" content="Suzuki Autos {{ _loc }}, Ciaz, Kizashi, Grand Vitara, Nueva Vitara, Swift, Swift Sport, S-cross, Ignis" />*/
/*                 <meta name="author" content="" />*/
/*                 <meta name="language" content="ES" />*/
/*                 <meta name="copyright" content="© {{ _anio }} Suzuki Autos {{ _loc }}" />*/
/* */
/*                 <meta name="robots" content="index, follow">*/
/*                 <meta name="googlebot" content="robots.txt">*/
/* */
/*                 <meta itemprop="image" content="{{ _host }}img/logo/">*/
/* */
/*                 <meta itemprop="name" content="Suzuki Autos {{ _loc }}"/>*/
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
/*             <title>{% block title %}Suzuki Autos {{ _loc }}{% endblock %}</title>*/
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
/* 	<body>*/
/*         {% block social_bar %}                */
/*         {% endblock %}*/
/*         {% block section_arrow %}            */
/*         {% endblock %}*/
/*         {% block testdrive_flag %}            */
/*         {% endblock %}*/
/*         {% block menu_patch %}            */
/*         {% endblock %}*/
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
/* 	    <div class="wrapper_content_interactive" id='content-temporal-interactive'>*/
/*             <div id="content-wrapper">*/
/*                 */
/*                 {# content hidden concessionaires */
/*                 <div id="content-inputs-concessionaires">*/
/*                     <input type="hidden" id="hidden_id_concessionaire" value="0">*/
/*                 </div>*/
/*                 #}*/
/*                 {# content hidden gama model */
/*                 <div id="content-inputs-model-gama">*/
/*                     <input type="hidden" id="hidden_id_model_gama" value="0">*/
/*                     <input type="hidden" id="hidden_key_model_gama" value="">*/
/*                 </div>*/
/*                 #}*/
/* */
/*                 {# Templates's DIV #}*/
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
/*             {% block section_scripts %}                */
/*             {% endblock %}*/
/*             */
/*         {% endblock %}*/
/*         <script>*/
/*             {% block load_scripts %}*/
/*                 toHtmlMethod.toHtml();*/
/*                 //hide or show the "back to top" link*/
/*                 $(window).scroll(scrolltotop.windowScroll());*/
/*             {% endblock %}*/
/*         </script>*/
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
