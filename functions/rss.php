<?php

use \Suin\RSSWriter\Feed;
use \Suin\RSSWriter\Channel;
use \Suin\RSSWriter\Item;

function get_posts($md) {
    $hd1 = '</h2>';
    $hd2 = '</h3>';
    $arr = explode($hd1, $md);
    if($arr[1] == null){
        $arr = explode($hd2, $md);
        $post['title'] = str_replace($hd2,'',$arr[0]);
    } 
    else{
        $post['title'] = str_replace($hd1,'',$arr[0]);
    }
    $post['body'] = $arr[1];
    $tmp[] = $post;
    return $tmp;
}

function generate_rss($posts, $name, $email, $site_url){
	
	$feed = new Feed();
	$channel = new Channel();
	
	$channel
		->title($site_url.'/'.$name)
		->description('rss by: '.$email)
		->url($site_url)
		->appendTo($feed);

	foreach($posts as $p){
		
		$item = new Item();
		$item
			->title($p['title'])
			->description($p['body'])
			->url($site_url)
			->appendTo($channel);
	}
	
	echo $feed;
}