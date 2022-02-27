<?php

namespace App\Models;

class post 
{
    

    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Arif Nugraha",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet similique itaque repellat, fugit sapiente architecto. Iusto accusantium quasi suscipit repellendus voluptatibus quisquam magnam commodi harum molestias similique dolor, aut neque incidunt praesentium tempora tempore consequuntur veritatis! Odit, blanditiis dolorem, delectus aliquam suscipit fugit obcaecati eaque laboriosam ut enim earum recusandae, doloribus ad. Nesciunt provident rem soluta consectetur delectus eveniet quis animi iusto architecto numquam quisquam tenetur et molestiae veniam iste, temporibus aperiam laboriosam illum. Dolorem, laborum explicabo! Fuga, quod enim?"
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Arif Nugraha",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet similique itaque repellat, fugit sapiente architecto. Iusto accusantium quasi suscipit repellendus voluptatibus quisquam magnam commodi harum molestias similique dolor, aut neque incidunt praesentium tempora tempore consequuntur veritatis! Odit, blanditiis dolorem, delectus aliquam suscipit fugit obcaecati eaque laboriosam ut enim earum recusandae, doloribus ad. Nesciunt provident rem soluta consectetur delectus eveniet quis animi iusto architecto numquam quisquam tenetur et molestiae veniam iste, temporibus aperiam laboriosam illum. Dolorem, laborum explicabo! Fuga, quod enim?"
        ],
        ];

        public static function all(){
            return collect(self::$blog_post);
        }

        public static function find($slug){
            $posts = static::all();
            
        return $posts->firstWhere('slug', $slug);
    
        }
}
