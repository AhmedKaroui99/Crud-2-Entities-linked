<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Trotinette Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Ajouter Trotinette</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('trotinettes.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('trotinettes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nom Trotinette:</strong>
                        <input type="text" name="nom" class="form-control" placeholder="Nom Trotinette">
                        @error('nom')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Categorie Trotinette:</strong>
                        <input type="text" name="categorie" class="form-control" placeholder="Categorie Trotinette">
                        @error('categorie')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div> -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Nom Trotinette:</strong>
                            <select name="categorie" id="categorie" class="form-control">
                                @foreach($categoriets as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->type }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
            </div>
              
            
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Vitesse Trotinette :</strong>
                        <input type="text" name="vitesse" class="form-control" placeholder="Vitesse Trotinette">
                        @error('vitesse')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Poids Trotinette :</strong>
                        <input type="text" name="poids" class="form-control" placeholder="Poids Trotinette">
                        @error('poids')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Couleur Trotinette :</strong>
                        <input type="text" name="couleur" class="form-control" placeholder="Couleur Trotinette">
                        @error('couleur')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prix Trotinette :</strong>
                        <input type="text" name="prix" class="form-control" placeholder="Prix Trotinette">
                        @error('prix')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prix_location Trotinette :</strong>
                        <input type="text" name="prix_location" class="form-control" placeholder="Prix_location Trotinette">
                        @error('prix_location')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantite :</strong>
                        <input type="text" name="quantite" class="form-control" placeholder="Quantite">
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