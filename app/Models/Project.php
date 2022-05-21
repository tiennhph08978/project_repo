<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string image
 */
class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    /**
     * @var mixed
     */
    protected $fillable = [
        'name',
        'image'
    ];
    public $timestamps = false;
}
