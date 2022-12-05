<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'crypto_id',
        'amount',
        'name',
        'code',
        'description',
        'reward_type',
        'reward_currency',
        'credit_reward_to',
        'is_claimed',
    ];

    /**
     * Get the user that owns the Coupon
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the crypto that owns the Coupon
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function crypto()
    {
        return $this->belongsTo(Crypto::class);
    }

    public function rewardClaim()
    {
        return $this->hasMany(rewardClaim::class);
    }
}
