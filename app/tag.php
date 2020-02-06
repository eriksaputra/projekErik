<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $fillable = ['nama','slug'];
    public $timestamps = true;

    public function artikel()
    {
        // model tag bisa memiliki relasi many to many(belongToMany)
        // terhadap model artikel yang terhubung oleh
        // table artikel_tag masing-masing sebagai artikel_id dan
        // tag_id
        return $this->belongsToMany('App\artikel','artikel_tag','tag_id','artikel_id');
    }
}
