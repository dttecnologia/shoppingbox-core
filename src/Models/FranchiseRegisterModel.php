<?php
namespace shoppingbox\core;

use Illuminate\Database\Eloquent\Model;

class FranchiseRegisterModel extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'franchise_register';

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
        'name', 'surname', 'company_name', 'nif', 'street', 'number', 'floor', 'door', 'town', 'province', 'postal_code', 'country', 'phone', 'email', 'notes',
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
