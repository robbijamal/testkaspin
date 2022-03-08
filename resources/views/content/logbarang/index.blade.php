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
                <a href="{{ url('/barang') }}">Log Barang</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#">Index</a>
            </li>
        </ol>
    </nav><!-- /Breadcrumbs -->
    <!-- Page Title -->
    
    <div class="browse">
        <div class="browse-input">
            <i class="icon-search"></i>
            <input type="text" class="form-control" id="search_text" name="browse-audience" placeholder="Search Log Barang" />
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
                                    <th>Aksi</th>
                                    <th>Waktu</th>
                                    <th>Oleh</th>
                                    
                                </tr>
                                </thead>
                               
                                <tbody>
                                    @foreach($data as $isi)
                                        <tr>
                                            <td>{{ $isi->id() }}</td>
                                            <td>{{ $isi->data()['nama'] }}</td>
                                            <td>{{ $isi->data()['deskripsi'] }}</td>
                                            <td>{{ $isi->data()['harga'] }}</td>
                                            <td><b>{{ $isi->data()['status'] }}</b></td>
                                            <td>{{ $isi->data()['time'] }}</td>
                                            <td>{{ $isi->data()['by'] }}</td>
                                            
                                            
                                            
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
            order: [[5, 'desc' ]],
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
