<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IvProfit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'investment_id',
        'amount',
        'invested',
        'currency',
        'rate',
        'payout',
        'calc_at'
    ];

    /**
     * Get the user that owns the IvProfits
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the investment that owns the IvProfits
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investment()
    {
        return $this->belongsTo(Investment::class, 'investment_id');
    }
}
