<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function index()
    {   
        // header("Content-Type: application/json");
    	$rss = new \DOMDocument();
    	$rss->load('http://rss.cnn.com/rss/cnn_topstories.rss');
    	$feed = array();
    	foreach ($rss->getElementsByTagName('item') as $node) {
    		$item = array ( 
    			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    			);
    		array_push($feed, $item);
    	}
             
        return view("welcome", ['feed'=> $feed]);
    }
    
    public function get_limit($num)
    {  
        $rss = new \DOMDocument();
        $rss->load('http://rss.cnn.com/rss/cnn_topstories.rss');
        $feed = array();
        foreach ($rss->getElementsByTagName('item') as $node) {
            $item = array ( 
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                );
            array_push($feed, $item);
        }

        $limit = $num * 5; 
        $myFeed = array();

        for($x= $num*5-5; $x<$limit; $x++){
            $myFeed[] = [$feed[$x]["title"], $feed[$x]["link"]];
        } 

        return view("partials/results", ["myFeed"=>$myFeed]);

    }

    public function json()
    {
       
        $rss = new \DOMDocument();
        $rss->load('http://rss.cnn.com/rss/cnn_topstories.rss');
        $feed = array();
        foreach ($rss->getElementsByTagName('item') as $node) {
            $item = array ( 
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                );
            array_push($feed, $item);
        }
             
        return view("json", ['feed'=> json_encode($feed)]);
    }

    

}
