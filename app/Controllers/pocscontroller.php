<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Libraries\Hash;

class pocscontroller extends Controller {

        public function __construct(){
                helper(['url','form']);
        }
        public function index()
        {
                return view("pocsviews/login");
        }
        public function register()
        {
                
                return view("pocsviews/register");
        }
        public function save(){
                //form validation
                //$validation = $this->validate([
                    //    'username' =>'required',
                  //      'email' =>'required|valid_email|is_unique[users.email]',
                    //    'phone' =>'required|min_lenght[10]|max_lenght[13]|is_unique[users.phone]',
                     //   'password' =>'required',
                     //   'cpassword' =>'required|matches[password]'
               
                    //]);
                $validation = $this->validate([
                        'username' => ['required',
                        'errors' =>[
                                'required' => "your username is required"
                        ]
                        ],
                        'email' =>[
                                'rules' => 'required|valid_email|is_unique[users.email]',
                                'errors' => [
                                        'required' => 'Email is required',
                                        'valid_email' => 'You must enter a valid email',
                                        'is_unique' => 'Email already taken'
                                ]
                                ],
                        'reg_no'=>[
                                'rules'=>'required|min_length[9]|max_length[10]|is_unique[users.reg_no]',
                                'errors'=>[
                                        'required'=> 'reg_no is required',
                                        'is_unique'=> 'reg_no number already taken',
                                        'min_length' => 'reg_no must have atleast 10 numbers in length',
                                        'max_length' => 'reg_no must not exceed more than 10 numbers in length'
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
                        return view('pocsviews/register',['validation'=>$this->validator]);
                }
                else{
                        //lets register user in db
                        $username =$this->request->getPost('username');
                        $email=$this->request->getPost('email');
                        $reg_no=$this->request->getPost('reg_no');
                        $gender=$this->request->getPost('gender');
                        $password=$this->request->getPost('password');
                        
                        $values= [
                                'username'=>$username,
                                'email'=>$email,
                                'reg_no'=>$reg_no,
                                'gender'=>$gender,
                                'password'=>Hash::make($password),
                        ];
                        $userModel = new \App\Models\userModel();
                        $query =$userModel->insert($values);
                        if(!$query){
                                return redirect()->back()->with('fail','Operation failed!');   
                                    }
                        else{
                                return redirect()->to('register')->with('succsess', 'you are registered succcessfuly!');
                                return view("pocsviews/login");
                        	//$last_id = $userModel->insertId();//this is last inserted id
                        	//session()->set('loggedUser', $last_id);
                        	return redirect()->to('/\\');
                        }
                }
        }
        function check(){
        	//let's start validation
               $validation = $this->validate([
                       'email'=>[
                               'rules'=> 'required|valid_email|is_not_unique[users.email]',
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
                return view('pocsviews/login',['validation'=>$this->validator]);
               }
               else{
               	//let's check user
                       $email = $this->request->getPost('email');
                       $password =$this->request->getPost('password');
                       $userModel = new \App\Models\userModel();
                       $user_info = $userModel->where('email',$email)->first();
                       $check_password =Hash::check($password,$user_info['password']);

                       if(!$check_password){
                               session()->setFlashdata('fail','incorrect password');
                               return redirect()->to('/pocscontroller')->withInput();
                       }
                       else{
                               $user_id = $user_info['id'];
                               session()->set('loggedUser', $user_id);
                               return redirect()->to('/Dashboard');
                       }
               }
        }

        function logout(){
        	if (session()->has('loggedUser')) {
        		session()->remove('loggedUser');
        		return redirect()->to('/pocscontroller?access=out')->with('fail', 'you are logged out!');
        	}
        }

        public function save2(){
                
                $validation = $this->validate([
                        'fname' => ['required',
                        'errors' =>[
                                'required' => " pls your username is required"
                        ]
                        ],
                        'lname' => ['required',
                        'errors' =>[
                                'required' => "pls your username is required"
                        ]
                        ],
                        'email' =>[
                                'rules' => 'required|valid_email|is_unique[users.email]',
                                'errors' => [
                                        'required' => 'Email is required',
                                        'valid_email' => 'You must enter a valid email',
                                        'is_unique' => 'Email already taken'
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
                                return redirect()->to('register')->with('succsess', 'you are registered succcessfuly!');
                                return view("pocsviews/lect_login");
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
                               'rules'=> 'required|valid_email|is_not_unique[users.email]',
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
                       $check_password =Hash::check($password,$user_info['password']);

                       if(!$check_password){
                               session()->setFlashdata('fail','incorrect password');
                               return redirect()->to('/lect_login')->withInput();
                       }
                       else{
                               $user_id = $user_info['id'];
                               session()->set('loggedUser', $user_id);
                               return redirect()->to('/Dashboard');
                       }
               }
        }
}


