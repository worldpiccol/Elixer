<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawWallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'crypto_id',
        'title',
        'address'
    ];

    /**
     * Get the user that owns the WithdrawWallet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the crypto that owns the WithdrawWallet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function crypto()
    {
        return $this->belongsTo(Crypto::class);
    }

    /**
     * Get the transaction that owns the WithdrawWallet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
