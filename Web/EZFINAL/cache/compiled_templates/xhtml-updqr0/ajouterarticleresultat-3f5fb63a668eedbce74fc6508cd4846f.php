<?php
// Generated PHP file from template code.
// If you modify this file your changes will be lost when it is regenerated.
$this->checkRequirements(1,array("disableCache" => false));
$i_output = "";
if ( !isset($this->send->contenu))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'contenu',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->installRoot))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'installRoot',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
$i_output .= "\r\n\r\n<div id=\"pageid\">\r\n    <h1>Ajout D'Article Status dans EAPPArticles</h1>\r\n    <a href=\"";
$i_output .= htmlspecialchars($this->send->installRoot);
$i_output .= "/index.php\">";
$i_output .= htmlspecialchars($this->send->contenu);
$i_output .= "</a>\r\n</div>";
return $i_output;
?>
