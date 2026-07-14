<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Only allow these specific fields to be saved to the database
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'is_read',
    ];
}