<?php 
$this->layout = "./layouts/main_layout.php";
$this->section_title = Label::facturacion;
$this->routing = array(Label::facturacion);
$this->active = substr_replace($this->active, "1", -15, 1);
$lang = $this->lang;
$content = function() use ($lang){ ?>
<section class ="panel">
    <div class ="panel-body">
        <table class = "table table-bordered table-striped responsive">
            <thead>
                <tr>
                    <th style = "width: 5%"><?= Label::fila ?></th>
                    <th style = "width: 10%"><?= Label::nro_ticket ?></th>
                    <th style = "width: 35%"><?= Label::evento ?></th>
                    <th style = "width: 15%"><?= Label::fecha ?></th>
                    <th style = "width: 20%"><?= Label::usuario ?></th>
                    <th style = "width: 5%"><?= Label::monto ?></th>
                    <th style = "width: 10%"><?= Label::forma_pago ?></th>
                    <th style = "width: 5%"><?= Label::ver_factura ?></th>
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
                    <td></td>
                    <td><?= Tables::button("file-pdf-o", "alizarin", null, "factura", Label::factura) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<?php } ?>

