<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can pass any data you want to the view here
        return view('welcome');
    }

    /**
     * Display a public page.
     *
     * @param  string  $page
     * @return \Illuminate\View\View
     */
    public function showPage($page)
    {
        // Check if the requested page exists
        if (view()->exists($page)) {
            // Return the requested view
            return view($page);
        }

        // If the requested page doesn't exist, return a 404 error
        abort(404);
    }
}
