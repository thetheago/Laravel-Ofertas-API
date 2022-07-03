<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofertas extends Model
{
    use HasFactory;

    protected $fillable = ['QntParcelaMin', 'QntParcelaMax', 'valorMin', 'valorMax', 'jurosMes'];

    public $timestamps = false;

    public function cpfOferta(){
        return $this->belongsTo(CpfOferta::class, 'id_oferta', 'id');
    }

    public function instituicao(){
        return $this->belongsTo(Instituicoes::class);
    }

}
