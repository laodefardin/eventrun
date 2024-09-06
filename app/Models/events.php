<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    // definisikan fillable jika perlu
    protected $fillable = ['name', 'slug' ,'description', 'date', 'location' , 'categori','topik','price','img'];

    // event boot untuk membuat slug
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            $event->slug = Str::slug($event->topik);
        });

        static::updating(function ($event) {
            $event->slug = Str::slug($event->topik);
        });
    }
}
