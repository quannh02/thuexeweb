<?php

namespace App\Http\Controllers\frontend;
use DB;
use Illuminate\Http\Request;
use App\Cars;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Vote;
use App\Comment;
use App\TinTuc;
use App\TaiXe;
class CarsController extends Controller
{
    protected $brands;
    protected $sochoxe;
    protected $tintucs;
    public function __construct(){
        $this->brands = Cars::select('hang_xe')->distinct()->get();
        $this->sochoxe = Cars::select('socho_xe')->distinct()->get();
        $this->tintucs = TinTuc::select('id', 'tieude')->orderBy('id', 'desc')->take(5)->get();
    }

    public function index()
    {
        $brands = $this->brands;
        $socho = $this->sochoxe;
        //dd($brands); die();
        $tintucs = $this->tintucs;
        $car_bonlam = Cars::where('socho_xe', 45)->get();
        $car_balam  = Cars::where('socho_xe', 35)->get();
        return view('frontend.pages.index', compact('car_bonlam', 'car_balam', 'brands', 'socho', 'tintucs'));
    }


    public function brandforitem($brand){
        $brands = $this->brands;
        $cars = Cars::where('hang_xe', $brand)->get();
        return view('frontend.pages.listcar', compact('cars','brands'));
    }

    public function search(){
        $q = Input::get('q');
        $car = Cars::where('hang_xe','LIKE','%'.$q.'%')->orWhere('socho_xe','LIKE','%'.$q.'%')->get();
        if(count($car) > 0)
        return view('frontend.pages.searchresult', compact('cars', 'q'));
        else return view ('frontend.pages.searchresult')->withMessage('Không tìm thấy kết quả. Bạn thử tìm lại lần nữa !');
    }

    public function postVote($id){
        $point = Input::get('point');
        //dd($point); die();
        $currentVote = Vote::findOrFail($id);
        //dd($currentVote); die();
        $currentVote->sovotes = $currentVote->sovotes + 1;
        $currentVote->tongdiem = $currentVote->tongdiem +  $point;
        $currentVote->save();
        $updateVote = Vote::select('sovotes', 'tongdiem')->where('xe_id', $id)->get()->first();
        $roundVote = round(($updateVote->tongdiem/$updateVote->sovotes), 1);

        $arrayForVoting = array(
            'votes' => $updateVote->sovotes,
            'points' => $updateVote->tongdiem,
            'roundVote'=> $roundVote
            );

        //dd($roundVote); die();
        //dd($updateVote); die();
        return json_encode($arrayForVoting);
    }
    
    public function getChiTiet($id){
        $brands = $this->brands;
        $socho = $this->sochoxe;
        $tintucs = $this->tintucs;
        $binhluans = Comment::where('xe_id', $id)->get();


        //dd($binhluans);
        $xe = Cars::where('xe_id', $id)->get()->first();
        $tenlaixe = TaiXe::where('taixe_id', $xe->taixe_xe)->get()->first();
        $xekhac = Cars::where('socho_xe', $xe->socho_xe)->orWhere('hang_xe', $xe->hang_xe)->whereNotIn('xe_id', [$xe->xe_id])->get();
        //dd($xe); die();
        $vote_id = Vote::select('id')->where('xe_id', $id)->get()->first();
        //dd($vote_id);
        return view('frontend.pages.chitiet', compact('vote_id', 'binhluans', 'xe', 'socho', 'brands','tintucs','tenlaixe', 'xekhac'));
    }
}
