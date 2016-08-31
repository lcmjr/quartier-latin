<?php

use Illuminate\Database\Seeder;

class SeedQuartierLatin extends Seeder {
    public function run() {
        DB::table('model_quartier_latins')->insert(array(
            ['title' => "QUARTIER LATIN",
                'text' => "<p>Muito mais do que formar bailarinos, nós, do Quartier Latin, temos, como principal meta, educar através da dança,  transformar através da Arte. Observamos a Arte num sentido maior, como mecanismo de autoconhecimento.</p><p>Conhecer o próprio corpo e saber explorar suas possibilidades é algo extremamente importante e prazeroso. Aguçar o senso crítico e aprender a exercitar o espírito de equipe, de cooperação é uma grande tarefa, tão importante quanto conhecer a si próprio e o verdadeiro sentido da individualidade. Reconhecermos nossas incapacidades, bem como nossas potencialidades é estarmos a caminho do crescimento.</p><p>Acreditamos seriamente que crianças que vivenciam a Arte, são crianças especiais. Têm visão própria e diferenciada sobre todos os aspectos da vida e da sociedade em que vivem. São jovens que desfrutam do mundo com maior sabedoria, saúde e prazer.</p>"]));
    }
}
