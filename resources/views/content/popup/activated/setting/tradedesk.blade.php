<div class="modal fade" id="m_tradedesk" tabindex="9999" role="dialog" aria-labelledby="myModalLabel3">
    <div class="modal-dialog modal-sm md" role="document">
        <form id="f_activated_tradedesk" data-parsley-validate="true">
            @csrf
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2>Trade Desk</h2>
            </div>
            <div class="modal-body">
                <form></form>
                <div class="platforms">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="ad_type" value="tradedesk">
                            <input type="hidden" name="ad_type_name" value="Trade Desk">
                            <input type="hidden" name="uniq_id" class="uniq_id">
                            <input class="form-control f-space" placeholder="Partner ID" name="partner_id">
                            <input class="form-control f-space" placeholder="Partner Name" name="partner_name">
                            <input class="form-control f-space" placeholder="TTD Account Manager" name="ttd_account_manager">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
        </form>
    </div>
</div><!-- /Activate Modal -->
<script>
    function show_tradedesk(e){
        e.preventDefault();
        $('#m_tradedesk').modal('show');
    }

    $('#f_activated_tradedesk').on('submit',function(e) {
        e.preventDefault();
        if ( $(this).parsley().isValid() ) {
            $.ajax({
                type: "post",
                url: "{{ url('/audience/activate/save') }}",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    if(data.stts){
                        showview();
                        $('#m_tradedesk').modal('hide');
                    }else{
                        alert(data.msg);
                    }
                }
            });
        }else{
            alert('error');
        }
    });
</script>
