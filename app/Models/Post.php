<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text', 'image'];

    public function getDateAttribute() {
        return $this->created_at->format("Y-m-d");
    }

    public function getSubTextAttribute() {
        return Str::limit($this->text, 70);
    }

    // public function setTitleAttribute($value) {
    //     $this->attributes['title'] = $value;
    //     $this->attributes['slug'] = Str::slug($value);
    // }
}
