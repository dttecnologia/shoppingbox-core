<?php

namespace shoppingbox\core;

use Illuminate\Database\Eloquent\Model;

class WishlistDetailModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wishlists';

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
        'wishlist', 'product', 'units',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'created_at', 'updated_at',
    ];
}
