class KTProductsCreate {
    static init() {
        let variantContainers = document.querySelectorAll(
            ".product-variants-container"
        );

        variantContainers.forEach((container) => {
            let inputs = container.querySelectorAll(".product-variant-input");
            inputs.forEach((input) => {
                KTProductsCreate.renderInput(input);
            });
        });
    }

    /**
     *
     * @param {HTMLInputElement} targetInput
     */
    static renderInput(targetInput) {
        targetInput.classList.add(
            "form-control",
            "form-control-transparent",
            "form-contrl-90",
            "border",
            "border-light"
        );
    }

    /**
     *
     * @param {string} containerSelector
     */
    static appendInput(containerSelector) {
        let input = document.createElement("input");
        input.type = "text";
        input.className = 'product-variant-input';
        document.querySelector(containerSelector).append(input);
        KTProductsCreate.renderInput(input);
    }
}

window.KTProductsCreate = KTProductsCreate;

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTProductsCreate.init();
});
