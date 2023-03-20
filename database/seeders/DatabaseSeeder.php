<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $restourant = [
            ["Domino's Pizzas", "Torino"],

            ["OSarracin" , "Napoli"],
            ["Bella Napoli", "Roma"],
            ["Roxy", "Milano"]
        

        ];
    }
}
