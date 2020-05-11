<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminUserController extends CBController {


    public function cbInit()
    {
        $this->setTable("tb_user");
        $this->setPermalink("user");
        $this->setPageTitle("User");

        $this->addText("Username","username")->strLimit(150)->maxLength(255);
		$this->addEmail("Email","email");
		$this->addPassword("Password","password");
		$this->addText("Nama","nama")->strLimit(150)->maxLength(255);
		$this->addText("Alamat","alamat")->strLimit(150)->maxLength(255);
		$this->addNumber("No Telp","no_telp");
		$this->addText("Level","level")->strLimit(150)->maxLength(255);
		

    }
}
