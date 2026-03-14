<div>
    <table style="margin-left: auto; margin-right: auto; border: 1px solid darkgray;">
        <thead>
            @for ($i = 1; $i <= $config['hrows']; $i++)
                <tr>
                @for ($j = 1; $j <= $config['tcols']; $j++)
                    <th style="width: {{ 100/$config['tcols'] }}%">
                    </th>
                    @endfor
                    </tr>
                    @endfor
        </thead>
        <tbody>
            @for ($i = 1; $i <= $config['trows']; $i++)
                <tr>
                @for ($j = 1; $j <= $config['tcols']; $j++)
                    <th style="width: {{ 100/$config['tcols'] }}%">
                    </th>
                @endfor
                </tr>
            @endfor
        </tbody>
    </table>
</div>