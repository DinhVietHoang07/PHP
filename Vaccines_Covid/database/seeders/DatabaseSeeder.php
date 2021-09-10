<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'id_card'=>'125920214',
                'name'=>'le ngon phuc',
                'date_year'=>'02/01/2002',
                'address'=>'Bac Giang',
                'phone'=>'039423479',
                'allergy_history'=>'Chua co tien su nao',
            ] ,
            [
                'id_card'=>'12548113',
                'name'=>'Nguyen Quang huy',
                'date_year'=>'11/12/2002',
                'address'=>'Thanh Hoa',
                'phone'=>'0386656802',
                'allergy_history'=>'Tiep xuc voi F1',
            ] ,
            [
                'id_card'=>'216487412',
                'name'=>'Nguyen Van Long',
                'date_year'=>'20/11/2002',
                'address'=>'Ha Noi',
                'phone'=>'094844573',
                'allergy_history'=>'chua co tien su nao',
            ] ,
            [
                'id_card'=>'124579413',
                'name'=>'Tran Van Bien',
                'date_year'=>'09/01/19976',
                'address'=>'Bac Giang',
                'phone'=>'034871297',
                'allergy_history'=>'Tung la F0',
            ] ,
            [
                'id_card'=>'13649749',
                'name'=>'Lo Van Hoi',
                'date_year'=>'03/07/1987',
                'address'=>'Ho Chi Minh',
                'phone'=>'039698754',
                'allergy_history'=>'Tiep xuc voi F2',
            ] ,
        ]);
    }
}
