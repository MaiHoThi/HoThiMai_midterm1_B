<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for($i=1;$i<=10;$i++)
       {
        DB::table('tours')->insert([
                
            'name'=>Str::random(20),
            'image'=>'public/tour.jfif',
            'typetour'=>"từ Hồ Chí Minh",
            'schedule'=>"4 ngày ba đêm",
            'depart'=>"2/7/2020",
            'number'=>"9",
            'price'=>4000000,
           
            
        ]);
       }
    }
}
