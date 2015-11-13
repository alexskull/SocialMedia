<?php
$this->layout = "./layouts/payment_layout.php";
$paso = 2;
$content_payment = function(){ ?>
<div id="position">
    <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li>Page active</li>
        </ul>
    </div>
</div><!-- End position -->
<div class="container margin_60">
    <div class="row">
        <div class="col-md-8">
            <div class="form_title">
                <h3><strong>1</strong><?= Label::tus_datos ?></h3>
                <p>
                    <?= Message::info_uso_datos_usuario ?>
                </p>
            </div>
            <div class="step">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label><?= Label::nombres ?></label>
                            <input type="text" class="form-control" id="firstname_booking" name="firstname_booking">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label><?= Label::apellidos ?></label>
                            <input type="text" class="form-control" id="lastname_booking" name="lastname_booking">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label><?= Label::correo ?></label>
                            <input type="email" id="email_booking" name="email_booking" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label><?= Label::confirmar_correo ?></label>
                            <input type="email" id="email_booking_2" name="email_booking_2" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
                        </div>
                    </div>
                </div>
            </div><!--End step -->
                            
            <div class="form_title">
                <h3><strong>2</strong><?= Label::direccion_facturacion ?></h3>
                <p>
                    Mussum ipsum cacilds, vidis litro abertis.
                </p>
            </div>
            <div class="step">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label><?= Label::pais ?></label>
                            <select class="form-control" name="country" id="country">
                                <option value="" selected><?= Label::selecciona_pais ?></option>
                                <option value="Europe">Europe</option>
                                <option value="United states">United states</option>
                                <option value="Asia">Asia</option>
                            </select>
                        </div>
                    </div>
                     <div class="col-md-3">
                        <div class="form-group">
                            <label><?= Label::codigo_postal ?></label>
                            <input type="text" id="postal_code" name="postal_code" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label><?= Label::provincia ?></label>
                            <select id="city_booking" name="city_booking" class="form-control">
                                <option value="" selected><?= Label::selecciona_provincia ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label><?= Label::poblacion ?></label>
                            <select id="state_booking" name="state_booking" class="form-control">
                                <option value="" selected><?= Label::selecciona_poblacion ?></option>
                            </select>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label><?= Label::direccion ?></label>
                            <input type="text" id="street_1" name="street_1" class="form-control">
                        </div>
                    </div>
                </div>
                
            </div><!--End step -->
                            
            <div id="policy">
                <h4><?= Label::politicas_pago ?></h4>
                <div class="form-group">
                    <label><input type="checkbox" name="policy_terms" id="policy_terms"> <a href = "#"><?= Message::info_acepto_terminos_condiciones ?>.</a></label>
                </div>
                <a href="#" class="btn_1 medium"><?= Label::pagar_paypal ?></a>
                <a href="#" class="btn_1 medium"><?= Label::pagar_tdc ?></a>
                <a href="<?= Settings::WEB_HOST_URL ?>participate/error" class="btn_1 medium"><?= Label::siguiente ?></a>
            </div>
        </div>
                    
        <aside class="col-md-4">
            <div class="box_style_1">
                <h3 class="inner">- <?= Label::resumen ?> -</h3>
                <table class="table table_summary">
                    <tbody>
                        <tr>
                            <td><?= Label::evento ?></td>
                            <td class="text-right">Evento de Prueba</td>
                        </tr>
                        <tr>
                            <td><?= Label::fecha ?></td>
                            <td class="text-right">13/12/2015</td>
                        </tr>
                        <tr>
                            <td><?= Label::hora ?></td>
                            <td class="text-right">20:00 - 02:00</td>
                        </tr>
                        <tr>
                            <td><?= Label::lugar ?></td>
                            <td class="text-right">Barcelona, Anzoátegui </td>
                        </tr>
                        <tr>
                            <td><?= Label::lugar_encuentro ?></td>
                            <td class="text-right">Puerto La Cruz, Anzoátegui</td>
                        </tr>
                        <tr class="total">
                            <td><?= Label::total ?></td>
                            <td class="text-right">$25<td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn_full" href="#"><?= Label::pagar_paypal ?></a>
                <a class="btn_full" href="#"><?= Label::pagar_tdc ?></a>
                <a class="btn_full" href="<?= Settings::WEB_HOST_URL ?>participate/complete"><?= Label::siguiente ?></a>
                <a class="btn_full_outline" href="<?= Settings::WEB_HOST_URL ?>events/activity"><i class="icon-right"></i><?= Label::modifica_busqueda ?></a>
            </div>
        </aside>
                    
    </div><!--End row -->
</div><!--End container -->
<?php }; ?>
