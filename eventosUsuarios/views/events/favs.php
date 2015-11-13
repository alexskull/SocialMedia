<?php 
$this->layout = "./layouts/main_layout.php";
$this->active = substr_replace($this->active, "1", -7, 1);
$this->routing = array(Label::eventos, Label::favoritos);
$this->section_title = Label::favoritos;
$content = function(){ ?>
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
                    <th style = "width: 35%"><?= Label::descripcion ?></th>
                    <th style = "width: 20%"><?= Label::ubicacion ?></th>
                    <th style = "width: 10%"><?= Label::categoria ?></th>
                    <th style = "width: 10%"><?= Label::subcategoria ?></th>
                    <th style = "width: 10%"><?= Label::fecha ?></th>
                    <th style = "width: 10%"><?= Label::acciones ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <?= Tables::button("star-o", "pomegranate", null, "seguir", Label::dejar_seguir) ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<?php };
