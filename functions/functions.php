<?php 

function getArrayContent($array)
{
	$firstTime = true;

	foreach ($array as $item) {
		if ($firstTime)
		{
			$aItens = "'".$item."'";
			$firstTime = false;
		}
		else
		{
			$aItens .= ",'".$item."'";
		}
	}

	return $aItens;
}

function redirect($viewName)
{
	header("Location: /$viewName");
}

function createFile($fileName)
{
	file_put_contents('App/Views/routes/'.$fileName.'.php','');
}

function createModel()
{

}

function createController()
{

}

function createRoutes($routeName)
{
	$routes[$routeName] = array(
    	'path' => '/'.$routeName,
    	'controller' => 'LivrosController',
    	'action' => 'create'
	);

	$routes[$routeName] = array(
    	'path' => '/'.$routeName,
    	'controller' => 'LivrosController',
    	'action' => 'create'
	);

	$routes[$routeName] = array(
    	'path' => '/'.$routeName,
    	'controller' => 'LivrosController',
    	'action' => 'create'
	);

	$routes[$routeName] = array(
    	'path' => '/'.$routeName,
    	'controller' => 'LivrosController',
    	'action' => 'create'
	);	
}

function createActions()
{

}

?>