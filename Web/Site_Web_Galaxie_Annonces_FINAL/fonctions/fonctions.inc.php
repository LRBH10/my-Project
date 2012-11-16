<?php
// Nom : Check_exist
// Fonction : check_exist ( $pseudo )
// Version : 1.0
// Description : Savoir si l'utilisateur existe deja
// Auteur : Badache Ismail (max_evens@hotmail.com)
// Date : 23 decembre 2009


function check_exist( $pseudo ) {
  require ('config.php');
  $trouver_check_exist = false;

  mysql_connect($db_server, $db_user, $db_pass);
  mysql_select_db($db);

  $sql = 'SELECT `pseudo` FROM `tbl_tmp_user` UNION SELECT `pseudo` FROM `tbl_user`';
  $result = mysql_query($sql);

  $num = mysql_numrows($result);
  //mysql_close();

  $i = 0;
  while ($i < $num) {
    $pseude_name = mysql_result ($result, $i, 'pseudo');
    if ($pseude_name == $pseudo) {
      $trouver_check_exist = true;
    }
    $i++;
  }

  if ($trouver_check_exist == true) {
    return (TRUE);
  } else {
    return (FALSE);
  }
}
// -----------------------------------------------------------------------------


// Nom : Check_pass
// Fonction : check_pass ( $pseudo, $md5_pass )
// Version : 1.0
// Description : Savoir si l'utilisateur a entrer le bon mot de passe.
// Auteur : Badache Ismail (max_evens@hotmail.com)
// Date : 24 decembre 2009

function check_pass ( $pseudo, $md5_pass ) {
  require ('config.php');
  $trouver_check_pass = false;

  if (check_exist($pseudo)==false) {
    $trouver_check_pass = false;
  } else {
    mysql_connect ($db_server, $db_user, $db_pass);
    mysql_select_db($db);

    $sql = 'SELECT `pseudo` , `mdp` FROM `tbl_tmp_user` UNION SELECT `pseudo`,`mdp` FROM `tbl_user`';
    $result = mysql_query($sql);

    $num = mysql_numrows($result);
    //mysql_close();

    $i = 0;
    while ($i < $num) {
      $pseude_name = mysql_result ($result, $i, 'pseudo');
      $code_md5 = mysql_result ($result, $i, 'mdp');
      if (($pseude_name == $pseudo) AND ($code_md5 == $md5_pass)) {
        $trouver_check_pass = true;
      }
      $i++;
    }
  }

  if ($trouver_check_pass == true) {
    return (TRUE);
  } else {
    return (FALSE);
  }
}
// -----------------------------------------------------------------------------


// Nom : Check_admin_login
// Fonction : check_admin_login ( $pseudo, $md5_pass )
// Version : 1.0
// Description : Savoir si l'admin est bien un admin.
// Auteur : Badache Ismail (max_evens@hotmail.com)
// Date : 24 decembre 2009

function check_admin_login ( $pseudo, $md5_pass ) {
  require ('config.php');
  $trouver_check_admin_login = false;

  mysql_connect ($db_server, $db_user, $db_pass);
  mysql_select_db($db);

  $sql = 'SELECT `pseudo` , `mdp` FROM `tbl_admin_user`';
  $result = mysql_query($sql);

  $num = mysql_numrows($result);
  //mysql_close();

  $i = 0;
  while ($i < $num) {
    $admin_pseude = mysql_result ($result, $i, 'pseudo');
    $admin_mdp = mysql_result ($result, $i, 'mdp');
    if (($admin_pseude == $pseudo) and ($admin_mdp == $md5_pass)) {
      $trouver_check_admin_login = true;
    }
    $i++;
  }

  if ($trouver_check_admin_login == true) {
    return (TRUE);
  } else {
    return (FALSE);
  }
}
// -----------------------------------------------------------------------------


// Nom : Show_tmp_user
// Fonction : show_tmp_user ()
// Version : 1.0
// Description : Afficher les user temporaire.
// Auteur : Badache Ismail (max_evens@hotmail.com)
// Date : 25 decembre 2009

