<?php

namespace App\Http\Traits;

trait ResponseTrait
{
    private function success()
    {
        $response = [];

        $response['message'] = "Report has been sent successfully";

        return response()->json($response, 200);
    }

    private function created()
    {
        $response = [];

        $response['message'] = "Report has been created";

        return response()->json($response, 200);
    }

    private function cancelled()
    {
        $response = [];

        $response['message'] = "Report has been cancelled";
    }
}