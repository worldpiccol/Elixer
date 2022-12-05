<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletAddress extends Model
{
    use HasFactory;

    protected $fillable = [

        'crypto_id',
        'wallet_address',
        'platform',
        'title',
        'description',
        'instruction_to_user',
        'is_locked',

    ];

    /**
     * Get the crypto that owns the WalletAddress
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function crypto()
    {
        return $this->belongsTo(Crypto::class);
    }

    /**
     * Get all of the transactions for the WalletAddress
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
