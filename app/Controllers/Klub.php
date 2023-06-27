<?php

namespace App\Controllers;

use App\Models\KlubModel;

class Klub extends BaseController
{
    protected $klubModel;
    public function __construct()
    {
        $this->klubModel=new KlubModel();
    }
    public function index()
    {
        $klub=$this->klubModel->findAll();
        
        $data=[
            'title'=>'Daftar Anggota| WEB UTS',
            'klub'=>$klub
            
        ];

        // cara konek db tnpa model
        // $db=\Config\Database::connect();
        // $komik =$db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray()as $row){
        //     d($row);
        // }

        // cara konek db pake model
        // $komikModel=new \App\Models\KomikModel();
        
        
        return view('klub/index', $data);
        
    }
    
    
}
?>