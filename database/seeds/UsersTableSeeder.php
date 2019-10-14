<?php


use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $user_maarten = new User([
            'name' => 'Maarten',
            'email' => 'maartendejager@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'admin' => true,
        ]);
        $user_maarten->save();

        $user_suus = new User([
            'name' => 'Susanne',
            'email' => 'susanne@embav.nl',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'admin' => true,
        ]);
        $user_suus->save();

        $user_suus = new User([
            'name' => 'Astrid',
            'email' => 'ahaak@odijmond.nl',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('ijmondco2neutraal'),
            'admin' => true,
        ]);
        $user_suus->save();
    }
}
