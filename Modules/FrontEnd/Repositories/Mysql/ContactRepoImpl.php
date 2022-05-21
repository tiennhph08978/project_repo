<?php

namespace Modules\FrontEnd\Repositories\Mysql;

use App\Models\Contact;
use Modules\FrontEnd\Contracts\Repositories\Mysql\ContactRepository;

class ContactRepoImpl implements ContactRepository
{

    public function storeContact(Contact $contact)
    {
        $contact->save();

        return $contact;
        // TODO: Implement storeContact() method.
    }
}