function show_tmp_user(){
  require ('config.php');
  mysql_connect ($db_server, $db_user, $db_pass);
  mysql_select_db($db);

  $sql = 'SELECT * FROM `tbl_tmp_user`';
  $result = mysql_query($sql);

  $num = mysql_numrows($result);
  //mysql_close();

  $i = 0;
  echo '<center>';
  echo '<b>Utilisateurs Temporaire</b>';
  echo '<table width=90% border=1 bgcolor=gray><tr>
    <td width=10%><b><center><font color=red>ID</font></center></b></td>
    <td width=70%><b><center><font color=red>Utilisateur</font></center></b></td>
    <td width=10%><b><center><font color=red>Supprimer</font></center></b></td>
    <td width=10%><b><center><font color=red>Activer</font></center></b></td>';
  while ($i < $num) {
    $pseude = mysql_result ($result, $i, 'pseudo');
    $uid = mysql_result ($result, $i, 'ID');
    echo '<tr><td>'.$uid.'</td><td>'.$pseude.'</td><td><a href="supcompte.php?t=tmp&uid='.$uid.'" target=_blank>X</a></td><td><a href="actcompte.php?uid='.$uid.'" target=_blank>X</a></td></tr>';
    $i++;
  }
  echo '</table><br><br>';
  echo '</center>';
}
// -----------------------------------------------------------------------------


// Nom : Show_user
// Fonction : show_user ()
// Version : 1.0
// Description : Afficher les user regulier.
// Auteur : Badache Ismail (max_evens@hotmail.com)
// Date : 26 decembre 2009

function show_user() {
  require ('config.php');
  mysql_connect ($db_server, $db_user, $db_pass);
  mysql_select_db($db);

  $sql = 'SELECT * FROM `tbl_user`';
  $result = mysql_query($sql);

  $num = mysql_numrows($result);
  //mysql_close();

  $i = 0;
  echo '<center>';
  echo '<b>Utilisateur Regulier</b>';
  echo '<table width=90% border=1 bgcolor=gray><tr>
    <td width=9%><b><center><font color=red>ID</font></center></b></td>
    <td width=69%><b><center><font color=red>Utilisateur</font></center></b></td>
    <td width=22%><b><center><font color=red>Supprimer</font></center></b></td>';
  while ($i < $num) {
    $pseude = mysql_result ($result, $i, 'pseudo');
    $uid = mysql_result ($result, $i, 'ID');
    echo '<tr><td>'.$uid.'</td><td>'.$pseude.'</td><td><a href="supcompte.php?t=user&uid='.$uid.'" target=_blank>X</a></td></tr>';
    $i++;
  }
  echo '</table><br><br>';
  echo '</center>';
}
// -----------------------------------------------------------------------------


// Nom : Show_Infomation_User
// Fonction : show_information_user ( $pseude )
// Version : 1.0
// Description : Afficher les informations sur le comte.
// Auteur : Badache Ismail (max_evens@hotmail.com)
// Date : 26 decembre 2009

function show_information_user ( $pseude ) {
  require ('config.php');
  mysql_connect ($db_server, $db_user, $db_pass);
  mysql_select_db($db);

  $sql = 'SELECT * FROM `tbl_tmp_user` UNION SELECT * FROM `tbl_user`';
  $result = mysql_query($sql);

  $num = mysql_numrows($result);
  //mysql_close();

  $i = 0;
  while ($i < $num) {
    $db_pseude = mysql_result ($result, $i, 'pseudo');
    if ($db_pseude == $pseude) {
      //echo '<h2>Logger </h2><br>';
      echo '<font color="red">Bienvenue</font><br>';
      $db_id = mysql_result ($result, $i, 'ID');
      $db_pass = mysql_result ($result, $i, 'mdp');
      $db_prenom = mysql_result ($result, $i, 'prenom');
      $db_nom = mysql_result ($result, $i, 'nom');
      $db_email = mysql_result ($result, $i, 'email');
      $db_valid = mysql_result ($result, $i, 'valid');
      echo '<font color="green">Pseudo : </font>' . $db_pseude;
      //echo '<br>mdp Crypter : ' . $db_pass;
      //echo '<br>ID : ' . $db_id;
      //echo '<br>Prenom : ' . $db_prenom;
      //echo '<br>Nom : ' . $db_nom;
      //echo '<br>Email : ' . $db_email;
      if ($db_valid == '0') {
        echo '<br><font color="green">Validation :</font> Non Activer';
      } else {
        echo '<br><font color="green">Validation :</font> Activer';
      }
    }
    $i++;
  }
}
// -----------------------------------------------------------------------------


