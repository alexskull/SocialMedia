<?php 
$this->layout = "./layouts/main_layout.php";
$this->collapsed = true;
$this->active = substr_replace($this->active, "1", -12, 1);
$this->section_title = Label::editar_evento;
$this->routing = array(Label::gestionar_eventos, Label::editar_evento);
$lang = $this->lang;
$model = $this->model->Manage_events->manage_events;
$content = function() use ($lang, $model){ ?>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/jquery.validate.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/additional-methods.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2/js/select2.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2/js/i18n/<?= $lang ?>.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote.js"></script>     
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/datepicker.<?= $lang ?>.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-ui/jquery-ui.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/isotope/isotope.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/javascripts/pages/examples.mediagallery.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-maskedinput/jquery.maskedinput.js" type="text/javascript"></script>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2/css/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/select2-bootstrap-theme/select2-bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-ui/jquery-ui.theme.css" rel="stylesheet" type="text/css"/>
<script src="https://maps.googleapis.com/maps/api/js"></script>

<style>
    #map {
        height: 400px;
    }
</style>

<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
    <div class="content-with-menu-container">
        <div class="inner-menu-toggle">
            <a href="#" class="inner-menu-expand" data-open="inner-menu">
                <?= Label::mostrar_menu ?><i class="fa fa-chevron-right"></i>
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
                    <?php if(isset($model->event_id)){   ?>
                    <div class="inner-menu-content">
                        <button  id ="button-cargar_fotos"  class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md" >
                            <i class="fa fa-upload mr-xs"></i>
                            <?= Label::cargar_fotos ?> 
                        </button>
                            
                        <hr class="separator" />
                            
                    </div>
                    <?php }   ?>
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
                                            <div class="mg-group pull-right">
                                                <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                    <i class="fa fa-caret-up"></i>
                                                </button>
                                                <ul class="dropdown-menu mg-menu" role="menu">
                                                    <li><a href="#"><i class="fa fa-trash-o"></i> <?= Label::quitar ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mg-title text-weight-semibold"><?= Label::perfil ?><small>.format</small></h5>
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
                                <h5 class="mg-title text-weight-semibold"><?= Label::portada ?><small>.format</small></h5>
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
                        <button type="button" class="btn btn-primary" id="button_guardar_evento"><i class="fa fa-save m-none"></i> <?= Label::guardar ?></button>
                    </li>
                    <li class="right">
                        <ul class="nav nav-pills nav-pills-primary">
                            <li class="active">
                                <a href="#info" data-toggle="tab"><?= Label::informacion ?></a>
                            </li>
                            <?php if(isset($model->event_id)){ ?>
                            <li>
                                <a href="#gallery" data-toggle="tab"><?= Label::galeria ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class = "tab-content">
                <div class="panel-body tab-content">
                    <div id="info" class="tab-pane active">
                        <h2 class=""><?= isset($model->event_id) ? Label::editar_evento : Label::crear_evento ?></h2>
                        <hr>
                        <form id="form_eventos"  class="form-horizontal">
                            <input id="hidden-id" type ="hidden" name ="event_id">
                            <input id="hidden-marcas" type="hidden" value="0" />
                            <input id="hidden-latitud" name="latitud" type="hidden"/>
                            <input id="hidden-longitud" name="longitud" type="hidden"/>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" name="titulo_evento" id="input-titulo_evento" class="form-control"
                                               placeholder="<?= Label::titulo_evento ?>"
                                               style = "font-size: 20px; text-align: center"
                                               data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"  required/>
                                    </div>
                                </div>
                                <div class ="row">
                                    <div class="form-group col-sm-6">
                                        <label class="col-md-3 control-label"><?= Label::categoria ?></label>
                                        <div class="col-md-9">
                                            <select id = "select-categoria" class="form-control populate" name = "categoria" >
                                                <option value = ""><?= Label::seleccione ?>...</option>
                                                <option value = 1><?= Label::salidas ?></option>
                                                <option value = 2><?= Label::cursos ?></option>
                                                <option value = 3><?= Label::competiciones ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="col-md-3 control-label"><?= Label::subcategoria ?></label>
                                        <div class="col-md-9">
                                            <select id = "select-sub_categorias"  data-plugin-selectTwo data-plugin-options='{ "placeholder": "<?= Label::seleccione ?>...", "allowClear": true, "language": "<?= $lang ?>" }'
                                                    class="form-control populate" name = "subcategoria">
                                                <option value = ""><?= Label::seleccione ?>...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class ="row">
                                    <div class="form-group col-sm-6">
                                        <label class="col-md-3 control-label"><?= Label::fecha ?></label>
                                        <div class="col-md-9 ">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="text" name ="fecha" id="input-fecha" data-plugin-masked-input=""
                                                       data-input-mask="99/99/9999" data-plugin-datepicker class="form-control" data-plugin-options = '{ "language": "<?= $lang ?>" }'
                                                       data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required>
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
                                                <input id = "input-hora" type="text" name ="hora"data-plugin-timepicker class="form-control"
                                                       data-plugin-masked-input="" data-input-mask="99:99" data-plugin-options='{ "minuteStep": 1, "showMeridian": false }'
                                                       data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class ="row">
                                    <div class="form-group col-sm-6">
                                        <label class="col-md-3 control-label"><?= Label::fin_registro ?></label>
                                        <div class="col-md-9 ">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="text" name = "fecha_fin_registro" id="input-fecha_fin_registro"
                                                       data-plugin-masked-input="" data-input-mask="99/99/9999" data-plugin-datepicker class="form-control" data-plugin-options = '{ "language": "<?= $lang ?>" }'
                                                       data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required>
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
                                                <input id = "input-hora_fin_registro" type="text" name = "fin_registro_hora" data-plugin-masked-input=""
                                                       data-input-mask="99:99" data-plugin-timepicker class="form-control" data-plugin-options='{ "minuteStep": 1, "showMeridian": false }'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class ="row">
                                    <div class="form-group col-sm-6">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-5">
                                            <div class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="checkbox-recurrencia">
                                                <label for="checkbox-recurrencia"><?= Label::es_recurrente ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6"></div>
                                </div>
                                <div class ="row">
                                    <div class="form-group col-sm-6">
                                        <label class="col-md-3 control-label"><?= Label::cada ?></label>
                                        <div class="col-md-4 ">
                                            <input type ="number" name="recurrencia_cantidad"  id="input-recurrencia" class = "form-control" min = "1"
                                                   required disabled data-msg-required = "<?= Message::alerta_campo_obligatorio ?>">
                                        </div>
                                        <div class="col-md-5 ">
                                            <select id="select-recurrencia" class="form-control populate" name= "recurrencia_periodo" required disabled>
                                                <option value = "D"><?= Label::dias ?></option>
                                                <option value = "S"><?= Label::semanas ?></option>
                                                <option value = "M"><?= Label::meses ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6"></div>
                                </div>
                                <div class ="row">
                                    <div class="form-group col-sm-6">
                                        <label class="col-md-3 control-label"><?= Label::desde ?></label>
                                        <div class="col-md-9 ">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="text" name= "recurrencia_desde"  id ="input-recurrencia_desde"
                                                       data-plugin-masked-input="" data-input-mask="99/99/9999"
                                                       data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required
                                                       data-plugin-datepicker class="form-control" data-plugin-options = '{ "language": "<?= $lang ?>" }' disabled>
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
                                                <input type="text" name= "recurrencia_hasta"  id ="input-recurrencia_hasta"
                                                       data-plugin-masked-input="" data-input-mask="99/99/9999"
                                                       data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required
                                                       data-plugin-datepicker class="form-control" data-plugin-options = '{ "language": "<?= $lang ?>" }' disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label"><?= Label::pagina_web ?></label>
                                        <div class="">
                                            <input id="input-pagina_web" type="url" name="pagina_web" class="form-control" placeholder="<?= Label::pagina_web ?>"
                                                   data-msg-url = "<?= Message::alerta_campo_url ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class = "row">
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
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label"><?= Label::pais ?></label>
                                        <div>
                                            <select id = "select-pais" class="form-control populate localizaciones" name = "pais"
                                                    data-plugin-selectTwo data-plugin-options='{ "placeholder": "<?= Label::seleccione ?>...", "allowClear": true, "language": "<?= $lang ?>" }'
                                                    data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required>
                                                <option value = ""><?= Label::seleccione ?>...</option>
                                            </select>
                                        </div>
                                    </div><br>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label"><?= Label::provincia ?></label>
                                        <div>
                                            <select id = "select-estado" class="form-control populate localizaciones" name = "estado"
                                                    data-plugin-selectTwo data-plugin-options='{ "placeholder": "<?= Label::seleccione ?>...", "allowClear": true, "language": "<?= $lang ?>" }'
                                                    data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required disabled>
                                                <option value = ""><?= Label::seleccione ?>...</option>
                                            </select>
                                        </div>
                                    </div><br>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label"><?= Label::poblacion ?></label>
                                        <div>
                                            <select id = "select-ciudad" class="form-control populate localizaciones" name = "ciudad"
                                                    data-plugin-selectTwo data-plugin-options='{ "placeholder": "<?= Label::seleccione ?>...", "allowClear": true, "language": "<?= $lang ?>" }'
                                                    data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required disabled>
                                                <option value = ""><?= Label::seleccione ?>...</option>
                                            </select>
                                        </div>
                                    </div><br>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label"><?= Label::direccion_url ?></label>
                                        <div class="">
                                            <input id="input-direccion" type="text" name="direccion_url" class="form-control" placeholder="<?= Label::direccion_url ?>"
                                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label"><?= Label::lugar_encuentro ?></label>
                                        <div class="">
                                            <input id="input-encuentro" type="text" name="lugar_encuentro" class="form-control" placeholder="<?= Label::lugar_encuentro ?>"
                                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required/>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div id="map"></div>
                                    </div>
                                </div> 
                                <div class ="row">
                                    <div class="form-group col-sm-6">
                                        <label class="col-md-3 control-label"><?= Label::plazas ?></label>
                                        <div class="col-md-6">
                                            <input type ="number" id="input-plazas" name = "plazas" class = "form-control" min = "1" data-msg-required = "<?= Message::alerta_campo_obligatorio ?>" required>
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
                                            <input type ="text" name="precio" id="input-precio" class = "form-control" pattern = "[0-9]*\.?[0-9]+$"
                                                   data-msg-pattern = "<?= Message::alerta_campo_flotantes ?>"
                                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label style ="line-height: 36px;"><?= Label::signo_moneda ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class ="row">
                                    <div class="form-group col-sm-6">
                                        <label class="col-md-3 control-label"><?= Label::organizador ?></label>
                                        <div class="col-md-6">
                                            <select id = "select-organizador" name = "organizador" class="form-control populate" required
                                                    data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"
                                                    data-plugin-selectTwo data-plugin-options='{ "placeholder": "<?= Label::seleccione ?>...", "allowClear": true, "language": "<?= $lang ?>" }' >
                                                <option value = ""><?= Label::seleccione ?>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="checkbox-custom checkbox-default" style ="display:inline-block; line-height: 36px;">
                                                <input type="checkbox" id="checkbox-sin_organizador">
                                                <label for="checkbox-sin_organizador"><?= Label::sin_organizador ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="col-md-3 control-label"><?= Label::jurado ?></label>
                                        <div class="col-md-9">
                                            <input type ="text" name="jurado" id="input-jurado" class = "form-control" data-msg-required = "<?= Message::alerta_campo_obligatorio ?>" required disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="control-label"><?= Label::resumen ?></label>
                                    <textarea name="resumen" id="textarea-resumen" class = "form-control" data-msg-required = "<?= Message::alerta_campo_obligatorio ?>" required></textarea>

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
                                        <input type="checkbox" id="checkbox-restriccion" name = "restricciones">
                                        <label for="checkbox-restricciones"><?= Label::restricciones ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="col-md-3">
                                        <div class="checkbox-custom checkbox-default control-label" style ="display:inline-block; line-height: 36px;">
                                            <input type="checkbox" id="checkbox-edad" name = "redad" disabled>
                                            <label for="checkbox-edad"><?= Label::edad ?></label>
                                        </div>
                                    </div>     
                                    <div id = "div-edad" class="col-md-9" style = "display:none">
                                        <div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "value": 18, "range": "min", "max": 100 }' data-plugin-slider-output="#slider-edad">
                                            <input id="slider-edad" name = "edad" type="hidden" value="18" />
                                        </div>
                                        <p class="output text-center text-lowercase"><?= Label::edad_permitida_mayor_a ?>: <b class="min">18</b> </p>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="col-md-3">
                                        <div class="checkbox-custom checkbox-default control-label" style ="display:inline-block; line-height: 36px;">
                                            <input type="checkbox" id="checkbox-sexo" disabled name = "rsexo">
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
                                        <input type="checkbox" name ="permite_comentarios" id="checkbox-permite_comentarios">
                                        <label for="checkbox-comentarios"><?= Label::permitir_comentarios ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox-custom checkbox-default" >
                                        <input type="checkbox" name ="mostrar_comentarios" id="checkbox-mostrar_comentarios">
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
                    <?php if(isset($model->event_id)){ ?>
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
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($model->event_id)){   ?>
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
    <?php }   ?>
