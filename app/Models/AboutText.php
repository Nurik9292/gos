<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AboutText extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function abouts(): HasMany
    {
        return $this->hasMany(About::class, "about_text_id", "id");
    }
}
