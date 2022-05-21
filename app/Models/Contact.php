<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string first_name
 * @property string last_name
 * @property string email
 * @property string phone
 * @property string content
 */
class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'content'
    ];
    public $timestamps = false;
}
