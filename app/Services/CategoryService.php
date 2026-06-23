<?php

namespace App\Services;

use App\Models\User;

class CategoryService
{
    /**
     * Define the default categories for each user type.
     */
    protected array $defaultCategories = [
        'Student' => [
            ['name' => 'Food', 'type' => 'expense', 'icon' => 'food'],
            ['name' => 'Transportation', 'type' => 'expense', 'icon' => 'bus'],
            ['name' => 'Rent', 'type' => 'expense', 'icon' => 'home'],
            ['name' => 'Assignment', 'type' => 'expense', 'icon' => 'book'],
            ['name' => 'Organization', 'type' => 'expense', 'icon' => 'group'],
            ['name' => 'Entertainment', 'type' => 'expense', 'icon' => 'film'],
        ],
        'Employee' => [
            ['name' => 'Salary', 'type' => 'income', 'icon' => 'briefcase'],
            ['name' => 'Investment', 'type' => 'expense', 'icon' => 'chart-line'],
            ['name' => 'Insurance', 'type' => 'expense', 'icon' => 'shield-check'],
            ['name' => 'Transportation', 'type' => 'expense', 'icon' => 'car'],
            ['name' => 'Entertainment', 'type' => 'expense', 'icon' => 'film'],
        ],
        'General User' => [
            ['name' => 'Shopping', 'type' => 'expense', 'icon' => 'shopping-bag'],
            ['name' => 'Household', 'type' => 'expense', 'icon' => 'home'],
            ['name' => 'Transportation', 'type' => 'expense', 'icon' => 'car'],
            ['name' => 'Entertainment', 'type' => 'expense', 'icon' => 'film'],
            ['name' => 'Others', 'type' => 'expense', 'icon' => 'dots-horizontal'],
        ],
    ];

    /**
     * Seed default categories for a user based on their user_type.
     *
     * @param User $user
     * @return void
     */
    public function seedDefaultCategories(User $user): void
    {
        $categories = $this->defaultCategories[$user->user_type] ?? $this->defaultCategories['General User'];

        foreach ($categories as $category) {
            $user->categories()->create($category);
        }
    }
}
