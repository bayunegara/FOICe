<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'kategori';
    
    protected $fillable = [
          'id_kategori',
          'slug_kategori',
          'nama_kategori'
    ];
    

    public static function boot()
    {
        parent::boot();

        Kategori::observe(new UserActionsObserver);
    }
    
    
    
    
}