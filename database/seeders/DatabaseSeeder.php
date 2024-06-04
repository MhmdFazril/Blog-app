<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Fazril',
            'username' => 'mhmd',
            'email' => 'fazril@mail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Dody',
        //     'email' => 'dody@mail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar, tincidunt suscipit posuere tristique himenaeos porttitor nullam, commodo nisl aptent torquent consequat cursus nec. Porta fusce gravida vulputat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit pharetra, consequat eros nam ultricies ligula dignissim arcu himenaeos, quis netus eu commodo vel aliquet in. Nec conubia molestie interdum rhoncus aptent sollicitudin per tortor mi cum potenti, nulla nunc morbi id ultrices curabitur porta tellus mus. Quam cursus hac facilisis senectus suscipit tempor urna, condimentum mollis vivamus integer torquent porttitor libero, aenean mauris maecenas parturient penatibus nisi. Dui diam volutpat sem magna curae vestibulum dis, venenatis montes malesuada phasellus egestas tristique, erat accumsan sagittis dictumst hendrerit vulputate. Iaculis donec lacinia praesent sodales vitae viverra suspendisse, convallis at rutrum platea congue ullamcorper vehicula nibh, sapien nostra elementum ut semper scelerisque. Euismod habitant sed laoreet auctor placerat nisl, turpis posuere class ac et.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar, tincidunt suscipit posuere tristique himenaeos porttitor nullam, commodo nisl aptent torquent consequat cursus nec. Porta fusce gravida vulputat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit pharetra, consequat eros nam ultricies ligula dignissim arcu himenaeos, quis netus eu commodo vel aliquet in. Nec conubia molestie interdum rhoncus aptent sollicitudin per tortor mi cum potenti, nulla nunc morbi id ultrices curabitur porta tellus mus. Quam cursus hac facilisis senectus suscipit tempor urna, condimentum mollis vivamus integer torquent porttitor libero, aenean mauris maecenas parturient penatibus nisi. Dui diam volutpat sem magna curae vestibulum dis, venenatis montes malesuada phasellus egestas tristique, erat accumsan sagittis dictumst hendrerit vulputate. Iaculis donec lacinia praesent sodales vitae viverra suspendisse, convallis at rutrum platea congue ullamcorper vehicula nibh, sapien nostra elementum ut semper scelerisque. Euismod habitant sed laoreet auctor placerat nisl, turpis posuere class ac et.',
        //     'category_id' => 1,
        //     'user_id' => 2

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar, tincidunt suscipit posuere tristique himenaeos porttitor nullam, commodo nisl aptent torquent consequat cursus nec. Porta fusce gravida vulputat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit pharetra, consequat eros nam ultricies ligula dignissim arcu himenaeos, quis netus eu commodo vel aliquet in. Nec conubia molestie interdum rhoncus aptent sollicitudin per tortor mi cum potenti, nulla nunc morbi id ultrices curabitur porta tellus mus. Quam cursus hac facilisis senectus suscipit tempor urna, condimentum mollis vivamus integer torquent porttitor libero, aenean mauris maecenas parturient penatibus nisi. Dui diam volutpat sem magna curae vestibulum dis, venenatis montes malesuada phasellus egestas tristique, erat accumsan sagittis dictumst hendrerit vulputate. Iaculis donec lacinia praesent sodales vitae viverra suspendisse, convallis at rutrum platea congue ullamcorper vehicula nibh, sapien nostra elementum ut semper scelerisque. Euismod habitant sed laoreet auctor placerat nisl, turpis posuere class ac et.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar, tincidunt suscipit posuere tristique himenaeos porttitor nullam, commodo nisl aptent torquent consequat cursus nec. Porta fusce gravida vulputat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit pharetra, consequat eros nam ultricies ligula dignissim arcu himenaeos, quis netus eu commodo vel aliquet in. Nec conubia molestie interdum rhoncus aptent sollicitudin per tortor mi cum potenti, nulla nunc morbi id ultrices curabitur porta tellus mus. Quam cursus hac facilisis senectus suscipit tempor urna, condimentum mollis vivamus integer torquent porttitor libero, aenean mauris maecenas parturient penatibus nisi. Dui diam volutpat sem magna curae vestibulum dis, venenatis montes malesuada phasellus egestas tristique, erat accumsan sagittis dictumst hendrerit vulputate. Iaculis donec lacinia praesent sodales vitae viverra suspendisse, convallis at rutrum platea congue ullamcorper vehicula nibh, sapien nostra elementum ut semper scelerisque. Euismod habitant sed laoreet auctor placerat nisl, turpis posuere class ac et.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
