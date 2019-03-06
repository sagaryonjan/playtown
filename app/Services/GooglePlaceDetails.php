<?php

namespace App\Services;

use GuzzleHttp\Client;

class GooglePlaceDetails
{
    /**
     * Google api url
     */
    const API_URL = 'https://maps.googleapis.com/maps/api/place/details/json';

    /**
     * Google place id
     */
    const PLACE_ID = 'ChIJadCegxiqEmsRtLLcBnSv130';

    /**
     * Google api key
     */
    const GOOGLE_API_KEY = 'AIzaSyCuEE-lDXhyXd57q12hQqE4WsuGGx838Gk';

    /**
     * Fields to get from google api
     */
    const FIELDS = 'name,opening_hours';

    /**
     * Get opening hours
     */
    public function get()
    {
        $client = new Client();
        $query = $this->prepareQueryDetails();
        $response = $client->get(self::API_URL, ['query' => $query]);
        $data = json_decode($response->getBody()->getContents());

        return $data;
    }

    /**
     * Prepare Query Details
     *
     * @return array
     */
    public function prepareQueryDetails()
    {
        $query = [];
        $query['placeid'] = self::PLACE_ID;
        $query['fields'] = self::FIELDS;
        $query['key'] = self::GOOGLE_API_KEY;

        return $query;
    }

}