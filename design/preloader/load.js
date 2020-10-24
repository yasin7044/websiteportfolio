//  JS for loader to fade away

window.addEventListener("load", () => {
    var preloader = document.getElementById("preloader");
    preloader.classList.add("preloaderFadeOut");
    //triggers after load complete
    setTimeout(() => {
        preloader.remove();
    }, 100)
});