<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'price',
        'city_id',
        'category_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
