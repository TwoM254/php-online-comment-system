<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class welcome extends Controller
{
	    
    public function index1()
    {
       
        return view('dashboard/indexx');
    }
}
