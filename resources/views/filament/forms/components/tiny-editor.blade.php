<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field">
    <div
        x-data="{ state: $wire.$entangle(@js($getStatePath())) }"
        {{ $getExtraAttributeBag() }}
        x-init="
            const selector=$refs.selector;
            state = state ?? '{{ $field->initialTemplate() }}';
            selector.value = state ?? '{{ $field->initialTemplate() }}';
            const useDarkMode = document.querySelector('html').classList.contains('dark');

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
                skin: useDarkMode ? 'oxide-dark' : 'oxide',
                content_css: useDarkMode ? ['dark', '/css/app-styles.css'] : ['default', '/css/app-styles.css'],
                promotion: false,
                content_style: 'article > h1 {font-size: 16pt} article > div {border : 1px gray solid; border-radius: 5px; padding: 5px;}',
                setup: (editor) => {
                    editor.ui.registry.addMenuButton('insertItem', {
                        tooltip: 'Insérer un item',
                        text: 'Insérer',
                        fetch: (callback) => {
                            const items = [
                                {
                                    'type': 'menuitem',
                                    'text': 'Section',
                                    onAction: () => { editor.setContent(editor.getContent() + '{{ $field->template('section') }}'); }
                                },
                                {
                                    'type': 'menuitem',
                                    'text': 'Cadre',
                                    onAction: () => { editor.setContent(editor.getContent() + '{{ $field->template('frame') }}'); }
                                }
                            ];
                            callback(items);
                        }
                    });
                },
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
            editor.on('input', () => {
                selector.innerHTML = editor.getContent({ format: 'html' });
                state = editor.getContent({ format: 'html' });
            });
        ">
        <textarea x-ref="selector" x-model="state"></textarea>
    </div>
</x-dynamic-component>