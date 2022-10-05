@extends('mainpartials.webstructure')

@section('main')
    <main class="mainApp">
        @include('mainpartials.nav')
        @include('mainpartials.variableheader')
        <div class="createitemMain">


            <form class="uploadfile" action="{{ route('collections.store') }}" method="POST">
                @csrf

                <div class="creatitemInput">
                    <span>Name</span>
                    <input class="loginInput pricetext" type="text" name="name" placeholder="Enter collection name">
                    <span></span>
                    @error('name')
                    <div class="error">{{$errors->first('name')}}</div>
                    @enderror
                    <span>Description</span>
                    <input class="loginInput descriptiontext" type="text" name="description" placeholder="e.g. “This is very limited item”">
                    @error('description')
                    <div class="error">{{$errors->first('description')}}</div>
                    @enderror
                </div>

                <button class="loginBtn" type="submit">Create</button>
            </form>
        </div>
        @include('mainpartials.footer')

    </main>

@endsection
