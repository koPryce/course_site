<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Course::create([
            'name' => 'Mathematics',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, possimus debitis voluptatem ratione harum vel quibusdam dolorum obcaecati ut quae illo in repellendus quis laboriosam quam eveniet distinctio fuga amet culpa? Aut culpa laborum sint temporibus recusandae dicta, itaque dignissimos minus autem aliquid veniam, porro quo nulla facilis fugiat? Nostrum!',
            'categories' => '10hrs, 5stars, intermediate',
            'image' => 'Mathematics.jpg',
            'teacher' => 'Lorem Ipsum'
        ]);

        Course::create([
            'name' => 'English Language',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, possimus debitis voluptatem ratione harum vel quibusdam dolorum obcaecati ut quae illo in repellendus quis laboriosam quam eveniet distinctio fuga amet culpa? Aut culpa laborum sint temporibus recusandae dicta, itaque dignissimos minus autem aliquid veniam, porro quo nulla facilis fugiat? Nostrum!',
            'categories' => '11hrs, 4stars, beginner',
            'image' => 'English Language.png',
            'teacher' => 'Lorem Ipsum'
        ]);
        Course::create([
            'name' => 'Biology',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, possimus debitis voluptatem ratione harum vel quibusdam dolorum obcaecati ut quae illo in repellendus quis laboriosam quam eveniet distinctio fuga amet culpa? Aut culpa laborum sint temporibus recusandae dicta, itaque dignissimos minus autem aliquid veniam, porro quo nulla facilis fugiat? Nostrum!',
            'categories' => '20hrs, 3stars, advanced',
            'image' => 'Biology.jpg',
            'teacher' => 'Lorem Ipsum'
        ]);
        Course::create([
            'name' => 'Chemisty',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, possimus debitis voluptatem ratione harum vel quibusdam dolorum obcaecati ut quae illo in repellendus quis laboriosam quam eveniet distinctio fuga amet culpa? Aut culpa laborum sint temporibus recusandae dicta, itaque dignissimos minus autem aliquid veniam, porro quo nulla facilis fugiat? Nostrum!',
            'categories' => '20hrs, 5stars, advanced',
            'image' => 'Chemistry.jpg',
            'teacher' => 'Lorem Ipsum'
        ]);
        Course::create([
            'name' => 'Computer Science',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, possimus debitis voluptatem ratione harum vel quibusdam dolorum obcaecati ut quae illo in repellendus quis laboriosam quam eveniet distinctio fuga amet culpa? Aut culpa laborum sint temporibus recusandae dicta, itaque dignissimos minus autem aliquid veniam, porro quo nulla facilis fugiat? Nostrum!',
            'categories' => '13hrs, 4stars, beginner',
            'image' => 'Computer Science.jpg',
            'teacher' => 'Lorem Ipsum'
        ]);
        Course::create([
            'name' => 'Physics',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, possimus debitis voluptatem ratione harum vel quibusdam dolorum obcaecati ut quae illo in repellendus quis laboriosam quam eveniet distinctio fuga amet culpa? Aut culpa laborum sint temporibus recusandae dicta, itaque dignissimos minus autem aliquid veniam, porro quo nulla facilis fugiat? Nostrum!',
            'categories' => '25hrs, 4stars, advanced',
            'image' => 'Physics.jpg',
            'teacher' => 'Lorem Ipsum'
        ]);
        Course::create([
            'name' => 'Java',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, possimus debitis voluptatem ratione harum vel quibusdam dolorum obcaecati ut quae illo in repellendus quis laboriosam quam eveniet distinctio fuga amet culpa? Aut culpa laborum sint temporibus recusandae dicta, itaque dignissimos minus autem aliquid veniam, porro quo nulla facilis fugiat? Nostrum!',
            'categories' => '10hrs, 5stars, intermediate',
            'image' => 'Java.jpg',
            'teacher' => 'Lorem Ipsum'
        ]);
        Course::create([
            'name' => 'Python',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, possimus debitis voluptatem ratione harum vel quibusdam dolorum obcaecati ut quae illo in repellendus quis laboriosam quam eveniet distinctio fuga amet culpa? Aut culpa laborum sint temporibus recusandae dicta, itaque dignissimos minus autem aliquid veniam, porro quo nulla facilis fugiat? Nostrum!',
            'categories' => '10hrs, 5stars, beginner',
            'image' => 'Python.png',
            'teacher' => 'Lorem Ipsum'
        ]);
    }
}
