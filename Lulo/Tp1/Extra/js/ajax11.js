document.addEventListener("DOMContentLoaded", async function () {
    const productListContainer = document.getElementById("productListContainer");

    await loadProductList();

    async function loadProductList() {
        try {
            const response = await fetch("productos11.php");
            if (response.ok) {
                const productListHtml = await response.text();
                productListContainer.innerHTML = productListHtml;
            } else {
                console.error("Error al cargar la lista de productos.");
            }
        } catch (error) {
            console.error("Ocurrio un error:", error);
        }
    }
});
