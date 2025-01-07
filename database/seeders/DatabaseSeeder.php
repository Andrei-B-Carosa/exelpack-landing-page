<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $array = [
            'wall_type'=>["Single Wall","Double Wall","Tri-Wall"],
            'material_type'=>["KR Recycle Material","KL Virgin Material"],
            'flute_type'=>["E Flute (2mm)","B or C Flute (4mm)","BC Flute (7mm)"],
            'color'=>["Brown Kraft","Top White 1 Side","Top White 2 Side"],
        ];

        $data = json_encode($array);

        DB::table('products')->where('id', 1)->update(['specification' => $data]);

    }
}
