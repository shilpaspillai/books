<?php

 use app\lib\Domain\ValueObjects\Password as Password;

Class UserTableSeeder extends Seeder{
    public function run()
    {
      $members = [];
      $members[]=[
      'username' =>'shilpa',
      'email' => 'shilpa@mail.com',
      'password' =>Password::encrypt('shilpa'),
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s'),
    ];
      DB::table('users')->insert($members);
    }
}