<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'PHP', 'Laravel', 'VueJs', 'HTML', 'JavaScript', 'CSS', 'Angular', 'Python'
        ];

        foreach($tags as $tag) {
            Tag::create([
                'slug' => Tag::getSlug($tag),
                'name' => $tag,
            ]);
        }
    }
}
