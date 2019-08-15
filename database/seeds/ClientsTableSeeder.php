<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = factory(App\Client::class, 5)->create()
                    ->each(function ($c) {
                        $c->sales()->saveMany(factory(App\Sale::class, 2)->make());
                    });
        foreach ($clients as $client){
            foreach ($client->sales as $sale){
                $sale->details()->saveMany(factory(App\Detail::class, 3)->make());
            }
        }

    }
}
