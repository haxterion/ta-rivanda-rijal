<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminPortofolioController extends CBController {


    public function cbInit()
    {
        $this->setTable("tb_admin");
        $this->setPermalink("portofolio");
        $this->setPageTitle("Portofolio");

        $this->addText("Judul","judul")->strLimit(150)->maxLength(255);
		$this->addImage("Foto","foto")->encrypt(true);
		$this->addTextArea("Ket","ket")->strLimit(150);
		

    }
}
