<?php

namespace Modules\FrontEnd\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('frontend::about_us');
    }
}
