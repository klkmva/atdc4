<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field">
    <div>
        <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }" x-init="
                $refs.source.addEventListener('change', (e) => {
                    console.log($refs.image.value);
                    $refs.image.value = e.target.value;
                    const event = new Event('input', { bubbles: true });
                    $refs.image.dispatchEvent(event);
                });
        ">

            <input x-model="state" type="text" x-ref='image' style="display: none;" />
            <input x-ref="source" type="text" onchange="(e) => { console.log($refs.image.value); $refs.image.value = e.target.value; }" />

        </div>
    </div>
</x-dynamic-component>