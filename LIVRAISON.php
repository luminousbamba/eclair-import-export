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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form5")) {
  $insertSQL = sprintf("INSERT INTO commandes (NBRCOMMANDE, produit_commande_internet, livraison_express, livraison_normal, prix) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['NBRCOMMANDE'], "int"),
                       GetSQLValueString($_POST['produit_commande_internet'], "text"),
                       GetSQLValueString(isset($_POST['livraison_express']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['livraison_normal']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['prix'], "double"));

  mysql_select_db($database_connexiontable, $connexiontable);
  $Result1 = mysql_query($insertSQL, $connexiontable) or die(mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title></head>

<<!-- wp:post-title {"textAlign":"center","textColor":"primary"} /-->

<!-- wp:page-list /-->
<p>
  <!-- wp:cover {"url":"https://vente879286735.files.wordpress.com/2022/09/envoi-colis-senegal.jpg","id":292,"dimRatio":20,"customOverlayColor":"#000000","minHeight":620,"isDark":false,"align":"full"} -->
</p>
<div class="wp-block-cover alignfull is-light" style="min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim" style="background-color:#000000"></span><img src="imglogo vrai.png" alt="" width="289" height="241" class="wp-block-cover__image-background wp-image-292" data-object-fit="cover"/>
  <div class="wp-block-cover__inner-container"><!-- wp:jetpack/layout-grid {"addGutterEnds":false,"column1DesktopSpan":10,"column1DesktopOffset":1,"column1TabletSpan":8,"column1MobileSpan":4,"column2DesktopOffset":1,"className":"alignfull column1-desktop-grid__span-10 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"} -->
<div class="wp-block-jetpack-layout-grid alignfull column1-desktop-grid__span-10 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1 wp-block-jetpack-layout-gutter__nowrap"><!-- wp:jetpack/layout-grid-column -->
<div class="wp-block-jetpack-layout-grid-column wp-block-jetpack-layout-grid__padding-none"><!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":80,"lineHeight":"1.1"}}} -->
<p align="center" class="has-text-align-center has-text-color" style="color:#ffffff;font-size:80px;line-height:1.1"><strong>Faite<span class="wp-block-cover alignfull is-light" style="min-height:620px"><img src="imagedream/Envoi-colis-Senegal.jpg" alt="hj" width="1024" height="576" class="wp-block-cover__image-background wp-image-292" data-object-fit="cover"/></span>er</strong>micile !!</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ffffff"}}} -->
nous pouvons faire le chemin pour vous.
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"text":"#ffffff","background":"#a5150f"}}} -->
<div class="wp-block-button">
  <p>&nbsp;</p>
  
    <form method="post" name="form3">
    </form>
    <p>&nbsp;</p>
    
    <p>&nbsp;</p>
    <form id="form2" name="form2" method="post" action="">
    <div class="wp-block-buttons alignfull">
      <!-- wp:button {"className":"is-style-fill"} -->
      <div class="wp-block-button is-style-fill">
        <p>&nbsp;</p>
        <p><a href="identification.php">IDENTIFICATION</a></p>
        <p><a href="index.php">INSCRIPTION</a></p>
        <p><a href="Acceuil.php">ACCUEIL </a></p>
        <p><a href="LIVRAISON.html">LIV</a><a href="LIVRAISON.php">RAISON </a></p>
        <p><a href="PRODUITS.php">PRODUITS</a></p>
        <p><a href="SERVICECLIENT.html">SERVICE CLIE</a><a href="SERVICECLIENT.php">NT</a></p>
        <p>&nbsp;</p>
      </div>
      <!-- /wp:button -->
      <!-- wp:button {"className":"is-style-fill"} -->
      <div class="wp-block-button is-style-fill"></div>
      <!-- /wp:button -->
      <!-- wp:button {"className":"is-style-fill"} -->
      <div class="wp-block-button is-style-fill"></div>
      <!-- /wp:button -->
      <!-- wp:button {"className":"is-style-fill"} -->
      <div class="wp-block-button is-style-fill"></div>
      <table width="490" height="210" align="center">
        <tr valign="baseline">
          <td nowrap align="right">NBRCOMMANDE:</td>
          <td><input type="text" name="NBRCOMMANDE" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Produit_commande_internet:</td>
          <td><input type="text" name="produit_commande_internet" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Livraison_express:</td>
          <td><input type="checkbox" name="livraison_express" value="" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Livraison_normal:</td>
          <td><input type="checkbox" name="livraison_normal" value="" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Prix:</td>
          <td><input type="text" name="prix" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td height="68" align="right" nowrap>&nbsp;</td>
          <td><p>
              <input type="submit" name="Submit" value="Envoyer" />
            </p>
              <p>&nbsp;</p></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form5" />
