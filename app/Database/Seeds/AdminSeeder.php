<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        // 1. Default Admin User
        $this->db->table('admins')->insert([
            'name'       => 'Administrator',
            'email'      => 'admin@winartcraft.com',
            'password'   => password_hash('admin123', PASSWORD_DEFAULT),
            'role'       => 'superadmin',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // 2. Initial Stories
        $this->db->table('stories')->insertBatch([
            [
                'title'          => 'Five Years of Creativity: Divita’s Story at Windows',
                'slug'           => 'divitas-artistic-journey-at-windows',
                'category'       => 'Student Journey',
                'excerpt'        => 'Divita has been learning and flourishing at Windows for the last five years. Her mother shares how this nurturing space and variety of art forms have inspired her creative growth.',
                'content'        => '<p class="story-lead">Divita has been part of the Windows Art and Craft family for the last five years, filling our studio with dedication, curiosity, and artistic wonder.</p><blockquote style="background: #f8fafc; border-left: 4px solid #2563eb; padding: 18px 22px; margin: 25px 0; font-style: italic; color: #1e293b; border-radius: 0 10px 10px 0;">“A wonderful art class with such a lovely variety of art forms! My daughter absolutely loves her sessions and never wants to miss a class. It’s beautiful to see her exploring different art forms, discovering her artistic side, and growing creatively with every session. A truly nurturing space that encourages children to express themselves and enjoy the joy of creating. Highly recommended!”<div style="margin-top: 10px; font-weight: 600; font-style: normal; color: #475569;">— Shared by Divita’s Mother</div></blockquote><p>Over the past five years, watching Divita grow from exploring her first brushstrokes to embracing a wide variety of mixed media techniques has been an absolute delight. At Windows, we believe that art is a journey of self-discovery where curiosity is celebrated and every canvas is an invitation to express your authentic self.</p><p>Divita’s genuine love for art and her excitement to never miss a class embody the heart and soul of Windows—where children find not just an art class, but a warm, encouraging sanctuary to blossom creatively.</p>',
                'featured_image' => 'assets/uploads/2025/03/window.jpg',
                'status'         => 'published',
                'views'          => 25,
                'created_at'     => $now,
                'updated_at'     => $now,
            ],
            [
                'title'          => 'Suhani’s Artistic Journey at Windows',
                'slug'           => 'suhanis-artistic-journey-at-windows',
                'category'       => 'Student Journey',
                'excerpt'        => 'Explore how Suhani discovered her unique visual voice and confidence through exploratory art mentoring at Windows.',
                'content'        => '<p>Suhani’s Artistic Journey at Windows has been a transformative experience marked by creativity, personal growth, and self-expression. Starting with basic sketching and color theory, she quickly expanded into mixed media, canvas painting, and abstract forms.</p><p>Through our personalized mentoring program, she learned to trust her intuition and take creative risks, resulting in stunning artworks showcased at our annual gallery exhibition.</p>',
                'featured_image' => 'assets/uploads/2025/03/Creative-art-4-298x300.jpg',
                'status'         => 'published',
                'views'          => 142,
                'created_at'     => $now,
                'updated_at'     => $now,
            ],
            [
                'title'          => 'A Journey of Creativity: Amara’s Story at Windows',
                'slug'           => 'amaras-creative-journey',
                'category'       => 'Student Journey',
                'excerpt'        => 'From hesitant sketches to vibrant gallery paintings — follow Amara’s artistic journey at Windows The Art and Craft Corner.',
                'content'        => '<p>At Windows, we believe every child possesses an innate creative spark. Amara joined our weekend workshops with curiosity and a passion for colors. Over the months, our mentors nurtured her talents across pottery, water coloring, and craft sculpture.</p><p>Today, Amara is not only confident in her artistic skills but has inspired her peers to explore creative thinking without boundaries.</p>',
                'featured_image' => 'assets/uploads/2025/03/DSC1354-300x199.jpg',
                'status'         => 'published',
                'views'          => 98,
                'created_at'     => $now,
                'updated_at'     => $now,
            ],
        ]);

        // 3. Initial Services & Workshops
        $this->db->table('services')->insertBatch([
            [
                'title'         => 'Art Workshop for Young Minds',
                'category'      => 'Workshop',
                'time_slot'     => '10:00 AM',
                'description'   => 'Engaging introductory session designed for curious children exploring colors, textures, and basic craft shapes.',
                'image'         => 'assets/uploads/2025/03/window.jpg',
                'display_order' => 1,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'Art Exploration Session',
                'category'      => 'Workshop',
                'time_slot'     => '11:30 AM',
                'description'   => 'Intermediate creative class focused on canvas acrylics, sketching, and imaginative storytelling.',
                'image'         => 'assets/uploads/2025/03/windows4.jpg',
                'display_order' => 2,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'Creative Arts Workshop',
                'category'      => 'Workshop',
                'time_slot'     => '01:00 PM',
                'description'   => 'Advanced masterclass blending mixed media, sculpting, and portfolio preparation for young artists.',
                'image'         => 'assets/uploads/2025/03/windows3.jpg',
                'display_order' => 3,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'Personalized Mentoring Program',
                'category'      => 'Mentoring',
                'time_slot'     => 'Flexible Schedule',
                'description'   => 'One-on-one tailored guidance from experienced art mentors focusing on individual artistic potential.',
                'image'         => 'assets/uploads/2025/03/Mentoring.jpg',
                'display_order' => 4,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ]);

        // 4. Initial Testimonials
        $this->db->table('testimonials')->insertBatch([
            [
                'parent_name' => "Divita's Mother",
                'child_info'  => 'Mother of Divita (Student for 5 years)',
                'review'      => 'A wonderful art class with such a lovely variety of art forms! My daughter absolutely loves her sessions and never wants to miss a class. It’s beautiful to see her exploring different art forms, discovering her artistic side, and growing creatively with every session. A truly nurturing space that encourages children to express themselves and enjoy the joy of creating. Highly recommended!',
                'rating'      => 5,
                'status'      => 'active',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'parent_name' => 'Priya Sharma',
                'child_info'  => 'Mother of Aarav (Age 8)',
                'review'      => 'Windows has truly transformed Aarav’s weekend experience. The mentors are patient, loving, and encourage real creative thinking.',
                'rating'      => 5,
                'status'      => 'active',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'parent_name' => 'Rajesh Malhotra',
                'child_info'  => 'Father of Ananya (Age 11)',
                'review'      => 'The exhibitions organized by Renuka Ma’am and the team give the children such great pride and confidence in their work!',
                'rating'      => 5,
                'status'      => 'active',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'parent_name' => 'Meera Kapoor',
                'child_info'  => 'Mother of Kabir (Age 6)',
                'review'      => 'A delightful, warm, and inspiring space for kids. We have seen Kabir’s concentration and artistic expression improve leaps and bounds.',
                'rating'      => 5,
                'status'      => 'active',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
        ]);

        // 5. Initial Sample Inquiries
        $this->db->table('inquiries')->insertBatch([
            [
                'name'       => 'Sunita Verma',
                'email'      => 'sunita.v@example.com',
                'message'    => 'Hi, I would like to inquire about the weekend batch timings and fees for my 9-year-old daughter.',
                'status'     => 'unread',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name'       => 'Amit Chawla',
                'email'      => 'amit.chawla@example.com',
                'message'    => 'Hello team, do you also conduct holiday art camps or summer workshops for children?',
                'status'     => 'read',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
                'updated_at' => $now,
            ],
        ]);

        // 6. Initial Settings
        $this->db->table('settings')->insertBatch([
            ['key' => 'site_title', 'value' => 'Windows - The Art and Craft Corner', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'contact_email', 'value' => 'info@winartcraft.com', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'contact_phone', 'value' => '+91 98100 00000', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'studio_address', 'value' => 'Winartcraft N178, Panchsheel Park North, Panchsheel Park, New Delhi, Delhi 110017, India', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'instagram_url', 'value' => 'https://www.instagram.com/', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'facebook_url', 'value' => 'https://www.facebook.com/', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'youtube_url', 'value' => 'https://www.youtube.com/', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
