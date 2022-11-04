<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Yusuf Wahyu',
        //     'email' => 'yuswhys@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'wawan',
        //     'email' => 'wawan@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=> 'Building',
            'slug'=> 'building'
        ]);

        Category::create([
            'name'=> 'Cooking',
            'slug'=> 'cooking'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolore in perferendis officia necessitatibus iusto sapiente, rerum laudantium esse ea similique. Et iure laborum quisquam, distinctio eius, natus doloribus praesentium quia tenetur dicta quasi esse architecto minus nisi illo at molestiae deserunt provident vitae sapiente inventore suscipit odio! Dignissimos, error! Vitae cupiditate voluptas cumque provident magni voluptate voluptatem reiciendis, pariatur repellat tenetur adipisci laborum qui enim debitis deleniti neque, labore officia. Nihil quas tenetur doloremque, earum quidem ut nam reprehenderit saepe. Fugiat, officia corporis impedit laudantium nobis perspiciatis labore quae iste quis ex non blanditiis omnis odio quibusdam explicabo ea.',
        //     'category_id'=> 1,
        //     'user_id'=>1
        // ]);


        // Post::create([
        //     'title'=> 'Judul Ke Dua',
        //     'slug'=> 'judul-ke-dua',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolore in perferendis officia necessitatibus iusto sapiente, rerum laudantium esse ea similique. Et iure laborum quisquam, distinctio eius, natus doloribus praesentium quia tenetur dicta quasi esse architecto minus nisi illo at molestiae deserunt provident vitae sapiente inventore suscipit odio! Dignissimos, error! Vitae cupiditate voluptas cumque provident magni voluptate voluptatem reiciendis, pariatur repellat tenetur adipisci laborum qui enim debitis deleniti neque, labore officia. Nihil quas tenetur doloremque, earum quidem ut nam reprehenderit saepe. Fugiat, officia corporis impedit laudantium nobis perspiciatis labore quae iste quis ex non blanditiis omnis odio quibusdam explicabo ea.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ke Tiga',
        //     'slug'=> 'judul-ke-tiga',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolore in perferendis officia necessitatibus iusto sapiente, rerum laudantium esse ea similique. Et iure laborum quisquam, distinctio eius, natus doloribus praesentium quia tenetur dicta quasi esse architecto minus nisi illo at molestiae deserunt provident vitae sapiente inventore suscipit odio! Dignissimos, error! Vitae cupiditate voluptas cumque provident magni voluptate voluptatem reiciendis, pariatur repellat tenetur adipisci laborum qui enim debitis deleniti neque, labore officia. Nihil quas tenetur doloremque, earum quidem ut nam reprehenderit saepe. Fugiat, officia corporis impedit laudantium nobis perspiciatis labore quae iste quis ex non blanditiis omnis odio quibusdam explicabo ea.',
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ke Empat',
        //     'slug'=> 'judul-ke-empat',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolore in perferendis officia necessitatibus iusto sapiente, rerum laudantium esse ea similique. Et iure laborum quisquam, distinctio eius, natus doloribus praesentium quia tenetur dicta quasi esse architecto minus nisi illo at molestiae deserunt provident vitae sapiente inventore suscipit odio! Dignissimos, error! Vitae cupiditate voluptas cumque provident magni voluptate voluptatem reiciendis, pariatur repellat tenetur adipisci laborum qui enim debitis deleniti neque, labore officia. Nihil quas tenetur doloremque, earum quidem ut nam reprehenderit saepe. Fugiat, officia corporis impedit laudantium nobis perspiciatis labore quae iste quis ex non blanditiis omnis odio quibusdam explicabo ea.',
        //     'category_id'=> 2,
        //     'user_id'=>2
        // ]);
    }
}
