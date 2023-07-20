
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Suma vectorial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- El form -->
    <form action="calcVec.php" method="post" id="form">
        <label for="cantidad">Cantidad de vectores:</label>
        <input type="number" id="cantidad" name="cantidad"> 
        <button class="boton"id="crear_vectore">Crear vectores</button>
    </form>

    <script>
        const form = document.getElementById("form")     //Guardamos el form en una variable
        let seCrearonLosVectores = false
        
                                                        // Esta función de aqui va a ver cuando el form se suba, si no se han creado los inputs de los vectores los va a crear, sino, va a simplemente subir el formulario
        form.addEventListener("submit", (e) => {
            if (!seCrearonLosVectores) {
                e.preventDefault()
                let cantidad = document.getElementById("cantidad").value
                console.log(cantidad)
                form.innerHTML = ""

                for (let i = 0; i < cantidad; i++) {
                    let html = form.outerHTML
                    form.innerHTML = `${html} <label for="componente_x">Componente x del vector ${i}</label>
                    <input type="number" id="componente_x_vector_${i}"name="componente_x_vector_${i}">
                    <label for="componente_y">Componente y del vector ${i}</label>
                    <input type="number" id="componente_y_vector_${i}" name="componente_y_vector_${i}"> <br>`
                }

                const html = form.outerHTML
                form.innerHTML = `${html} <input type="submit" id="btn_calcular" value="calcular"> <br> <input type="hidden" id="cantidad" value="${cantidad}" name="cantidad_vectores">`
                
                seCrearonLosVectores = true
            } else {
                form.submit()
            }
        })
    </script>
</body>

</html>