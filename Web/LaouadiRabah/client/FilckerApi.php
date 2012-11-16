<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class FilckerApiEPP {

    public $OAuth; //9aaf0d445b006926d348ad8e300dd6bb    ma Clé Filker
    public $name;
    public $nbrImage;
    public $width;
    public $heigth;

    //La taille de l'affichafe de la Diapo
    public function setSize($widthPX, $heigthPX, $unite = 'px') {
        $this->width = $widthPX . $unite;
        $this->heigth = $heigthPX . $unite;
    }

    //constructeur
    public function __construct($name, $key, $nbr) {
        $this->OAuth = $key;
        $this->name = $name;
        $this->nbrImage = $nbr;
        $this->width = "300px";
        $this->heigth = "300px";
        ?>
        <input type="hidden" id="indexMax" value="<?php echo $this->nbrImage; ?>"/>

        <script type="text/javascript" src="js/filckerApi.js">
        </script>
        <?php
    }

    //Recuperer les Images
    public function getPhotos($lieu) {
        $URL = 'http://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=' . $this->OAuth . '&text=' . $lieu . '&sort=relevance&per_page=' . $this->nbrImage . '&format=json&nojsoncallback=1';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $resultat = curl_exec($ch);
        $res = json_decode($resultat, true);

        //var_dump($res);

        $data = array();
        foreach ($res['photos']['photo'] as $ele) {
            $inter = 'http://farm' . $ele['farm'] . '.staticflickr.com/' . $ele['server'] . '/' . $ele['id'] . '_' . $ele['secret'] . '.jpg';
            $data[] = $inter;
        }
        return $data; //*/
    }

    ///affichage des Images
    public function printPhoto($id, $lieu) {
        $data = $this->getPhotos($lieu);
        $i = 0;
        foreach ($data as $ele) {
            ?>

            <input type="hidden" value="<?php echo $ele ?>"  id="<?php echo $lieu . $i; ?>"/>

            <?php
            $i++;
        }
        ?>      
        <div>
            <img id="IMG<?php echo $id; ?>" style="width: <?php echo $this->width; ?>; height: <?php echo $this->heigth ?>;  border: 1px solid #b4b4b4;" 
                 src="<?php echo $data[0]; ?>"/> <br/>
            <div> 
                <input type="button" style="width: <?php echo $this->width; ?>; height: 30px;" value="photo Suivante" onclick="updateImage('<?php echo $id; ?>', '<?php echo $lieu; ?>');" />
            </div>
        </div>
        <?php
    }

}
?>
