<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
    	$events = [];
    	$data =Event::all();
    	if($data->count()){
    		foreach ($data as $key => $value) {
    			$events[] = Calendar::event(
    				$value->title,
    				true,
    				new \DateTime($value->start_date),
    				new \DateTime($value->end_date.'+1 day'),
    				null,

    				[
    					'color' => '#f05050',
    					'url' => 'pass here url and any route',
    				]
    			);
    		}
    	}
    	$calendar = Calendar::addEvents($events);
    	return view('User.fullcalender', compact('calendar'));
    }
}
