<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function getLocation(Request $request)
    {

        $locations = Session::get('locations');

        $location = $locations->data[$request->locationID];

        return response()->json($location);
    }
    public function getAddress(Request $request){
        $url = config('global.url');
        $request->validate([
            'physicalAddress'=>'required',
        ]);

        $data = [
            'function'=>'getAddress',
            'address' => $request->physicalAddress,
        ];
        $getAddress  = json_decode($this->alex_to_curl($url, $data));
//        dd($getAddress);

        Session::put('locations', $getAddress);


        return response()->json(['success'=>$getAddress]);
    }
    public function advertPlates(){
        if (Session::get('auth_session')[0]['logged_in'] != 1) {
            Session::put('url', url()->current());
            return redirect()->route('login');
        } else {
            $url = config('global.url');
            $data = [
                'function'=>'getAdvertsPlates',
            ];


            $this->data['getAdvertsPlates'] = json_decode($this->alex_to_curl($url, $data));

            //dd($this->data);

            return view('application.plates')->with($this->data);
        }
    }
    public function postAdditionalPrice(Request $request){
        $url = config('global.url');
        $request->validate([
            'uniqueAdvertCode'=>'required',
            'amount'=>'required',
            'createdBy'=>'required',

        ]);

        $data = [
            'function'=>'additionalPricePerUnit',
            'uniqueAdvertCode' => $request->uniqueAdvertCode,
            'amount' => $request->amount,
            'createdBy' => $request->createdBy,

        ];
        $additionalPricePerUnit  = json_decode($this->alex_to_curl($url, $data));
        //dd($additionalPricePerUnit);
        return response()->json(['success'=>$additionalPricePerUnit]);
    }

    public function additionalPrice($code)
    {
        return view('billable.additional-price', compact('code'));
    }


    public function getSubcategory(Request $request){
        $url = config('global.url');
        $data = [
            'function'=>'getSubCategories',
            'parentId' => $request->parentId,
            ];
        $subcategory  = json_decode($this->alex_to_curl($url, $data));
        //dd($subcategory);
        return response()->json(['success'=>$subcategory]);


    }
    public function postApply(Request $request){
        $url = $this->url = config('global.url');
        $request->validate([
            'uniqueAdvertCode'=>'required',
            'categoryName'=>'required',
            'physicalAddress'=>'required',
            'latLng'=>'required',
            'applicantID'=>'required',
            'dimensions'=>'required',
            'dimensionsUnits'=>'required',
            'duration'=>'required',
            'durationUnit'=>'required',
            'artwork'=>'required',
            'subCountyId'=>'required',
            'wardID'=>'required'
        ]);

        $data = [
            'function'=>'application',
            'uniqueAdvertCode'=>$request->uniqueAdvertCode,
            'categoryName'=>$request->categoryName,
            'physicalAddress'=>$request->physicalAddress,
            'latLng'=>$request->latLng,
            'applicantID'=>$request->applicantID,
            'dimensions'=>$request->dimensions,
            'dimensionsUnits'=>$request->dimensionsUnits,
            'duration'=>$request->duration,
            'durationUnit'=>$request->durationUnit,
            'artwork'=>$request->artwork,
            'subCountyId'=>$request->subCountyId,
            'wardID'=>$request->wardID,
        ];
        //dd($data);
        $application = json_decode($this->alex_to_curl($url, $data));
        //dd($application);
        return response()->json(['success'=>$application]);
    }
    public function apply(){
        if (Session::get('auth_session')[0]['logged_in'] != 1) {
            Session::put('url', url()->current());
            return redirect()->route('login');
        } else {
            $url = config('global.url');

            $data = [
                'function'=>'getDuration',
            ];

            $this->data['getDuration'] = json_decode($this->alex_to_curl($url, $data));

            $data = [
                'function'=>'getCategories',
            ];

            $this->data['getCategories'] = json_decode($this->alex_to_curl($url, $data));

            //dd($this->data);
            return view('application.apply')->with($this->data);
        }
    }
    public function index(){
        if (Session::get('auth_session')[0]['logged_in'] != 1) {
            Session::put('url', url()->current());
            return redirect()->route('login');
        } else {

        return view('home');
        }
    }
    public function billableItems(){
        if (Session::get('auth_session')[0]['logged_in'] != 1) {
            Session::put('url', url()->current());
            return redirect()->route('login');
        } else {
            $url = config('global.url');

            $data = [
                'function'=>'getCategories',
            ];

            $this->data['getCategories'] = json_decode($this->alex_to_curl($url, $data));

            //dd($this->data);
            return view('billable.add-billable')->with($this->data);
        }
    }

    public function childItems(Request $request){
        $url = $this->url = config('global.url');
        $request->validate([
            'itemName'=>'required',
            'isParent'=>'required',
            'currency'=>'required',
            'amount'=>'required',
            'uniqueAdvertCode'=>'required',
            'fixed'=>'required',
            'parentId'=>'required'
        ]);

        $data = [
            'function'=>'addBillableItems',
            'itemName'=>$request->itemName,
            'currency'=>$request->currency,
            'isParent'=>$request->isParent,
            'amount'=>$request->amount,
            'parentId'=>$request->parentId,
            'uniqueAdvertCode'=>$request->uniqueAdvertCode,
            'fixed'=>$request->fixed,
        ];
        //dd($data);
        $child = json_decode($this->alex_to_curl($url, $data));
        //dd($child);
        return response()->json(['success'=>$child]);
    }

    public function postBillableItems(Request $request){
        $url = $this->url = config('global.url');
        $request->validate([
            'itemName'=>'required',
            'isParent'=>'required'
        ]);

        $data = [
            'function'=>'addBillableItems',
            'itemName'=>$request->itemName,
            'isParent'=>$request->isParent,
        ];
        //dd($data);
        $parent = json_decode($this->alex_to_curl($url, $data));
        //dd($parent);
        return response()->json(['success'=>$parent]);
    }

    function alex_to_curl($url, $data){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST" );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1 );
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $output = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);
        return $output;

    }
}
