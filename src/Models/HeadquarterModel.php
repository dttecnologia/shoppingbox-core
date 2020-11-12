<?php

namespace shoppingbox\core;

use Illuminate\Database\Eloquent\Model;

class HeadquarterModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'headquarters';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'status', 'profit_susctiptions', 'profit_sales'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
