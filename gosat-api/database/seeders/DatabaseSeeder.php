<?php

namespace Database\Seeders;

use App\Models\Instituicoes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Cpfs
            DB::table('cpfs')->insert([
                'cpf' => 11111111111,
            ]);
            DB::table('cpfs')->insert([
                'cpf' => 12312312312,
            ]);
            DB::table('cpfs')->insert([
                'cpf' => 22222222222,
            ]);

            //Instituicoes
            DB::table('instituicoes')->insert([
                'nome' => 'Banco PingApp',
            ]);
            DB::table('instituicoes')->insert([
                'nome' => 'Financeira Assert',
            ]);

        //Modalidades
            DB::table('modalidades')->insert([
                'nome' => 'crédito pessoal',
                'cod' => '3',
                'id_instituicao' => 1,
            ]);
            DB::table('modalidades')->insert([
                'nome' => 'crédito consignado',
                'cod' => '13',
                'id_instituicao' => 1,
            ]);
            DB::table('modalidades')->insert([
                'nome' => 'crédito pessoal',
                'cod' => 'a50ed2ed-2b8b-4cc7-ac95-71a5568b34ce',
                'id_instituicao' => 2,
            ]);

        //Ofertas
            DB::table('ofertas')->insert([
                'instituicao_id' => 1,
                'codModalidade' => 3,
                'QntParcelaMin' => 10,
                'QntParcelaMax' => 40,
                'valorMin' => 2000,
                'valorMax' => 9000,
                'jurosMes' => 0.0700,
            ]);

            DB::table('ofertas')->insert([
                'instituicao_id' => 1,
                'codModalidade' => "13",
                'QntParcelaMin' => 5,
                'QntParcelaMax' => 12,
                'valorMin' => 1000,
                'valorMax' => 9000,
                'jurosMes' => 1,
            ]);

            DB::table('ofertas')->insert([
                'instituicao_id' => 2,
                'codModalidade' => "a50ed2ed-2b8b-4cc7-ac95-71a5568b34ce",
                'QntParcelaMin' => 12,
                'QntParcelaMax' => 48,
                'valorMin' => 3000,
                'valorMax' => 7000,
                'jurosMes' => 0.0365,
            ]);

        //Cpf_Oferta
            DB::table('cpf_ofertas')->insert([
                'cpf' => 11111111111,
                'id_oferta' => 1,
                'valorSolicitado' => 3000,
                'QntParcelaSolicitada' => 10,
            ]);
            DB::table('cpf_ofertas')->insert([
                'cpf' => 11111111111,
                'id_oferta' => 2,
                'valorSolicitado' => 2000,
                'QntParcelaSolicitada' => 10,
            ]);
            DB::table('cpf_ofertas')->insert([
                'cpf' => 11111111111,
                'id_oferta' => 3,
                'valorSolicitado' => 7000,
                'QntParcelaSolicitada' => 40,
            ]);

            DB::table('cpf_ofertas')->insert([
                'cpf' => 12312312312,
                'id_oferta' => 2,
                'valorSolicitado' => 2700,
                'QntParcelaSolicitada' => 7,
            ]);
            DB::table('cpf_ofertas')->insert([
                'cpf' => 12312312312,
                'id_oferta' => 3,
                'valorSolicitado' => 3200,
                'QntParcelaSolicitada' => 12,
            ]);

            DB::table('cpf_ofertas')->insert([
                'cpf' => 22222222222,
                'id_oferta' => 3,
                'valorSolicitado' => 4520,
                'QntParcelaSolicitada' => 15,
            ]);



    }
}
