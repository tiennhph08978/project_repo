<?php

namespace Modules\Admin\Contracts\Services;

interface ContactService
{
    public function getDataContact();

    public function deleteContact(int $id);
}
