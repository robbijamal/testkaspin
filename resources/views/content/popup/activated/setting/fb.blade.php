<div class="modal fade" id="m_fb" tabindex="9999" role="dialog" aria-labelledby="myModalLabel3">
    <div class="modal-dialog modal-sm md" role="document">
        <form id="f_activated_fb" data-parsley-validate="true">
            @csrf
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2>Facebook</h2>
            </div>
            <div class="modal-body">
                <div class="platforms">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="ad_type" value="fb">
                            <input type="hidden" name="ad_type_name" value="Facebook">
                            <input type="hidden" name="uniq_id" class="uniq_id">
                            <input name="account_id" class="form-control f-space" placeholder="Account ID" required>
                            <input name="campaign_id" class="form-control f-space" placeholder="Campaign ID" required>
                            <input name="ad_set_id" class="form-control f-space" placeholder="Ad Set ID" required>
                            <input name="ad_id" class="form-control f-space" placeholder="Ad ID" required>
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
    function show_fb(e){
        e.preventDefault();
        $('#m_fb').modal('show');
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

    $('#f_activated_fb').on('submit',function(e) {
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
                        $('#m_fb').modal('hide');
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
