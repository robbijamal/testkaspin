@extends('layouts.index')

@section('content')
   
    <style>
        .btn.btn-default, .btn.btn-default:active:focus {
            border-color: #c6c9d6;
            color: black;
            min-width: 100px;
            padding: 12px 20px;
            font-size: 14px;
        }
   </style>
    <link rel="stylesheet" href="{{ url('/') }}/assets/js/parsley/parsley.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/js/selectize/selectize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    <!-- Page Inner -->
    <div class="page-inner">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mt1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/home') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/privilege') }}">Barang</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="#">Edit Barang</a>
                </li>
            </ol>
        </nav><!-- /Breadcrumbs -->
        <!-- Page Title -->
        <div class="page-title page-title-custom mt2 mb2">
            <h3 class="breadcrumb-header mb0">Edit Barang</h3>
        </div> <!-- /Page Title -->
        <div id="box"></div>
        <div id="main-wrapper">
            <form method="POST" action="{{ route('barang-update') }}">
                <input type="hidden" name="barang_id" value="{{$data->id}}">
                <div class="audience-lists">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <div>
                                <input autocomplete="off" type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Harga Barang</label>
                            <div>
                                <input autocomplete="off" type="text" name="harga" class="form-control" value="{{$data->harga}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <div>
                                <textarea  type="text" name="deskripsi" rows="3" class="form-control">{{$data->deskripsi}}</textarea>
                            </div>
                        </div>
                       
                        
                    </div>
                    
                </div>
                @csrf
                <!--<button id="submit" type="submit" class="ibtn">Register</button>
                <input type="hidden" class="type-submit" name="type_submit">
                <button type="submit" id="b_submit" style="display: none;">s</button>-->
           
        </div>
    </div><!-- /Page Inner -->
    <!-- Page Nav Bottom -->
    <div class="page-nav-bottom">
        <ul>
           

            <li>
                
            </li>
            <li>
                
            </li>
        </ul>
        <div class="nav-right">
            <a id="b_save_audience" href="{{ URL::previous() }}" class="btn btn-default-2 success">
                <span>Back</span>
                <i class="fa fa-save"></i>
            </a>
            
            <button id="submit" type="submit"  class="btn btn-default-2 primary">
                <span>Update</span>
                <i class="fa fa-save"></i>
            </button>
        </div>
        
    </div><!-- /Page Nav Bottom -->
    </form>
    @include('content.popup.insight.show')

    <script src="{{ url('/') }}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
    <script src="{{ url('/') }}/assets/plugins/switchery/switchery.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/d3/d3.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/nvd3/nv.d3.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="{{ url('/') }}/assets/js/space.min.js"></script>

    <script src="{{ url('/') }}/assets/js/parsley/parsley.min.js"></script>
    <script src="{{ url('/') }}/assets/js/selectize/selectize.js"></script>
   
    <script>
        var hit_table = 1;
        var hit_table_dalam = 1;
        var counter = 1;
        // Select Init
        $(document).ready(function () {
            $('.selectpicker').selectpicker();
        });
        
    </script>
@endsection
