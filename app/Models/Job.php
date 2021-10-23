<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //use HasFactory;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                'job_number','customer_id','tbl_partnumber_id','work_details','po_number','notes'
    ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job';

    public function custometr()
    {
        return $this->belongsTo('App\Models\customer');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Partnumber');
    }
}
