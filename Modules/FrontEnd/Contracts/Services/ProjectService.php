<?php

namespace Modules\FrontEnd\Contracts\Services;

use Illuminate\Database\Eloquent\Collection;

interface ProjectService
{
    /**
     * @return Collection
     */
    public function getDataProject(): Collection;
}
