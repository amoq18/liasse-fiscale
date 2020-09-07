{{-- Deux fields sur une ligne --}}
<div class="row">
    <div class="col-md-6">
        {{-- content 1 --}}
    </div>
    <div class="col-md-6">
        {{-- content 2 --}}
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
<div class="form-group">
    <label> Nom:</label>
    <input type = text name = nom_banque class = "form-control" value="{{ $banque->nom }}" >
</div>

{{-- input avec label a coté --}}
<div class="form-group row">
    <label class="col-form-label col-md-2">Text Input</label>
    <div class="col-md-10">
        <input type="text" class="form-control">
    </div>
</div>
