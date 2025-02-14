<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class HandleOrderController extends Controller
{
    public function payment_accepted($id) 
    {
        {
            $order=Order::find($id);
            $order->payment_completed=1;
            $order->update();
            return back()->with('message','Payment Updated');
        }  
    }


    public function order_completed_from_admin($id) 
    {
        {
            $order=Order::find($id);
            if($order->provider_completed!=1)
            {
                return back()->with('failed','This order not yet completed by service provider');
            }
            else
            {
                $order->order_completed=1;
                $order->update();
                return back()->with('message','Service Completed');
            }

        }  
    }

    public function order_completed_provider($id) 
    {
        {
            $order=Order::find($id);

            $order->provider_completed=1;
            $order->update();
            return back()->with('message','Service Completed from Service Provider');


        }  
    }

    public function order_completed_student($id) 
    {
        {
            $order=Order::find($id);

            $order->student_completed=1;
            $order->update();
            return back()->with('message','Service Completed from Service Provider');


        }  
    }


    public function order_to_provide(Request $req,$order_id) 
    {
        {
            $order=Order::find($order_id);
            if($order->provider_completed==1)
            {
                return back()->with('failed','This order completed by a service provider.You an not change now');
            }
            else
            {
                $order->to_provider_id=$req->provider_user_id;
                $order->update();
                return back()->with('message','Task Assigned to Service Provider Successfully');
            }

        }  
    }
    public function provider_complete($order_id) 
    {
        {
            $order=Order::find($order_id);
            $order->provider_completed=1;
            $order->update();
            return back()->with('message','Assigned Task Completed Successfully');
        }  
    }
}
