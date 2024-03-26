@extends('layouts.app')
@section('title', 'Nashwa | Data Contacts')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div clas="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('donasi.update', $donasi->id)}}" method="post" class="">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" value="{{ $donasi->nama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Email</label>
                                                <input type="email" name="email" class="form-control" value="{{ $donasi->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Jumlah Donasi</label>
                                                <textarea name="jumlah_donasi" class="form-control">{{ $donasi->jumlah_donasi}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option {{ ($donasi->status == 1) ? 'selected' : '' }} value="1">Approved</option>
                                                    <option {{ ($donasi->status == 0) ? 'selected' : '' }} value="0">Block</option>
                                                </select>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Ubah
                                                </button> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection