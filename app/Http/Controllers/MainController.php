<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{

    public function printAdvertBill($billNo)
    {
        $url = config('global.url');

        //dd($businessID);

        $data = [
            'function'=>'getAdvertBill',
            'billNo' => $billNo
        ];

        //dd($data);

        $bill_info = json_decode($this->alex_to_curl($url, $data));
        //dd($bill_info);

        if(empty($bill_info))
        {
            return redirect()->back()->withErrors("We're having trouble retrieving your bill. Please try again later");
        }
        if($bill_info->success !=true)
        {
            return response()->json($bill_info->message);
        }

        $bill = $bill_info->data;

        $data = [
            'bill' => $bill,
        ];

//        $pdf = PDF::loadView('application.naks-pdf-bill', $data);
//        return $pdf->stream('bill.pdf',array('Attachment'=>0));
        return view('application.naks-bill-sheet', ['bill' => $bill]);
    }


    public function advertsPrints($pay_id)
    {
        return view('application.printable', compact('pay_id'));
    }

    public function getAdvertReceipt($pay_id)
    {
        $url = config('global.payme_direct');

        $data = [
            'function'=>'checkPaymentVerification',
            'account_reference' => $pay_id,
        ];


        $checkPaymentVerification = json_decode($this->payme_to_curl($url, $data));
        //dd($checkPaymentVerification);
        return response()->json(['success'=>$checkPaymentVerification]);
    }


    public function payAdvertBill(Request $request)
    {
        $url = config('global.payme_direct');

        $data = [
            'function'=>'CustomerPayBillOnlinePush',
            'PayBillNumber'=>367776,
            'Amount'=> $request->Amount,
            'PhoneNumber' => $request->phoneNumber,
            'AccountReference' => $request->paymentCode,
            'TransactionDesc' => $request->accNo,
        ];

        //dd($data);
        $payment_info = json_decode($this->payme_to_curl($url, $data));
        //dd($payment_info);
        return response()->json(['success'=>$payment_info]);

    }


  public function updateStatus(Request $request)
  {
    $url = $this->url = config('global.url');
    $request->validate([
        'status'=>'required',
        'id'=>'required',
    ]);

    $data = [
        'function'=>'updateApplicationsStatus',
        'status'=>$request->status,
        'id'=>$request->id,
    ];
    //dd($data);
    $updateApplicationsStatus = json_decode($this->alex_to_curl($url, $data));
    //dd($updateApplicationsStatus);
    return response()->json(['success'=>$updateApplicationsStatus]);
  }


    public function getApplications()
    {
      if (Session::get('auth_session')[0]['logged_in'] != 1) {
          Session::put('url', url()->current());
          return redirect()->route('login');
      } else {
        $url = config('global.url');
        $data = [
            'function'=>'getApplications',
            'status'=>1
        ];
          $this->data['getApplications'] = json_decode($this->alex_to_curl($url, $data));
          $url = config('global.url');
          $data = [
              'function'=>'getApplicantsStatus',
          ];
          $this->data['getApplicantsStatus'] = json_decode($this->alex_to_curl($url, $data));

          return view('applicant.get-applications')->with($this->data);
      }

    }

  public function getDemo(Request $request){
      $url = config('global.url');

      $data = [
              'function'=> 'getWards',
              'subCountyId' => $request->Id,
          ];
      //dd($data);
      $ward_info  = json_decode($this->alex_to_curl($url, $data));
      //dd($ward_info);
      return response()->json($ward_info);
  }



  public function saveApplicant(Request $request)
  {
    $url = $this->url = config('global.url');
    $request->validate([
        'names'=>'required',
        'applicantId'=>'required',
        'primaryPhone'=>'required',
        'secondaryPhone'=>'required',
        'email'=>'required',
        'subCounty'=>'required',
        'ward'=>'required',
        'town'=>'required',
        'county'=>'required',
        'applicantType'=>'required'
    ]);

    $data = [
        'function'=>'addApplicants',
        'names'=>$request->names,
        'applicantId'=>$request->applicantId,
        'primaryPhone'=>$request->primaryPhone,
        'secondaryPhone'=>$request->secondaryPhone,
        'email'=>$request->email,
        'subCounty'=>$request->subCounty,
        'ward'=>$request->ward,
        'town'=>$request->town,
        'county'=>$request->county,
        'applicantType'=>$request->applicantType,
    ];
    //dd($data);
    $addApplicants = json_decode($this->alex_to_curl($url, $data));
    //dd($child);
    return response()->json(['success'=>$addApplicants]);
  }
  public function getApplicant()
  {
    if (Session::get('auth_session')[0]['logged_in'] != 1) {
        Session::put('url', url()->current());
        return redirect()->route('login');
    } else {
      $url = config('global.url');
      $data = [
          'function'=>'getApplicants',
      ];
      $this->data['getApplicants'] = json_decode($this->alex_to_curl($url, $data));
      $data = [
          'function'=>'getApplicantTypes',
      ];
      $this->data['getApplicantTypes'] = json_decode($this->alex_to_curl($url, $data));

        $data = [
            'function'=>'subCounty',
        ];
        $this->data['subCounty'] = json_decode($this->alex_to_curl($url, $data));





        return view('applicant.get-applicant')->with($this->data);
    }

  }
  public function addApplicant()
  {
    if (Session::get('auth_session')[0]['logged_in'] != 1) {
        Session::put('url', url()->current());
        return redirect()->route('login');
    } else {
      $url = config('global.url');
      $data = [
          'function'=>'getApplicantTypes',
      ];
      $this->data['getApplicantTypes'] = json_decode($this->alex_to_curl($url, $data));
      return view('applicant.add-applicant')->with($this->data);
    }
  }
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

    public function postApplication(Request $request){
        $url = $this->url = config('global.url');

        //dd($request->all());
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

        $file_name = $request->file('artwork')->getClientOriginalName();
        $file = fopen($request->artwork, 'r');
        //dd($file);

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
            'subCountyId'=>$request->subCountyId,
            'wardID'=>$request->wardID,
        ];
        //dd($data);

        $response = Http::attach('artwork', $file, $file_name)->post($url,$data);
//        dd($response);

        $this->data['getFoodHygieneBill'] = json_decode($response->body());
        //dd($this->data);
        Session::put('billNo', $this->data['getFoodHygieneBill']->data->billNo);

        if ($this->data['getFoodHygieneBill']->success === true){
            return view('application.bill')->with($this->data);
        }else{
            return redirect()->back()->withErrors('error', $this->data['getFoodHygieneBill']->message);
        }
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

        $file_name = $request->file('artwork')->getClientOriginalName();
        $file = fopen($request->artwork, 'r');
        dd($file);

        dd($data);

        $response = Http::attach('artwork', $file, $file_name)->post($url,$data);

        $registered = json_decode($response->body());
        dd($registered);


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

            $data = [
                'function'=>'getApplicants',
            ];

            $this->data['getApplicants'] = json_decode($this->alex_to_curl($url, $data));

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
    function payme_to_curl($url, $data)
    {

        //        $headers = array
        //        (
        //            'Content-Type: application/json',
        //            'Content-Length: ' . strlen( json_encode($data) )
        //        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST" );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false );
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1 );
        curl_setopt($ch, CURLOPT_ENCODING, "" );
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10 );
        curl_setopt($ch, CURLOPT_TIMEOUT, 0 );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // Skip SSL Verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); // Skip SSL Verification

        //        curl_setopt($ch, CURLOPT_HTTPHEADER,  $headers );

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $output = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        /*if($httpcode != 200)
            {
            $this->session->set_flashdata( "error", "An error has ocurred . Try again" );
            redirect('land');
            }
        */
        curl_close($ch);
        return $output;


    }
}
