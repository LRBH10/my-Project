<?php
class helloRouter extends ezcMvcRouter
{
    public function createRoutes()
    {
        return array(
            new ezcMvcRailsRoute('/page/not/found', 'helloPageNotFoundController', 'pageNotFound'),
            
            new ezcMvcRailsRoute( '/', 'helloController', 'acceuil' ),
            new ezcMvcRailsRoute( '/aboutus', 'helloController', 'aboutUs' ),
            
            new ezcMvcRailsRoute( '/add', 'helloPageController', 'addArticle' ),
            new ezcMvcRailsRoute( '/addV', 'helloPageController', 'addArticleV' ),
            
            new ezcMvcRailsRoute( '/delete', 'helloPageController', 'deleteArticleParNum' ),
            new ezcMvcRailsRoute( '/deleteV', 'helloPageController', 'deleteArticleParNumV' ),
            new ezcMvcRailsRoute( '/article/deleteArticle/:id', 'helloPageController', 'deleteArticle' ),
            
            new ezcMvcRailsRoute( '/modifyArticle', 'helloPageController', 'modifyArticleById' ),
            new ezcMvcRailsRoute( '/modifyArticleV', 'helloPageController', 'modifyArticleVById' ),
            new ezcMvcRailsRoute( '/article/modifyArticle/:id', 'helloPageController', 'showPageId' ),
            new ezcMvcRailsRoute( '/article/modifyArticle/modif/effectue', 'helloPageController', 'modifyArticle' ),
            
            new ezcMvcRailsRoute( '/article/:id', 'helloPageController', 'showPageId' ),
            new ezcMvcRailsRoute( '/:name', 'helloController', 'acceuil' ),
            
        );
    }
}
?>
