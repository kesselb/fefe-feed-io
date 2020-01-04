<?php

require 'vendor/autoload.php';

// create a simple FeedIo instance
$feedIo = \FeedIo\Factory::create()->getFeedIo();

// read a feed
$result = $feedIo->read('http://blog.fefe.de/rss.xml?html');

print_r($result->getFeed()->getTitle());
echo PHP_EOL;
print_r($result->getFeed()->getLastModified());
echo PHP_EOL;