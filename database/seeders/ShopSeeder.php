<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Shop;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Super Admin
        $superAdmin = new User;
        $superAdmin->name = 'admin';
        $superAdmin->email = 'admin@gmail.com';
        $superAdmin->password = bcrypt('admin000');
        $superAdmin->save();

        // Create the Shop
        $shop = new Shop;
        $shop->name = 'The WIP Shop';
        $shop->main_logo = '/shop_logos/main_placeholder.png';
        $shop->alt_logo = '/shop_logos/alt_placeholder.png';
        $shop->description = 'Descrizione del negozio Lorem ipsum dolor sit, amet consectetur adipisicing elit.';
        $shop->p_iva = '12345678910';
        $shop->address = 'Via dei Booleani, N.68';
        $shop->updated_by = $superAdmin->name;
        $shop->save();
    }
}
