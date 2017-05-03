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
        echo "<form id=\"leads-suk-gdl-financing-by-model\">
    <p>Nos gustaría enviarte una cotización por correo electrónico</p>
    <!-- financing -->
    <div class=\"financing_elements\">
        <div class=\"financing_element a\">
            <fieldset>
                <label for=\"financing_by_model_concessionaire\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Selecciona concesionaria
                </label>
                <div class=\"select\">
                    <select id=\"financing_by_model_concessionaire\" type=\"dropdown\" name=\"leads_suk_gdl_financing_by_model_concessionaire\" class=\"seleccionar form-control validate_select\" style=\"width: 256px;\" data-validation-data=\"required\">
                        <option label=\"Selecccionar Concesionaria...\" selected=\"selected\" disabled=\"disabled\" value=\"\">Selecciona Concesionaria</option>
                        <option data-max-id=\"12\" label=\"Suzuki López Mateos\" value=\"Suzuki López Mateos\">Suzuki López Mateos</option>
                        <option data-max-id=\"54\" label=\"Suzuki Vallarta\" value=\"Suzuki Vallarta\">Suzuki Vallarta</option>
                    </select>
                </div>
                <p class=\"invalid-message\" id=\"error_departamento\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"financing_element b\">
            <fieldset>
                <label for=\"leads_suk_gdl_financing_by_model_name\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Nombre
                </label>
                <input
                    type=\"text\"
                    id=\"financing_by_model_name\"
                    name=\"leads_suk_gdl_financing_by_model_name\"
                    class=\"fbm_validate_input\"
                    placeholder=\"Nombre\"
                    data-validation-data=\"required|name\">
                <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"financing_elements\">
        <div class=\"financing_element a\">
            <fieldset>
                <label for=\"leads_suk_gdl_financing_by_model_lastname\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Apellido
                </label>
                <input
                    type=\"text\"
                    id=\"financing_by_model_lastname\"
                    name=\"leads_suk_gdl_financing_by_model_lastname\"
                    class=\"fbm_validate_input\"
                    placeholder=\"Apellidos Paterno y Materno\"
                    data-validation-data=\"required|name\">
                <p class=\"invalid-message\" id=\"error_lastname\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"financing_element b\">
            <fieldset>
                <label for=\"leads_suk_gdl_financing_by_model_email\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Correo electrónico
                </label>
               <input
                    type=\"email\"
                    id=\"financing_by_model_email\"
                    name=\"leads_suk_gdl_financing_by_model_email\"
                    class=\"fbm_validate_input input icon email\"
                    placeholder=\"Correo electrónico\"
                    data-validation-data=\"required|email\">
               <p class=\"invalid-message\" id=\"error_mail\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"financing_elements\">
        <div class=\"financing_element a\">
            <fieldset>
                <label for=\"leads_suk_gdl_financing_by_model_tel\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Número de celular
                </label>
                <input
                    type=\"tel\"
                    id=\"financing_by_model_tel\"
                    name=\"leads_suk_gdl_financing_by_model_tel\"
                    class=\"fbm_validate_input\"
                    maxlength=\"13\"
                    placeholder=\"Número de celular\"
                    data-validation-data=\"required|phone\">
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
                <label for=\"leads_suk_gdl_financing_by_model_message\" style=\"display: none;\">
                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Mensaje
                </label>
                <textarea
                    name=\"leads_suk_gdl_financing_by_model_message\"
                    class=\"escribir2 fbm_validate_input\"
                    id=\"financing_by_model_message\"
                    data-validation-data=\"required|address\"></textarea>
                <p class=\"invalid-message\" id=\"error_mensaje\">Este campo es obligatorio<span>&nbsp;</span></p>
            </fieldset>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"financing_elements\">
        <div class=\"financing_element ab\">
            <p>¿Te gustaría manejarlo?</p>
            <fieldset class=\"fieldset-radio-checkbox\" id=\"fieldset-radio-checkbox-yes\">
                <label for=\"financing_by_model_test_drive_yes\" class=\"label-radio\">Sí
                    <input
                        type=\"radio\"
                        id=\"financing_by_model_test_drive_yes\"
                        name=\"leads_suk_gdl_financing_by_model_test_drive\"
                        class=\"fbm_validate_radio\"
                        value=\"Sí deseas manejarlo\">
                </label>
            </fieldset>
            <fieldset class=\"fieldset-radio-checkbox\" id=\"fieldset-radio-checkbox-no\">
                <label for=\"financing_by_model_test_drive_no\" class=\"label-radio radio-checked\">No
                    <input
                        type=\"radio\"
                        id=\"financing_by_model_test_drive_no\"
                        name=\"leads_suk_gdl_financing_by_model_test_drive\"
                        class=\"fbm_validate_radio\"
                        value=\"No deseas manejarlo\"
                        checked=\"checked\">
                </label>
            </fieldset>
        </div>
    </div>
    <div class=\"financing_elements\">
        <div class=\"financing_element ab\">
            <fieldset class=\"fieldset-radio-checkbox\" id=\"checkbox-news\">
                <label for=\"financing_by_model_newsletter\" class=\"label-checkbox\">
                    <input
                        type=\"checkbox\"
                        id=\"financing_by_model_newsletter\"
                        name=\"leads_suk_gdl_financing_by_model_newsletter\"
                        class=\"fbm_validate_checkbox\"
                        value=\"\"> Deseo recibir noticias y promociones.
                </label>
            </fieldset>
            <fieldset id=\"funding_fields_hidden\"></fieldset>
        </div>
    </div>
    <div class=\"clearfix\"></div>
