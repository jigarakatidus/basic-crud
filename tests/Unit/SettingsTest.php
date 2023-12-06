<?php

namespace Tests\Unit;

use App\Support\Settings;

test('has_categories', function() {
    $categories = ['Laravel', 'PHP', 'JavaScript', 'Vue.js', 'React.js', 'Angular.js', 'Java', 'C#'];

    $this->assertSame($categories, Settings::getCategories());
});

test('has_tags', function() {
    $tags = ['Eloquent', 'Blade', 'Migrations', 'Seeding', 'Routing', 'Controllers', 'Middleware', 'Requests', 'Responses', 'Views', 'Forms', 'Validation', 'Mail', 'Notifications'];

    $this->assertSame($tags, Settings::getTags());
});

