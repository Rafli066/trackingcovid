@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card-header"><b>EDIT DATA KASUS2<b></div>

                <div class="card-body">
                <form action="{{route('kasus2.update', $kasus2->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Positif</label>
                        <input type="number" name="jpositif" value="{{$kasus2->jpositif}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Meninngal</label>
                        <input type="number" name="jmeninggal" value="{{$kasus2->jmeninggal}}" class="form-control" required>
                    </div
                    ><div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Sembuh</label>
                        <input type="number" name="jsembuh" value="{{$kasus2->jsembuh}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" value="{{$kasus2->tanggal}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Rw</label>
                        <select name="id_rw" class="form-control" id="">
                        @foreach ($rw as $data)
                            <option value="{{$data->id}}">{{$data->nama_rw}}</option>
                        @endforeach
                        </select>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
