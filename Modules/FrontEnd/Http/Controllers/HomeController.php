<?php

namespace Modules\FrontEnd\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('frontend::index');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function detail(): Renderable
    {
        return view('frontend::our_product');
    }
}
