<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;



class Category extends Model
{
    use Searchable;

    protected $fillable = ['title', 'slug','lang','type','meta_description','en_slug','es_slug','ar_slug'];
    public function posts()

    {

    	return $this->hasMany(Post::class);

    }

    public function getRouteKeyName()

    {

    	return 'slug';

    }
    // public function scopeEnglish($query)
    // {
    //   return $query->where('lang', '=', 'en');
    // }
    //
    // public function scopeSpanish($query)
    // {
    //    return $query->where('lang', '=', 'es');
    // }
    //
    // public function scopeArabic($query)
    // {
    //    return $query->where('lang', '=', 'ar');
    // }
}
