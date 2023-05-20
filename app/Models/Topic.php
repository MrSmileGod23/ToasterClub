<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subcategory_id',
        'title',
        'text'
    ];

    public function subcategory() {

        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function users() {

        return $this->belongsTo(User::class, 'user_id');
    }

    public function answers() {

        return $this->hasMany(AnswerTopic::class);
    }
}
