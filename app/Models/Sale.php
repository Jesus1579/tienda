<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'product_id',
        'buyer_id',
        'method_payment_id',
        'total'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function buyers()
    {
        return $this->belongsTo(Buyer::class, 'buyer_id', 'id');
    }

    public function method_payment()
    {
        return $this->belongsTo(MethodPayment::class, 'method_payment_id', 'id');
    }
}
