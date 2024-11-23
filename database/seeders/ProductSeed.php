<?php

namespace Database\Seeders;

use App\Models\Category\Category;
use App\Models\Product\Product;
use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = collect(Category::all());
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Netflix',
            'price' => 16000,
            'image' => 'assets/images/netflix.png',
            'top_seller' => 100, 
            'top_trending' => 10
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Amazon Prime Video',
            'price' => 16000,
            'image' => 'assets/images/amazon.png',
            'top_seller' => 100, 
            'top_trending' => 10
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Disney+',
            'price' => 16000,
            'image' => 'assets/images/Disney.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'HBO Max',
            'price' => 16000,
            'image' => 'assets/images/hbomax.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Apple TV+',
            'price' => 16000,
            'image' => 'assets/images/appletv.png',
            'top_seller' => 100, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Hulu',
            'price' => 16000,
            'image' => 'assets/images/Hulu.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Vidio',
            'price' => 16000,
            'image' => 'assets/images/Vidio.png',
            'top_seller' => 100, 
            'top_trending' => 10
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'iQIYI',
            'price' => 16000,
            'image' => 'assets/images/iQIYI.png',
            'top_seller' => 100, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Viu',
            'price' => 16000,
            'image' => 'assets/images/Viu.png',
            'top_seller' => 100, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'WeTV',
            'price' => 16000,
            'image' => 'assets/images/WeTV.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'YouTube',
            'price' => 16000,
            'image' => 'assets/images/YouTube.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Paramount+',
            'price' => 16000,
            'image' => 'assets/images/Paramount.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Peacock',
            'price' => 16000,
            'image' => 'assets/images/Peacock.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Crunchyroll',
            'price' => 16000,
            'image' => 'assets/images/Crunchyroll.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Mubi ',
            'price' => 16000,
            'image' => 'assets/images/Mubi.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Shudder',
            'price' => 16000,
            'image' => 'assets/images/Shudder.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'CuriosityStream',
            'price' => 16000,
            'image' => 'assets/images/CuriosityStream.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Rakuten Viki',
            'price' => 16000,
            'image' => 'assets/images/Rakuten.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'Hotstar',
            'price' => 16000,
            'image' => 'assets/images/Hotstar.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'BBC iPlayer',
            'price' => 16000,
            'image' => 'assets/images/BBCiPlayer.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Video Streaming Services')->id,
            'name' => 'DAZN',
            'price' => 16000,
            'image' => 'assets/images/DAZN.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Audio Streaming Services')->id,
            'name' => 'Spotify',
            'price' => 16000,
            'image' => 'assets/images/Spotify.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Audio Streaming Services')->id,
            'name' => 'Apple Music',
            'price' => 16000,
            'image' => 'assets/images/AppleMusic.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Audio Streaming Services')->id,
            'name' => 'Amazon Music',
            'price' => 16000,
            'image' => 'assets/images/AmazonMusic.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Audio Streaming Services')->id,
            'name' => 'YouTube Music',
            'price' => 16000,
            'image' => 'assets/images/YouTubeMusic.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Audio Streaming Services')->id,
            'name' => 'Tidal',
            'price' => 16000,
            'image' => 'assets/images/Tidal.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Audio Streaming Services')->id,
            'name' => 'Deezer',
            'price' => 16000,
            'image' => 'assets/images/Deezer.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Audio Streaming Services')->id,
            'name' => 'Pandora',
            'price' => 16000,
            'image' => 'assets/images/Pandora.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Audio Streaming Services')->id,
            'name' => 'SoundCloud',
            'price' => 16000,
            'image' => 'assets/images/SoundCloud.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Audio Streaming Services')->id,
            'name' => 'JioSaavn',
            'price' => 16000,
            'image' => 'assets/images/JioSaavn.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];
        $product[] = [
            'categories_id' => $category->firstWhere('name','Audio Streaming Services')->id,
            'name' => 'Gaana',
            'price' => 16000,
            'image' => 'assets/images/Gaana.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Niche & Specialized Streaming')->id,
            'name' => 'Crunchyroll',
            'price' => 16000,
            'image' => 'assets/images/Crunchyroll.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Niche & Specialized Streaming')->id,
            'name' => 'Mubi',
            'price' => 16000,
            'image' => 'assets/images/Mubi.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Niche & Specialized Streaming')->id,
            'name' => 'Shudder',
            'price' => 16000,
            'image' => 'assets/images/Shudder.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Niche & Specialized Streaming')->id,
            'name' => 'CuriosityStream',
            'price' => 16000,
            'image' => 'assets/images/CuriosityStream.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        $product[] = [
            'categories_id' => $category->firstWhere('name','Niche & Specialized Streaming')->id,
            'name' => 'MasterClass',
            'price' => 16000,
            'image' => 'assets/images/MasterClass.png',
            'top_seller' => 0, 
            'top_trending' => 0
        ];

        foreach ($product as $value) {
            Product::firstOrCreate(['name' => $value['name']], $value);
        }
    }
}
