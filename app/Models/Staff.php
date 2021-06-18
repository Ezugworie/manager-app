<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_person',
        'email',
        'phone',
        'address_id',
        'created_by'

    ];


    /**
     * Get the address associated with the staff.
     */
    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
