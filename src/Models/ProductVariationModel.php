<?php

namespace shoppingbox\core;

use Illuminate\Database\Eloquent\Model;

class ProductVariationModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_variations';

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
        'product', 'variation', 'cost_price', 'recommended_price', 'price', 'related_image', 'ean', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product', 'id');
    }


    /**
     * Get variations as array.
     *
     * @param  string  $value
     * @return string
     */
    public function getVariationAttribute($value)
    {
        return json_decode($value);
    }

        /**
     * Get variations full name (product + variation).
     *
     * @param  string  $value
     * @return string
     */
    public function getProductFullNameAttribute($value)
    {
        return $this->product()->first()->name . ' (' . $this->name . ')';
    }
}
