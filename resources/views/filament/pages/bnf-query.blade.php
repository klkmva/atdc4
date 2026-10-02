<x-filament-panels::page>
    {{ $this->form }}
    <script>
        // const div = document.createElement('div');
        // div.style = "max-width: 10rem;"
        const form = document.querySelector("form[formname='bnfform']");
        const btn = document.createElement('button');
        btn.innerHTML = "Rechercher";
        btn.type = "submit";
        btn.formAction = "javascript:bnfQuery()";
        btn.style = "width: 10rem;"
        btn.className = "fi-ac-btn-action fi-btn fi-size-md fi-color fi-color-primary fi-bg-color-400 hover:fi-bg-color-300 dark:fi-bg-color-600 dark:hover:fi-bg-color-500 fi-text-color-900 hover:fi-text-color-800 dark:fi-text-color-950 dark:hover:fi-text-color-950"
        form.appendChild(btn);
    </script>
    <div id="output" class="mt-5 hidden h-fit"></div>
    <template id="tpl">
        <div class="border rounded border-zinc-300 p-2 grid grid-flow-row" style="margin-top: 5px; min-height: 300px;">
            <div class="w-full">
                <div id="title" class="text-xl font-bold">#title</div>
                <div id="subtitle" class="text-base italic">#subtitle</div>
                <div id="authors" class="text-lg" style="margin-bottom: 5px;">Auteur·rice(s) : <span class="text-lg font-semibold">#authors</span></div>
                <div class="relative mt-2">
                    <img class="float-left mr-3 mb-3" src="#image" alt="" onerror="(e) => e.target.style='display: none'" />
                    #summary
                </div>
            </div>
            <div class="fi-ac fi-align-end w-full">
                <form action="/createBook" method="post">
                    <a class="fi-ac-btn-action fi-btn fi-size-md  fi-color fi-color-primary fi-bg-color-400 hover:fi-bg-color-300 dark:fi-bg-color-600 dark:hover:fi-bg-color-500 fi-text-color-900 hover:fi-text-color-800 dark:fi-text-color-950 dark:hover:fi-text-color-95"
                        style="margin-block: 5px; margin-inline: 5px;" href="#" onclick="this.parentNode.submit()">Créer l'ouvrage</a>
                    <input type="hidden" name="title" value="#title" />
                    <input type="hidden" name="subtitle" value="#subtitle" />
                    <textarea style="display: none;" name="summary">#summary</textarea>
                    <input type="hidden" name="isbn" value="#isbn" />
                    <input type="hidden" name="image" value="#image" />
                    <input type="hidden" name="authors" value="#authors" />
                    <input type="hidden" name="editor" value="#editor" />
                </form>
            </div>
        </div>
    </template>
    <script>
        function bnfQuery() {
            const template = document.getElementById('tpl');
            const output = document.getElementById('output');
            const title = document.getElementById('form.booktitle').value.trim();
            const authors = document.getElementById('form.bookauthor').value.trim();
            const url = 'https://catalogue.bnf.fr/api/SRU'
            const query = url + '?version=1.2&operation=searchRetrieve&query=(bib.title%20all%20"' + encodeURI(title) +
                '")%20and%20(bib.doctype%20any%20"a")%20and%20(bib.language%20any%20"fre")' +
                ((authors != '') ? '%20and%20(bib.authors%20any%20"' + encodeURI(authors) + '")' : '');
            globalThis.records = [];
            const response = fetch(query)
                .then((resp) => {
                    resp.text()
                        .then((xmlresult) => {
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(xmlresult, "application/xml");
                            const array_records = Array.from(doc.getElementsByTagName(('mxc:record')));
                            array_records.forEach((rec) => {
                                var record = {
                                    'isbn': '',
                                    'title': '',
                                    'subtitle': '',
                                    'authors': '',
                                    'summary': '',
                                }
                                var fields = Array.from(rec.getElementsByTagName(('mxc:datafield')));
                                fields.forEach((fld) => {
                                    var tag = fld.getAttribute('tag');
                                    var ind1 = fld.getAttribute('ind1');
                                    var ind2 = fld.getAttribute('ind2');
                                    var subfields = Array.from(fld.getElementsByTagName(('mxc:subfield')));
                                    subfields.forEach((sfld) => {
                                        if (tag == '010' && sfld.getAttribute('code') == 'a') {
                                            record.isbn = sfld.innerHTML;
                                        }
                                        if (tag == '200' && sfld.getAttribute('code') == 'a') {
                                            record.title = sfld.innerHTML;
                                        }
                                        if (tag == '200' && sfld.getAttribute('code') == 'e') {
                                            record.subtitle = sfld.innerHTML;
                                        }
                                        if (tag == '200' && sfld.getAttribute('code') == 'f') {
                                            record.authors = sfld.innerHTML;
                                        }
                                        if (tag == '330' && sfld.getAttribute('code') == 'a') {
                                            record.summary = sfld.innerHTML;
                                        }
                                        if (tag == '214' && ind2 == '0' && sfld.getAttribute('code') == 'c') {
                                            record.editor = sfld.innerHTML;
                                        }
                                    });
                                    if (record.isbn) {
                                        const img_url = 'https://openapi.bnf.fr/couverture/image/image/recupererImage?ISBN=' + record.isbn + '&couverture=1';
                                        record.image = img_url;
                                    }
                                });
                                globalThis.records.push(record);
                            });
                            output.innerHTML = '';
                            globalThis.records.forEach((rec) => {
                                var tpl = template.innerHTML;
                                Object.keys(rec).forEach((key) => {
                                    const re = new RegExp(`#${key}`, 'gms');
                                    if (rec[key] && tpl.search(re))
                                        tpl = tpl.replace(re, rec[key])
                                    else
                                        tpl = tpl.replace(re, '');
                                });
                                output.innerHTML += tpl;
                            });
                            output.classList.remove('hidden');
                        });
                });
        }
    </script>
</x-filament-panels::page>
