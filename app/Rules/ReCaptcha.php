<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class ReCaptcha implements ValidationRule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Constructor kosong jika tidak diperlukan
    }

    /**
     * Validate the attribute value.
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @param  \Closure  $fail
     * @return void
     */
    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $value
        ]);

        // Cek apakah response dari Google Recaptcha berhasil
        if (!$response->json()['success']) {
            $fail('The google recaptcha validation failed.');
        }
    }
}
