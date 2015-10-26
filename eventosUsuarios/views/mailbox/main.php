<?php 
$this->layout = "./layouts/mailbox_layout.php";
$this->active = substr_replace($this->active, "1", -2, 1);
$this->collapsed = true;
$model = $this->model->Mailbox;
$this->routing = array(Label::buzon_mensajes, $model->Mailbox->recibidos ? Label::recibidos : Label::enviados);
$mailbox_view = "folder";

$content_mailbox = function() use ($model) { ?>
<!-- start: page -->

        <div class="inner-body mailbox-folder">
            <!-- START: .mailbox-header -->
            <header class="mailbox-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="mailbox-title text-weight-light m-none">
                            <a id="mailboxToggleSidebar" class="sidebar-toggle-btn trigger-toggle-sidebar">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line line-angle1"></span>
                                <span class="line line-angle2"></span>
                            </a>                            
                            <?= $model->Mailbox->recibidos ? Label::buzon_mensajes : Label::mensajes_enviados ?>
                        </h1>
                    </div>
                </div>
            </header>
            <!-- END: .mailbox-header -->
            
            <!-- START: .mailbox-actions -->
            <div class="mailbox-actions">
                <ul class="list-unstyled m-none pt-lg pb-lg">
                    <li class="ib mr-sm">
                        <div class="btn-group">
                            <a href="#" class="item-action fa fa-chevron-down dropdown-toggle" data-toggle="dropdown"></a>
                            
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><?= Label::todo ?></a></li>
                                <li><a href="#"><?= Label::nada ?></a></li>
                                <li><a href="#"><?= Label::leido ?></a></li>
                                <li><a href="#"><?= Label::no_leido ?></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="ib mr-sm">
                        <a class="item-action fa fa-refresh" href="#"></a>
                    </li>
                    <li class="ib">
                        <a class="item-action fa fa-times text-danger" href="#"></a>
                    </li>
                </ul>
            </div>
            <!-- END: .mailbox-actions -->
            
            <div id="mailbox-email-list" class="mailbox-email-list">
                <div class="nano">
                    <div class="nano-content">
                        <ul id="" class="list-unstyled">
                            
                            <li class="unread">
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail1">
                                            <label for="mail1"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">11:35 am</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <i class="mail-label" style="border-color: #EA4C89"></i>
                                    
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail2">
                                            <label for="mail2"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">Check it out.</span>
                                        </p>
                                        <i class="mail-attachment fa fa-paperclip"></i>
                                        <p class="m-none mail-date">3:35 pm</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/email">
                                    <div class="col-sender">
                                        <div class="checkbox-custom checkbox-text-primary ib">
                                            <input type="checkbox" id="mail3">
                                            <label for="mail3"></label>
                                        </div>
                                        <p class="m-none ib">Okler Themes</p>
                                    </div>
                                    <div class="col-mail">
                                        <p class="m-none mail-content">
                                            <span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>
                                            <span class="mail-partial">We are proud to announce that our new theme Porto Admin is ready, wants to know more about it?</span>
                                        </p>
                                        <p class="m-none mail-date">Jul 03</p>
                                    </div>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
<!-- end: page -->
<?php }; 
