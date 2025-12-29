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

            container.setAttribute('style', 
                `display: block; position: relative; width: {{ $field->getSize() }}; height: {{ $field->getSize() }}; 
                cursor: pointer; caret-color: transparent; background-clip: padding-box;
                background-origin: padding-box; background-repeat: no-repeat no-repeat; background-position: center; 
                background-size: {{ $field->getSize() }} {{ $field->getSize() }}; background-image:url(\'/icons/image.svg\');`);

            image.addEventListener('error', ()=> {
                image.setAttribute('src', '/icons/image.svg');
            });

            image.addEventListener('load', (e) => {
                // this.btnDel.style.display = 'block';
                const target = e.target;
                var h = target.height;
                var w = target.width;
                if (h > w) {
                    w = (parseInt(w) / parseInt(h));
                    h = 1;
                }
                else {
                    h = (parseInt(h) / parseInt(w));
                    w = 1;
                }
                const m = '{{ $field->getSize() }}'.match(/^([\d\.]+)(\w+)/);
                const v = parseFloat(m[1]);
                const u = m[2];
                container.style.setProperty('background-size', `${Math.round(w * v)}${u} ${Math.round(h * v)}${u}`);
                container.style.setProperty('background-image', `url(\'${e.target.src}\')`);
            });

            const observer=new MutationObserver((mutations)=> {
                mutations.forEach((mutation) => {
                    if (mutation.type == 'attributes') {
                        if (mutation.attributeName=='src') {
                            var v=mutation.target.getAttribute('src');
                            if (v == '/icons/image.svg') {
                                v = '';
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
            image.setAttribute('src', state);

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
                e.stopPropagation();
                e.preventDefault();
                var _imgdata;
                const dt = e.dataTransfer;
                if (dt.files.length > 0 && dt.files[0].type.match(/image.*/)) {
                    const f = dt.files[0];
                    let reader = new FileReader();
                    reader.addEventListener('load', (e) => {
                        _imgdata = e.target.result;
                        image.setAttribute('src', _imgdata);
                    });
                    reader.readAsDataURL(f);
                    return false;
                }
            });
            container.addEventListener('dragenter', (e) => {
                e.stopPropagation();
                const dt = e.dataTransfer;
                console.log(dt);
                var hasImage = false;
                [...dt.items].forEach((item) => {
                    if (item.kind === 'file' && item.type.match(/image.*/)) {
                        hasImage = true;
                    }
                });
                if (!hasImage) {
                    dt.dropEffect = 'none';
                    dt.effectAllowed = 'none';
                    return false;
                }
                else {
                    dt.dropEffect = 'copy';
                }
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

            container.addEventListener('focus', (e) => {
                container.blur();
            });

            container.addEventListener('click', (e) => {
                fileInput.click();
            });
            "
            x-ref="container" wire:ignore contenteditable="true">

            <input x-model="state" type="text" x-ref='imageInput' style="display: none;" />
            <input type="file" x-ref='fileInput' style="display: none;" />
            <img x-ref="previewImage" src="" alt="Image Preview" style="display: none;" />

        </div>
    </div>
</x-dynamic-component>