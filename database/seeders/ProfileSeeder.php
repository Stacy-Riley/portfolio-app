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
                'subtitle' => 'Empowering Businesses with Custom Websites and Applications',
                'body' => '
                <p>Since 2020, I\'ve been specializing in creating high-quality websites and web applications tailored for small businesses. With a focus on delivering efficient, custom solutions, I help businesses grow and succeed online by building tools that not only look great but function seamlessly across all devices.</p>

                <p>Drawing from my experience as a business owner, I understand the impact that a strong online presence can have on customer acquisition. My approach blends captivating design with user-friendly interfaces, ensuring that every project meets the unique needs of my clients.</p>

                <p>In addition to website development, I create custom web applications and admin panels, allowing clients to easily manage their content and streamline operations. Whether it\'s developing an e-commerce platform, building interactive web apps, or creating tailored solutions, my goal is to empower businesses with digital tools that drive growth and success.</p>
                ',
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

