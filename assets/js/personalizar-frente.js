//Cria o Quadro de Personalização
var canvas = new fabric.Canvas('c', {
    hoverCursor: 'pointer',
});
canvas.on({
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

$('#addTextButton').on('click', function () {
    var inText = $('#inputText').val();
    var newText = new fabric.IText(inText, {
        left: 5,
        top: 5,
        fontSize: 16
    });
    canvas.add(newText);
    $('#inputText').val('');
    $("#texteditor").css('display', 'none');
    $("#imageeditor").css('display', 'none');
});


//MUDA A FONT
function setFont(font) {
    var activeObject = canvas.getActiveObject();
    if (activeObject && activeObject.type === 'i-text') {
        activeObject.fontFamily = font;
        canvas.renderAll();
    }
}

//TEXTO NEGRITO
$("#text-bold").click(function () {
    var activeObject = canvas.getActiveObject();
    if (activeObject && activeObject.type === 'i-text') {
        activeObject.fontWeight = (activeObject.fontWeight == 'bold' ? '' : 'bold');
        canvas.renderAll();
    }
});


//TEXTO ITALICO
$("#text-italic").click(function () {
    var activeObject = canvas.getActiveObject();
    if (activeObject && activeObject.type === 'i-text') {
        activeObject.fontStyle = (activeObject.fontStyle == 'italic' ? '' : 'italic');
        canvas.renderAll();
    }
});


//TEXTO TACHADO
$("#text-strike").click(function () {
    var activeObject = canvas.getActiveObject();
    if (activeObject && activeObject.type === 'i-text') {
        activeObject.textDecoration = (activeObject.textDecoration == 'line-through' ? '' : 'line-through');
        canvas.renderAll();
    }
});


//TEXTO SUBLINHADO
$("#text-underline").click(function () {
    var activeObject = canvas.getActiveObject();
    if (activeObject && activeObject.type === 'i-text') {
        activeObject.textDecoration = (activeObject.textDecoration == 'underline' ? '' : 'underline');
        canvas.renderAll();
    }
});


//COR DO TEXTO
$('#text-fontcolor').minicolors({
    change: function (hex, rgb) {
        var activeObject = canvas.getActiveObject();
        //if (activeObject && activeObject.type === 'text') {
        activeObject.fill = this.value;
        canvas.renderAll();
        //}
    },
    open: function (hex, rgb) {
        //
    },
    close: function (hex, rgb) {
        //
    }
});

//EDITAR TEXTO E IMAGEM
function onObjectSelected(e) {
    $("#deletar").css('display', 'block');
    if ((e.target.get('type')) === "i-text") {
        $("#texteditor").css('display', 'block');
        $("#imageeditor").css('display', 'none');
    }
    if ((e.target.get('type')) === "image") {
        $("#imageeditor").css('display', 'block');
        $("#texteditor").css('display', 'none');
    }
}

function onSelectedCleared(e) {
    $("#texteditor").css('display', 'none');
    $("#deletar").css('display', 'none');
    $("#imageeditor").css('display', 'none');
}



/*--------------------------------------------------
IMAGEM
---------------------------------------------------*/
//Adiciona Imagem ao Canvas
$(".library .image-block").click(function (e) {
    var el = e.target;
    fabric.Image.fromURL(el.src, function (image) {
        image.scale(0.2).set({
            left: 10,
            top: 50,
            angle: 0,
            padding: 10,
            cornersize: 10,
            hasRotatingPoint: true
        });
        var objs = canvas.getObjects();
        if (objs.length) {
            objs.forEach(function (e) {
                if (e && e.type === 'image') {
                    e._element.src = el.src;
                    canvas.renderAll();
                }
            });
        } else canvas.add(image);

    });
    $("#imageeditor").css('display', 'none');
    $("#texteditor").css('display', 'none');
});


//Muda cor da imagem
$('#image-color').minicolors({
    change: setImageColor
});

function setImageColor() {
    color = $(this).val();
    selectedObject = canvas.getActiveObject();
    selectedObject.filters.push(new fabric.Image.filters.Tint({
        color: color
    }));
    selectedObject.applyFilters(canvas.renderAll.bind(canvas));
}


/*--------------------------------------------------
DELETAR ITEM
---------------------------------------------------*/
document.getElementById('remove-selected').onclick = function () {
    var activeObject = canvas.getActiveObject(),
        activeGroup = canvas.getActiveGroup();
    if (activeObject) {
        canvas.remove(activeObject);
    } else if (activeGroup) {
        var objectsInGroup = activeGroup.getObjects();
        canvas.discardActiveGroup();
        objectsInGroup.forEach(function (object) {
            canvas.remove(object);
        });
    }
};
