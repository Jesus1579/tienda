<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $table = 'salaries';

    protected $fillable = [
        'employee_id',
        'method_payment_id',
        'total'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function method_payment()
    {
        return $this->belongsTo(MethodPayment::class, 'method_payment_id', 'id');
    }
}
