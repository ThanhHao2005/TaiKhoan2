<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Cột có thể được gán giá trị
    protected $fillable = [
        'user_id', 'order_number', 'total', 'status'
    ];

    // Mối quan hệ "nhiều-về-một" với bảng users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mối quan hệ với order_notes (mỗi đơn hàng có thể có nhiều ghi chú)
    public function orderNotes()
    {
        return $this->hasMany(OrderNote::class);
    }

}
