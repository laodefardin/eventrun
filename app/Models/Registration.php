<?php

namespace App\Models;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Registration extends Model
{
        use HasFactory;
        // Tambahkan hanya field yang diizinkan untuk mass assignment
        protected $fillable = [
        'event_id',
        'participant_name',
        'email',
        'phone_number',
        'registration_date',
        'payment_status',
        'total_price',
    ];

    public $incrementing = false; // Nonaktifkan auto-increment

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($registration) {
            // Membuat custom ID berdasarkan format tanggal, waktu, dan tahun
            $today = now()->format('Ymd');
            $latestRegistration = Registration::where('id', 'like', "$today%")->latest()->first();
            $nextNumber = $latestRegistration ? intval(substr($latestRegistration->id, -4)) + 1 : 1;
            $registration->id = $today . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

            // $registration->id = now()->format('dmY') . Str::random(2);
        });
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
