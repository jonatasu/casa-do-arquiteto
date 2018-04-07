//Cria o Quadro de Personalização
var canvas2 = new fabric.Canvas('d', {
    hoverCursor: 'pointer',
});
canvas2.on({
    'object:moving': function (e) {
        e.target.opacity = 0.5;
    },
    'object:modified': function (e) {
        e.target.opacity = 1;
    },
    'object:selected': onObjectSelected,
    'selection:cleared': onSelectedCleared
});

/*--------------------------------------------------
TEXTO
---------------------------------------------------*/

//INSERE TEXTO
$('#addTextButton2').on('click', function () {
    var inText2 = $('#inputText2').val();
    var newText2 = new fabric.IText(inText2, {
        left: 5,
        top: 5,
        fontSize: 16
    });
    canvas2.add(newText2);
    $('#inputText2').val('');
    $("#texteditor2").css('display', 'none');
    $("#imageeditor2").css('display', 'none');
});


//MUDA A FONT
function setFont2(font) {
    var activeObject = canvas2.getActiveObject();
    if (activeObject && activeObject.type === 'i-text') {
        activeObject.fontFamily = font;
        canvas2.renderAll();
    }
}


//TEXTO NEGRITO
$("#text-bold2").click(function () {
    var activeObject = canvas2.getActiveObject();
    if (activeObject && activeObject.type === 'i-text') {
        activeObject.fontWeight = (activeObject.fontWeight == 'bold' ? '' : 'bold');
        canvas2.renderAll();
    }
});


//TEXTO ITALICO
$("#text-italic2").click(function () {
    var activeObject = canvas2.getActiveObject();
    if (activeObject && activeObject.type === 'i-text') {
        activeObject.fontStyle = (activeObject.fontStyle == 'italic' ? '' : 'italic');
        canvas2.renderAll();
    }
});


//TEXTO TACHADO
$("#text-strike2").click(function () {
    var activeObject = canvas2.getActiveObject();
    if (activeObject && activeObject.type === 'i-text') {
        activeObject.textDecoration = (activeObject.textDecoration == 'line-through' ? '' : 'line-through');
        canvas2.renderAll();
    }
});


//COR DO TEXTO
$('#text-fontcolor2').minicolors({
    change: function (hex, rgb) {
        var activeObject = canvas2.getActiveObject();
        activeObject.fill = this.value;
        canvas2.renderAll();
    },
    open: function (hex, rgb) {},
    close: function (hex, rgb) {}
});

//EDITAR TEXTO
function onObjectSelected(e) {
    //$('.bloco-editar').fadeIn();
    $("#deletar2").css('display', 'block');
    if ((e.target.get('type')) === "i-text") {
        $("#texteditor2").css('display', 'block');
        $("#imageeditor2").css('display', 'none');
    }
    if ((e.target.get('type')) === "image") {
        $("#imageeditor2").css('display', 'block');
        $("#texteditor2").css('display', 'none');
    }
}

function onSelectedCleared(e) {
    $("#texteditor2").css('display', 'none');
    $("#deletar2").css('display', 'none');
    $("#imageeditor2").css('display', 'none');
}
/*--------------------------------------------------
IMAGEM
---------------------------------------------------*/
//Adiciona Imagem ao Canvas
$(".library2 .image-block").click(function (e) {
    var el2 = e.target;
    fabric.Image.fromURL(el2.src, function (image) {
        image.scale(0.2).set({
            left: 10,
            top: 50,
            angle: 0,
            padding: 10,
            cornersize: 10,
            hasRotatingPoint: true
        });
        var objs = canvas2.getObjects();
        if (objs.length) {
            objs.forEach(function (e) {
                if (e && e.type === 'image') {
                    e._element.src = el2.src;
                    canvas2.renderAll();
                }
            });
        } else canvas2.add(image);
    });
    $("#imageeditor2").css('display', 'none');
    $("#texteditor2").css('display', 'none');
});

//Muda cor da imagem
$('#image-color2').minicolors({
    change: setImageColor2
});

function setImageColor2() {
    color2 = $(this).val();
    selectedObject = canvas2.getActiveObject();
    selectedObject.filters.push(new fabric.Image.filters.Tint({
        color: color2
    }));
    selectedObject.applyFilters(canvas2.renderAll.bind(canvas2));
}


/*--------------------------------------------------
DELETAR ITEM
---------------------------------------------------*/
document.getElementById('remove-selected2').onclick = function () {
    var activeObject = canvas2.getActiveObject(),
        activeGroup = canvas2.getActiveGroup();
    if (activeObject) {
        canvas2.remove(activeObject);
    } else if (activeGroup) {
        var objectsInGroup = activeGroup.getObjects();
        canvas2.discardActiveGroup();
        objectsInGroup.forEach(function (object) {
            canvas2.remove(object);
        });
    }
};
