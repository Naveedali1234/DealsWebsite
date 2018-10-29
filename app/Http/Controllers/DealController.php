<?php

namespace App\Http\Controllers;

use App\Deal;
use App\Group;
use Illuminate\Http\Request;
use Embed\Embed;
use Illuminate\Support\Facades\Input;
use Support;
use Auth;
use App\Deal_like;
class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deals = Deal::all();

        return view('front-end.deals-management.all-deals',compact('deals'));
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
    public function dealSubmitForm(){
        return view('front-end.deals-management.deal-submission-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDealData(Request $request)
    {
        //dd($request->input('group_name'));
       $deal = Deal::create([
            'user_id' => auth()->user()->id,
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'voucher_code' => $request->input('voucher_code'),
            'next_best_price' => $request->input('next_best_price'),
            'link' => $request->input('link'),
            'deal_start_date' => $request->input('deal_starts'),
            'deal_end_date' => $request->input('deal_ends'), 
        ]);
       if(!empty($request->input('computer_image'))){
            $deal->image = $request->input('computer_image');
            $deal->link_type = 'offline';
            $deal->save();
       }
       if(!empty($request->input('online_image'))){
            $deal->image = $request->input('online_image');
            $deal->link_type = 'online';
            $deal->save();
       }

        $detail=$request->description;
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');
        if(!empty($images)){
            foreach($images as $k => $img){

            $data = $img->getattribute('src');
            
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);

            $image_name= time().$k.'.png';
            //dd($image_name);
            $path = public_path() .'/summernote-images/'. $image_name;
            //$img->move('summernote-images',$image_name);
            file_put_contents($path, $data);
            // \Storage::disk('public')->put('summernote-images/'.$image_name,file_get_contents($data->getRealPath()));
            $img->removeattribute('src');
            $img->setattribute('src',asset('summernote-images/'.$image_name));
        }
        }
         $detail = $dom->savehtml();
        $deal->description = $detail;
        $deal->save();

        $group_names = rtrim($request->input('group_name')[0],',');
        //dd();
        //insert data in group table
        //dd($group_names);
        $group = explode(',', $group_names);
        //dd($group);
        $count = count($group);
        $group_ids = array();
        $all_groups = Group::all();
        foreach ($group as $data) {
            foreach ($all_groups as $checking_group) {
                if($data==$checking_group->name){
                    $group_ids[] = $checking_group->id;
                }
            }
   
        }
        $deal->groups()->attach($group_ids);
        //dd($deal_group->id);
        
        
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function show(Deal $deal)
    {
        //dd($deal);
        return view('front-end.deals-management.single-deal-description',compact('deal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function edit(Deal $deal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deal $deal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {
        //
    }
    public function fetchData(Request $request){
        //Load any url:
        //dd($request->input('url'));
        $url = $request->input('url');
        try{
            $info = Embed::create($url,[ 'html' => [
            'max_images' => 5,
            'external_images' => true
            ]]);
        } catch (\Exception $error) {
    //ignore error
    $info = '';
}

        //Get content info
            //dd($info->images);
            if(!empty($info)){
            return json_encode($info->images); //The page title
        }
        else{
            return 'nothing';
        }
    }
    public function imageUpload(Request $request){
        
        if(Input::hasFile('fileToUpload'))
    {
        $image = time().$request->fileToUpload->getClientOriginalName();
        //dd($image);
        $image_path = \Storage::disk('public')->put('images/'.$image,file_get_contents($request->fileToUpload->getRealPath()));

       return $image;
    }
    else {
        return "file not present";
    }
    }
    public function imageDelete(Request $request){
        if($request->has('fileName')){
            \Storage::delete($request->input('fileName'));
            return json_encode($request->input('fileName'));
        }
        return 'failure';
    }
    public function dealLike(Deal $deal){
        $user = Auth::user();
        if($user){
            $like = Deal_like::where('deal_id',$deal->id)->where('user_id',$user->id)->first();
            //dd($like->id);
            //dd($like);
            if(is_null($like)){
                //dd('hello');
                $likes = Deal_like::create([
                    'user_id' => $user->id,
                    'deal_id' => $deal->id,
                    'action_type' => 1,
                ]);

                return json_encode($deal->deal_likes->count());
            }
            else{
                return json_encode('liked');
            }
            return json_encode($deal->deal_likes->count());
        }
        else{
            return json_encode('notSignedIn');
        }
    }
}
