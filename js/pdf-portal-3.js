function ocultar() {
    document.getElementById("pdf_view").style.visibility = "hidden";
    document.getElementById("header-div").style.visibility = "visible";
}

function mostrar(valor) {
    document.getElementById("pdf_view").style.visibility = "visible";
    document.getElementById("header-div").style.visibility = "hidden";
    var options2 = {
        page: 2,
        pdfOpenParams: {
            navpanes: 1,
            view: "FitH",
            pagemode: "thumbs"
        }
    };
    PDFObject.embed(valor, "#pdf3", options2);

}