<style>
    .modal .modal-lg {
        margin: 0 !important;
        width: 100%;
    }
    #m_history_body {
        height: calc(100vh - 150px) !important;
        overflow-y: auto !important;
    }
</style>
<div class="modal fade" id="m_save1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm md" role="document">
        <form id="f_save1" data-parsley-validate="true">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="float: left;">Save</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <div>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <input type="hidden" name="save_type" id="save_type">
                </div>
                <div class="modal-footer">
                    <button type="submit" id="m_save1_button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script src="{{ url('/') }}/assets/js/parsley/parsley.min.js"></script>

<script>
    function show_save1(e, key = '', value = '') {
        e.preventDefault();
        $('#save_type').val('satu');
        $('#f_save1').append('<input type="hidden" name="save_value[0]" value="'+key+'|'+value+'"/>');
        $('#m_save1').modal('show');
    }
    function show_save2(e, vals = []) {
        e.preventDefault();
        $('#save_type').val('banyak');
        $.each(vals, function (index, val){
            $('#f_save1').append('<input type="hidden" name="save_value['+index+']" value="'+val+'"/>');
        });
        $('#m_save1').modal('show');
    }

    $('#f_save1').on('submit',function(e) {
        e.preventDefault();
        if ( $(this).parsley().isValid() ) {
            $('#m_save1_button').button('loading');
            $.ajax({
                type: "post",
                url: "{{ url('/audience/savebrowse') }}",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    if(data.stts){
                        window.location.href = "{{ url('/') }}/audience/myaudience";
                    }
                    $('#m_save1_button').button('reset');
                }
            });
        }else{
            alert('error');
        }
    });
</script>
