<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> mai/main
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    use WithoutModelEvents;

=======
>>>>>>> mai/main
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
=======
        $this->call([
            CategorySeeder::class,
            SizeSeeder::class,
            FloorSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            RoleSeeder::class,
            StockBalanceSeeder::class,
            PickupSeeder::class,
            InventoryTransactionSeeder::class,
        ]);
    }
}
>>>>>>> mai/main
