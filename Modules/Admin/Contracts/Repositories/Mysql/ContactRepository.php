<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

interface ContactRepository
{
    public function getDataContact();

    public function deleteContact(int $id);
}
