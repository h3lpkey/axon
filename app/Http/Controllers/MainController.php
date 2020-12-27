<?php

namespace App\Http\Controllers;

use App\Models\Session;
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
            'date' => 'date',
            'name' => 'string',
        ]);

        $result = [
            'status' => 'false',
            'message' => '',
            'data' => []
        ];

        $session = Session::where('date', $request->date)->first();
        if ($session) {
            $result['message'] = 'Такая сессия уже забронирована';
            return self::jsonResponse($result);
        }
        else{
            $session = new Session();
            $session->date = $request->date;
            $session->name = $request->name;
            $session->save();

            $result['status'] = 'ok';
            $result['message'] = 'Новая сессия забронирована';
            $result['data'] = $session;
            return self::jsonResponse($result);
        }
    }
}
