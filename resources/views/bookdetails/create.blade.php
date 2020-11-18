@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection
@section('content')
        <div id="wrapper">
            <div id="page" class="container">
                <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

                <form method="POST" action="/bookdetails">
                @csrf
                    <div class="field">
                        <label class="label" for="title">Title</label>
                                <div class="control">
                                    <input class="input @error('title') is -danger @enderror" type="text" name="title" id="title" value="{{old('title')}}">
                                    @error('title')
                                        <p class="help is-danger">{{$errors->first('title')}}</p>
                                    @enderror    
                            </div>
                    </div>
                    <div class="field">
                        <label class="label" for="Author">Author</label>
                                <div class="control">
                                    <textarea class="textarea @error('author') is -danger @enderror"  name="author" id="author"  value="{{old('author')}}"></textarea>
                                    @error('author')
                                        <p class="help is-danger">{{$errors->first('author')}}</p>
                                    @enderror  
                            </div>
                    </div>
                    <div class="field">
                        <label class="label" for="Prologue">Prologue</label>
                                <div class="control">
                                    <textarea class="textarea @error('prologue') is -danger @enderror"  name="prologue" id="prologue" value="{{old('prologue')}}"></textarea>
                                    @error('prologue')
                                        <p class="help is-danger">{{$errors->first('prologue')}}</p>
                                    @enderror
                            </div>
                    </div>
                    <div class="field is-grouped">
                         <div class="control">
                                    <button class="button is-link" type="submit">Submit</button>
                         </div>
                            
                    </div>


                </form>
            
            
            </div>
        </div>

@endsection