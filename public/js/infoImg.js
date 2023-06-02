let fileInput = document.querySelector("#fileimg");
let previewImg = document.querySelector("#previewImg");

fileInput.addEventListener("change", function () {
    if (fileInput.files && fileInput.files[0]) {
        let verImg = fileInput.files[0];

        let reader = new FileReader();
        reader.onload = function (e) {
            previewImg.onload = function () {
                console.log(
                    "Altura da imagem: " +
                        previewImg.naturalHeight +
                        " pixels e Largura da imagem: " +
                        previewImg.naturalWidth +
                        " pixels"
                );
            };
            previewImg.setAttribute("src", e.target.result);
        };
        reader.readAsDataURL(verImg);
    }
});
