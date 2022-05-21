<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *  @property string name
 */

class Category extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */

    protected $table = "categories";

    protected $fillable = [
      'name'
    ];

}
