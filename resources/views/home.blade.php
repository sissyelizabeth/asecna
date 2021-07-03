@extends('layouts.app')

@section('content')
<div class="container py-4">
            <div class="card" style="width: 100%">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
</div>
@endsection
