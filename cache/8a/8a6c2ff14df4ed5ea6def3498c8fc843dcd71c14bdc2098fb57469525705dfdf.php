<?php

/* 404/container.twig */
class __TwigTemplate_ddf1110eb53d86a2cfb591b1b0e6e698ec85160c20eb5c94c8dcf131c0173bfe extends Twig_Template
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
        echo "<div class=\"error404_wrapper\">
    <div class=\"error404_content\">
        <div class=\"left img\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/sections/error404/contorno.png\" alt=\"\"/>
        </div>
        <div class=\"left texto\">
            <h3>Página No Encontrada</h3>
            <p>
                Lo sentimos, la página buscada al parecer no existe o ha desaparecido.
                No te preocupes, puedes conocer mientras tanto todos nuestros modelos y vivir la experiencia Suzuki.
            </p>
            <div class=\"espacio\">&nbsp;</div>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\" class=\"button red\">Ir a la página de inicio</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "404/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  24 => 4,  19 => 1,);
    }
}
/* <div class="error404_wrapper">*/
/*     <div class="error404_content">*/
/*         <div class="left img">*/
/*             <img src="{{ _host }}img/sections/error404/contorno.png" alt=""/>*/
/*         </div>*/
/*         <div class="left texto">*/
/*             <h3>Página No Encontrada</h3>*/
/*             <p>*/
/*                 Lo sentimos, la página buscada al parecer no existe o ha desaparecido.*/
/*                 No te preocupes, puedes conocer mientras tanto todos nuestros modelos y vivir la experiencia Suzuki.*/
/*             </p>*/
/*             <div class="espacio">&nbsp;</div>*/
/*             <a href="{{ _host }}" class="button red">Ir a la página de inicio</a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
