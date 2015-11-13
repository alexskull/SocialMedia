<?php
class Edit {
    function edit_post($data){
        $json = new stdClass();
        
        $json->post_title = $data["titulo"];
        $json->post_text = $data["texto"];
        $json->posted_on = date ("Y-m-d H:i:s");
        $json->posted_by = $_SESSION["usuarios_id"];
        $json = json_encode($json);
        $res = json_decode(
            Util::call_API("PUT", Settings::WEB_SERVICES_URL."blogpost" , $json));
        $res = $res->_embedded->blog_post;
    }
}
