<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateRobots
{
    public function handle(Jigsaw $jigsaw): void
    {
        $robotsContent = "User-agent: *\n";
        $robotsContent .= "Disallow: /assets/\n";
        $robotsContent .= "Disallow: /404\n\n";
        $robotsContent .= "Sitemap: https://mirandafialho.dev/sitemap.xml\n";

        file_put_contents($jigsaw->getDestinationPath() . '/robots.txt', $robotsContent);
    }
}