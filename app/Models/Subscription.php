<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['user_id', 'name', 'amount', 'billing_cycle', 'next_due_date', 'is_active'];

    protected function casts(): array
    {
        return [
            'next_due_date' => 'date',
            'is_active' => 'boolean',
            'amount' => 'decimal:2',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
