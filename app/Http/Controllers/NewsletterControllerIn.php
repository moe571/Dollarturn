<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NewsletterSubscriber;

use Maatwebsite\Excel\Facades\Excel;

class NewsletterController extends Controller
{
    public function index()
    {
      $subscribers = NewsletterSubscriber::get();
      return view('backend.newsletter.index')->with(compact('subscribers'));
    }

    public function checkSubscriber(Request $request)
    {
      if($request->ajax()){
        $data = $request->all();
        /* echo "<pre>"; print_r($data); die; */
        $subscriberCount = NewsletterSubscriber::where('email', $data['subscriber_email'])->count();

        if($subscriberCount>0) {
          echo "exists";
        }
      }
    }

    public function addSubscriber(Request $request)
    {
      if($request->ajax()){
        $data = $request->all();
        /* echo "<pre>"; print_r($data); die; */
        $subscriberCount = NewsletterSubscriber::where('email', $data['subscriber_email'])->count();

        if($subscriberCount>0) {
          echo "exists";
        }else {
          $newsletter = new NewsletterSubscriber;
          $newsletter->email = $data['subscriber_email'];
          $newsletter->status = 1;
          $newsletter->save();
          echo "saved";
        }
      }
    }

    public function updateSubscriberStatus($id, $status)
    {
      NewsletterSubscriber::where('id',$id)->update(['status'=>$status]);

      return redirect()->back()->with('message','Subscriber status has been updated');
    }

    public function deleteSubscriber($id)
    {
      NewsletterSubscriber::where('id',$id)->delete();
      return redirect()->back()->with('message','Subscriber has been deleted!');
    }

    public function exportSubscribersEmails()
    {
      $subscribersData = NewsletterSubscriber::select('id','email','created_at')->where('status',1)->orderBy('id','Desc')->get();

      $subscribersData = json_decode(json_encode($subscribersData), true);

      return Excel::create('subscribers'.rand(),function($excel) use($subscribersData){
        $excel->sheet('mySheet',function($sheet) use($subscribersData){
          $sheet->fromArray($subscribersData);
        });
      })->download('xlsx');
    }
}
