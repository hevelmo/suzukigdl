<?php

/* contacto/contact_form.twig */
class __TwigTemplate_bcbb1f70dfcad4eef41cbaf5870de11bb2a790139c7e5369d2303b4b0ab1fb6d extends Twig_Template
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
        echo "<div class=\"contact_content\">
    <div id=\"form-wrapper\">
        <form id=\"form-contact\">
            <!-- Formulario -->
            <div class=\"contact_elements\">
                <div class=\"contact_element a\">
                    <fieldset>
                        <label for=\"suk_name\" style=\"display: none;\">
                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Nombre
                        </label>
                        <input
                            type=\"text\"
                            name=\"nombre\"
                            value=\"\"
                            class=\"icon buddy con_validate_input\"
                            id=\"suk_name\"
                            placeholder=\"Nombre\"
                            data-validation-data=\"required|name\">
                        <p class=\"invalid-message\" id=\"error_nombre\">Este campo es obligatorio<span>&nbsp;</span></p>
                    </fieldset>
                </div>
                <div class=\"contact_element b\">
                    <fieldset>
                        <label for=\"suk_lastname\" style=\"display: none;\">
                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Apellido
                        </label>
                        <input
                            name=\"apellidos\"
                            id=\"suk_lastname\"
                            type=\"text\"
                            class=\"icon buddy con_validate_input\"
                            value=\"\"
                            placeholder=\"Apellidos Paterno y Materno\"
                            data-validation-data=\"required|name\">
                        <p class=\"invalid-message\" id=\"error_nombre\">Este campo es obligatorio<span>&nbsp;</span></p>
                    </fieldset>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"contact_elements\">
                <div class=\"contact_element a\">
                    <fieldset>
                        <label for=\"suk_email\" style=\"display: none;\">
                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Correo electrónico
                        </label>
                        <input
                            name=\"correo\"
                            id=\"suk_email\"
                            type=\"email\"
                            class=\"icon email con_validate_input\"
                            value=\"\"
                            placeholder=\"Correo electrónico\"
                            data-validation-data=\"required|email\">
                        <p class=\"invalid-message\" id=\"error_correo\">Este campo es obligatorio<span>&nbsp;</span></p>
                    </fieldset>
                </div>
            </div>
            <div class=\"contact_elements\">
                <div class=\"contact_element b\">
                    <fieldset>
                        <label for=\"suk_department\" style=\"display: none;\">
                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Departamento
                        </label>
                        <div class=\"select\">
                            <select name=\"departamento\" id=\"suk_department\" type=\"dropdown\" class=\"seleccionar form-control validate_select\" style=\"width: 100%;\" data-validation-data=\"required\">
                                <option label=\"Selecccionar\" selected=\"selected\" disabled=\"disabled\" value=\"\">Selecciona Departamento</option>
                                <option label=\"Ventas\" value=\"Ventas\">Ventas</option>
                                <option label=\"Servicio\" value=\"Servicio\">Servicio</option>
                                <option label=\"Refacciones / Accesorios\" value=\"Refacciones / Accesorios\">Refacciones / Accesorios</option>
                                <option label=\"Mercadotecnia\" value=\"Mercadotecnia\">Mercadotecnia</option>
                                <option label=\"Otros\" value=\"Otros\">Otros</option>
                            </select>
                            </div>
                        <p class=\"invalid-message\" id=\"error_departamento\">Este campo es obligatorio<span>&nbsp;</span></p>
                    </fieldset>
                </div>
                <div class=\"contact_element a\">
                    <fieldset>
                        <label for=\"suk_model\" style=\"display: none;\">
                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Auto
                        </label>
                        <div class=\"select\">
                            <select name=\"modelo\" id=\"suk_model\" type=\"dropdown\" class=\"seleccionar form-control validate_select\" style=\"width: 100%;\" data-validation-data=\"required\">
                                <option label=\"Selecciona Modelo\" selected=\"selected\" disabled=\"disabled\" value=\"\">Selecciona Modelo</option>
                                <option label=\"Swift Sport\" value=\"Swift Sport\">Swift Sport</option>
                                <option label=\"Swift\" value=\"Swift\">Swift</option>
                                <option label=\"Kizashi\" value=\"Kizashi\">Kizashi</option>
                                <option label=\"Grand Vitara\" value=\"Grand Vitara\">Grand Vitara</option>
                                <option label=\"S-Cross\" value=\"S-Cross\">S-Cross</option>
                                <option label=\"Ciaz\"value=\"Ciaz\">Ciaz</option>
                                <option label=\"Ignis\"value=\"Ignis\">Ignis</option>
                                <option label=\"Nueva Vitara\"value=\"Nueva Vitara\">Nueva Vitara</option>
                            </select>
                        </div>
                        <p class=\"invalid-message\" id=\"error_auto\">Este campo es obligatorio<span>&nbsp;</span></p>
                    </fieldset>
                </div>
            </div>
            <div class=\"contact_elements\">
                <div class=\"contact_element ab\">
                    <fieldset>
                        <label for=\"suk_message\" style=\"display: none;\">
                            <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Mensaje:
                        </label>
                        <textarea
                            name=\"mensaje\"
                            class=\"escribir2 con_validate_input\"
                            id=\"suk_message\"
                            data-validation-data=\"required|address\"></textarea>
                        <p class=\"invalid-message\" id=\"error_mensaje\">Este campo es obligatorio<span>&nbsp;</span></p>
                    </fieldset>

                    <fieldset class=\"fieldset-radio-checkbox\">
                        <label for=\"suk_newsletter\" class=\"label-checkbox checkbox-checked\">
                            <input
                                name=\"newsletter\"
                                type=\"checkbox\"
                                id=\"suk_newsletter\"
                                checked=\"checked\"
                                value=\"on\"
                                class=\"validate_checked\"> Deseo recibir noticias y promociones.
                        </label>
                    </fieldset>
                    <input type=\"hidden\" name=\"agencia\" id=\"suk_agencie\" value=\"Suzuki ";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"depto\" id=\"suk_depto\" value=\"\">
                    <input type=\"hidden\" name=\"auto\" id=\"suk_auto\" value=\"\">
                    <input type=\"hidden\" name=\"image_modelo\" id=\"suk_image_modelo\" value=\"\">
                    <input type=\"hidden\" name=\"subscription\" id=\"suk_subscription\" value=\"\">
                </div>
            </div>
        </form>
        <div class=\"contact_elements\">
            <div class=\"contact_element a\">
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
            <div class=\"contact_element b\">
                <fieldset>
                    <div class=\"pl0\" id=\"button_leads_form_financing\">
                        <button class=\"enviar button red is_empty_email send_contact_form col-md-12 contact-form-send\" style=\"margin-top: 0px;\" id=\"contact-send\">
                            ENVIAR
                        </button>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class=\"contact_elements\">
            <div class=\"contact_element ab\">
                <p id=\"revisa_aviso\">
                    Tus datos están a salvo.<br/>
                    Para mayor información revisa nuestro <a href=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "aviso-de-privacidad\" id=\"go-privacy-notice\">Aviso de privacidad</a>
                </p>
            </div>
        </div>
    </div>
    ";
        // line 184
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "contacto/contact_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 184,  181 => 158,  144 => 124,  19 => 1,);
    }
}
/* <div class="contact_content">*/
/*     <div id="form-wrapper">*/
/*         <form id="form-contact">*/
/*             <!-- Formulario -->*/
/*             <div class="contact_elements">*/
/*                 <div class="contact_element a">*/
/*                     <fieldset>*/
/*                         <label for="suk_name" style="display: none;">*/
/*                             <span style="color: red;" class="fa fa-asterisk"></span> Nombre*/
/*                         </label>*/
/*                         <input*/
/*                             type="text"*/
/*                             name="nombre"*/
/*                             value=""*/
/*                             class="icon buddy con_validate_input"*/
/*                             id="suk_name"*/
/*                             placeholder="Nombre"*/
/*                             data-validation-data="required|name">*/
/*                         <p class="invalid-message" id="error_nombre">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                     </fieldset>*/
/*                 </div>*/
/*                 <div class="contact_element b">*/
/*                     <fieldset>*/
/*                         <label for="suk_lastname" style="display: none;">*/
/*                             <span style="color: red;" class="fa fa-asterisk"></span> Apellido*/
/*                         </label>*/
/*                         <input*/
/*                             name="apellidos"*/
/*                             id="suk_lastname"*/
/*                             type="text"*/
/*                             class="icon buddy con_validate_input"*/
/*                             value=""*/
/*                             placeholder="Apellidos Paterno y Materno"*/
/*                             data-validation-data="required|name">*/
/*                         <p class="invalid-message" id="error_nombre">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                     </fieldset>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*             <div class="contact_elements">*/
/*                 <div class="contact_element a">*/
/*                     <fieldset>*/
/*                         <label for="suk_email" style="display: none;">*/
/*                             <span style="color: red;" class="fa fa-asterisk"></span> Correo electrónico*/
/*                         </label>*/
/*                         <input*/
/*                             name="correo"*/
/*                             id="suk_email"*/
/*                             type="email"*/
/*                             class="icon email con_validate_input"*/
/*                             value=""*/
/*                             placeholder="Correo electrónico"*/
/*                             data-validation-data="required|email">*/
/*                         <p class="invalid-message" id="error_correo">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                     </fieldset>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="contact_elements">*/
/*                 <div class="contact_element b">*/
/*                     <fieldset>*/
/*                         <label for="suk_department" style="display: none;">*/
/*                             <span style="color: red;" class="fa fa-asterisk"></span> Departamento*/
/*                         </label>*/
/*                         <div class="select">*/
/*                             <select name="departamento" id="suk_department" type="dropdown" class="seleccionar form-control validate_select" style="width: 100%;" data-validation-data="required">*/
/*                                 <option label="Selecccionar" selected="selected" disabled="disabled" value="">Selecciona Departamento</option>*/
/*                                 <option label="Ventas" value="Ventas">Ventas</option>*/
/*                                 <option label="Servicio" value="Servicio">Servicio</option>*/
/*                                 <option label="Refacciones / Accesorios" value="Refacciones / Accesorios">Refacciones / Accesorios</option>*/
/*                                 <option label="Mercadotecnia" value="Mercadotecnia">Mercadotecnia</option>*/
/*                                 <option label="Otros" value="Otros">Otros</option>*/
/*                             </select>*/
/*                             </div>*/
/*                         <p class="invalid-message" id="error_departamento">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                     </fieldset>*/
/*                 </div>*/
/*                 <div class="contact_element a">*/
/*                     <fieldset>*/
/*                         <label for="suk_model" style="display: none;">*/
/*                             <span style="color: red;" class="fa fa-asterisk"></span> Auto*/
/*                         </label>*/
/*                         <div class="select">*/
/*                             <select name="modelo" id="suk_model" type="dropdown" class="seleccionar form-control validate_select" style="width: 100%;" data-validation-data="required">*/
/*                                 <option label="Selecciona Modelo" selected="selected" disabled="disabled" value="">Selecciona Modelo</option>*/
/*                                 <option label="Swift Sport" value="Swift Sport">Swift Sport</option>*/
/*                                 <option label="Swift" value="Swift">Swift</option>*/
/*                                 <option label="Kizashi" value="Kizashi">Kizashi</option>*/
/*                                 <option label="Grand Vitara" value="Grand Vitara">Grand Vitara</option>*/
/*                                 <option label="S-Cross" value="S-Cross">S-Cross</option>*/
/*                                 <option label="Ciaz"value="Ciaz">Ciaz</option>*/
/*                                 <option label="Ignis"value="Ignis">Ignis</option>*/
/*                                 <option label="Nueva Vitara"value="Nueva Vitara">Nueva Vitara</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <p class="invalid-message" id="error_auto">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                     </fieldset>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="contact_elements">*/
/*                 <div class="contact_element ab">*/
/*                     <fieldset>*/
/*                         <label for="suk_message" style="display: none;">*/
/*                             <span style="color: red;" class="fa fa-asterisk"></span> Mensaje:*/
/*                         </label>*/
/*                         <textarea*/
/*                             name="mensaje"*/
/*                             class="escribir2 con_validate_input"*/
/*                             id="suk_message"*/
/*                             data-validation-data="required|address"></textarea>*/
/*                         <p class="invalid-message" id="error_mensaje">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                     </fieldset>*/
/* */
/*                     <fieldset class="fieldset-radio-checkbox">*/
/*                         <label for="suk_newsletter" class="label-checkbox checkbox-checked">*/
/*                             <input*/
/*                                 name="newsletter"*/
/*                                 type="checkbox"*/
/*                                 id="suk_newsletter"*/
/*                                 checked="checked"*/
/*                                 value="on"*/
/*                                 class="validate_checked"> Deseo recibir noticias y promociones.*/
/*                         </label>*/
/*                     </fieldset>*/
/*                     <input type="hidden" name="agencia" id="suk_agencie" value="Suzuki {{ _loc }}">*/
/*                     <input type="hidden" name="depto" id="suk_depto" value="">*/
/*                     <input type="hidden" name="auto" id="suk_auto" value="">*/
/*                     <input type="hidden" name="image_modelo" id="suk_image_modelo" value="">*/
/*                     <input type="hidden" name="subscription" id="suk_subscription" value="">*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*         <div class="contact_elements">*/
/*             <div class="contact_element a">*/
/*                 <fieldset>*/
/*                     <div id="loader_send_icon" class="form-loader" style="display: none;">*/
/*                         <div class="loader">*/
/*                             <div class="loader-wrap">*/
/*                                 <div class="loader-item"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </fieldset>*/
/*             </div>*/
/*             <div class="contact_element b">*/
/*                 <fieldset>*/
/*                     <div class="pl0" id="button_leads_form_financing">*/
/*                         <button class="enviar button red is_empty_email send_contact_form col-md-12 contact-form-send" style="margin-top: 0px;" id="contact-send">*/
/*                             ENVIAR*/
/*                         </button>*/
/*                     </div>*/
/*                 </fieldset>*/
/*             </div>*/
/*         </div>*/
/*         <div class="contact_elements">*/
/*             <div class="contact_element ab">*/
/*                 <p id="revisa_aviso">*/
/*                     Tus datos están a salvo.<br/>*/
/*                     Para mayor información revisa nuestro <a href="{{ _host }}aviso-de-privacidad" id="go-privacy-notice">Aviso de privacidad</a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {#*/
/*     <div class="form-thanks" style="display: none">*/
/*         <p class="agradecimiento_titulo">Mensaje enviado</p>*/
/*         <p class="agradecimiento_titulo2">En breve responderemos tu mensaje al siguiente correo:<br /><span id="email-from">-</span></p>*/
/*         <hr>*/
/*         <p class="agradecimiento_titulo3">¡No olvides seguir nuestras noticias y ofertas en las redes sociales!</p>*/
/*         <div class="arrow"><img src="img/sections/contact/arrow.png"></div>*/
/*     </div>*/
/*     <div class="form-error" style="display: none">*/
/*         <p class="agradecimiento_titulo">Hubo un error</p>*/
/*         <hr>*/
/*         <p class="agradecimiento_titulo2">Intentalo nuevamente</p>*/
/*     </div>*/
/*     <div class="form-loader" style="display: none;">*/
/*         <div class="loader">*/
/*             <div class="loader-wrap">*/
/*                 <div class="loader-item"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     #}*/
/* </div>*/
