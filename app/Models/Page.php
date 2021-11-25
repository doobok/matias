<?php

namespace App\Models;

use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    use Translatable;
    use Resizable;

    protected $translatable = ['title', 'body', 'heading', 'description', 'teaser'];

    public function parent()
    {
      return $this->belongsTo('App\Models\Page', 'parrent', 'slug');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Page', 'parrent', 'slug');
    }
}
