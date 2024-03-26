@extends('layouts.app')
@section('title, Nashwa | Data Contacts')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Detail Donasi</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr class="table-primary">
                                                <th style="color: #139597">No</th>
                                                <th style="color: #139597">Nama</th>
                                                <th style="color: #139597">Email</th>
                                                <th style="color: #139597">Jumlah Donasi</th>
                                                <th style="color: #139597">Waktu</th>
                                                <th style="color: #139597">Status</th>
                                                <th style="color: #139597">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($donasi as $index => $donasii)
                                            <tr>
                                                <td>{{ $index + 1}}</td>
                                                <td>{{ $donasii->nama }}</td>
                                                <td>{{ $donasii->email }}</td>
                                                <td>{{ $donasii->jumlah_donasi }}</td>
                                                <td>{{ $donasii->created_at }}</td>
                                                <td>
                                                    @if($donasii->status == 1)
                                                    <svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    @else
                                                    <svg class="text-danger h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('donasi.edit', $donasii->id)}}">Edit</a>
                                                    <a href="{{ route ('donasi.destroy', $donasii->id)}}"><i style="color: red">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $donasi->links() }}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

