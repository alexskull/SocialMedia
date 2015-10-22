<?php 
$this->layout = "./layouts/blog_layout.php";
$content_blog = function(){ ?>
    
<div class="col-md-9">
    <div class="box_style_1">
        <div class="post">
            <a href="<?= Settings::WEB_HOST_URL ?>blog/post" ><img src="<?= Settings::WEB_HOST_URL ?>content/images/blog-3.jpg" alt="" class="img-responsive"></a>
            <div class="post_info clearfix">
                <div class="post-left">
                    <ul>
                        <li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span></li>
                        <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a></li>
                        <li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a></li>
                    </ul>
                </div>
                <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a></div>
            </div>
            <h2>Duis aute irure dolor in reprehenderit</h2>
            <p>
                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
            </p>
            <p>
                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
            </p>
            <a href="<?= Settings::WEB_HOST_URL ?>blog/post" class="btn_1" >Read more</a>
        </div><!-- end post -->
            
        <hr>
            
        <div class="post">
            <a href="<?= Settings::WEB_HOST_URL ?>blog/post" ><img src="<?= Settings::WEB_HOST_URL ?>content/images/blog-1.jpg" alt="" class="img-responsive"></a>
            <div class="post_info clearfix">
                <div class="post-left">
                    <ul>
                        <li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span></li>
                        <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a></li>
                        <li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a></li>
                    </ul>
                </div>
                <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
            </div>
            <h2>Duis aute irure dolor in reprehenderit</h2>
            <p>
                Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
            </p>
            <a href="<?= Settings::WEB_HOST_URL ?>blog/post" class=" btn_1">Read more</a>
        </div><!-- end post -->
            
        <hr>
            
        <div class="post">
            <a href="<?= Settings::WEB_HOST_URL ?>blog/post" ><img src="<?= Settings::WEB_HOST_URL ?>content/images/blog-2.jpg" alt="" class="img-responsive"></a>
            <div class="post_info clearfix">
                <div class="post-left">
                    <ul>
                        <li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span></li>
                        <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a></li>
                        <li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a></li>
                    </ul>
                </div>
                <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
            </div>
            <h2>Duis aute irure dolor in reprehenderit</h2>
            <p>
                Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
            </p>
            <p>
                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
            </p>
            <a href="<?= Settings::WEB_HOST_URL ?>blog/post" class="btn_1" >Read more</a>
        </div><!-- end post -->
    </div>
    <hr>
        
    <div class="text-center">
        <ul class="pagination">
            <li><a href="#">Prev</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Next</a></li>
        </ul><!-- end pagination-->
    </div>
</div><!-- End col-md-8-->   
    
<?php };
