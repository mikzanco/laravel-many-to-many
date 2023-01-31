<?php

namespace Database\Seeders;

use App\Models\Projects;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 200; $i++){

            // esrìtraggo random un progetto
            $project = Projects::inRandomOrder()->first();

            // estraggo un id random delle tecnologie
            $technology_id = Technology::inRandomOrder()->first()->id;

            // inserisco la relazione nella tabella ponte con ->attach
            $project->technologies()->attach($technology_id);
        }
    }
}
