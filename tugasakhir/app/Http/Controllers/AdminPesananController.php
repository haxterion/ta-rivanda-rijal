<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminPesananController extends CBController {


    public function cbInit()
    {
        $this->setTable("tb_pesanan");
        $this->setPermalink("pesanan");
        $this->setPageTitle("Pesanan");

        $this->addSelectTable("User","id_user",["table"=>"tb_user","value_option"=>"id","display_option"=>"username","sql_condition"=>""]);
		$this->addText("Acara","acara")->strLimit(150)->maxLength(255);
		$this->addDate("Tanggal","tanggal");
		$this->addSelectTable("Paket","id_paket",["table"=>"tb_paket","value_option"=>"id","display_option"=>"nama_paket","sql_condition"=>""]);
		$this->addText("Lokasi","lokasi")->strLimit(150)->maxLength(255);
		$this->addTextArea("Catatan","catatan")->strLimit(150);
		$this->addText("Konfirmasi","konfirmasi")->strLimit(150)->maxLength(255);
		

    }
}
