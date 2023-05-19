<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productSlider;
class product_add extends Controller
{
    public function addProduct(request $req)
    {
      $data=new productSlider;
      $data->title=$req->title;
      $data->longTitle=$req->description;
      $data->link=$req->link;
      $image=$req->image;
      $the_rel=time().'.'.$image->extension();
      $req->image->move('img',$the_rel);

 


      $data->image= $the_rel;
      $data->save();
      return redirect()->back()->with('message','The product has been added');
    }
}
