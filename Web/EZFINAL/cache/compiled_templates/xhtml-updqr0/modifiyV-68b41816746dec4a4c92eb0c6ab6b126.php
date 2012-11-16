<?php
// Generated PHP file from template code.
// If you modify this file your changes will be lost when it is regenerated.
$this->checkRequirements(1,array("disableCache" => false));
$i_output = "";
if ( !isset($this->send->NumArticle))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'NumArticle',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->installRoot))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'installRoot',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
$i_output .= "<div id=\"pageid\">\r\n    <h1>Modifier Article Validation</h1>\r\n    <h2>Modfication Article ";
$i_output .= htmlspecialchars($this->send->NumArticle);
$i_output .= "</h2>\r\n    \r\n    <a href=\"";
$i_output .= htmlspecialchars($this->send->installRoot);
$i_output .= "/index.php\">ANNULER</a>\r\n\r\n    <form action=\"article/modifyArticle/";
$i_output .= htmlspecialchars($this->send->NumArticle);
$i_output .= "\" method=\"POST\">\r\n        <input type=\"submit\" name=\"delete\" id=\"delete\" value=\"Confirmer la modification de l'article\" />\r\n    </form>\r\n</div>";
return $i_output;
?>
