<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function index(){
        $title = "Welcome to laravel";
    //return view('pages.index',compact('title'));//
    return view('pages.index')->with('title',$title);
    //return view('pages.index');//
    }

    public function about(){
        return view('pages.about');
        }

    public function service(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programing', 'SEO']
        );
        return view('pages.service')->with($data);
        }

    public function practice(){
        return view('pages.practice');
        }


}