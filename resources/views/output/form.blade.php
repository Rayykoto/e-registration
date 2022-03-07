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
                    <label for="output_name" class="col-md-4 col-md-offset-1 control-label">Output Name</label>
                    <div class="col-md-12">
                        <input type="text" name="output_name" id="output_name" class="form-control" required autofocus>
                        <span class="help-block with errors"></span>
                    </div>

                    <div class="col-md-12">
                    <label for="output_status" class="col-md-4 col-md-offset-1 control-label">Output Status</label>
                            <select placeholder="Status" name="output_status" class="form-control">
                                <option value="1">Sudah Bayar</option>
                                <option value="2">Belum Bayar</option>
                            </select>
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