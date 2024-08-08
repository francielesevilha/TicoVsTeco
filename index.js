function saveToLocalStorage() {
  const player1 = document.getElementById('player1');
  const value1 = player1.value;

  const player2 = document.getElementById('player2');
  const value2 = player2.value;

  // Verifique se o navegador suporta o Local Storage
  if (typeof (Storage) !== "undefined") {
    // Salve o valor no Local Storage com uma chave específica (por exemplo, "meu_valor")
    localStorage.setItem("player1", value1);
    localStorage.setItem("player2", value2);

    console.log("Deu certo")

    let url = "./jogo/index.php";
    window.location.href = url;

  } else {
    alert("Seu navegador não suporta Local Storage.");
  }
}
