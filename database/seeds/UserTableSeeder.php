<?php
use Faker\Generator;
use MyTeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends BaseSeeder {

    public function run(){
        $this->createAdmin();
        $this->createMultiple(50);
    }

    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [

            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('123456')
        ];
    }

    private function createAdmin(){
        $this->create([
            'name'=>'Checho Nob',
            'email'=>'chechonob@gmail.com',
            'password'=>bcrypt('admin')
        ]);
    }

}