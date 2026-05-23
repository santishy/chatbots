<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeSource extends Model
{
    /** @use HasFactory<\Database\Factories\KnowledgeSourceFactory> */
    use HasFactory;

    use HasUuids;

    public function chatbot()
    {
        return $this->belongsTo(Chatbot::class);
    }
}
