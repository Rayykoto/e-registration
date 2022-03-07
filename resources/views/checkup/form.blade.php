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
                    <label for="exam_name" class="col-md-4 col-md-offset-1 control-label">Checkup Name</label>
                    <div class="col-md-12">
                        <input type="text" name="exam_name" id="exam_name" class="form-control" required autofocus>
                        <span class="help-block with errors"></span>
                    </div>

                    <label for="label" class="col-md-4 col-md-offset-1 control-label">Checkup Label</label>
                    <div class="col-md-12">
                        <input type="text" name="label" id="label" class="form-control" required>
                        <span class="help-block with errors"></span>
                    </div>

                    <label for="price" class="col-md-4 col-md-offset-1 control-label">Checkup Price</label>
                    <div class="col-md-12">
                        <input type="number" name="price" id="price" min="0" step="0.01" class="form-control" placeholder="Rp. 1000" required>
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