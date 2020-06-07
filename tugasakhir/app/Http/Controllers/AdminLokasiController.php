<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminLokasiController extends CBController {


    public function cbInit()
    {
        $this->setTable("tb_lokasi");
        $this->setPermalink("lokasi");
        $this->setPageTitle("Lokasi");

        $this->addText("Nama Kota","nama_kota")->strLimit(150)->maxLength(255);
		

    }
}
