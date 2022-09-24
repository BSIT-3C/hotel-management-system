<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentMethodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $paymentMethodArray = ['Cash', 'MasterCard', 'Paypal', 'GCash', 'Debit Card', 'Other'];

        return [
            'payment_method' => array_rand($paymentMethodArray, 1),
            'is_available' => $this->faker->boolean,
        ];
    }
}
