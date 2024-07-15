<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Storage;
use App\Models\Post;

class AddPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for store post in database';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $title = $this->ask('Enter title for blog post');
        $filename = $this->ask('Enter filename with content');
        $cover = $this->ask('Enter cover image', Storage::url('images/post_cover.png'));
        $card = $this->ask('Enter card image', Storage::url('images/post_card.png'));
        $description = $this->ask('Enter description for SEO', $title);
        $keywords = $this->ask('Enter keywords for SEO', "Varlflow");

        $content = file_get_contents(Storage::path("posts/" . $filename));

        if ($this->confirm($content . "\n\n Its right content?\n", true)) {
            $post = Post::create(
                [
                    'title' => $title,
                    'content' => $content,
                    'image' => $cover,
                    'card_image' => $card,
                    'description' => $description,
                    'keywords' => $keywords
                ]
            );

            $this->info("Post with id {$post->id} was created!");
        } else {
            $this->error("Cancelled!");
        }
    }
}
