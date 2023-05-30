@extends('layouts.App')

@section('title', 'creer une nouvelle gamme de produits')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card rounded-0 shadow">
                <div class="card-header"></div>
                <h5>liste de la gamme des produits</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Start_date</th>
                            <th scope="col">End_date</th>
                            <th scope="col">price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

<tbody>
    @foreach($produits as $produit)
<tr>
    <td>{{$produit->id}}</td>
    <td>{{$produit->title}}</td>
    <td>{{$produit->Description}}</td>
    <td>{{$produit->Start_date}}</td>
    <td>{{$produit->End_date}}</td>
    <td>{{$produit->price}}</td>
    <td>{{$produit->created_at->diffForHumans()}}</td>
    <td>


    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $produit->id }}">Supprimer</button>

<div class="modal fade" id="deleteModal{{ $produit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-headern bg-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Confirmation de suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Souhaitez-vous réellement supprimer cette gamme ?
            </div>
            <form action="{{ route('delete_produit', $produit->id) }}" method="POST">
                @csrf
                @method('delete')
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <a href="{{route('enregistre_produit',$produit->id)}}" class="btn btn-success btn-sm">Modifier</a>
    <a href="{{route('enregistre_produit',$produit->title)}}" class="btn btn-success btn-sm">Modifier</a>
    <a href="{{route('enregistre_produit',$produit->Description)}}" class="btn btn-success btn-sm">Modifier</a>
    <a href="{{route('enregistre_produit',$produit->Start_date)}}" class="btn btn-success btn-sm">Modifier</a>
    <a href="{{route('enregistre_produit',$produit->End_date)}}" class="btn btn-success btn-sm">Modifier</a>
    <a href="{{route('enregistre_produit',$produit->price)}}" class="btn btn-success btn-sm">Modifier</a>
<button class="btn btn-danger btn-sm">Supprimer</button>
    </td>
</tr>
    @endforeach
</tbody>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
                </table>


            </div>
        </div>
    </div>
</div>

@endsection