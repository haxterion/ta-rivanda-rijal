<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminAdminController extends CBController {


    public function cbInit()
    {
        $this->setTable("tb_admin");
        $this->setPermalink("admin");
        $this->setPageTitle("Admin");

        $this->addImage("Foto","foto")->encrypt(true);
		$this->addTextArea("Ket","ket")->strLimit(150);
		

    }
}
