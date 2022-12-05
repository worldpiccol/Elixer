<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swap extends Model
{
    use HasFactory;

      protected $fillable = [

        'user_id',
        'crypto_id',
        'swap_ref',
        'from_crypto_id',
        'to_crypto_id',
        'from_amount',
        'to_amount',
        'swap_value',
        'ex_rate',
        'description',
        'remark',
        'provider',

    ];

    /**
     * Get the fromCrypto that owns the Swap
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromCrypto()
    {
        return $this->belongsTo(Crypto::class, 'from_crypto_id');
    }

    public function toCrypto()
    {
        return $this->belongsTo(Crypto::class, 'to_crypto_id');
    }

    /**
     * Get the user that owns the Swap
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
