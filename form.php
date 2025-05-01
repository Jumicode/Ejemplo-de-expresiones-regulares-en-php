<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejemplo de expresiones regulares</title>
  <style>
    .container { display: flex; }
    .half { flex: 1; padding: 20px; box-sizing: border-box; }
    .left { background: #f0f8ff; }
    .right { background: #fff8f0; }
    form label { display: block; margin-bottom: 8px; }
    input { width: 100%; padding: 6px; margin-bottom: 12px; }
  </style>
</head>
<body>
  <div class="container">
    <div class="half left">
      <h2>Formulario CON Regex</h2>
      <form method="post">
        <input type="hidden" name="with_regex" value="1">
        <label>Username: <input type="text" name="username"></label>
        <label>Email:    <input type="email" name="email"></label>
        <label>Teléfono:<input type="text" name="phone"></label>
        <label>Password:<input type="password" name="password"></label>
        <button type="submit">Enviar</button>
      </form>
    </div>
    <div class="half right">
      <h2>Formulario SIN Regex</h2>
      <form method="post">
        <input type="hidden" name="no_regex" value="1">
        <label>Username: <input type="text" name="username"></label>
        <label>Email:    <input type="text" name="email"></label>
        <label>Teléfono:<input type="text" name="phone"></label>
        <label>Password:<input type="password" name="password"></label>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>
</body>
</html>