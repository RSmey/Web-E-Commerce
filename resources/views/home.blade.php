@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                User Page

                <div class="panel-body">
                    @component('component.who')
                    @endcomponent
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
