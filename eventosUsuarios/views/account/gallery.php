<?php 
$this->layout = "./layouts/main_layout.php";
$this->section_title = Label::galeria_imagenes;
$this->collapsed = true;
$this->routing = array(Label::usuario, Label::galeria);
$this->active = substr_replace($this->active, "1", -4, 1);
$content = function(){ ?>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/isotope/isotope.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/javascripts/pages/examples.mediagallery.js" type="text/javascript"></script>
<script>
    $(function(){
        $('#modal-upload-link').magnificPopup();
        $("#button-cargar_fotos").on("click", function(){
            $('#modal-upload-link').magnificPopup("open");
        });
    });
</script>
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
                            <h4><?= Label::foto_perfil ?></h4>
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
        <div class="inner-body mg-main">
            <div class="inner-toolbar clearfix">
                <ul>
                    <li>
                        
                    </li>
                    <li>
                        <a href="#" id="mgSelectAll"><i class="fa fa-check-square"></i> <span data-all-text="Select All" data-none-text="Select None"><?= Label::seleccionar_todos ?></span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-trash-o"></i> <?= Label::eliminar ?></a>
                    </li>
                    <li class="right" data-sort-source data-sort-id="media-gallery">
                        <ul class="nav nav-pills nav-pills-primary">
                            <li>
                                <label>Filter:</label>
                            </li>
                            <li class="active">
                                <a data-option-value="*" href="#all">All</a>
                            </li>
                            <li>
                                <a data-option-value=".document" href="#document">Documents</a>
                            </li>
                            <li>
                                <a data-option-value=".image" href="#image">Images</a>
                            </li>
                            <li>
                                <a data-option-value=".video" href="#video">Videos</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
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
                            <iframe src ="<?= Settings::WEB_HOST_URL ?>account/file_upload" frameborder = 0 width = "100%" height="300px"></iframe> 
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
