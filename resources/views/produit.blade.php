@extends('layouts.App')

@section('title', 'creer une nouvelle gamme de produits')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card bg-light">
                <div class="card-body">
                    <form action="{{route('enregistre_produit')}}" method="post">
                        @csrf
                        <div class="form group mb-6">
                            <label for="title">title</label>
                            <label for="Description">Description</label>
                            <label for="Start_date">Start_date</label>
                            <label for="End_date">End_date</label>
                            <label for="price">price</label>
                            <input type="text" value="{{old('title')}}" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                            <input type="text" value="{{old('Description')}}" name="Description" id="Description" class="form-control @error('Description') is-invalid @enderror">
                            <input type="date" value="{{old('Start_date')}}" name="Start_date" id="Start_date" class="form-control @error('Start_date') is-invalid @enderror">
                            <input type="date" value="{{old('End_date')}}" name="End_date" id="End_date" class="form-control @error('End_date') is-invalid @enderror">
                            <input type="float" value="{{old('price')}}" name="price" id="price" class="form-control @error('price') is-invalid @enderror">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class=" btn btn-dark w-100">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection