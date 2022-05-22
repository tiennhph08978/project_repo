<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Contact;
use Modules\Admin\Contracts\Repositories\Mysql\ContactRepository;

class ContactRepoImpl implements ContactRepository
{
    public function getDataContact()
    {
        return Contact::query()->get();
    }

    public function deleteContact(int $id)
    {
        Contact::destroy($id);
    }
}
