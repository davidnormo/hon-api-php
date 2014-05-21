<?php
function autoload($className)
{
	 $className = ltrim($className, '\\');
	 $fileName  = '';
	 $namespace = '';
	 if ($lastNsPos = strripos($className, '\\')) {
		  $namespace = substr($className, 0, $lastNsPos);
		  $className = substr($className, $lastNsPos + 1);
		  $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
	 }
	 $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

	 if(stream_resolve_include_path($fileName) !== false){
		  require $fileName;
	 } else {
		throw new Exception($fileName);
	 }
}
spl_autoload_register('autoload');
