<?php
class helloDeleteArticleView2 extends ezcMvcView
{
    function createZones( $layout )
    {
        $zones = array();
        $zones[] = new ezcMvcTemplateViewHandler( 'banner', 'banner.ezt' );        
        $zones[] = new ezcMvcTemplateViewHandler( 'footer', 'footer.ezt' );
        
        $zones[] = new ezcMvcTemplateViewHandler( 'menu', 'menu.ezt' );
        $zones[] = new ezcMvcTemplateViewHandler( 'content', 'supprimer/delete_article2.ezt' );
        $zones[] = new ezcMvcTemplateViewHandler( 'page_layout', 'layout.ezt' );
        return $zones;
    }
}
?>
