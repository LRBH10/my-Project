<?php
// Generated PHP file from template code.
// If you modify this file your changes will be lost when it is regenerated.
$this->checkRequirements(1,array("disableCache" => false));
$i_output = "";
if ( !isset($this->send->installRoot))
{
    
    throw new ezcTemplateRuntimeException( sprintf("The external (use) variable '%s' is not set in template: %s and called from %s", 'installRoot',  $this->template->stream,  ( sizeof($this->template->streamStack) >= 2 ? $this->template->streamStack[sizeof($this->template->streamStack) - 2] : 'the application code') ) );
}
$i_output .= "<div id=\"footer\">\r\n    <a href=\"";
$i_output .= htmlspecialchars($this->send->installRoot);
$i_output .= "/index.php/aboutus\">EzComponents - MVC - SEO - CMS -</a>\r\n</div>\r\n";
return $i_output;
?>
