<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}


// App\Models\Post::create([
//     'title' => 'judul ketiga',
//     'slug' => 'judul-ketiga',
//     'category_id' => 3,
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit, pellentesque quis tristique class netus dui hac',
//     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipiscing, elit magnis fringilla lacinia auctor fusce per, lobortis elementum libero proin faucibus. Pretium ultricies est nascetur habitant nunc tempor inceptos maecenas penatibus, ante dapibus molestie velit in luctus curabitur massa, sodales donec nam dictum tristique sem potenti mus. Nisl conubia egestas</p> <p>sed dictumst dignissim tortor aenean imperdiet torquent tincidunt parturient, praesent phasellus curae ultrices congue nisi ridiculus porta nostra. Etiam sapien litora sociis quisque justo malesuada aptent pellentesque facilisis dis erat venenatis suspendisse, enim consequat aliquam suscipit senectus neque fermentum varius</p> <p>accumsan urna rutrum. Purus quis non hac convallis ornare vivamus sociosqu lacus, nulla mi lectus aliquet gravida ac montes, vehicula eleifend sagittis ad primis cursus turpis. Euismod ligula mattis habitasse, cubilia facilisi.</p>'
// ]);