// Nom : Active_pseudo
// Fonction : active_pseudo ( $uid )
// Version : 1.0
// Description : Activier un pseudo.
// Auteur : Badache Ismail (max_evens@hotmail.com)
// Date : 26 decembre 2009

function active_pseudo ( $uid ) {
  require ('config.php');
  mysql_connect ($db_server, $db_user, $db_pass);
  mysql_select_db($db);

  $sql = 'SELECT * FROM `tbl_tmp_user`';
  $result = mysql_query($sql);

  $num = mysql_numrows($result);

  $i = 0;
  while ($i < $num) {
    $db_uid = mysql_result ($result, $i, 'ID');
    if ($db_uid == $uid){
      echo 'Activer';
      $db_pseude = mysql_result ($result, $i, 'pseudo');
      $db_pass = mysql_result ($result, $i, 'mdp');
      $db_prenom = mysql_result ($result, $i, 'prenom');
      $db_nom = mysql_result ($result, $i, 'nom');
      $db_email = mysql_result ($result, $i, 'email');
      $db_valid = mysql_result ($result, $i, 'valid');
	  $db_tel=mysql_result($result,$i,'tel');
      mysql_query("INSERT INTO tbl_user(ID, pseudo, mdp, prenom, nom, email, valid,tel) VALUES ('', '$db_pseude', '$db_pass', '$db_prenom', '$db_nom', '$db_email', '1','$db_tel')");
      mysql_query("DELETE FROM `tbl_tmp_user` WHERE `ID` = '$db_uid'");
      //mysql_close();

      exit;
    }
    $i++;
  }
  echo 'Introuvable';
  //mysql_close();
}
// -----------------------------------------------------------------------------


// Nom : Supprime_pseudo
// Fonction : supprime_pseudo ( $uid, $table )
// Version : 1.0
// Description : Supprimer un pseudo.
// Auteur : Badache Ismail (max_evens@hotmail.com)
// Date : 26 decembre 2009

function supprime_pseudo ( $uid, $table ) {
  require ('config.php');
  mysql_connect ($db_server, $db_user, $db_pass);
  mysql_select_db($db);

  if ($table == 'tmp') {
    $sql = 'SELECT `ID` FROM `tbl_tmp_user`';
    $result = mysql_query($sql);
  } elseif ($table == 'user') {
    $sql = 'SELECT `ID` FROM `tbl_user`';
    $result = mysql_query($sql);
  } else {
    echo 'Erreur !';
    exit;
  }

  $num = mysql_numrows($result);

  $i = 0;
  while ($i < $num) {
    $db_uid = mysql_result ($result, $i, 'ID');
    if ($db_uid == $uid) {
      if ($table == 'tmp') {
        mysql_query("DELETE FROM `tbl_tmp_user` WHERE `ID` = '$db_uid'");
        echo 'Supprimer';
        //mysql_close();
        exit;
      } else {
        mysql_query("DELETE FROM `tbl_user` WHERE `ID` = '$db_uid'");
        echo 'Supprimer';
        //mysql_close();
        exit;
      }
    }
    $i++;
  }
  echo 'Introuvable';
  //mysql_close();
}
?>