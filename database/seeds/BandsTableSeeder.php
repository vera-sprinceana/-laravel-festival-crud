<?php

use Illuminate\Database\Seeder;
use App\Models\Band;
class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bands=config('bands');
        foreach($bands as $band) {
            $new_band= new Band();
            $new_band->fill($band);
            $new_band->save();
        }
    }
}
