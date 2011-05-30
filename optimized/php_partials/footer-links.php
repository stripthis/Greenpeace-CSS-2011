<?php



$footer_links = array(
	"What we do" => array(
		"Climate change",
		"Forests",
		"Oceans",
		"Agriculture",
		"Toxic Pollution",
		"Nuclear",
	),
	"About us" => array(
		"Press center",
		"Introduction",
		"Victories",
		"Ships",
		"Frequently Asked Questions",
		"Work for Greenpeace",
	),
	"Multimedia" => array(
		"Photos",
		"Videos",
		"Desktop wallpapers",
		"Photo essays",
	),
	"National and regional wbsite in English" => array(
		"Africa",
		"Australia",
		"Canada",
		"China",
		"India",
		"Mediterranean",
		"New Zealand",
		"United Kingdom",
		"United States",
		"Greenpeace around the world",
	),
	"Take Actions" => array(
		"Ask Princes Tuna to Stop canning ocean destruction",
		"Hel get facebook.com off coal",
		"Stop nuclear investments",
		"More ways to get inolved",
	),
	"Hot this month" => array(
		"Calling for Pacific marine reserves in Taiwan",
		"Video: Give Earth a hand",
		"Help get facebook.com off coal",
		"About the floods in Queensland",
	),
	"Greenpeace Online" => array(
		"Facebook",
		"Flickr",
		"Twitter",
		"Youtube",
		"RSS",
	),
);

function print_links_dd($links){
	$result = "";
	
	foreach	($links as $link) {
		$result .= "<dd><a href='#'>$link</a></dd> \n";	
	}
	
	return $result;
}	
	
function print_links_li($links){
	$result = "";
	
	foreach	($links as $link) {
		$result .= "<li><a href='#'>$link</a></li> \n";	
	}
	
	return $result;
}	
	
