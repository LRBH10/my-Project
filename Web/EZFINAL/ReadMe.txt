***********************************************************************************************
***********************************************************************************************
**************************************Projet EzComponents**************************************
***********************************************************************************************
***********************************************************************************************

**************************************Etudiants**************************************
--Rabah Laouadi 	( M1 AIGLE )
--Blazo Nastov  	( M1 AIGLE )
--Nikolay Hoseyni	( M2 ----- )

**************************************Fonctionalites*****************************************
-Home Pgae qui affiche les dernieres 5 articles ajoutes
-Ajouter des articles
-Modifier des articles
-Supprimer des articles


**************************************Traveaux Effectue**************************************
--Page Not Found " Traité "
--CRUD d'un article " Traité "
--Templates " Traité "
--Persistent Object " Traité "
--Lazy " Traité "
--SEO ( robots.txt, sitemap.xml , referencement naturelle )

--MVC tools
	* 3 Controlleurs
		
		- helloController ( s'occupe d'afficher la page d'acceuil )
	
			> doAcceuil() -> affiche les dernieres 5 articles ajoutes )
		
		- helloPageNotFoundController ( s'occupe d'afficher la page d'error )

			> doPageNotFound() -> affiche "la page n'existe pas"

		- helloPageController  ( s'occupe de CRUD )

			> doShowPageId()  -> recoupere un article a partir de son titre de la base de donnees pour l'afficher

			
			> doAddArticle()  -> afficher le formulaire
			> doAddArticleV() -> prands les donnees du formulaire d'ajout et cree l'article


			> doDeleteArticleParNum()  -> recoupere tout les titres et les met dans une combobox
			> doDeleteArticleParNumV() -> recupere d'id d'un article pour qu'on effectue une suppression apes
			> doDeleteArticle()        -> supprime l'article de la base de donnees


			> doModifyArticle()        -> recupere des informations a partir d'un formulaires et effectue le MAJ
			> doModifyArticleById()    -> recoupere tout les titres et les met dans une combobox
			> doModifyArticleVById()   -> confirmation de la modification

