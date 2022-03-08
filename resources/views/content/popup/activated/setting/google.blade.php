<div class="modal fade" id="m_google" tabindex="9999" role="dialog" aria-labelledby="myModalLabel3">
    <div class="modal-dialog modal-sm md" role="document">
        <form id="f_activated_google" data-parsley-validate="true">
            @csrf
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2>Google Ads</h2>
            </div>
            <div class="modal-body">
                <form></form>
                <div class="platforms">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="ad_type" value="google">
                            <input type="hidden" name="ad_type_name" value="Google Ads">
                            <input type="hidden" name="uniq_id" class="uniq_id">
                            <input class="form-control f-space" placeholder="Advertiser ID" name="advertiser_id">
                            <input class="form-control f-space" placeholder="Partner ID" name="partner_id">
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
    function show_google(e){
        e.preventDefault();
        $('#m_google').modal('show');
        /*$.ajax({
            type:"POST",
            data: {'_token': '{{ csrf_token() }}'},
            url:"/",
            dataType:"html",
            success:function(data){
                $('#m_history_body').html(data);
            }
        });*/
    }

    $('#f_activated_google').on('submit',function(e) {
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
                        $('#m_google').modal('hide');
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
