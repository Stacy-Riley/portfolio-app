<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'user_id' => 1,
                'is_published' => true,
                'priority' => 1,
                'slug' => 'project-1',
                'title' => 'Why Your Small Business Needs a Custom App Built with PHP Laravel',
                'body' => '
                <div>
                    <p>
                    In today’s digital landscape, having a custom business app can be a game-changer for small businesses. When you invest in a solution that’s built specifically for your needs, you get far more than a website—you gain a powerful tool tailored to streamline operations and help your business grow. One of the best ways to create these apps is by using PHP Laravel, a robust framework that’s ideal for building custom applications.
                    </p>
                    <p>
                    One of the standout features of a Laravel-built app is the admin panel. This is where the magic happens behind the scenes, giving business owners the ability to manage their content effortlessly. Whether you need to update services, add new team members, or post the latest company news, the admin panel makes it easy to keep your website fresh and relevant. Laravel’s framework ensures that this back-end functionality is not only secure but also intuitive to use.
                    </p>

                    <p>
                    Another key benefit of a custom business app with Laravel is the ability to edit information on the fly. As a small business owner, you don’t have time to wait around for a developer to make small changes. With an easy-to-use admin panel, you can quickly update information like contact details, blog posts, or even add new images without needing any technical expertise. This flexibility puts you in full control of your website and ensures that your business can adapt to changes as they happen.
                    </p>
                    <p>
                    Ultimately, investing in a custom Laravel app gives your business the foundation it needs to thrive online. By having a tailored solution with a user-friendly admin panel, you can manage your site efficiently and focus on what matters most—running your business. Stay tuned for our next post, where we’ll dive into how Laravel makes e-commerce integration seamless for small businesses!
                    </p>
                </div>
                ',
                'author' => 'Stacy',
                'category' => 'Development',
                'cover_image' => '/assets/images/blog/admin_panel.png',
                'publish_date' => Carbon::parse('June 15, 2024')
            ],
            [
                'user_id' => 1,
                'is_published' => true,
                'priority' => 2,
                'slug' => 'project-2',
                'title' => 'How a Custom Laravel App Can Revolutionize Your E-Commerce Business',
                'body' => '
                <div>
                    <p>
                    A custom-built app using PHP Laravel is the perfect solution to meet the unique needs of your online store. From product management to order tracking, a Laravel app offers tailored functionality that allows small business owners to operate their store efficiently and effectively.
                    </p>
                    <p>
                    One of the major advantages of a Laravel-powered e-commerce site is the seamless integration of an admin panel. This panel makes managing products, pricing, inventory, and customer details a breeze. Forget about complicated third-party plugins or platforms—your app will have everything built in, giving you complete control over your store from one central location.
                    </p>
                    <p>
                    Another highlight of using Laravel for e-commerce is its scalability. As your business grows, your online store can grow with it. Need to add more products, handle more transactions, or integrate new payment gateways? No problem. Laravel is designed to be flexible, so your e-commerce platform can adapt and expand without disruption.
                    </p>
                    <p>
                    Finally, security is paramount in e-commerce. Laravel comes with built-in tools to keep your data and customer information safe, offering features like encryption, authentication, and secure payment processing. With Laravel, you can be confident that both your business and your customers are protected.
                    </p>
                    <p>
                    If you\'re ready to take your online store to the next level, a custom Laravel app is the way to go. Stay tuned for more insights into how this powerful framework can support your business goals!
                    </p>
                </div>
                ',
                'author' => 'Stacy',
                'category' => 'Development',
                'cover_image' => '/assets/images/blog/ecommerce_image.png',
                'publish_date' => Carbon::parse('August 18, 2024')
            ],
            [
                'user_id' => 1,
                'is_published' => true,
                'priority' => 3,
                'slug' => 'project-3',
                'title' => 'Why Your Office Should Adopt Custom Laravel Solutions for Data Security',
                'body' => '
                <div>
                    <p>
                    In today’s digital age, safeguarding sensitive office data has never been more crucial. From client information to internal documents, a breach can have devastating effects on a business. This is where Laravel, a powerful PHP framework, steps in to offer custom solutions that ensure your data stays protected.
                    </p>
                    <p>
                    One of Laravel\'s standout features is built-in encryption. Laravel uses advanced algorithms to encrypt sensitive data, meaning even if unauthorized users were to access it, they wouldn’t be able to make sense of it without the encryption key. For offices handling confidential information, this level of encryption provides peace of mind and compliance with data protection regulations.
                    </p>
                    <p>
                    Another powerful security feature is authentication. Laravel makes it easy to implement strong authentication protocols, ensuring that only authorized personnel have access to your office systems. By supporting multi-factor authentication (MFA), Laravel adds an extra layer of security to prevent unauthorized logins, reducing the risk of data breaches.
                    </p>
                    <p>
                    Laravel also offers secure password storage by hashing passwords, which ensures they are stored safely in your database. This protects user credentials even in the event of a breach, adding another line of defense to keep sensitive office data out of the wrong hands.
                    </p>
                    <p>
                    Additionally, Laravel’s role-based access control (RBAC) system allows you to define roles and permissions, ensuring that employees can only access the data and systems relevant to their role. This prevents unauthorized access to sensitive information and ensures that confidential data is available on a need-to-know basis.
                    </p>
                    <p>
                    In conclusion, adopting a custom Laravel solution for your office not only improves productivity but also offers robust security features to keep your data safe. Whether it’s encryption, authentication, or access control, Laravel is designed to give your business the protection it needs in today’s security landscape.
                    </p>
                </div>
                ',
                'author' => 'Stacy',
                'category' => 'Security',
                'cover_image' => '/assets/images/blog/cyber_security.png',
                'publish_date' => Carbon::parse('October 12, 2024')
            ],
        ];

        db::table('blogs')->insert($blogs);
    }

}
