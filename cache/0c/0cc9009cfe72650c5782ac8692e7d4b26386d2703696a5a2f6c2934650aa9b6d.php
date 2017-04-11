<?php

/* super_navbar.twig */
class __TwigTemplate_555cdcd741d16e4ddb4292d4f3ef17018eb00ffddebf384b7e193252e11ac4cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'phone_call' => array($this, 'block_phone_call'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<section id=\"header-wrapper\">
    <section id=\"header-content\">
        <div class=\"header-wrapper\" id=\"header-spacer\">
            <header id=\"header-zone\">
                <div id=\"logo-wrapper\">
                    <div id=\"logo\">
                        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\" title=\"Suzuki Autos Guadalajara\">
                            <span>Suzuki <sup style=\"position: relative; top: -2px;\">&copy;</sup> Guadalajara</span>
                        </a>
                    </div>
                </div>
                <div id=\"regular-header\">
                    <div class=\"content-no_wrapper\">
                        <div id=\"top-bar\">
                            <nav>
                                <ul>
                                    <li>
                                        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "grupo\" title=\"Grupo\">
                                            <span>Grupo</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "concesionarias\" title=\"Concesionarias\">
                                            <span>Concesionarias</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "catalogos\" title=\"Catalogos\">
                                            <span>Catálogos</span>
                                        </a>
                                    </li>
                                    <li class=\"last\">
                                        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "cotactanos\" title=\"Contactános\">
                                            <span>Contáctanos</span>
                                        </a>
                                    </li>
                                    <li class=\"last\">
                                        <a href=\"http://suzukigdl.com.mx/seminuevos/\" title=\"Seminuevos López Mateos\">
                                            <span>Seminuevos</span>
                                        </a>
                                    </li>
                                    <li class=\"last\">
                                        ";
        // line 44
        $this->displayBlock('phone_call', $context, $blocks);
        // line 46
        echo "                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div id=\"main-nav\">
                            <nav>
                                <ul>
                                    <li>
                                        <a id=\"header-models-button\" title=\"Modelos\">
                                        ";
        // line 58
        echo "                                            <span>Modelos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a id=\"header-financing-button\" title=\"Prueba de Manejo\">
                                        ";
        // line 66
        echo "                                            <span>Financiamiento</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a id=\"header-owners-button\" title=\"Propietarios\" class=\"owners expand-header\">
                                            <span>Mi Suzuki</span>
                                        </a>
                                    </li>
                                    <li class=\"last\">
                                        <a id=\"header-before-buy-button\" title=\"Antes de comprar\" class=\"before-buy expand-header\">
                                            <span>Comprar un Suzuki</span>
                                        </a>
                                    </li>
                                    <div class=\"clearfix\"></div>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                ";
        // line 88
        echo "                <div id=\"models-header\">
                    <div class=\"content\" id=\"content-models-header\"></div>
                </div>
            </header>
            <div id=\"header-mobile\">
                <a id=\"return-index\"><img src=\"img/template/common/header/horizontal_logo.png\" alt=\"Logo Suzuki\"></a>
                <i class=\"fa fa-bars\"></i>
            </div>
            <div id=\"header-panel\" class=\"header-panel\">
                <div id=\"header-sections-wrapper\" class=\"current-sections-wrapper\"></div>
            </div>
        </div>
    </section>
</section>
";
    }

    // line 44
    public function block_phone_call($context, array $blocks = array())
    {
        // line 45
        echo "                                        ";
    }

    public function getTemplateName()
    {
        return "super_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  138 => 44,  120 => 88,  99 => 66,  92 => 58,  81 => 46,  79 => 44,  66 => 34,  58 => 29,  50 => 24,  42 => 19,  28 => 8,  20 => 2,);
    }
}
/* {# Begin: Header #}*/
/* <section id="header-wrapper">*/
/*     <section id="header-content">*/
/*         <div class="header-wrapper" id="header-spacer">*/
/*             <header id="header-zone">*/
/*                 <div id="logo-wrapper">*/
/*                     <div id="logo">*/
/*                         <a href="{{ _host }}" title="Suzuki Autos Guadalajara">*/
/*                             <span>Suzuki <sup style="position: relative; top: -2px;">&copy;</sup> Guadalajara</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="regular-header">*/
/*                     <div class="content-no_wrapper">*/
/*                         <div id="top-bar">*/
/*                             <nav>*/
/*                                 <ul>*/
/*                                     <li>*/
/*                                         <a href="{{ _host }}grupo" title="Grupo">*/
/*                                             <span>Grupo</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ _host }}concesionarias" title="Concesionarias">*/
/*                                             <span>Concesionarias</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ _host }}catalogos" title="Catalogos">*/
/*                                             <span>Catálogos</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="last">*/
/*                                         <a href="{{ _host }}cotactanos" title="Contactános">*/
/*                                             <span>Contáctanos</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="last">*/
/*                                         <a href="http://suzukigdl.com.mx/seminuevos/" title="Seminuevos López Mateos">*/
/*                                             <span>Seminuevos</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="last">*/
/*                                         {% block phone_call %}*/
/*                                         {% endblock %}*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </nav>*/
/*                         </div>*/
/*                         <div id="main-nav">*/
/*                             <nav>*/
/*                                 <ul>*/
/*                                     <li>*/
/*                                         <a id="header-models-button" title="Modelos">*/
/*                                         {#*/
/*                                         <a id="header-models-button" title="Modelos" class="model expand-header">*/
/*                                         #}*/
/*                                             <span>Modelos</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a id="header-financing-button" title="Prueba de Manejo">*/
/*                                         {#*/
/*                                         <a id="header-financing-button" title="Financiamiento" class="financing expand-header">*/
/*                                         #}*/
/*                                             <span>Financiamiento</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a id="header-owners-button" title="Propietarios" class="owners expand-header">*/
/*                                             <span>Mi Suzuki</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="last">*/
/*                                         <a id="header-before-buy-button" title="Antes de comprar" class="before-buy expand-header">*/
/*                                             <span>Comprar un Suzuki</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <div class="clearfix"></div>*/
/*                                 </ul>*/
/*                             </nav>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {#*/
/*                 <div id="content-section-models-header"></div>*/
/*                 #}*/
/*                 <div id="models-header">*/
/*                     <div class="content" id="content-models-header"></div>*/
/*                 </div>*/
/*             </header>*/
/*             <div id="header-mobile">*/
/*                 <a id="return-index"><img src="img/template/common/header/horizontal_logo.png" alt="Logo Suzuki"></a>*/
/*                 <i class="fa fa-bars"></i>*/
/*             </div>*/
/*             <div id="header-panel" class="header-panel">*/
/*                 <div id="header-sections-wrapper" class="current-sections-wrapper"></div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* </section>*/
/* {# End: Header #}*/
