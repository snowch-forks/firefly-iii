<?php
/**
 * AccountFactory.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

use Carbon\Carbon;



$factory->define(
    FireflyIII\Models\Account::class,
    function (Faker\Generator $faker) {
        return [
            'id'              => $faker->unique()->numberBetween(1000, 10000),
            'user_id'         => 1,
            'created_at'      => new Carbon,
            'updated_at'      => new Carbon,
            'name'            => $faker->words(3, true),
            'account_type_id' => random_int(2, 5),
            'active'          => true,
        ];
    }
);