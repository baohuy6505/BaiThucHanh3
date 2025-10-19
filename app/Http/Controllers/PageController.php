<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $drink = array_slice($this->drink, 0, 3);
        return View('pages.home', ['drinks' => $drink, 'activePage' => '/']);
    }

    public function menu()
    {
        $drink = $this->drink;
        return View('pages.menu', ['drinks' => $drink, 'activePage' => 'menu']);
    }

    public function about()
    {
        return View('pages.about', ['activePage' => 'about']);
    }

    public function beansStory()
    {
        $beans = $this->bean;
        return View('pages.beans-story', ['beans'=> $beans, 'activePage' => 'beansStory']);
    }

    public function contact()
    {
        return View('pages.contact', ['activePage' => 'contact']);
    }

    public function detail($id)
    {
        $drink = collect($this->drink)->firstWhere('id', $id);
        return view('pages.details', ['drink' => $drink ,  'activePage' => '/']);
        //return response()->json($drink, 200);
    }
}