<!-- /wp:button -->
      <!-- wp:button {"className":"is-style-fill"} -->
      <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"></a></div>
      <!-- /wp:button -->
    </div>
  </form>
  </div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:jetpack/layout-grid-column --></div>
<!-- /wp:jetpack/layout-grid --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"align":"center","fontSize":"huge"} -->
<p align="center">&nbsp;</p>
<form id="form1" name="form1" method="POST">
</form>
<p>&nbsp;</p>
    <form method="post" name="form4"><strong>N<span style="text-decoration:underline;">OS TARIFS (Tout taxe compris):</span></strong>
</form>
    
    <!-- /wp:paragraph -->

<!-- wp:media-text {"mediaId":42,"mediaType":"image","mediaWidth":62} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:62% auto"><figure class="wp-block-media-text__media"><span class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:62% auto"><img src="imagedream/GettyImages-591986620-5bef257d46e0fb0058f570a9.jpg" alt="" width="521" height="332" class="wp-image-42 size-full"/></span></figure>
<div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Contenu…","fontSize":"large"} -->
<p class="has-large-font-size">NOUS AVONS LES TARIFS LES PLUS BAS DU MARCHE GRACE A NOTRE PARTENARIAT AVEC LES CARGO EUROPÉENS. </p>
<p>
  <!-- /wp:paragraph -->
  
  <!-- wp:jetpack/rating-star {"rating":4,"color":"#df1a1a","className":"is-style-outlined"} -->
  <figure class="wp-block-jetpack-rating-star is-style-outlined" style="text-align:left"><span style="color:#df1a1a">?</span><span style="color:#df1a1a">?</span><span style="color:#df1a1a">?</span><span style="color:#df1a1a">?</span></figure>
  <!-- /wp:jetpack/rating-star -->
</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<form id="form1" name="form1" method="POST">
  <div align="center"></div>
</form>
</div>
</div>
<!-- /wp:media-text -->

<!-- wp:jetpack/layout-grid {"column1DesktopSpan":8,"column1DesktopOffset":1,"column1TabletSpan":8,"column1MobileSpan":4,"column2DesktopOffset":7,"className":"alignfull column1-desktop-grid__span-8 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"} -->
<div class="wp-block-jetpack-layout-grid alignfull column1-desktop-grid__span-8 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"><!-- wp:jetpack/layout-grid-column -->
<div class="wp-block-jetpack-layout-grid-column wp-block-jetpack-layout-grid__padding-none"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":49,"lineHeight":"1.2"}},"className":"margin-bottom-half"} -->
<p class="has-text-align-left margin-bottom-half" style="font-size:49px;line-height:1.2">PRODUIT DE LUXE</p>
<!-- /wp:paragraph --></div>
<!-- /wp:jetpack/layout-grid-column --></div>
<!-- /wp:jetpack/layout-grid -->

<!-- wp:table {"hasFixedLayout":true,"style":{"color":{"gradient":"linear-gradient(135deg,rgba(3,113,130,0.35) 0%,rgb(40,116,252) 100%)"}},"textColor":"primary","className":"is-style-stripes","fontSize":"medium"} -->
<figure class="wp-block-table is-style-stripes has-medium-font-size"><table class="has-primary-color has-text-color has-background has-fixed-layout" style="background:linear-gradient(135deg,rgba(3,113,130,0.35) 0%,rgb(40,116,252) 100%)"><tbody><tr><td class="has-text-align-center" data-align="center">QUANTITÉ  (en unité)</td><td class="has-text-align-center" data-align="center">PRIX LIVRAISON EXPRESS (moins de 24 heures)</td><td class="has-text-align-center" data-align="center">PRIX LIVRAISON STANDARD ( 3 jour à 1 semaine)</td></tr><tr><td class="has-text-align-center" data-align="center"><strong>1 à 5</strong></td><td class="has-text-align-center" data-align="center">15 000 fr</td><td class="has-text-align-center" data-align="center">10 000 fr</td></tr><tr><td class="has-text-align-center" data-align="center"><strong> 6 à 10</strong></td><td class="has-text-align-center" data-align="center">20 000 fr</td><td class="has-text-align-center" data-align="center">15 000 fr</td></tr><tr><td class="has-text-align-center" data-align="center"><strong> 11 à </strong>15</td><td class="has-text-align-center" data-align="center">25  000 fr</td><td class="has-text-align-center" data-align="center">20 000 fr</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:jetpack/layout-grid {"column1DesktopSpan":5,"column1DesktopOffset":1,"column1TabletSpan":8,"column1MobileSpan":4,"column2DesktopOffset":7,"className":"alignfull column1-desktop-grid__span-5 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"} -->
<div class="wp-block-jetpack-layout-grid alignfull column1-desktop-grid__span-5 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"><!-- wp:jetpack/layout-grid-column -->
<div class="wp-block-jetpack-layout-grid-column wp-block-jetpack-layout-grid__padding-none"><!-- wp:paragraph {"style":{"typography":{"fontSize":49,"lineHeight":"1.2"}},"className":"margin-bottom-half"} -->
<p class="margin-bottom-half" style="font-size:49px;line-height:1.2">VÊTEMENTS</p>
<!-- /wp:paragraph --></div>
<!-- /wp:jetpack/layout-grid-column --></div>
<!-- /wp:jetpack/layout-grid -->

