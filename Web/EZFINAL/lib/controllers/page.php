<?php

class helloPageController extends ezcMvcController {

    public function doAddArticleV() {
        $ret = new ezcMvcResult;

        $definition = array(
            'titre' => new ezcInputFormDefinitionElement(
                    ezcInputFormDefinitionElement::REQUIRED, 'string'
            ),
            'contenu' => new ezcInputFormDefinitionElement(
                    ezcInputFormDefinitionElement::REQUIRED, 'string'
            ),
        );

        $form = new ezcInputForm(INPUT_POST, $definition);

        if ($form->hasValidData('titre') === true && $form->hasValidData('contenu') === true
                && $form->titre != '' && $form->contenu != '') {
            $session = ezcPersistentSessionInstance::get();

            $articlee = new Article();
            $articlee->titre = $form->titre;
            $articlee->contenu = $form->contenu;

            $session->save($articlee);
            $ret->variables['contenu'] = 'insertion OK';
        } else {
            $ret->variables['contenu'] = 'insertion KO ERREUR';
        }
        return $ret;
    }

    public function doAddArticle() {
        $ret = new ezcMvcResult;
        return $ret;
    }

    public function doShowPageId() {
        $ret = new ezcMvcResult;

        $str = "id=" . $this->id;
        $session = ezcPersistentSessionInstance::get();
        $q = $session->createFindQuery('Article');
        $q->where($str);
        $article = $session->find($q);
        if (empty($article)) {
            $ret->variables['titre'] = "Article Not Found";
            $ret->variables['contenu'] = "L'article rechercher n'existe pas dans la base de donnees";
        } else {
            $ret->variables['titre'] = $article[$this->id]->titre;
            $ret->variables['contenu'] = $article[$this->id]->contenu;
            $ret->variables['numPage'] = $this->id;
        }
        return $ret;
    }

    public function doDeleteArticleParNum() {
        $session = ezcPersistentSessionInstance::get();
        $q = $session->createFindQuery('Article');
        $q->orderBy('titre', ezcQuerySelect::ASC);
        $allArticle = $session->find($q);


        $ret = new ezcMvcResult;
        $ret->variables['articles'] = $allArticle;
        return $ret;
    }

    public function doDeleteArticleParNumV() {
        $ret = new ezcMvcResult;

        $ret->variables['NumArticle'] = "";
        $definition = array(
            'idArticle' => new ezcInputFormDefinitionElement(
                    ezcInputFormDefinitionElement::REQUIRED, 'string'
            ),);
        $form = new ezcInputForm(INPUT_POST, $definition);
        if ($form->hasValidData('idArticle') === true) {
            $ret->variables['NumArticle'] = $form->idArticle;
        }



        return $ret;
    }

    public function doDeleteArticle() {
        $ret = new ezcMvcResult;

        $str = "id=" . $this->id;
        $session = ezcPersistentSessionInstance::get();
        $q = $session->createDeleteQuery('Article');
        $q->where($str);
        $session->deleteFromQuery($q);

        $ret->variables['NumArticle'] = $this->id;
        return $ret;
    }

    public function doModifyArticle() {
        $ret = new ezcMvcResult;

        $definition = array(
            'id' => new ezcInputFormDefinitionElement(
                    ezcInputFormDefinitionElement::REQUIRED, 'string'
            ),
            'titre' => new ezcInputFormDefinitionElement(
                    ezcInputFormDefinitionElement::REQUIRED, 'string'
            ),
            'contenu' => new ezcInputFormDefinitionElement(
                    ezcInputFormDefinitionElement::REQUIRED, 'string'
            ),
        );

        $form = new ezcInputForm(INPUT_POST, $definition);
        if ($form->hasValidData('titre') === true && $form->hasValidData('contenu') === true
                && $form->hasValidData('id')) {

            $session = ezcPersistentSessionInstance::get();
            $Article = $session->load('Article', $form->id);
            $Article->titre = $form->titre;
            $Article->contenu = $form->contenu;
            $session->update($Article);
            $ret->variables['result'] = "Modification effectue avec succes ";
        }
        else
            $ret->variables['result'] = "Modification impossible ";

        return $ret;
    }

    public function doModifyArticleById() {
        $session = ezcPersistentSessionInstance::get();
        $q = $session->createFindQuery('Article');
        $q->orderBy('titre', ezcQuerySelect::ASC);
        $allArticle = $session->find($q);


        $ret = new ezcMvcResult;
        $ret->variables['articles'] = $allArticle;
        return $ret;
    }
    public function doModifyArticleVById() {
        $ret = new ezcMvcResult;

        $ret->variables['NumArticle'] = "";
        $definition = array(
            'idArticle' => new ezcInputFormDefinitionElement(
                    ezcInputFormDefinitionElement::REQUIRED, 'string'
            ),);
        $form = new ezcInputForm(INPUT_POST, $definition);
        if ($form->hasValidData('idArticle') === true) {
            $ret->variables['NumArticle'] = $form->idArticle;
        }
        return $ret;
    }

}

?>
