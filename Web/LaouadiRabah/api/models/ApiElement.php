<?php

class ApiElement {

    public $_id;
    public $_titre;
    public $_description;
    public $_lieu;

    public static function getAll($username, $userpass) {
        self::_checkIfUserExists($username, $userpass);
        $userhash="{$username}_{$userpass}";
        $all = array();
        foreach (new DirectoryIterator(DATA_PATH . "/{$userhash}") as $file_info) {
            if ($file_info->isFile() == true) {
                $all_serialized = file_get_contents($file_info->getPathname());
                $all_array = unserialize($all_serialized);
                $all[] = $all_array;
            }
        }

        return $all;
    }

    public static function getElementApi($element_id, $username, $userpass) {
        $userhash="{$username}_{$userpass}";
        if (file_exists(DATA_PATH . "/{$userhash}/{$element_id}.txt") === false) {
            throw new Exception('Todo ID is invalid');
        }

        $element_serialized = file_get_contents(DATA_PATH . "/{$userhash}/{$element_id}.txt");
        $element = unserialize($element_serialized);

        $element_return = new ApiElement();
        $element_return->_id = $element_id;
        $element_return->_titre = $element['titre'];
        $element_return->_description = $element['description'];
        $element_return->_lieu = $element['lieu'];

        return $element_return;
    }

    public function supprimer($username, $userpass) {
        $userhash="{$username}_{$userpass}";
        if (file_exists(DATA_PATH . "/{$userhash}/{$this->_id}.txt") === false) {
            throw new Exception('Todo ID does not exist!');
        }

        unlink(DATA_PATH . "/{$userhash}/{$this->_id}.txt");
        return true;
    }

    public function enregistrer($username, $userpass) {
        $userhash="{$username}_{$userpass}";
        if (is_dir(DATA_PATH . "/{$userhash}") === false) {
            mkdir(DATA_PATH . "/{$userhash}");
        }

        //if the $todo_id isn't set yet, it means we need to create a new todo item
        if (is_null($this->_id) || !is_numeric($this->_id)) {
            //the todo id is the current time
            $this->_id = time();
        }

        //get the array version of this todo item
        $element_array = $this->toArray();

        //save the serialized array version into a file
        $success = file_put_contents(DATA_PATH . "/{$username}_{$userpass}/{$this->_id}.txt", serialize($element_array));

        //if saving was not successful, throw an exception
        if ($success === false) {
            throw new Exception('Failed to save todo item');
        }

        //return the array version
        return $element_array;
    }

    public function toArray() {
        //return an array version of the todo item
        return array(
            'id' => $this->_id,
            'titre' => $this->_titre,
            'description' => $this->_description,
            'lieu' => $this->_lieu
        );
    }

    private static function _checkIfUserExists($username, $userpass) {
        $userhash = "{$username}_{$userpass}";
        if (is_dir(DATA_PATH . "/{$userhash}") === false) {
            throw new Exception('Username  or Password is invalid');
        }
        return true;
    }

}