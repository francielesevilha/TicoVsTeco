let currentPlayer = "X";
let moves = 0;
let gameEnded = false;

function makeMove(cell) {

  if (cell.innerHTML === "" && !gameEnded) {
    cell.innerHTML = currentPlayer;
    moves++;
    if (checkWin()) {
      player1 = localStorage.getItem("player1");
      player2 = localStorage.getItem("player2");

      if (currentPlayer === "X") {

        const modal = document.getElementById("myModal");
  
        modal.style.display = "block";

        document.getElementById("result").innerHTML = `${player1} venceu!`;
        localStorage.setItem("vencedor", player1);
        gameEnded = true;

      } else if (currentPlayer === "O") {

        const modal = document.getElementById("myModal");
 
        modal.style.display = "block";

        document.getElementById("result").innerHTML = `${player2} venceu!`;
        localStorage.setItem("vencedor", player2);
        gameEnded = true;
      }
    } else if (moves === 9) {

      localStorage.setItem("vencedor", "empate");

      const modal = document.getElementById("myModal");

      modal.style.display = "block";

      document.getElementById("result").innerHTML = "Empate!";
      gameEnded = true;

    } else {

      currentPlayer = currentPlayer === "X" ? "O" : "X";

    }
  }
}

function checkWin() {
  const cells = document.querySelectorAll("td");
  const winningCombos = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8], // Linhas
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8], // Colunas
    [0, 4, 8],
    [2, 4, 6], // Diagonais
  ];

  for (const combo of winningCombos) {
    const [a, b, c] = combo;
    if (
      cells[a].innerHTML &&
      cells[a].innerHTML === cells[b].innerHTML &&
      cells[a].innerHTML === cells[c].innerHTML
    ) {
      return true;
    }
  }
  return false;
}

async function Proxima() {
  vencedor = localStorage.getItem("vencedor");

  const form = document.createElement("form");
  form.action = "../server/index.php";
  form.method = "POST";
  form.style.display = "none";

  form.innerHTML = `<input type="hidden" name="nome" value="${
    vencedor || ""
  }">`;

  document.body.appendChild(form);

  try {
    form.submit();
    console.log("Formulário enviado com sucesso!");
  } catch (error) {
    console.error("Erro ao enviar o formulário:", error);
  }
}
