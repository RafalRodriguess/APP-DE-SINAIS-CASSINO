@extends('layouts.backend.app')
@push('css')
@endpush

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
     <div class="page-title-heading">
        <div class="page-title-icon">
        <i class="pe-7s-check icon-gradient bg-mean-fruit"></i>
        </div>
    <div>Adicionar Video</div>
     </div>
     <div class="page-title-actions">
        <a href="{{ url('app/videos/index') }}" class="btn-shadow mr-3 btn btn-warning" name="button">
         <i class="fas fa-arrow-left"></i>&nbsp;Voltar
        </a>
     </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ url('app/videos/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                 
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="tempo">Tempo(Em Segundos)</label>
                                    <input id="tempo" type="text" class="form-control @error('name') is-invalid @enderror" name="tempo" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="valor">Valor($)</label>
                                    <input id="valor" type="text" class="form-control @error('name') is-invalid @enderror" name="saque" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="bonus">Bonus(% Porcentual)</label>
                                    <input id="bonus" type="text" class="form-control @error('name') is-invalid @enderror" name="bonus" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="video">Video</label>
                                    <input id="video" type="file" class="form-control @error('video') is-invalid @enderror" name="video"  required  autofocus>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    @isset($role)
                                    <i class="fas fa-arrow-circle-up"></i>&nbsp;Mudar</button>
                                    @else
                                    <i class="fas fa-plus-circle"></i>&nbsp;Criar</button>
                                    @endisset   
                                </button>


                            </div>

                        </div>
                    </div>

                </div>
           </form>
        </div>
    </div>

@endsection
@push('js')
<script>
    $(document).ready(function() {
        $('.roleSelect').select2();
    });
</script>

@endpush
