<?php
/**
 * File containing the main autoload file.
 *
 * @version //autogentag//
 * @package ezcDemo
 * @copyright Copyright (c) 2011-2012 Guillaume Kulakowski and contributors
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

//echo '<p>Call autoload: ' . __FILE__ . '</p>';

return array (
    'Article'                               => 'lib/article.php',
    'myLazyConfigurationConfiguration'      => 'lib/lazy/mylazyconfigurationconfiguration.php',
    'myLazyDatabaseConfiguration'           => 'lib/lazy/mylazydatabaseconfiguration.php',
    'myLazyPersistentSessionConfiguration'  => 'lib/lazy/mylazypersistentsessionconfiguration.php',
    
    'helloMvcConfiguration'                 => 'lib/config.php',
    'helloRouter'                           => 'lib/router.php',
    
    'helloController'                       => 'lib/controllers/hello.php',
    'helloPageController'                   => 'lib/controllers/page.php',
    'helloPageNotFoundController'           => 'lib/controllers/error.php',
    
    'helloRootView'                         => 'lib/views/acceuil/root.php',
    'helloAboutUsView'                      => 'lib/views/acceuil/aboutus.php',
    'helloErrorView'                        => 'lib/views/acceuil/error.php',
    'helloPageIdView'                       => 'lib/views/acceuil/pageid.php',
    

    'helloAddArticleView'                   => 'lib/views/ajouter/addarticle.php',
    'helloAddArticleVView'                  => 'lib/views/ajouter/addarticlev.php',
    
    'helloDeleteArticleView1'                => 'lib/views/supprimer/deleteArticle1.php',
    'helloDeleteArticleView2'                => 'lib/views/supprimer/deleteArticle2.php',
    'helloDeleteArticleViewV1'               => 'lib/views/supprimer/deleteArticleV1.php',
    
    'helloModifyArticle2'                   => 'lib/views/modifier/modifyArticle2.php',
    'helloModifyArticle'                    => 'lib/views/modifier/modifyArticle.php',
    'helloModifyHArticle'                   => 'lib/views/modifier/modifyArticleH.php',
    'helloModifyHVArticle'                  => 'lib/views/modifier/modifyV.php',
);

?>
