@extends('layout')

@section('content')

<div class="max-w-6xl mx-auto sn:px-6 lg:px-8">

<form class="form bg-white p-6 border-1" method="POST" action="{{route('guitars.store')}}">
  @csrf  
<div>
        <label for="name" class="text-sm">Guitar Name</label>
        <input type="text" value="{{old('name')}}" class="text-lg border-1"id="name" name="name" />
        @error('guitar-name')
            <div class="error-message">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for="brand" class="text-sm">brand</label>
        <input type="text" value="{{old('brand')}}" class="text-lg border-1"id="brand" name="brand" />
        @error('brand')
            <div class="error-message">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for="year_made" class="text-sm">year made</label>
        <input type="text" value="{{old('year_made')}}" class="text-lg border-1"id="year_made" name="year_made" />
        @error('year')
            <div class="error-message">
                {{$message}}
            </div>
        @enderror
    </div>
    <div>
        <button type="submit"class="border-1">Submit</button>
    </div>
</form>

</div>


@endsection