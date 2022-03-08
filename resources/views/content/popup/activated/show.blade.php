<style>
    .form-control.f-space {
        margin-bottom: 5px;
    }
    .activated-list-info {
        font-size: 11px;
    }
    .activated-kotak-active {
        border: 1px solid #0070E0;border-radius: 0.286rem;min-height: 163px;padding: 10px;
        margin-right: 10px;
    }
</style>
<link rel="stylesheet" href="{{ url('/') }}/assets/js/parsley/parsley.css" />
<script src="{{ url('/') }}/assets/js/parsley/parsley.min.js"></script>

<div class="modal right fade" id="m_activate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
    <div class="modal-dialog md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Send Data to Platform</h4>
            </div>
            <div class="modal-body">
                <div class="platforms">
                    <div class="row" id="activated_showview">
                    </div>
                    <div class="custom-modal-actions">
                        <div class="form-check">
                            {{--<input type="checkbox" class="form-check-input" id="enableAttribution" />
                            <label class="form-check-label" for="enableAttribution">Enable Attribution</label>--}}
                        </div>
                        <div>
                            <button type="button" class="btn btn-default-2 btn-addon" data-dismiss="modal">Back</button>
                            <button type="button" class="btn btn-default-2 primary btn-addon b-activation-set"><i class="fa fa-rocket"></i> Activate Audience</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /Activate Modal -->
<script>

    $(document).ready(function() {
        $('.b-activation-set').on('click', function (e) {
            if(!confirm('Are You sure ?')) return false;
            $('.b-activation-set').button('loading');
            $.blockUI({ message: 'Just a moment...', baseZ: 99999999 });
            e.preventDefault();
            $.ajax({
                type:"POST",
                data: {uniq_id: uniq_id_global, '_token': '{{ csrf_token() }}'},
                url:"{{ url('/audience/activate/activation') }}",
                dataType:"json",
                success:function(data){
                    if(data.stts){
                        $('#m_activate').modal('hide');
                        window.location.reload();
                    }else{
                        alert(data.msg);
                    }
                    $.unblockUI();
                    $('.b-activation-set').button('reset');
                }
            });
        });
    });


    var uniq_id_global = ''
    function show_activate(e, uniq_id = ''){
        e.preventDefault();
        $('#m_activate').modal('show');
        uniq_id_global = uniq_id;
        $('.uniq_id').val(uniq_id_global);
        /**/
        showview();
    }

    function showview() {
        $.ajax({
            type:"GET",
            url:"{{ url('/audience/activate/showlistactivated') }}/"+uniq_id_global,
            dataType:"html",
            success:function(data){
                $('#activated_showview').html(data);
            }
        });
    }
</script>

@include('content.popup.activated.setting.fb')
@include('content.popup.activated.setting.google')
@include('content.popup.activated.setting.tradedesk')
