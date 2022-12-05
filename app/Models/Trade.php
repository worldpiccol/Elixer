<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'trd_id',
        'crypto_id',
        'trade_option_id',
        'pair',
        'capital',
        'profit',
        'trade_outcome',
        'start_price',
        'end_price',
        'status',
        'term',
        'term_type',
        'remark'
    ];

    /**
     * Get the user that owns the Trade
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the crypto that owns the Trade
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function crypto()
    {
        return $this->belongsTo(Crypto::class);
    }
}
