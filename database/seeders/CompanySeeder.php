<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'id' => '1',
                'name' => 'Miraculous Company',
                'type' => 'B',
                'address' => 'Tagbilaran Vity',
                'net_worth' => '20',
            ],
            [
                'id' => '2',
                'name' => 'ABC Company',
                'type' => 'B',
                'address' => 'Tagbilaran Vity',
                'net_worth' => '20',
            ],
            [
                'id' => '3',
                'name' => 'DEF Company',
                'type' => 'B',
                'address' => 'Tagbilaran Vity',
                'net_worth' => '20',
            ],
            [
                'id' => '4',
                'name' => 'GHI Company',
                'type' => 'B',
                'address' => 'Tagbilaran Vity',
                'net_worth' => '20',
            ],
            [
                'id' => '5',
                'name' => 'JKL Company',
                'type' => 'B',
                'address' => 'Tagbilaran Vity',
                'net_worth' => '20',
            ],
            [
                'id' => '6',
                'name' => 'MNO Company',
                'type' => 'B',
                'address' => 'Tagbilaran Vity',
                'net_worth' => '20',
            ],
        ];

        foreach($companies as $company) {
            Company::create($company);
        }

    }
}
