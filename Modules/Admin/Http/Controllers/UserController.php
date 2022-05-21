<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('admin::user');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(int $id): Renderable
    {
        //
    }
}
