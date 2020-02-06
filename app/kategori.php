<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $filelable = ['nama','slug'];
    public $timestamp = true;

    public function artikel()
    {
        // model kategori bisa memiliki banyak data
        // dari model artikel melalui kategori_id
        return $this->hasMany('App\artikel','kategori_id');
    }
}
