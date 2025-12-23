<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field">
    <div>
        <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }" x-init="
            const imgPath='{{ $field->getImgPath() }}';
            
            const container = $refs.container;
            const image = $refs.previewImage;
            const fileInput = $refs.fileInput;
            const imgInput = $refs.imageInput;

            container.setAttribute('style', `display: block; position: relative; width: {{ $field->getSize() }}; height: {{ $field->getSize() }}; 
            cursor: pointer; caret-color: transparent;`);
            
            image.setAttribute('style', 'max-width: {{ $field->getSize() }}; max-height: {{ $field->getSize() }}; min-width: {{ $field->getSize() }}; min-height: {{ $field->getSize() }}; display: block; margin: 0;');
            image.setAttribute('src', '/icons/image.svg');

            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.type == 'attributes') {
                        if (mutation.attributeName=='src') {
                            var v=mutation.target.getAttribute('src');
                            if (!v.match(/^blob:.*/) && !v.match(/^data:.*/)) {
                                v=`${imgPath}${v}`;
                            }
                            imgInput.value = v;
                            const event = new Event('input', { bubbles: true });
                            imgInput.dispatchEvent(event);
                        }
                    }
                })
            });
            observer.observe(image, {
                attributeFilter: ['src'],
                attributes: true,
                attributeOldValue: true,
            });
                
            container.addEventListener('paste', (e) => {
                e.stopPropagation();
                e.preventDefault();
                var _imgdata;
                const items = [...(e.clipboardData || e.originalEvent.clipboardData).items].filter(i => /image/.test(i.type));
                if (!items.length || items.length === 0) return false;
                let reader = new FileReader();
                reader.addEventListener('load', (e) => {
                    _imgdata = e.target.result;
                    image.setAttribute('src', _imgdata);
                });
                reader.readAsDataURL(items[0].getAsFile());
            }, false);

            container.addEventListener('drop', (e) => {
                e.preventDefault();
            });

            fileInput.addEventListener('change', (e) => {
                var _imgdata;
                if (e.target.files.length > 0) {
                    const f = e.target.files[0];
                    let reader = new FileReader();
                    reader.addEventListener('load', (e) => {
                        _imgdata = e.target.result;
                        image.setAttribute('src', _imgdata);
                    });
                    reader.readAsDataURL(f);
                }
            });

            container.addEventListener('keyup', (e) => {
                e.preventDefault();
            });
            container.addEventListener('keydown', (e) => {
                e.preventDefault();
            });

            container.addEventListener('click', (e) => {
                fileInput.click();
            });
            "
            x-ref="container" wire:ignore>

            <input x-model="state" type="text" x-ref='imageInput' style="display: none;" />
            <input type="file" x-ref='fileInput' style="display: none;" />
            <img x-ref="previewImage" src="" alt="Image Preview" />

        </div>
    </div>
</x-dynamic-component>