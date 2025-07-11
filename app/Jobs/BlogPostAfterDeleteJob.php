<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class BlogPostAfterDeleteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $blogPostId;

    public function __construct($blogPostId)
    {
        $this->blogPostId = $blogPostId;
    }

    public function handle()
    {
        logs()->warning("Видалено запис в блозі [{$this->blogPostId}]");
    }
}