</form>
<button id=\"send_leads_financing_by_model_submit\" class=\"enviar button red financing_by_model is_empty_email\">Enviar</button>
<p id=\"revisa_aviso\">
    Tus datos están a salvo.<br>
    Para mayor información revisa nuestro <a id=\"go-privacy-notice\">Aviso de privacidad</a>
</p>";
    }

    public function getTemplateName()
    {
        return "financiamiento/modelo/form_financing.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <form id="leads-suk-gdl-financing-by-model">*/
/*     <p>Nos gustaría enviarte una cotización por correo electrónico</p>*/
/*     <!-- financing -->*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element a">*/
/*             <fieldset>*/
/*                 <label for="financing_by_model_concessionaire" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Selecciona concesionaria*/
/*                 </label>*/
/*                 <div class="select">*/
/*                     <select id="financing_by_model_concessionaire" type="dropdown" name="leads_suk_gdl_financing_by_model_concessionaire" class="seleccionar form-control validate_select" style="width: 256px;" data-validation-data="required">*/
/*                         <option label="Selecccionar Concesionaria..." selected="selected" disabled="disabled" value="">Selecciona Concesionaria</option>*/
/*                         <option data-max-id="12" label="Suzuki López Mateos" value="Suzuki López Mateos">Suzuki López Mateos</option>*/
/*                         <option data-max-id="54" label="Suzuki Vallarta" value="Suzuki Vallarta">Suzuki Vallarta</option>*/
/*                     </select>*/
/*                 </div>*/
/*                 <p class="invalid-message" id="error_departamento">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="financing_element b">*/
/*             <fieldset>*/
/*                 <label for="leads_suk_gdl_financing_by_model_name" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Nombre*/
/*                 </label>*/
/*                 <input*/
/*                     type="text"*/
/*                     id="financing_by_model_name"*/
/*                     name="leads_suk_gdl_financing_by_model_name"*/
/*                     class="fbm_validate_input"*/
/*                     placeholder="Nombre"*/
/*                     data-validation-data="required|name">*/
/*                 <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*     </div>*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element a">*/
/*             <fieldset>*/
/*                 <label for="leads_suk_gdl_financing_by_model_lastname" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Apellido*/
/*                 </label>*/
/*                 <input*/
/*                     type="text"*/
/*                     id="financing_by_model_lastname"*/
/*                     name="leads_suk_gdl_financing_by_model_lastname"*/
/*                     class="fbm_validate_input"*/
/*                     placeholder="Apellidos Paterno y Materno"*/
/*                     data-validation-data="required|name">*/
/*                 <p class="invalid-message" id="error_lastname">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="financing_element b">*/
/*             <fieldset>*/
/*                 <label for="leads_suk_gdl_financing_by_model_email" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Correo electrónico*/
/*                 </label>*/
/*                <input*/
/*                     type="email"*/
/*                     id="financing_by_model_email"*/
/*                     name="leads_suk_gdl_financing_by_model_email"*/
/*                     class="fbm_validate_input input icon email"*/
/*                     placeholder="Correo electrónico"*/
/*                     data-validation-data="required|email">*/
/*                <p class="invalid-message" id="error_mail">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*     </div>*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element a">*/
/*             <fieldset>*/
/*                 <label for="leads_suk_gdl_financing_by_model_tel" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Número de celular*/
/*                 </label>*/
/*                 <input*/
/*                     type="tel"*/
/*                     id="financing_by_model_tel"*/
/*                     name="leads_suk_gdl_financing_by_model_tel"*/
/*                     class="fbm_validate_input"*/
/*                     maxlength="13"*/
/*                     placeholder="Número de celular"*/
/*                     data-validation-data="required|phone">*/
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
/*                 <label for="leads_suk_gdl_financing_by_model_message" style="display: none;">*/
/*                     <span style="color: red;" class="fa fa-asterisk"></span> Mensaje*/
/*                 </label>*/
/*                 <textarea*/
/*                     name="leads_suk_gdl_financing_by_model_message"*/
/*                     class="escribir2 fbm_validate_input"*/
/*                     id="financing_by_model_message"*/
/*                     data-validation-data="required|address"></textarea>*/
/*                 <p class="invalid-message" id="error_mensaje">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*     </div>*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element ab">*/
/*             <p>¿Te gustaría manejarlo?</p>*/
/*             <fieldset class="fieldset-radio-checkbox" id="fieldset-radio-checkbox-yes">*/
/*                 <label for="financing_by_model_test_drive_yes" class="label-radio">Sí*/
/*                     <input*/
/*                         type="radio"*/
/*                         id="financing_by_model_test_drive_yes"*/
/*                         name="leads_suk_gdl_financing_by_model_test_drive"*/
/*                         class="fbm_validate_radio"*/
/*                         value="Sí deseas manejarlo">*/
/*                 </label>*/
/*             </fieldset>*/
/*             <fieldset class="fieldset-radio-checkbox" id="fieldset-radio-checkbox-no">*/
/*                 <label for="financing_by_model_test_drive_no" class="label-radio radio-checked">No*/
/*                     <input*/
/*                         type="radio"*/
/*                         id="financing_by_model_test_drive_no"*/
/*                         name="leads_suk_gdl_financing_by_model_test_drive"*/
/*                         class="fbm_validate_radio"*/
/*                         value="No deseas manejarlo"*/
/*                         checked="checked">*/
/*                 </label>*/
/*             </fieldset>*/
/*         </div>*/
/*     </div>*/
/*     <div class="financing_elements">*/
/*         <div class="financing_element ab">*/
/*             <fieldset class="fieldset-radio-checkbox" id="checkbox-news">*/
/*                 <label for="financing_by_model_newsletter" class="label-checkbox">*/
/*                     <input*/
/*                         type="checkbox"*/
/*                         id="financing_by_model_newsletter"*/
/*                         name="leads_suk_gdl_financing_by_model_newsletter"*/
/*                         class="fbm_validate_checkbox"*/
/*                         value=""> Deseo recibir noticias y promociones.*/
/*                 </label>*/
/*             </fieldset>*/
/*             <fieldset id="funding_fields_hidden"></fieldset>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/* </form>*/
/* <button id="send_leads_financing_by_model_submit" class="enviar button red financing_by_model is_empty_email">Enviar</button>*/
/* <p id="revisa_aviso">*/
/*     Tus datos están a salvo.<br>*/
/*     Para mayor información revisa nuestro <a id="go-privacy-notice">Aviso de privacidad</a>*/
/* </p>*/
