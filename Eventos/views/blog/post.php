<?php 
$this->layout = "./layouts/blog_layout.php";
$content_blog = function(){ ?>
<div class="col-md-9">
    <div class="box_style_1">
        <div class="post nopadding">
            <img src="<?= Settings::WEB_HOST_URL ?>content/images/blog-1.jpg" alt="" class="img-responsive">
            <div class="post_info clearfix">
                <div class="post-left">
                    <ul>
                        <li><i class="icon-calendar-empty"></i><span>12 Nov 2020</span></li>
                    </ul>
                </div>
                <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a><?= Label::comentarios ?></div>
            </div>
            <h2>Duis aute irure dolor in reprehenderit</h2>
            <p>
                Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
            </p>
            <p>
                Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
            </p>
            <blockquote class="styled">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <small>Someone famous in <cite title="">Body of work</cite></small>
            </blockquote>
        </div><!-- end post -->
    </div><!-- end box_style_1 -->
        
    <h4>3 comments</h4>
        
    <div id="comments">
        <ol>
            <li>
                <div class="avatar"><a href="#"><img src="<?= Settings::WEB_HOST_URL ?>content/images/avatar1.jpg" alt=""></a></div>
                <div class="comment_right clearfix">
                    <div class="comment_info">
                                        <?= Label::publicado_por ?> <a href="#">Anna Smith</a><span>|</span> 25 apr 2019 <span>|</span><a href="#"><?= Label::responder ?></a>
                    </div>
                    <p>
                        Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                    </p>
                </div>
                <ul>
                    <li>
                        <div class="avatar"><a href="#"><img src="<?= Settings::WEB_HOST_URL ?>content/images/avatar2.jpg" alt=""></a></div>

                        <div class="comment_right clearfix">
                            <div class="comment_info">
                                <?= Label::publicado_por ?> <a href="#">Tom Sawyer</a><span>|</span> 25 apr 2019 <span>|</span><a href="#"><?= Label::responder ?></a>
                            </div>
                            <p>
                                Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                            </p>
                            <p>
                                Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                            </p>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <div class="avatar"><a href="#"><img src="<?= Settings::WEB_HOST_URL ?>content/images/avatar3.jpg" alt=""></a></div>

                <div class="comment_right clearfix">
                    <div class="comment_info">
                        <?= Label::publicado_por ?> <a href="#">Adam White</a><span>|</span> 25 apr 2019 <span>|</span><a href="#"><?= Label::responder ?></a>
                    </div>
                    <p>
                        Cursus tellus quis magna porta adipiscin
                    </p>
                </div>
            </li>
        </ol>
        <div style = "text-align:center">
            <a class="button_drop outline " ><?= Label::ver_mas ?></a></div>
    </div><!-- End Comments -->
        
    <h4><?= Label::deja_comentario ?></h4>
    <form action="#" method="post">
        <div class="form-group">
            <textarea name="message" class="form-control style_2" style="height:150px;" placeholder="<?= Message::info_sesion_comentario ?>" disabled></textarea>
        </div>
        <div class="form-group">
            <input type="reset" class="btn_1" value="<?= Label::limpiar ?>"/>
            <input type="submit" class="btn_1" value="<?= Label::publicar_comentario ?>">
            <a href = "<?= Settings::WEB_HOST_URL ?>users/signin" class="btn_1"><?= Label::inicia_sesion ?></a>
        </div>
    </form>       
</div><!-- End col-md-8--> 
    
<?php };