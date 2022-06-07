<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
            //     'name' => 'Muhammad Rafi Rahman Habibi',
            //     'email' => 'rafi@gmail.com',
            //     'password' => bcrypt('rafi')
            // ]);
            
            // User::create([
                //     'name' => 'Hadi Ahmad',
                //     'email' => 'hadi@gmail.com',
                //     'password' => bcrypt('hadi')
                // ]);
                
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::factory(5)->create();

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'What is API ?',
        //     'slug' => 'what-is-api',
        //     'excerpt' => 'Have you ever heard the word “API” batted about, and wondered exactly what an this is?',
        //     'body' => '<p>Have you ever heard the word “API” batted about, and wondered exactly what an this is? Do you have a vague idea, but want to know more about what you might do with an API, and how you might build one?</p><p>Don’t fret. I can help!</p><p>Let’s get down to it and pick apart what an API is, and how building an API is similar (or different!) than building other types of web apps and websites. Here’s a short primer on what an API is, what makes it different, and what you would need to build one yourself.</p><p>When people speak of “an API”, they sometimes generalize and actually mean “a publicly available web-based API that returns data, likely in JSON or XML”. The API is not the database or even the server, it is the code that governs the access point(s) for the server.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'What is UI/UX ?',
        //     'slug' => 'what-is-ui-ux',
        //     'excerpt' => 'UI design and UX design are two of the most often confused and conflated terms in web and app design.',
        //     'body' => '<p>UI design and UX design are two of the most often confused and conflated terms in web and app design. And understandably so. They’re usually placed together in a single term, UI/UX design, and viewed from the surface they seem to be describing the same thing. It’s often hard to find solid descriptions of the two that don’t descend too far into jargon. But fear not!</p><p>The “UI” in UI design stands for “user interface.” The user interface is the graphical layout of an application. It consists of the buttons users click on, the text they read, the images, sliders, text entry fields, and all the rest of the items the user interacts with. This includes screen layout, transitions, interface animations and every single micro-interaction. Any sort of visual element, interaction, or animation must all be designed.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Hello I am Rafi',
        //     'slug' => 'hello-i-am-rafi',
        //     'excerpt' => 'Currently studying at SMK Telkom Malang,',
        //     'body' => '<p>Currently studying at SMK Telkom Malang, passionate in problem solving thing and software engineering especially in back-end development. Learning to get used to working in a team or individually and is willing to learn from various fields. Always open to learn new skills such as soft skills and hard skills, being adaptive and can socialize well.</p>',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Software Enginner',
        //     'slug' => 'software-enginner',
        //     'excerpt' => 'Software engineering is the branch of computer science that deals with the design,',
        //     'body' => '<p>Software engineering is the branch of computer science that deals with the design, development, testing, and maintenance of software applications. Software engineers apply engineering principles and knowledge of programming languages to build software solutions for end users.</p><p>Successful engineers know how to use the right programming languages, platforms, and architectures to develop everything from computer games to network control systems. In addition to building their own systems, software engineers also test, improve, and maintain software built by other engineers.</p><p>Once you become a software engineer, you can choose which path you want to take (applications or systems) and how far you want to progress with it. You can decide to advance toward a role as a senior software engineer, or you can continue gaining certifications and experience to advance to roles like project manager or systems manager. As a software engineer, you have both flexibility and mobility to create the career experience that is most appealing to you.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
