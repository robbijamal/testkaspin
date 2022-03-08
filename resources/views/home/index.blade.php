@extends('layouts.index')

@section('content')
    <div class="page-inner">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mt1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/home') }}">Home</a>
                </li>
            </ol>
        </nav><!-- /Breadcrumbs -->
    </div>
@endsection
