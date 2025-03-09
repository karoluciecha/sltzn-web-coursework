document.addEventListener('DOMContentLoaded', () => {
    const album = document.getElementById('Album1');
    const content = document.getElementById('content');
    const galleryTitle = document.getElementById('gallery');
    const homeButton = document.querySelector('nav a[href="#"]');

    album.addEventListener('click', albumClick);
    homeButton.addEventListener('click', resetGallery);

    function albumClick() {
        album.remove();
        galleryTitle.textContent = `Splash Arts Gallery`;

        const images = ['resources/Aphelios.webp', 'resources/Caitlyn.webp', 'resources/Ekko.webp', 'resources/Rammus.webp', 'resources/Swain.webp', 'resources/Urgot.webp', 'resources/Xayah.jpeg', 'resources/Yuumi.webp'];

        images.forEach((src, index) => {
            let photoDiv = document.createElement('div');
            photoDiv.classList.add('photo');
            photoDiv.dataset.enlarged = "false";

            let img = document.createElement('img');
            img.src = src;
            img.alt = `Photo ${index + 1}`;
            img.style.width = "100%";
            img.style.height = "100%";
            img.style.transition = "all 0.3s ease";
            img.style.cursor = "pointer";

            photoDiv.appendChild(img);
            content.appendChild(photoDiv);

            // Ensure the photo starts in normal size
            resetSize(photoDiv);

            // Toggle enlargement on click
            photoDiv.addEventListener('click', () => toggleSize(photoDiv));
        });
    }

    function toggleSize(photoDiv) {
        const allPhotos = document.querySelectorAll('.photo');

        if (photoDiv.dataset.enlarged === "false") {
            allPhotos.forEach(otherDiv => {
                if (otherDiv !== photoDiv) {
                    otherDiv.style.pointerEvents = "none";
                    otherDiv.style.opacity = "0.5";
                    otherDiv.style.transition = "none";
                }
            });

            photoDiv.style.width = '1000px';
            photoDiv.style.height = 'auto';
            photoDiv.style.position = 'fixed';
            photoDiv.style.top = '50%';
            photoDiv.style.left = '50%';
            photoDiv.style.transform = 'translate(-50%, -50%)';
            photoDiv.style.zIndex = '1000';
            photoDiv.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.5)';
            photoDiv.style.pointerEvents = "auto";
            photoDiv.classList.add('enlarged');
            photoDiv.dataset.enlarged = "true";

        } else {
            allPhotos.forEach(otherDiv => {
                otherDiv.style.pointerEvents = "auto";
                otherDiv.style.opacity = "1";
                otherDiv.style.transition = "all 0.3s ease";
            });

            resetSize(photoDiv);
        }
    }

    function resetSize(photoDiv) {
        photoDiv.style.width = '300px';
        photoDiv.style.height = '200px';
        photoDiv.style.position = 'static';
        photoDiv.style.transform = 'none';
        photoDiv.style.zIndex = 'auto';
        photoDiv.style.boxShadow = 'none';
        photoDiv.classList.remove('enlarged');
        photoDiv.dataset.enlarged = "false";
    }

    function resetGallery(event) {
        event.preventDefault(); // Prevent the page from refreshing

        // Remove all dynamically added images
        content.innerHTML = '';

        // Restore the original album selection view
        galleryTitle.textContent = `Photo Gallery`;

        let albumDiv = document.createElement('div');
        albumDiv.id = "Album1";
        albumDiv.classList.add('album');

        let albumImg = document.createElement('img');
        albumImg.id = "Album1logo";
        albumImg.src = "Album1logo.jpeg";
        albumImg.alt = "Album 1";

        albumDiv.appendChild(albumImg);
        content.appendChild(albumDiv);

        albumDiv.addEventListener('click', albumClick);
    }
});