<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'is_published' => true,
                'priority' => 1,
                'slug' => 'project-1',
                'title' => 'House of Light, LLC',
                'subtitle' => 'Full Stack Web Application',
                'body' => '
                    <div>
                        <h4>Overview:</h4>
                        <p>The House of Light project is a dynamic web application built with PHP and Laravel. It features a user-friendly admin panel, mobile responsiveness for seamless interaction across devices, and additional features like newsletter signup and contact form integration.</p>
                    </div>
                    <div>
                        <h4>Key Features:</h4>
                        <ul>
                            <li>
                            <span>Admin Panel:</span> Custom-built for easy site content management.
                            </li>
                            <li>
                            <span>Mobile Responsive:</span> Optimized to provide a smooth experience on all devices.
                            </li>
                            <li>
                            <span>Interactive Elements:</span> Custom sliders and data sorting functionalities for enhanced user interaction.
                            </li>
                            <li>
                            <span>Newsletter Signup:</span> Integrated feature for growing the email subscriber base.
                            </li>
                            <li>
                            <span>3rd Party Contact Form Integration:</span> Streamlined communication via an external contact form.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Technologies Used:</h4>
                        <ul>
                            <li>
                            PHP
                            </li>
                            <li>
                            Laravel
                            </li>
                            <li>
                            Bootstrap
                            </li>
                            <li>
                            JavaScript
                            </li>
                        </ul>
                    </div>
                ',
                'client' => 'Sierra D.',
                'category' => 'Full Stack Development',
                'cover_image' => '/assets/images/projects/project-hol/home.png',
                'publish_date' => Carbon::parse('September 10, 2024'),
                'project_url' => 'https://houseoflightllc.org',
                'code_url' => null
            ],
            [
                'is_published' => true,
                'priority' => 2,
                'slug' => 'project-2',
                'title' => 'Art Gallery',
                'subtitle' => 'Custom Front-End Development',
                'body' => '
                    <div>
                        <h4>Overview:</h4>
                        <p>
                        The Art Gallery project is a visually striking, modern website designed and built from a Figma prototype. Custom coded with HTML, Bootstrap, and JavaScript, it delivers a clean, minimal aesthetic with a responsive layout that adapts seamlessly to all device sizes. The project includes an interactive Leaflet map to enhance user engagement and provide a dynamic experience.
                        </p>
                    </div>
                    <div>
                        <h4>Key Features:</h4>
                        <ul>
                            <li>
                            <span>Figma to Code:</span> Translated a detailed Figma design into a functional, interactive website.
                            </li>
                            <li>
                            <span>Modern and Minimalist Design:</span> Focused on clean lines and an intuitive user experience.
                            </li>
                            <li>
                            <span>Responsive Layout: </span> Fully optimized for desktops, tablets, and mobile devices.
                            </li>
                            <li>
                            <span>Leaflet Map Integration: </span> Interactive mapping functionality for better user interaction and information display.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Technologies Used:</h4>
                        <ul>
                            <li>
                            HTML5
                            </li>
                            <li>
                            Bootstrap
                            </li>
                            <li>
                            JavaScript
                            </li>
                            <li>
                            Leaflet.js
                            </li>
                        </ul>
                    </div>
                ',
                'client' => 'F.M.',
                'category' => 'Front-End Development',
                'cover_image' => '/assets/images/projects/project-ag/home.png',
                'publish_date' => Carbon::parse('March 22, 2024'),
                'project_url' => 'https://stacy-riley.github.io/art-gallery-website/',
                'code_url' => 'https://github.com/Stacy-Riley/art-gallery-website?tab=readme-ov-file#readme'
            ],
            [
                'is_published' => true,
                'priority' => 3,
                'slug' => 'project-3',
                'title' => 'Team Building Retreats',
                'subtitle' => 'Custom Front-End Development',
                'body' => '
                    <div>
                        <h4>Overview:</h4>
                        <p>
                        This project is a clean and crisp website designed to promote team-building retreats. Built from a Figma design and custom coded using HTML, Bootstrap, and JavaScript, the site features three key pages that guide users through the retreat offerings. The minimalist design is complemented by icons and an integrated map to provide essential information with a modern, user-friendly interface.
                        </p>
                    </div>
                    <div>
                        <h4>Key Features:</h4>
                        <ul>
                            <li>
                            <span>Figma to Code:</span> Custom-coded from a Figma design with attention to detail.
                            </li>
                            <li>
                            <span>3-Page Layout:</span> Simple, intuitive navigation across core pages.
                            </li>
                            <li>
                            <span>Icons and Map:</span> Integrated icons and a map to display retreat locations clearly.
                            </li>
                            <li>
                            <span>Clean and Crisp Design:</span> A minimalist aesthetic that emphasizes clarity and usability.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Technologies Used:</h4>
                        <ul>
                            <li>
                            HTML5
                            </li>
                            <li>
                            CSS
                            </li>
                            <li>
                            JavaScript
                            </li>
                            <li>
                            Google Map
                            </li>
                        </ul>
                    </div>
                ',
                'client' => 'Unplugged',
                'category' => 'Front-End Development',
                'cover_image' => '/assets/images/projects/project-unplugged/home.png',
                'publish_date' => Carbon::parse('November 15, 2020'),
                'project_url' => 'https://stacy-riley.github.io/tech-retreat/index.html',
                'code_url' => 'https://github.com/Stacy-Riley/tech-retreat?tab=readme-ov-file#readme'
            ],
            [
                'is_published' => true,
                'priority' => 4,
                'slug' => 'project-4',
                'title' => 'Travel Website',
                'subtitle' => 'WordPress Development',
                'body' => '
                    <div>
                        <h4>Overview:</h4>
                        <p>
                        This project is a professional website built on WordPress, using the Astra theme to provide a sleek and modern design. It includes six key pages, with an articles section that features regularly updated blog posts. The site is fully responsive, adapting seamlessly to different screen sizes, and includes a contact form integrated through a WordPress plugin for easy communication.
                        </p>
                    </div>
                    <div>
                        <h4>Key Features:</h4>
                        <ul>
                            <li>
                            <span>6-Page Layout:</span> Includes a structured navigation and an articles page for blog posts.
                            </li>
                            <li>
                            <span>WordPress Astra Theme:</span> Leveraged the Astra theme for a clean and professional design.
                            </li>
                            <li>
                            <span>Responsive Design: </span> Fully optimized for various screen sizes, ensuring a consistent user experience across devices.
                            </li>
                            <li>
                            <span>Contact Form Integration:</span> Integrated contact form through a plugin for easy inquiries and customer communication.
                            </li>

                        </ul>
                    </div>
                    <div>
                        <h4>Technologies Used:</h4>
                        <ul>
                            <li>
                            Wordpress
                            </li>
                            <li>
                            Astra Theme
                            </li>
                        </ul>
                    </div>
                ',
                'client' => 'Passport Travel',
                'category' => 'WordPress Development',
                'cover_image' => '/assets/images/projects/project-pt/home.png',
                'publish_date' => Carbon::parse('February 15, 2024'),
                'project_url' => 'https://passport-travel.stacyprojects.com/',
                'code_url' => null
            ],
        ];
        DB::table('projects')->insert($projects);
    }
}
