<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\CategoryFactory;
use Database\Factories\MemberFactory;
use Database\Factories\MessageFactory;
use Database\Factories\ProjectFactory;
use Database\Factories\SettingFactory;
use Database\Factories\SkillFactory;
use Database\Factories\SubscriberFactory;
use Database\Factories\TestimonialFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            SettingFactory::class,
            SkillFactory::class,
            SubscriberFactory::class,
            MessageFactory::class,
            CategoryFactory::class,
            ProjectFactory::class,
            MemberFactory::class,
            TestimonialFactory::class,
        ]);
    }
}
