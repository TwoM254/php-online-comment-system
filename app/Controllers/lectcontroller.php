<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Libraries\Hash;

class lectcontroller extends Controller {

        public function __construct(){
                helper(['url','form']);
        }
        
        public function lect_register()
        {
                
                return view("pocsviews/lect_register");
        }
        public function index()
        {
                return view("pocsviews/lect_login");
        }
       
      
       

        public function save2(){
                
                $validation = $this->validate([
                        'fname' => ['required',
                        'errors' =>[
                                'required' => " fname of lecture is required"
                        ]
                        ],
                        'lname' => ['required',
                        'errors' =>[
                                'required' => "last name of lecture is required"
                        ]
                        ],
                        'email' =>[
                                'rules' => 'required|valid_email|is_unique[users.email]',
                                'errors' => [
                                        'required' => 'Lecture Email is required',
                                        'valid_email' => 'His/her must enter a valid email',
                                        'is_unique' => 'His/her already taken'
                                ]
                                ],
                        
                        'password' =>[
                                'rules' => 'required|min_length[5]|max_length[12]',
                                'errors' =>[
                                        'required' => 'Password is required',
                                        'min_length' => 'Password must have atleast 5 characters in length',
                                        'max_length' => 'Password must not have characters more than 12 in length'
                                ]
                                ],
                        'cpassword'=>[
                                'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
                                'errors'=>[
                                        'required' => 'Confirm Password is required',
                                        'min_length' => 'Confirm Password must have atleast 5 characters in length',
                                        'max_length' => 'Confirm Password must not have characters more than 12 in length',
                                        'matches'=> 'Confirm password not matches with password'
                                ]
                                ],
                ]);               
                if(!$validation){
                        return view('pocsviews/lect_register',['validation'=>$this->validator]);
                }
                else{
                        //lets register user in db
                        $fname =$this->request->getPost('fname');
                        $lname =$this->request->getPost('lname');
                        $email=$this->request->getPost('email');
                        $password=$this->request->getPost('password');
                        
                        $values= [
                                'fname'=>$fname,
                                'lname'=>$lname,
                                'email'=>$email,
                                'password'=>Hash::make($password),
                        ];
                        $userModel = new \App\Models\lectModel();
                        $query =$userModel->insert($values);
                        if(!$query){
                                return redirect()->back()->with('fail','Operation failed!');   
                                    }
                        else{
                                return redirect()->to('lect_register')->with('succsess', 'you are registered succcessfuly!');
                                return view("tablecontroller/index");
                        	//$last_id = $userModel->insertId();//this is last inserted id
                        	//session()->set('loggedUser', $last_id);
                        	return redirect()->to('/\\');
                        }
                }
        }
        
        function check2(){
        	//let's start validation
               $validation = $this->validate([
                       'email'=>[
                               'rules'=> 'required|valid_email|is_not_unique[lecture_tbl.email]',
                               'errors'=> [
                                       'required'=>'email is required',
                                       'valid_email'=> 'Enter a valid email address',
                                       'is_not_unique'=>'This email is not registered on our server'
                               ]
                               ],
                        'password'=>[
                                'rules'=>'required|min_length[5]|max_length[12]',
                                'errors'=>[
                                        'required'=>'password is required',
                                        'min_length'=>'password must be atleast 5 characters in length',
                                        'max_lentgth'=>'password must not excceed 12 characters in length'
                                ]
                                ],
               ]);
               if(!$validation){
                return view('pocsviews/lect_login',['validation'=>$this->validator]);
               }
               else{
               	//let's check user
                       $email = $this->request->getPost('email');
                       $password =$this->request->getPost('password');
                       $userModel = new \App\Models\lectModel();
                       $user_info = $userModel->where('email',$email)->first();
                       $check_password =$userModel->where('password',$password)->first();

                       if(!$check_password){
                               session()->setFlashdata('fail','incorrect password');
                               return redirect()->to('/lectcontroller')->withInput();
                       }
                       else{
                               $user_id = $user_info['id'];
                               session()->set('loggedUser', $user_id);
                               return redirect()->to('/tablecontroller');
                       }
               }
        }
}