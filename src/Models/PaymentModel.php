<?php

namespace shoppingbox\core;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payments';

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
        'code', 'franchise', 'type', 'amount', 'status', 'payment_data'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

     /**
     * Get User agent
     *
     * @return User
     */
    public function getAgent()
    {
        $franchise = FranchiseModel::find($this->franchise);
        $agent = User::find($franchise->agent);
        return $agent;
    }
}