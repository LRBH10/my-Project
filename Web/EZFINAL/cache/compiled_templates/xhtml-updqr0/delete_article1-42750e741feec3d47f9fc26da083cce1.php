<?php
// Generated PHP file from template code.
// If you modify this file your changes will be lost when it is regenerated.
$this->checkRequirements(1,array("disableCache" => false));
$i_output = "";
if ( !isset($this->send->articles))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'articles',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
if ( !isset($this->send->installRoot))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'installRoot',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
$i_output .= "<div id=\"pageid\">\r\n    <h1>Supprimer un Article</h1>\r\n    <h2>Titre d'Article </h2>\r\n    <form action=\"deleteV\" method=\"POST\">\r\n        \r\n        <select name=\"idArticle\"> \r\n        ";
foreach ($this->send->articles as $t_article)
{
    $i_output .= "<option value=\"";
    $i_output .= htmlspecialchars($t_article->id);
    $i_output .= "\">";
    $i_output .= htmlspecialchars($t_article->titre);
    $i_output .= "</option> \r\n";
}
$i_output .= "        </select>\r\n        <input type=\"submit\" name=\"delete\" id=\"delete\" value=\"Supprimer l'article\" />\r\n    </form>\r\n    \r\n</div>";
return $i_output;
?>
