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

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category', 'category_id', 'product_id');
    }

}
