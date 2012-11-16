<?php
// Generated PHP file from template code.
// If you modify this file your changes will be lost when it is regenerated.
$this->checkRequirements(1,array("disableCache" => false));
$i_output = "";
if ( !isset($this->send->installRoot))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'installRoot',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
$i_output .= "<div id=\"menu\">\n    <div class=\"verticalmenu\">\n        <ul>\n            <li><a href=\"";
$i_output .= htmlspecialchars($this->send->installRoot);
$i_output .= "/index.php\">Home</a></li>\n            <li><a href=\"";
$i_output .= htmlspecialchars($this->send->installRoot);
$i_output .= "/index.php/add\">Ajouter Article</a></li>\n            <li><a href=\"";
$i_output .= htmlspecialchars($this->send->installRoot);
$i_output .= "/index.php/modifyArticle\">Modifier Article</a></li>\n            <li><a href=\"";
$i_output .= htmlspecialchars($this->send->installRoot);
$i_output .= "/index.php/delete\">Supprimer Article</a></li>\n            <li><a href=\"";
$i_output .= htmlspecialchars($this->send->installRoot);
$i_output .= "/index.php/aboutus\">Etudiants</a></li>\n\t</ul>\n    </div> \n</div>";
return $i_output;
?>
