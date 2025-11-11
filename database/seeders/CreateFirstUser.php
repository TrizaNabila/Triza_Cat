<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data['Name']     = 'Admin';
        $data['Email']    = 'gatot@pcr.ac.id';
        $data['Password'] = Hash::make('gatotkaca');
        user::create ($data);

        //user::create
        //['Name']     = 'Admin';
        //['Email']    = 'gatot@pcr.ac.id';
        //['Password'] = Hash::make('gatotkaca');
    }
}
