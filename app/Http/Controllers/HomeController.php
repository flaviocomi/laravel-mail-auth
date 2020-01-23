<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Category;
use App\Post;
use App\Mail\MailableName;


class HomeController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
}
