<script>
    document.documentElement.dataset['theme'] = 'dark'
    const observer = new MutationObserver(
        (mutationList) => {
            console.log('observe')
            mutationList.forEach(
                (mutation) => {
                    console.log(mutation.type, mutation.attributeName)
                    if (mutation.type == 'attributes' && mutation.attributeName == "class") {
                        const sheme = mutation.target.classList.contains('dark') ? 'dark' : 'light'
                        document.documentElement.dataset['theme'] = sheme
                        mutation.target.setAttribute('data-theme', sheme)
                    }
                }
            )
        }
    )
    observer.observe(document.querySelector('html'), {
        attribute: true,
        attributeFilter: ['class'],
    });
</script>