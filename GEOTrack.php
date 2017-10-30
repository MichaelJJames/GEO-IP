<?php
class GEOTrack {
	
	// returns IP, CountryCode, CountryName, RegionCode, RegionName, City, ZipCode, TimeZone, Latitude, Longitude, MetroCode
	public static function info($ip) {

		$apiURL = 'http://freegeoip.net/json/'.$ip;
		$response = file_get_contents($apiURL);
		$data = json_decode($response);

		return $data;

	}
	
	// returns Country Code
	public static function countryCode($ip) {

		$apiURL = 'http://freegeoip.net/json/'.$ip;
		$response = file_get_contents($apiURL);
		$decoding = json_decode($response);
		$country_code = $decoding->country_code;

		return $country_code;

	}
	
	// returns Country Name
	public static function countryName($ip) {

		$apiURL = 'http://freegeoip.net/json/'.$ip;
		$response = file_get_contents($apiURL);
		$decoding = json_decode($response);
		$country_name = $decoding->country_name;

		return $country_name;

	}
	
	// returns Region Code
	public static function regionCode($ip) {

		$apiURL = 'http://freegeoip.net/json/'.$ip;
		$response = file_get_contents($apiURL);
		$decoding = json_decode($response);
		$region_code = $decoding->region_code;

		return $region_code;

	}
	
	// returns Region Name
	public static function regionName($ip) {

		$apiURL = 'http://freegeoip.net/json/'.$ip;
		$response = file_get_contents($apiURL);
		$decoding = json_decode($response);
		$region_name = $decoding->region_name;

		return $region_name;

	}
	
	// returns City
	public static function city($ip) {

		$apiURL = 'http://freegeoip.net/json/'.$ip;
		$response = file_get_contents($apiURL);
		$decoding = json_decode($response);
		$city = $decoding->city;

		return $city;

	}
	
	// returns ZipCode
	public static function zipCode($ip) {

		$apiURL = 'http://freegeoip.net/json/'.$ip;
		$response = file_get_contents($apiURL);
		$decoding = json_decode($response);
		$zip_code = $decoding->zip_code;

		return $zip_code;

	}
	
	// returns Time Zone
	public static function timeZone($ip) {

		$apiURL = 'http://freegeoip.net/json/'.$ip;
		$response = file_get_contents($apiURL);
		$decoding = json_decode($response);
		$timeZone = $decoding->time_zone;

		return $timeZone;

	}
	
	// returns Lat, Lng
	public static function latLng($ip) {

		$apiURL = 'http://freegeoip.net/json/'.$ip;
		$response = file_get_contents($apiURL);
		$decoding = json_decode($response);
		$latLng = $decoding->latitude . ', ' . $decoding->longitude;

		return $latLng;

	}
	
	// returns Metro Code
	public static function metroCode($ip) {

		$apiURL = 'http://freegeoip.net/json/'.$ip;
		$response = file_get_contents($apiURL);
		$decoding = json_decode($response);
		$metro_code = $decoding->metro_code;

		return $metro_code;

	}
	
}
