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

                    <label for="company_name" class="col-md-4 col-md-offset-1 control-label">Name Company</label>
                    <div class="col-md-12">
                        <input type="text" name="company_name" id="company_name" class="form-control" required autofocus>
                        <span class="help-block with errors"></span>
                    </div>

                    <label for="company_code" class="col-md-4 col-md-offset-1 control-label"> Company Code </label>
                    <div class="col-md-12">
                        <input type="text" name="company_code" id="company_code" class="form-control" required>
                        <span class="help-block with errors"></span>  
                    </div>

                    <label for="company_city" class="col-md-4 col-md-offset-1 control-label">City Company</label>
                    <div class="col-md-12">
                        <input type="text" name="company_city" id="company_city" class="form-control" required>
                        <span class="help-block with errors"></span>
                    </div>

                    <label for="company_branch" class="col-md-4 col-md-offset-1 control-label">Branch Company</label>
                    <div class="col-md-12">
                        <input type="text" name="company_branch" id="company_branch" class="form-control" required>
                        <span class="help-block with errors"></span>
                    </div>

                    <label for="company_address" class="col-md-4 col-md-offset-1 control-label">Address Company</label>
                    <div class="col-md-12">
                        <textarea name="company_address" id="company_address" class="form-control" required></textarea>
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