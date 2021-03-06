<?php

namespace shoppingbox\core;

use Illuminate\Database\Eloquent\Model;

class StorePaymentModel extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_payments';

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
        'orders', 'amount'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
