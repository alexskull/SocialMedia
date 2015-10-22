<?php
$this->layout = "./layouts/main_layout.php";
$content = function() use($content_blog){ ?>
<style>   
    @import url("<?= Settings::WEB_HOST_URL ?>content/stylesheets/blog.css"); 
</style>
<section class="parallax-window" data-parallax="scroll" data-image-src="<?= Settings::WEB_HOST_URL ?>content/images/bg_blog.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Tour Blog</h1>
            <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p></div>
    </div>
</section><!-- End section -->
    
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
    <?php $content_blog(); ?>   
        <aside class="col-md-3">
            <div class="widget">
                <h4><?= Label::post_recientes ?></h4>
                <ul class="recent_post">
                    <li>
                        <i class="icon-calendar-empty"></i> 16th July, 2020
                        <div><a href="#">It is a long established fact that a reader will be distracted </a></div>
                    </li>
                    <li>
                        <i class="icon-calendar-empty"></i> 16th July, 2020
                        <div><a href="#">It is a long established fact that a reader will be distracted </a></div>
                    </li>
                    <li>
                        <i class="icon-calendar-empty"></i> 16th July, 2020
                        <div><a href="#">It is a long established fact that a reader will be distracted </a></div>
                    </li>
                </ul>
            </div><!-- End widget -->
        </aside><!-- End aside -->
            
    </div><!-- End row-->         
</div><!-- End container -->
<?php }; ?>
    