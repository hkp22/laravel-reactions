<?php

namespace Qirolab\Tests\Laravel\Reactions\Stubs\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Qirolab\Laravel\Reactions\Contracts\ReactsInterface;
use Qirolab\Laravel\Reactions\Traits\Reacts;

class User extends Authenticatable implements ReactsInterface
{
    use Reacts;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
