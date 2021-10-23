<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnumber extends Model
{
    //use HasFactory;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                'part_number','serial_number','tsn','tso'
    ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_partnumber';

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }

}
