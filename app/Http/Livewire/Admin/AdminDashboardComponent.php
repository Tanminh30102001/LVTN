<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {   
       
        $orders=Order::orderBy('created_at','DESC')->get()->take(10);
        $totalSale= Order::where('status','delivered')->count();
        $totalCancel=Order::where('status','cancel')->count();
        $totalAcept=Order::where('status','accept order')->count();
        $totalRevenue=Order::where('status','delivered')->sum('total');
        $dailyRevenue=Order::where('status','delivered')->whereDate('created_at',Carbon::now())->sum('total');
        $monthlyRevenue=Order::where('status','delivered')->whereMonth('created_at',Carbon::now()->month)->sum('total');


        return view('livewire.admin.admin-dashboard-component',['orders'=>$orders,'totalSale'=>$totalSale,'totalCancel'=>$totalCancel,'totalRevenue'=>$totalRevenue,'dailyRevenue'=>$dailyRevenue,'monthlyRevenue'=>$monthlyRevenue,'totalAcept'=>$totalAcept]);
    }
}
