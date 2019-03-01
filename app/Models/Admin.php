<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use CrudTrait;

    protected $table = 'admins';

    protected $fillable = ['name', 'email', 'password'];
}
