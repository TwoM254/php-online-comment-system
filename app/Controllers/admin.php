<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
//use App\Libraries\Hash;

class admin extends Controller {

        public function __construct(){
                helper(['url','form']);
        }
        
        public function lect_register()
        {
                
                return view("pocsviews/lect_register");
        }
        public function index()
        {
                return view("pocsviews/admin_login");
        }
    
        function check2(){
        	//let's start validation
               $validation = $this->validate([
                       'username'=>[
                               'rules'=> 'required',
                               'errors'=> [
                                       'required'=>'Admin username is required'
                                      
                               ]
                               ],
                        'password'=>[
                                'rules'=>'required',
                                'errors'=>[
                                        'required'=>'Admin password is required'
                                        
                                ]
                                ],
               ]);
               if(!$validation){
                return view('pocsviews/admin_login',['validation'=>$this->validator]);
               }
               else{
               	//let's check user
                       $username = $this->request->getPost('username');
                       $password =$this->request->getPost('password');
                       $admin_model= new \App\Models\admin_model();
                       $user_info = $admin_model->where('username',$username)->first();
                       $check_password =$admin_model->where('password',$password)->first();

                       if(!$check_password){
                               session()->setFlashdata('fail','incorrect password');
                               return redirect()->to('/admin_login')->withInput();
                       }
                       else{
                               $user_id = $user_info['id'];
                               session()->set('loggedUser', $user_id);
                               return redirect()->to('/lectcontroller/save2');
                       }
               }
        }
}