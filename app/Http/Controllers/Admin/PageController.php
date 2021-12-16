<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;
use App\Models\banner;

class PageController extends Controller
{
    public function sliderUI()
    {
        return view('admin.sliders');
    }

    public function storeSlider(Request $request)
    {
        $slider = new Slider;

        if ( $request->hasFile('file') ) {
            //   $path = Storage::disk('public')->putFile('image',$request->file('id_card_file'));
            //   $profile->id_card = $path;
             $gimages = request('file');
             $gbasename = Str::random();
             $goriginal = $gbasename.'.'.$gimages->getClientOriginalExtension();
             $gimages->move('images', $goriginal);
             $path = 'images/'.$goriginal;
             $slider->image = $path;
             $slider->save();
             $request->session()->flash('status', 'Task was successful! Please visit the homepage to see your slider reflection. Thanks');
             return redirect()->route('admin.slider');
           } else {
            $request->session()->flash('fail', 'Please attached a file');
            return redirect()->route('admin.slider');
           }
    }

    public function bannerUI()
    {
        return view('admin.banners');
    }

    public function storeBanner(Request $request)
    {

        if ($request->banner_1 != null) {
            $banner = Banner::find(1);
            $banner = $banner != null ? Banner::find(1) : new Banner;
            $gimages = request('banner_1');
            $gbasename = Str::random();
            $goriginal = $gbasename.'.'.$gimages->getClientOriginalExtension();
            $gimages->move('images', $goriginal);
            $path = 'images/'.$goriginal;
            $banner->image = $path;
            $banner->save();
            $request->session()->flash('status', 'Task was successful! Please visit the homepage to see your banner reflection. Thanks');
            return redirect()->route('admin.banner');
            }  else {
                $request->session()->flash('fail', 'fail To Upload Image');
                return redirect()->route('admin.banner');           
            }  
    
            if ($request->banner_2 != null) {
                $banner = Banner::find(2);
                $banner = $banner != null ? Banner::find(2) : new Banner;
                $gimages = request('banner_2');
                $gbasename = Str::random();
                $goriginal = $gbasename.'.'.$gimages->getClientOriginalExtension();
                $gimages->move('images', $goriginal);
                $path = 'images/'.$goriginal;
                $banner->image = $path;
                $banner->save();
                $request->session()->flash('status', 'Task was successful! Please visit the homepage to see your banner reflection. Thanks');
                return redirect()->route('admin.banner');           
             } else {
                $request->session()->flash('fail', 'fail To Upload Image');
                return redirect()->route('admin.banner');           
             }
    
            if ($request->banner_3 != null) {
                $banner = Banner::find(3);
                $banner = $banner != null ? Banner::find(3) : new Banner;
                $gimages = request('banner_3');
                $gbasename = Str::random();
                $goriginal = $gbasename.'.'.$gimages->getClientOriginalExtension();
                $gimages->move('images', $goriginal);
                $path = 'images/'.$goriginal;
                $banner->image = $path;
                $banner->save();
                $request->session()->flash('status', 'Task was successful! Please visit the homepage to see your banner reflection. Thanks');
                return redirect()->route('admin.banner');            
            } else {
                $request->session()->flash('fail', 'Fail To Upload Image');
                return redirect()->route('admin.banner');           
             }
    
            if ($request->banner_4 != null) {
                $banner = Banner::find(4);
                $banner = $banner != null ? Banner::find(4) : new Banner;
                $gimages = request('banner_4');
                $gbasename = Str::random();
                $goriginal = $gbasename.'.'.$gimages->getClientOriginalExtension();
                $gimages->move('images', $goriginal);
                $path = 'images/'.$goriginal;
                $banner->image = $path;
                $banner->save();
                $request->session()->flash('status', 'Task was successful! Please visit the homepage to see your banner reflection. Thanks');
                return redirect()->route('admin.banner');            
            } else {
                $request->session()->flash('fail', 'fail To Upload Image');
                return redirect()->route('admin.banner');           
             }
            
            if ($request->banner_5 != null) {
                $banner = Banner::find(5);
                $banner = $banner != null ? Banner::find(5) : new Banner;
                $gimages = request('banner_5');
                $gbasename = Str::random();
                $goriginal = $gbasename.'.'.$gimages->getClientOriginalExtension();
                $gimages->move('images', $goriginal);
                $path = 'images/'.$goriginal;
                $banner->image = $path;
                $banner->save();
                $request->session()->flash('status', 'Task was successful! Please visit the homepage to see your banner reflection. Thanks');
                return redirect()->route('admin.banner');            
            } else {
                $request->session()->flash('fail', 'fail To Upload Image');
                return redirect()->route('admin.banner');           
             }
    
            if ($request->banner_6 != null) {
                $banner = Banner::find(6);
                $banner = $banner != null ? Banner::find(6) : new Banner;
                $gimages = request('banner_6');
                $gbasename = Str::random();
                $goriginal = $gbasename.'.'.$gimages->getClientOriginalExtension();
                $gimages->move('images', $goriginal);
                $path = 'images/'.$goriginal;
                $banner->image = $path;
                $banner->save();
                $request->session()->flash('status', 'Task was successful! Please visit the homepage to see your banner reflection. Thanks');
                return redirect()->route('admin.banner');  
            } else {
                $request->session()->flash('fail', 'fail To Upload Image');
                return redirect()->route('admin.banner');           
             }
            
    }
}
