
export function ToogleImages() {
    const imagesList = document.querySelector(".image_list");
    var activeImage = imagesList.querySelector(".images_item.active");
    var images = imagesList.children;
    const imageWidth = images[0].offsetWidth;

    const btn_arrowsContainer = document.querySelector(".left_arrow_right_arrow");
    var leftBtn = btn_arrowsContainer.querySelector(".left");
    var rightBtn = btn_arrowsContainer.querySelector(".right");



    leftBtn.addEventListener("click", () => {
        if (activeImage.previousElementSibling) {
            activeImage.previousElementSibling.classList.add("active");
            activeImage.classList.remove("active");
            activeImage = activeImage.previousElementSibling;
        } else {
            activeImage.classList.remove("active");
            activeImage = images[images.length - 1];
            activeImage.classList.add("active");
        }
        activeImage.scrollIntoView({ behavior: "smooth", block: "center" });
    });


    rightBtn.addEventListener("click", () => {
        if (activeImage.nextElementSibling) {
            activeImage.nextElementSibling.classList.add("active");
            activeImage.classList.remove("active");
            activeImage = activeImage.nextElementSibling;
        } else {
            // If it's the last image, go to the first image
            activeImage.classList.remove("active");
            activeImage = images[0];
            activeImage.classList.add("active");
        }

        // Scroll to the active image
        activeImage.scrollIntoView({ behavior: "smooth", block: "center" });
    });
}

ToogleImages()
