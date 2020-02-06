<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $fillable = ['judul','slug','deskrips','foto','user_id','kategori_id'];
    public $timestamps = true;

     public function kategori()
    {
        // model kategori bisa memiliki banyak data
        // dari model artikel melalui kategori_id
        return $this->belongsTo('App\kategori','kategori_id');
    }

    public function user()
    {
        // data model artikel dimiliki oleh user melalui kategori_id
        return $this->BelongTo('App\user','user_id');
    }
     public function tag()
    {
        // model tag bisa memiliki relasi many to many(belongToMany)
        // terhadap model artikel yang terhubung oleh
        // table artikel_tag masing-masing sebagai artikel_id dan
        // tag_id
        return $this->belongsToMany('App\tag','artikel_tag','artikel_id','tag_id');
    }
}
