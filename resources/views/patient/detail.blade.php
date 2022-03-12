<div class="modal fade" id="modal-data" tabindex="-1" role="dialog" aria-labelledby="modal-data">
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
                    <label for="patient_name" class="col-md-4 col-md-offset-1 control-label">Patient Name</label>
                    <div class="col-md-12">
                        <input type="text" name="patient_name" id="patient_name" class="form-control" required autofocus>
                        <span class="help-block with errors"></span>
                    </div>

                    <label for="email" class="col-md-4 col-md-offset-1 control-label">Patient Email</label>
                    <div class="col-md-12">
                        <input type="text" name="email" id="email" class="form-control" required>
                        <span class="help-block with errors"></span>
                    </div>

                    <label for="nik" class="col-md-4 col-md-offset-1 control-label">NIK</label>
                    <div class="col-md-12">
                        <input type="number" name="nik" id="nik" class="form-control" placeholder="123456789012" required>
                        <span class="help-block with errors"></span>
                    </div>

                    <label for="lainya" class="col-md-4 col-md-offset-1 control-label">Lainya</label>
                    <div class="col-md-12">
                        <input type="number" name="lainya" id="lainya" class="form-control" placeholder="123456789012" required>
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