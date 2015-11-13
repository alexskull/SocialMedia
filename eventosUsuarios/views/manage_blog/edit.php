<?php 
$this->layout = "./layouts/main_layout.php";
$this->active = substr_replace($this->active, "1", -14, 1);
$this->routing = array(Label::gestionar_blog, Label::editar_entrada);
$this->section_title = Label::editar_entrada;
$content = function(){ ?>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote-bs3.css" rel="stylesheet" type="text/css"/>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote.js"></script>
<style>
    #btn-guardar{
        cursor: pointer;
    }
</style>
<script>
    $(function(){
        $("#wysiwyg").summernote({
            lang : $("#hidden-lang").val(),
            height: 250,
        });
        $("#btn-guardar").on("click", function(){
            edit.validar();
        });
    });
    var edit = {
        validar: function(){
            if ($("#input-titulo").val() == "" || $("#wysiwyg").code() == ""){
                General.mostrar_alerta("<?= Message::alerta_gestionar_blog_campos_vacios ?>");
            }
            else {
                General.mostrar_confirmacion("<?= Message::confirmacion_gestionar_blog ?>", edit.post);
            }
        },
        post: function(respuesta){
            if (respuesta){
                var formdata = new FormData();
                formdata.append("titulo", $("#input-titulo").val());
                formdata.append("texto", $("#wysiwyg").code());
                
                General.enviar_ajax({
                    ruta: "<?= Settings::WEB_HOST_URL ?>manage_blog/edit_post",
                    formulario: formdata,
                    funcion: edit.callback
                });
            }
        }
    };
</script>
<div class="">
    <div class="inner-toolbar clearfix">
        <ul>
            <li>
                <a id = "btn-guardar" ><i class="fa fa-save mr-sm"></i> <?= Label::guardar ?></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-times mr-sm"></i> <?= Label::descartar ?></a>
            </li>
        </ul>
    </div>
    <section class ="panel">
        <div class="panel-body">
            <form class="form-horizontal form-bordered form-bordered">                
                <div class="form-group form-group-invisible">
                    <label for="input-titulo" class="control-label-invisible"><?= Label::titulo ?>:</label>
                    <div class="col-sm-offset-2 col-sm-9 col-md-offset-1 col-md-10">
                        <input id="input-titulo" type="text" class="form-control form-control-invisible" value="">
                    </div>
                </div>
                    
                <div class="form-group">
                    <div class="compose">
                        <div id="wysiwyg" class="compose-control"></div>
                    </div>
                </div>
                <!--<div class="col-md-12">
                    <div class="checkbox-custom checkbox-default" >
                        <input type="checkbox" id="checkbox-">
                        <label for="checkbox-"><?= Label::permitir_comentarios ?></label>
                    </div>
                </div>-->
            </form>
        </div>
    </section>
</div>
<?php }; 