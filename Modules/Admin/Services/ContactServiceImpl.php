<?php

namespace Modules\Admin\Services;

use Modules\Admin\Contracts\Repositories\Mysql\ContactRepository;
use Modules\Admin\Contracts\Services\ContactService;

class ContactServiceImpl implements ContactService
{
    private $contactRepository;
    
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function getDataContact()
    {
        return $this->contactRepository->getDataContact();
    }

    public function deleteContact(int $id)
    {
        $this->contactRepository->deleteContact($id);
    }
}
