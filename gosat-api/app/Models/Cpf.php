<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cpf extends Model
{
    use HasFactory;

    protected $fillable = ['cpf'];

    public $timestamps = false;

    public function cpfOferta(): hasMany
    {
        return $this->hasMany(CpfOferta::class, 'cpf');
    }

}
