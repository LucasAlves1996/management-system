<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class ModulesController extends Action
{
    public function create()
    {
        $module = Container::getModel('Module');

        $module->create($_POST);

        redirect('');
    }

	public function read()
	{
		$module = Container::getModel('Module');

		return $module->read();
	}

    public function update()
    {

    }

    public function delete()
    {
    	$module = Container::getModel('Module');

    	$module->delete($_POST);

    	redirect('');
    }
}

?>