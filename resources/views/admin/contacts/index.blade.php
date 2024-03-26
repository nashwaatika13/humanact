@extends('layouts.app')
@section('title, Nashwa | Data Contacts')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Pengajuan Galang Dana</h2>
                                    
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
                                                <th style="color: #139597">Pesan</th>
                                                <th style="color: #139597">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $index => $contact)
                                            <tr>
                                                <td>{{ $index + 1}}</td>
                                                <td>{{ $contact->nama }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->pesan }}</td>
                                                <td>
                                                    <a href="{{ route('contacts.edit', $contact->id)}}">Edit</a>
                                                    <a href="{{route ('contacts.destroy', $contact->id)}}"><i style="color: red">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $contacts->links() }}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection