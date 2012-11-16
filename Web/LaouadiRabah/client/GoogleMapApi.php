<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Cordonnee {

    public $lat;
    public $log;

    public function __construct($lat, $log) {
        $this->lat = $lat;
        $this->log = $log;
    }

}

Class GoogleMapApiEPP {

    public $OAuth_key;  //ABQIAAAAssNHsvRmdjbfaHQLGJe4IBRUsz-pYg_Ma22JMdFSMvaUp2krUhQPGyzeHUvioNuo_7zqLxrqnekFOQ  clé public
    public $name;
    public $width;
    public $heigth;

    //Constructeur
    public function __construct($key, $name) {
        $this->OAuth_key = $key;
        $this->name = $name;
        $this->width = "300px";
        $this->heigth = "300px";
        ?>
        <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=<?php echo $this->OAuth_key; ?>" type="text/javascript">
        </script>
        <?php
    }

    //La taille de l'affichafe de la carte
    public function setSize($widthPX, $heigthPX, $unite = 'px') {
        $this->width = $widthPX . $unite;
        $this->heigth = $heigthPX . $unite;
    }

    //L'address
    public function getAdress($adr) {
        $URL = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . $adr . '&sensor=false';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $resultat = curl_exec($ch);

        $res = json_decode($resultat, true);

        //var_dump($res['results'][0]['geometry']['location']);
        if ($res != null) {
            $lat = $res['results'][0]['geometry']['location']['lat'];
            $log = $res['results'][0]['geometry']['location']['lng'];
            $cordonnee = new Cordonnee($lat, $log);
            return $cordonnee;
        }
        return null;
    }

    //print map
    public function printMap($lieu) {
        ?>
        <div id="Map<?php echo $lieu; ?>" style="width: <?php echo $this->width ?>; height: <?php echo $this->heigth ?>;  border: 1px solid #b4b4b4;"></div> 
        <?php
    }

    public function generateCallBack($newAddress) {
        echo "callback('" . $newAddress . "')";
    }

    //Lancement de google map
    public function callGoogleMap($debut) {
        ?>
        <input type="hidden"  id="adr" value="<?php echo $debut; ?>" /> &nbsp; 
        <script type="text/javascript" src="js/googleApi.js">
        </script>
        <?php
    }

}
?>
