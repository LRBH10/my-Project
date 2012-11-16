<?php

class helloMvcConfiguration implements ezcMvcDispatcherConfiguration {

    function createRequestParser() {
        $parser = new ezcMvcHttpRequestParser;

        // For index.php/REQUEST
        if (strpos($_SERVER['REQUEST_URI'], 'index.php/') !== false) {
            $parser->prefix = $_SERVER['SCRIPT_NAME'];
        }
        // FOR /, index.php and index.php/
        else {
            $parser->prefix = preg_replace('@/index\.php$@', '', $_SERVER['SCRIPT_NAME']);
        }

        return $parser;
    }

    function createRouter(ezcMvcRequest $request) {
        return new helloRouter($request);
    }

    function createView(ezcMvcRoutingInformation $routeInfo, ezcMvcRequest $request, ezcMvcResult $result) {
        switch ($routeInfo->matchedRoute) {
            case '/':
                return new helloRootView($request, $result);
            case '/aboutus':
                return new helloAboutUsView($request, $result);
            case '/:name':
                return new helloRootView($request, $result);
            case '/add':
                return new helloAddArticleView($request, $result);
            case '/addV':
                return new helloAddArticleVView($request, $result);

            case '/delete':
                return new helloDeleteArticleView1($request, $result);
            case '/deleteV':
                return new helloDeleteArticleViewV1($request, $result);
            case '/article/deleteArticle/:id':
                return new helloDeleteArticleView2($request, $result);

            case '/modifyArticle':
                return new helloModifyHArticle($request, $result);
            case '/modifyArticleV':
                return new helloModifyHVArticle($request, $result);

            case '/article/modifyArticle/:id':
                return new helloModifyArticle2($request, $result);

            case '/article/modifyArticle/modif/effectue':
                return new helloModifyArticle($request, $result);

            case '/article/:id':
                return new helloPageIdView($request, $result);
            case '/page/not/found' :
                return new helloErrorView($request, $result);
        }
    }

    function createResponseWriter(ezcMvcRoutingInformation $routeInfo, ezcMvcRequest $request, ezcMvcResult $result, ezcMvcResponse $response) {
        return new ezcMvcHttpResponseWriter($response);
    }

    function createFatalRedirectRequest(ezcMvcRequest $request, ezcMvcResult $result, Exception $response) {
        //var_Dump($request, $result, $response);
        $req = clone $request;
        $req->uri = '/page/not/found';

        return $req;
    }

    function runPreRoutingFilters(ezcMvcRequest $request) {
        
    }

    function runRequestFilters(ezcMvcRoutingInformation $routeInfo, ezcMvcRequest $request) {
        
    }

    function runResultFilters(ezcMvcRoutingInformation $routeInfo, ezcMvcRequest $request, ezcMvcResult $result) {
        $result->variables['installRoot'] = preg_replace('@/index\.php$@', '', $_SERVER['SCRIPT_NAME']);
    }

    function runResponseFilters(ezcMvcRoutingInformation $routeInfo, ezcMvcRequest $request, ezcMvcResult $result, ezcMvcResponse $response) {
        
    }

}

?>
