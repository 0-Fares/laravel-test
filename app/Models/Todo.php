<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Todo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'complete', 'description', 'user_id'
    ];

    /**
     *
     * Attributes that should be casted to either a date, array or boolean
     *
     * @var array
     */
    protected $casts = [
        'complete' => 'boolean',
        'user_id' => 'int'
    ];

    // Model relationship

    public function user(){
        return $this->belongsTo(User::class);
    }
}
