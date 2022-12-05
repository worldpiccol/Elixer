<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'ivx',
        'amount',
        'profit',
        'total',
        'received',
        'received_profits',
        'currency',
        'rate',
        'term',
        'term_calc',
        'term_count',
        'term_total',
        'term_start',
        'term_end',
        'reference',
        'investment_scheme_id',
        'desc',
        'note',
        'status'
    ];

    /**
     * Get the user that owns the Investment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the investScheme that owns the Investment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investScheme()
    {
        return $this->belongsTo(InvestmentScheme::class, 'investment_scheme_id');
    }

    protected $casts = [
        'term_end' => 'datetime',
        'term_start' => 'datetime',
    ];

}
