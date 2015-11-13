<?php 
$this->layout = "./layouts/main_layout.php";
$this->collapsed = true;
$this->active = substr_replace($this->active, "1", -12, 1);
$this->section_title = Label::editar_evento;
$this->routing = array(Label::gestionar_eventos, Label::editar_evento);
$lang = $this->lang;
$content = function() use ($lang){ ?>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2/js/select2.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote.js"></script>     
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/datepicker.<?= $lang ?>.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-ui/jquery-ui.js" type="text/javascript"></script>
    
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/isotope/isotope.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/javascripts/pages/examples.mediagallery.js" type="text/javascript"></script>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2/css/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2-bootstrap-theme/select2-bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-ui/jquery-ui.theme.css" rel="stylesheet" type="text/css"/>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    $(function(){
        $("#checkbox-recurrencia").on("change", function(){
            var enabled = $(this).is(":checked");
            $("#input-recurrencia").attr("disabled", !enabled);
            $("#input-recurrencia_desde").attr("disabled", !enabled);
            $("#input-recurrencia_hasta").attr("disabled", !enabled);
            $("#select-recurrencia").attr("disabled", !enabled);            
        });
        $("[name=ubicacion]").on("click", function(){
            var value = $(this).attr("value") == "true";
            $("#input-encuentro").attr("disabled", value);
            $("#input-encuentro").parents(".form-group").css("display", value ? "block" : "none");
            $("#map").css("display", value ? "block" : "none");
        });
        $("#checkbox-plazas_ilimitadas").on("change", function(){
            var disabled = $(this).is(":checked");
            $("#input-plazas").attr("disabled", disabled);      
        });
        $("#wysiwyg-descripcion").summernote({
            lang : $("#hidden-lang").val(),
            height: 250,
        });
        $("#wysiwyg-terminos").summernote({
            lang : $("#hidden-lang").val(),
            height: 250,
        });
        $('#slider-edad').change(function() {
            var min = parseInt(this.value.split('/')[0], 10);
            var max = parseInt(this.value.split('/')[1], 10);
            
            $('.output2 b.min').text( min );
            $('.output2 b.max').text( max );
        });
        $("#checkbox-restriccion").on("change", function(){
            var enabled = $(this).is(":checked");
            $("#checkbox-edad").attr("disabled", !enabled);
            $("#checkbox-sexo").attr("disabled", !enabled);
            if ($("#checkbox-edad").is(":checked")){
                $("#div-edad").css("display", enabled ? "block" : "none");
            }
            if ($("#checkbox-sexo").is(":checked")){
                $("#radio-femenino").attr("disabled", !enabled);
                $("#radio-masculino").attr("disabled", !enabled);
            }
        });
        $("#checkbox-edad").on("change", function(){
            var enabled = $(this).is(":checked");
            $("#div-edad").css("display", enabled ? "block" : "none");
        });
        $("#checkbox-sexo").on("change", function(){
            var enabled = $(this).is(":checked");
            $("#radio-femenino").attr("disabled", !enabled);
            $("#radio-masculino").attr("disabled", !enabled);
        });      
        $('#modal-upload-link').magnificPopup();
        $("#button-cargar_fotos").on("click", function(){
            $('#modal-upload-link').magnificPopup("open");
        });
        new_info.inicializar_mapa();
    });
    var new_info =  {
        map: null,
        marca: null,
        inicializar_mapa: function() {            
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            new_info.map = new google.maps.Map(mapCanvas, mapOptions);
            google.maps.event.addListener(new_info.map, 'click', function(event) {
                if (new_info.marca == null)
                    new_info.marcar_mapa(event.latLng);
                else 
                    General.mostrar_alerta("<?= Message::alerta_mensaje_solo_una_marca ?>");
                
                
            });     
        },
        marcar_mapa: function(coordenadas){
            var marker = new google.maps.Marker({
                position: coordenadas, 
                map: new_info.map
            });
            new_info.marca = marker;
            google.maps.event.addListener(marker, "rightclick", function (point) { 
                new_info.borrar_marca(); 
            });
            new_info.map.setCenter(coordenadas);
        },
        borrar_marca: function(){
            new_info.marca.setMap(null);
            new_info.marca = null;
        }
    }
</script>
<style>
    #map {
        height: 400px;
    }
