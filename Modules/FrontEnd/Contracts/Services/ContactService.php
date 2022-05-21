<?php

namespace Modules\FrontEnd\Contracts\Services;

use Illuminate\Http\Request;

interface ContactService
{
    public function storeContact(Request $request);
}
