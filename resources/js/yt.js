

async function getVideoList() {
    const apiKey = 'AIzaSyARzKKAadQaZ7s-4wmib8XE3BBlEaIAlpY';
    const channelId = 'UCPr_vDaKlT1hbtCYQoibfTw';
    const maxResults = 50;
    var nextPage = '';
    var continu = true;
    var url = '';

    while (continu) {
        url = `https://www.googleapis.com/youtube/v3/search?key=${apiKey}&channelId=${channelId}&fields=nextPageToken,items(id(videoId))&part=id&order=date&maxResults=${maxResults}&pageToken=${nextPage}`;
        var req = new Request(url);
        fetch(req)
            .then((resp) => {
                result = await resp.json();
                console.log(result);
            }, (reason) => console.log(reason))
    }
}