<!-- wp:table {"hasFixedLayout":true,"textColor":"primary","gradient":"electric-grass","className":"is-style-stripes","fontSize":"medium"} -->
<figure class="wp-block-table is-style-stripes has-medium-font-size"><table class="has-primary-color has-electric-grass-gradient-background has-text-color has-background has-fixed-layout"><tbody><tr><td class="has-text-align-center" data-align="center">QUANTITÉ  (en article)</td><td class="has-text-align-center" data-align="center">PRIX LIVRAISON EXPRESS (moins de 24 heures)</td><td class="has-text-align-center" data-align="center">PRIX LIVRAISON STANDARD ( 3 jour à 1 semaine)</td></tr><tr><td class="has-text-align-center" data-align="center"><strong>1 à 10</strong></td><td class="has-text-align-center" data-align="center">25 000 fr</td><td class="has-text-align-center" data-align="center">15 000 fr</td></tr><tr><td class="has-text-align-center" data-align="center"><strong> 11 à </strong>20</td><td class="has-text-align-center" data-align="center">35 000 fr</td><td class="has-text-align-center" data-align="center">20 000 fr</td></tr><tr><td class="has-text-align-center" data-align="center"><strong> 21 à </strong>30</td><td class="has-text-align-center" data-align="center">40  000 fr</td><td class="has-text-align-center" data-align="center">30 000 fr</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:jetpack/layout-grid {"column1DesktopSpan":5,"column1DesktopOffset":1,"column1TabletSpan":8,"column1MobileSpan":4,"column2DesktopOffset":7,"className":"alignfull column1-desktop-grid__span-5 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"} -->
<div class="wp-block-jetpack-layout-grid alignfull column1-desktop-grid__span-5 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"><!-- wp:jetpack/layout-grid-column -->
<div class="wp-block-jetpack-layout-grid-column wp-block-jetpack-layout-grid__padding-none"><!-- wp:paragraph {"style":{"typography":{"fontSize":49,"lineHeight":"1.2"}},"className":"margin-bottom-half"} -->
<p class="margin-bottom-half" style="font-size:49px;line-height:1.2">CHAUSSURES</p>
<!-- /wp:paragraph --></div>
<!-- /wp:jetpack/layout-grid-column --></div>
<!-- /wp:jetpack/layout-grid -->

<!-- wp:table {"hasFixedLayout":true,"textColor":"primary","gradient":"blush-light-purple","className":"is-style-stripes","fontSize":"medium"} -->
<figure class="wp-block-table is-style-stripes has-medium-font-size"><table class="has-primary-color has-blush-light-purple-gradient-background has-text-color has-background has-fixed-layout"><tbody><tr><td class="has-text-align-center" data-align="center">QUANTITÉ  (en unité)</td><td class="has-text-align-center" data-align="center">PRIX LIVRAISON EXPRESS (moins de 24 heures)</td><td class="has-text-align-center" data-align="center">PRIX LIVRAISON STANDARD ( 3 jour à 1 semaine)</td></tr><tr><td class="has-text-align-center" data-align="center"><strong>1 à </strong>10</td><td class="has-text-align-center" data-align="center">15 000 fr</td><td class="has-text-align-center" data-align="center">10 000 fr</td></tr><tr><td class="has-text-align-center" data-align="center"><strong> 11 à 20</strong></td><td class="has-text-align-center" data-align="center">25 000 fr</td><td class="has-text-align-center" data-align="center">20 000 fr</td></tr><tr><td class="has-text-align-center" data-align="center"><strong> 21 à </strong>30</td><td class="has-text-align-center" data-align="center">35 000 fr</td><td class="has-text-align-center" data-align="center">25 000 fr</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:jetpack/layout-grid {"column1DesktopSpan":7,"column1DesktopOffset":1,"column1TabletSpan":8,"column1MobileSpan":4,"column2DesktopOffset":7,"className":"alignfull column1-desktop-grid__span-7 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"} -->
<div class="wp-block-jetpack-layout-grid alignfull column1-desktop-grid__span-7 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"><!-- wp:jetpack/layout-grid-column -->
<div class="wp-block-jetpack-layout-grid-column wp-block-jetpack-layout-grid__padding-none"><!-- wp:paragraph {"style":{"typography":{"fontSize":49,"lineHeight":"1.2"}},"className":"margin-bottom-half"} -->
<p class="margin-bottom-half" style="font-size:49px;line-height:1.2">ELECTRONIQUES</p>
<!-- /wp:paragraph --></div>
<!-- /wp:jetpack/layout-grid-column --></div>
<!-- /wp:jetpack/layout-grid -->

