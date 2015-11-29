<?php 
$this->layout = "./layouts/main_layout.php";
$this->section_title = Label::datos_personales;
$this->title = 'Usuarios';
$this->active = substr_replace($this->active, "1", -3, 1);
$lang = $this->lang;
$this->routing = array(Label::usuario, Label::datos_personales);
$mailbox_view = "folder";
$this->data = $this->model->Account->Account;
$this->controller_obj = $controller_class;
$this->subcat = $this->data->subcat;
$this->categories = array(array('id' => 1, 'name' => 'Salidas'), array('id' => 2, 'name' => 'Cursos'), array('id' => 3, 'name' => 'Competencia'));
$content = function() use ($lang){ ?>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2/css/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2-bootstrap-theme/select2-bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-maskedinput/jquery.maskedinput.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/jquery.validate.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/additional-methods.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.<?= $lang ?>.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-confirmation/bootstrap-confirmation.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2/js/select2.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2/js/i18n/<?= $lang ?>.js" type="text/javascript"></script>
<script>
    $(function(){
        $("#form").validate();
        $("#chk-radios-form").validate(Account.opciones_validacion);
        var last_valid_selection = null;
        
        $('#select-categorias').change(function(event) {
            if ($(this).val().length > 5) {
                alert('You can only choose 5!');
                $(this).val(last_valid_selection);
            } else {
                last_valid_selection = $(this).val();
            }
        });
        $('.confirmation-callback').confirmation({
            btnOkLabel      : '<?= Label::guardar ?>',
            btnCancelLabel  : '<?= Label::cancelar ?>',
                title       : '<?= Label::estas_seguro ?>',
            onConfirm: function() {
                $('#chk-radios-form').submit();
            },
            onCancel: function() {
                alert('You clicked: cancel' );
            }
	    });
        $("#fecha_nacimiento").focusout(ClcEdad);
        function ClcEdad(){
            var fecha = $("#fecha_nacimiento").val();
            var edad = General.calcular_edad(fecha);
            $("#edad").val(edad + ' Años');
        };
        if($("#fecha_nacimiento").val()){
            ClcEdad();
        }

        Account.asignar_localizacion(<?= $this->data->countries ?>, 'pais', <?= $this->data->pais_id ?>);
        if(states = <?= $this->data->states?$this->data->states:0 ?>)
        Account.asignar_localizacion(states, 'estado', <?= $this->data->estado_id ?>);
        if(cities = <?= ($this->data->cities?$this->data->cities:0 ) ?>)
        Account.asignar_localizacion(cities, 'ciudad', <?= $this->data->ciudad_id ?>);

        $(".localizaciones").on("change", function(){
            if ($(this).val() != ""){
                Account.deshabilitar_localizaciones($(this));
                Account.obtener_localizaciones($(this).attr("name"), $(this).val() );
            }
        });

        $('#subcategories').submit(function(){
            $.post( "<?= Settings::WEB_HOST_URL ?>account/set_subcategorias", { subcat: $("#select-categorias").val() }, function( data ) {
                if(data){
                    General.mostrar_info('Se actualizaron correctamente.');
                }else{
                    General.mostrar_info('Intente nuevamente luego.');
                }
            });
            return false;
        });

        <?= ( isset($this->data->edit_result)?"General.mostrar_info('". ($this->data->edit_result?Message::info_operacion_exitosa:Message::info_operacion_fallida) ."');":"" ) ?>
    });

    var Account = {
        /*obtener_subcategorias: function(datos){
            var formdata = new FormData();
            formdata
            General.enviar_ajax({
                ruta: "<?= Settings::WEB_HOST_URL ?>account/get_subcategorias",
                formulario: formdata,
                funcion: Account.asignar_subcategorias
            });
        },
        asignar_subcategorias: function(datos, indice, id){
            id = typeof id !== 'undefined' ? id : false;
            var opciones = General.crear_options(datos, indice+"_id", "descripcion", true, "<?= Label::seleccione ?>...", id);
            $('#select-categorias').val($('optgroup[label="' + indice + '"]').html(opciones);
        },*/
        obtener_localizaciones: function(nombre, id){
            var formdata = new FormData();
            var tabla = "";
            var base = nombre;
            switch(nombre){
                case "": tabla = "pais"; break;
                case "pais": tabla = "estado"; break;
                case "estado": tabla = "ciudad";break;
            }
            formdata.append("tabla", tabla);
            formdata.append(base, id);
            General.enviar_ajax({
                ruta: "<?= Settings::WEB_HOST_URL ?>account/get_localizaciones",
                formulario: formdata,
                funcion: Account.asignar_localizacion,
                indice: tabla
            });
        },
        asignar_localizacion: function(data, indice, id){
            id = typeof id !== 'undefined' ? id : false;
            var opciones = General.crear_options(data, indice+"_id", "descripcion", true, "<?= Label::seleccione ?>...", id);
            $("#select-"+indice).html(opciones);
        },
        deshabilitar_localizaciones: function (select){
            switch($(select).attr("name")){
                case "pais":
                    $("#select-estado").attr("disabled", false);
                    $("#select-estado").select2("val", "");
                    $("#select-ciudad").attr("disabled", true);
                    $("#select-ciudad").select2("val", "");
                    break;
                case "estado":
                    $("#select-ciudad").attr("disabled", false);
                    $("#select-ciudad").select2("val", "");
                    break;
            }
        },
        opciones_validacion : {
            highlight: function( label ) {
                $(label).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function( label ) {
                $(label).closest('.form-group').removeClass('has-error');
                label.remove();
            },
            errorPlacement: function( error, element ) {
                var placement = element.closest('.input-group');
                if (!placement.get(0)) {
                    placement = element;
                }
                if (error.text() !== '') {
                    placement.after(error);
                }
            }
        },
    };
</script>
<div class="row">
    <div class="col-md-6">
        <form id="form" action="edit_user" method="post" class="form-horizontal">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?= Label::informacion_personal ?></h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::nombres ?><span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nombres" class="form-control" placeholder="eg.: John Doe" 
                                   data-msg-pattern = "<?= Message::alerta_campo_clave ?>"   
                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>" value="<?= $this->data->nombres; ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?= Label::telefono ?></label>
                        <div class="col-md-9 control-label">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <input name="phone_home" value="<?= $this->data->phone_home; ?>" data-plugin-masked-input=""
                                       data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?= Label::telefono_mobile ?></label>
                        <div class="col-md-9 control-label">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <input name="phone_mobile" value="<?= $this->data->phone_mobile; ?>" data-plugin-masked-input=""
                                       data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::fecha_nacimiento ?><span class="required">*</span></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input name="fecha_nacimiento" id="fecha_nacimiento" value="<?= ( isset($this->data->fecha_de_nacimiento)?date("d/m/Y", strtotime($this->data->fecha_de_nacimiento)):'' ) ?>" type="text" class="form-control col-sm-9"
                                       data-plugin-datepicker="" data-plugin-options='{ "language": "<?= $lang ?>", "endDate": "-18y" }' required />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input id="edad" type="text" class="form-control col-sm-9" value = "{0} <?= Label::años ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::sexo ?></label>
                        <div class="col-sm-9">
                            <div class="radio-custom radio-primary">
                                <input id="awesome" name="sexo" type="radio" value="F" checked />
                                <label for="f"><?= Label::femenino ?></label>
                            </div>
                            <div class="radio-custom radio-primary">
                                <input id="very-awesome" name="sexo" type="radio" value="M" <?=($this->data->gender=='M'?'checked':'')?> />
                                <label for="m"><?= Label::masculino ?></label>
                            </div>            
                            <label class="error" for="porto_is"></label>
                        </div>
                    </div>
                    <div class = "text-center">
                        <span class="alternative-font"><?= Label::donde_vives ?></span><br><br>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::pais ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <select name="pais" id="select-pais" class="form-control populate localizaciones" data-plugin-selectTwo data-plugin-options='{ "placeholder": "<?= Label::seleccione ?>...", "allowClear": true, "language": "<?= $lang ?>" }'
                                    data-msg-required = "<?= Message::alerta_campo_obligatorio ?>" required>
                                <option value=""><?= Label::seleccione ?>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::provincia ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <select name="estado" id="select-estado" class="form-control populate localizaciones" data-plugin-selectTwo data-plugin-options='{ "placeholder": "<?= Label::seleccione ?>...", "allowClear": true, "language": "<?= $lang ?>" }'
                                    data-msg-required = "<?= Message::alerta_campo_obligatorio ?>" required>
                                <option value=""><?= Label::seleccione ?>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::poblacion ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <select name="ciudad" id="select-ciudad" class="form-control populate localizaciones" data-plugin-selectTwo data-plugin-options='{ "placeholder": "<?= Label::seleccione ?>...", "allowClear": true, "language": "<?= $lang ?>" }'
                                    data-msg-required = "<?= Message::alerta_campo_obligatorio ?>" required>
                                <option value=""><?= Label::seleccione ?>...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-5">
                            <button class="btn btn-primary"><?= Label::guardar ?></button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
    <!-- col-md-6 -->
    <div class="col-md-6">
        <form id="chk-radios-form" method="post" action="edit_pwd">
            <section class="panel">
                <header class="panel-heading">  
                    <h2 class="panel-title"><?= Label::informacion_cuenta ?></h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::correo ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input type="email" name="email" class="form-control" placeholder="eg.: email@email.com" value="<?= $this->data->email ?>" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::contraseña ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="password" id = "clave" name="clave" class="form-control" required pattern="^\w{6,20}$" maxlength="20"
                                   data-msg-pattern = "<?= Message::alerta_campo_clave ?>"   
                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::repetir_contraseña ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" data-rule-equalto="#clave" required
                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"
                                   data-msg-equalto = "<?= Message::alerta_campo_repetir_contraseña ?>" />
                        </div>                        
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-5">
                            <a href="#" class="confirmation-callback"><button class="btn btn-primary"><?= Label::guardar ?></button></a>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
        <form name="subcategories" id="subcategories" method="post" action="#">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?= Label::categorias_preferidas ?></h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-12">
                            <select name="select-categorias" id="select-categorias" class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "enableCaseInsensitiveFiltering": true }' id="ms_example6">
                                <? foreach($this->categories as $val): ?>
                                <optgroup label="<?=$val['name']?>">
                                    <?
                                    if($subcats = $this->controller_obj->get_subcategorias($val['id']))
                                    foreach($subcats as $subcat):?>
                                    <option value="<?=$subcat->id_sub_categoria?>" <?=(!empty($this->data->subcat)?(in_array($subcat->id_sub_categoria,$this->data->subcat)?'selected':''):'')?>><?=$subcat->nombre_sub_categoria?></option>
                                    <? endforeach;?>
                                </optgroup>
                                <? endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-5">
                            <button class="btn btn-primary"><?= Label::guardar ?></button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
<?php };
