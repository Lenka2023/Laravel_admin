<?php

namespace Modules\PagesModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name', 'path', 'content'
    ];
}
