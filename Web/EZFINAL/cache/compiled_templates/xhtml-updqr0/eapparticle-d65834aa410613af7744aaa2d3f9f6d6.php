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
$i_output .= "<div id=\"content\">\r\n    <h1>EAPPArticles </h1>\r\n    <ol>\r\n    ";
foreach ($this->send->articles as $t_article)
{
    $i_output .= "<li>          \r\n    <a href=\"";
    $i_output .= htmlspecialchars($this->send->installRoot);
    $i_output .= "/index.php/article/";
    $i_output .= htmlspecialchars($t_article->id);
    $i_output .= "\">";
    $i_output .= htmlspecialchars($t_article->titre);
    $i_output .= "</a>\r\n    <p><strong>";
    $i_output .= htmlspecialchars((substr($t_article->contenu,0,200)));
    $i_output .= "... </strong></p>\r\n    <br/><br/>\r\n</li>\r\n\r\n";
}
$i_output .= "    </ol>\r\n</div>\r\n";
return $i_output;
?>
