<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //use HasFactory;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                'name'
    ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer';

    public function custometr()
    {
        return $this->hasMany('App\Models\job');
    }

}
