<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Excess;

class ExcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excess::insert([
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Accidental Damage by Insured',
                'amount'=>'2.5 % of vehicle value;Min.20,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Theft with antitheft devices',
                'amount'=>'10% of vehicle value Minimum 20,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Theft without antitheft devices',
                'amount'=>'20% of vehicle Value Minimum Kshs.30,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Theft with tracking device',
                'amount'=>'2.5% of vehicle value;Min.30,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Third Party Property Damage ',
                'amount'=>'7,500/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Young Drivers- Below 21 yrs',
                'amount'=>'10,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Novice below 24 months experience',
                'amount'=>'10,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Third Party Property Damage',
                'amount'=>'Ksh.20,000,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Third Party Persons Injury/Death - Any One Person',
                'amount'=>'Kshs.3,000,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Third Party Persons Injury/Death – Any One Event ',
                'amount'=>'Kshs.20,000,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Passenger Liability: Any One Person',
                'amount'=>'Kshs.3,000,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover_name'=>'Motor Private Comprehensive',
                'name'=>'Passenger Liability:  Any One event',
                'amount'=>'Ksh.20,000,000/=',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ]
        );
    }
}
