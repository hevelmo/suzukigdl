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
        echo "\" title=\"Suzuki Autos ";
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\">
                            <span>Suzuki <sup style=\"position: relative; top: -2px;\">&copy;</sup> ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "</span>
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
        echo "contactanos\" title=\"Contactános\">
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
                                        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "modelos\" title=\"Modelos\">
                                            <span>Modelos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "financiamiento\" title=\"Financiamiento\">
                                            <span>Financiamiento</span>
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
                <div id=\"models-header\">
                    <div class=\"content\" id=\"content-models-header\">
                        <ul class=\"models-menu\">
                            <li class=\"first\"><a id=\"change-model\" class=\"scroll-in-site top\" href=\"#top\"></a></li>
                            <li class=\"features current\"><a class=\"scroll-in-site\" id=\"caracteristicas\" href=\"#caracteristicas\">Características</a></li>
                            <li class=\"gallery\"><a class=\"scroll-in-site\" id=\"galeria\" href=\"#galeria\">Galería</a></li>
                            <li class=\"prices\"><a class=\"scroll-in-site\" id=\"precios\" href=\"#precios\">Versiones y precios</a></li>
                            <li class=\"accessories\"><a class=\"scroll-in-site\" id=\"accesorios\" href=\"#accesorios\">Accesorios</a></li>
                            <!--<li class=\"cotízalo\"><a class=\"scroll-in-site\" id=\"cotizalo\" href=\"#cotizalo\">Cotízalo</a></li>-->
                            <li class=\"top\" id=\"back-to-top-button\"><a class=\"scroll-in-site\" id=\"top\" href=\"#top\"><span>Top</span></a></li>
                            <li class=\"clearfix\"></li>
                        </ul>
                    </div>
                </div>
            </header>
            <div id=\"header-mobile\">
                <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/template/common/header/horizontal_logo.png\" alt=\"Logo Suzuki\"></a>
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
        return array (  162 => 45,  159 => 44,  143 => 95,  104 => 59,  96 => 54,  86 => 46,  84 => 44,  71 => 34,  63 => 29,  55 => 24,  47 => 19,  34 => 9,  28 => 8,  20 => 2,);
    }
}
/* {# Begin: Header #}*/
/* <section id="header-wrapper">*/
/*     <section id="header-content">*/
/*         <div class="header-wrapper" id="header-spacer">*/
/*             <header id="header-zone">*/
/*                 <div id="logo-wrapper">*/
/*                     <div id="logo">*/
/*                         <a href="{{ _host }}" title="Suzuki Autos {{ _loc }}">*/
/*                             <span>Suzuki <sup style="position: relative; top: -2px;">&copy;</sup> {{ _loc }}</span>*/
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
/*                                         <a href="{{ _host }}contactanos" title="Contactános">*/
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
/*                                         <a href="{{ _host }}modelos" title="Modelos">*/
/*                                             <span>Modelos</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ _host }}financiamiento" title="Financiamiento">*/
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
/*                 <div id="models-header">*/
/*                     <div class="content" id="content-models-header">*/
/*                         <ul class="models-menu">*/
/*                             <li class="first"><a id="change-model" class="scroll-in-site top" href="#top"></a></li>*/
/*                             <li class="features current"><a class="scroll-in-site" id="caracteristicas" href="#caracteristicas">Características</a></li>*/
/*                             <li class="gallery"><a class="scroll-in-site" id="galeria" href="#galeria">Galería</a></li>*/
/*                             <li class="prices"><a class="scroll-in-site" id="precios" href="#precios">Versiones y precios</a></li>*/
/*                             <li class="accessories"><a class="scroll-in-site" id="accesorios" href="#accesorios">Accesorios</a></li>*/
/*                             <!--<li class="cotízalo"><a class="scroll-in-site" id="cotizalo" href="#cotizalo">Cotízalo</a></li>-->*/
/*                             <li class="top" id="back-to-top-button"><a class="scroll-in-site" id="top" href="#top"><span>Top</span></a></li>*/
/*                             <li class="clearfix"></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*             <div id="header-mobile">*/
/*                 <a href="{{ _host }}"><img src="{{ _host }}img/template/common/header/horizontal_logo.png" alt="Logo Suzuki"></a>*/
/*                 <i class="fa fa-bars"></i>*/
/*             </div>*/
/*             <div id="header-panel" class="header-panel">*/
/*                 <div id="header-sections-wrapper" class="current-sections-wrapper"></div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* </section>*/
/* {# End: Header #}*/
