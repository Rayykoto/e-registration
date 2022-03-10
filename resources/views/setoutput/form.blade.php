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
                    <label for="#field" class="col-md-4 col-md-offset-1 control-label">Output Name</label>
                    <div class="col-lg-12">
                        <select name="#field" class="form-control">
                            <option value="">Pilih Output Name</option>
                            {{-- @foreach ( $output as $o => $out )
                                <option value="{{ $o }}">{{  $out }}</option>
                            @endforeach  --}}
                        </select>
                        <span class="help-block with errors"></span>
                        </div>
                    </div>
                
                    <div class="form-group row">    
                    <label for="#field" class="col-md-4 col-md-offset-1 control-label">Company Name</label>
                    <div class="col-lg-12">
                        <select name="#field" class="form-control">
                            <option value="">Pilih Company</option>
                            {{-- @foreach ( $company as $c => $com )
                                <option value="{{ $c }}">{{  $com }}</option>
                            @endforeach  --}}
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