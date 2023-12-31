<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("sinhviens")->insert([
            "name" => "Anh Tuan",
            "email" => "tuan@gmail.com",
            "phone" => "0384082003",
            "address" => "Thai Binh",
            "lophoc_id" => "1",
            "khoahoc_id" => "1"
           ]);
    }
}
