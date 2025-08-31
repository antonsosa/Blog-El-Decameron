# Blog El Decameron

Proyecto de blog sobre la obra literaria **El Decameron**.  
En este repositorio se incluyen fragmentos de código en **PHP** y **CSS** utilizados para personalizar un demo en WordPress con el tema **Kadence Child**.  
El propósito fue **mejorar la apariencia, la experiencia del usuario y reforzar la seguridad** del sitio.

---

## 📌 Modificaciones en CSS
- Identificación del tema **Kadence Child** para mantener cambios al actualizar el tema padre.
- Estilos agregados:
  - Transformación al pasar el mouse sobre imágenes.
  - Efecto de elevación y sombra en las tarjetas.
  - Transición suave en:
    - Botón del header.
    - Botones de acción.
    - Botón de ubicación.
  - Hover en el formulario de **Contáctanos**.

---

## 📌 Modificaciones en functions.php
- Carga de estilos del tema padre.
- Personalización del login:
  - Cambio de logo (manteniendo estilo de WordPress).
  - Cambio del link del logo para que apunte al **home**.
- Seguridad:
  - Bloqueo de acceso directo a `wp-login.php` y redirección al home.

---

## 🚀 Cómo usar este código
1. Instalar WordPress y el tema **Kadence**.  
2. Crear un **tema hijo (Kadence Child)** en httdocs > wp-content > themes.  
3. Copiar los fragmentos de código CSS y PHP en los archivos correspondientes.  
4. Activar el tema hijo y comprobar que los cambios se reflejen en el sitio.

---

✍️ *Este proyecto forma parte de mis prácticas de desarrollo web con WordPress, explorando personalización de temas, estilos y funciones a medida.*