</style>
<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
    <div class="content-with-menu-container">
        <div class="inner-menu-toggle">
            <a href="#" class="inner-menu-expand" data-open="inner-menu">
                Show Bar <i class="fa fa-chevron-right"></i>
            </a>
        </div>
            
        <menu id="content-menu" class="inner-menu" role="menu">
            <div class="nano">
                <div class="nano-content">
                    
                    <div class="inner-menu-toggle-inside">
                        <a href="#" class="inner-menu-collapse">
                            <i class="fa fa-chevron-up visible-xs-inline"></i><i class="fa fa-chevron-left hidden-xs-inline"></i>  <?= Label::mostrar_menu ?>
                        </a>
                        <a href="#" class="inner-menu-expand" data-open="inner-menu">
                            <?= Label::ocultar_menu ?> <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                        
                    <div class="inner-menu-content">
                        <button  id ="button-cargar_fotos"  class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md" >
                            <i class="fa fa-upload mr-xs"></i>
                            <?= Label::cargar_fotos ?> 
                        </button>
                            
                        <hr class="separator" />
                            
                    </div>
                    <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
                        <div class="isotope-item document col-sm-12 col-md-12 col-lg-12">                            
                            <h4><?= Label::foto_defecto ?></h4>
                            <div class="thumbnail">
                                <div class="thumb-preview">
                                    <a class="thumb-image" href="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-1.jpg">
                                        <img src="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-1.jpg" class="img-responsive" alt="Project">
                                    </a>
                                    <div class="mg-thumb-options">
                                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                        <div class="mg-toolbar">
                                            <div class="mg-option checkbox-custom checkbox-inline">
                                                <input type="checkbox" id="file_9" value="9">
                                                <label for="file_9"><?= Label::seleccionar ?></label>
                                            </div>
                                            <div class="mg-group pull-right">
                                                <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                    <i class="fa fa-caret-up"></i>
                                                </button>
                                                <ul class="dropdown-menu mg-menu" role="menu">
                                                    <li><a href="#"><i class="fa fa-download"></i> <?= Label::descargar ?></a></li>
                                                    <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mg-title text-weight-semibold">SEO<small>.png</small></h5>
                            </div>
                            <hr>
                            <h4><?= Label::foto_portada ?></h4>
                            <div class="thumbnail">
                                <div class="thumb-preview">
                                    <a class="thumb-image" href="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-1.jpg">
                                        <img src="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-1.jpg" class="img-responsive" alt="Project">
                                    </a>
                                    <div class="mg-thumb-options">
                                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                        <div class="mg-toolbar">
                                            <div class="mg-option checkbox-custom checkbox-inline">
                                                <input type="checkbox" id="file_9" value="9">
                                                <label for="file_9"><?= Label::seleccionar ?></label>
                                            </div>
                                            <div class="mg-group pull-right">
                                                <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                    <i class="fa fa-caret-up"></i>
                                                </button>
                                                <ul class="dropdown-menu mg-menu" role="menu">
                                                    <li><a href="#"><i class="fa fa-download"></i> <?= Label::descargar ?></a></li>
                                                    <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mg-title text-weight-semibold">SEO<small>.png</small></h5>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </menu>
        <div class = "inner-body mg-main">
            <div class="inner-toolbar clearfix">
                <ul>
                    <li>
                        <button type="button" class="btn btn-primary"><i class="fa fa-save m-none"></i> <?= Label::guardar ?></button>
                    </li>
                    <li class="right">
                        <ul class="nav nav-pills nav-pills-primary">
                            <li class="active">
                                <a href="#info" data-toggle="tab"><?= Label::informacion ?></a>
                            </li>
                            <li>
                                <a href="#gallery" data-toggle="tab"><?= Label::galeria ?></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class = "tab-content">
                <div class="panel-body tab-content">
                    <div id="info" class="tab-pane active">
                        <h2 class=""><?= Label::crear_evento ?></h2>
                        <hr>
                        <form id="form" action="" class="form-horizontal">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" name="titulo_evento" class="form-control" placeholder="<?= Label::titulo_evento ?>" 
                                               style = "font-size: 20px; text-align: center"
                                               data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required/>
                                    </div>
                                </div>
                                
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::categoria ?></label>
                                    <div class="col-md-9">
                                        <select class="form-control populate" name = "categoria" >
                                            <option><?= Label::salidas ?></option>
                                            <option><?= Label::cursos ?></option>
                                            <option><?= Label::competiciones ?></option>
                                        </select>
                                    </div>
                                </div>     
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::subcategoria ?></label>
                                    <div class="col-md-9">
                                        <select data-plugin-selectTwo class="form-control populate" name = "subcategoria">
                                            <option><?= Label::salidas ?></option>
                                            <option><?= Label::cursos ?></option>
                                            <option><?= Label::competiciones ?></option>
                                        </select>
                                    </div>
                                </div>     
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::fecha ?></label>
                                    <div class="col-md-9 ">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" name ="fecha"data-plugin-datepicker class="form-control" data-plugin-options = '{ "language": "<?= $lang ?>" }'>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::hora ?></label>
                                    <div class="col-md-9 ">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                            <input type="text" name ="hora"data-plugin-timepicker class="form-control" data-plugin-options='{ "minuteStep": 1 }'> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::fin_registro ?></label>
                                    <div class="col-md-9 ">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" name = "fin_registro_fecha" data-plugin-datepicker class="form-control" data-plugin-options = '{ "language": "<?= $lang ?>" }'>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::hora_tope ?></label>
                                    <div class="col-md-9 ">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                            <input type="text" name = "fin_registro_hora"data-plugin-timepicker class="form-control" data-plugin-options='{ "minuteStep": 1 }'> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-5">
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="checkbox-recurrencia">
                                            <label for="checkbox-recurrencia"><?= Label::es_recurrente ?></label>
                                        </div>
                                    </div>            
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::cada ?></label>
                                    <div class="col-md-4 ">
                                        <input type ="number" name= "recurrencia_cantidad"  id = "input-recurrencia" class = "form-control" min = "1" required disabled>
                                    </div>
                                    <div class="col-md-5 ">
                                        <select id = "select-recurrencia" class="form-control populate" name= "recurrencia_periodo" required disabled>
                                            <option value = "D"><?= Label::dias ?></option>
                                            <option value = "S"><?= Label::semanas ?></option>
                                            <option value = "M"><?= Label::meses ?></option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::desde ?></label>
                                    <div class="col-md-9 ">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" name= "recurrencia_desde"  id ="input-recurrencia_desde"  data-plugin-datepicker class="form-control" data-plugin-options = '{ "language": "<?= $lang ?>" }' disabled>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::hasta ?></label>
                                    <div class="col-md-9 ">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" name= "recurrencia_hasta"  id ="input-recurrencia_hasta" data-plugin-datepicker class="form-control" data-plugin-options = '{ "language": "<?= $lang ?>" }' disabled>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::ubicacion ?></label>
                                    <div class="col-sm-9" style ="padding-top: 7px">
                                        <div class="radio-custom radio-primary" style = "display:inline">
                                            <input id="radio-direccion" name="ubicacion" type="radio" value="true" checked>
                                            <label for="f"><?= Label::direccion ?></label>
                                        </div>&nbsp;&nbsp;&nbsp;
                                        <div class="radio-custom radio-primary" style = "display:inline">
                                            <input id="radio-url" name="ubicacion" type="radio" value="false" >
                                            <label for="m"><?= Label::url ?></label>
                                        </div>            
                                        <label class="error" for="porto_is"></label>
                                    </div>       
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input id = "input-direccion" type="text" name="direccion_url" class="form-control" placeholder="<?= Label::direccion_url ?>" 
                                               data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input id = "input-encuentro" type="text" name="lugar_encuentro" class="form-control" placeholder="<?= Label::lugar_encuentro ?>" 
                                               data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required/>
                                    </div>
                                </div>        
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div id="map"></div>
                                    </div>
                                </div> 
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::plazas ?></label>
                                    <div class="col-md-6">
                                        <input type ="number" id = "input-plazas" name = "plazas" class = "form-control" min = "1" required>              
                                    </div>
                                    <div class="col-md-3">
                                        <div class="checkbox-custom checkbox-default" style ="display:inline-block; line-height: 36px;">
                                            <input type="checkbox" id="checkbox-plazas_ilimitadas">
                                            <label for="checkbox-plazas_ilimitadas"><?= Label::ilimitadas ?></label>
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><b><?= Label::precio ?></b></label>
                                    <div class="col-md-6">
                                        <input type ="text" name = "precio" class = "form-control" required> 
                                    </div>
                                    <div class="col-md-3">          
                                        <label style ="line-height: 36px;"><?= Label::signo_moneda ?></label>
                                    </div>
                                </div>     
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::organizador ?></label>
                                    <div class="col-md-9">
                                        <select name = "organizador" class="form-control populate" >
                                            <option><?= Label::salidas ?></option>
                                            <option><?= Label::cursos ?></option>
                                            <option><?= Label::competiciones ?></option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="form-group col-sm-6">
                                    <label class="col-md-3 control-label"><?= Label::jurado ?></label>
                                    <div class="col-md-9">
                                        <input type ="text" name = "jurado" class = "form-control" required> 
                                    </div>
                                </div>  
                                <div class="form-group col-sm-12">
                                    <label class="control-label"><?= Label::resumen ?></label>
                                    <textarea name = "resumen" class = "form-control" required></textarea> 
                                    
                                </div> 
                                <div class="form-group col-sm-12">
                                    <label class="control-label"><?= Label::descripcion ?></label>
                                    <div class="compose">
                                        <div id="wysiwyg-descripcion" class="compose-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkbox-custom checkbox-default" >
                                        <input type="checkbox" id="checkbox-restriccion">
                                        <label for="checkbox-restricciones"><?= Label::restricciones ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="col-md-3">
                                        <div class="checkbox-custom checkbox-default control-label" style ="display:inline-block; line-height: 36px;">
                                            <input type="checkbox" id="checkbox-edad" disabled>
                                            <label for="checkbox-edad"><?= Label::edad ?></label>
                                        </div>
                                    </div>     
                                    <div id = "div-edad" class="col-md-9" style = "display:none">
                                        <div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "values": [ 25, 75 ], "range": true, "max": 100, "min": 1 }' data-plugin-slider-output="#slider-edad">
                                            <input id="slider-edad" name = "edad" type="hidden" value="25, 75" />
                                        </div>
                                        <p class="output2 text-center text-lowercase"><?= Label::el_minimo_es ?>: <b class="min">25</b> <?= Label::y_el_maximo_es ?>:<b class="max">75</b></p>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="col-md-3">
                                        <div class="checkbox-custom checkbox-default control-label" style ="display:inline-block; line-height: 36px;">
                                            <input type="checkbox" id="checkbox-sexo" disabled>
                                            <label for="checkbox-sexo"><?= Label::sexo ?></label>
                                        </div>
                                    </div>     
                                    <div class="col-sm-9">
                                        <div class="radio-custom radio-primary">
                                            <input id="radio-femenino" name="sexo" type="radio" value="f" disabled>
                                            <label for="f"><?= Label::femenino ?></label>
                                        </div>
                                        <div class="radio-custom radio-primary">
                                            <input id="radio-masculino" name="sexo" type="radio" value="m" disabled checked>
                                            <label for="m"><?= Label::masculino ?></label>
                                        </div>            
                                        <label class="error" for="porto_is"></label>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="control-label"><?= Label::terminos_condiciones ?></label>
                                    <div class="compose">
                                        <div id="wysiwyg-terminos" class="compose-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox-custom checkbox-default" >
                                        <input type="checkbox" name ="mostrar_comentarios" id="checkbox-comentarios">
                                        <label for="checkbox-comentarios"><?= Label::mostrar_comentarios ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox-custom checkbox-default" >
                                        <input type="checkbox" name ="mostrar_inscritos" id="checkbox-inscritos">
                                        <label for="checkbox-inscritos"><?= Label::mostrar_inscritos ?></label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="gallery" class="tab-pane">
                        <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
                            <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        <a class="thumb-image" href="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-1.jpg">
                                            <img src="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-1.jpg" class="img-responsive" alt="Project">
                                        </a>
                                        <div class="mg-thumb-options">
                                            <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                            <div class="mg-toolbar">
                                                <div class="mg-option checkbox-custom checkbox-inline">
                                                    <input type="checkbox" id="file_1" value="1">
                                                    <label for="file_1"><?= Label::seleccionar ?></label>
                                                </div>
                                                <div class="mg-group pull-right">
                                                    <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                        <i class="fa fa-caret-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu mg-menu" role="menu">
                                                        <li><a href="#"><i class="fa fa-download"></i> <?= Label::descargar ?></a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mg-title text-weight-semibold">SEO<small>.png</small></h5>
                                </div>
                            </div>
                            <div class="isotope-item col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        <a class="thumb-image" href="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-2.jpg">
                                            <img src="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-2.jpg" class="img-responsive" alt="Project">
                                        </a>
                                        <div class="mg-thumb-options">
                                            <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                            <div class="mg-toolbar">
                                                <div class="mg-option checkbox-custom checkbox-inline">
                                                    <input type="checkbox" id="file_2" value="1">
                                                    <label for="file_2"><?= Label::seleccionar ?></label>
                                                </div>
                                                <div class="mg-group pull-right">
                                                    <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                        <i class="fa fa-caret-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu mg-menu" role="menu">
                                                        <li><a href="#"><i class="fa fa-download"></i> <?= Label::descargar ?></a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mg-title text-weight-semibold">Blog<small>.png</small></h5>
                                </div>
                            </div>
                            <div class="isotope-item video col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        <a class="thumb-image" href="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-5.jpg">
                                            <img src="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-5.jpg" class="img-responsive" alt="Project">
                                        </a>
                                        <div class="mg-thumb-options">
                                            <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                            <div class="mg-toolbar">
                                                <div class="mg-option checkbox-custom checkbox-inline">
                                                    <input type="checkbox" id="file_3" value="1">
                                                    <label for="file_3"><?= Label::seleccionar ?></label>
                                                </div>
                                                <div class="mg-group pull-right">
                                                    <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                        <i class="fa fa-caret-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu mg-menu" role="menu">
                                                        <li><a href="#"><i class="fa fa-download"></i> <?= Label::descargar ?></a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mg-title text-weight-semibold">Friends<small>.png</small></h5>
                                </div>
                            </div>
                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        <a class="thumb-image" href="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-4.jpg">
                                            <img src="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-4.jpg" class="img-responsive" alt="Project">
                                        </a>
                                        <div class="mg-thumb-options">
                                            <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                            <div class="mg-toolbar">
                                                <div class="mg-option checkbox-custom checkbox-inline">
                                                    <input type="checkbox" id="file_4" value="1">
                                                    <label for="file_4"><?= Label::seleccionar ?></label>
                                                </div>
                                                <div class="mg-group pull-right">
                                                    <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                        <i class="fa fa-caret-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu mg-menu" role="menu">
                                                        <li><a href="#"><i class="fa fa-download"></i> <?= Label::descargar ?></a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mg-title text-weight-semibold">Life<small>.png</small></h5>
                                </div>
                            </div>
                            <div class="isotope-item video col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        <a class="thumb-image" href="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-5.jpg">
                                            <img src="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-5.jpg" class="img-responsive" alt="Project">
                                        </a>
                                        <div class="mg-thumb-options">
                                            <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                            <div class="mg-toolbar">
                                                <div class="mg-option checkbox-custom checkbox-inline">
                                                    <input type="checkbox" id="file_5" value="1">
                                                    <label for="file_5"><?= Label::seleccionar ?></label>
                                                </div>
                                                <div class="mg-group pull-right">
                                                    <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                        <i class="fa fa-caret-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu mg-menu" role="menu">
                                                        <li><a href="#"><i class="fa fa-download"></i> <?= Label::descargar ?></a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mg-title text-weight-semibold">Poetry<small>.png</small></h5>
                                </div>
                            </div>
                            <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        <a class="thumb-image" href="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-6.jpg">
                                            <img src="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-6.jpg" class="img-responsive" alt="Project">
                                        </a>
                                        <div class="mg-thumb-options">
                                            <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                            <div class="mg-toolbar">
                                                <div class="mg-option checkbox-custom checkbox-inline">
                                                    <input type="checkbox" id="file_6" value="1">
                                                    <label for="file_6"><?= Label::seleccionar ?></label>
                                                </div>
                                                <div class="mg-group pull-right">
                                                    <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                        <i class="fa fa-caret-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu mg-menu" role="menu">
                                                        <li><a href="#"><i class="fa fa-download"></i> <?= Label::descargar ?></a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mg-title text-weight-semibold">Fun<small>.png</small></h5>
                                </div>
                            </div>
                            <div class="isotope-item col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        <a class="thumb-image" href="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-7.jpg">
                                            <img src="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-7.jpg" class="img-responsive" alt="Project">
                                        </a>
                                        <div class="mg-thumb-options">
                                            <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                            <div class="mg-toolbar">
                                                <div class="mg-option checkbox-custom checkbox-inline">
                                                    <input type="checkbox" id="file_7" value="1">
                                                    <label for="file_7"><?= Label::seleccionar ?></label>
                                                </div>
                                                <div class="mg-group pull-right">
                                                    <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                        <i class="fa fa-caret-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu mg-menu" role="menu">
                                                        <li><a href="#"><i class="fa fa-download"></i> <?= Label::descargar ?></a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mg-title text-weight-semibold">Family<small>.png</small></h5>
                                </div>
                            </div>
                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        <a class="thumb-image" href="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-1.jpg">
                                            <img src="<?= Settings::WEB_HOST_URL ?>assets/images/projects/project-1.jpg" class="img-responsive" alt="Project">
                                        </a>
                                        <div class="mg-thumb-options">
                                            <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                            <div class="mg-toolbar">
                                                <div class="mg-option checkbox-custom checkbox-inline">
                                                    <input type="checkbox" id="file_8" value="1">
                                                    <label for="file_8"><?= Label::seleccionar ?></label>
                                                </div>
                                                <div class="mg-group pull-right">
                                                    <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                        <i class="fa fa-caret-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu mg-menu" role="menu">
                                                        <li><a href="#"><i class="fa fa-download"></i> <?= Label::descargar ?></a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mg-title text-weight-semibold">Hapiness<small>.png</small></h5>
                                </div>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id ="modal-upload-link" class ="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-default" href="#modal-upload" style ="display:none"></a>
    <div id ="modal-upload" class ="zoom-anim-dialog mfp-hide" >
        <div id="modal-info" class="modal-block modal-block-info" style = "max-width: inherit !Important;">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?= Label::galeria ?></h2>
                </header>
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-text">
                            <iframe src ="<?= Settings::WEB_HOST_URL ?>manage_events/file_upload" frameborder = 0 width = "100%" height="300px"></iframe> 
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-info modal-confirm"><?= Label::aceptar ?></button>
                        </div>
                    </div>
                </footer>
            </section>
        </div>
    </div>
</section>
<?php }; 