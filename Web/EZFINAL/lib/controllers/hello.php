<?php
class helloController extends ezcMvcController {
    public function doAcceuil() {
        $session = ezcPersistentSessionInstance::get();
        $q =$session->createFindQuery('Article');
        $q->orderBy('id' , ezcQuerySelect::DESC); 
        $q->limit(5,0);
        $allArticle =$session->find($q);
        
        
        $ret = new ezcMvcResult;
        $ret->variables['articles']= $allArticle;
        return $ret;
    }
    
    public function doAboutUs() {
        $ret = new ezcMvcResult;
        return $ret;
    }
}
?>
