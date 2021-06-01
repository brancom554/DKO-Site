<?php
//  var_dump($page_requested);
//  die;
switch ($page_requested) {

	case "devis":
		include "devis.php";
		break;
	case "about":
		include "about.php";
		break;
	case "contact":
		include "contact.php";
		break;
	case "project":
		include "project.php";
		break;
	case "blog":
		include "blog.php";
		break;
	case "service":
		include "service.php";
		break;
	case "site":
		$storeUrl = urldecode($param2[0]);
		include "magasin_page.php";
		break;
	case "prix":
		include "prix_en_baisse_page.php";
		break;

	case "checkout":
		include "checkout_page.php";
		break;

	case "sousCategory":
		include "sub_category_page.php";
		break;
	case "category":
	case "famille":
	case "espace":
		include "category_page.php";
		break;

	case "search":
		include "product_search_page.php";
		break;

	case "sousFamille":
	case "subCategory":
	case "rayon":
		include "sub_category_page.php";
		break;
	case "product":
	case "article":
		include "product_page.php";
		break;

	case "imgView":
		include 'view_image.php';
		exit;
		break;

	case "contacter":
	case "contact":
		//include "contact.php";
		$view = "contact.phtml";
		break;

	case "sendMessage":
		include "contact.php";
		exit;
		break;

	case "customer":
	case $iniObj->serviceName:

		include "customer.php";
		break;

	case 'jsp':
		header("Content-Type: text/javascript");
		include(_JS_PATH . $url_array[2]);
		exit;
		break;
	case 'ajsp':
		header("Content-Type: text/javascript");
		include(_JS_A_PATH . $url_array[3]);
		exit;
		break;

	case 'corpCss':
		include(_CSS_PATH . $url_array[3]);
		exit;
		break;

	case 'design':
		$im = imagecreatefrompng(_IMG_PATH . $url_array[3]);
		header('Content-Type: image/png');
		imagepng($im);
		imagedestroy($im);
		exit;
		break;

	case 'xml':
		include(_LIB_PATH . "/xmlDataRequest.php");
		exit;
		break;

	case 'json':
		include(_LIB_PATH . "jsonDataRequest.php");
		exit;
		break;

	case "lang":
		$cntFile = "/change_lang.php";
		include _CONTROLER_PATH . $cntFile;
		exit;
		break;

	case "maintenance":
		include _VIEW_PATH . "maintenance.html";
		break;
		exit;

	case "testPunch":
		include "puchOutTest.php";
		exit;
		break;
	case "receivePunchOut":
		include "puchOutReceiveCart.php";
		exit;
		break;
	case "sendOrderPunchOut":
		include "puchOutTestOrder.php";
		exit;
		break;
	case "cgu":
		$view = "fr/cgu.phtml";
		break;
	case "mentionslegales":
		$view = "fr/mentions_legales.phtml";
		break;

	case "professionnels":
		$view = $viewPath . "/" . $lib->lang . "/" . "professionnels.phtml";
		break;

	case "map-points":
		$view = $viewPath . "/" . $lib->lang . "/" . "map_points.phtml";
		break;

	default:
	include "home_page.php";

	// $view = $viewPath . "/" . $lib->lang . "/" . "home_page_content.phtml";
	break;
}
