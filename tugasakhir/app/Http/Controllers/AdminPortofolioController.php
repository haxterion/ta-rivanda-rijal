<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminPortofolioController extends CBController {


    public function cbInit()
    {
        $this->setTable("tb_admin");
        $this->setPermalink("portofolio");
        $this->setPageTitle("Portofolio");

        $this->addImage("Foto","foto")->encrypt(true);
		$this->addTextArea("Ket","ket")->strLimit(150);
		

    }
}
