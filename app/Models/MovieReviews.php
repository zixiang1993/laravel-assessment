<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieReviews extends Model
{
    protected $table = 'moviereviews';
    protected $primaryKey = 'id';
    protected $fillable = ['moviename', 'category', 'score', 'comments','dateofreview'];
}