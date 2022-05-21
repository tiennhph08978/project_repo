<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string description
 * @property integer price
 * @property string image
 * @property integer status
 *
 */
class Product extends Model
{
    /**
     * @var mixed
     */


    protected $table = "products";

    use HasFactory;
}
