<div class="form-group">
    <label> {{ $label }}:</label>
    <input required
        type = {{ $type ?? 'text' }}
        name = {{ $name }}
        class = "form-control"
        @if(isset($disabled))
            disabled
        @endif
        value= {{ $value ?? '' }}
    >
</div>
