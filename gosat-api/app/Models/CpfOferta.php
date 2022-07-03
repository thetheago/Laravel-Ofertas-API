<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CpfOferta extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function cpf(): BelongsTo
    {
        return $this->belongsTo(Cpf::class, 'cpf', 'cpf');
    }

    public function ofertas()
    {
        return $this->hasMany(Ofertas::class, 'id', 'id_oferta');
    }

}
