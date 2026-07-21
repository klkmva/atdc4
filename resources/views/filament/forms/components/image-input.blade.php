<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field">
    <div class="flex flex-row justify-center">
        <div class="m-auto" x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }" x-init="
            let rimg = function readimg(v) {
                let reader = new FileReader();
                reader.addEventListener('load', (e) => {
                    _imgdata = e.target.result;
                    image.setAttribute('src', _imgdata);
                });
                reader.readAsDataURL(v);
            }

            let rurl = async function readUrl(u) {
                try {
                    const resp = await fetch(u);
                    if (!response.ok) throw new Error('Response status: ', response.status);
                    const res = response.body;
                } catch (error) {
                    window.alert('Impossible de dropper l\'image. Essayez Copier/coller');
                }
            }

            let pimg = async function pasteImage() {
                try {
                    const clipboardContents = await navigator.clipboard.read();
                    for (const item of clipboardContents) {
                        if (item.types.includes('image/png')) {
                            const blob = await item.getType('image/png');
                            rimg(blob);
                        }
                    }
                } catch (error) {
                    console.log(error.message);
                }
            };

            let inter = (a, b) => {
                if (imgInput.value && image.getAttribute('src') != imgInput.value)
                    image.setAttribute('src', '/images' + imgInput.value);
            }

            const urlimage = '/icons/image.svg'
            const imgPath='{{ $field->getImgPath() }}';
            
            const container = $refs.container;
            const image = $refs.previewImage;
            const fileInput = $refs.fileInput;
            const imgInput = $refs.imageInput;
            const delbutton = $refs.delbutton;

            //const loop = scriptPolicy.createScript('if (imageInput.value && image.getAttribute(\'src\') != imageInput.value) image.setAttribute(\'src\', imageInput.value)');
            setInterval(inter, 0.5);

            container.setAttribute('style',
                `display: block; position: relative; width: {{ $field->getSize() }}; height: {{ $field->getSize() }};
                cursor: pointer; caret-color: transparent; background-clip: padding-box;
                background-origin: padding-box; background-repeat: no-repeat no-repeat; background-position: center;
                background-size: {{ $field->getSize() }} {{ $field->getSize() }}; background-image:url('${urlimage}');`
            );

            delbutton.addEventListener('click', (e)=> {
                e.stopPropagation();
                image.setAttribute('src', urlimage);
            });

            image.addEventListener('error', ()=> {
                image.setAttribute('src', urlimage);
            });

            image.addEventListener('load', (e) => {
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

            const mut_observer=new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.type == 'attributes') {
                        if (mutation.attributeName=='src') {
                            var v=mutation.target.getAttribute('src');
                            if (v == urlimage) {
                                v = '';
                                delbutton.className = 'hidden';
                            }
                            else {
                                delbutton.className = '';
                            }
                            imgInput.value = v;
                            const event = new Event('input', { bubbles: true });
                            imgInput.dispatchEvent(event);
                        }
                    }
                })
            });
            mut_observer.observe(image, {
                attributeFilter: ['src'],
                attributes: true,
                attributeOldValue: true,
            });
            image.setAttribute('src', state === null ? urlimage : '/images' + state );

            container.addEventListener('paste', (e) => {
                e.preventDefault();
                const items=[...(e.clipboardData || e.originalEvent.clipboardData).items].filter(i=> /image/.test(i.type));
                if (!items.length || items.length === 0) return false;
                rimg(items[0].getAsFile());
            }, false);

            if (platform.name != 'Firefox') {
                container.addEventListener('contextmenu', (e) => {
                    e.preventDefault();
                    pimg();
                });
            }

            container.addEventListener('drop', (e) => {
                e.stopPropagation();
                e.preventDefault();
                const dt = e.dataTransfer;
                if (dt.files.length > 0 && dt.files[0].type.match(/image.*/)) {
                    const f = dt.files[0];
                    rimg(f);
                    return false;
                }
                else {
                    const u = dt.getData('text/plain');
                    rurl(u);
                }
            });

            container.addEventListener('dragenter', (e) => {
                e.stopPropagation();
                const dt = e.dataTransfer;
                var hasImage = false;
                [...dt.items].forEach((item) => {
                    hasImage = hasImage || (item.kind === 'file' && item.type.match(/image.*/));
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
                    rimg(f);
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
            <div x-ref="delbutton" style="position:absolute; top:-10; left:90%" class="hidden">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFF">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                </svg>
            </div>

        </div>
    </div>
</x-dynamic-component>