<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Item_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('items')->truncate();

        $data = [
            [
                "isActive" => true,
                "age" => 35,
                "eyeColor" => "brown",
                "name" => "Isabel Noel",
                "gender" => "female",
                "company" => "RUBADUB",
                "email" => "isabelnoel@rubadub.com",
                "phone" => "+1 (905) 515-2287",
                "address" => "353 Vanderveer Place, Welda, Texas, 3873"
            ],
            [

                "isActive" => true,
                "age" => 28,
                "eyeColor" => "green",
                "name" => "Campos Pittman",
                "gender" => "male",
                "company" => "EVENTIX",
                "email" => "campospittman@eventix.com",
                "phone" => "+1 (847) 543-3337",
                "address" => "860 Ralph Avenue, Yettem, Louisiana, 726"
            ],
            [

                "isActive" => true,
                "age" => 28,
                "eyeColor" => "brown",
                "name" => "Sharpe French",
                "gender" => "male",
                "company" => "QUAREX",
                "email" => "sharpefrench@quarex.com",
                "phone" => "+1 (869) 472-3624",
                "address" => "131 Hinsdale Street, Gasquet, Federated States Of Micronesia, 5052"
            ],
            [
                "isActive" => false,
                "age" => 31,
                "eyeColor" => "brown",
                "name" => "Teresa Bush",
                "gender" => "female",
                "company" => "OVIUM",
                "email" => "teresabush@ovium.com",
                "phone" => "+1 (957) 433-3564",
                "address" => "257 Williams Place, Elizaville, North Carolina, 2007"
            ],
            [
                "isActive" => true,
                "age" => 33,
                "eyeColor" => "green",
                "name" => "Lowe Horne",
                "gender" => "male",
                "company" => "BARKARAMA",
                "email" => "lowehorne@barkarama.com",
                "phone" => "+1 (967) 560-3576",
                "address" => "894 Amboy Street, Skyland, Connecticut, 156"
            ],
            [
                "isActive" => true,
                "age" => 21,
                "eyeColor" => "blue",
                "name" => "Minnie Reese",
                "gender" => "female",
                "company" => "EPLODE",
                "email" => "minniereese@eplode.com",
                "phone" => "+1 (855) 481-3494",
                "address" => "703 Prospect Place, Wilmington, Indiana, 1827"
            ]
        ];

        Item::insert($data);
    }
}
