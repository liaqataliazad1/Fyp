<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function redirect(){
         return redirect('/dashboard');
     }

     // funtion for Displaying Dashboard
    public function index()
    {

        $data=inventory::all()->count();
        $departments = department::all()->count();
        $in_use_inventories=inventory::where('status','1')->count();
        $expired_inventories=inventory::where('status','0')->count();
        return view('admin.dashboard',compact('data','in_use_inventories','expired_inventories','departments'));
    }
// return add inventory view
    public function addinventory(){
        $department = department::all();
        return view('admin.addinventory',compact('department'));
    }

    
// Add inventory funciton 
    public function save_inventory(Request $request){
        $request->validate([
            'file' => 'required',
            'name' => 'required',
            'location' => 'required'
        ]);
        $data = new inventory();
        $image=$request->file;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->file->move('inventoryimage',$imagename);
        $data->image = $imagename;

        $data->name = $request->name;
        $data->status= $request->status;
        $data->location =$request->location;
        $data->remarks = $request->remarks;
         $data->department_id = $request->department;
       // $data->code = $request->code;

        $data->save();
        return redirect()->back()->with('message','inventory added sucessfully');
    }
// show inventory function
    public function manage_inventory(Request $request){
       $data = inventory::with('department')->get();
        $search = $request['search'] ?? "";
        if($search != ""){
            //where cluse
            $mydata = inventory::where('id' , '=' ,$search);
            $data= $mydata ->paginate(1);
        }
        else{
        $data = inventory::paginate(5);

    }
        return view('admin.show_inventory',compact('data','search'));
        
    }

    // expired inventory function
    public function expired_inventory(Request $request){
        $data = inventory::where('status',0)->paginate(5);
         return view('admin.expired_inventory',compact('data'));
         
     }
// Delete Inventory function
    public function remove_inventory(){
        $data = inventory::all();
        return view('admin.remove_inventory',compact('data'));
    }

    public function adjust_inventory(){
        $data = inventory::all();
        return view('admin.adjust_inventory',compact('data'));
    }
//Return Edit view
    public function edit($id){
        $data = inventory::find($id);
        $department = department::all();
        return view('admin.edit',compact('data','department'));
    }

    // Update inventory function 

    public function update(Request $request, $id)
    {
        $image=$request->file;
        $data = inventory::find($id);
        if($image)
        {
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->product_image = $imagename;
        }
        $data->name =$request->name;
        $data->department_id = $request->department;
        $data->location =$request->location;
        $data->status= $request->status;
        $data->remarks = $request->remarks;
        $data->save();
        return redirect()->back()->with('message','inventory updated sucessfully');
    }

// funtion for delete inventory

    public function delete_inventory($id){
        
        $data = inventory::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Inventory Removed Sucessfully');
    }

// function for inventory reports

    public function invtoryreport(){
        return view('admin.reports');
    }
}
