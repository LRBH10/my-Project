<?php
class helloPageNotFoundController extends ezcMvcController {
        
    public function doPageNotFound() {
        $ret = new ezcMvcResult;
        $ret->variables['error'] = "La page n'existe pas";
        return $ret;
    }
}
?>
