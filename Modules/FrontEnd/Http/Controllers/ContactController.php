<?php

namespace Modules\FrontEnd\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\FrontEnd\Contracts\Services\ContactService;

class ContactController extends Controller
{
    protected ContactService $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('frontend::contact_us');
    }

    public function store(Request $request)
    {
        $data = $this->contactService->storeContact($request);
//        Mail::send('frontend::contact_us', $data, function ($message) use ($data){
//            $message->from($data['email']);
//            $message->to('hoainampham2k@gmail.com')->subject($data['first_name']);
//        });

        return redirect()->route('contact_us')->with('message', 'Success');
    }
}
