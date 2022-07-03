<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instituicoes extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function modalidades(): HasMany
    {
        return $this->hasMany(Modalidades::class, 'id_instituicao',  'id');
    }
}
