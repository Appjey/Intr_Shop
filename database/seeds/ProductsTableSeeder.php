<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i < 11; $i++)
        DB::table('products')->insert([
            'title' => 'Product'.$i,
            'price' => rand(100, 10000),
            'in_stock' => 1,
            'description' => '«Сотворение Адама» — одна из самых выдающихся композиций росписи Сикстинской капеллы. В бесконечном пространстве летит Бог-Отец, окружённый бескрылыми ангелами, с реющей белой туникой. Правая рука вытянута навстречу руке Адама и почти касается её. Лежащее на зелёной скале тело Адама постепенно приходит в движение, пробуждается к жизни. Вся композиция сконцентрирована на жесте двух рук. Рука Бога даёт импульс, а рука Адама принимает его, давая всему телу жизненную энергию. Тем, что их руки не соприкасаются, Микеланджело подчеркнул невозможность соединения божественного и человеческого. В образе Бога, по замыслу художника, преобладает не чудесное начало, а гигантская творческая энергия. В образе Адама Микеланджело воспевает силу и красоту человеческого тела. Фактически, перед нами предстаёт не само сотворение человека, а момент, в который тот получает душу, страстное искание божественного, жажду познания.',
        ]);
    }
}
    
