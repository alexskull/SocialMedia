<?php 
$this->layout = "./layouts/main_layout.php";
$this->section_title = Label::gestionar_usuarios;
$this->routing = array(Label::gestionar_usuarios);
$this->active = substr_replace($this->active, "1", -10, 1);
$lang = $this->lang;
$content = function() use ($lang){ ?>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-datatables/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-datatables/media/css/responsive.dataTables.css" rel="stylesheet" type="text/css"/>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-datatables/media/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/javascripts/underscore-min.js" type="text/javascript"></script>
<script>
    $(function(){
        /*var datatable = 
        $(".table").on('xhr.dt', function (e, settings, json, xhr) {
        }).DataTable({
            responsive: true,
            language: {
                "url": "<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-datatables/<?= $lang ?>.json"
            },
            paging: false,
            searchDelay: 500,
            autoWidth: false,
            deferRender: true,
            sortClasses: false,
            info: false,
            searching: false,
            lengthChange: false,
            stateSave: false,
            processing: true,
            serverSide: false,
            columnDefs: [
                { class: "all", targets: [0, 1] },
                { class: "none", targets: [2, 3, 4] },
            ],
            columns: [
                { data: "fila" },
                { data: "nombres" },
                { data: "usuario" },
                { data: "tipo" },
                { data: "acciones" },
            ],
            createdRow: function (row, data, dataIndex) {
                $(row).addClass("group-item");
            },
            ajax: {
                url: "<?= Settings::WEB_HOST_URL ?>manage_users/get_list",
                type: "POST",
            }
        }); */
    });
    var main = {
    }
</script>
    
<section class ="panel">
    <div class ="panel-body">
        <table class = "table table-bordered table-striped responsive">
            <thead>
                <tr>
                    <th style = "width: 5%"><?= Label::fila ?></th>
                    <th style = "width: 30%"><?= Label::nombres ?></th>
                    <th style = "width: 20%"><?= Label::usuario ?></th>
                    <th style = "width: 10%"><?= Label::tipo_usuario ?></th>
                    <th style = "width: 20%"><?= Label::acciones ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <?= Tables::button("pencil", "turquoise", null, "editar", Label::editar) ?>
                        <?= Tables::button("envelope", "hole", null, "enviar_correo", Label::enviar_correo) ?>
                        <?= Tables::button("user-times", "pomegranate", null, "dar_baja", Label::dar_baja) ?><br>                      
                        <?= Tables::button("user", "concrete", null, "usuario_general", Label::hacer_usuario_general) ?>
                        <?= Tables::button("user-plus", "asbestos", null, "usuario_organizador", Label::hacer_organizador_evento) ?>                        
                        <?= Tables::button("users", "asphalt", null, "usuario_jefe", Label::hacer_jefe_equipo) ?>
                        <?= Tables::button("user-secret", "midnight", null, "usuario_admin", Label::hacer_administrador) ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
    
<?php };

