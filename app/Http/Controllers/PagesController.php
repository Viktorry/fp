<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel!!!';
        return view('pages.view',compact('title'));
    }
    public function about()
    {
        $title = 'About us!!!';
        return view('pages.about', compact('title'));
    }
    public function services()
    {
           $data=[
               'title' => 'Services',
               'services' => ['Web Design', 'Programming', 'Insteresting stuff']
           ];
        return view('pages.services',compact('data'));
    }
}
