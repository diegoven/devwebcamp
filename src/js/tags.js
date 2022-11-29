(function () {
  const tagsInput = document.getElementById("tags_input");

  if (tagsInput) {
    let tags = [];

    const tagsDiv = document.getElementById("tags");
    const tagsHiddenInput = document.querySelector('[name="tags"]');

    tagsInput.addEventListener("keypress", guardarTag);

    function guardarTag(e) {
      if (e.keyCode == 44) {
        if (e.target.value.trim() === "" || e.target.value < 1) return;

        e.preventDefault();
        tags = [...tags, e.target.value.trim()];
        tagsInput.value = "";

        mostrarTags();
      }
    }

    function mostrarTags() {
      tagsDiv.textContent = "";

      tags.forEach((tag) => {
        const etiqueta = document.createElement("li");
        etiqueta.classList.add("formulario__tag");
        etiqueta.textContent = tag;
        etiqueta.ondblclick = eliminarTag;

        tagsDiv.appendChild(etiqueta);
      });

      actualizarHiddenInput();
    }

    function eliminarTag(e) {
      e.target.remove();
      tags = tags.filter((tag) => tag !== e.target.textContent);
      console.log(tags);
      actualizarHiddenInput();
    }

    function actualizarHiddenInput() {
      tagsHiddenInput.value = tags.toString();
    }
  }
})();
