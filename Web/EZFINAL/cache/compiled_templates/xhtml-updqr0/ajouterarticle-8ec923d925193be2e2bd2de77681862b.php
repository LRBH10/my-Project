<?php
// Generated PHP file from template code.
// If you modify this file your changes will be lost when it is regenerated.
$this->checkRequirements(1,array("disableCache" => false));
$i_output = "";
$i_output .= "<div id=\"pageid\">\r\n    <h1>Ajout D'un EAPPArticle</h1>\r\n    <form action=\"addV\" method=\"POST\">\r\n        <table>\r\n            <tr>\r\n                <th><h2>Titre</h2></td>\r\n                <td><input type=\"text\" name=\"titre\" id=\"titre\" /></td>\r\n            </tr>\r\n            <tr>\r\n                <th><h2>Contenu</h2></td>\r\n                <td><textarea name=\"contenu\" id=\"contenu\" rows=\"20\" cols=\"50\"></textarea></td>\r\n            </tr>\r\n            <tr>\r\n                <td></td>\r\n                <td><input type=\"submit\" name=\"create\" id=\"create\" value=\"Ajouter l'article\" /></td>\r\n                <td></td>\r\n                \r\n            </tr>\r\n        </table>\r\n        \r\n    </form>\r\n</div>";
return $i_output;
?>
