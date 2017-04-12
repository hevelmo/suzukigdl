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
            'models_header' => array($this, 'block_models_header'),
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
                    ";
        // line 80
        $this->displayBlock('models_header', $context, $blocks);
        // line 82
        echo "                </div>
            </header>
            <div id=\"header-mobile\">
                <a href=\"";
        // line 85
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

    // line 80
    public function block_models_header($context, array $blocks = array())
    {
        echo "                        
                    ";
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
        return array (  159 => 80,  155 => 45,  152 => 44,  136 => 85,  131 => 82,  129 => 80,  105 => 59,  97 => 54,  87 => 46,  85 => 44,  72 => 34,  64 => 29,  56 => 24,  48 => 19,  35 => 9,  29 => 8,  21 => 2,);
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
/*                     {% block models_header %}                        */
/*                     {% endblock %}*/
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
