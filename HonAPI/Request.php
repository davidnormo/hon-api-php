<?php
namespace HonAPI;
class Request
{
	 private $token;
	 private $baseUrl = 'https://api.heroesofnewerth.com';
	 private $controller;
	 private $method;
	 private $properties = array();

	 /**
	  * New Request
	  *
	  * @param String $token
	  */
	 public function __construct($token)
	 {
		  $this->token = $token;
	 }

	 /**
	  * Set the controller for this request
	  *
	  * @param String $controller
	  */
	 public function setController($controller)
	 {
		  $this->controller = urlencode($controller);
		  return $this;	 
	 }

	 /**
	  * Set the method for this request
	  *
	  * @param String $method The part of the API that follows the controller, 
	  * also called the model method
	  */
	 public function setMethod($method)
	 {
		  $this->method = urlencode($method);
		  return $this;
	 }

	 /**
	  * Set a property key/value pair
	  *
	  * @param String $key
	  * @param Mixed $value
	  */
	 public function setProperty($key, $value)
	 {
		$this->properties[urlencode($key)] = urlencode($value);
		return $this;
	 }

	 /**
	  * Builds the request uri from the components gathered
	  *
	  * @return String
	  */
	 private function buildRequestUri()
	 {
		$requestUri = $this->baseUrl . '/' . $this->controller . '/' . $this->method . '/';
		foreach($this->properties as $key => $value){
			$requestUri .=  $key . '/' . $value . '/';
		}
		$requestUri .= '?token='.$this->token;
	
		return $requestUri;
	 }

	 /**
	  * Execute the request and return the response
	  *
	  * @return String JSON
	  */
	 public function fetch()
	 {
		//build the request URI
		$requestUri = $this->buildRequestUri(); 
		//send request, return response
		//return file_get_contents($requestUri);
		echo $requestUri;
	 }
}
