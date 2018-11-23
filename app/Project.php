<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'technology', 'url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function rules()
    {
        return [
            'title' => 'required|min:5',
            'description' => 'required|min:10|max:255',
            'technology'   => 'required|min:10',
            'url' => 'nullable|url',
        ];
    }
}
