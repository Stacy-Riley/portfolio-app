<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
               'is_published' => true,
               'priority' => 1,
               'body' => 'I enthusiastically recommend Stacy and her outstanding team for all your web development needs. Their dedication and commitment went above and beyond my expectations. Not only did they attentively listen to my vision for the website, but they also ensured it was accessible to individuals with visual impairments, thanks in part to one of their developers who is visually impaired herself.',
               'author' => 'Sierra D.',
               'job_title' => 'CEO, House of Light, LLC',
               'publish_date' => null
            ],
            [
                'is_published' => true,
                'priority' => 2,
                'body' => 'Working with CreatedByStacy was an absolute pleasure! They created a web application for my online English teaching business that exceeded all my expectations. The process was smooth from start to finish, and they really took the time to understand my needs. The end result was a user-friendly, beautifully designed platform that has made managing my courses so much easier. I couldn\'t be happier with the service and professionalism I received!',
                'author' => 'Lauren R.',
                'job_title' => 'Learn English Online',
                'publish_date' => null
            ],
            [
                'is_published' => true,
                'priority' => 3,
                'body' => 'Working with Stacy and her team to develop our e-commerce platform was one of the best decisions we\'ve made for our business. They created a site that not only looks great but is easy to navigate and has significantly improved our sales process. The custom features they built, including secure payment integration and user-friendly admin panels, have made managing our store so much easier. The service was exceptional from start to finish, and I would highly recommend them to anyone looking to take their online store to the next level.',
                'author' => 'Joe C.',
                'job_title' => 'Direct to You, LLC',
                'publish_date' => null
            ],
        ];
        db::table('testimonials')->truncate($testimonials);
    }
}
