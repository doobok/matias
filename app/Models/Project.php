<?php

namespace App\Models;

use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    use Translatable;
    use Resizable;

    protected $translatable = ['body', 'heading', 'teaser', 'description'];

}
