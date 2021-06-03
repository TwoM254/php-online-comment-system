<?php

namespace App\Controllers;
use App\Models\main_Model;

class tablecontroller extends BaseController
{
	public function index()
	{
        $tblcontroler= new \App\Models\commentModel();
        $datainfo=$tblcontroler->FindAll();
        $data=[
            'datainfo'=>$datainfo
        ];

        //$data['post_comment'] = $tblcontroler->findAll();
		return view('/main_view', $data);
	}
    public function delcomment()
	{
        $tblcontroler= new \App\Models\commentModel();
        $datainfo=$tblcontroler->FindAll();
        $data=[
            'datainfo'=>$datainfo
        ];

        //$data['post_comment'] = $tblcontroler->findAll();
		return view('pocsviews/deletecomment', $data);
	}
   public function delete($id)
    {
        $del= new \App\Models\commentModel();
        $del->delete($id);
        return redirect()->to('tablecontroller/delcomment');

        
    }
}
