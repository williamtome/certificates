<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name' => 'Acre',
            'abbreviation' => 'AC',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Alagoas',
            'abbreviation' => 'AL',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Amapá',
            'abbreviation' => 'AP',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Amazonas',
            'abbreviation' => 'AM',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Bahia',
            'abbreviation' => 'BA',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Ceará',
            'abbreviation' => 'CE',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Distrito Federal',
            'abbreviation' => 'DF',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Espírito Santo',
            'abbreviation' => 'ES',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Goiás',
            'abbreviation' => 'GO',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Maranhão',
            'abbreviation' => 'MA',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Mato Grosso',
            'abbreviation' => 'MT',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Mato Grosso do Sul',
            'abbreviation' => 'MS',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Minas Gerais',
            'abbreviation' => 'MG',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Pará',
            'abbreviation' => 'PA',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Paraíba',
            'abbreviation' => 'PB',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Paraná',
            'abbreviation' => 'PR',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Pernambuco',
            'abbreviation' => 'PE',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Piauí',
            'abbreviation' => 'PI',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Rio de Janeiro',
            'abbreviation' => 'RJ',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Rio Grande do Norte',
            'abbreviation' => 'RN',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Rio Grande do Sul',
            'abbreviation' => 'RS',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Rondônia',
            'abbreviation' => 'RO',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Roraima',
            'abbreviation' => 'RR',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Santa Catarina',
            'abbreviation' => 'SC',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'São Paulo',
            'abbreviation' => 'SP',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Sergipe',
            'abbreviation' => 'SE',
            'country_id' => 1,
        ]);

        DB::table('states')->insert([
            'name' => 'Tocantins',
            'abbreviation' => 'TO',
            'country_id' => 1,
        ]);
    }
}
