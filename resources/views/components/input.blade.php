<div>
    <div class="mt-3">
        <label for="vertical-form-1" class="form-label">{{ $label }}</label>
        <input id="vertical-form-1" type="{{ $type }}" class="form-control" id="{{ $name }}"
            name="{{ $name }}" placeholder="{{ $label }}" {{ $attribute }} value="{{ old($name) }}">
    </div>
</div>
