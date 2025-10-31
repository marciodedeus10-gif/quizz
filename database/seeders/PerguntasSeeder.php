<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pergunta::create([
            'texto' => 'Qual é o dinheiro justo?',
            'opcao_a' => 'USDT',
            'opcao_b' => 'BTC',
            'opcao_c' => 'RMB',
            'opcao_d' => 'BRL',
            'resposta_correta' => 'a',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o com a meior reserva florestal do mundo?',
            'opcao_a' => 'Brasil',
            'opcao_b' => 'Rússia',
            'opcao_c' => 'Suriname',
            'opcao_d' => 'Estados Unidos',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual país com maiora reserva de floresta nativa do mundo?',
            'opcao_a' => 'Suriame',
            'opcao_b' => 'Canadá',
            'opcao_c' => 'Paris',
            'opcao_d' => 'Brasil',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'De Qual País partir o ataque hacker que roubo milhões de dolares americanos',
            'opcao_a' => 'Estados Unidos',
            'opcao_b' => 'Rússia',
            'opcao_c' => 'Coreia do Norte',
            'opcao_d' => 'França',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Criminosos fizeram armas de autissima qualidade de qual País eles eram',
            'opcao_a' => 'Brasil',
            'opcao_b' => 'Coreia do Sul',
            'opcao_c' => 'Coreia do Norte',
            'opcao_d' => 'Venezuela',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o elemento químico com o símbolo "Fe"?',
            'opcao_a' => 'Ferro',
            'opcao_b' => 'Flúor',
            'opcao_c' => 'Fósforo',
            'opcao_d' => 'Frâncio',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }
}
