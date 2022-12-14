<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Trotinette Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Trotinette</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('trotinettes.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('trotinettes.update',$trotinette->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
               
                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nom Trotinette:</strong>
                        <input type="text" name="nom" value="{{ $trotinette->name }}" class="form-control" placeholder="Nom Trotinette">
                        @error('nom')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Categorie Trotinette :</strong>
                        <input type="text" name="categorie" value="{{ $trotinette->categorie }}" class="form-control" placeholder="Categorie Trotinette">
                        @error('categorie')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Vitesse Trotinette :</strong>
                        <input type="text" name="vitesse" value="{{ $trotinette->vitesse }}" class="form-control" placeholder="Vitesse Trotinette">
                        @error('vitesse')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Poids Trotinette :</strong>
                        <input type="text" name="poids" value="{{ $trotinette->poids }}" class="form-control" placeholder="Poids Trotinette">
                        @error('poids')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Couleur Trotinette :</strong>
                        <input type="text" name="couleur" value="{{ $trotinette->couleur }}" class="form-control" placeholder="Couleur Trotinette">
                        @error('couleur')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prix Trotinette :</strong>
                        <input type="text" name="prix" value="{{ $trotinette->prix }}" class="form-control" placeholder="Prix Trotinette">
                        @error('prix')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prix_location Trotinette :</strong>
                        <input type="text" name="prix_location" value="{{ $trotinette->prix_location }}"prix_location class="form-control" placeholder="Prix_location Trotinette">
                        @error('prix_location')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantit?? Trotinette :</strong>
                        <input type="text" name="quantite" value="{{ $trotinette->quantite }}"prix_location class="form-control" placeholder="quantite">
                        @error('quantite')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>