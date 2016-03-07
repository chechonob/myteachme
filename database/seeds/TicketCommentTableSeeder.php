<?php

use Faker\Generator;
use \MyTeachMe\Entities\TicketComment;

class TicketCommentTableSeeder extends BaseSeeder
{

    protected $total =300;

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'user_id' => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id,
            'comment' => $faker->paragraph(),
            'link'=> $faker->randomElement(['','',$faker->url])
        ];
    }

    public function getModel()
    {
        return new TicketComment();
    }
}
