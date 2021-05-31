<?php

namespace App\Controllers;

use App\Models\commentModel;
use App\Models\userModel;
class Dashboard extends BaseController
{

        public function __construct(){
                helper(['url','form']);
        }
        public function indexx()
        {
                return view("dashboard/addcomment");
        }
    public function index()
    {
        $userModel = new \App\Models\userModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title'=> 'POCS | Dashboard',
            'stitle'=> 'Dashboard',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/index', $data);
    }
    public function addcomment()
    {
        $userModel = new \App\Models\userModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title'=> 'POCS | Add comment',
            'stitle'=> 'Add comment',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/addcomment', $data);
    }
    public function commentRegister()
    {
        /*
        //form validation
        //$validation = $this->validate([
        //    'username' =>'required',
        //      'email' =>'required|valid_email|is_unique[users.email]',
        //    'phone' =>'required|min_lenght[10]|max_lenght[13]|is_unique[users.phone]',
        //   'password' =>'required',
        //   'cpassword' =>'required|matches[password]'
               
        //]);
        $validation = $this->validate([
                        'fname' => ['required',
                        'errors' =>[
                                'required' => "your first name is required"
                        ]
                        ],
                        'lname' =>[
                                'rules' => 'required',
                                'errors' => [
                                        'required' => 'your last name is required'
                                        
                                ]
                                ],
                        'phone'=>[
                                'rules'=>'required|min_length[10]|max_length[10]|is_unique[users.phone]',
                                'errors'=>[
                                        'required'=> 'phone is required here please',
                                        'is_unique'=> 'your number already taken',
                                        'min_length' => 'fill atleast 10 numbers ',
                                        'max_length' => 'your must not exceed more than 10 numbers '
                                ]
                        ],
                        'gender' =>[
                                'rules' => 'required',
                                'errors' =>[
                                        'required' => 'Your sex is required'
                                        
                                ]
                                ],
                        'comment'=>[
                                'rules' => 'required',
                                'errors'=>[
                                        'required' => ' 😒😒 Comment is required'
                                        
                                ]
                                ],
                ]);
        if (!$validation) {
            return view('dashboard/addcomment', ['validation'=>$this->validator]);
        } else {
                */
            //lets register user in db
         $fname=$this->request->getPost('fname');
         $lname=$this->request->getPost('lname');
         $gender=$this->request->getPost('gender');
         $telphone=$this->request->getPost('telphone');
         $comment=$this->request->getPost('comment');
                        
            $values= [
                                'fname'=>$fname,
                                'lname'=>$lname,
                                'gender'=>$gender,
                                 'phone'=>$telphone,
                                'comment'=>$comment,
                        ];
            $commentModel = new \App\Models\commentModel();
            $query =$commentModel->insert($values);
            if (!$query) {
                return redirect()->back()->with('fail', 'Operation failed!');
            } else {
                //return redirect()->to('register')->with('succsess', 'you are registered succcessfuly!');
                return view("pocsviews/login");
                //$last_id = $userModel->insertId();//this is last inserted id
                //session()->set('loggedUser', $last_id);
                //return redirect()->to('/\\');
            }
        }
    }
?>
