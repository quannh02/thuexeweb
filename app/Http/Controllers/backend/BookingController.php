<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\MyFunction;
use DB;
use App\DonDat;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListCar(){
        return view('backend.booking.booking');
    }
    
    public function postListCar(){
        $datepickerDi = Input::get('datepickerDi');
        // đổi sang dạng YYYY:mm:dd H:i:s
        $hourDi = Input::get('hourDi');
        $minuteDi = Input::get('minuteDi');
        $myFunction = new MyFunction;
        $thoigianDi = $myFunction->DoiDinhDangThoiGian($datepickerDi, $hourDi, $minuteDi);
        //dd($thoigianDi); die();
        $datepickerVe = Input::get('datepickerVe');
        $hourVe = Input::get('hourVe');
        $minuteVe = Input::get('minuteVe');
        $thoigianVe = $myFunction->DoiDinhDangThoiGian($datepickerVe, $hourVe, $minuteVe);
        $cars_not_in_inner = DonDat::select('bookings.car_id')->where('bookings.bookingDate', '<=', $thoigianDi)
        ->where('bookings.returnDate' , '>=', $thoigianVe)->get()->toArray();
        $cars_not_in_lower = DonDat::select('bookings.car_id')->where('bookings.bookingDate', '>=', $thoigianDi)
        ->where('bookings.bookingDate', '<=', $thoigianVe)->where('bookings.returnDate', '>=', $thoigianVe)->get()->toArray();
        $cars_not_in_higher = DonDat::select('bookings.car_id')->where('bookings.bookingDate', '<=', $thoigianDi)
        ->where('bookings.returnDate', '<=', $thoigianVe)->where('bookings.returnDate', '>=', $thoigianDi)->get()->toArray();
        $cars_not_in_outer = DonDat::select('bookings.car_id')->where('bookings.bookingDate' , '>=', $thoigianDi)
        ->where('bookings.returnDate', '<=', $thoigianVe)->get()->toArray();
        $cars_not_in= array_merge($cars_not_in_inner, $cars_not_in_outer, $cars_not_in_higher, $cars_not_in_lower);
        // dd($cars_not_in); die();
        // $cars_not_final = array_unique($cars_not_in);
        $data = DB::table('cars')
                ->join('car_types', 'car_types.id', '=', 'cars.car_type_id')
                ->select('car_types.name', 'car_types.type','car_types.producer', 'cars.id', 'cars.image', 'cars.registration_number')
                ->whereNotIn('cars.id', $cars_not_in)->orderBy('id', 'asc')
                ->get();
        return view('backend.booking.booking', compact('data'));
        // dd($thoigianVe); die();
    }

    public function getDatXe(){
        return view('backend.booking.datxe');
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
