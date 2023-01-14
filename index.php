<?php require_once('Connections/connexiontable.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form4")) {
  $insertSQL = sprintf("INSERT INTO utilisateur (id_utilisateur, nom_utilisateur, prenom_utilisateur, mot_de_passe_utilisateur) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['id_utilisateur'], "int"),
                       GetSQLValueString($_POST['nom_utilisateur'], "text"),
                       GetSQLValueString($_POST['prenom_utilisateur'], "text"),
                       GetSQLValueString($_POST['mot_de_passe_utilisateur'], "int"));

  mysql_select_db($database_connexiontable, $connexiontable);
  $Result1 = mysql_query($insertSQL, $connexiontable) or die(mysql_error());

  $insertGoTo = "Acceuil.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Loisirs - Page d'accueil</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_entertainment.css" type="text/css" />
<style type="text/css">
<!--
.Style1 {
	font-size: 24px;
	color: #FFFFFF;
}
.Style6 {color: #000000}
.Style8 {color: #000000; font-size: 18px; }
-->
</style>
</head>
<body bgcolor="#14285f">
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000066">
  <tr bgcolor="02021e">
    <td colspan="4" rowspan="2" nowrap="nowrap" class="Style6"><img src="mm_entertainment_image.jpg" alt="Header image" width="400" height="140" border="0" /></td>
    <td height="76" nowrap="nowrap" colspan="3" id="logo" valign="bottom"> <div align="center" class="Style1"> CONNEXION AU COMPTE </div></td>
    <td width="51">&nbsp;</td>
  </tr>
  <tr bgcolor="02021E">
<td height="52" nowrap="nowrap" colspan="3" id="tagline" valign="top">&nbsp;</td>


	<td width="51">&nbsp;</td>
  </tr>
  <tr>
    <td height="2" colspan="8" bgcolor="#cc3300"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

   <tr>
    <td height="39" colspan="8" bgcolor="#000033"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

   <tr>
    <td colspan="8" bgcolor="#cc3300"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

   <tr>
    <td colspan="8" bgcolor="#000000">&nbsp;<br />
	&nbsp;<br />	</td>
  </tr>
  <tr>
    <td width="208" valign="top" height="370">
	<table border="0" cellspacing="0" cellpadding="0" width="205" id="navigation">
        <tr>
          <td width="205" height="40"><p><a href="identification.php">IDENTIFICATION</a></p>
            <p><a href="index.php">INSCRIPTION</a></p>
            <p><a href="Acceuil.php">ACCUEIL</a></p></td>
        </tr>
        <tr>
          <td width="205" height="18"><p><a href="LIVRAISON.php">LIVRAISON</a></p>          </td>
        </tr>
        <tr>
          <td width="205" height="40"><a href="PRODUITS.php">PRODUITS</a></td>
        </tr>
        <tr>
           <td width="205" height="40"><a href="SERVICECLIENT.php">SERVICE CLIENT</a></td>
        </tr>
      </table></td>
    <td width="1" bgcolor="#445DA0"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
    <td width="66"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top" bgcolor="#000066"><form method="post" name="form1" action="">
    </form>
      <p>&nbsp;</p>
      
      <form method="post" name="form2" class="Style1">
INSCRIPTION
      </form>
      <p>&nbsp;</p>
      
        <form method="POST" name="form3">
        </form>
      <p>&nbsp;</p>
      
        <form method="POST" name="form4">
        <table align="center" bgcolor="#FFFFFF">
          <tr valign="baseline">
            <td nowrap align="right"><span class="Style8">Id_utilisateur:</span></td>
            <td><input type="text" name="id_utilisateur" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right"><span class="Style8">Nom_utilisateur:</span></td>
            <td><input type="text" name="nom_utilisateur" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right"><span class="Style8">Prenom_utilisateur:</span></td>
            <td><input type="text" name="prenom_utilisateur" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right"><span class="Style8">Mot_de_passe_utilisateur:</span></td>
            <td><input type="text" name="mot_de_passe_utilisateur" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">&nbsp;</td>
            <td><input type="submit" value="enregistrement"></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form4">
      </form>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <br /></td>
    <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td width="194" valign="top"><img src="mm_spacer.gif" alt="" width="1" height="10" border="0" /><br />      
      <br /> </td>
    <td width="51">&nbsp;</td>
  </tr>
  <tr>
    <td width="208">&nbsp;</td>
    <td width="1"></td>
    <td width="66">&nbsp;</td>
    <td width="6">&nbsp;</td>
    <td width="488">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="194">&nbsp;</td>
    <td width="51">&nbsp;</td>
  </tr>
</table>
</body>
</html>
