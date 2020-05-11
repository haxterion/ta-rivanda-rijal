<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminPaketController extends CBController {


    public function cbInit()
    {
        $this->setTable("tb_paket");
        $this->setPermalink("paket");
        $this->setPageTitle("Paket");

        $this->addText("Nama Paket","nama_paket")->strLimit(150)->maxLength(255);
		$this->addMoney("Harga Paket","harga_paket");
		$this->addTextArea("Ket","ket")->strLimit(150);
		

    }
}
