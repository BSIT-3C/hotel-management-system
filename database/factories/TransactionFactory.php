<?php

namespace Database\Factories;

use App\Models\Guest;
use App\Models\PaymentMethod;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reservation_id' => Reservation::pluck('id')->random(),
            'guest_id' => Guest::pluck('id')->random(),
            'payment_method_id' => PaymentMethod::pluck('id')->random(),
        ];
    }
}
