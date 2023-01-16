<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Admin::create([
        'name' => 'sreejil',
        'mobile_no' => '9846015205',
        'email' => 'sreejil@gmail.com',
        'password' => bcrypt('sreejil@123'),
        'profile_photo' => 'blank-profile-picture-973460__480.webp'
      ]);
    }
}
