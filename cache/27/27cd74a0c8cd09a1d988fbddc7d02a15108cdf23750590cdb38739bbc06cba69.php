<?php

/* modelos/modelo/container.twig */
class __TwigTemplate_c5f19925684a395beb7292fa1eb519d2dee277a18551c9e97f5a4e84926364ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["model"] = (isset($context["mdopa"]) ? $context["mdopa"] : null);
        // line 2
        echo "<div id=\"content-content\">
    ";
        // line 4
        echo "        ";
        $context["begin"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "inicio", array());
        // line 5
        echo "        ";
        if ((isset($context["begin"]) ? $context["begin"] : null)) {
            // line 6
            echo "            <a class=\"section-separator\" name=\"inicio\"></a>
            <div class=\"full-size-section gray-degree window-adaptable model-section\" data-min-height=\"650\">
                <div class=\"car-main \" style=\"background: url('";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "img/sections/models/main/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "image", array()), "html", null, true);
            echo "') center 175px no-repeat\">
                    <div class=\"car-main-title\">
                        <div class=\"title\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "title", array()), "html", null, true);
            echo "</div>
                        <div class=\"slogan\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "slogan", array()), "html", null, true);
            echo "</div>
                        <div class=\"price\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["begin"]) ? $context["begin"] : null), "main", array()), "price", array()), "html", null, true);
            echo "</div>
                        <div class=\"car-main-image\" id=\"car-image-";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "\">&nbsp;</div>
                    </div>
                    <div class=\"car-next-step\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "modelos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "#caracteristicas\"><span>Características</span></a></div>
                </div>
            </div>
        ";
        }
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "        ";
        $context["features"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "caracteristicas", array());
        // line 22
        echo "        ";
        if ((isset($context["features"]) ? $context["features"] : null)) {
            // line 23
            echo "            <a class=\"section-separator\" name=\"caracteristicas\"></a>
            <div id=\"model-section-features\" class=\"window-adaptable model-section special-padding-top\" data-min-height=\"750\">
                <div class=\"section-title\">
                    <div class=\"title\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["features"]) ? $context["features"] : null), "main", array()), "section_features", array()), "title", array()), "html", null, true);
            echo "</div>
                    <div class=\"description\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["features"]) ? $context["features"] : null), "main", array()), "section_features", array()), "description", array()), "html", null, true);
            echo "</div>
                </div>
                <div class=\"specifications-wrapper\">
                    <div class=\"specifications\" id=\"features-wrapper\">
                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["features"]) ? $context["features"] : null), "main", array()), "specifications", array()), "banner", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 32
                echo "                            <div class=\"specification\" style=\"background-image: url('";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/features/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "image", array()), "html", null, true);
                echo "');\">
                                <div class=\"title-wrapper\" style=\"color: #fff\">
                                    <div class=\"title\">
                                        ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "title", array()), "html", null, true);
                echo "
                                    </div>
                                </div>
                                <div class=\"description compact\">
                                    <p>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "description", array()), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"specifications-controls\">
                    <div class=\"arrows\">
                        <div class=\"arrow left\"><a class=\"specifications-controls\" href=\"#left\"><span>Left</span></a></div>
                        <div class=\"arrow right\"><a class=\"specifications-controls\" href=\"#right\"><span>Right</span></a></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <div class=\"next-link-text gallery\">
                    <a  class=\"scroll-in-site\" id=\"galeria\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "modelos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "#galeria\"><span>Visita Galería</span></a>
                </div>
            </div>
        ";
        }
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        // line 60
        echo "        ";
        $context["gallery"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "galeria", array());
        // line 61
        echo "        ";
        if ((isset($context["gallery"]) ? $context["gallery"] : null)) {
            // line 62
            echo "            <a class=\"section-separator\"  name=\"galeria\"></a>
            <div class=\"window-adaptable model-section special-padding-top\" data-min-height=\"750\">
                <div class=\"section-title\">
                    <div class=\"title\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "section_gallery", array()), "title", array()), "html", null, true);
            echo "</div>
                    <div class=\"description\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "section_gallery", array()), "description", array()), "html", null, true);
            echo "</div>
                </div>
                <div class=\"galery-grid galery-of-";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "\">
                    <div class=\"content\">
                        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "grid", array()), "boxes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["boxes_gallery"]) {
                // line 71
                echo "                            <div class=\"view view-first ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boxes_gallery"], "class", array()), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/gallery/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "/boxes/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boxes_gallery"], "image", array()), "html", null, true);
                echo "\" />
                                <div class=\"mask\">
                                    <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/gallery/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["boxes_gallery"], "mask", array()), "class", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["boxes_gallery"], "mask", array()), "href", array()), "html", null, true);
                echo "\" class=\"info gallery-box-link ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["boxes_gallery"], "mask", array()), "class", array()), "html", null, true);
                echo "\" data-link=\"\">
                                        <span>&nbsp;</span>
                                    </a>
                                </div>
                            </div>                        
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boxes_gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                    </div>
                    ";
            // line 81
            $context["exterior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "grid", array()), "fancybox", array()), "ext", array());
            // line 82
            echo "                    ";
            $context["interior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "main", array()), "grid", array()), "fancybox", array()), "int", array());
            // line 83
            echo "                    <div class=\"hidden-list\">
                        ";
            // line 84
            if ((isset($context["exterior"]) ? $context["exterior"] : null)) {
                // line 85
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["exterior"]) ? $context["exterior"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
                    // line 86
                    echo "                                <a class=\"fancybox-thumbs\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/gallery/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ext"], "group", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ext"], "href", array()), "html", null, true);
                    echo "\" data-fancybox-group=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ext"], "group", array()), "html", null, true);
                    echo "\" title=\". . .\" alt=\". . .\">
                                    <img src=\"";
                    // line 87
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/gallery/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ext"], "group", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ext"], "img", array()), "html", null, true);
                    echo "\" alt=\". . .\"/>
                                </a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                        ";
            }
            // line 91
            echo "                    </div>
                    <div class=\"hidden-list\">
                        ";
            // line 93
            if ((isset($context["interior"]) ? $context["interior"] : null)) {
                // line 94
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["interior"]) ? $context["interior"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["int"]) {
                    // line 95
                    echo "                                <a class=\"fancybox-thumbs\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/gallery/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "group", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "href", array()), "html", null, true);
                    echo "\" data-fancybox-group=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "group", array()), "html", null, true);
                    echo "\" title=\". . .\" alt=\". . .\">
                                    <img src=\"";
                    // line 96
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/gallery/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "group", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "img", array()), "html", null, true);
                    echo "\" alt=\". . .\"/>
                                </a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['int'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "                        ";
            }
            // line 100
            echo "                    </div>
                </div>
                <div class=\"next-link-text prices\" style=\"margin-top: 40px;\">
                    <a class=\"scroll-in-site\" id=\"precios\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "modelos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "#precios\"><span>Visita Versiones</span></a>
                </div>
            </div>
        ";
        }
        // line 107
        echo "    ";
        // line 108
        echo "    ";
        // line 109
        echo "        ";
        $context["prices"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "precios", array());
        // line 110
        echo "        ";
        if ((isset($context["prices"]) ? $context["prices"] : null)) {
            // line 111
            echo "            <a class=\"section-separator\"  name=\"precios\"></a>
            <div class=\"model-section special-padding-top\">
                <div class=\"section-title\">
                    <div class=\"title\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "main", array()), "section_prices", array()), "title", array()), "html", null, true);
            echo "</div>
                    <div class=\"description\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "main", array()), "section_prices", array()), "description", array()), "html", null, true);
            echo "</div>
                </div>
                <div class=\"model-prices\">
                    <span class=\"arrow-prices arrow-prices-left\">&nbsp;</span>
                    <span class=\"arrow-prices arrow-prices-right\">&nbsp;</span>
                    <div id=\"features-space-wrapper\" class=\"display-tables\" data-display-table=\"prices\">
                        <div id=\"features-space-mask\">
                            ";
            // line 122
            $context["columns"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "main", array()), "model_prices", array()), "columns", array());
            // line 123
            echo "                            ";
            $context["head"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "main", array()), "model_prices", array()), "head", array());
            // line 124
            echo "                            ";
            $context["body"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "main", array()), "model_prices", array()), "body", array());
            // line 125
            echo "                            <div id=\"features-space\">
                                <div class=\"suzuki-table cols-";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["columns"]) ? $context["columns"] : null), "html", null, true);
            echo "\" id=\"versions-price-table\">
                                    <div class=\"data-wrapper\">
                                        ";
            // line 128
            if ((isset($context["head"]) ? $context["head"] : null)) {
                // line 129
                echo "                                            <div class=\"head\">
                                                ";
                // line 130
                if (($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "row", array()) && $this->getAttribute((isset($context["head"]) ? $context["head"] : null), "col", array()))) {
                    // line 131
                    echo "                                                    <div class=\"row  row-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "row", array()), "class", array()), "html", null, true);
                    echo " cols-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "col", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        ";
                    // line 132
                    if ($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array())) {
                        // line 133
                        echo "                                                            ";
                        if ($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "first", array())) {
                            // line 134
                            echo "                                                                <div class=\"cell  col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "first", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"image\">
                                                                        <img src=\"";
                            // line 136
                            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                            echo "img/sections/models/prices/mini-models/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "first", array()), "image", array()), "html", null, true);
                            echo "\" />
                                                                    </div>
                                                                    <div class=\"title\">
                                                                        <p>";
                            // line 139
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "first", array()), "title", array()), "html", null, true);
                            echo "</p>
                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 143
                        echo "                                                            ";
                        if ($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "second", array())) {
                            // line 144
                            echo "                                                                <div class=\"cell  col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"image\">
                                                                        <img src=\"";
                            // line 146
                            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                            echo "img/sections/models/prices/mini-models/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "second", array()), "image", array()), "html", null, true);
                            echo "\" />
                                                                    </div>
                                                                    <div class=\"title\">
                                                                        <p>";
                            // line 149
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "second", array()), "title", array()), "html", null, true);
                            echo "</p>
                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 153
                        echo "                                                            ";
                        if ($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "third", array())) {
                            // line 154
                            echo "                                                                <div class=\"cell  col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"image\">
                                                                        <img src=\"";
                            // line 156
                            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                            echo "img/sections/models/prices/mini-models/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "third", array()), "image", array()), "html", null, true);
                            echo "\" />
                                                                    </div>
                                                                    <div class=\"title\">
                                                                        <p>";
                            // line 159
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "third", array()), "title", array()), "html", null, true);
                            echo "</p>
                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 163
                        echo "                                                            ";
                        if ($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "fourth", array())) {
                            // line 164
                            echo "                                                                <div class=\"cell  col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "fourth", array()), "class", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"image\">
                                                                        <img src=\"";
                            // line 166
                            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                            echo "img/sections/models/prices/mini-models/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "fourth", array()), "image", array()), "html", null, true);
                            echo "\" />
                                                                    </div>
                                                                    <div class=\"title\">
                                                                        <p>";
                            // line 169
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "cell", array()), "fourth", array()), "title", array()), "html", null, true);
                            echo "</p>
                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 173
                        echo "                                                        ";
                    }
                    // line 174
                    echo "                                                    </div>
                                                ";
                }
                // line 176
                echo "                                            </div>
                                        ";
            }
            // line 178
            echo "                                        ";
            if ((isset($context["body"]) ? $context["body"] : null)) {
                // line 179
                echo "                                            <div class=\"body\">
                                                ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["body"]) ? $context["body"] : null), "row", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                    // line 181
                    echo "                                                    <div class=\"row  row-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rows"], "class", array()), "html", null, true);
                    echo " cols-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["body"]) ? $context["body"] : null), "col", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        ";
                    // line 182
                    if ($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array())) {
                        // line 183
                        echo "                                                            ";
                        if (($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "price", array()))) {
                            // line 184
                            echo "                                                                <div class=\"cell ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "price", array()), "class", array()), "html", null, true);
                            echo " col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "class", array()), "html", null, true);
                            echo "\" style=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "height", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"title to-html\">
                                                                        ";
                            // line 186
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "title", array())) {
                                // line 187
                                echo "                                                                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "title", array()), "html", null, true);
                                echo "
                                                                        ";
                            }
                            // line 189
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "titles", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["titles"]) {
                                // line 190
                                echo "                                                                            ";
                                if ($this->getAttribute($context["titles"], "span", array())) {
                                    // line 191
                                    echo "                                                                                ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["titles"], "span", array()), "html", null, true);
                                    echo "
                                                                            ";
                                }
                                // line 193
                                echo "                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titles'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 194
                            echo "                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 197
                        echo "                                                            ";
                        if (($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "price", array()))) {
                            // line 198
                            echo "                                                                <div class=\"cell ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "price", array()), "class", array()), "html", null, true);
                            echo " col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "class", array()), "html", null, true);
                            echo "\" style=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "height", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"title to-html\">
                                                                        ";
                            // line 200
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "title", array())) {
                                // line 201
                                echo "                                                                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "title", array()), "html", null, true);
                                echo "
                                                                        ";
                            }
                            // line 203
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "titles", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["titles"]) {
                                // line 204
                                echo "                                                                            ";
                                if ($this->getAttribute($context["titles"], "span", array())) {
                                    // line 205
                                    echo "                                                                                ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["titles"], "span", array()), "html", null, true);
                                    echo "
                                                                            ";
                                }
                                // line 207
                                echo "                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titles'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 208
                            echo "                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 211
                        echo "                                                            ";
                        if (($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "price", array()))) {
                            // line 212
                            echo "                                                                <div class=\"cell ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "price", array()), "class", array()), "html", null, true);
                            echo " col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "class", array()), "html", null, true);
                            echo "\" style=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "height", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"title to-html\">
                                                                        ";
                            // line 214
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "title", array())) {
                                // line 215
                                echo "                                                                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "title", array()), "html", null, true);
                                echo "
                                                                        ";
                            }
                            // line 217
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "titles", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["titles"]) {
                                // line 218
                                echo "                                                                            ";
                                if ($this->getAttribute($context["titles"], "span", array())) {
                                    // line 219
                                    echo "                                                                                ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["titles"], "span", array()), "html", null, true);
                                    echo "
                                                                            ";
                                }
                                // line 221
                                echo "                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titles'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 222
                            echo "                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 225
                        echo "                                                            ";
                        if (($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "price", array()))) {
                            // line 226
                            echo "                                                                <div class=\"cell ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "price", array()), "class", array()), "html", null, true);
                            echo " col-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "class", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "class", array()), "html", null, true);
                            echo "\" style=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "height", array()), "html", null, true);
                            echo "\">
                                                                    <div class=\"title to-html\">
                                                                        ";
                            // line 228
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "title", array())) {
                                // line 229
                                echo "                                                                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "title", array()), "html", null, true);
                                echo "
                                                                        ";
                            }
                            // line 231
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "titles", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["titles"]) {
                                // line 232
                                echo "                                                                            ";
                                if ($this->getAttribute($context["titles"], "span", array())) {
                                    // line 233
                                    echo "                                                                                ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["titles"], "span", array()), "html", null, true);
                                    echo "
                                                                            ";
                                }
                                // line 235
                                echo "                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titles'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 236
                            echo "                                                                    </div>
                                                                </div>
                                                            ";
                        }
                        // line 239
                        echo "                                                        ";
                    }
                    // line 240
                    echo "                                                    </div>                                                
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo "                                            </div>
                                        ";
            }
            // line 244
            echo "                                        <a style='text-align: center; margin: 30px auto 0 auto; display: block' onclick=ga('send', 'event', 'Material de apoyo', 'Descarga', '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "precios", array()), "main", array()), "model_prices", array()), "event", array()), "ga", array()), "html", null, true);
            echo "' ); href=\"";
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "files/fichas/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "precios", array()), "main", array()), "model_prices", array()), "event", array()), "href", array()), "html", null, true);
            echo "\" target=\"_blank\">
                                            <span class=\"entypo\">&#128196;</span><span>Descargar ficha completa en PDF</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 251
            echo "                                ";
            // line 252
            echo "                            ";
            // line 253
            echo "                        </div>
        ";
        }
        // line 255
        echo "        ";
        $context["maintenance"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "mantenimieto", array());
        // line 256
        echo "        ";
        if ((isset($context["maintenance"]) ? $context["maintenance"] : null)) {
            // line 257
            echo "                        <a name=\"mantenimiento\" id=\"maintenance-prices\" class=\"maintenance-anchors\"></a>
                        <div class=\"maintenance-prices\">
                            <div id=\"maintenance-title\" class=\"section-title\">
                                <div class=\"title\">";
            // line 260
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "maintenance_prices", array()), "section_maintenance_prices", array()), "title", array()), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"suzuki-table cols-";
            // line 262
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "maintenance_prices", array()), "table", array()), "columns", array()), "html", null, true);
            echo "\" id=\"versions-maintenance-table\">
                                <div class=\"data-wrapper\">
                                    <div class=\"body\">
                                        ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "maintenance_prices", array()), "table", array()), "body", array()), "row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                // line 266
                echo "                                            <div class=\"row row-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rows"], "class", array()), "html", null, true);
                echo " cols-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "maintenance_prices", array()), "table", array()), "columns", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rows"], "id", array()), "html", null, true);
                echo "\">
                                                ";
                // line 267
                if ((($this->getAttribute($context["rows"], "cell", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "head_class", array())) || $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()))) {
                    // line 268
                    echo "                                                    <div class=\"cell ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "head_class", array()), "html", null, true);
                    echo " col-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "col", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        <div class=\"title\">
                                                            <p>";
                    // line 270
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "first", array()), "title", array()), "html", null, true);
                    echo "</p>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 274
                echo "                                                ";
                if ((($this->getAttribute($context["rows"], "cell", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "head_class", array())) || $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()))) {
                    // line 275
                    echo "                                                    <div class=\"cell ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "head_class", array()), "html", null, true);
                    echo " col-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "col", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        <div class=\"title\">
                                                            <p>";
                    // line 277
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "second", array()), "title", array()), "html", null, true);
                    echo "</p>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 281
                echo "                                                ";
                if ((($this->getAttribute($context["rows"], "cell", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "head_class", array())) || $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()))) {
                    // line 282
                    echo "                                                    <div class=\"cell ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "head_class", array()), "html", null, true);
                    echo " col-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "col", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        <div class=\"title\">
                                                            <p>";
                    // line 284
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "third", array()), "title", array()), "html", null, true);
                    echo "</p>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 288
                echo "                                                ";
                if ((( !$this->getAttribute($context["rows"], "cell", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "head_class", array())) || $this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()))) {
                    // line 289
                    echo "                                                    <div class=\"cell ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "head_class", array()), "html", null, true);
                    echo " col-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "col", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "class", array()), "html", null, true);
                    echo "\">
                                                        <div class=\"title\">
                                                            <p>";
                    // line 291
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rows"], "cell", array()), "fourth", array()), "title", array()), "html", null, true);
                    echo "</p>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 295
                echo "                                            </div>                                        
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                        ";
            // line 303
            echo "                        <div class=\"clearfix\"></div>
                        <br><br>
                        <p style=\"margin: 5px 0 30px; text-align: center;\">
                            <a href=\"";
            // line 306
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "financiamiento/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "key", array()), "html", null, true);
            echo "\" id=\"go-financing-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "key", array()), "html", null, true);
            echo "\" data-gama-model-key=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "key", array()), "html", null, true);
            echo "\" data-gama-model-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "html", null, true);
            echo "\" class=\"button red\">Pide tu cotización y estrena un ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "main", array()), "name", array()), "html", null, true);
            echo ".</a>
                        </p>
                        <p id=\"p-empty\">&nbsp;</p>
                        <div class=\"next-link-text accesories\" style=\"margin-top: 20px;\">
                            <a class=\"scroll-in-site\" id=\"accesorios\" href=\"";
            // line 310
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "modelos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "#accesorios\"><span>Visita Accesorios</span></a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 316
        echo "    ";
        // line 317
        echo "    ";
        // line 318
        echo "        ";
        $context["accessories"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "accesorios", array());
        // line 319
        echo "        ";
        if ((isset($context["accessories"]) ? $context["accessories"] : null)) {
            // line 320
            echo "            <a class=\"section-separator\"  name=\"accesorios\"></a>
            <div class=\"model-section special-padding-top\">
                <div class=\"section-title\">
                    <div class=\"title\">";
            // line 323
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "section_gallery", array()), "title", array()), "html", null, true);
            echo "</div>
                    <div class=\"description\">";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "section_gallery", array()), "description", array()), "html", null, true);
            echo "</div>
                </div>
                <div class=\"galery-grid galery-of-";
            // line 326
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "\" id=\"accesorios-padding\">
                    <div class=\"content\">
                        ";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "grid", array()), "boxes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["boxes_gallery"]) {
                // line 329
                echo "                            <div class=\"view view-first ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boxes_gallery"], "class", array()), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 330
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/accessories/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "/boxes/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boxes_gallery"], "image", array()), "html", null, true);
                echo "\" />
                                <div class=\"mask\">
                                    <a href=\"";
                // line 332
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/sections/models/accessories/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["boxes_gallery"], "mask", array()), "href", array()), "html", null, true);
                echo "\" class=\"info gallery-box-link ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "class", array()), "html", null, true);
                echo "\" data-link=\"\">
                                        <span>&nbsp;</span>
                                    </a>
                                </div>
                            </div>                        
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boxes_gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "                    </div>
                    ";
            // line 339
            $context["interior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "grid", array()), "fancybox", array()), "thumbs", array());
            // line 340
            echo "                    <div class=\"hidden-list\">
                        ";
            // line 341
            if ((isset($context["interior"]) ? $context["interior"] : null)) {
                // line 342
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["interior"]) ? $context["interior"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["thumb"]) {
                    // line 343
                    echo "                                <a class=\"fancybox-thumbs\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/accessories/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thumb"], "href", array()), "html", null, true);
                    echo "\" data-fancybox-group=\"accesorios\" title=\". . .\" alt=\". . .\">
                                    <img src=\"";
                    // line 344
                    echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                    echo "img/sections/models/accessories/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thumb"], "img", array()), "html", null, true);
                    echo "\" alt=\". . .\"/>
                                </a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                echo "                        ";
            }
            // line 348
            echo "                    </div>
                    ";
            // line 349
            if ($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "event", array())) {
                // line 350
                echo "                        <p style=\"margin: 5px 0 30px; text-align: center;\">
                            Pregunta en tu concesionaria por los accesorios para que personalices tu Suzuki.<br /><br />
                            <a onclick=\"ga('send', 'event', 'Material de apoyo', 'Descarga', '";
                // line 352
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "event", array()), "ga", array()), "html", null, true);
                echo "');\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "files/accesorios/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["accessories"]) ? $context["accessories"] : null), "main", array()), "event", array()), "href", array()), "html", null, true);
                echo "\" class=\"button red\" target=\"_blank\">Descargar catálogo de accesorios</a>
                        </p>
                    ";
            }
            // line 355
            echo "                    <div id=\"next-test\" class=\"next-link-text\" style=\"margin-top: 40px;\">
                        <a  class=\"scroll-in-site\" id=\"prueba-de-manejo\" href=\"";
            // line 356
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "modelos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
            echo "#prueba-de-manejo\"><span>Haz una prueba</span></a>
                    </div>
                </div>
            </div>
        ";
        }
        // line 361
        echo "    ";
        // line 362
        echo "    ";
        // line 363
        echo "        <a class=\"section-separator\"  name=\"prueba-de-manejo\"></a>
        <div id=\"instant-drive-section\"></div>
        <div id=\"text-drive-section\" class=\"model-section special-padding-top  window-adaptable\"  data-min-height=\"700\">
            <div id=\"test-drive-models\">
                <div class=\"section-title\">
                    <div class=\"title\">Agendar prueba de manejo</div>
                    <div class=\"description\">En dos sencillos pasos podrás agendar tu prueba de manejo y vivir la experiencia Suzuki.</div>
                </div>
                <div id=\"test-drive-steps\">
                    <div id=\"header-prueba-manejo-modelos\">
                        <div class=\"test-panel-tabs\">
                            <ul>
                                <li class=\"test-tabs model-test-tab active\">
                                    <a class=\"model-change-tab\" data-number=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "html", null, true);
        echo "\">
                                        ¿Cuándo quieres hacer tu prueba de manejo?
                                    </a>
                                </li>
                                <li class=\"test-tabs model-test-tab bg-button-fuinancing active\">
                                    <a class=\"model-change-tab\" id=\"go-financing-";
        // line 381
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" data-gama-model-key=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\" data-gama-model-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "html", null, true);
        echo "\">
                                        Pide tu cotización y estrena un Suzuki ";
        // line 382
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name", array()), "html", null, true);
        echo ".
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id=\"content-test-drive-section\">
                            ";
        // line 389
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"model-section\"></div>
    ";
        // line 396
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modelos/modelo/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1086 => 396,  1078 => 389,  1069 => 382,  1061 => 381,  1053 => 376,  1038 => 363,  1036 => 362,  1034 => 361,  1024 => 356,  1021 => 355,  1011 => 352,  1007 => 350,  1005 => 349,  1002 => 348,  999 => 347,  986 => 344,  977 => 343,  972 => 342,  970 => 341,  967 => 340,  965 => 339,  962 => 338,  944 => 332,  935 => 330,  930 => 329,  926 => 328,  921 => 326,  916 => 324,  912 => 323,  907 => 320,  904 => 319,  901 => 318,  899 => 317,  897 => 316,  886 => 310,  869 => 306,  864 => 303,  857 => 297,  850 => 295,  843 => 291,  833 => 289,  830 => 288,  823 => 284,  813 => 282,  810 => 281,  803 => 277,  793 => 275,  790 => 274,  783 => 270,  773 => 268,  771 => 267,  762 => 266,  758 => 265,  752 => 262,  747 => 260,  742 => 257,  739 => 256,  736 => 255,  732 => 253,  730 => 252,  728 => 251,  714 => 244,  710 => 242,  703 => 240,  700 => 239,  695 => 236,  689 => 235,  683 => 233,  680 => 232,  675 => 231,  669 => 229,  667 => 228,  655 => 226,  652 => 225,  647 => 222,  641 => 221,  635 => 219,  632 => 218,  627 => 217,  621 => 215,  619 => 214,  607 => 212,  604 => 211,  599 => 208,  593 => 207,  587 => 205,  584 => 204,  579 => 203,  573 => 201,  571 => 200,  559 => 198,  556 => 197,  551 => 194,  545 => 193,  539 => 191,  536 => 190,  531 => 189,  525 => 187,  523 => 186,  511 => 184,  508 => 183,  506 => 182,  499 => 181,  495 => 180,  492 => 179,  489 => 178,  485 => 176,  481 => 174,  478 => 173,  471 => 169,  463 => 166,  455 => 164,  452 => 163,  445 => 159,  437 => 156,  431 => 154,  428 => 153,  421 => 149,  413 => 146,  407 => 144,  404 => 143,  397 => 139,  389 => 136,  381 => 134,  378 => 133,  376 => 132,  369 => 131,  367 => 130,  364 => 129,  362 => 128,  357 => 126,  354 => 125,  351 => 124,  348 => 123,  346 => 122,  336 => 115,  332 => 114,  327 => 111,  324 => 110,  321 => 109,  319 => 108,  317 => 107,  308 => 103,  303 => 100,  300 => 99,  285 => 96,  272 => 95,  267 => 94,  265 => 93,  261 => 91,  258 => 90,  243 => 87,  230 => 86,  225 => 85,  223 => 84,  220 => 83,  217 => 82,  215 => 81,  212 => 80,  192 => 74,  183 => 72,  178 => 71,  174 => 70,  169 => 68,  164 => 66,  160 => 65,  155 => 62,  152 => 61,  149 => 60,  147 => 59,  145 => 58,  136 => 54,  123 => 43,  113 => 39,  106 => 35,  97 => 32,  93 => 31,  86 => 27,  82 => 26,  77 => 23,  74 => 22,  71 => 21,  69 => 20,  67 => 19,  58 => 15,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  34 => 8,  30 => 6,  27 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set model = mdopa %}*/
/* <div id="content-content">*/
/*     {# block home #}*/
/*         {% set begin = model.inicio %}*/
/*         {% if begin %}*/
/*             <a class="section-separator" name="inicio"></a>*/
/*             <div class="full-size-section gray-degree window-adaptable model-section" data-min-height="650">*/
/*                 <div class="car-main " style="background: url('{{ _host }}img/sections/models/main/{{ begin.main.image }}') center 175px no-repeat">*/
/*                     <div class="car-main-title">*/
/*                         <div class="title">{{ begin.main.title }}</div>*/
/*                         <div class="slogan">{{ begin.main.slogan }}</div>*/
/*                         <div class="price">{{ begin.main.price }}</div>*/
/*                         <div class="car-main-image" id="car-image-{{ model.key }}">&nbsp;</div>*/
/*                     </div>*/
/*                     <div class="car-next-step"><a href="{{ _host }}modelos/{{ model.key }}#caracteristicas"><span>Características</span></a></div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {# block home end #}*/
/*     {# block characteristics #}*/
/*         {% set features = model.caracteristicas %}*/
/*         {% if features %}*/
/*             <a class="section-separator" name="caracteristicas"></a>*/
/*             <div id="model-section-features" class="window-adaptable model-section special-padding-top" data-min-height="750">*/
/*                 <div class="section-title">*/
/*                     <div class="title">{{ features.main.section_features.title }}</div>*/
/*                     <div class="description">{{ features.main.section_features.description }}</div>*/
/*                 </div>*/
/*                 <div class="specifications-wrapper">*/
/*                     <div class="specifications" id="features-wrapper">*/
/*                         {% for banner in features.main.specifications.banner %}*/
/*                             <div class="specification" style="background-image: url('{{ _host }}img/sections/models/features/{{ banner.image }}');">*/
/*                                 <div class="title-wrapper" style="color: #fff">*/
/*                                     <div class="title">*/
/*                                         {{ banner.title }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="description compact">*/
/*                                     <p>{{ banner.description }}</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="specifications-controls">*/
/*                     <div class="arrows">*/
/*                         <div class="arrow left"><a class="specifications-controls" href="#left"><span>Left</span></a></div>*/
/*                         <div class="arrow right"><a class="specifications-controls" href="#right"><span>Right</span></a></div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="next-link-text gallery">*/
/*                     <a  class="scroll-in-site" id="galeria" href="{{ _host }}modelos/{{ model.key }}#galeria"><span>Visita Galería</span></a>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {# block characteristics end #}*/
/*     {# block gallery #}*/
/*         {% set gallery = model.galeria %}*/
/*         {% if gallery %}*/
/*             <a class="section-separator"  name="galeria"></a>*/
/*             <div class="window-adaptable model-section special-padding-top" data-min-height="750">*/
/*                 <div class="section-title">*/
/*                     <div class="title">{{ gallery.main.section_gallery.title }}</div>*/
/*                     <div class="description">{{ gallery.main.section_gallery.description }}</div>*/
/*                 </div>*/
/*                 <div class="galery-grid galery-of-{{ model.key }}">*/
/*                     <div class="content">*/
/*                         {% for boxes_gallery in gallery.main.grid.boxes %}*/
/*                             <div class="view view-first {{ boxes_gallery.class }}">*/
/*                                 <img src="{{ _host }}img/sections/models/gallery/{{ model.key }}/boxes/{{ boxes_gallery.image }}" />*/
/*                                 <div class="mask">*/
/*                                     <a href="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ boxes_gallery.mask.class }}/{{ boxes_gallery.mask.href }}" class="info gallery-box-link {{ boxes_gallery.mask.class }}" data-link="">*/
/*                                         <span>&nbsp;</span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>                        */
/*                         {% endfor %}*/
/*                     </div>*/
/*                     {% set exterior = gallery.main.grid.fancybox.ext %}*/
/*                     {% set interior = gallery.main.grid.fancybox.int %}*/
/*                     <div class="hidden-list">*/
/*                         {% if exterior %}*/
/*                             {% for ext in exterior %}*/
/*                                 <a class="fancybox-thumbs" href="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ ext.group }}/{{ ext.href }}" data-fancybox-group="{{ ext.group }}" title=". . ." alt=". . .">*/
/*                                     <img src="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ ext.group }}/{{ ext.img }}" alt=". . ."/>*/
/*                                 </a>*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="hidden-list">*/
/*                         {% if interior %}*/
/*                             {% for int in interior %}*/
/*                                 <a class="fancybox-thumbs" href="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ int.group }}/{{ int.href }}" data-fancybox-group="{{ int.group }}" title=". . ." alt=". . .">*/
/*                                     <img src="{{ _host }}img/sections/models/gallery/{{ model.key }}/{{ int.group }}/{{ int.img }}" alt=". . ."/>*/
/*                                 </a>*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="next-link-text prices" style="margin-top: 40px;">*/
/*                     <a class="scroll-in-site" id="precios" href="{{ _host }}modelos/{{ model.key }}#precios"><span>Visita Versiones</span></a>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {# block gallery end #}*/
/*     {# block prices #}*/
/*         {% set prices = model.precios %}*/
/*         {% if prices %}*/
/*             <a class="section-separator"  name="precios"></a>*/
/*             <div class="model-section special-padding-top">*/
/*                 <div class="section-title">*/
/*                     <div class="title">{{ prices.main.section_prices.title }}</div>*/
/*                     <div class="description">{{ prices.main.section_prices.description }}</div>*/
/*                 </div>*/
/*                 <div class="model-prices">*/
/*                     <span class="arrow-prices arrow-prices-left">&nbsp;</span>*/
/*                     <span class="arrow-prices arrow-prices-right">&nbsp;</span>*/
/*                     <div id="features-space-wrapper" class="display-tables" data-display-table="prices">*/
/*                         <div id="features-space-mask">*/
/*                             {% set columns = prices.main.model_prices.columns %}*/
/*                             {% set head = prices.main.model_prices.head %}*/
/*                             {% set body = prices.main.model_prices.body %}*/
/*                             <div id="features-space">*/
/*                                 <div class="suzuki-table cols-{{ columns }}" id="versions-price-table">*/
/*                                     <div class="data-wrapper">*/
/*                                         {% if head %}*/
/*                                             <div class="head">*/
/*                                                 {% if head.row and head.col %}*/
/*                                                     <div class="row  row-{{ head.row.class }} cols-{{ head.col.class }}">*/
/*                                                         {% if head.cell %}*/
/*                                                             {% if head.cell.first %}*/
/*                                                                 <div class="cell  col-{{ head.cell.class }} {{ head.cell.first.class }}">*/
/*                                                                     <div class="image">*/
/*                                                                         <img src="{{ _host }}img/sections/models/prices/mini-models/{{ head.cell.first.image }}" />*/
/*                                                                     </div>*/
/*                                                                     <div class="title">*/
/*                                                                         <p>{{ head.cell.first.title }}</p>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if head.cell.second %}*/
/*                                                                 <div class="cell  col-{{ head.cell.class }}">*/
/*                                                                     <div class="image">*/
/*                                                                         <img src="{{ _host }}img/sections/models/prices/mini-models/{{ head.cell.second.image }}" />*/
/*                                                                     </div>*/
/*                                                                     <div class="title">*/
/*                                                                         <p>{{ head.cell.second.title }}</p>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if head.cell.third %}*/
/*                                                                 <div class="cell  col-{{ head.cell.class }}">*/
/*                                                                     <div class="image">*/
/*                                                                         <img src="{{ _host }}img/sections/models/prices/mini-models/{{ head.cell.third.image }}" />*/
/*                                                                     </div>*/
/*                                                                     <div class="title">*/
/*                                                                         <p>{{ head.cell.third.title }}</p>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if head.cell.fourth %}*/
/*                                                                 <div class="cell  col-{{ head.cell.class }} {{ head.cell.fourth.class }}">*/
/*                                                                     <div class="image">*/
/*                                                                         <img src="{{ _host }}img/sections/models/prices/mini-models/{{ head.cell.fourth.image }}" />*/
/*                                                                     </div>*/
/*                                                                     <div class="title">*/
/*                                                                         <p>{{ head.cell.fourth.title }}</p>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                         {% endif %}*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                         {% if body %}*/
/*                                             <div class="body">*/
/*                                                 {% for rows in body.row %}*/
/*                                                     <div class="row  row-{{ rows.class }} cols-{{ body.col.class }}">*/
/*                                                         {% if rows.cell.first %}*/
/*                                                             {% if rows.cell.first or rows.cell.first.price %}*/
/*                                                                 <div class="cell {{ rows.cell.first.price.class }} col-{{ rows.cell.class }} {{ rows.cell.first.class }}" style="{{ rows.cell.first.height }}">*/
/*                                                                     <div class="title to-html">*/
/*                                                                         {% if rows.cell.first.title %}*/
/*                                                                             {{ rows.cell.first.title }}*/
/*                                                                         {% endif %}*/
/*                                                                         {% for titles in rows.cell.first.titles %}*/
/*                                                                             {% if titles.span %}*/
/*                                                                                 {{ titles.span }}*/
/*                                                                             {% endif %}*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if rows.cell.second or rows.cell.second.price %}*/
/*                                                                 <div class="cell {{ rows.cell.second.price.class }} col-{{ rows.cell.class }} {{ rows.cell.second.class }}" style="{{ rows.cell.second.height }}">*/
/*                                                                     <div class="title to-html">*/
/*                                                                         {% if rows.cell.second.title %}*/
/*                                                                             {{ rows.cell.second.title }}*/
/*                                                                         {% endif %}*/
/*                                                                         {% for titles in rows.cell.second.titles %}*/
/*                                                                             {% if titles.span %}*/
/*                                                                                 {{ titles.span }}*/
/*                                                                             {% endif %}*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if rows.cell.third or rows.cell.third.price %}*/
/*                                                                 <div class="cell {{ rows.cell.third.price.class }} col-{{ rows.cell.class }} {{ rows.cell.third.class }}" style="{{ rows.cell.third.height }}">*/
/*                                                                     <div class="title to-html">*/
/*                                                                         {% if rows.cell.third.title %}*/
/*                                                                             {{ rows.cell.third.title }}*/
/*                                                                         {% endif %}*/
/*                                                                         {% for titles in rows.cell.third.titles %}*/
/*                                                                             {% if titles.span %}*/
/*                                                                                 {{ titles.span }}*/
/*                                                                             {% endif %}*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                             {% if rows.cell.fourth or rows.cell.fourth.price %}*/
/*                                                                 <div class="cell {{ rows.cell.fourth.price.class }} col-{{ rows.cell.class }} {{ rows.cell.fourth.class }}" style="{{ rows.cell.fourth.height }}">*/
/*                                                                     <div class="title to-html">*/
/*                                                                         {% if rows.cell.fourth.title %}*/
/*                                                                             {{ rows.cell.fourth.title }}*/
/*                                                                         {% endif %}*/
/*                                                                         {% for titles in rows.cell.fourth.titles %}*/
/*                                                                             {% if titles.span %}*/
/*                                                                                 {{ titles.span }}*/
/*                                                                             {% endif %}*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             {% endif %}*/
/*                                                         {% endif %}*/
/*                                                     </div>                                                */
/*                                                 {% endfor %}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                         <a style='text-align: center; margin: 30px auto 0 auto; display: block' onclick=ga('send', 'event', 'Material de apoyo', 'Descarga', '{{ model.precios.main.model_prices.event.ga }}' ); href="{{ _host }}files/fichas/{{ model.precios.main.model_prices.event.href }}" target="_blank">*/
/*                                             <span class="entypo">&#128196;</span><span>Descargar ficha completa en PDF</span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             {#<div class="comparative-button-wrapper">#}*/
/*                                 {#<a class="swap-display-tables button blue" data-display-table="comparative">Comparar con otros modelos</a>#}*/
/*                             {#</div>#}*/
/*                         </div>*/
/*         {% endif %}*/
/*         {% set maintenance = model.mantenimieto %}*/
/*         {% if maintenance %}*/
/*                         <a name="mantenimiento" id="maintenance-prices" class="maintenance-anchors"></a>*/
/*                         <div class="maintenance-prices">*/
/*                             <div id="maintenance-title" class="section-title">*/
/*                                 <div class="title">{{ maintenance.main.maintenance_prices.section_maintenance_prices.title }}</div>*/
/*                             </div>*/
/*                             <div class="suzuki-table cols-{{ maintenance.main.maintenance_prices.table.columns }}" id="versions-maintenance-table">*/
/*                                 <div class="data-wrapper">*/
/*                                     <div class="body">*/
/*                                         {% for rows in maintenance.main.maintenance_prices.table.body.row %}*/
/*                                             <div class="row row-{{ rows.class }} cols-{{ maintenance.main.maintenance_prices.table.columns }}" data-id="{{ rows.id }}">*/
/*                                                 {% if rows.cell or rows.cell.first.head_class or rows.cell.first %}*/
/*                                                     <div class="cell {{ rows.cell.first.head_class }} col-{{ rows.cell.first.col }} {{ rows.cell.first.class }}">*/
/*                                                         <div class="title">*/
/*                                                             <p>{{ rows.cell.first.title }}</p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if rows.cell or rows.cell.second.head_class or rows.cell.second %}*/
/*                                                     <div class="cell {{ rows.cell.second.head_class }} col-{{ rows.cell.second.col }} {{ rows.cell.second.class }}">*/
/*                                                         <div class="title">*/
/*                                                             <p>{{ rows.cell.second.title }}</p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if rows.cell or rows.cell.third.head_class or rows.cell.third %}*/
/*                                                     <div class="cell {{ rows.cell.third.head_class }} col-{{ rows.cell.third.col }} {{ rows.cell.third.class }}">*/
/*                                                         <div class="title">*/
/*                                                             <p>{{ rows.cell.third.title }}</p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if not rows.cell or rows.cell.fourth.head_class or rows.cell.fourth %}*/
/*                                                     <div class="cell {{ rows.cell.fourth.head_class }} col-{{ rows.cell.fourth.col }} {{ rows.cell.fourth.class }}">*/
/*                                                         <div class="title">*/
/*                                                             <p>{{ rows.cell.fourth.title }}</p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             </div>                                        */
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                         {#<div class="maintenance-image" style="background: url('{{ _host }}img/sections/models/prices/big-models/{{ maintenance.main.image }}') right 80px no-repeat;">&nbsp;</div>#}*/
/*                         <div class="clearfix"></div>*/
/*                         <br><br>*/
/*                         <p style="margin: 5px 0 30px; text-align: center;">*/
/*                             <a href="{{ _host }}financiamiento/{{ maintenance.main.key }}" id="go-financing-{{ maintenance.main.key }}" data-gama-model-key="{{ maintenance.main.key }}" data-gama-model-id="{{ model.id }}" class="button red">Pide tu cotización y estrena un {{ maintenance.main.name }}.</a>*/
/*                         </p>*/
/*                         <p id="p-empty">&nbsp;</p>*/
/*                         <div class="next-link-text accesories" style="margin-top: 20px;">*/
/*                             <a class="scroll-in-site" id="accesorios" href="{{ _host }}modelos/{{ model.key }}#accesorios"><span>Visita Accesorios</span></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {# block prices end #}*/
/*     {# block accessories #}*/
/*         {% set accessories = model.accesorios %}*/
/*         {% if accessories %}*/
/*             <a class="section-separator"  name="accesorios"></a>*/
/*             <div class="model-section special-padding-top">*/
/*                 <div class="section-title">*/
/*                     <div class="title">{{ accessories.main.section_gallery.title }}</div>*/
/*                     <div class="description">{{ accessories.main.section_gallery.description }}</div>*/
/*                 </div>*/
/*                 <div class="galery-grid galery-of-{{ model.key }}" id="accesorios-padding">*/
/*                     <div class="content">*/
/*                         {% for boxes_gallery in accessories.main.grid.boxes %}*/
/*                             <div class="view view-first {{ boxes_gallery.class }}">*/
/*                                 <img src="{{ _host }}img/sections/models/accessories/{{ model.key }}/boxes/{{ boxes_gallery.image }}" />*/
/*                                 <div class="mask">*/
/*                                     <a href="{{ _host }}img/sections/models/accessories/{{ model.key }}/{{ boxes_gallery.mask.href }}" class="info gallery-box-link {{ accessories.main.class }}" data-link="">*/
/*                                         <span>&nbsp;</span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>                        */
/*                         {% endfor %}*/
/*                     </div>*/
/*                     {% set interior = accessories.main.grid.fancybox.thumbs %}*/
/*                     <div class="hidden-list">*/
/*                         {% if interior %}*/
/*                             {% for thumb in interior %}*/
/*                                 <a class="fancybox-thumbs" href="{{ _host }}img/sections/models/accessories/{{ model.key }}/{{ thumb.href }}" data-fancybox-group="accesorios" title=". . ." alt=". . .">*/
/*                                     <img src="{{ _host }}img/sections/models/accessories/{{ model.key }}/{{ thumb.img }}" alt=". . ."/>*/
/*                                 </a>*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% if accessories.main.event %}*/
/*                         <p style="margin: 5px 0 30px; text-align: center;">*/
/*                             Pregunta en tu concesionaria por los accesorios para que personalices tu Suzuki.<br /><br />*/
/*                             <a onclick="ga('send', 'event', 'Material de apoyo', 'Descarga', '{{ accessories.main.event.ga }}');" href="{{ _host }}files/accesorios/{{ accessories.main.event.href }}" class="button red" target="_blank">Descargar catálogo de accesorios</a>*/
/*                         </p>*/
/*                     {% endif %}*/
/*                     <div id="next-test" class="next-link-text" style="margin-top: 40px;">*/
/*                         <a  class="scroll-in-site" id="prueba-de-manejo" href="{{ _host }}modelos/{{ model.key }}#prueba-de-manejo"><span>Haz una prueba</span></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {# block accessories end #}*/
/*     {# block test drive #}*/
/*         <a class="section-separator"  name="prueba-de-manejo"></a>*/
/*         <div id="instant-drive-section"></div>*/
/*         <div id="text-drive-section" class="model-section special-padding-top  window-adaptable"  data-min-height="700">*/
/*             <div id="test-drive-models">*/
/*                 <div class="section-title">*/
/*                     <div class="title">Agendar prueba de manejo</div>*/
/*                     <div class="description">En dos sencillos pasos podrás agendar tu prueba de manejo y vivir la experiencia Suzuki.</div>*/
/*                 </div>*/
/*                 <div id="test-drive-steps">*/
/*                     <div id="header-prueba-manejo-modelos">*/
/*                         <div class="test-panel-tabs">*/
/*                             <ul>*/
/*                                 <li class="test-tabs model-test-tab active">*/
/*                                     <a class="model-change-tab" data-number="{{ model.id }}">*/
/*                                         ¿Cuándo quieres hacer tu prueba de manejo?*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="test-tabs model-test-tab bg-button-fuinancing active">*/
/*                                     <a class="model-change-tab" id="go-financing-{{ model.key }}" data-gama-model-key="{{ model.key }}" data-gama-model-id="{{ model.id }}">*/
/*                                         Pide tu cotización y estrena un Suzuki {{ model.name }}.*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div id="content-test-drive-section">*/
/*                             {#{% embed "modelos/modelo/testdrive_form.twig" %}{% endembed %}#}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="model-section"></div>*/
/*     {# block test drive end #}*/
/* </div>*/
/* */
