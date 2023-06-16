<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    public function category(){

        return $this->belongsTo('Category', 'category_id');

    }

    public function topics(){

        return $this->hasMany(Topic::class);

    }

    public function answers()
    {

        return $this->hasMany(AnswerTopic::class);

    }

    public function answerTopics()
    {
        return $this->hasManyThrough(AnswerTopic::class, Topic::class);
    }

    public function getAnswersCountAttribute()
    {
        return $this->answerTopics()->count();
    }
}
