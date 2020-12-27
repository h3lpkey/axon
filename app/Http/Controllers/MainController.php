<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{

    /**
     * Регистрация новой сессии
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function registration(Request $request)
    {
        $request->validate([
            'calendar' => 'required',
            'fullname' => 'string',
        ]);

        $result = [
            'status' => 'false',
            'message' => '',
            'data' => []
        ];

        $date = Carbon::parse($request->calendar);

        $session = Session::where('calendar', $date)->first();
        if ($session) {
            $result['message'] = 'Ошибка. Такая сессия уже забронирована';
            return self::jsonResponse($result);
        }
        else{
            $session = new Session();
            $session->calendar = $date;
            $session->fullname = $request->fullname;
            $session->save();

            $result['status'] = 'ok';
            $result['message'] = 'Новая сессия забронирована';
            $result['data'] = $session;
            return self::jsonResponse($result);
        }
    }
}
