<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field">
    <div
        x-data="{ state: $wire.$entangle(@js($getStatePath())) }"
        {{ $getExtraAttributeBag() }}
        x-init="
            const selector=$refs.selector;
            selector.value = state ?? '{{ $field->defaultTemplate() }}';

            tinymce.init({
                target: selector,
                toolbar: '{{ $field->toolbar }}',
                plugins: '{{ $field->plugins }}',
                placeholder: '{{ $field->placeholder }}',
                resize: {{ $field->resize }},
                height: '{{ $field->height }}',
                width: '{{ $field->width }}',
                placeholder: '{{ $field->placeholder }}',
                license_key: 'gpl',
            });
            const editor = tinymce.activeEditor;
            @if ($field->max_width)
                editor.options.set('max_width', {{ $field->max_width }}
            @endif
            @if ($field->min_width)
                editor.options.set('min_width', {{ $field->min_width }}
            @endif
            @if ($field->max_height)
                editor.options.set('max_height', {{ $field->max_height }}
            @endif
            @if ($field->max_width)
                editor.options.set('min_height', {{ $field->min_height }}
            @endif
        ">
        <textarea x-ref="selector"></textarea>
    </div>
</x-dynamic-component>