@extends('layouts.index')

@section('content')

    <style>
        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            display: none;
        }
    </style>
    <div class="page-inner">
    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb" class="mt1">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/home') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('/barang') }}">Data Barang</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#">Index</a>
            </li>
        </ol>
    </nav><!-- /Breadcrumbs -->
    <!-- Page Title -->
    <div class="page-title page-title-custom mt2 mb2">
        <h3 class="breadcrumb-header mb0">Data Barang</h3>
        <a href="{{ url('/barang/create') }}" class="btn btn-default-2 primary">
            Create Barang <i class="fa fa-plus-circle" style="margin-left:8px"></i>
        </a>
    </div> <!-- /Page Title -->
    <div class="browse">
        <div class="browse-input">
            <i class="icon-search"></i>
            <input type="text" class="form-control" id="search_text" name="browse-audience" placeholder="Search Barang" />
        </div>
    </div>
    
    <div id="main-wrapper">
        <div class="row mt2">
            <div class="col-lg-12 col-md-12 cols">
                <div class="panel panel-custom panel-white">
                    <div class="panel-body">
                        <div class="table-responsive have-dropdown custom-table">
                            <table id="tbl_barang" class="display table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Barang</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th class="text-center" width="100">Actions</th>
                                </tr>
                                </thead>
                                @if($data->count())
                                <tbody>
                                    @foreach($data as $isi)
                                        <tr>
                                        <td>{{ $isi->id }}</td>
                                            <td>{{ $isi->nama }}</td>
                                            <td>{{ $isi->deskripsi }}</td>
                                            <td>{{ $isi->harga }}</td>
                                            
                                            
                                            <td><div style="width: 200px;">
                                                <div class="tbl-actions">
                                                @csrf
                                                 @method('DELETE')
                                                <a href="{{ route('barang-edit',$isi->id) }}" name="edit" id="" class="btn btn-primary edit">Edit <i class="fa fa-edit"></i></a>
                                                @if(Auth::user()->privilege_id==0)<a href="{{route('barang-delete', $isi->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete <i class="fa fa-trash"></i></a>@endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{--
                                    <tr>
                                        <td>tes set</td>
                                        <td>Ariwa</td>
                                        <td>28/10/2021</td>
                                        <td>Custom (Seed)</td>
                                        <td>2,091,961</td>
                                        <td><span class="tbl-status bg-warning">Processing <i class="icon-loop2"></i></span></td>
                                        <td>Processing</td>
                                        <td>
                                            <div class="tbl-actions">
                                                <a href="#" data-toggle="modal" data-target="#activateModal">
                                                    <span data-toggle="tooltip" data-placement="bottom" title="Activate"><i class="fa fa-rocket"></i></span>
                                                </a>
                                                <a href="{{ url('/audience/detail/my-audience/XXX') }}">
                                                    <span data-toggle="tooltip" data-placement="bottom" title="View Detail"><i class="fa fa-bar-chart"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    --}}
                                </tbody>
                                @endif
                                   
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /Page Inner -->

    @include('content.popup.activated.show')

    <!-- Javascripts -->
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
    <script src="{{ url('/') }}/assets/plugins/datatables/js/jquery.datatables.min.js"></script>
    <!-- New Javascript Added -->
    <script src="{{ url('/') }}/assets/plugins/datatables/js/dataTables.select.min.js"></script>
    <!-- /New Javascript Added -->
    <script src="{{ url('/') }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="{{ url('/') }}/assets/js/pages/table-data.js"></script>
    <script src="{{ url('/') }}/assets/js/space.min.js"></script>
    <script>
        // DataTable Init
        var tabel = $('#tbl_barang').DataTable({
            responsive: true,
            scrollY: 310,
            scrollX: true,
            scrollCollapse: true,
            searching: true,
            paging: false,
            info: false,
            columnDefs: [
                {
                    orderable: false,
                    targets: 3
                },
                /*{
                    targets: 2,
                    visible: true
                }*/
            ],
            select: {
                style: 'os',
                selector: 'td:first-child'
            },
            order: [[0, 'asc' ]],
        });

        $(function () {
            // Toggle Init
            $('[data-toggle="tooltip"]').tooltip();

            // UniformJS on Checkbox Disabled
            $.uniform.restore('.uniform-ignore');
        });
    </script>
    <script>

        $(document).ready(function() {

            $('.category-saved').on('change', function () {
                var selected = [];
                if($(this).val()=='all'){
                    $("input[name='category[]']").prop('checked', false);
                    $(this).prop('checked', true);

                    tabel.column(5).search('').draw();
                }else{
                    if($('.category-saved:checkbox:checked').length>=1){
                        $("#all").prop('checked', false);

                        $('.category-saved:checkbox:checked').each(function() {
                            selected.push($(this).val());
                        });
                        // tabel.column(2).search('Age', true, false).draw();
                        tabel.column(5).search(selected.join('|'), true, false, true).draw();

                    }else if($('.category-saved:checkbox:checked').length<1){
                        $("#all").prop('checked', true);
                        tabel.column(5).search('').draw();
                    }
                }

                // counter
            });

            $('#search_text').keyup(function(){
                tabel.search($(this).val()).draw() ;
            })
        });

    </script>
@endsection
