<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'priority' => 1,
                'is_published' => true,
                'category' => 'services',
                'title' => 'Custom Website Development',
                'body' => 'Tailored websites designed to meet your business goals, Responsive design for seamless experience on all devices, Optimized for performance and search engines (SEO), Scalable solutions for future growth'
            ],
            [
                'priority' => 2,
                'is_published' => true,
                'category' => 'services',
                'title' => 'Web Application Development',
                'body' => 'Build custom web apps for your business needs, User-friendly interfaces for enhanced customer experience, Integration with e-commerce platforms and secure payment gateways, Custom admin panels for easy content management'
            ],
            [
                'priority' => 3,
                'is_published' => true,
                'category' => 'services',
                'title' => 'Ongoing Maintenance & Support',
                'body' => 'Regular updates to ensure security and performance, Troubleshooting and bug fixes for smooth operation, Content updates and design tweaks as your business evolves, Fast and reliable support when you need it'
            ],
        ];
        db::table('services')->insert($services);
    }
}
