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
            'resposta_correta' => 'b',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quantos BTC usados para fazer a primeira compra?',
            'opcao_a' => '11.000',
            'opcao_b' => '10.000',
            'opcao_c' => '7.000',
            'opcao_d' => '5.000',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual a segunda moeda virtual mais valorizada',
            'opcao_a' => 'XRP',
            'opcao_b' => 'SOL',
            'opcao_c' => 'ETH',
            'opcao_d' => 'TRUMP',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem controla o BTC',
            'opcao_a' => 'Estados Unidos',
            'opcao_b' => 'Rússia',
            'opcao_c' => 'Coreia do Norte',
            'opcao_d' => 'Neum País controla',
            'resposta_correta' => 'd',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem criou o BTC',
            'opcao_a' => 'Satoshi Nakamoto',
            'opcao_b' => 'Hiroshi',
            'opcao_c' => 'Akira',
            'opcao_d' => 'Yumi',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é a tecnologia que sustenta o Bitcoin?',
            'opcao_a' => 'Smart Chain',
            'opcao_b' => 'Network',
            'opcao_c' => 'Chain',
            'opcao_d' => 'blockchain',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quando o Bitcoin foi lançado?',
            'opcao_a' => '2009',
            'opcao_b' => '2001',
            'opcao_c' => '2007',
            'opcao_d' => '2010',
            'resposta_correta' => 'd',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Onde o Bitcoin é armazenado??',
            'opcao_a' => 'wallets',
            'opcao_b' => 'Pendraver',
            'opcao_c' => 'Celular',
            'opcao_d' => 'Cloders',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Governo pode tomar Cripto moeda de alguma pessoa?',
            'opcao_a' => 'Sim',
            'opcao_b' => 'Sim sobre pressão',
            'opcao_c' => 'Sim com ordem do governo',
            'opcao_d' => 'Não',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual a principal rede que sustenta as cripto moeda?',
            'opcao_a' => 'blockchain',
            'opcao_b' => 'Network',
            'opcao_c' => 'Smart Chain',
            'opcao_d' => 'Chain',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }

}


