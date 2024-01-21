@extends('layouts.backend.app')
@push('css')
@endpush

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    {{-- <i class="pe-7s-check icon-gradient bg-mean-fruit"></i> --}}
                    <i class="fas fa-angellist"></i>
                </div>
                <div>Videos</div>
            </div>
            <div class="page-title-actions">
                <a href="{{ url('app/videos/create') }}" class="btn-shadow mr-3 btn btn-primary" name="button">
                    <i class="fas fa-plus-circle"></i>&nbsp;Adicionar Video
                </a>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="dataTable" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Tempo</th>
                    <th class="text-center">Saque($)</th>
                    <th class="text-center">Bonus(% + 2.2)</th>
                    <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($videos as $item)
                    <tr>
                        <td class="text-center text-muted">{{ $loop->index+1 }}</td>
                        <td class="text-center">{{ $item->name }}</td>
                        <td class="text-center">{{ $item->tempo }}</td>
                        <td class="text-center">{{ $item->saque }}</td>
                        <td class="text-center">{{ $item->bonus }}</td>
                        <td class="text-center"><a href="{{asset('video/'.$item->file)}}">{{ $item->file }}</a></td>
                       
                        <td class="text-center">

                            <button onclick="deleteData({{$item->id}})" type="button" class="btn btn-danger"><i
                                    class="fas fa-trash"></i></button>
                            <form id="delete-{{$item->id}}" method="POST"
                                  action="{{ route('app.videos.destroy', $item->id) }}" style="display:none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('js')

@endpush
