<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    function home(){
        return View('pages.home');
    }

    function menu(){
        return View('pages.menu');
    }

    function about(){
        return View('pages.about');
    }

    function beansStory(){
        return View('pages.beans-story');
    }

    function contact(){
        return View('pages.contact');
    }
}
