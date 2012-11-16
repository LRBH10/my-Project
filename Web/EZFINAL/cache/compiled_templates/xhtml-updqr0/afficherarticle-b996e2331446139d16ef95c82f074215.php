<?php
// Generated PHP file from template code.
// If you modify this file your changes will be lost when it is regenerated.
$this->checkRequirements(1,array("disableCache" => false));
$i_output = "";
if ( !isset($this->send->titre))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'titre',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->contenu))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'contenu',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->numPage))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'numPage',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
$i_output .= "\r\n<div id=\"pageid\">\r\n    <h1>EAPPArticle  ";
$i_output .= htmlspecialchars($this->send->numPage);
$i_output .= "</h1> \r\n    <h2>";
$i_output .= htmlspecialchars($this->send->titre);
$i_output .= "</h2>  \r\n    <p>";
$i_output .= htmlspecialchars($this->send->contenu);
$i_output .= "</p>\r\n    <form action=\"deleteArticle/";
$i_output .= htmlspecialchars($this->send->numPage);
$i_output .= "\" method=\"POST\">\r\n        <input type=\"submit\" name=\"delete\" id=\"delete\" value=\"Supprimer L'article\" />\r\n    </form>\r\n    <form action=\"modifyArticle/";
$i_output .= htmlspecialchars($this->send->numPage);
$i_output .= "\" method=\"POST\">\r\n        <input type=\"submit\" name=\"modify\" id=\"modify\" value=\"Modifier L'article \" />\r\n    </form>\r\n\r\n</div>\r\n";
return $i_output;
?>
