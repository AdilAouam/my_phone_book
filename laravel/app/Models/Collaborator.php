<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $table = 'collaborator';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'civility', 'first_name', 'last_name', 'street', 'postal_code', 'city', 'phone_number', 'email', 'company_id'
    ];

    public function getCompany()
    {
        return $this->hasOne('App\Models\Company');
    }

    use HasFactory;
}
