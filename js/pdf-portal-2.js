
        var options = {
            page: 2
            , pdfOpenParams: {
                navpanes: 1
                , view: "FitH"
                , pagemode: "thumbs"
            }
        };
        PDFObject.embed("http://localhost/wp-content/uploads/2016/07/lineamientos.pdf", "#pdf1", options);
    


        
        function ocultar() {
            document.getElementById("pdf_view").style.visibility = "hidden";
        }
        function mostrar() {
            document.getElementById("pdf_view").style.visibility = "visible";
        }

