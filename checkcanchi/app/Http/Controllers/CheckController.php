<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Nguhanh;
use App\CungTrach;
use Datetime;

class CheckController extends Controller
{
    public function getInput(){
    	return view('dashboard');
    }
    public function postCanChi(Request $request){

    	$cans = array('Canh','Tân','Nhâm','Quý','Giáp','Ất','Bính','Đinh','Mậu','Kỉ');
    	$chis = array('Tí','Sửu','Dần','Mão','Thìn','Tị','Ngọ','Mùi','Thân','Dậu','Tuất','Hợi');
        $gioitinh =  $request->sltSex;
		//lấy năm sinh 
    	$namsinh = $request->txtYear;

        if($request->txtYear>999){
            //chuyển thành mảng 
            $arr_namsinh = str_split($namsinh);
        //tổng các chữ số của năm sinh
            $sum_num = $arr_namsinh[0]+$arr_namsinh[1]+$arr_namsinh[2]+$arr_namsinh[3];

        //lấy ra can 
            $can_namsinh = $cans[end($arr_namsinh)];

        //lấy 2 số cuối của năm sinh
            $y2k = substr($namsinh, -2, strlen($namsinh));

            $chi_namsinh = $chis[$y2k % 12];
            if($namsinh>=2000){
                $chi_namsinh = $chis[($y2k+100) % 12];
            }else{
                $chi_namsinh = $chis[$y2k % 12];
            }
        //hiển thị chi can chi theo năm sinh 
            $canchi =  $can_namsinh.' '.$chi_namsinh; 

            $menh = $this->getMenh($can_namsinh,$chi_namsinh);

            $cung = $this->getCung($sum_num,$gioitinh);

            $id_nguhanh = $namsinh%60;

            $nguhanh = Nguhanh::find($id_nguhanh);

            $info = [];

            $info['namsinh'] = $namsinh;
            $info['gioitinh'] = $gioitinh;
            $info['giainghia_nam'] = $nguhanh->giainghia_nam;
            $info['canchi'] = $canchi;
            $info['menh'] = $menh;
            $info['nguhanh'] = $nguhanh->nguhanh;
            $info['giainghia_nguhanh'] = $nguhanh->giainghia_nguhanh;
            $info['cung'] = $cung['cung'];
            $info['id_cung'] = $cung['id_cung'];

            $id_cung = $cung['id_cung'];
            $cung_trach = CungTrach::where('id_cungtrai','=',$id_cung)->select('*')->get();

        // return count($cung_trach);
        // return $cung['id_cung'];

            return view('dashboard',compact('info'));
        }else{
            return redirect()->route('dashboard')->with('status','Nhập số năm hợp phù hợp!');
        }

        
    }
    public function getcron(){
        include('simple_html_dom.php');
        $html = file_get_html('http://phongthuynhatnam.com/article/30/bang-tra-menh-cung-xem-huong-va-menh-nian-trong-nhan-su.html');
        $array_nam = []; 
        foreach($html->find('table.tblphongthuy tbody tr') as $key =>$element) {
            if($key>0){
                $arr = [];
                $giainghia_nam =$element->find("td", 2)->plaintext; 
                $nguhanh =$element->find("td", 3)->plaintext; 
                $giainghia_nguhanh =$element->find("td", 4)->plaintext; 
                $arr['giainghia_nam'] = trim($giainghia_nam," ");
                $arr['nguhanh'] = trim($nguhanh," ");
                $arr['giainghia_nguhanh'] = trim($giainghia_nguhanh," ");

                if($key != 58 && $key != 59 && $key != 60 ){
                    $array_nam[$key+3] = $arr;
                }else{
                    switch ($key) {
                        case 58:
                            # code...
                        $array_nam[1] = $arr;
                            break;
                        case 59:
                            # code...
                        $array_nam[2] = $arr;
                            break;
                        case 60:
                            # code...
                        $array_nam[3] = $arr;
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                }
                


                if($key == 60){
                    break;
                }
            }
            
            // $data =   $element->outertext;
        }
        ksort($array_nam, SORT_NUMERIC);  
        // $this->saveData($array_nam);


    }
    public function saveData($data){
        foreach ($data as $key => $value) {
            $nguhanh = new Nguhanh;
            $nguhanh->giainghia_nam = $value['giainghia_nam'];
            $nguhanh->nguhanh = $value['nguhanh'];
            $nguhanh->giainghia_nguhanh = $value['giainghia_nguhanh'];
            $nguhanh->created_at = new Datetime();
            $nguhanh->save();
            if($nguhanh->save()){
                echo 'saved!'.'<br>';
            }
        }
    }
    public function getCung($sum_num,$gioitinh){
        switch ($sum_num%9) {
            case 0:
                # code...
            $cung = ($gioitinh == 1)?'Khôn':'Tốn';
            $id_cung = ($gioitinh == 1) ? 8:5;
                break;
            case 1:
                # code...
            $cung = ($gioitinh == 1)?'Khảm':'Cấn';
            $id_cung = ($gioitinh == 1) ? 2:3;
                break;
            case 2:
                # code...
            $cung = ($gioitinh == 1)?'Ly':'Càn';
            $id_cung = ($gioitinh == 1) ? 7:1;
                break;
            case 3:
                # code...
            $cung = ($gioitinh == 1)?'Cấn':'Đoài';
            $id_cung = ($gioitinh == 1) ? 3:6;
                break;
            case 4:
                # code...
            $cung = ($gioitinh == 1)?'Đoài':'Cấn';
            $id_cung = ($gioitinh == 1) ? 6:3;
                break;
            case 5:
                # code...
            $cung = ($gioitinh == 1)?'Càn':'Ly';
            $id_cung = ($gioitinh == 1) ? 1:7;
                break;
            case 6:
                # code...
            $cung = ($gioitinh == 1)?'Khôn':'Khảm';
            $id_cung = ($gioitinh == 1) ? 8:2;
                break;
            case 7:
                # code...
            $cung = ($gioitinh == 1)?'Tốn':'Khôn';
            $id_cung = ($gioitinh == 1) ? 5:8;
                break;
            case 8:
                # code...
            $cung = ($gioitinh == 1)?'Chấn':'Chấn';
            $id_cung = ($gioitinh == 1) ? 4:4;
                break;
            
            default:
                # code...
                break;
        }
        return [
            'cung'=>$cung,
            'id_cung'=>$id_cung
        ];
    }
    public function getMenh($can_namsinh,$chi_namsinh){
        switch ($can_namsinh) {
            case 'Giáp':
            case 'Ất':
                $can = 1;
                break;
            case 'Bính':
            case 'Đinh':
                $can = 2;
                break;
            case 'Mậu':
            case 'Kỉ':
                $can = 3;
                break;
            case 'Canh':
            case 'Tân':
                $can = 4;
                break;
            case 'Nhâm':
            case 'Quý':
                $can = 5;
                break;  
            
            default:
                # code...
                break;
        }
        switch ($chi_namsinh) {
            case 'Tí':
            case 'Sửu': 
            case 'Ngọ':
            case 'Mùi':
                $chi = 0;
                break;
            case 'Dần':
            case 'Mão':
            case 'Thân':
            case 'Dậu':
                $chi = 1;
                break;
            case 'Thìn':
            case 'Tị':
            case 'Tuất':
            case 'Hợi':
                $chi = 2;
                break;
            
            default:
                # code...
                break;
        }
        $sum = ($can + $chi);
        if($sum>5){
            $res = $sum%5;
        }else{
            $res = $sum;
        }

        switch ($res) {
            case 1:
                $menh = 'Kim';
                break;
            case 2:
                $menh = 'Thủy';
                break;
            case 3:
                $menh = 'Hỏa';
                break;
            case 4:
                $menh = 'Thổ';
                break;
            case 5:
                $menh = 'Mộc';
                break;
            
            default:
                # code...
                break;
        }
        return $menh;
    }
    public function postDataCungTrach(Request $request){
        $namsinh = $request->namsinh;
        $gioitinh = $request->gioitinh;
        $arr_namsinh = str_split($namsinh);
        $sum_num = $arr_namsinh[0]+$arr_namsinh[1]+$arr_namsinh[2]+$arr_namsinh[3];
        
        if($gioitinh == 1){
            $cung = $this->getCung($sum_num,2);
            $id_cungtrai = $request->id_cung;
            $id_cunggai = $cung['id_cung'];
            $cungtrach = CungTrach::join('battrach','battrach.id','=','tracungtrach.id_battrach')->where('tracungtrach.id_cungtrai','=',$id_cungtrai)->where('tracungtrach.id_cunggai','=',$id_cunggai)->select('*')->first();

        }else{
            $cung = $this->getCung($sum_num,1);
            $id_cunggai = $request->id_cung;
            $id_cungtrai= $cung['id_cung'];
            $cungtrach = CungTrach::join('battrach','battrach.id','=','tracungtrach.id_battrach')->where('tracungtrach.id_cungtrai','=',$id_cungtrai)->where('tracungtrach.id_cunggai','=',$id_cunggai)->select('*')->first();
        }
        
        return [
            'cungtrach'=>$cungtrach,
            'cung'=>$cung
        ];
    }
    public function getdashboard(){
        return view('dashboard');
    }
}
