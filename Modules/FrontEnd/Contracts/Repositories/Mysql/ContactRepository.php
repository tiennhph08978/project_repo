<?php

namespace Modules\FrontEnd\Contracts\Repositories\Mysql;

use App\Models\Contact;

interface ContactRepository
{
    public function storeContact(Contact $contact);
}
