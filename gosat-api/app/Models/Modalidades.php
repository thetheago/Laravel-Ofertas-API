<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Modalidades extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cod'];

    public $timestamps = false;

    public function instituicao(): BelongsTo
    {
        return $this->belongsTo(Instituicoes::class, 'id');
    }
}
