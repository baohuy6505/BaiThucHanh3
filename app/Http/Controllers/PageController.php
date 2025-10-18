<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $drink = array_slice($this->drink, 0, 3);
        return View('pages.home', ['drinks' => $drink , 'activePage' => 'home']);
    }

    public function menu()
    {
        $drink = $this->drink;
        return View('pages.menu', ['drinks' => $drink , 'activePage' => 'menu']);
    }

    public function about()
    {
        return View('pages.about',['activePage' => 'about']);
    }

    public function beansStory()
    {
        return View('pages.beans-story',['activePage' => 'beansStory']);
    }

    public function contact()
    {
        return View('pages.contact',['activePage' => 'menu']);
    }

    public function detail($id)
    {
        $drink = collect($this->drink)->firstWhere(('id'), $id);
        //return View('page.detail',['drink' => $drink]);
        return response()->json($drink, 200);
    }
}
