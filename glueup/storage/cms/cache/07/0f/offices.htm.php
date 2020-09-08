<?php 
use Raccoon\GeoLocation\Facades\Geo;use October\Rain\Router\Router as RainRouter;use Cms\Classes\ComponentBase;class Cms5f5632549c830418229301_d13f26541c95eb05e2f730482ce09991Class extends Cms\Classes\PartialCode
{

//
//
protected $redirect;

protected $translator;
public function onStart() {
$background = $this->background;

$ipAddress = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);   
$geoLocation = Geo::getLocation($ipAddress);  
	$this['Location'] = $geoLocation->countryCode; 

//$this['string'] = $string; 
}
}
