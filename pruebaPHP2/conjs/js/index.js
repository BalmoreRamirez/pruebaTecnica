const listAlbums = async () => {
    const response = await fetch("https://jsonplaceholder.typicode.com/albums");
    const albums = await response.json();

    let tableBody = ``;
    albums.forEach((album, index) => {
        tableBody += `<tr>
        <td class='centered'>${album.userId}</td>
        <td class='centered'>${album.id}</td>
        <td class='centered'>${album.title}</td>
        </tr>`;
    });

    tableBody_Users.innerHTML = tableBody;
};

window.addEventListener("load", function () {
    listAlbums();
});
