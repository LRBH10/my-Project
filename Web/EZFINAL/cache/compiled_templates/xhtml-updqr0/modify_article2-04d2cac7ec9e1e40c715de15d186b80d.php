<?php
// Generated PHP file from template code.
// If you modify this file your changes will be lost when it is regenerated.
$this->checkRequirements(1,array("disableCache" => false));
$i_output = "";
if ( !isset($this->send->installRoot))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'installRoot',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->numPage))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'numPage',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->titre))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'titre',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->contenu))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'contenu',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
$i_output .= "\r\n<div id=\"pageid\">\r\n    <h1>Modify Article v2</h1>\r\n\r\n    <h2>Modification D'Article ";
$i_output .= htmlspecialchars($this->send->numPage);
$i_output .= "</h2>\r\n    \r\n    <form action=\"modif/effectue\" method=\"POST\">\r\n        <table>\r\n            <tr>\r\n                <td><input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
$i_output .= htmlspecialchars($this->send->numPage);
$i_output .= "\" readonly=\"readonly\" /></td>\r\n            </tr>\r\n            <tr>\r\n                <th><h2>Titre</h2></td>\r\n                <td><input type=\"text\" name=\"titre\" id=\"titre\" value=\"";
$i_output .= htmlspecialchars($this->send->titre);
$i_output .= "\" /></td>\r\n            </tr>\r\n            <tr>\r\n                <th><h2>Contenu</h2></td>\r\n                <td><textarea name=\"contenu\" id=\"contenu\" rows=\"10\" cols=\"50\">";
$i_output .= htmlspecialchars($this->send->contenu);
$i_output .= "</textarea></td>\r\n            </tr>\r\n            <tr>\r\n                <td><input type=\"submit\" name=\"modify\" id=\"modify\" value=\"Modifier l'article\" /></td>\r\n            </tr>\r\n        </table>\r\n        \r\n    </form>\r\n</div>";
return $i_output;
?>
