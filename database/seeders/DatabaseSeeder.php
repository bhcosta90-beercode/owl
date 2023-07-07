<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AddressSeed::class,
            UserSeed::class,
            CompanySeed::class
        ]);

        DB::unprepared('REFRESH MATERIALIZED VIEW sales_commission_view');
    }
}
