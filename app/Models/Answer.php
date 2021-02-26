<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['answer'];
    protected $table = 'answers';
 
    public function survey() {
      return $this->belongsTo(Survey::class);
    }
 
    public function question() {
      return $this->belongsTo(Question::class);
    }
}
