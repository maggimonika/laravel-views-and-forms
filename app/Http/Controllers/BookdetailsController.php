<?php


namespace App\Http\Controllers;
use App\Models\Bookdetail;
use Illuminate\Http\Request;

class BookdetailsController extends Controller
{
    public function index()
    {
        //  $bookdetails = Bookdetail::latest()->get();
        $bookdetails = Bookdetail::all();
         return view('bookdetails.index',['bookdetails' =>$bookdetails]);
   
    }
    
    public function show(Bookdetail $bookdetail)
    {   
        //  die('hello');
         //$bookdetail = Bookdetail::find($id);
         return view('bookdetails.show',['bookdetail' =>$bookdetail]);
   
    }
    public function create()
    {
       return view('bookdetails.create');
   
    }
    public function store()
    {
        //return view('bookdetails.store');
       // die('hello');
    //    request()->validate([
    //        'title'=>'required',
    //        'author'=>'required',             
    //        'prologue'=>'required'
           
    //    ]);

    //    $bookdetail = new Bookdetail();
    //    $bookdetail->title = request('title');
    //    $bookdetail->author = request('author');
    //    $bookdetail->prologue = request('prologue'); 
    //    $bookdetail->save();

          Bookdetail::create($this->validateBookdetail());

       return redirect(route('bookdetails.index'));
    }
    public function edit(Bookdetail $bookdetail)
    {
        //$bookdetail = Bookdetail::find($id);
        return view('bookdetails.edit',compact('bookdetail'));
         
    }
    public function update(Bookdetail $bookdetail)
    {
        //$bookdetail = Bookdetail::find($id);
        
    //    $bookdetail->title = request('title');
    //    $bookdetail->author = request('author');
    //    $bookdetail->prologue = request('prologue');
    //    $bookdetail->save();

       $bookdetail->update($this->validateBookdetail());
  
    

       return redirect(route('bookdetails.show', $bookdetail));
   
    }
    protected function validateBookdetail()
    {
        return request()->validate([
            'title'=>'required',
            'author'=>'required',             
            'prologue'=>'required'
        ]);
    }
    // public function destroy()
    // {
        
   
    // }
}
