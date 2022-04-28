<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class postsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name,
            'desc'=>'sayed hamed ahmed gad',
            'cat_id'=> 1,

        ];
    }
}
