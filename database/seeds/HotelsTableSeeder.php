<?php

use Illuminate\Database\Seeder;
use App\Models\Hotel;
class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hotel::class, 50)->create();
    }
}
