"use strict";

/**
 * Configuration des attributs d'un contrôle de formulaire
 *
 * @param {*} control
 * @param {*} attributes
 */
function setControlAttr(control, attributes) {
    if (typeof attributes == 'object') {
        Object.keys(attributes).forEach((k) => {
            if (['required', 'disabled', 'multiple', 'readonly'].includes(k)) {
                control.toggleAttribute(k, attributes[k])
            }
            else {
                control.setAttribute(k, attributes[k])
            }
        })
    }
}

/**
 * Champ de formulaire pour désigner une image
 *
 * @class ImageInput
 * @extends {HTMLDivElement}
 */
class ImageInput extends HTMLDivElement {
    static observedAttributes = ['path'];

    get value() {
        return this.input.getAttribute('value');
    }
    set value(v) {
        console.log('set value', v);
        this.input.setAttribute('value', v);
    }
    setValue(v) {
        this.value = v;
    }
    getValue() {
        return this.input.getAttribute('value');
    }
    /**
     * Creates an instance of CustomImg.
     * @param {string} name : nom du champ
     * @param {object} [attributes={}] : attributs du champ
     * @memberof ImageInput
     */
    constructor(container, attributes={}) {
        super();
        this.container = container;

        this.size = (Object.keys(attributes).includes('size')) ? attributes.size : '100px';
        this.imgPath = (Object.keys(attributes).includes('path')) ? attributes.path : '';

        this.input = document.createElement('input');
        setControlAttr(this.input, { name: 'image', style: 'display: none', type: 'text', id: 'image' });
        this.appendChild(this.input);

        this.file = document.createElement('input');
        setControlAttr(this.file, { type: 'file', id: 'file', accept: 'image/*', style: 'display: none' });
        this.appendChild(this.file);

        this._img = document.createElement('img');
        setControlAttr(this._img, { style: 'display: none', src: '' });
        this.appendChild(this._img);

        // this.btnDel = new IconButton('close', 'Supprimer l\'image');
        // this.btnDel.style = 'display:none;font-size:14px;position:absolute;top:5px;right:5px;color:white;font-weight:700;cursor:pointer;background-color:black;border-radius:50%;padding:2px;border:1px solid #555555;';
        // this.btnDel.addEventListener('click', (e) => {
        //     e.stopPropagation();
        //     this.input.setAttribute('value', '')
        // });
        // this.appendChild(this.btnDel);

        this.setAttribute('style', `
            display: block; position: relative; width: ${ this.size}; height: ${this.size}; 
            border: 1px solid rgb(116, 116, 116); border-radius: 10px;
            cursor: pointer; caret-color: transparent; background-clip: padding-box;
            background-origin: padding-box; background-repeat: no-repeat no-repeat; background-position: center; 
            background-size: ${this.size} ${this.size}; background-image:url("/icons/image.svg");`);
        this.contentEditable = true;
        this.container.appendChild(this);
    }
    connectedCallback() {
        this.observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.type == "attributes") {
                    if (mutation.attributeName == "value") {
                        var v = mutation.target.getAttribute('value');
                        if (!v.match(/^blob:.*/) && !v.match(/^data:.*/)) {
                            v = `${this.imgPath}${v}`;
                        }
                        this._img.setAttribute('src', v)
                    }
                }
            })
        })
        this.observer.observe(this.input, {
            attributeFilter: ["value"]
        })
        this.addEventListener('paste', (e) => {
            e.stopPropagation();
            e.preventDefault();
            var _imgdata;
            const items = [...(e.clipboardData || e.originalEvent.clipboardData).items].filter(i => /image/.test(i.type));
            if (!items.length || items.length === 0) return false;
            let reader = new FileReader();
            reader.addEventListener('load', (e) => {
                _imgdata = e.target.result;
                this.input.value = _imgdata;
            });
            reader.readAsDataURL(items[0].getAsFile());
        }, false)
        this.addEventListener('drop', (e) => {
            e.preventDefault();
        })
        this.file.addEventListener('change', (e) => {
            var _imgdata;
            if (e.target.files.length > 0) {
                const f = e.target.files[0];
                const url = window.URL.createObjectURL(f);
                let reader = new FileReader();
                reader.addEventListener('load', (e) => {
                    _imgdata = e.target.result;
                    this.value = _imgdata;
                });
                reader.readAsDataURL(f);
            }
        })
        this.addEventListener('keyup', (e) => {
            e.preventDefault();
        })
        this.addEventListener('keydown', (e) => {
            e.preventDefault();
        })
        this._img.addEventListener('error', (e) => {
            //     this.btnDel.style.display = 'none';
            console.log(e);
            this._img.src = '/icons/image.svg';
        })
        this._img.addEventListener('load', (e) => {
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
            const m = this.size.match(/^([\d\.]+)(\w+)/);
            const v = parseFloat(m[1]);
            const u = m[2];
            this.style.setProperty('background-size', `${Math.round(w * v)}${u} ${Math.round(h * v)}${u}`);
            this.style.setProperty('background-image', `url("${e.target.src}")`);
        })
        this.addEventListener('click', (e) => {
            this.file.click();
        })
    }
    attributeChangedCallback(name, oldValue, newValue) {
        if (name == 'path') {
            this.imgPath = newValue;
        }
    }
}
customElements.define("image-input", ImageInput, { extends: 'div' });
