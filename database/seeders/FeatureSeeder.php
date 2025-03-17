<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('feature')->insert([
            ['name' => 'Model', 'description' => ' A PHP class that symbolizes a database table'],
            ['name' => 'View', 'description' => 'views are an essential part of the framework, allowing 
            developers to define the structure and layout of the applications user interface'],
            ['name' => 'Controller', 'description' => 'help in maintaining a separation of concerns by encapsulating the request handling logic separate from the routes and views.'],
            ['name' => 'Routes', 'description' => 'Routes are actually the web URLs that you can visit in your web application.'],
            ['name' => 'Middleware', 'description' => 'provide a convenient mechanism for inspecting and filtering HTTP requests entering your application'],
            ['name' => 'Blade Templates', 'description' => 'powerful templating engine that is included with Laravel'],
            ['name' => 'Migration', 'description' => 'set of instructions that define the changes you want to make to your database schema'],
            ['name' => 'Seeders', 'description' => 'includes the ability to seed your database with data using seed classes'],
            ['name' => 'Database', 'description' => 'an organized collection of structured information, or data, typically stored 
            electronically in a computer system, designed for easy access, management, and updating. '],
            ['name' => 'Eloquent ORM', 'description' => 'translator between your code and the database, making it easy for
             developers to understand and smooth the entire process of working with databases.']
        ]);
    }
}


