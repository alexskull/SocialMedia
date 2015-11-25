<?php 
$this->layout = "./layouts/main_layout.php";
$this->title = Label::configuracion;
$this->active = substr_replace($this->active, "1", -9, 1);
$this->routing = array(Label::configuracion);
$this->section_title = Label::configuracion;
$content = function(){ ?>
<script>
    $(function(){
        $("#form-categorias").on("click", ".nuevo, .editar", function(){
            
            var input = $(".class-sub_categoria").find("[name=nombre_sub_categoria]");
            var select = $("#select-sub_categorias");
            if ($(this).is(".editar")){      
                if (select.val() != "" && select.val() != null) {
                    $(".class-sub_categoria").removeClass("hidden");
                    input.val(select.find("option:selected").html());
                }
                else {
                    General.mostrar_alerta("<?= Message::alerta_editar_campo_vacio ?>");
                }
            }else if ($(this).is(".nuevo")){ 
                select.val("");
                $(".class-sub_categoria").removeClass("hidden");
            }
            input.attr("disabled", false);
            input.focus();
            
            $("#span-categoria-accion").html(
                $(this).is(".nuevo") ? "<?= Label::crear ?>" : "<?= Label::modificar ?>");
        });
        $("#form-categorias ").on("click", ".eliminar", function(){
            var input = $(".class-sub_categoria").find("[name=nombre_sub_categoria]");
            var select = $("#select-sub_categorias");
            if (!$(".class-sub_categoria").hasClass("hidden")) 
                $(".class-sub_categoria").addClass("hidden");
            
            if (select.val() != "" && select.val() != null){
                General.mostrar_confirmacion("<?= Message::confirmacion_gestionar_sub_categorias ?>", Basic.gestionar_categorias);
            }
            else {
                General.mostrar_alerta("<?= Message::alerta_eliminar_campo_vacio ?>");
            }
            input.attr("disabled", true);
        });
        $("#select-categorias").on("change", function(){            
            Basic.obtener_subcategorias();
              
        });   
        $("#select-categorias, #select-sub_categorias").on("change", function(){
            if (!$(".class-sub_categoria").hasClass("hidden")) 
                $(".class-sub_categoria").addClass("hidden");
            $(".class-sub_categoria").find("[name=nombre_sub_categoria]").val("");          
        })
        $("#submit-categoria").on("click", function(e){
            var input = $(".class-sub_categoria").find("[name=nombre_sub_categoria]");
            e.preventDefault();
            if (input.attr("disabled") == "disabled"){                
                General.mostrar_alerta("<?= Message::alerta_no_accion_realizar ?>");
            }
            else{
                if (input.is(":invalid"))
                    General.mostrar_alerta("<?= Message::alerta_campo_configuracion_obligatorio ?>");
                else {
                    Basic.gestionar_categorias();
                }
            }
        });
        $("#form-localizaciones select").on("change", function(){
            if (!$(".class-localizaciones").hasClass("hidden")) 
                $(".class-localizaciones").addClass("hidden");
            $(".class-localizaciones").find("[name=descripcion]").val("");
            Basic.deshabilitar_localizaciones($(this));
            Basic.obtener_localizaciones($(this).attr("name"), $(this).val());
        });
        $("#form-localizaciones").on("click", ".nuevo, .editar", function(){            
            var input = $(".class-localizaciones").find("[name=descripcion]");
            var select = $(this).parents(".form-group").find("select");
            Basic.deshabilitar_localizaciones(select, true);
            if ($(this).is(".editar")){      
                if (select.val() != "" && select.val() != null) {
                    $(".class-localizaciones").removeClass("hidden");
                    input.val(select.find("option:selected").html());
                }
                else {
                    General.mostrar_alerta("<?= Message::alerta_editar_campo_vacio ?>");
                }
            } else if ($(this).is(".nuevo")){ 
                select.val("");
                $(".class-localizaciones").removeClass("hidden");
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
            Basic.deshabilitar_localizaciones(select, true);
            input.val("");
            if (!$(".class-localizaciones").hasClass("hidden")) 
                $(".class-localizaciones").addClass("hidden");
            
            $("#form-localizaciones #hidden-tabla").val(select.attr("name"));
            if (select.val() != "" && select.val() != null) {
                General.mostrar_confirmacion("<?= Message::confirmacion_gestionar_localizacion ?>", Basic.eliminar_localizaciones);           
                $("#span-localizacion-accion").html("<?= Label::eliminar ?>");
            }
            else {
                General.mostrar_alerta("<?= Message::alerta_eliminar_campo_vacio ?>");
            }
            input.attr("disabled", true);
        });
        $("#submit-localizaciones").on("click", function(e){
            e.preventDefault();
            var input = $(".class-localizaciones").find("[name=descripcion]");
            if (input.attr("disabled") == "disabled" && $("#form-localizaciones").find(":invalid").length > 0){                
                General.mostrar_alerta("<?= Message::alerta_no_accion_realizar ?>");
            }
            else{
                if (input.is(":invalid"))
                    General.mostrar_alerta("<?= Message::alerta_campo_configuracion_obligatorio ?>");
                else {
                    Basic.gestionar_localizaciones();
                }
            }
        });
        Basic.obtener_localizaciones("", "");
    });    
    var Basic = {
        eliminar_localizaciones: function(response){
            if (response){
                Basic.gestionar_localizaciones();
            }
        },
        gestionar_localizaciones: function(){
            var formdata = new FormData($("#form-localizaciones").get([0]));
            General.enviar_ajax({
                ruta: "<?= Settings::WEB_HOST_URL ?>basic/gestionar_localizaciones",
                formulario: formdata,
                funcion: Basic.resultado_gestion_localizaciones,
                indice: $("#hidden-tabla").val()
            });
        },
        gestionar_categorias: function(){
            var formdata = new FormData($("#form-categorias").get([0]));
            General.enviar_ajax({
                ruta: "<?= Settings::WEB_HOST_URL ?>basic/gestionar_categorias",
                formulario: formdata,
                funcion: Basic.resultado_gestion_categorias,
            });
        },
        resultado_gestion_localizaciones: function(data, indice){
            if(data == true){
                General.mostrar_info("<?= Message::info_operacion_exitosa ?>");
                Basic.obtener_localizaciones("", "");
                $("#hidden-tabla").val("");
                if (!$(".class-localizaciones").hasClass("hidden")) 
                    $(".class-localizaciones").addClass("hidden");
            }
        },
        resultado_gestion_categorias: function(data){
            if(data == true){
                General.mostrar_info("<?= Message::info_operacion_exitosa ?>");
                Basic.obtener_subcategorias();
                if (!$(".class-sub_categoria").hasClass("hidden")) 
                    $(".class-sub_categoria").addClass("hidden");
            }
        },
        deshabilitar_localizaciones: function (select, acciones){
            if ($(select).val()== "" || acciones === true){
                switch($(select).attr("name")){
                    case "pais": 
                        $("#select-estado").attr("disabled", true);
                        $("#select-ciudad").attr("disabled", true);
                        $("#select-estado").val("");
                        $("#select-ciudad").val("");
                        break;
                    case "estado": 
                        $("#select-ciudad").attr("disabled", true);
                        $("#select-ciudad").val("");
                        break;
                }
            }else{
                switch($(select).attr("name")){
                    case "pais": 
                        $("#select-estado").attr("disabled", false);
                        $("#select-estado").val("");
                        $("#select-ciudad").attr("disabled", true);
                        $("#select-ciudad").val("");
                        break;
                    case "estado": 
                        $("#select-ciudad").attr("disabled", false);
                        $("#select-ciudad").val("");
                        break;
                }
            }
        },
        obtener_subcategorias: function(){
            var formdata = new FormData($("#form-categorias").get([0]));
            General.enviar_ajax({
                ruta: "<?= Settings::WEB_HOST_URL ?>basic/obtener_subcategorias",
                formulario: formdata,
                funcion: Basic.asignar_subcategorias
            });
        },
        asignar_subcategorias: function(data){
            var opciones = General.crear_options(data, "id_sub_categoria", "nombre_sub_categoria", true, "<?= Label::seleccione ?>...");
            $("#select-sub_categorias").html(opciones);
        },
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
                ruta: "<?= Settings::WEB_HOST_URL ?>basic/obtener_localizaciones",
                formulario: formdata,
                funcion: Basic.asignar_localizacion,
                indice: tabla
            });
        },
        asignar_localizacion: function(data, indice){
            var opciones = General.crear_options(data, indice+"_id", "descripcion", true, "<?= Label::seleccione ?>...");
            $("#select-"+indice).html(opciones);
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
                        <select id = "select-categorias" class="form-control populate" name = "id_categoria" >
                            <option value = ''><?= Label::seleccione ?>...</option>
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
                            <select id ="select-sub_categorias" class="form-control populate" name = "id_sub_categoria" >
                                <option value = ''><?= Label::seleccione ?>...</option>
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
                        <input type = "text" class="form-control " placeholder = "<?= Label::subcategoria ?>" name = "nombre_sub_categoria" disabled>
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
    <form id = "form-localizaciones" >
        <input id = "hidden-tabla" type ="hidden" name ="tabla">
        <div class="panel-body">
            <div class ="row">
                <div class="form-group">
                    <label class="col-md-3 control-label"><?= Label::pais ?></label>
                    <div class="col-md-9">
                        <div class="input-group ">                        
                            <select id = "select-pais" class="form-control populate" name = "pais" data-bind="<?= Label::pais ?>" required>
                                <option value = ''><?= Label::seleccione ?>...</option>
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
                            <select id = "select-estado" class="form-control populate" name = "estado" data-bind="<?= Label::provincia ?>" disabled required>
                                <option value = ''><?= Label::seleccione ?>...</option>
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
                            <select id = "select-ciudad" class="form-control populate" name = "ciudad" data-bind= "<?= Label::poblacion ?>" disabled required>
                                <option value = ''><?= Label::seleccione ?>...</option>
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
