<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'contenu',
        'visible',
        'image',
        'user_id',
        
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
        
    }
}
