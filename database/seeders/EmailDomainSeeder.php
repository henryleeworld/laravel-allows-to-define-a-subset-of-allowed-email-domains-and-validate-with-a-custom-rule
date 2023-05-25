<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maize\EmailDomainRule\Models\EmailDomain;

class EmailDomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $emailDomains = [
            [
                'id'     => 1,
                'domain' => 'gmail.com',
            ],
        ];

        EmailDomain::insert($emailDomains);
    }
}
