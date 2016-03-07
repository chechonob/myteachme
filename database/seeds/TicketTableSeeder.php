<?php
use Faker\Generator;
use MyTeachMe\Entities\Ticket;

class TicketTableSeeder extends BaseSeeder
{
    protected $total =300;

    public function getModel()
    {
        return new Ticket();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return[
            'title' => $faker->sentence(),
            'status' => $faker->randomElement(['open','open','closed']),
            'user_id' => $this->getRandom('User')->id
        ];
    }

}