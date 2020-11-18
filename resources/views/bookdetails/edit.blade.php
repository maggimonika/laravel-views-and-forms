@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')

<div id="wrapper">
            <div id="page" class="container">
                <h1 class="heading has-text-weight-bold is-size-4">Update Article Details</h1>

                <form method="POST" action="/bookdetails/{{$bookdetail->id}}">

                @csrf
                  @method('PUT')
                    <div class="field">
                        <label class="label" for="title">Title</label>
                                <div class="control">
                                    <input class="input" type="text" name="title" id="title" value="{{$bookdetail->title}}">
                            </div>
                    </div>
                    <div class="field">
                        <label class="label" for="Author">Author</label>
                                <div class="control">
                                    <textarea class="textarea"  name="author" id="author">{{$bookdetail->author}}</textarea>
                            </div>
                    </div>
                    <div class="field">
                        <label class="label" for="Prologue">Prologue</label>
                                <div class="control">
                                    <textarea class="textarea"  name="prologue" id="prologue">{{$bookdetail->prologue}}</textarea>
                            </div>
                    </div>
                    <div class="field is-grouped">
                         <div class="control">
                                    <button class="button is-link" type="submit">Update</button>
                         </div>
                            
                    </div>


                </form>
            
            
            </div>
        </div>
@endsection