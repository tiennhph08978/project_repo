<?php

namespace Modules\FrontEnd\Services;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Modules\FrontEnd\Contracts\Repositories\Mysql\ContactRepository;
use Modules\FrontEnd\Contracts\Services\ContactService;
use Illuminate\Support\Facades\Mail;

class ContactServiceImpl  implements ContactService
{
    protected ContactRepository $contactRepository;
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function storeContact(Request $request)
    {
        $contact  = new Contact;
        $contact->first_name = $request->get('first_name');
        $contact->last_name = $request->get('last_name');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->content = $request->get('content');
        $data = $contact->toArray();
        // dd($data['email']);
        Mail::send('frontend::email', $data, function ($message) use ($data){
            $message->to('nguyenhuutien2k@gmail.com')->subject($data['first_name']);
        });
        return $this->contactRepository->storeContact($contact);
        // TODO: Implement sendMail() method.
    }
}
