<?php

/* financiamiento/modelo/form_financing.twig */
class __TwigTemplate_0f219cb0a675e40e27a222a4d1e740dfbfeb75256c314b579199b01f6b7fad92 extends Twig_Template
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
        echo "<form id=\"financing\">
    <p>Nos gustaría enviarte una cotización por correo electrónico</p>
    ";
        // line 4
        echo "    <div class=\"financing_elements\">
        <div class=\"financing_element a\">
            <fieldset>
                <label for=\"suk_agn\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Selecciona concesionaria
                </label>
                <div class=\"select\">
                    <select id=\"suk_agn\" name=\"agencia\" class=\"validate-required\" data-validation-data=\"required|free\" style=\"width: 100%;\">
                        <option label=\"Selecccionar Concesionaria...\" value=\"\">Selecciona Concesionaria</option>
                        <option data-max-id=\"12\" label=\"Suzuki López Mateos\" value=\"Suzuki López Mateos\">Suzuki López Mateos</option>
                        <option data-max-id=\"54\" label=\"Suzuki Vallarta\" value=\"Suzuki Vallarta\">Suzuki Vallarta</option>
                    </select>
                </div>
                <p class=\"invalid-message\" id=\"error_agencia\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"financing_element b\">
            <fieldset>
                <label for=\"suk_name\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Nombre
                </label>
                <input type=\"text\" id=\"suk_name\" name=\"nombre\" class=\"validate-required\" placeholder=\"Nombre\" data-validation-data=\"required|name\">
                <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"financing_elements\">
        <div class=\"financing_element a\">
            <fieldset>
                <label for=\"suk_lastname\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Apellido
                </label>
                <input type=\"text\" id=\"suk_lastname\" name=\"apellido\" class=\"validate-required\" placeholder=\"Apellidos\" data-validation-data=\"required|name\">
                <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"financing_element b\">
            <fieldset>
                <label for=\"suk_email\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Correo electrónico
                </label>
                <input type=\"text\" id=\"suk_email\" name=\"correo\" class=\"validate-required\" placeholder=\"Correo electrónico\" data-validation-data=\"required|email\">
                <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"financing_elements\">
        <div class=\"financing_element a\">
            <fieldset>
                <label for=\"suk_phone\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Número de celular
                </label>
                <input type=\"text\" id=\"suk_phone\" name=\"telefono\" class=\"validate-required\" placeholder=\"Número de celular\" data-validation-data=\"required|phone\">
                <p class=\"invalid-message\" id=\"error_phone\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <p class=\"border-bottom mt10 pb10\">
        Comentarios <br>
        <span style=\"font-size: 12px;\">Escribe tus necesidades, tenemos un plan para tí.</span>
    </p>
    <p></p>
    <div class=\"financing_elements\">
        <div class=\"financing_element ab\">
            <fieldset>
                <label for=\"suk_message\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Mensaje
                </label>
                <textarea name=\"mensaje\" class=\"escribir2 validate-required\" id=\"suk_message\" data-validation-data=\"required|address\" placeholder=\"Mensaje\"></textarea>
                <p class=\"invalid-message\" id=\"error_mensaje\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"financing_elements\">
        <div class=\"financing_element ab\">
            <p>¿Te gustaría manejarlo?</p>
            <fieldset class=\"fieldset-radio-checkbox\" id=\"fieldset-radio-checkbox-yes\">
                <label for=\"suk_testdrive_yes\" class=\"label-radio\">Sí
                    <input type=\"radio\" id=\"suk_testdrive_yes\" name=\"testdrive\" class=\"\" value=\"Sí deseas manejarlo\">
                </label>
            </fieldset>
            <fieldset class=\"fieldset-radio-checkbox\" id=\"fieldset-radio-checkbox-no\">
                <label for=\"suk_testdrive_no\" class=\"label-radio radio-checked\">No
                    <input type=\"radio\" id=\"suk_testdrive_no\" name=\"testdrive\" class=\"\" value=\"No deseas manejarlo\" checked=\"checked\">
                </label>
            </fieldset>
        </div>
    </div>
    <div class=\"financing_elements\">
        <div class=\"financing_element ab\">
            <fieldset class=\"fieldset-radio-checkbox\" id=\"checkbox-news\">
                <label for=\"suk_model_newsletter\" class=\"label-checkbox\">
                    <input type=\"checkbox\" id=\"suk_model_newsletter\" name=\"model_newsletter\" value=\"\"> Deseo recibir noticias y promociones.
                </label>
            </fieldset>
        </div>
    </div>
    <div class=\"financing_elements\">
        <div class=\"financing_element ab\">
            <fieldset id=\"fields_hidden\">
                <input type=\"hidden\" name=\"producto\" id=\"suk_producto\" value=\"Financiamiento - ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name", array()), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"modelo\" id=\"suk_modelo\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"concesionaria\" id=\"suk_concesionaria\" value=\"Suzuki Autos ";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"imagen\" id=\"suk_imagen\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "key", array()), "html", null, true);
        echo ".jpg\">
                <input type=\"hidden\" name=\"news\" id=\"suk_news\" value=\"0\">
                <input type=\"hidden\" name=\"campaign\" id=\"suk_campaign\" value=\"Suzuki Autos ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo " - Financiamiento\">
            </fieldset>
        </div>
    </div>
    <div class=\"clearfix\"></div>
