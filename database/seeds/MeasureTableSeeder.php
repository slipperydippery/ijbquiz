<?php

use Illuminate\Database\Seeder;

class MeasureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measures')->delete();

        $measure_beverwijk = new User([
            'name' => 'Maarten de Jager',
            'description' => '',
            'code'	=> ''
        ]);
        $measure_beverwijk->save();
    }
}
