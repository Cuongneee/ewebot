<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServicePricing;

class ServicePricingSeeder extends Seeder
{
    public function run(): void
    {
        ServicePricing::insert([
            [
                'name' => 'Starter',
                'slug' => 'starter',
                'price' => 9.00,
                'duration' => '/mo',
                'description' => 'Gói cơ bản cho người mới bắt đầu sử dụng dịch vụ.',
                'features' => json_encode([
                    '3 Social Media Account',
                    'Free Platform Access',
                    '24/7 Customer Support',
                ]),
                'is_featured' => false,
                'order' => 1,
                'seo_title' => 'Gói Starter',
                'seo_description' => 'Gói dịch vụ cơ bản phù hợp với cá nhân.',
                'seo_keywords' => json_encode(['starter', 'cơ bản', 'gói rẻ']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
                'price' => 29.00,
                'duration' => '/mo',
                'description' => 'Gói dịch vụ phù hợp cho doanh nghiệp vừa và nhỏ.',
                'features' => json_encode([
                    '5 Social Media Account',
                    'Free Platform Access',
                    'Priority Customer Support',
                ]),
                'is_featured' => true,
                'order' => 2,
                'seo_title' => 'Gói Business',
                'seo_description' => 'Gói lý tưởng cho doanh nghiệp muốn mở rộng.',
                'seo_keywords' => json_encode(['business', 'doanh nghiệp', 'mở rộng']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium',
                'slug' => 'premium',
                'price' => 39.00,
                'duration' => '/mo',
                'description' => 'Gói cao cấp với đầy đủ tính năng và hỗ trợ.',
                'features' => json_encode([
                    '10 Social Media Account',
                    'Unlimited Platform Access',
                    'Dedicated Account Manager',
                ]),
                'is_featured' => false,
                'order' => 3,
                'seo_title' => 'Gói Premium',
                'seo_description' => 'Gói cao cấp dành cho khách hàng chuyên nghiệp.',
                'seo_keywords' => json_encode(['premium', 'cao cấp', 'đầy đủ tính năng']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
