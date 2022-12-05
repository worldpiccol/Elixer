<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentScheme extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'description',
        'crypto_id',
        'slug',
        'min_amount',
        'max_amount',
        'terms',
        'term_type',
        'rate',
        'rate_type',
        'calc_period',
        'days_only',
        'status',
        'is_locked',
        'featured',
        'capital',
        'payout'
    ];

    /**
     * Get the crypto that owns the InvestmentScheme
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function crypto()
    {
        return $this->belongsTo(Crypto::class);
    }

    protected $casts = [
        'max_amount' => 'double',
        'min_amount' => 'double',
        'rate' => 'float',
        'terms' => 'integer',
    ];
}
