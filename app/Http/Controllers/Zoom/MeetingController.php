<?php

namespace App\Http\Controllers\Zoom;

use App\Http\Controllers\Controller;
use App\Traits\ZoomJWT;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MeetingController extends Controller
{
    use ZoomJWT;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

    public function create(Request $request)
    {

        $path = 'users/me/meetings';
        $response = $this->zoomPost($path, [
            'topic' => 'Speaking Exam',
            'type' => self::MEETING_TYPE_SCHEDULE,
            'start_time' => $this->toZoomTimeFormat(Carbon::now()),
            'duration' => 15,
            'agenda' => 'Speaking Exam',
            'settings' => [
                'host_video' => false,
                'participant_video' => false,
                'waiting_room' => false,
                'join_before_host' => true,
            ]
        ]);


        return [
            'success' => $response->status() === 201,
            'data' => json_decode($response->body(), true),
        ];
    }
}
