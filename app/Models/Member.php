<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // <<< WAJIB pakai Authenticatable
use Spatie\Permission\Traits\HasRoles;

class Member extends Authenticatable
{
    use HasFactory, HasRoles;

    protected $guarded = [];

    protected $guard_name = 'web';
}
