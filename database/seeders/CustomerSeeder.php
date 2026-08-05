<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['company_name' => 'Meta', 'contact_person' => 'Zuck Muckerberg', 'phone' => 09303997215, 'email' => 'zuck@example.com', 'address' => 'Pincelvinnia', 'City' => 'Atlantis', 'Province' => 'Muckerberg', 'postal_code' => 2601]
        ];

        foreach ($customers as $customer) {
            Customer::firstOrCreate($customer);
        }
    }
}