<!-- wp:table {"hasFixedLayout":true,"textColor":"primary","gradient":"pale-ocean","className":"is-style-stripes","fontSize":"medium"} -->
<figure class="wp-block-table is-style-stripes has-medium-font-size"><table class="has-primary-color has-pale-ocean-gradient-background has-text-color has-background has-fixed-layout"><tbody><tr><td class="has-text-align-center" data-align="center">QUANTITÉ </td><td class="has-text-align-center" data-align="center">PRIX LIVRAISON EXPRESS (moins de 24 heures)</td><td class="has-text-align-center" data-align="center">PRIX LIVRAISON STANDARD ( 3 jour à 1 semaine)</td></tr><tr><td class="has-text-align-center" data-align="center">SMARTPHONE</td><td class="has-text-align-center" data-align="center">10 000 fr l'unité</td><td class="has-text-align-center" data-align="center">6 000 fr l'unité</td></tr><tr><td class="has-text-align-center" data-align="center"><strong> </strong>ORDINATEUR</td><td class="has-text-align-center" data-align="center">15 000 fr l'unité</td><td class="has-text-align-center" data-align="center">10 000 fr l'unité</td></tr><tr><td class="has-text-align-center" data-align="center"><strong> </strong>CASQUE / MICRO</td><td class="has-text-align-center" data-align="center">5000 fr l'unité</td><td class="has-text-align-center" data-align="center">3000 fr l'unité</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:jetpack/layout-grid {"column1DesktopSpan":7,"column1DesktopOffset":1,"column1TabletSpan":8,"column1MobileSpan":4,"column2DesktopOffset":7,"className":"alignfull column1-desktop-grid__span-7 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"} -->
<div class="wp-block-jetpack-layout-grid alignfull column1-desktop-grid__span-7 column1-desktop-grid__start-2 column1-desktop-grid__row-1 column1-tablet-grid__span-8 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"><!-- wp:jetpack/layout-grid-column -->
<div class="wp-block-jetpack-layout-grid-column wp-block-jetpack-layout-grid__padding-none"><!-- wp:paragraph {"style":{"typography":{"fontSize":49,"lineHeight":"1.2"}},"className":"margin-bottom-half"} -->
<p class="margin-bottom-half" style="font-size:49px;line-height:1.2">PRODUITS ELECTROMÉNAGER</p>
<!-- /wp:paragraph --></div>
<!-- /wp:jetpack/layout-grid-column --></div>
<!-- /wp:jetpack/layout-grid -->

<!-- wp:table {"hasFixedLayout":true,"style":{"color":{"gradient":"linear-gradient(70deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%)"}},"textColor":"primary","className":"is-style-stripes","fontSize":"medium"} -->
<figure class="wp-block-table is-style-stripes has-medium-font-size"><table class="has-primary-color has-text-color has-background has-fixed-layout" style="background:linear-gradient(70deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%)"><tbody><tr><td class="has-text-align-center" data-align="center">QUANTITÉ  (en catégorie)</td><td class="has-text-align-center" data-align="center">PRIX LIVRAISON EXPRESS (moins de 24 heures)</td><td class="has-text-align-center" data-align="center">PRIX LIVRAISON STANDARD ( 3 jour à 1 semaine)</td></tr><tr><td class="has-text-align-center" data-align="center">MIXEUR/MACHINE A CAFÉ<strong> </strong></td><td class="has-text-align-center" data-align="center">2 000 fr l'unité</td><td class="has-text-align-center" data-align="center">1 000 fr l'unité</td></tr><tr><td class="has-text-align-center" data-align="center">M LAVER/ FRIGO<strong> </strong>/CLIMATISEUR</td><td class="has-text-align-center" data-align="center">50 000 fr Par Lots de 3</td><td class="has-text-align-center" data-align="center">35 000 fr  Par Lots de 3</td></tr><tr><td class="has-text-align-center" data-align="center">TV </td><td class="has-text-align-center" data-align="center">10 000 fr l'unité</td><td class="has-text-align-center" data-align="center">7000 fr l'unité</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","style":{"color":{"background":"#000000"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#000000"><!-- wp:social-links {"align":"center"} -->
<ul class="wp-block-social-links aligncenter"><!-- wp:social-link {"url":"","service":"wordpress"} /-->

<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
</ul>

