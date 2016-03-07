<?php


use MyTeachMe\Entities\TicketVote;
use Faker\Generator;

class TicketVoteTableSeeder extends BaseSeeder
{

    protected $total =300;

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'user_id' => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id
        ];
    }

    public function getModel()
    {
        return new TicketVote();
    }


}