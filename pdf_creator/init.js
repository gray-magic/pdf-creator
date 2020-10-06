


  

function Export_PDF() {
    try {

        let doc = new jsPDF('p', 'mm', 'a4');

        let max = $('#max').val();
        for (let i = 1; i <= max; i++) {
            let img = new Image()
            img.src = 'img/' + i + '.jpg';
            doc.addImage(img, 'jpg', 0, 0);
            if(i != max) doc.addPage();
        }

        doc.save('export.pdf')
    } catch (e) {
        alert(e);
    } finally {

    }
}


function Preview(in_Path){
    try {
        $('#maximize').fadeOut(250,function(){
            $('#maximize').attr("src",in_Path);
            $('#maximize').fadeIn(250,function(){});
        });
        
    } catch (e) {
        alert(e);
    } finally {
        
    }
}