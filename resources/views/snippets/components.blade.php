{{-- Deux fields sur une ligne --}}
<div class="row">
    <div class="col-md-6">
        {{-- content 1 --}}
    </div>
    <div class="col-md-6">
        {{-- content 2 --}}
    </div>
</div>

{{-- Un field sur une ligne --}}
<div class="row">
    <div class="col-md-12">
        {{-- content --}}
    </div>
</div>

{{-- Select option avec label a coté --}}
<div class="form-group">
    <label>Blood Group</label>
    <select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
        <option>Select</option>
        <option value="1">A+</option>
        <option value="2">O+</option>
        <option value="3">B+</option>
        <option value="4">AB+</option>
    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-xl2e-container"><span class="select2-selection__rendered" id="select2-xl2e-container" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

{{-- Input avec label en haut --}}
{{-- Text input --}}
<div class="form-group">
    <label> Text input:</label>
    <input required type="text" name="" class="form-control @error('') is-invalid @enderror" value="">
    @error('') <span class="invalid-feedback">{{ $errors->first('') }}</span> @enderror
</div>

{{-- input avec label a coté --}}
{{-- Text input --}}
<div class="form-group row">
    <label class="col-form-label col-md-2">Text Input</label>
    <div class="col-md-10">
        <input required type="text" name="" class="form-control @error('') is-invalid @enderror" value="">
        @error('') <span class="invalid-feedback">{{ $errors->first('') }}</span> @enderror
    </div>
</div>

 {{-- Submit --}}
 <div class="text-right">
    <a href="" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Retour</a>
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-floppy-o"></i> Enregistrer
    </button>
</div>
