<?php 
$this->layout = "./layouts/main_layout.php";
$this->active = substr_replace($this->active, "1", -9, 1);
$this->routing = array(Label::configuracion, Label::configuracion);
$this->section_title = Label::configuracion;
$content = function(){ ?>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/jquery.validate.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/additional-methods.js" type="text/javascript"></script>
<script>
    $(function(){
        $("#form-categorias").validate();
        $("#form-categorias").on("click", ".nuevo, .editar", function(){
            $(".class-sub_categoria").removeClass("hidden");
            var input = $(".class-sub_categoria").find("[name=nombre_sub_categoria]");
            var select = $("#select-sub_categoria");
            if ($(this).is(".editar")){      
                if (select.val() != "" && select.val() != null) {
                    input.val(select.find("option:selected").html());
                }
                else {
                    General.mostrar_alerta("<?= Message::alerta_editar_campo_vacio ?>");
                }
            }
            input.attr("disabled", false);
            input.focus();
            
            $("#span-categoria-accion").html(
                $(this).is(".nuevo") ? "<?= Label::crear ?>" : "<?= Label::modificar ?>");
        });
        $("#form-categorias").on("click", ".eliminar", function(){
            var input = $(".class-sub_categoria").find("[name=nombre_sub_categoria]");
            var select = $("select.class-sub_categoria");
            if (!$(".class-sub_categoria").hasClass("hidden")) 
                $(".class-sub_categoria").addClass("hidden");
            
            if (select.val() != "" && select.val() != null){
                General.mostrar_confirmacion("<?= Message::confirmacion_gestionar_sub_categorias ?>", Basic.post_categorias);
                $("#span-categoria-accion").html("<?= Label::eliminar ?>");
            }
            else {
                General.mostrar_alerta("<?= Message::alerta_eliminar_campo_vacio ?>");
            }
            input.attr("disabled", true);
        });
        $("#select-sub_categoria").on("change", function(){
            Basic.obtener_subcategorias();
        });        
        $("#submit-categoria").on("click", function(e){
            var input = $(".class-sub_categoria").find("[name=nombre_sub_categoria]");
            if (input.attr("disabled") == "disabled"){
                e.preventDefault();
                General.mostrar_alerta("<?= Message::alerta_no_accion_realizar ?>");
            }
        });
        $("#form-localizaciones").validate(Basic.opciones_validacion);
        $("#form-localizaciones select").on("change", function(){
            $("#form-localizaciones #hidden-tabla").val($(this).attr("name"));
            Basic.obtener_localizacion();
        });
        $("#form-localizaciones").on("click", ".nuevo, .editar", function(){
            $(".class-localizaciones").removeClass("hidden");
            var input = $(".class-localizaciones").find("[name=descripcion]");
            var select = $(this).parents(".form-group").find("select");
            if ($(this).is(".editar")){      
                if (select.val() != "" && select.val() != null) {
                    input.val(select.find("option:selected").html());
                }
                else {
                    General.mostrar_alerta("<?= Message::alerta_editar_campo_vacio ?>");
                }
            }
            $("#form-localizaciones #hidden-tabla").val(select.attr("name"));
            input.attr("disabled", false);
            input.attr("placeholder", select.attr("data-bind"));
            input.focus();
            
            $("#span-localizacion-accion").html(
                    $(this).is(".nuevo") ? "<?= Label::crear ?>" : "<?= Label::modificar ?>");
        });
        $("#form-localizaciones").on("click", ".eliminar", function(){
            var input = $(".class-localizaciones").find("[name=descripcion]");
            var select = $(this).parents(".form-group").find("select");
            if (!$(".class-localizaciones").hasClass("hidden")) 
                $(".class-localizaciones").addClass("hidden");
            
            $("#form-localizaciones #hidden-tabla").val(select.attr("name"));
            if (select.val() != "" && select.val() != null) {
                General.mostrar_confirmacion("<?= Message::confirmacion_gestionar_localizacion ?>", Basic.post_localizaciones);           
                $("#span-localizacion-accion").html("<?= Label::eliminar ?>");
            }
            else {
                General.mostrar_alerta("<?= Message::alerta_eliminar_campo_vacio ?>", Basic.post);
            }
            input.attr("disabled", true);
        });
        $("#submit-localizacion").on("click", function(e){
            var input = $(".class-sub_categoria").find("[name=nombre_sub_categoria]");
            if (input.attr("disabled") == "disabled"){
                e.preventDefault();
                General.mostrar_alerta("<?= Message::alerta_no_accion_realizar ?>");
            }
        });
    });
    
    var Basic = {
        obtener_subcategorias: function(){
            var formdata = new FormData($("form-categorias").get([0]));
            General.enviar_ajax({
                ruta: "<?= Settings::WEB_HOST_URL ?>basic/obtener_subcategorias",
                formulario: formdata,
                funcion: Basic.asignar_subcategorias
            });
        },
        asignar_subcategorias: function(datos){
            
        },
        obtener_localizacion: function(){
            var formdata = new FormData($("#form-localizaciones").get([0]));
            General.enviar_ajax({
                ruta: "<?= Settings::WEB_HOST_URL ?>basic/obtener_localizacion",
                formulario: formdata,
                funcion: Basic.asignar_subcategorias
            });
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
<section class="panel col-md-6">
    <header class="panel-heading">            
        <h2 class="panel-title"><?= Label::categorias_subcategorias ?></h2>
    </header>
    <form id = "form-categorias" class = "class-categorias">
        <div class="panel-body">
            <div class ="row">                
                <div class="form-group">
                    <label class="col-md-3 control-label"><?= Label::categorias ?></label>
                    <div class="col-md-9">
                        <select class="form-control populate" name = "id_categoria" >
                            <option value = "1"><?= Label::salidas ?></option>
                            <option value = "2"><?= Label::cursos ?></option>
                            <option value = "3"><?= Label::competiciones ?></option>
                        </select>
                    </div>
                </div>         
                <div class="form-group">
                    <label class="col-md-3 control-label"><?= Label::subcategorias ?></label>
                    <div class="col-md-9">
                        <div class="input-group ">                        
                            <select id ="select-sub_categoria" class="form-control populate" name = "id_sub_categoria" >
                                <option value = "2"><?= Label::cursos ?></option>
                            </select>
                            <div class="input-group-btn">
                                <button tabindex="-1" class="btn btn-primary" type="button"><?= Label::acciones ?></button>
                                <button tabindex="-1" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#" class = "nuevo"><i class = "fa fa-plus"></i> <?= Label::nuevo ?></a></li>
                                    <li><a href="#" class = "editar"><i class = "fa fa-pencil"></i> <?= Label::editar ?></a></li>
                                    <li><a href="#" class = "eliminar"><i class = "fa fa-times"></i> <?= Label::eliminar ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-group hidden class-sub_categoria">
                    <label class="control-label"><?= Label::escriba_aqui ?> <span id = "span-categoria-accion" style="text-transform: lowercase"></span></label>
                    <div class="">
                        <input type = "text" class="form-control " placeholder = "<?= Label::subcategoria ?>" name = "nombre_sub_categoria" disabled required 
                               data-msg-required = "<?= Message::alerta_campo_obligatorio ?>">
                    </div>
                </div>                    
            </div>                
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-sm-12 col-sm-offset-5">
                    <button id="submit-categoria" type="submit" class="btn btn-primary"><?= Label::guardar ?></button>
                </div>
            </div>
        </footer>
    </form>    
</section>
<section class="panel col-md-6">
    <header class="panel-heading">        
        <h2 class="panel-title"><?= Label::localizaciones ?></h2>
    </header>
    <form id = "form-localizaciones">
        <input id = "hidden-tabla" type ="hidden" name ="tabla">
        <div class="panel-body">
            <div class ="row">
                <div class="form-group">
                    <label class="col-md-3 control-label"><?= Label::pais ?></label>
                    <div class="col-md-9">
                        <div class="input-group ">                        
                            <select class="form-control populate" name = "pais" required data-bind="<?= Label::pais ?>"
                               data-msg-required = "<?= Message::alerta_campo_obligatorio ?>">
                            </select>
                            <div class="input-group-btn">
                                <button tabindex="-1" class="btn btn-primary" type="button"><?= Label::acciones ?></button>
                                <button tabindex="-1" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#" class = "nuevo"><i class = "fa fa-plus"></i> <?= Label::nuevo ?></a></li>
                                    <li><a href="#" class = "editar"><i class = "fa fa-pencil"></i> <?= Label::editar ?></a></li>
                                    <li><a href="#" class = "eliminar"><i class = "fa fa-times"></i> <?= Label::eliminar ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="form-group">
                    <label class="col-md-3 control-label"><?= Label::provincia ?></label>
                    <div class="col-md-9">
                        <div class="input-group ">                        
                            <select class="form-control populate" name = "estado" required data-bind="<?= Label::provincia ?>"
                               data-msg-required = "<?= Message::alerta_campo_obligatorio ?>">
                            </select>
                            <div class="input-group-btn">
                                <button tabindex="-1" class="btn btn-primary" type="button"><?= Label::acciones ?></button>
                                <button tabindex="-1" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#" class = "nuevo"><i class = "fa fa-plus"></i> <?= Label::nuevo ?></a></li>
                                    <li><a href="#" class = "editar"><i class = "fa fa-pencil"></i> <?= Label::editar ?></a></li>
                                    <li><a href="#" class = "eliminar"><i class = "fa fa-times"></i> <?= Label::eliminar ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><?= Label::poblacion ?></label>
                    <div class="col-md-9">
                        <div class="input-group ">                        
                            <select class="form-control populate" name = "ciudad" required data-bind= "<?= Label::provincia ?>"
                               data-msg-required = "<?= Message::alerta_campo_obligatorio ?>">
                            </select>
                            <div class="input-group-btn">
                                <button tabindex="-1" class="btn btn-primary" type="button"><?= Label::acciones ?></button>
                                <button tabindex="-1" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#" class = "nuevo"><i class = "fa fa-plus"></i> <?= Label::nuevo ?></a></li>
                                    <li><a href="#" class = "editar"><i class = "fa fa-pencil"></i> <?= Label::editar ?></a></li>
                                    <li><a href="#" class = "eliminar"><i class = "fa fa-times"></i> <?= Label::eliminar ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12 hidden class-localizaciones">
                    <label class="control-label"><?= Label::escriba_aqui ?> <span id = "span-localizacion-accion" style="text-transform: lowercase"></span></label>
                    <div class="">
                        <input type = "text" class="form-control " name = "descripcion" disabled required placeholder =""
                               data-msg-required = "<?= Message::alerta_campo_obligatorio ?>">
                    </div>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-sm-12 col-sm-offset-5">
                    <button id="submit-localizaciones" type="submit" class="btn btn-primary"><?= Label::guardar ?></button>
                </div>
            </div>
        </footer>
    </form>
</section>
<?php };
