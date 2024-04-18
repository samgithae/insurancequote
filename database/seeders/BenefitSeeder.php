<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Benefit;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Benefit::insert([
            [

            'insurance_cover'=>'Motor Private Comprehensive',
            'name'=>'Authorised Repair',
            'value'=>'50,000',
            'status'=>'free',
            'cost'=>'',
            'insurance_cover_id'=>'1',
            'created_at'=>now(),
            'updated_at'=>now()
        ],
            [
                'insurance_cover'=>'Motor Private Comprehensive',
                'name'=>'Emergency Medical Expenses',
                'value'=>'30,000',
                'status'=>'free',
                'cost'=>'',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover'=>'Motor Private Comprehensive',
                'name'=>'Car Entertainment unit',
                'value'=>'50,000',
                'status'=>'free',
                'cost'=>'',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover'=>'Motor Private Comprehensive',
                'name'=>'Towing charges ',
                'value'=>'50,000',
                'status'=>'free',
                'cost'=>'',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'insurance_cover'=>'Motor Private Comprehensive',
                'name'=>'Windscreen and window glass',
                'value'=>'50,000',
                'status'=>'free',
                'cost'=>'',
                'insurance_cover_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ]);
    }
}
