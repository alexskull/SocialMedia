<?php 
$this->layout = "./layouts/main_layout.php";
$this->active = substr_replace($this->active, "1", -8, 1);
$this->routing = array(Label::galeria_inicio);
$this->section_title = Label::galeria_inicio;
$content = function(){ ?>

<?php };