</section>
<script>
    $(function(){
        $("#checkbox-recurrencia").on("change", function(){
            var enabled = $(this).is(":checked");
            $("#input-recurrencia").attr("disabled", !enabled);
            $("#input-recurrencia_desde").attr("disabled", !enabled);
            $("#input-recurrencia_hasta").attr("disabled", !enabled);
            $("#select-recurrencia").attr("disabled", !enabled);            
        });
        $("#checkbox-sin_organizador").on("change", function(){
            var enabled = $(this).is(":checked");
            $("#select-organizador").attr("disabled", enabled);            
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
            $('.output b').text( this.value );
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
        $("#form_eventos").validate(Events.opciones_validacion);
        $("#button_guardar_evento").on("click", function(e){
            e.preventDefault();
            validarfom.validar();
        });
        $("#select-categoria").on("change", function(){
            var formdata = new FormData();
            formdata.append("id_categoria", $(this).val());
            General.enviar_ajax({
                ruta: "<?= Settings::WEB_HOST_URL ?>basic/obtener_subcategorias",
                formulario: formdata,
                funcion: Events.asignar_subcategorias
            });
            $("#input-jurado").attr("disabled", $(this).val() != "3");
        });
        $(".localizaciones").on("change", function(){
            if ($(this).val() != ""){
                Events.obtener_localizaciones($(this).attr("name"), $(this).val());  
                Events.deshabilitar_localizaciones($(this));
            }
        });
        Events.inicializar_usuarios();
        
        
        
        <?php if(isset($model->event_id)){ ?>
        /*Si es editar*/
        $("#hidden-id").val("<?= $model->event_id ?>");
        $("#hidden-latitud").val("<?= $model->latitud ?>");
        $("#hidden-longitud").val("<?= $model->longitud ?>");        
        
        $("#input-titulo_evento").val("<?= $model->event_name ?>");
        $("#input-fecha").val("<?= $model->fecha_evento ?>");   
        $("#input-hora").val("<?= $model->hora_evento ?>");
    
        $("#input-fecha_fin_registro").val("<?= $model->fecha_fin_registro ?>");   
        $("#input-hora_fin_registro").val("<?= $model->hora_fin_registro ?>");
        $("#input-direccion").val("<?= $model->direccion ?>");
        $("#input-encuentro").val("<?= $model->lugar_encuentro ?>"); 
        $("#input-plazas").val("<?= $model->plazas ?>");
        $("#input-precio").val("<?= $model->precio ?>");
        $("#input-jurado").val("<?= $model->jurado ?>");
        $("#input-pagina_web").val("<?= $model->pagina_web ?>");
        
        $("#textarea-resumen").val("<?= $model->event_summary ?>");
        
        $("#wysiwyg-descripcion").code("<?= $model->event_description ?>");
        $("#wysiwyg-terminos").code("<?= $model->terminos_condiciones ?>");
        
        $("#select-categoria").val("<?= $model->id_categoria ?>");
        $("#select-ciudad").attr("disabled", false);
        $("#select-estado").attr("disabled", false);
        
        
        Events.asignar_subcategorias(
            $.parseJSON('<?= $model->opciones_subcategorias ?>'), 
            "<?= $model->id_sub_categoria ?>"); 
        Events.asignar_localizacion(
            $.parseJSON('<?= $model->opciones_pais ?>'), "pais",
            "<?= $model->pais_id ?>");
        Events.asignar_localizacion(
            $.parseJSON('<?= $model->opciones_estado ?>'), "estado",
            "<?= $model->estado_id ?>");  
        Events.asignar_localizacion(
            $.parseJSON('<?= $model->opciones_ciudad ?>'), "ciudad",
            "<?= $model->ciudad_id ?>");  
    
        <?php if(isset($model->lugar_encuentro)){ ?>
            $("#radio-url").trigger("click");
        <?php } if (isset($model->recurrencia)){ ?>
            $("#input-recurrencia").attr("disabled", false);
            $("#select-recurrencia").attr("disabled", false);
            $("#input-recurrencia_desde").attr("disabled", false);
            $("#input-recurrencia_hasta").attr("disabled", false);
            
            $("#input-recurrencia").val("<?= $model->recurrencia ?>");
            $("#select-recurrencia").val("<?= $model->recurrencia_periodo ?>");
            $("#input-recurrencia_desde").val("<?= $model->recurrencia_desde ?>");
            $("#input-recurrencia_hasta").val("<?= $model->recurrencia_hasta ?>");
        <?php } if (!isset($model->plazas)){?>    
            $("#checkbox-plazas_ilimitadas").trigger("click");
        <?php } if (isset($model->usuario_organizador)){?>  
            $("#select-organizador option[value=<?= $model->usuario_organizador ?>]").attr("selected", true);            
        <?php } else {?>     
            $("#checkbox-sin_organizador").trigger("click");
        <?php } if (isset($model->edad_recomendada) || isset($model->sexo_recomendado)) { ?>  
            $("#checkbox-restriccion").trigger("click");
        <?php } if (isset($model->edad_recomendada)) { ?>  
            $("#checkbox-edad").trigger("click");
            $("#slider-edad").parent().attr("data-plugin-options", '{ "value": <?= $model->edad_recomendada ?>, "range": "min", "max": 100 }');                        
            $("#slider-edad").val("<?= $model->edad_recomendada ?>");
            $(".output b").html("<?= $model->edad_recomendada ?>");
        <?php } if (isset($model->sexo_recomendado)) { ?>     
            $("#checkbox-sexo").trigger("click");
            "<?= $model->sexo_recomendado ?>" == "f" ? $("#radio-femenino").trigger("click") : $("#radio-masculino").trigger("click");
        <?php } if ($model->permite_comentarios == 1) { ?>  
            $("#checkbox-permite_comentarios").trigger("click");
        <?php } if ($model->mostrar_comentarios == 1) { ?>  
            $("#checkbox-mostrar_comentarios").trigger("click");
        <?php } if ($model->mostrar_inscritos == 1) { ?>     
            $("#checkbox-inscritos").trigger("click");
        <?php } ?> 
        
        
        
        <?php }  else { ?>
        
        Events.obtener_localizaciones("", "");
        <?php } ?>
        Events.inicializar_mapa();    
    });
    var Events =  {
        map: null,
        marca: null,
        inicializar_mapa: function() {
            
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            Events.map = new google.maps.Map(mapCanvas, mapOptions);
            google.maps.event.addListener(Events.map, 'click', function(event) {
                if (Events.marca == null)
                    Events.marcar_mapa(event.latLng);
                else 
                    General.mostrar_alerta("<?= Message::alerta_mensaje_solo_una_marca ?>");                
                
            });     
            if ($("#hidden-latitud").val() != ""){
                var latitud = $("#hidden-latitud").val();
                var longitud = $("#hidden-longitud").val();
                var punto = new google.maps.LatLng(latitud, longitud);
                Events.marcar_mapa(punto);
            }
        },
        marcar_mapa: function(coordenadas){
            var marker = new google.maps.Marker({
                position: coordenadas, 
                map: Events.map
            });
            Events.marca = marker;
            google.maps.event.addListener(marker, "rightclick", function (point) { 
                Events.borrar_marca(); 
            });
            Events.map.setCenter(coordenadas);            
            $("#hidden-marcas").val("1");
            $("#hidden-latitud").val(coordenadas.lat());
            $("#hidden-longitud").val(coordenadas.lng());
        },
        borrar_marca: function(){
            Events.marca.setMap(null);
            Events.marca = null;
            $("#hidden-marcas").val("0");
        },
        opciones_validacion: {
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
        asignar_subcategorias: function(data, selected){
            var opciones = General.crear_options(data, "id_sub_categoria", "nombre_sub_categoria", true, "<?= Label::seleccione ?>...", selected);
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
                funcion: Events.asignar_localizacion,
                indice: tabla
            });
        },
        asignar_localizacion: function(data, indice, selected){
            var opciones = General.crear_options(data, indice+"_id", "descripcion", true, "<?= Label::seleccione ?>...", selected);
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
        inicializar_usuarios: function(){
            var adm = $.parseJSON('<?= $model->usuarios->ADM ?>');
            var jde = $.parseJSON('<?= $model->usuarios->JDE ?>');
            var ode = $.parseJSON('<?= $model->usuarios->ODE ?>');
            
            var optgroup = "<optgroup label='{0}'>{1}</optgroup>";
            var input = $("#select-organizador");
            var opciones = "";    
            
            input.html("");
            
            opciones = General.crear_options(adm, "user_id", "nombres", false);             
            if (opciones != "") input.append(General.format(optgroup,"<?= Label::administradores ?>" ), opciones);
            opciones = General.crear_options(jde, "user_id", "nombres", false);             
            if (opciones != "") input.append(General.format(optgroup,"<?= Label::jefe_equipo ?>" ), opciones);
            opciones = General.crear_options(ode, "user_id", "nombres", false);             
            if (opciones != "") input.append(General.format(optgroup,"<?= Label::organizador_eventos ?>" ), opciones);
        },
        post: function(respuesta){
            if (respuesta){
                var formdata = new FormData($("form").get([0]));
                formdata.append("descripcion", $.trim($("#wysiwyg-descripcion").code()));
                formdata.append("terminos", $.trim($("#wysiwyg-terminos").code()));
                var id = $("#hidden-id").val();
                id = id == "" ? "" : "/"+id;
                General.enviar_ajax({
                    ruta: "<?= Settings::WEB_HOST_URL ?>manage_events/editar_evento"+id,
                    formulario: formdata,
                    funcion: Events.resultado_post,
                    indice: id
                });
            }
        },
        resultado_post: function(data, indice){
            if (data == true){
                General.mostrar_info("<?= Message::info_operacion_exitosa ?>" 
                <?php if(!isset($model->event_id)){ ?>                
                    , function(){
                        location.href = id;
                    }
                <?php } ?>
                );
            }
            
        }
    }    
    var validarfom = {
        validar : function(){         
            var form = $("#form_eventos");
            var es_valido = form.valid();
            form.unbind("submit");
            if (es_valido) {                
                var resultado = validarfom.validarcampos();
                if(resultado){
                    General.mostrar_confirmacion("<?= Message::confirmacion_gestionar_blog ?>", Events.post);
                }
            }
            else
            { 
                return;
            }
        },
        
        validarcampos:function(){			
            var mensaje = "";
            var result = true;
            
            
            var marcas = parseInt($("#hidden-marcas").val());
            if(marcas==0){
                mensaje += "Debe marcar al menos un punto en el mapa"+"<br>";
                result = false;
            }
            var content_descripcion = $.trim($("#wysiwyg-descripcion").code());
            var content_terminos = $.trim($("#wysiwyg-terminos").code());
            if(content_descripcion.length == 0){
                mensaje += "Debe completar la descripci&oacute;n"+"<br>";
                result = false;
            }
            if(content_terminos.length == 0){
                mensaje += "Debe completar los t&eacute;rminos y condiciones"+"<br>";
                result = false;
            }
            if(mensaje.length > 1){
                General.mostrar_alerta(mensaje);
            }		
            
            return result;
        }
    }
</script>
<?php }; 