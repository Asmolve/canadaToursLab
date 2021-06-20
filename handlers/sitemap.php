<?php
// Подключение к ДБ.
require_once 'C:\OpenServer\domains\canadatours.ca\handlers\connect.php';

$query ="SELECT * FROM `tours`";
$dbh = $connect->query($query);

$tours = $dbh->fetch_all(); 


$out = '<?xml version="1.0" encoding="UTF-8"?>';

$out .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';


foreach ($tours as $row) {

	$price = $row[3];
	$priority =  rand(1, 10)/10;

	$out .= '

	<url>

		<loc>http://canadatours.ca/tours/' . $row[0] . '.html</loc>

		<priority>'. $priority .'</priority>

		<price>'. $price.'</price>

	</url>';

}

 

$out .= '</urlset>';

		

header('Content-Type: text/xml; charset=utf-8');

echo $out;



exit();