<?php
// Generated PHP file from template code.
// If you modify this file your changes will be lost when it is regenerated.
$this->checkRequirements(1,array("disableCache" => false));
$i_output = "";
if ( !isset($this->send->error))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'error',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->installRoot))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'installRoot',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
$i_output .= "\r\n<div id=\"pageid\">\r\n<h1> EAPPArticles </h1>\r\n<br/> <br/> <br/>\r\n    <h2>Error 404 : Page Not Found</h2>\r\n    <a href=\"";
$i_output .= htmlspecialchars($this->send->installRoot);
$i_output .= "/index.php\">";
$i_output .= htmlspecialchars($this->send->error);
$i_output .= "</a>\r\n</div>";
return $i_output;
?>