</form>
<div class=\"financing_elements\">
    <div class=\"financing_element a\">
        <fieldset>
            <div id=\"loader_send_icon\" class=\"form-loader\" style=\"display: none;\">
                <div class=\"loader\">
                    <div class=\"loader-wrap\">
                        <div class=\"loader-item\"></div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class=\"financing_element b\">
        <fieldset>
            <button id=\"financing_send\" class=\"enviar button red send_contact_form financing-form-send\">Enviar</button>
        </fieldset>
    </div>
</div>
<div class=\"financing_elements\">
    <div class=\"financing_element ab\">
        <fieldset>
            <p>
                Tus datos están a salvo.<br>Para mayor información revisa nuestro <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "aviso-de-privacidad\" id=\"go-privacy-notice\">Aviso de Privacidad</a>
            </p>
        </fieldset>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "financiamiento/modelo/form_financing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 141,  146 => 113,  141 => 111,  137 => 110,  133 => 109,  129 => 108,  23 => 4,  19 => 1,);
    }
}
/* <form id="financing">*/
/*     <p>Nos gustaría enviarte una cotización por correo electrónico</p>*/
/*     {# financing #}*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element a">*/
/*             <fieldset>*/
/*                 <label for="suk_agn" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Selecciona concesionaria*/
/*                 </label>*/
/*                 <div class="select">*/
/*                     <select id="suk_agn" name="agencia" class="validate-required" data-validation-data="required|free" style="width: 100%;">*/
/*                         <option label="Selecccionar Concesionaria..." value="">Selecciona Concesionaria</option>*/
/*                         <option data-max-id="12" label="Suzuki López Mateos" value="Suzuki López Mateos">Suzuki López Mateos</option>*/
/*                         <option data-max-id="54" label="Suzuki Vallarta" value="Suzuki Vallarta">Suzuki Vallarta</option>*/
/*                     </select>*/
/*                 </div>*/
/*                 <p class="invalid-message" id="error_agencia">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="financing_element b">*/
/*             <fieldset>*/
/*                 <label for="suk_name" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Nombre*/
/*                 </label>*/
/*                 <input type="text" id="suk_name" name="nombre" class="validate-required" placeholder="Nombre" data-validation-data="required|name">*/
/*                 <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*     </div>*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element a">*/
/*             <fieldset>*/
/*                 <label for="suk_lastname" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Apellido*/
/*                 </label>*/
/*                 <input type="text" id="suk_lastname" name="apellido" class="validate-required" placeholder="Apellidos" data-validation-data="required|name">*/
/*                 <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="financing_element b">*/
/*             <fieldset>*/
/*                 <label for="suk_email" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Correo electrónico*/
/*                 </label>*/
/*                 <input type="text" id="suk_email" name="correo" class="validate-required" placeholder="Correo electrónico" data-validation-data="required|email">*/
/*                 <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*     </div>*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element a">*/
/*             <fieldset>*/
/*                 <label for="suk_phone" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Número de celular*/
/*                 </label>*/
/*                 <input type="text" id="suk_phone" name="telefono" class="validate-required" placeholder="Número de celular" data-validation-data="required|phone">*/
/*                 <p class="invalid-message" id="error_phone">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*     </div>*/
/*     <p class="border-bottom mt10 pb10">*/
/*         Comentarios <br>*/
/*         <span style="font-size: 12px;">Escribe tus necesidades, tenemos un plan para tí.</span>*/
/*     </p>*/
/*     <p></p>*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element ab">*/
/*             <fieldset>*/
/*                 <label for="suk_message" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Mensaje*/
/*                 </label>*/
/*                 <textarea name="mensaje" class="escribir2 validate-required" id="suk_message" data-validation-data="required|address" placeholder="Mensaje"></textarea>*/
/*                 <p class="invalid-message" id="error_mensaje">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*     </div>*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element ab">*/
/*             <p>¿Te gustaría manejarlo?</p>*/
/*             <fieldset class="fieldset-radio-checkbox" id="fieldset-radio-checkbox-yes">*/
/*                 <label for="suk_testdrive_yes" class="label-radio">Sí*/
/*                     <input type="radio" id="suk_testdrive_yes" name="testdrive" class="" value="Sí deseas manejarlo">*/
/*                 </label>*/
/*             </fieldset>*/
/*             <fieldset class="fieldset-radio-checkbox" id="fieldset-radio-checkbox-no">*/
/*                 <label for="suk_testdrive_no" class="label-radio radio-checked">No*/
/*                     <input type="radio" id="suk_testdrive_no" name="testdrive" class="" value="No deseas manejarlo" checked="checked">*/
/*                 </label>*/
/*             </fieldset>*/
/*         </div>*/
/*     </div>*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element ab">*/
/*             <fieldset class="fieldset-radio-checkbox" id="checkbox-news">*/
/*                 <label for="suk_model_newsletter" class="label-checkbox">*/
/*                     <input type="checkbox" id="suk_model_newsletter" name="model_newsletter" value=""> Deseo recibir noticias y promociones.*/
/*                 </label>*/
/*             </fieldset>*/
/*         </div>*/
/*     </div>*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element ab">*/
/*             <fieldset id="fields_hidden">*/
/*                 <input type="hidden" name="producto" id="suk_producto" value="Financiamiento - {{ model.name }}">*/
/*                 <input type="hidden" name="modelo" id="suk_modelo" value="{{ model.key }}">*/
/*                 <input type="hidden" name="concesionaria" id="suk_concesionaria" value="Suzuki Autos {{ _loc }}">*/
/*                 <input type="hidden" name="imagen" id="suk_imagen" value="{{ model.key }}.jpg">*/
/*                 <input type="hidden" name="news" id="suk_news" value="0">*/
/*                 <input type="hidden" name="campaign" id="suk_campaign" value="Suzuki Autos {{ _loc }} - Financiamiento">*/
/*             </fieldset>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/* </form>*/
/* <div class="financing_elements">*/
/*     <div class="financing_element a">*/
/*         <fieldset>*/
/*             <div id="loader_send_icon" class="form-loader" style="display: none;">*/
/*                 <div class="loader">*/
/*                     <div class="loader-wrap">*/
/*                         <div class="loader-item"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </fieldset>*/
/*     </div>*/
/*     <div class="financing_element b">*/
/*         <fieldset>*/
/*             <button id="financing_send" class="enviar button red send_contact_form financing-form-send">Enviar</button>*/
/*         </fieldset>*/
/*     </div>*/
/* </div>*/
/* <div class="financing_elements">*/
/*     <div class="financing_element ab">*/
/*         <fieldset>*/
/*             <p>*/
/*                 Tus datos están a salvo.<br>Para mayor información revisa nuestro <a href="{{ _host }}aviso-de-privacidad" id="go-privacy-notice">Aviso de Privacidad</a>*/
/*             </p>*/
/*         </fieldset>*/
/*     </div>*/
/* </div>*/
