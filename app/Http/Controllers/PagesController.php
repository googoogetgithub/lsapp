<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index() {

        $title = ' Welcome to home page';
        return view('pages.index' , compact('title'));
    }
    public function about() {
        $title = 'About us ....';
        return view('pages.about')->with('title', $title);
    }
    public function services() {
        $title = ' Service & Branches';

        $data = [
               'title' => $title
               , 'services' => ['Web Design' , 'SEO' , 'What else???'] 

        ];
        return view('pages.services')->with($data);
    }
}
