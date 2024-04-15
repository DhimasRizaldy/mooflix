<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51S5jxU4V9L._AC_.jpg',
                'rating' => 9.3,
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Crime',
                'video_url' => 'https://www.youtube.com/watch?v=sY1S34973zA',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51v5ZpFyaFL._AC_.jpg',
                'rating' => 9.2,
            ],
            [
                'name' => 'The Dark Knight',
                'slug' => 'the-dark-knight',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51lRlKzJ7oL._AC_.jpg',
                'rating' => 9.0,
            ],
            [
                'name' => '12 Angry',
                'slug' => '12-angry',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=7B7-fsTxbvI',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51lRlKzJ7oL._AC_.jpg',
                'rating' => 8.9,
            ],
            [
                'name' => 'Schindler\'s List',
                'slug' => 'schindlers-list',
                'category' => 'Biography',
                'video_url' => 'https://www.youtube.com/watch?v=gG22XNhtnoY',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51lRlKzJ7oL._AC_.jpg',
                'rating' => 8.9,
            ],
            [
                'name' => 'The Lord of the Rings: The Return of the King',
                'slug' => 'the-lord-of-the-rings-the-return-of-the-king',
                'category' => 'Adventure',
                'video_url' => 'https://www.youtube.com/watch?v=r5X-hFf6Bwo',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51lRlKzJ7oL._AC_.jpg',
                'rating' => 8.9,
            ],
            [
                'name' => 'Pulp Fiction',
                'slug' => 'pulp-fiction',
                'category' => 'Crime',
                'video_url' => 'https://www.youtube.com/watch?v=s7EdQ4FqbhY',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51lRlKzJ7oL._AC_.jpg',
                'rating' => 8.9,
            ],
            [
                'name' => 'The Lord of the Rings: The Fellowship of the Ring',
                'slug' => 'the-lord-of-the-rings-the-fellowship-of-the-ring',
                'category' => 'Adventure',
                'video_url' => 'https://www.youtube.com/watch?v=V75dMMIW2B4',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51lRlKzJ7oL._AC_.jpg',
                'rating' => 8.8,
            ],
            [
                'name' => 'Forrest Gump',
                'slug' => 'forrest-gump',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=bLvqoHBptjg',
                'thumbnail' => 'https://unsplash.com/photos/1ZkV7e9pXNQ',
                'rating' => 8.8,
            ]
        ];
        Movie::insert($movies);
    }
}
