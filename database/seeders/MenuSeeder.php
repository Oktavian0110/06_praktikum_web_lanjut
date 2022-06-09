<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'nama' => 'Pasta Capellini',
            'kategori' => 'Pasta',
            'keterangan' => 
            'Capellini adalah jenis pasta Italia yang sangat tipis, dengan diameter antara 0,85 dan 0,92 milimeter (0,033 dan 0,036 inci). Seperti spageti, berbentuk batang, dalam bentuk untaian panjang.
            Seringkali dijual dalam bentuk seperti sarang. Capelli telah populer di Italia sejak setidaknya abad ke-14. Sebagai pasta yang sangat ringan, cocok dengan sup atau makanan laut atau saus ringan.'
        ]);

        DB::table('menu')->insert([
            'nama' => 'Pasta Pillus',
            'kategori' => 'Pasta',
            'keterangan' => 
            'Pillus adalah sejenis pasta yang ditemukan di Sardinia , khususnya di sekitar Oristano. Pasta mirip mie, dibuat dengan potongan pita tipis. Keistimewaan pasta ini adalah diremas dalam waktu yang lama. 
            Ini dimasak dalam kaldu daging sapi (atau terkadang domba) dan disajikan dengan keju pecorino . Di Busachi , pasta dibumbui dengan kunyit panggang dan digiling menjadi bubuk.'
        ]);

        DB::table('menu')->insert([
            'nama' => 'Pasta Fusilli',
            'kategori' => 'Pasta',
            'keterangan' => 
            'Fusili merupakan salah satu pasta yang bentuknya spiral. Fusili biasanya diolah dengan saus krim dan kacang polong. Fusili sendiri dapat dihidangkan dengan bahan lainnya seperti daging ayam, sayur-sayuran, sapi dan masih banyak lagi sesuai selera.
            Fusili biasanya terbuat dari tepung terigu. Namun warna lainnya juga dapat dibuat dengan mencampurkan bahan lain dalam adonan, yang juga mempengaruhi rasa, misalnya, beetroot untuk merah, bayam untuk hijau, dan tinta ikan sotong untuk hitam.'
        ]);
    }
}
