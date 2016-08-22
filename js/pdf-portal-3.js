


        
        function ocultar() {
            document.getElementById("pdf_view").style.visibility = "hidden";
        }
        function mostrar(valor) {
            document.getElementById("pdf_view").style.visibility = "visible";
            var options2 = {
            page: 2
            , pdfOpenParams: {
                navpanes: 1
                , view: "FitH"
                , pagemode: "thumbs"
            }
        };
        PDFObject.embed(valor, "#pdf3", options2);
    
        }


        
