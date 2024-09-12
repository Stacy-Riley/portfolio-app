<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [   'is_published' => true,
                'priority' => 1,
                'first_name' => 'Stacy',
                'last_name' => 'Riley',
                'company_name' => 'Created by Stacy',
                'subtitle' => 'Crafting Effective and Efficient Websites to Drive Results.',
                'body' => 'I specialize in High-Quality Web Development for Business Success.',
                'job_titles' => 'Full Stack Application Developer',
                'programming_skills' => 'HTML5, CSS3, JavaScript ES6, PHP, MySQL',
                'webdev_tools' => 'React.js, Bootstrap, Laravel, Tailwind CSS, WordPress, Git/GitHub, Docker, JIRA, Figma',
                'soft_skills' => 'Professional Customer Support, Writing Documentation and Reports, Team Collaboration, Problem-Solving, Time Management, Adaptability',
                'cover_image' => '/assets/images/profile/profile1.png',
                'supporting_images' => ''
            ]
        ];
        DB::table('profiles')->insert($profiles);
    }
}

