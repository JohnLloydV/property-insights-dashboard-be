<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $properties = [
            [
                'address' => '12 Oceanview Dr, Byron Bay',
                'state' => 'NSW',
                'price' => 850000,
                'rent_per_week' => 900,
                'house_area' => 200,
                'land_area' => 500,
                'total_area' => 700,
                'bedrooms' => 3,
                'bathrooms' => 2.5,
                'garage' => 1,
                'image_url' => 'https://images.unsplash.com/photo-1518780664697-55e3ad937233?q=80&w=765&auto=format&fit=crop',
            ],
            [
                'address' => '45 Hillcrest Ave, Toowoomba',
                'state' => 'QLD',
                'price' => 540000,
                'rent_per_week' => 600,
                'house_area' => 180,
                'land_area' => 400,
                'total_area' => 580,
                'bedrooms' => 4,
                'bathrooms' => 2.0,
                'garage' => 2,
                'image_url' => 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?q=80&w=1170&auto=format&fit=crop',
            ],
            [
                'address' => '8 Parkside Ln, Sunshine Coast',
                'state' => 'QLD',
                'price' => 690000,
                'rent_per_week' => 750,
                'house_area' => 190,
                'land_area' => 420,
                'total_area' => 610,
                'bedrooms' => 3,
                'bathrooms' => 2.0,
                'garage' => 1,
                'image_url' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?q=80&w=1170&auto=format&fit=crop',
            ],
            [
                'address' => '23 Wattle St, Ipswich',
                'state' => 'QLD',
                'price' => 470000,
                'rent_per_week' => 550,
                'house_area' => 160,
                'land_area' => 350,
                'total_area' => 510,
                'bedrooms' => 3,
                'bathrooms' => 1.5,
                'garage' => 1,
                'image_url' => 'https://images.unsplash.com/photo-1605146769289-440113cc3d00?q=80&w=1170&auto=format&fit=crop',
            ],
            [
                'address' => '5A Beach Rd, Gold Coast',
                'state' => 'QLD',
                'price' => 970000,
                'rent_per_week' => 1000,
                'house_area' => 210,
                'land_area' => 550,
                'total_area' => 760,
                'bedrooms' => 4,
                'bathrooms' => 3.0,
                'garage' => 2,
                'image_url' => 'https://images.unsplash.com/photo-1626178793926-22b28830aa30?q=80&w=1170&auto=format&fit=crop',
            ],
            [
                'address' => '101 Greenfield Rd, Logan',
                'state' => 'QLD',
                'price' => 510000,
                'rent_per_week' => 580,
                'house_area' => 170,
                'land_area' => 360,
                'total_area' => 530,
                'bedrooms' => 3,
                'bathrooms' => 2.0,
                'garage' => 1,
                'image_url' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?q=80&w=1170&auto=format&fit=crop',
            ],
            [
                'address' => '9 Koala Ct, Cairns',
                'state' => 'QLD',
                'price' => 630000,
                'rent_per_week' => 680,
                'house_area' => 180,
                'land_area' => 400,
                'total_area' => 580,
                'bedrooms' => 3,
                'bathrooms' => 2.0,
                'garage' => 1,
                'image_url' => 'https://images.unsplash.com/photo-1430285561322-7808604715df?q=80&w=1170&auto=format&fit=crop',
            ],
            [
                'address' => '77 Panorama Dr, Noosa',
                'state' => 'QLD',
                'price' => 890000,
                'rent_per_week' => 950,
                'house_area' => 220,
                'land_area' => 560,
                'total_area' => 780,
                'bedrooms' => 4,
                'bathrooms' => 3.0,
                'garage' => 2,
                'image_url' => 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?q=80&w=1170&auto=format&fit=crop',
            ],
            [
                'address' => '16 Riverbend Blvd, Brisbane',
                'state' => 'QLD',
                'price' => 720000,
                'rent_per_week' => 820,
                'house_area' => 200,
                'land_area' => 480,
                'total_area' => 680,
                'bedrooms' => 4,
                'bathrooms' => 2.5,
                'garage' => 2,
                'image_url' => 'https://images.unsplash.com/photo-1598228723793-52759bba239c?q=80&w=1074&auto=format&fit=crop',
            ],
            [
                'address' => '34 Jacaranda Way, Ballina',
                'state' => 'NSW',
                'price' => 610000,
                'rent_per_week' => 700,
                'house_area' => 190,
                'land_area' => 420,
                'total_area' => 610,
                'bedrooms' => 3,
                'bathrooms' => 2.0,
                'garage' => 1,
                'image_url' => 'https://images.unsplash.com/photo-1592595896616-c37162298647?q=80&w=1170&auto=format&fit=crop',
            ],
        ];

        foreach ($properties as $data) {
            Property::create($data);
        }
    }
}