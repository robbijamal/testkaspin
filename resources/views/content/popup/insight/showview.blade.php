@if($alldata = $data['aggregations'])
    @foreach($alldata as $key => $isi)
        @if($alldata_detail = $isi['buckets'])
            @foreach($alldata_detail as $isi2)
                {{ $key }} = {{ $isi2['key'] }} - {{ $isi2['doc_count'] }}<br>
            @endforeach
        @endif
    @endforeach
@endif
