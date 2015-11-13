<?php
$this->layout = "./layouts/payment_layout.php";
$paso = 4;
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
                <h3><strong><i class="icon-cancel"></i></strong><?= Label::error ?></h3>
                <p>
                    Mussum ipsum cacilds, vidis litro abertis.
                </p>
            </div>
            <div class="step">
                <p>
                    Lorem ipsum dolor sit amet, nostrud nominati vis ex, essent conceptam eam ad. Cu etiam comprehensam nec. Cibo delicata mei an, eum porro legere no. Te usu decore omnium, quem brute vis at, ius esse officiis legendos cu. Dicunt voluptatum at cum. Vel et facete equidem deterruisset, mei graeco cetero labores et. Accusamus inciderint eu mea.
                </p>
            </div><!--End step -->
                
            <div class="form_title">
                <h3><strong><i class="icon-info"></i></strong><?= Label::tips ?></h3>
                <p>
                    Mussum ipsum cacilds, vidis litro abertis.
                </p>
            </div>
            <div class="step">
                <p>
                    Lorem ipsum dolor sit amet, nostrud nominati vis ex, essent conceptam eam ad. Cu etiam comprehensam nec. Cibo delicata mei an, eum porro legere no. Te usu decore omnium, quem brute vis at, ius esse officiis legendos cu. Dicunt voluptatum at cum. Vel et facete equidem deterruisset, mei graeco cetero labores et. Accusamus inciderint eu mea.
                </p>
            </div><!--End step -->
        </div><!--End row -->
        <aside class="col-md-4">
            <div class="box_style_1">
                <p>
                    Nihil inimicus ex nam, in ipsum dignissim duo. Tale principes interpretaris vim ei, has posidonium definitiones ut. Duis harum fuisset ut his, duo an dolor epicuri appareat.
                </p>
                <hr>
                <a class="btn_full_outline" href="<?= Settings::WEB_HOST_URL ?>events/activity"><i class="icon-right"></i><?= Label::volver_evento ?></a>
            </div>
        </aside>
    </div><!--End container -->
</div>
<?php }; 
