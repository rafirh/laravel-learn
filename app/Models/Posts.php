<?php

namespace App\Models;

class Posts
{
    private static $blog_posts = [
        [
            "title" => "First Article",
            "slug" => "first-article",
            "author" => "Rafi Rahman",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique voluptatum voluptas consectetur laudantium alias nesciunt saepe. Numquam, qui aspernatur? Incidunt obcaecati nihil molestiae rerum error, deleniti, quasi ex eligendi maxime officia impedit explicabo cumque libero corrupti dolorem qui inventore architecto vel suscipit! Laborum quas officiis placeat voluptatem modi provident, itaque illum quaerat soluta, quis officia, voluptates natus optio iste a. Nemo velit perferendis aspernatur nostrum ipsa doloribus aliquam fuga. Amet soluta quaerat rem voluptatem voluptate molestias, aspernatur vero asperiores eaque adipisci ratione numquam quis suscipit, magnam totam ducimus obcaecati eius nobis blanditiis pariatur! Beatae odit eum voluptate nesciunt eos necessitatibus."
        ],
        [
            "title" => "Second Article",
            "slug" => "second-article",
            "author" => "Muhammad Habibi",
            "content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis beatae labore facere nisi, quas laudantium eos officiis omnis molestias? Repellat, fugiat. Quis, tenetur! Autem a sed porro obcaecati delectus, quis ratione ducimus unde. Beatae officia atque earum aliquam amet nulla at incidunt, unde, perferendis, a ullam quisquam quos sed. Cumque optio nam ratione temporibus doloremque, suscipit architecto numquam culpa incidunt quas dolorem maxime dolores quod dolor voluptas amet quos asperiores voluptatibus corrupti quia. Necessitatibus exercitationem, ut iste officia laborum soluta veritatis ducimus facere quasi quos quas nobis cupiditate nisi aliquam, repudiandae totam corporis temporibus velit recusandae itaque? Temporibus, odit. Adipisci omnis distinctio error mollitia, voluptatibus sint facere eos iure esse perferendis impedit modi quibusdam iste quam, unde quasi harum quis."
        ]
    ];
    public static function all(){
        return collect(self::$blog_posts);
    }   
    public static function find($slug){
        return static::all()->firstWhere('slug', $slug);
    }
}
