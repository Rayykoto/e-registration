<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog" role="document">
        <form action="" method="post" class="form-horizontal">
            @csrf
            @method('post')
            <div class="modal-content">
            <div class="modal-header">
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span  
                        aria-hidden="true">&times;</span></button> --}}
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="payment_name" class="col-md-4 col-md-offset-1 control-label">Patient Name</label>
                    <div class="col-md-12">
                        <input type="text" name="payment_name" id="payment_name" class="form-control" required autofocus>
                        <span class="help-block with errors"></span>
                    </div>

                    <label for="payment_logo" class="col-md-4 col-md-offset-1 control-label">Payment Logo</label>
                    <div class="col-md-12">
                        <input type="file" name="payment_logo" id="payment_logo" class="form-control" required>
                        <span class="help-block with errors"></span>
                    </div>

                    <label for="payment_status" class="col-md-4 col-md-offset-1 control-label">Payment Status</label>
                    <div class="col-md-12">
                        <input type="text" name="payment_status" id="payment_status" class="form-control" required>
                        <span class="help-block with errors"></span>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <button class="btn btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
        </form>
    </div>
</div>