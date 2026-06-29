<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'goal_amount',
        'amount_raised',
        'image',
    ];

    // Dynamically calculate the percentage for the frontend progress bar
    public function getProgressPercentageAttribute()
    {
        if ($this->goal_amount == 0) {
            return 0;
        }
        $percentage = ($this->amount_raised / $this->goal_amount) * 100;
        return min(100, round($percentage)); // Caps at 100%
    }
}
