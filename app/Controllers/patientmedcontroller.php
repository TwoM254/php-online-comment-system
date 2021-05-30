<?php

namespace App\Controllers;

use App\Models\patientModel;
use App\Models\userModel;
class patientmedcontroller extends BaseController
{
public function patientMed(){
		$userModel = new \App\Models\userModel();
        $patientModel = new \App\Models\patientModel();
		$loggedUserID = session()->get('loggedUser');
        $patientId = session()->get('patientid');
		$userInfo = $userModel->find($loggedUserID);
        $patientInfo = $patientModel->find($patientId);
		$levelModel = new \App\Models\levelModel();
		$levelInfo = $levelModel->findAll();
		$medicationModel = new \App\Models\medicationModel();
		$medicationInfo = $medicationModel->findAll();
		$doseModel = new \App\Models\doseModel();
		$doseInfo = $doseModel->findAll();
		$dataa = [
			'title'=> 'ARV | patient Medication',
			'stitle'=> 'Add medication',
			'levelInfo'=> $levelInfo,
			'medicationInfo'=>$medicationInfo,
			'doseInfo'=>$doseInfo,
			'userInfo'=>$userInfo,
            'patientInfo'=>$patientInfo
		];
		//return redirect()->to('patientmedcontroller/patientMed',$dataa);
		return view('patientmedview/patientMed',$dataa);
	}
	public function level(){
		
	}
	public function patientSelectId(){
		
	}

}
?>