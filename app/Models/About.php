<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class About extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function aboutText(): BelongsTo
    {
        return $this->belongsTo(AboutText::class, "about_text_id", "id");
    }
}
