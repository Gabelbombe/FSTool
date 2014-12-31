<?php
Namespace FSTool\Controller
{
    Class Api Extends \SlimController\SlimController
    {
        public function indexAction()
        {
            $params = (object) $this->request()->params();

            $post = 'query": {
        "searchinfo": {
            "totalhits": 12,
            "suggestion": "food"
        },
        "search": [
            {
                "ns": 0,
                "title": "List of airports in Gabon",
                "snippet": "AIRPORT NAME Akieni FOGA AKE Akieni Airport Bidoungui     Bidoungui Airport Bitam <span class=\"searchmatch\">FOOB</span> BMM Bitam Airport Booué FOGB BGB Booué Airport Cocobeach FOOC   Cocobeach",
                "size": 3889,
                "wordcount": 70,
                "timestamp": "2013-05-16T01:07:25Z"
            },
    {
    "ns": 0,
    "title": "Bitam Airport",
    "snippet": "Bitam Airport (IATA: BMM, ICAO: <span class=\"searchmatch\">FOOB</span>) is an airport in Bitam, Gabon.   Gabon portal  Aviation portal List of airports in Gabon    Airport information for",
    "size": 2045,
    "wordcount": 50,
    "timestamp": "2014-04-04T03:14:03Z"
    }';

            echo "/**/{$params->callback}({ $post })";
        }
    }
}