<?php
// Generated PHP file from template code.
// If you modify this file your changes will be lost when it is regenerated.
$this->checkRequirements(1,array("disableCache" => false));
$i_output = "";
if ( !isset($this->send->banner))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'banner',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->footer))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'footer',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->menu))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'menu',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->content))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'content',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->installRoot))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'installRoot',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
$i_output .= "<html>\n    <head>\n        <title>EAPPArticles : les differents Articles</title>\n        <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" />\n        <meta name=\"description\" \ncontent=\"EAPPArticles est un site web qui contients les differents articles ajouter par les internauts\" />\n<!-- POUR LE MOTEUR YAHOO SEULEMENT -->\n        <meta name=\"keywords\" content=\"EAPP Articles, EAPPArticles, E-APP Articles, E-APPArticles\" />\n     <link rel=\"stylesheet\" href=\"";
$i_output .= htmlspecialchars($this->send->installRoot);
$i_output .= "/media/touching.css\" type=\"text/css\" />\n    </head>\n    <body>\n        <div id=\"container\">\n            ";
$i_output .= $this->send->banner;
$i_output .= "\n            ";
$i_output .= $this->send->menu;
$i_output .= "\n            ";
$i_output .= $this->send->content;
$i_output .= "\n            ";
$i_output .= $this->send->footer;
$i_output .= "\n         </div>\n    </body>\n</html>\n";
return $i_output;
?>
