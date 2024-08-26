export function ToogleImages() {
    const Main_image_containers = document.querySelectorAll(".main_image_container");
    Main_image_containers.forEach((Main_image_container) => {
        initImagesList(Main_image_container);
    });

    function initImagesList(Main_image_container) {
        const imagesList = Main_image_container.querySelector(".image_list");
        var activeImage = imagesList.querySelector(".images_item.active");
        var images = imagesList.children;
        const imageWidth = images[0].offsetWidth;

        const btn_arrowsContainer = Main_image_container.querySelector(".left_arrow_right_arrow");
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
            // activeImage.scrollIntoView({ behavior: "smooth", block: "center" });
        });

    }
}
