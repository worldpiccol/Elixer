<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinaryScheme extends Model
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
        'status',
        'featured',
        'outcome'
    ];

    protected $casts = [
        'max_amount' => 'double',
        'min_amount' => 'double',
        'rate' => 'float',
        'terms' => 'integer',
    ];

    /**
     * Get the crypto that owns the BinaryScheme
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function crypto()
    {
        return $this->belongsTo(Crypto::class);
    }
}
