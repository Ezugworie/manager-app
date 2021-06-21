<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'size_id',
        'type_id',
        'created_by'
    ];

    /**
     * Get the size associated with the Bin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function size(): HasOne
    {
        return $this->hasOne(Size::class);
    }


    /**
     * Get the type associated with the Bin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type(): HasOne
    {
        return $this->hasOne(Type::class);
    }
}
