<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROM PRODUCTS</title>
    <style>
.boton {
    background-color: #ffffff;
    border-radius: 15px;
    padding: 20px;
    margin-top: 6rem;
    box-shadow: 0px 2px 10px rgba(50, 43, 43, 0.1);

    
}
.formulario{
    background-color: white;
    border: 2px solid black;
    margin-left: 700px;
    padding: 70px;
    width: 20%;
    align-items: center;
    justify-content: center;
    

}
.formulario h2 {
    margin-bottom: 20px;
    padding-left: 100px;
    font-size: 30px;
}

.campo {
    margin-bottom: 20px;
}

.campo label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.campo input,
.campo textarea {
    width: 80%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.campo textarea {
    height: 100px;
}

.boton {
    text-align: center;
}


.boton button {
    background: gray;
    color: black;
    border: 2px solid black;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    
}

    </style>
</head>
<body>

<section class="formulario" >
        <h2>Form products</h2>
        <form class="campo" action="" method="post">
                <label for="nombre">NOMBRE:</label>
                <input type="text" id="nombre" name="nombre" required><br>

                <label for="MARCA">MARCA</label>
                <input type="text" id="brand" name="brand" required><br>

                <label for="description">DESCRIPCION:</label>
                <textarea id="description" name="description" required></textarea><br>

                <div class="unit-measure">
                    <label for="unit-measure">
                        Unit of measure
                    </label>
                    <select id="unit-measure" name="unit-measure">
                        <option value="unit">Unit</option>
                        <option value="other">Other</option>
                    </select>
                </div>


                <label for="available">DISPONIBLE:</label>
                <input type="radio"name="available" value="male" checked="UNIT"><br>

                <label for="vat_percentage">PORCENTAGE IVA</label>
                <input type="text" id="brand" name="brand" required><br>

                <label for="unit_price">PRECIO UNICO</label>
                <input type="text" id="unit_price" name="unit_price" required><br>

                <label for="stock">STOCK</label>
                <input type="text" id="stock" name="stock" required><br>


            <div class="boton">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </section>
</body>
</html>