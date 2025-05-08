<?php

namespace Database\Seeders;

use App\Models\CatImage;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class CatImageSeeder extends Seeder
{
    public function run(): void
    {
        $client = new Client();
        $response = $client->get('https://cataas.com/api/cats?skip=0&limit=50');
        $data = json_decode($response->getBody(), true);

        foreach ($data as $item) {
            $apiId = $item['id'] ?? null;
            if (! $apiId) {
                continue;
            }
            CatImage::create([
                '_id'      => $apiId,
                'mimetype' => $item['mimetype'] ?? '',
                'size'     => $item['size'] ?? 0,
                'tags'     => $item['tags']   ?? [],
            ]);
        }
    }
}
