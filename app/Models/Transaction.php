<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'tnx_id',
        'type',
        'crypto_id',
        'wallet_address_id',
        'balance_id',
        'account_id',
        'amount',
        'currency',
        'from_currency',
        'to_currency',
        'total',
        'from_amount',
        'to_amount',
        'status',
        'refund',
        'pay_from',
        'pay_to',
        'reference',
        'description',
        'remarks',
        'note',
        'confirmed_at',
        'confirmed_by',
        'completed_at',
        'completed_by',
        'created_by',
        'withdrawal_wallet_address_id'
    ];

     protected $casts = [
        'completed_at' => 'datetime',
    ];

    /**
     * Get the wallet that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wallet()
    {
        return $this->belongsTo(WalletAddress::class,'wallet_address_id');
    }

       public function wd_wallet()
    {
        return $this->belongsTo(WithdrawWallet::class,'withdrawal_wallet_address_id');
    }

    /**
     * Get the crypto that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function crypto()
    {
        return $this->belongsTo(Crypto::class);
    }

    /**
     * Get the user that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the account that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
