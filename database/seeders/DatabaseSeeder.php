<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
       

       User::create([
        'name' => 'Arif Nugraha',
        'username' => 'arifnug',
        'email' => 'arifn@gmail.com',
        'password' => bcrypt('12345')
       ]);

    //    User::create([
    //     'name' => 'Pajar Gunawan',
    //     'email' => 'pajarg@gmail.com',
    //     'password' => bcrypt('12345')
    //    ]);

    User::factory(3)->create();
       
    Category::create([
           'name' => 'Web Programming',
           'slug' =>'web-programming'
       ]);

    Category::create([
           'name' => 'Personal',
           'slug' => 'personal'
       ]);

       Category::create([
        'name' => 'Web Design',
        'slug' => 'web-design'
    ]);

    Post::factory(20)->create();

    //    Post::create([
    //     'title' => 'Judul Pertama',
    //     'slug' => 'judul-pertama',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quibusdam quod deleniti laudantium doloremque nobis animi ipsum et sed debitis dolorem earum magnam! Vel veniam, ullam molestiae vitae corporis delectus',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quibusdam quod deleniti laudantium doloremque nobis animi ipsum et sed debitis dolorem earum magnam! Vel veniam, ullam molestiae vitae corporis delectus, ea numquam dolore dolor ipsam accusamus laudantium vero nesciunt! Modi facilis beatae, quod debitis possimus est, sunt repudiandae ad placeat eveniet neque reiciendis recusandae vitae sed libero nobis. At qui atque veniam aspernatur fugiat voluptatem quo cumque consequatur, reprehenderit maxime cum quaerat distinctio? Laboriosam explicabo, corrupti sequi libero temporibus aspernatur ad illo! Eaque a magni porro magnam ab cum beatae nostrum illum perferendis molestias vel laboriosam, exercitationem quas, tempore illo?',
    //     'category_id' => 1,
    //     'user_id' => 1
    //    ]);

    //    Post::create([
    //     'title' => 'Judul Kedua',
    //     'slug' => 'judul-kedua',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quibusdam quod deleniti laudantium doloremque nobis animi ipsum et sed debitis dolorem earum magnam! Vel veniam, ullam molestiae vitae corporis delectus',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quibusdam quod deleniti laudantium doloremque nobis animi ipsum et sed debitis dolorem earum magnam! Vel veniam, ullam molestiae vitae corporis delectus, ea numquam dolore dolor ipsam accusamus laudantium vero nesciunt! Modi facilis beatae, quod debitis possimus est, sunt repudiandae ad placeat eveniet neque reiciendis recusandae vitae sed libero nobis. At qui atque veniam aspernatur fugiat voluptatem quo cumque consequatur, reprehenderit maxime cum quaerat distinctio? Laboriosam explicabo, corrupti sequi libero temporibus aspernatur ad illo! Eaque a magni porro magnam ab cum beatae nostrum illum perferendis molestias vel laboriosam, exercitationem quas, tempore illo?',
    //     'category_id' => 1,
    //     'user_id' => 1
    //    ]);

    //    Post::create([
    //     'title' => 'Judul Ketiga',
    //     'slug' => 'judul-ketiga',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quibusdam quod deleniti laudantium doloremque nobis animi ipsum et sed debitis dolorem earum magnam! Vel veniam, ullam molestiae vitae corporis delectus',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quibusdam quod deleniti laudantium doloremque nobis animi ipsum et sed debitis dolorem earum magnam! Vel veniam, ullam molestiae vitae corporis delectus, ea numquam dolore dolor ipsam accusamus laudantium vero nesciunt! Modi facilis beatae, quod debitis possimus est, sunt repudiandae ad placeat eveniet neque reiciendis recusandae vitae sed libero nobis. At qui atque veniam aspernatur fugiat voluptatem quo cumque consequatur, reprehenderit maxime cum quaerat distinctio? Laboriosam explicabo, corrupti sequi libero temporibus aspernatur ad illo! Eaque a magni porro magnam ab cum beatae nostrum illum perferendis molestias vel laboriosam, exercitationem quas, tempore illo?',
    //     'category_id' => 2,
    //     'user_id' => 1
    //    ]);

    //    Post::create([
    //     'title' => 'Judul Keempat',
    //     'slug' => 'judul-keempat',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quibusdam quod deleniti laudantium doloremque nobis animi ipsum et sed debitis dolorem earum magnam! Vel veniam, ullam molestiae vitae corporis delectus',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quibusdam quod deleniti laudantium doloremque nobis animi ipsum et sed debitis dolorem earum magnam! Vel veniam, ullam molestiae vitae corporis delectus, ea numquam dolore dolor ipsam accusamus laudantium vero nesciunt! Modi facilis beatae, quod debitis possimus est, sunt repudiandae ad placeat eveniet neque reiciendis recusandae vitae sed libero nobis. At qui atque veniam aspernatur fugiat voluptatem quo cumque consequatur, reprehenderit maxime cum quaerat distinctio? Laboriosam explicabo, corrupti sequi libero temporibus aspernatur ad illo! Eaque a magni porro magnam ab cum beatae nostrum illum perferendis molestias vel laboriosam, exercitationem quas, tempore illo?',
    //     'category_id' => 2,
    //     'user_id' => 2
    //    ]);
    }
}
