<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'crypto_id',
        'balance_ref',
        'balance',
        'locked_balance',
        'balance_account',
        'is_locked',

    ];

    /**
     * Get the user that owns the Balance
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the crypto that owns the Balance
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function crypto()
    {
        return $this->belongsTo(Crypto::class);
    }
}
