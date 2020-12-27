<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{

    /**
     * @var array отдавать через этот массив
     */
    private $result = [];

    /**
     * MainController constructor.
     */
    public function __construct()
    {
        $this->result = [
            'status' => 'false',
            'message' => '',
            'data' => []
        ];
    }

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

        $date = Carbon::parse($request->calendar);

        $session = Session::where('calendar', $date)->first();
        if ($session) {
            $this->result['message'] = 'Ошибка. Такая сессия уже забронирована';
            return self::jsonResponse($this->result);
        } else {
            $session = new Session();
            $session->calendar = $date;
            $session->fullname = $request->fullname;
            $session->save();

            $this->result['status'] = 'ok';
            $this->result['message'] = 'Новая сессия забронирована';
            $this->result['data'] = $session;
            return self::jsonResponse($this->result);
        }
    }

    /**
     * Регистрации
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRegistrations()
    {
        $this->result['data'] = Session::where('date', '>', Carbon::now())->get();
        $this->result['status'] = $this->result['data'] ? 'ok' : 'false';
        $this->result['message'] = 'Коллекция регистраций';

        return self::jsonResponse($this->result);
    }
}
