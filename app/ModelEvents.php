<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class ModelEvents extends Model{
    public static function section_events(){
        $events = self::take(4)->whereDate('date','>=',date('Y-m-d'))->orderBy('date')->get(['date','title']);
        $events = self::handling_event($events);
        return $events;
    }

    private static function handling_event($events){
        Date::setLocale("pt_BR");
        foreach($events as $key=>$event){
            $events[$key] = self::handling_date($events[$key],$event['date']);
        }
        return $events;
    }

    private static function handling_date($event,$date){
        $date = new Date($date);
        $event['day'] = $date->day;
        $event['month'] = $date->format('M');
        return $event;
    }

    public static function page_data(){
        $events = self::whereDate('date','>=',date('Y-m-d'))->orderBy('date')->all(['date','title','text','when','schedule','where','address','link','ticket-link']);
        $events = self::handling_event($events);
        return $events;
    }
}
