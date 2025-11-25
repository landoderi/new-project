@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim laboriosam, et tempore repellat voluptatem possimus totam obcaecati illo laborum earum autem dolore ut vero sit nulla alias velit quibusdam! Dolorum?
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
