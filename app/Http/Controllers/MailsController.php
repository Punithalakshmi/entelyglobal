<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class MailsController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('mails');
    }

    public function create()
    {
       
    }

    public function save(Request $request)
    {
        
    }
    public function edit($id)
    {
       
    }
 
    public function delete($id)
    {
       
    }
}
